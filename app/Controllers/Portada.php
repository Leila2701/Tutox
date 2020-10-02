<?php namespace App\Controllers;
use CodeIgniter\Controller;
class Portada extends BaseController
{
	public function __construct() {
     	helper(['form', 'url']);
       	    	            	
    }
	public function index()
	{
		return view('portada');
	}
  public function cursos()
  {
    return view('Cursos');
  }
  public function somos()
  {
    return view('QuienesSomos');
  }
	public function doSave()
	{
		$validation =  \Config\Services::validation();
		$respuesta = array();
        
       /* 
       $this->form_validation->set_message('required', '%s no debe ser vacio');	  	 
		$this->form_validation->set_message('numeric', '%s debe ser un digito');
		$this->form_validation->set_message('min_length', '%s no respeta en valor minimo');	
		$this->form_validation->set_message('max_length', '%s no respeta en valor maximo');	
		$this->form_validation->set_message('exact_length', '%s no respeta en valor exacto');	
        */
    
      $input = $this->validate([

            'nombre' => 'required|min_length[5]|max_length[50]',
            'apellidos' => 'required|min_length[5]|max_length[90]',
            'correo' => 'required|min_length[5]|max_length[30]|valid_email',
            'dir' => 'required|min_length[5]|max_length[50]',
            'tel' => 'required|min_length[5]|max_length[12]',
            'fecha' => 'required',
            'dni' => 'required|exact_length[8]',
            'sexo' => 'required|numeric',
        ]);

       if (!$input) {
       	$respuesta['error'] = $this->validator->listErrors() ;
       	/*echo view('portada', [
                'validation' => $this->validator
            ]);*/
            
        } else {
              	$respuesta['Ok'] = "Correcto";    

            
        }



        

		header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($respuesta));


	}
	//--------------------------------------------------------------------

}
