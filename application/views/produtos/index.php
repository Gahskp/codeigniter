<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Produtos</title>
        <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
    </head>
    <body>
        <div class="container">
            <h1>Produtos</h1>
            <table class="table">
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto["nome"] ?></td>
                        <td><?= $produto["preco"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>
