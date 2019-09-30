<?php
class Produtos_Model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
    
    public function _save($produto) {
        return $this->db->insert('produto', $produto);
    }

    public function _edit($produto) {
        return $this->db->replace('produto', $produto);
    }

    public function _delete($produto) {
        return $this->db->delete('produto', $produto);
    }

    public function _list(){
        $query = $this->db->get("produto");
        return $query->result_array();
    }

    public function _getProduto($id){
        
        $this->db->where("id", $id);

        $produto = $this->db->get("produto")->row_array();

        return $produto;
    }
}