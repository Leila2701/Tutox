<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ReporteModelo;
class Reporte extends BaseController
{

  public function __construct() {
        helper(['form', 'url']);
                            
    }
  public function index()
  {
    return view('headerRegistro').view('reportes').view('footer');
  }
  public function reporte2()
  {
    return view('headerRegistro').view('reporte2').view('footer');
  }
   
public function doRep1(){
    $respuesta=array();         
     $modelo = new ReporteModelo($db);   
     $var=$modelo->rep1();
     $rep=array();
      foreach($var as  $obj){
        array_push($rep, array('label'=>$obj['v1'], 'y'=>$obj['v2']+10));   
      } 
      $respuesta['data']=$var;
      $respuesta['datagrafico']=$rep;


     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}

public function doRep2(){
    $respuesta=array();         
     $modelo = new ReporteModelo($db);   
     $var=$modelo->rep2();
     $rep=array();
      foreach($var as  $obj){
        array_push($rep, array('label'=>$obj['v1'], 'y'=>$obj['v2']+10));   
      } 
      $respuesta['data']=$var;
      $respuesta['datagrafico']=$rep;


     header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));
}
}
