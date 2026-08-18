<?php 

include "..infra/conexão.php"

$nome = $_POST["Nome"];
$preco = $_POST["Preço"];
$categoria = $_POST["Categoria"];

$sql = "INSERT INTO cardapio (nome,preco,categoria) VALUES ('$nome, $preco, $categoria')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>
