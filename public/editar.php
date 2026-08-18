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
    
</body>
</html>