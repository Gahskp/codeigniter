<?php

class Usuarios_model extends CI_Model {
    public function salva($usuario){
        return $this->db->insert("usuarios", $usuario);
    }
}
