<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model("usuarios_model");
        $this->load->helper("url_helper");
	}
	
	public function index(){
        $this->load->view('login/index');
	}
	
	public function Autenticar()
	{
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		
		$usuario = $this->usuarios_model->_login($email, $senha);

		if($usuario) {
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso!");

			redirect('/usuarios');
			
		} else {
			$this->session->set_flashdata("danger", "Usuário ou senha inválidos!");
			redirect('/login');
		}

	}

	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		
		redirect("/login");
	}
}
