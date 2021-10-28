<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\IngresarCursoModelo;
class IngresarCurso extends BaseController
{

  public function __construct() {
        helper(['form', 'url','funciones']);
                            
    }
  public function index()
  {
      $modelo = new IngresarCursoModelo($db);
     $data['combocategoria']=generarcombocategoriacurso($modelo->combocategoria());
    return view('headerRegistro').view('ingresarCurso',$data).view('footer');
  }
  
public function doList(){
    $cadena="";
      $respuesta=array();         
     $modelo = new IngresarCursoModelo($db);   
     $lista=$modelo->listar();
     foreach ($lista as $row) {

        $cadena.= '<div class="col-md-4">';
                  $cadena.= '<div class="card" style=" margin: 5px;" >';
                    $cadena.= '<div class="card-header">';
                     $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-body">';
                      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-footer">';
                      $cadena.= '<h5 class="card-title" style="font-size: 12px;text-align: center;">'.$row['v4'] .'</h5>';
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
            'nombre2' => [
            'rules'  => 'required|min_length[5]|max_length[50]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Nombre.',
                'min_length' => 'El Nombre o Debe ser menos de 5 carateres',
             'max_length' => 'El Nombre no Debe ser mayor de 50 carateres',
             'alpha' => 'El nombre solo debe ser letras',                   
            ]
             ]         
            ,
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg,image/png]',
                'max_size[foto,1024]',
                'errors' => [
                'uploaded' => 'No se envio una imagen',
                'mime_in' => 'No se envio un formato aceptado(jpg,jpeg,png)',
                 'max_size' => 'La imagen no debe exceder de 1Mb'                
              ]
            ],
            'botoncurso' => [
            'rules'  => 'required|min_length[5]|max_length[50]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Nombre para el Boton.',
                'min_length' => 'El Nombre para el boton no debe ser menos de 5 carateres',
             'max_length' => 'El Nombre para el boton no debe ser mayor de 50 carateres',
            'alpha' => 'El Nombre del boton solo debe ser letras'                 
            ]
             ]         
            ,
            'descripcion' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'No debe el Referencia ser vacio'
                
              ]
            ],
            'categoriac' => 'required|numeric'
            
                        
        ]);

       if (!$input) {
         $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
                $nombre= $request->getPostGet('nombre2') ;
                $img = $this->request->getFile('foto'); 
                $fot = $img->getRandomName();
                $img->move(ROOTPATH.'resources/img',$fot);
                $boton= $request->getPostGet('botoncurso') ;
                $des= $request->getPostGet('descripcion') ;
                $fecha= $request->getPostGet('fecha2') ;
                $cat= $request->getPostGet('categoriac') ;
              $data = array($nombre,$fot,$boton,$des,$fecha,$cat); 
              $modelo = new IngresarCursoModelo($db); 
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
