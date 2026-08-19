<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$stmt = $conexao->prepare("SELECT * FROM cardapio WHERE cardapio_id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$cardapio = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h2></h2>
    <h2>Editando prato<?php echo $cardapio["titulo"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <label for="Nome">Nome:</label>
            <input type="text" name="Nome" value="<?php echo $cardapio["cardapio_nome"]?>">
            <br>
            <label for="Categoria">Categoria:</label>
            <input type="text" name="Categoria" value="<?php echo $cardapio["cardapio_categoria"]?>">
            <br>
            <label for="Descrição">descrição:</label>
            <input type="text" name="Descrição" value="<?php echo $cardapio["cardapio_descrição"]?>">
            <br>
            <label for="Preço">Preço:</label>
            <input type="number" name="Preço" value="<?php echo $cardapio["cardapio_preço"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
</body>
</html>