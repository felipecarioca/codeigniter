<?php
class Produtos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("produtos_model"); 
        $this->load->helper("url_helper");       
    }
    
    public function index(){
        $dados['produtos'] = $this->produtos_model->_list();
        $this->load->view('produtos/index', $dados);
    }

    public function novo(){
        $this->load->helper('form');
        $this->load->view('produtos/novo');
    }

    public function editar(){
        $this->load->helper('form');

        $dados['produto'] = $this->produtos_model->_getProduto($this->input->post('id'));
        $this->load->view('produtos/editar', $dados);
    }

    public function salvar(){
        //Pega os dados e salva no banco
        $produto = array(
            'nome' => $this->input->post('nome'),
            'descricao' => $this->input->post('descricao'),
            'preco' => $this->input->post('preco')
        );

        $this->produtos_model->_save($produto);
                        
        //Volta para a listagem de usuários
        redirect('/produtos/index');
    }

    public function update(){
        //Pega os dados e salva no banco
        $produto = array(
            'id' => $this->input->post('id'),
            'nome' => $this->input->post('nome'),
            'descricao' => $this->input->post('descricao'),
            'preco' => $this->input->post('preco')
        );

        $this->produtos_model->_edit($produto);
                        
        //Volta para a listagem de usuários
        redirect('/produtos/index');
    }

    public function excluir(){
        //Pega os dados e salva no banco
        $produto = array(
            'id' => $this->input->post('id')
        );

        $this->produtos_model->_delete($produto);
                        
        //Volta para a listagem de usuários
        redirect('/produtos/index');
    }
}