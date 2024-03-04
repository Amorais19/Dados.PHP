<?php
    include 'dados.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="styles.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Arrays</title>
</head>

<body>
    <header>
        <h3 class="title">Utilizando Arrays em PHP</h3>
        <a class="inicio" href="index.html">Início</a>
    </header>
    <main>
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Manipulação de Arrays em PHP</h1>
                <p>Exercício de utilização de Arrays em PHP</p>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Estilo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dados as $linha => $item):?>
                        <tr>
                            <td><?php echo $item['nome'] ?></td>
                            <td><?php echo $item['idade'] ?></td>
                            <td><?php echo $item['estilo'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>