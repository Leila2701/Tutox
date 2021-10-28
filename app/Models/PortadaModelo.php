<?php namespace App\Models;

use CodeIgniter\Model;

class PortadaModelo extends Model
{
	
	public function listarDestacados(){
		$db = \Config\Database::connect();
		$qry = "CALL sp_listar_destacado()";
		$result =$db->query($qry);
		$db->close();
		return $result->getResultArray();  
	}
	public function listarNuevo(){
		$db = \Config\Database::connect();
		$qry = "CALL sp_listar_nuevo()";
		$result =$db->query($qry);
		$db->close();
		return $result->getResultArray();  
	}
}