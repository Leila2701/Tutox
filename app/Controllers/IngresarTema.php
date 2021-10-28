<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\IngresarTemaModelo;
class IngresarTema extends BaseController
{

  public function __construct() {
        helper(['form', 'url','funciones']);
                            
    }
  public function index()
  {
      $modelo = new IngresarTemaModelo($db);
     $data['combocurso']=generarcombocurso($modelo->combocurso());
    return view('headerRegistro').view('ingresarTema',$data).view('footer');
  }
  
public function doList(){
    $cadena="";
      $respuesta=array();         
     $modelo = new IngresarTemaModelo($db);   
     $lista=$modelo->listar();
     foreach ($lista as $row) {

        $cadena.= '<div class="col-md-4">';
                  $cadena.= '<div class="card" style=" margin: 5px;" >';
                    $cadena.= '<div class="card-header">';
                     $cadena.=  '<h5 class="card-title" style="font-size: 12px;text-align: center;">'.$row['v1'] .': '.$row['v2'] .'</h5>';
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-body">';
                      $cadena.='<div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="'.$row['v3'] .'"></iframe>
                    </div>';              
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-footer">';
                      $cadena.= '<h5 class="card-title" style="font-size: 14px;text-align: center;">'.$row['v4'] .'</h5>';
                    $cadena.= '</div>';
                  $cadena.= '</div>';
                $cadena.= '</div>';
     }
      $respuesta['data']= $cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}  

public function doSave()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          
    
      $input = $this->validate([
            'capitulo' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'No debe estar vacio el capitulo'
                
              ]
            ],

            'nombre2' => [
            'rules'  => 'required|min_length[5]|max_length[50]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Nombre.',
                'min_length' => 'El Nombre no Debe ser menos de 5 carateres',
             'max_length' => 'El Nombre no Debe ser mayor de 50 carateres',
             'alpha' => 'El Nombre debe tener solo letras'                   
            ]
             ]         
            ,
            'url' => [
            'rules'  => 'required|valid_url',
            'errors' => [
                'required' => 'No debe el url ser vacio',
                'valid_url' => 'El url debe ser valido'
              ]
            ],
            'duracion' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'No debe la duracion ser vacio'
                
              ]
            ],

            'curso' => 'required|numeric'
            
                        
        ]);

       if (!$input) {
         $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
                $capitulo= $request->getPostGet('capitulo') ;
                $nom= $request->getPostGet('nombre2') ;
                $url= $request->getPostGet('url') ;
                $dur= $request->getPostGet('duracion') ;
                $cur= $request->getPostGet('curso') ;
              $data = array($capitulo,$nom,$url,$dur,$cur); 
              $modelo = new IngresarTemaModelo($db); 
               if($modelo->registrar($data)){
                 $respuesta['error']="";
                  $respuesta['ok'] = "Operacion realizada";
              }else{
                  $respuesta['error'] = "Problemas al realizar operacion!!";
              }
                 

            
        }


        

    header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
    

  }
  //--------------------------------------------------------------------

}
