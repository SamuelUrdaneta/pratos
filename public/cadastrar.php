<?php 

include "../infra/conexao.php";

$nome = $_POST["Nome"] ?? "";
$preco = $_POST["Preço"] ?? 0;
$descricao = $_POST["Descricao"] ?? "";
$categoria = $_POST["Categoria"] ?? "";

$sql = "INSERT INTO cardapio (cardapio_nome, cardapio_preco, cardapio_categoria, cardapio_descricao) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, 'sdss', $nome, $preco, $descricao, $categoria);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
header("Location: ../index.php");
exit;
?>
