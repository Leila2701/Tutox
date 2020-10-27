<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\WordModelo;
class Word extends BaseController
{
  public function __construct() {
      helper(['form', 'url']);
                            
    }
  public function index()
  {
    return view('header').view('CursoWord').view('footer');
  }
  public function cursos()
  {
    return view('header').view('curso').view('footer');
  }
  public function somos()
  {
    return view('header').view('QuienesSomos').view('footer');
  }
  public function foro()
  {
    return view('header').view('foro').view('footer');
  }
  
  public function CursoExcel()
  {
    return view('header').view('CursoExcel').view('footer');
  }
  public function CursoPowerPoint()
  {
    return view('header').view('CursoPowerPoint').view('footer');
  }
  public function CursoInDesign()
  {
    return view('header').view('CursoInDesign').view('footer');
  }
  public function CursoFacebook()
  {
    return view('header').view('CursoFacebook').view('footer');
  }
  public function CursoProgramacion()
  {
    return view('header').view('CursoProgramacion').view('footer');
  }
    public function doList(){
    $cadena="";
      $respuesta=array();         
     $modelo = new WordModelo($db);   
     $lista=$modelo->listar();
     foreach ($lista as $row) {
       $cadena.='<table>';
       $cadena.='<tr><td rowspan="2"><img src="'.base_url().'/resources/img/contacto.png" style="width:60px; height:60px;border-radius:50%;margin:10px;" alt=""></td>';
       $cadena.=' <td>'.$row['v3'] .'</td>';
       $cadena.='<td>'.$row['v5'] .'</td></tr>';
       $cadena.='<tr><td colspan="2">'.$row['v4'] .'</td></tr>';
       $cadena.='<tr><br></tr>';
       $cadena.='</table>';
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

            
            'comentario' => [
            'rules'  => 'required',
            'errors' => [
                'required' => 'No debe estar el Comentario vacio'
                
              ]
            ]
                 
          
            
        ]);

       if (!$input) {
        $respuesta['error'] = $this->validator->listErrors() ;
        /*echo view('portada', [
                'validation' => $this->validator
            ]);*/
            
        } else {
           $request =  \Config\Services::request();
            $idPer= $request->getPostGet('idPer') ;  
            $nombre= $request->getPostGet('nombre2') ;
            $comentario= $request->getPostGet('comentario') ;
            $fecha= $request->getPostGet('fecha');
          
            $data = array($idPer,$nombre,$comentario,$fecha);      
            $modelo = new WordModelo($db);  
               if($modelo->mregistrar($data)){
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
