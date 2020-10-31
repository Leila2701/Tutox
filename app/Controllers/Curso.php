<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CursoModelo;
class Curso extends BaseController
{

	public function __construct() {
     	  helper(['form', 'url','funciones']);
       	    	            	
    }
	public function index()
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
     $modelo = new CursoModelo($db);   
     $lista=$modelo->listar();
     foreach ($lista as $row) {

        $cadena.= '<div class="col-md-3">';
                  $cadena.= '<div class="card" style="background-color: #D1DADA; margin: 5px;" >';
                    $cadena.= '<div class="card-header">';
                     $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-body">';
                      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-footer">';
                      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/Portada/'.$row['v4'].'">Ir al curso</a>';
                    $cadena.= '</div>';
                  $cadena.= '</div>';
                $cadena.= '</div>';
     }
      $respuesta['data']= $cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}
public function doList2(){
    $cadena="";
      $respuesta=array();         
     $modelo = new CursoModelo($db);   
     $lista=$modelo->listar2();
     foreach ($lista as $row) {

        $cadena.= '<div class="col-md-3">';
                  $cadena.= '<div class="card" style="background-color: #D1DADA; margin: 5px;" >';
                    $cadena.= '<div class="card-header">';
                     $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-body">';
                      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-footer">';
                      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/Portada/'.$row['v4'].'">Ir al curso</a>';
                    $cadena.= '</div>';
                  $cadena.= '</div>';
                $cadena.= '</div>';
     }
      $respuesta['data']= $cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}
public function doList3(){
    $cadena="";
      $respuesta=array();         
     $modelo = new CursoModelo($db);   
     $lista=$modelo->listar3();
     foreach ($lista as $row) {

        $cadena.= '<div class="col-md-3">';
                  $cadena.= '<div class="card" style="background-color: #D1DADA; margin: 5px;" >';
                    $cadena.= '<div class="card-header">';
                     $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-body">';
                      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
                    $cadena.= '</div>';
                    $cadena.= '<div class="card-footer">';
                      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/Portada/'.$row['v4'].'">Ir al curso</a>';
                    $cadena.= '</div>';
                  $cadena.= '</div>';
                $cadena.= '</div>';
     }
      $respuesta['data']= $cadena;
     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}


	//--------------------------------------------------------------------

}
