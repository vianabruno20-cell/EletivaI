<?php
require_once("conexao.php");
$id = $_GET['id'] ?? 0;

$stmt = $con->prepare("DELETE FROM medicos WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: index_medicos.php");
exit;
?>
