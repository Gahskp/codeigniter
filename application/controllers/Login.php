<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function autenticar(){
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));

        $this->load->model("usuarios_model");
        $usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);
        if ($usuario) {
            $dados = array("mensagem" => "Logado com sucesso!");
            $this->session->set_userdata("usuario_logado" , $usuario);
        } else {
            $dados = array("mensagem" => "Email ou senha incorreto!");
        }

        $this->load->view("login/autenticar", $dados);

    }
}
