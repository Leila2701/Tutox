<?php namespace App\Models;

use CodeIgniter\Model;

class PersonaModelo extends Model
{
	public function mlistar(){
		$db = \Config\Database::connect();
		$qry = "CALL sp_listar_persona_usuario()";
		$result =$db->query($qry);
		$db->close();
		return $result->getResultArray();  
	}
	public function mregistrar($data){
		$db = \Config\Database::connect();
		$db->transStart();
		$qry = "CALL sp_registrar_persona(?,?,?,?,?,?,?,?,?,@s)";
		$result =$db->query($qry,$data);
		$res =$db->query('select @s as out_param');
		$db->transComplete();
		$db->close();
		return  $res->getRow()->out_param;     
	}
	public function mCambiarDatosPerfil($data){
		$db = \Config\Database::connect();
		$db->transStart();
		$qry = "CALL sp_modificar_persona(?,?,?,?,?,?,?,@s)";
		$result =$db->query($qry,$data);
		$res =$db->query('select @s as out_param');
		$db->transComplete();
		$db->close();
		return  $res->getRow()->out_param;     
	}
	
}