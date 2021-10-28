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
  

  public function doList(){
    $cadena="";
    $respuesta=array();         
    $modelo = new CursoModelo($db);   
    $lista=$modelo->listar();
    foreach ($lista as $row) {

      $cadena.= '<div class="col-md-3">';
      $cadena.= '<div class="card" style="background-color: #E6FAF7; margin: 5px;" >';
      $cadena.= '<div class="card-header">';
      $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
      $cadena.= '</div>';
      $cadena.= '<div class="card-body">';
      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
      $cadena.= '</div>';
      $cadena.= '<div class="card-footer">';
      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/'.$row['v4'].'/index" onclick="return confirmacion()">Ir al curso</a>';
      $cadena.=  '<a href="'.base_url().'/obtenerDatoCurso/'.$row['v1'].'">';
      $cadena.= '<p>Agregar curso a favoritos<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"   mlns="http://www.w3.org/2000/svg">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>';
     $cadena.= ' </a>';



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
      $cadena.= '<div class="card" style="background-color: #E6FAF7; margin: 5px;" >';
      $cadena.= '<div class="card-header">';
      $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
      $cadena.= '</div>';
      $cadena.= '<div class="card-body">';
      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
      $cadena.= '</div>';
      $cadena.= '<div class="card-footer">';
      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/'.$row['v4'].'/index" onclick="return confirmacion()">Ir al curso</a>';
      $cadena.=  '<a href="'.base_url().'/obtenerDatoCurso/'.$row['v1'].'">';
      $cadena.= '<p>Agregar curso a favoritos<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"   mlns="http://www.w3.org/2000/svg">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>';
     $cadena.= ' </a>';
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
      $cadena.= '<div class="card" style="background-color: #E6FAF7; margin: 5px;" >';
      $cadena.= '<div class="card-header">';
      $cadena.=  '<h5 class="card-title" style="font-size: 16px;text-align: center;">'.$row['v2'] .'</h5>';
      $cadena.= '</div>';
      $cadena.= '<div class="card-body">';
      $cadena.= '<img class="card-img-top" src="'.base_url().'/resources/img/'.$row['v3'].'">';                  
      $cadena.= '</div>';
      $cadena.= '<div class="card-footer">';
      $cadena.= '<a class="btn btn-info btn-block"  href="'.base_url().'/'.$row['v4'].'/index" onclick="return confirmacion()">Ir al curso</a>';
      $cadena.=  '<a href="'.base_url().'/obtenerDatoCurso/'.$row['v1'].'">';
      $cadena.= '<p>Agregar curso a favoritos<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"   mlns="http://www.w3.org/2000/svg">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>';
     $cadena.= ' </a>';
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
