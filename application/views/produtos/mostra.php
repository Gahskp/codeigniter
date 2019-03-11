<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
        <title>Mostra Produto</title>
    </head>
    <body>
        <div class="container">
            <h1><?= html_escape($produto["nome"]) ?></h1>
            Preço: R$<?= html_escape($produto["preco"]) ?>
            <?= auto_typography(html_escape($produto["descricao"])) ?>
        </div>
    </body>
</html>
