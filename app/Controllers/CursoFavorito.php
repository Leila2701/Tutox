<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CursoFavoritoModelo;
class CursoFavorito extends BaseController
{

  public function __construct() {
        helper(['form', 'url']);                        
    }
  
 	public function obtenerDatoCurso($id){
 		
 		 // $request =  \Config\Services::request();
             $arrayName = $id;
              $modelo = new CursoFavoritoModelo($db); 
              $resultado=$modelo->obtenerDatoCurso($arrayName);
              $datos=["datos"=>$resultado];

             return view('headerRegistro').view('cursofavorito',$datos).view('footer');
                //echo print_r($datos);

 	}

   public function obtenerCursoFavorito($id){
  
            $arrayName = array($id);
            $modelo = new CursoFavoritoModelo($db); 
            $resultado=$modelo->listar_cursos_favoritos($arrayName);
            $datos=["datos"=>$resultado];
        return view('headerRegistro').view('favorito',$datos).view('footer');
              
     } 

  public function EliminarCurso(){

         $validation =  \Config\Services::validation();
    $respuesta = array();
          $input = $this->validate([
            'idper' =>   'required',          
            'idcurso' => 'required',
            
        ]);

       if (!$input) {
          echo view('curso', [
                'validation' => $this->validator
            ]);
  
        } else {
                $request =  \Config\Services::request();
              $idcurso= $request->getPostGet('idcurso') ;
              $idpersona= $request->getPostGet('idper') ;              
              $data = array($idcurso,$idpersona);
              $modelo = new CursoFavoritoModelo($db); 
              $resultado=$modelo->eliminar_curso_favorito($data);
              if(isset($resultado) ){
                $respuesta['error']="";
                  $respuesta['ok'] = "Se elimino Correctamente";
                      $jus= base_url().'/obtenerCursoFavorito/'.$idpersona;
                      header('Location: '.$jus);
                      exit();  

                            
              }else{
                echo  view('curso', [
                'validation' => $this->validator
            ]);
                
                          
                   }
                              

            
        }

  }   

  public function doSaveRegistrarMatriculaCurso()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();

    $input = $this->validate([
       'idcurso'=>'required',
        'idper'=>'required',
        ]);

    if (!$input) {
      $respuesta['error'] = $this->validator->listErrors() ;
        /*echo view('portada', [
                'validation' => $this->validator
              ]);*/
              
            } else {
             $request =  \Config\Services::request();
             
             $curso= $request->getPostGet('idcurso') ;
             $corr= $request->getPostGet('idper') ;
            
             $data = array($curso,$corr);      
             $modelo = new CursoFavoritoModelo($db);  
             if($modelo->registrarCursoFavorito($data)){

              /*configuracion del correo*/
            
               $respuesta['error'] = "";
               $respuesta['ok'] = "Operacion realizada";
           
          }else{
            $respuesta['error'] = "Ya se encuentra agregado en tus favoritos!!!";
          }    

        }

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
        
  } 

}
