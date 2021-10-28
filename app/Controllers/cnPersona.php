<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PersonaModelo;
class cnPersona extends BaseController
{
  public function __construct() {
    helper(['form', 'url']);
    
  }
  
  public function index()
  {
    return view('registro');
  }
  public function validacionregistro()
  {
    return view('registroVerificacion');
  }
  public function validacionrestauracion()
  {
    return view('restaurarcontraseña');
  }
  public function validacioncontraseña()
  {
    return view('verificacioncontraseña');
  }
  
  public function foto()
  {
    return view('header').view('registrofoto').view('footer');
  }

 

    public function doSavePersona()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();

    $input = $this->validate([

      'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[50]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Nombre.',
                'min_length' => 'El Nombre o Debe ser menos de 5 carateres',
             'max_length' => 'El Nombre no Debe ser mayor de 50 carateres',
             'alpha' => 'El campo nombre no debe contener numeros'                   
            ]
             ]         
            ,
            'apellidos' => [
            'rules'=>'required|min_length[5]|max_length[45]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Apellido.',
                'min_length' => 'El Apellido No Debe ser menos de 5 carateres',
             'max_length' => 'El Apellido no Debe ser mayor de 45  carateres',
             'alpha' => 'El campo apellido no debe contener numeros'                   
            ]
             ]         
            ,
            'correo' => [
            'rules'=>'required|min_length[5]|max_length[45]|is_unique[persona.per_corr]|valid_email',
            'errors' => [
              'required' => 'Debe ingresar un Correo Electronico.',
              'min_length' => 'El Correo Electronico No Debe ser menos de 5 carateres',
             'max_length' => 'El Correo Electronico No Debe ser mayor de 45  carateres',
             'is_unique' => 'Este Correo ya esta registrado',
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
            'rules'  => 'required|exact_length[8]|is_unique[persona.per_dni]|is_natural',
            'errors' => [
                'required' => 'Debe ingresar un DNI.',
                'is_unique' => 'Este DNI ya esta registrado',
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
            'cat'=>'required',

        ]);

    if (!$input) {
      $respuesta['error'] = $this->validator->listErrors() ;
        /*echo view('portada', [
                'validation' => $this->validator
              ]);*/
              
            } else {
             $request =  \Config\Services::request();
             
             $nombre= $request->getPostGet('nombre') ;
             $apel= $request->getPostGet('apellidos') ;
             $dni= $request->getPostGet('dni') ; 
             $corr= $request->getPostGet('correo') ;
             $fec= $request->getPostGet('fecha') ;
             $sexo= $request->getPostGet('sexo') ;
             $dir= $request->getPostGet('dir') ;
             $tel= $request->getPostGet('tel') ;
             $cat=$request->getPostGet('cat');
             $data = array($nombre,$apel,$dni,$corr,$fec,$sexo,$dir,$tel,$cat);      
             $modelo = new PersonaModelo($db);  
             if($modelo->mregistrar($data)){

              /*configuracion del correo*/
              $to=$corr;
              $subject='Verificacion de cuenta';
              $mensaje='<div  style="height: 200vh;width: 500px;text-align: center;height:auto;margin: 10% auto;border:0; background:#F6EBF5;">
              <div class="header" style="background:#F9D7F5;border:0;font-weight: bold;">
              <h1>Tutox</h1>
              </div>
              <div class="body" style="background:#F6EBF5;border:0;">
              <h2>Tu inscripcion a sido existosa!!!</h2>
              <h1>Bienvenido '.$nombre.'!</h1>
              <p>Gracias por elegir Tutox como tu plataforma educativa virtual</p><br>
              <p><strong>Tu cuenta:</strong> '.$corr.'</p>
              <br>
             
              
              <img src="https://1.bp.blogspot.com/-KDr9t4nhSl0/X6DB_NEFxrI/AAAAAAAAAGQ/l9Me4T6J3D0uOF_Gl9yvKMzcXZ9Ww-pYACLcBGAsYHQ/s0/tutox.png" width="200px" height="200px">
              </div>
              <div class="footer" style="background:#F9D7F5;">
              <a href="http://localhost/Tutox/Login/Generarclave"><H1>Generar Clave</H1></a>
              <h3><strong>Saludos</strong></h3>
              </div>
              </div>';

              $email=\Config\Services::email();
              $email->setTo($to);
              $email->setFrom($corr,'info');
              $email->setSubject($subject);
              $email->setMessage($mensaje);  
              if($email->send()){
               $respuesta['error'] = "";
               //$respuesta['ok'] = "Operacion realizada";
             }else
             {
              $data=$email->printDebugger(['headers']);
              print_r($data);
            }   
          }else{
            $respuesta['error'] = "Problemas al realizar operacion!!";
          }    

          


        }


        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
        
  }

   public function doSaveModificarDatos(){
    $validation =  \Config\Services::validation();
    $respuesta = array();
    $input = $this->validate([

      'nombre' => [
            'rules'  => 'required|min_length[5]|max_length[50]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Nombre.',
                'min_length' => 'El Nombre o Debe ser menos de 5 carateres',
             'max_length' => 'El Nombre no Debe ser mayor de 50 carateres',
             'alpha' => 'El campo nombre no debe contener numeros'                   
            ]
             ]         
            ,
            'apellidos' => [
            'rules'=>'required|min_length[5]|max_length[45]|alpha',
            'errors' => [
                'required' => 'Debe ingresar un Apellido.',
                'min_length' => 'El Apellido No Debe ser menos de 5 carateres',
             'max_length' => 'El Apellido no Debe ser mayor de 45  carateres',
             'alpha' => 'El campo apellido no debe contener numeros'                   
            ]
             ]         
            ,
            'dni' => [
            'rules'=>'required',
               'errors' => [
                'required' => 'Debe ingresar un DNI.'
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

           
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg,image/png]',
                'max_size[foto,1024]',
                'errors' => [
                'uploaded' => 'No se envio una imagen',
                'mime_in' => 'No se envio un formato aceptado(jpg,jpeg,png)',
                 'max_size' => 'La imagen no debe exceder de 1Mb'                
              ]
            ]

        ]);

      if (!$input) {
         $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
             $request =  \Config\Services::request();  
             $dni= $request->getPostGet('dni') ;
             $nombre= $request->getPostGet('nombre') ;
             $apel= $request->getPostGet('apellidos') ;
             $fec= $request->getPostGet('fecha') ;
             $dir= $request->getPostGet('dir') ;
             $tel= $request->getPostGet('tel') ;
             $img = $this->request->getFile('foto'); 
             $fot = $img->getRandomName();
             $img->move(ROOTPATH.'resources/img',$fot);
             $data = array($dni,$nombre,$apel,$fec,$dir,$tel,$fot); 
              $modelo = new PersonaModelo($db); 
               if($modelo->mCambiarDatosPerfil($data)){
                 $respuesta['error']="";
                  $respuesta['ok'] = "Operacion realizada";
              }else{
                  $respuesta['error'] = "Problemas al realizar operacion!!";
              }
                 
                
        }


        

    header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));

  }
}  

    

    

    

        

