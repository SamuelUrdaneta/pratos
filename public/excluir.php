<?php 

include "../infra/conexao.php"

$id = $_GET["id"]

$stmt = $conexao->prepare("DELETE FROM pratos WHERE id=?";)
$stmt->bind_param("i", $id);
$smtt->execute();

?>