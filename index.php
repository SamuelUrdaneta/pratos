<?php

include "../infra/conexao.php";
$cardapio = mysqli_query($conexao, "SELECT * FROM cardapio");

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
    <form action="public/cadastrar.php" method="POST">
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome">
        <br>
        <label for="Categoria">Categoria:</label>
        <input type="text" name="Categoria">
        <br>
        <label for="Descrição">Descrição:</label>
        <input type="text" name="Descrição">
        <br>
        <label for="Preço">Preço:</label>
        <input type="number" name="Preço">
        <br>
        <button type="submit">Cadastrar</button>
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
            <?php while ($cardapio = mysqli_fetch_assoc($cardapio)) { ?>
            <tr>
                <td><?php echo $cardapio["cardapio_id"] ?></td>
                <td><?php echo $cardapio["cardapio_nome"] ?></td>
                <td><?php echo $cardapio["cardapio_categoria"] ?></td>
                <td><?php echo $cardapio["cardapio_descricao"] ?></td>
                <td><?php echo $cardapio["cardapio_preco"] ?></td>
                <td>
                    <a href="public/editar.php?id=<?php echo $cardapio["id"] ?>">Editar</a>
                    <a href="public/excluir.php?id=<?php echo $cardapio["id"] ?>">Excluir</a>
                </td>
                <?php } ?>
            </tr>
        </table>
    </div>
    
</body>
</html>