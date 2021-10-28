<?php namespace App\Models;

use CodeIgniter\Model;

class IngresarCursoModelo extends Model
{

  public function listar()
  {
   $db = \Config\Database::connect();
   $sql = "CALL sp_listar_curso2()";
   $result=$db->query($sql);
   $db->close();
   return $result->getResultArray();   


}
public function registrar($data)
{
   $db = \Config\Database::connect();
   $sql = "CALL sp_registrar_curso(?,?,?,?,?,?,@s)";
   $db->query($sql,$data);
   $res =$db->query('select @s as out_param');
   $db->close();
   return   $res->getRow()->out_param;    
}
public function combocategoria()
{
    $db = \Config\Database::connect();
    $sql = "CALL  sp_listar_categoria()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   

}
}