<?php 

include "../infra/conexao.php";

$id = $_GET["id"];

$stmt = $conexao->prepare("DELETE FROM cardapio WHERE cardapio_id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

?>