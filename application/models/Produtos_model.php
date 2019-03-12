<?php

class Produtos_model extends CI_Model {
    public function buscaTodos(){
        return $this->db->get_where("produtos", array("vendido" => FALSE))->result_array();
    }

    public function salva($produto){
        $this->db->insert("produtos", $produto);
    }

    public function busca($id){
        return $this->db->get_where("produtos", array("id" => $id))->row_array();
    }
}
