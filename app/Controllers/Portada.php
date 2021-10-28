<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PortadaModelo;
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
   

  public function WordExamen()
  {
    return view('WordExamen');
  } 
  public function excelExamen()
  {
    return view('excelExamen');
  }  
  public function powerExamen()
  {
    return view('powerExamen');
  }
  public function Corel()
  {
    return view('examenCorel');
  }
  public function PHP()
  {
    return view('examenPHP');
  }    
  public function SQL()
  {
    return view('SQLExamen');
  } 
  public function BDExamen()
  {
    return view('BDExamen');
  } 
  public function FacebookExamen()
  {
    return view('FacebookExamen');
  }
  public function designExamen()
  {
    return view('designExamen');
  }   
  public function illustratorExamen()
  {
    return view('illustratorExamen');
  }
  public function photoshopExamen()
  {
    return view('photoshopExamen');
  } 
  public function ProgramacionExamen()
  {
    return view('ProgramacionExamen');
  }   


  public function terminos()
  {
    return view('header').view('terminos').view('footer');
  } 

    public function Succefull()
  {
    return view('RegistrarVerifiacion');
  
  }

  public function Contraseña()
  {
    return view('GenerarContraseña');
  
  }

  /*VISTA ADMINISTRADOR*/
  
  
  public function Modificar()
  {
    return view('headerAdmin').view('modificarcontraseña');
  
  }
  
  public function doListCursoDestacado()
  {
    $cadena="";
    $respuesta=array();         
    $modelo = new PortadaModelo($db);   
    $lista=$modelo->listarDestacados();
    foreach ($lista as $row) {

      $cadena.= '<div class="col-md-6">';
      $cadena.= '<div class="card" style="background-image: radial-gradient(circle, #ffffff, #f8f8fa, #eff2f5, #e5edee, #dde7e6);" >';
      $cadena.= '<div class="card-body">';
      $cadena.= '<h5 class="card-title text-center" style="color: #f2317f; font-weight: bold;">'.$row['v1'] .'</h5>';
      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v2'].'">';
      $cadena.= '<p class="card-text text-justify">'.$row['v3'] .'</p>';
      $cadena.= '<p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"   mlns="http://www.w3.org/2000/svg">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>'.$row['v4'] .'</p>';
      $cadena.= '<a href="'.base_url().'/Curso/index" class="btn btn-primary btn-block">INGRESAR</a>';
      $cadena.= '</div>';
      $cadena.= '</div>';
      $cadena.= '</div>';


      
    }
    $respuesta['data']= $cadena;
    header('Content-Type: application/x-json; charset=utf-8');
    echo(json_encode($respuesta));
  }
  public function doListCursoNuevo()
  {
    $cadena="";
    $respuesta=array();         
    $modelo = new PortadaModelo($db);   
    $lista=$modelo->listarNuevo();
    foreach ($lista as $row) {

      $cadena.= '<div class="col-md-6">';
      $cadena.= '<div class="card" style="background-image: radial-gradient(circle, #ffffff, #f8f8fa, #eff2f5, #e5edee, #dde7e6);" >';
      $cadena.= '<div class="card-body">';
      $cadena.= '<h5 class="card-title text-center" style="color: #f2317f; font-weight: bold;">'.$row['v1'] .'</h5>';
      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v2'].'">';
      $cadena.= '<p class="card-text text-justify">'.$row['v3'] .'</p>';
      $cadena.= '<a href="'.base_url().'/Curso/index" class="btn btn-primary btn-block">INGRESAR</a>';
      $cadena.= '</div>';
      $cadena.= '</div>';
      $cadena.= '</div>';


      
    }
    $respuesta['data']= $cadena;
    header('Content-Type: application/x-json; charset=utf-8');
    echo(json_encode($respuesta));
  }
  


}

