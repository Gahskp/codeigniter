<?php

class Usuarios_model extends CI_Model {
    public function salva($usuario){
        return $this->db->insert("usuarios", $usuario);
    }

    public function buscaPorEmailESenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        return $this->db->get('usuarios')->row_array();
    }

    public function busca($id){
        return $this->db->get_where("usuarios", array("id" => $id))->row_array();
    }
}
