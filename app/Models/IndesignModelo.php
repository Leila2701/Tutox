<?php namespace App\Models;

use CodeIgniter\Model;

class IndesignModelo extends Model
{

  public function listar()
  {
    $db = \Config\Database::connect();
    $sql = "CALL sp_listar_comentario_indesign()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   
}

public function listar_video()
{
    $db = \Config\Database::connect();
    $sql = "CALL sp_listar_indesing()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   


}
public function mregistrar($data)
{
    $db = \Config\Database::connect();
    $sql = "CALL sp_registrar_comentario(?,?,?,?,@s)";
    $db->query($sql,$data);
    $res =$db->query('select @s as out_param');
    $db->close();
    return   $res->getRow()->out_param;    
}
}