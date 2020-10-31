<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PersonaModelo;
class Portada extends BaseController
{
  public function __construct() {
      helper(['form', 'url']);
                            
    }
  public function index()
  {
    return view('header').view('portada').view('footer');
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
  public function CursoWord()
  {
    return view('header').view('CursoWord').view('footer');
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
  public function CursoCorel()
  {
    return view('header').view('CursoCorel').view('footer');
  }   
  public function CursoSQL()
  {
    return view('header').view('CursoSQL').view('footer');
  }    
  public function CursoPHP()
  {
    return view('header').view('CursoPHP').view('footer');
  } 
  public function CursoPhotoshop()
  {
    return view('header').view('CursoPhotoshop').view('footer');
  }       
  public function doList()
  {
      $respuesta=array(); 
      $modelo = new PersonaModelo($db);  
      $respuesta['data']=$modelo->mlistar();
      header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}
  
  public function doSave()
  {

    $validation =  \Config\Services::validation();
    $respuesta = array();

      $input = $this->validate([

            'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[50]',
            'errors' => [
                'required' => 'Debe ingresar un Nombre.',
                'min_length' => 'El Nombre o Debe ser menos de 5 carateres',
             'max_length' => 'El Nombre no Debe ser mayor de 50 carateres'                   
            ]
             ]         
            ,
            'apellidos' => [
            'rules'=>'required|min_length[5]|max_length[45]',
            'errors' => [
                'required' => 'Debe ingresar un Apellido.',
                'min_length' => 'El Apellido No Debe ser menos de 5 carateres',
             'max_length' => 'El Apellido no Debe ser mayor de 45  carateres'                   
            ]
             ]         
            ,
            'correo' => [
            'rules'=>'required|min_length[5]|max_length[45]|valid_email',
            'errors' => [
                'required' => 'Debe ingresar un Correo Electronico.',
                'min_length' => 'El Correo Electronico No Debe ser menos de 5 carateres',
             'max_length' => 'El Correo Electronico No Debe ser mayor de 45  carateres',
             'valid_email'=>'Debe ingresar un correo electronico'
            ]
             ]         
            ,
            'dir' => [
            'rules'=>'required|min_length[5]|max_length[45]',
            'errors' => [
                'required' => 'Debe ingresar un Direccion.',
                'min_length' => 'La Direccion No Debe ser menos de 5 carateres',
             'max_length' => 'La Direccion No Debe ser mayor de 45  carateres'                   
            ]
             ]         
            ,
            'tel' => [
            'rules'=>'required|exact_length[9]|is_natural',
             'errors' => [
                'required' => 'Debe ingresar un telefono.',
                'exact_length' => 'Debe ser de 9 digitos'
            ]
             ]           
            ,

            'fecha' => [
            'rules'=>'required',
               'errors' => [
                'required' => 'Debe ingresar un Fecha Nacimiento.'
                ]
             ]         
            ,

            'dni' => [
            'rules'  => 'required|exact_length[8]|is_natural',
            'errors' => [
                'required' => 'Debe ingresar un DNI.',
                'exact_length' => 'Debe ser de 8 digitos'
            ]
             ]           
            ,
            'sexo' => [
            'rules'=>'required|numeric',
               'errors' => [
                'required' => 'Debe una seleccionar un Sexo.',
                'numeric' => 'Debe una seleccionar un Sexo'
            ]
             ]           
            ,

        ]);

       if (!$input) {
        $respuesta['error'] = $this->validator->listErrors() ;
        /*echo view('portada', [
                'validation' => $this->validator
            ]);*/
            
        } else {
           $request =  \Config\Services::request();
            $dni= $request->getPostGet('dni') ;  
            $nombre= $request->getPostGet('nombre') ;
              $apel= $request->getPostGet('apellidos') ;
              $corr= $request->getPostGet('correo') ;
              $fec= $request->getPostGet('fecha') ;
              $sexo= $request->getPostGet('sexo') ;
              $dir= $request->getPostGet('dir') ;
              $tel= $request->getPostGet('tel') ;
              $data = array($dni,$nombre,$apel,$corr,$fec,$sexo,$dir,$tel);      
               $modelo = new PersonaModelo($db);  
               if($modelo->mregistrar($data)){
                 $respuesta['error'] = "";
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

