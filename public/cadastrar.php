<?php 

include "../infra/conexao.php"

$nome = $_POST["Nome"] ?? "";
$preco = $_POST["Preço"] ?? 0;
$descricao = $_POST["Descricao"] ?? "";
$categoria = $_POST["Categoria"] ?? "";
$usuario_id = $_POST["usuario_id"] ?? 1;

$sql = "INSERT INTO cardapio (nome, preco, categoria, descricao, usuario_id) VALUES ('?, ?, ?, ?, ?')";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {

    mysqli_stmt_blind_param($stmt, 'sdssi', $nome, $preco, $descricao, $categoria, $usuario_id);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
header("Location: ../index.php");
exit;
?>
