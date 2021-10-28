<?php namespace App\Models;

use CodeIgniter\Model;

class CursoFavoritoModelo extends Model
{

    public function obtenerDatoCurso($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_obtener_curso_favorito(?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getRow();   
    }

    public function registrarCursoFavorito($data){
        $db = \Config\Database::connect();
        $db->transStart();
        $qry = "CALL sp_agregar_favorito(?,?,@s)";
        $result =$db->query($qry,$data);
        $res =$db->query('select @s as out_param');
        $db->transComplete();
        $db->close();
        return  $res->getRow()->out_param;     
    }

     public function listar_cursos_favoritos($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_listar_cursos_favoritos(?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getResultArray();   
    }

    public function eliminar_curso_favorito($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_eliminar_curso_favorito(?,?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getResultArray();   
    }
}