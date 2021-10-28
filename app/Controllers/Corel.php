<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CorelModelo;
class Corel extends BaseController
{
  public function __construct() {
    helper(['form', 'url']);
    
  }
  public function index()
  {
    return view('headerRegistro').view('CursoCorel').view('footer');
  }
  
  public function doList(){
    $cadena="";
    $respuesta=array();         
    $modelo = new CorelModelo($db);   
    $lista=$modelo->listar();
    foreach ($lista as $row) {
     $cadena.='<table>';
     $cadena.='<tr><td rowspan="2"><img src="'.base_url().'/resources/img/usuario.png" style="width:60px; height:60px;border-radius:50%;margin:10px;" alt=""></td>';
     $cadena.=' <td style="font-weight: bold;font-size: x-large;">'.$row['v5'] .'</td>';
     $cadena.='<td style="font-weight: bold; text-align:right;" >'.$row['v3'] .'</td></tr>';
     $cadena.='<tr><td colspan="2">'.$row['v2'] .'</td></tr>';
     $cadena.='<tr><br></tr>';
     $cadena.='</table>';
   }
   $respuesta['data']= $cadena;
   header('Content-Type: application/x-json; charset=utf-8');
   echo(json_encode($respuesta));
 }
 public function doList2(){
  $cadena="";
  $respuesta=array();         
  $modelo = new CorelModelo($db);   
  $lista=$modelo->listar_video();
  $cadena.=' <table class="table table-hover table-dark">';
  $cadena.='<thead>
  <tr >';
  $cadena.='<th scope="col">N°</th>';
  $cadena.='<th scope="col">Tema</th>';
  $cadena.='<th scope="col">Duración</th>';
  $cadena.='</tr>';
  $cadena.='</thead>';
  foreach ($lista as $row) {
   $cadena.='<tbody>';
   $cadena.=' <tr data-toggle="modal" data-target="#exampleModal'.$row['v1'] .'">';
   $cadena.='<div class="modal fade" id="exampleModal'.$row['v1'] .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
   $cadena.=' <div class="modal-dialog modal-xl" role="document">';
   $cadena.=' <div class="modal-content">';
   $cadena.='<div class="modal-header">';
   $cadena.='<h5 class="modal-title" id="exampleModalLabel">Introducción para principiantes</h5>';
   $cadena.=' <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
   $cadena.='<span aria-hidden="true">&times;</span>
   </button> </div>';
   $cadena.='<div class="modal-body">';               
   $cadena.='<div class="embed-responsive embed-responsive-21by9">
   <iframe class="embed-responsive-item" src="'.$row['v4'] .'"></iframe>
   </div>
   </div>';
   $cadena.='<div class="modal-footer">';
   $cadena.='<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div></div></div>';
   $cadena.='<th scope="row">'.$row['v1'] .'</th>';
   $cadena.='<td>'.$row['v2'] .'</td>';
   $cadena.='<td>'.$row['v3'] .'</td></tr>';
   $cadena.='</tbody>';
 }
 $cadena.=' </table>';
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
             $comentario= $request->getPostGet('comentario') ;
             $fecha= $request->getPostGet('fecha');
             $idCur= $request->getPostGet('idCur') ;
             $idPer= $request->getPostGet('idpersona') ;
             
             
             $data = array($comentario,$fecha,$idCur,$idPer);      
             $modelo = new CorelModelo($db);  
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
