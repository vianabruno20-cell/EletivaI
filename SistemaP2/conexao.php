<?php
// Conexão com o banco de dados (PDO)
$host = "localhost";
$banco = "agendamento";
$usuario = "root";
$senha = "";

try {
    $con = new PDO("mysql:host=$host;dbname=$banco;charset=utf8mb4", $usuario, $senha);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
