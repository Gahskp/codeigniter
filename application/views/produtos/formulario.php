<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
        <title>Novo Produto</title>
    </head>
    <body>
        <div class="container">
            <h1>Formulário</h1>
            <?php
                echo form_open("produtos/novos");

                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name" => "nome",
                    "id" => "nome",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));

                echo form_label("Preço", "preco");
                echo form_input(array(
                    "name" => "preco",
                    "id" => "preco",
                    "class" => "form-control",
                    "maxlenght" => "255",
                    "type" => "number"
                ));

                echo form_label("Descrição", "descricao");
                echo form_textarea(array(
                    "name" => "descricao",
                    "id" => "descricao",
                    "class" => "form-control",
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
            ?>
        </div>
    </body>
</html>
