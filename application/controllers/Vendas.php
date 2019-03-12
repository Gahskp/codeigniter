<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas extends CI_Controller {
    public function nova(){
        $this->load->model(array("vendas_model", "produtos_model", "usuarios_model"));
        $this->load->helper("data_helper");
        $usuario = autoriza();

        $venda = array(
            "produto_id" => $this->input->post("produto_id"),
            "comprador_id" => $usuario["id"],
            "data_de_entrega" => dataPtBrParaPGsql($this->input->post("data_de_entrega"))
        );

        $this->vendas_model->salva($venda);

        $this->load->library("email");
        $config["protocol"] = "smtp";
        $config["smtp_host"] = "ssl://smtp.gmail.com";
        $config["smtp_user"] = "gahskp@gmail.com";
        $config["smtp_pass"] = "operario96";
        $config["charset"] = "utf-8";
        $config["mailtype"] = "html";
        $config["newline"] = "\r\n";
        $config["smtp_port"] = "465";

        $produto = $this->produtos_model->busca($venda["produto_id"]);
        $vendedor = $this->usuarios_model->busca($produto["usuario_id"]);

        $dados = array("produto", $produto);
        $conteudo = $this->load->view("vendas/email.php", $dados, TRUE);

        $this->email->initialize($config);
        $this->email->from("gahskp@gmail.com", "Mercado");
        $this->email->to($vendedor["email"]);
        $this->email->subject("Seu produto {$produto['nome']} foi vendido!");
        $this->email->message($conteudo);
        $this->email->send();


        $this->session->set_flashdata("success", "Venda autorizada!");
        redirect("/");
    }

    public function index(){
        $this->load->helper("data_helper");

        $usuario = autoriza();
        $this->load->model("produtos_model");
        $produtosVendidos = $this->produtos_model->buscaVendidos($usuario["id"]);

        $dados = array("produtosVendidos" => $produtosVendidos);
        $this->load->view("vendas/index", $dados);
    }
}
