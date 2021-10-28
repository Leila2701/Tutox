<?php namespace App\Models;

use CodeIgniter\Model;

class CursoModelo extends Model
{

  public function listar()
  {
    $db = \Config\Database::connect();
    $sql = "CALL sp_listar_cursobasico()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   


}
public function listar2()
{
    $db = \Config\Database::connect();
    $sql = "CALL sp_listar_cursoavanzados()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   


}
public function listar3()
{
    $db = \Config\Database::connect();
    $sql = "CALL sp_listar_cursodiseño()";
    $result=$db->query($sql);
    $db->close();
    return $result->getResultArray();   


}

}