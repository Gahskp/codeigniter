<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function autenticar(){
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));

        $this->load->model("usuarios_model");
        $usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);
        if ($usuario) {
            $this->session->set_flashdata("success", "Usuário logado com sucesso!");
            $this->session->set_userdata("usuario_logado" , $usuario);
        } else {
            $this->session->set_flashdata("danger", "Usuário ou senha inválido!");
        }

        redirect("/");
    }

    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado com sucesso!");
        redirect("/");
    }
}
