<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModelo extends Model
{


  public function login($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_validationUser(?,?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getRow();   
    }
    public function dateToken($data)
    {
        $db = \Config\Database::connect();
        $sql = "CALL sp_validationUserToken(?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getRow();   
    }

    
    public function registrarlogin($data){
      $db = \Config\Database::connect();
      $db->transStart();
      $qry = "CALL sp_registrar_Clave(?,?,@s)";
      $result =$db->query($qry,$data);
      $res =$db->query('select @s as out_param');
      $db->transComplete();
      $db->close();
      return  $res->getRow()->out_param;     
    }

    public function modificarloginclave($data){
      $db = \Config\Database::connect();
      $db->transStart();
      $qry = "CALL sp_CambiarContraseña(?,?,@s)";
      $result =$db->query($qry,$data);
      $res =$db->query('select @s as out_param');
      $db->transComplete();
      $db->close();
      return  $res->getRow()->out_param;     
    }

      public function GenerarClaveToken($data)
      {
        $db = \Config\Database::connect();
        $sql = "CALL token(?)";
        $result=$db->query($sql,$data);
        $db->close();
        return $result->getRow();   


      }

    public function enviartokenCorr($data)
    {
      $db = \Config\Database::connect();
      $sql = "CALL sp_EnviartokenCorr(?)";
    $result=$db->query($sql,$data);
      $db->close();
      return $result->getRow();   


    }

    
   public function paginas($data)
    {
        
       $db = \Config\Database::connect();
        $qry = "CALL sp_listar_accesos(?)";   
        $result = $db->query($qry,$data);
        $db->close();    
        $data= $result->getResultArray();      
        $lista=array();   
        foreach($data as $obj){
          $lista[]=strtoupper("\APP\CONTROLLERS"."\\". $obj['v2']);
        }
            return $lista;  
    }

    public function claveporToken($data){
      $db = \Config\Database::connect();
      $db->transStart();
      $qry = "CALL sp_contraporToken(?,?,?,@s)";
      $result =$db->query($qry,$data);
      $res =$db->query('select @s as out_param');
      $db->transComplete();
      $db->close();
      return  $res->getRow()->out_param;     
    }
    
    }