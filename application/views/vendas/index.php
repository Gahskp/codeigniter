<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
        <title>Vendas</title>
    </head>
    <body>
        <div class="container">
            <h1>Vendas</h1>
            <table class="table">
                <?php foreach ($produtosVendidos as $produto): ?>
                    <tr>
                        <td><?= html_escape($produto["nome"]) ?></td>
                        <td><?= dataPGsqlParaPtBr($produto["data_de_entrega"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>
