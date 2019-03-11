<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
    public function index()
    {
        // $this->output->enable_profiler(TRUE);

        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscaTodos();
        $dados = array("produtos" => $produtos);

        $this->load->helper("currency_helper");
        $this->load->view('produtos/index', $dados);
    }

    public function formulario(){
        $this->load->view("produtos/formulario");
    }

    public function novos(){
        $usuarioLogado = $this->session->userdata("usuario_logado");
        $produto = array(
            "nome" => $this->input->post("nome"),
            "descricao" => $this->input->post("descricao"),
            "preco" => $this->input->post("preco"),
            "usuario_id" => $usuarioLogado["id"]);

        $this->load->model("produtos_model");
        $this->produtos_model->salva($produto);

        $this->session->set_flashdata("success", "Produto adicionado com sucesso!");
        redirect("/");
    }

    public function mostra($id){
        $this->load->model("produtos_model");
        $produto = $this->produtos_model->busca($id);
        $dados = array("produto" => $produto);

        $this->load->helper("typography");
        $this->load->view("produtos/mostra", $dados);
    }
}
