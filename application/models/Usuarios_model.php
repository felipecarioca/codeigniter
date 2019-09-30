<?php
class Usuarios_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
    public function _save($usuario) {
        return $this->db->insert('usuario', $usuario);
    }

    public function _edit($usuario) {
        return $this->db->replace('usuario', $usuario);
    }

    public function _delete($usuario) {
        return $this->db->delete('usuario', $usuario);
    }

    public function _login($email, $senha) {

        $this->db->where("email", $email);
        $this->db->where("senha", $senha);

        $usuario = $this->db->get("usuario")->row_array();

        return $usuario;
    }

    public function _list(){
        $query = $this->db->get("usuario");
        return $query->result_array();
    }

    public function _getUsuario($id){
        
        $this->db->where("id", $id);

        $usuario = $this->db->get("usuario")->row_array();

        return $usuario;
    }
}