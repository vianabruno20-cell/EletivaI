<?php
require_once("conexao.php");
$id = $_GET['id'] ?? 0;

$stmt = $con->prepare("DELETE FROM atendentes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: index_atendentes.php");
exit;
?>
