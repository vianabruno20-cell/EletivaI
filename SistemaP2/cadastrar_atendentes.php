<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novo Atendente</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-3">
<h1>Novo Atendente</h1>
<form method="post">
<div class="mb-3">
<label for="nome" class="form-label">Informe nome</label>
<input type="text" id="nome" name="nome" class="form-control" required>
</div>
<div class="mb-3">
<label for="matricula" class="form-label">Informe matrícula</label>
<input type="text" id="matricula" name="matricula" class="form-control" required>
</div>
<div class="mb-3">
<label for="turno" class="form-label">Informe turno</label>
<input type="text" id="turno" name="turno" class="form-control" required>
</div>
<div class="mb-3">
<label for="telefone" class="form-label">Informe telefone</label>
<input type="text" id="telefone" name="telefone" class="form-control" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">Informe e-mail</label>
<input type="email" id="email" name="email" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $turno = $_POST['turno'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    require_once("conexao.php");
    try {
        $sql = "INSERT INTO atendentes (nome, matricula, turno, telefone, email) VALUES (:nome, :matricula, :turno, :telefone, :email)";
        $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":matricula", $matricula);
    $stmt->bindParam(":turno", $turno);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);
        $stmt->execute();
        echo "<p class='text-success mt-3'>Inserido com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p class='text-danger mt-3'>Erro ao inserir! (verifique se o registro já existe)</p>";
    }
}
?>
<a href="index_atendentes.php">Voltar</a>
</div>
</body>
</html>
