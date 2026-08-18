<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$stmt = $conexao->prepare("SELECT * FROM livros WHERE id=?");
$stmt->bind_param("i", $id);
$smtt->execute();
$result = $stmt->get_result();
$prato = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="..style/style.css">
</head>
<body>
    <h2></h2>
    <h2>Editando prato<?php echo $prato["titulo"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $prato["id"]?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $prato["nome"]?>">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="Categoria" value="<?php echo $prato["categoria"]?>">
            <br>
            <label for="descrição">descrição:</label>
            <input type="text" name="descrição" value="<?php echo $prato["descrição"]?>">
            <br>
            <label for="preço">Preço:</label>
            <input type="number" name="preço" value="<?php echo $prato["preço"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>
</body>
</html>