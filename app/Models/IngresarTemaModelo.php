<?php namespace App\Models;

use CodeIgniter\Model;

class IngresarTemaModelo extends Model
{

  public function listar()
  {
   $db = \Config\Database::connect();
   $sql = "CALL sp_listar_tema()";
   $result=$db->query($sql);
   $db->close();
   return $result->getResultArray();   


 }
 public function registrar($data)
 {
   $db = \Config\Database::connect();
   $sql = "CALL   sp_registar_tema(?,?,?,?,?,@s)";
   $db->query($sql,$data);
   $res =$db->query('select @s as out_param');
   $db->close();
   return   $res->getRow()->out_param;    
 }
 public function combocurso()
 {
  $db = \Config\Database::connect();
  $sql = "CALL  sp_listar_cursocombo()";
  $result=$db->query($sql);
  $db->close();
  return $result->getResultArray();   

}
}