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
    return view('header').view('Cursos').view('footer');
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
            'rules'=>'required|exact_length[9]',
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
            'rules'  => 'required|exact_length[8]',
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
