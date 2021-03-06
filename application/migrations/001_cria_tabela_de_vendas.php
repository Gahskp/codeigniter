<?php

class Migration_Cria_tabela_de_vendas extends CI_migration {
    public function up(){
        $this->dbforge->add_field(array(
            "id" => array(
                "type" => "INT",
                "auto_increment" => TRUE
            ),
            "produto_id" => array(
                "type" => "INT"
            ),
            "comprador_id" => array(
                "type" => "INT"
            ),
            "data_de_entrega" => array(
                "type" => "DATE"
            )
        ));
        $this->dbforge->add_key("id", TRUE);
        $this->dbforge->create_table("vendas");
    }

    public function down(){
        $this->dbforge->drop_table("vendas");
    }
}
