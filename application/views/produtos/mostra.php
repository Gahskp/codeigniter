<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
        <title>Mostra Produto</title>
    </head>
    <body>
        <div class="container">
            <h1><?= $produto["nome"] ?></h1>
            Preço: R$<?= $produto["preco"] ?>
            <?= auto_typography($produto["descricao"]) ?>
        </div>
    </body>
</html>
