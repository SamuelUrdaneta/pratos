<?php

include "infra/conexao.php";
$cadastro_pratos = mysqli_querry($conexao, "SELECT * FROM cadastro_pratos")

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Cardápio</h1>
    </header>
    <h2>Adicione um novo prato</h2>
    <form action="..public/cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="Categoria">Categoria:</label>
        <input type="text" name="Categoria">
        <br>
        <label for="Descrição">Descrição:</label>
        <input type="text" name="Descrição">
        <br>
        <label for="Preço">Preço:</label>
        <input type="number" name="Preço">
    </form>
    <div>
        <h2>Pratos cadastrados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
            <?php while ($prato = mysqli_fetch_assoc($prato)) { ?>
            <tr>
                <td><?php echo $prato["id"] ?></td>
                <td><?php echo $prato["Nome"] ?></td>
                <td><?php echo $prato["Categoria"] ?></td>
                <td><?php echo $prato["Descrição"] ?></td>
                <td><?php echo $prato["Preço"] ?></td>
                <td>
                    <a href="..public/editar.php?id<?php echo $prato["id"] ?>">Editar</a>
                    <a href="..public/excluir.php?id<?php echo $prato["id"] ?>">Excluir</a>
                </td>
                <?php } ?>
            </tr>
        </table>
    </div>
    
</body>
</html>