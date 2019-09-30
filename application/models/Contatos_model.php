<?php
class Contatos_Model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function listarContatos(){
        $query = $this->db->get("contato");
        return $query->result_array();

    }

    public function inserir($contato){
        return $this->db->insert('contato', $contato);
    }
}