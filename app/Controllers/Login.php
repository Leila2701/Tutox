<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModelo;
class Login extends BaseController
{

  public function __construct() {
        helper(['form', 'url']);
                            
    }
  public function index()
  {
   return view('login');
  }

  public function inicio()
  {
    return view('headerRegistro').view('portada').view('footer');
  }
  public function somos()
  {
    return view('headerRegistro').view('QuienesSomos').view('footer');
  }
  public function cursos()
  {
    return view('headerRegistro').view('curso').view('footer');
  }

  /*VISTA DE GENERA CLAVE DE ACCESO*/
  public function Generarclave()
  {
  return view('generarClave');
  }

  public function modificarContraseña()
  {
    return view('headerRegistro').view('modificarcontraseña').view('footer');
  
  }
  public function Perfil()
  {
    return view('headerRegistro').view('perfil').view('footer');
  
  }
  public function OlvidoContraseña()
  {
    return view('nuevaContraseña');
  }
    public function viewToken()
  {
    return view('validartokenpass');
  }

  public function Administrador()
  {
    return view('headerRegistro').view('administrador').view('footer');
  
  }
 
public function doList(){
    $respuesta=array();         
     $modelo = new PersonaModelo($db);   
     $respuesta['data']=$modelo->listar();
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}

public function doLogin()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          $input = $this->validate([
            'user' =>  [
                    'rules'  => 'valid_email|required|max_length[30]',
                    'errors' => [
                      'required' => 'Debes Ingresar un Usuario.',
                      'max_length' => 'El usuario Debe contener hasta 20 letras'
                                ]
                      ],            
            'pass' => 'required|min_length[5]|max_length[50]',
            
        ]);

       if (!$input) {
          echo view('login', [
                'validation' => $this->validator
            ]);
  
        } else {
                $request =  \Config\Services::request();
              $user= $request->getPostGet('user') ;
              $pass= $request->getPostGet('pass') ;              
              $data = array($user,password_hash($pass, PASSWORD_DEFAULT));
              $modelo = new LoginModelo($db); 
              $resultado=$modelo->login($data);
              if(isset($resultado) && password_verify($pass,$resultado->v10)){
                $respuesta['error']="";
                  $respuesta['ok'] = "Login realizada";
                   $newdata=[
                      'nombre'  => $resultado->v1,
                      'ape' => $resultado->v2,
                      'dni' => $resultado->v3,
                      'fecha' => $resultado->v4,
                      'sex' => $resultado->v5,
                      'tel' => $resultado->v6,
                      'tipop' => $resultado->v7,
                      'iduser' => $resultado->v8,
                      'email' => $resultado->v9,
                      'con'=>$resultado->v10,
                      'dire'=>$resultado->v11,
                      'foto' => $resultado->v12
                    ];
                     $this->session->set($newdata);
                    $p=array($resultado->v7);
                     $paginas=$modelo->paginas($p);
                     $newpag=[
                        'paginas' => $paginas
                     ]; 
                     $this->session->set($newpag);
                      $jus= base_url().'/Login/Administrador';
                      header('Location: '.$jus);
                      exit();  

                            
              }else{
                echo view('login', [
                'validation' => 'Acceso incorrecto'
                ]);
                
                          
              }
                              

            
        }

  }


  

    public function doSaveLogin()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          $input = $this->validate([
            'user' =>  [
                    'rules'  => 'valid_email|required|max_length[30]',
                    'errors' => [
                      'required' => 'Debes Ingresar un Usuario.',
                      'max_length' => 'El usuario Debe contener hasta 20 letras'
                                ]
                      ],            
            'pass' => 'required|min_length[5]|max_length[50]',
            
        ]);

       if (!$input) {
        $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
              $user= $request->getPostGet('user') ;
              $pass= $request->getPostGet('pass') ;
              $pass2= $request->getPostGet('pass2') ;
                             
              $data = array($user,password_hash($pass,PASSWORD_BCRYPT));
              $modelo = new LoginModelo($db);
       
                if($modelo->registrarlogin($data)){
                    if($pass==$pass2)
                                {
                      $respuesta['error']="";
                      $respuesta['ok'] = "Login realizada";
                   }else
                   {
                      $respuesta['error'] = "CONTRASEÑA NO COINCIDEN";
                   }
             
                            
              }else{
                $respuesta['error'] = "Problemas al realizar operacion!!";
        
                
                          
                   }
            
        }

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
        
  }


    public function doSaveLoginModificar()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          $input = $this->validate([
            'user' =>  [
                    'rules'  => 'valid_email|required|max_length[30]',
                    'errors' => [
                      'required' => 'Debes Ingresar un Usuario.',
                      'max_length' => 'El usuario Debe contener hasta 20 letras'
                                ]
                      ],            
            'pass' => 'required|min_length[5]|max_length[50]',
            
            'pass2' => 'required|min_length[5]|max_length[50]',
            'pass3' => 'required|min_length[5]|max_length[50]',
            
        ]);

       if (!$input) {
        $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
              $user= $request->getPostGet('user') ;
              $pass= $request->getPostGet('pass') ;
              $pass2= $request->getPostGet('pass2') ;   
              $pass3= $request->getPostGet('pass3') ;              
              $data = array($user,password_hash($pass2, PASSWORD_BCRYPT));
              $modelo = new LoginModelo($db);
              $resultado=$modelo->login($data);
                if($modelo->modificarloginclave($data)){
                    if(isset($resultado) && password_verify($pass,$resultado->v10)){
                        if ($pass2==$pass3) {
                          
                            $respuesta['error']="";
                            $respuesta['ok'] = "Login realizada";
                        }else{
                          $respuesta['error'] = "LAS NUEVAS CONTRASEÑAS NO COINCIDEN";
                        }
                      $respuesta['error']="";
                      $respuesta['ok'] = "Login realizada";
                   }else
                   {
                      $respuesta['error'] = "CONTRASEÑA ACTUAL ERRONEA";
                   }
             
                            
              }else{
                $respuesta['error'] = "Problemas al realizar operacion!!";      
                   }
            
        }

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
        
  }
  
public function doSaveToken()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();

    $input = $this->validate([

      'user' =>  [
        'rules'  => 'valid_email|required|max_length[30]',
        'errors' => [
          'required' => 'Debes Ingresar un Usuario.',
          'max_length' => 'El usuario Debe contener hasta 20 letras'
                    ]
          ], 
 
        ]);

    if (!$input) {
      $respuesta['error'] = $this->validator->listErrors() ;
        /*echo view('portada', [
                'validation' => $this->validator
              ]);*/
             // $respuesta['error'] = "Problemas al realizar operacion!!";
            } else {
             $request =  \Config\Services::request();
             
             $corr= $request->getPostGet('user') ;
             $data = array($corr);      
             $modelo = new LoginModelo($db);  
            
           
             if($modelo->GenerarClaveToken($data)){
              /*configuracion del correo*/
              $respuesta['error'] = "Problemas dentro del gmail!!";
           }else{
             $respuesta['error'] = "Problemas al realizar operacion!!";
           //---------------
          $resultado=$modelo->enviartokenCorr($data);
           $to=$corr;
           $subject='Restaurar contraseña';
           $mensaje='<div  style="height: 200vh;width: 500px;text-align: center;height:auto;margin: 10% auto;border:0; background:#F6EBF5;">
           <div class="header" style="background:#F9D7F5;border:0;font-weight: bold;">
           <h1>Tutox</h1>
           </div>
           <div class="body" style="background:#F6EBF5;border:0;">
           <h2>Restraurar Contraseña</h2>
           <h1>Correo de recuperación '.$corr.'!</h1>
           <p>Con el token generado podras restaurar tu contraseña</p><br>
           <h2><strong>Token:</strong>'.$resultado->v2.' </h2>
           <br>
           </div>
           <div class="footer" style="background:#F9D7F5;">
           <a href="http://localhost/Tutox/Login/viewToken"><H1>Validar Token</H1>
           <img src="https://www.dentegra.com.mx/wp-content/uploads/2018/12/boton-click-aqui.png"></a>

           </div>
           </div>';

           $email=\Config\Services::email();
           $email->setTo($to);
           $email->setFrom($corr,'info');
           $email->setSubject($subject);
           $email->setMessage($mensaje);  
           if($email->send()){
            $respuesta['error'] = "";
            $respuesta['ok'] = "Operacion realizada";
          }else
          {
            $respuesta['error'] = "Problemas dentro del gmail!!";
           $data=$email->printDebugger(['headers']);
           print_r($data);
         }   
    
           }    
         }
         header('Content-Type: application/x-json; charset=utf-8');
         echo(json_encode($respuesta));
         
   }
        
   public function doSaveClaveToken()
  {
    $validation =  \Config\Services::validation();
    $respuesta = array();
          $input = $this->validate([
            'user' =>  [
                    'rules'  => 'valid_email|required|max_length[30]',
                    'errors' => [
                      'required' => 'Debes Ingresar un Usuario.',
                      'max_length' => 'El usuario Debe contener hasta 20 letras'
                                ]
                      ],            
            'pass' => 'required|min_length[5]|max_length[50]',
            
            'pass2' => 'required|min_length[5]|max_length[50]',
            'token' => 'required|min_length[3]|max_length[50]',
            
        ]);

       if (!$input) {
        $respuesta['error'] = $this->validator->listErrors() ;
  
        } else {
                $request =  \Config\Services::request();
              $user= $request->getPostGet('user') ;
              $pass= $request->getPostGet('pass') ;
              $pass2= $request->getPostGet('pass2') ;   
              $token= $request->getPostGet('token') ;              
              $data = array($user,$token,password_hash($pass, PASSWORD_BCRYPT));
              $data2 = array($user);
              $modelo = new LoginModelo($db);
              $resultado=$modelo->dateToken($data2);
                if($modelo->claveporToken($data)){
                    if(isset($resultado) && ($token==$resultado->v11)){
                        if ($pass==$pass2) {
                            $respuesta['error']="";
                            $respuesta['ok'] = "Login realizadattt";
                        }else{
                          $respuesta['error'] = "LAS NUEVAS CONTRASEÑAS NO COINCIDEN";
                        }
                      $respuesta['error']="";
                      $respuesta['ok'] = "Login realizadat";
                   }else
                   {
                      $respuesta['error'] = "CONTRASEÑA ACTUAL ERRONEA";
                     
                   }
             
                            
              }else{
                $respuesta['error'] = "Problemas al realizar la operacion!!!";      
                   }
            
        }

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
        
  }
  

  //--------------------------------------------------------------------
  public function prueba(){
    $respuesta = array();
    $respuesta['data'] = password_hash('12345678', PASSWORD_BCRYPT);  
 if (password_verify('12345678','$2y$10$uJuD8894Wmv7FW4tUXxg9elqmwSh0RRd1CWDeBGhKClKc.t\/fpRey')){
          $respuesta['ok']="ok";
          }


    header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
    
  }
   public function leerdatos(){
     if( $this->session->has('email')){
         echo  $this->session->get('iduser').'<br/>';
        echo  $this->session->get('nombre').'<br/>';
     }else{
        echo 'No hay datos';
     }
   }

    public function cerrarSesion()
  {
  $this->session->destroy();
      $jus= base_url().'/Portada/index';
                      header('Location: '.$jus);
                      exit();
                       
  }

  public function leerpaginas()
  {
   
    $p=array("6");
    $modelo = new LoginModelo($db);  
   $paginas=$modelo->paginas($p);
    header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($paginas)); 
  }

}
