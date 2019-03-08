<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
    public function index()
    {
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscaTodos();
        $dados = array("produtos" => $produtos);

        $this->load->helper(array("url", "form", "currency_helper"));
        $this->load->view('produtos/index.php', $dados);
    }
}
