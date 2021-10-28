<?php namespace App\Models;

use CodeIgniter\Model;

class ReporteModelo extends Model
{


  public function rep1()
    {
    	$db = \Config\Database::connect();
    	$sql = "CALL sp_reporte1()";
		$result=$db->query($sql);
    	$db->close();
    	return $result->getResultArray();   


    }
    public function rep2()
    {
    	$db = \Config\Database::connect();
    	$sql = "CALL sp_reporte2()";
		$result=$db->query($sql);
    	$db->close();
    	return $result->getResultArray();   


    }
    
    
}