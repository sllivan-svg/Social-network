<?php

class Home extends Controller
{
	
	public function __construcut()
	{
		$this->Usuario = new $this->model("usuario");
	}

	public function index()
	{
		$this->view('pages/login');
		
	}

	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' ){
			
		}else{
			$this->view('pages/login');
		}
	}

	
	public function register()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$datosRegistro = [
				'privilegio' => '1',
				'usuario' => trim($_POST['usuario']),
				'correo' => trim($_POST['correo']),
				'contrasena' => password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT)
			];
			if($this->Usuario->verificarUsuario($datosRegistro)){
				if($this->Usuario->register($datosRegistro)){
					$_SESSION['usuario'] = $datosRegistro['usuario'];
					redirection('home/login');
				 }else{ }
			}else{}
		
		}else{
			$this->view('pages/register');
		}
	}


}