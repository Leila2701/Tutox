<?php namespace App\Models;

use CodeIgniter\Model;

class CursoModelo extends Model
{

  public function listar()
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_curso()";
        $result=$db->query($sql);
        $db->close();
        return $result->getResultArray();   


    }

}