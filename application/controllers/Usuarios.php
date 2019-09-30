<?php
class Usuarios extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("usuarios_model");
        $this->load->helper("url_helper");
    }
    
    
    public function index(){
        $dados['usuarios'] = $this->usuarios_model->_list();
        $this->load->view('usuarios/index', $dados);
    }

    public function novo(){
        $this->load->helper('form');
        $this->load->view('usuarios/novo');
    }

    public function editar(){
        $this->load->helper('form');

        $dados['usuario'] = $this->usuarios_model->_getUsuario($this->input->post('id'));
        $this->load->view('usuarios/editar', $dados);
    }

    public function salvar(){
        //Pega os dados e salva no banco
        $usuario = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha')
        );

        $this->usuarios_model->_save($usuario);
                        
        //Volta para a listagem de usuários
        redirect('/usuarios/index');
    }

    public function update(){
        //Pega os dados e salva no banco
        $usuario = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha')
        );

        $this->usuarios_model->_edit($usuario);
                        
        //Volta para a listagem de usuários
        redirect('/usuarios/index');
    }

    public function excluir(){
        //Pega os dados e salva no banco
        $usuario = array(
            'id' => $this->input->post('id')
        );

        $this->usuarios_model->_delete($usuario);
                        
        //Volta para a listagem de usuários
        redirect('/usuarios/index');
    }
}