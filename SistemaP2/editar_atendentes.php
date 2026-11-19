<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Atendente</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-3">
<?php
require_once("conexao.php");
$id = $_GET['id'] ?? $_POST['id'] ?? 0;
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $turno = $_POST['turno'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    try {
        $stmt = $con->prepare("UPDATE atendentes SET nome = :nome, matricula = :matricula, turno = :turno, telefone = :telefone, email = :email WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":matricula", $matricula);
    $stmt->bindParam(":turno", $turno);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $mensagem = "<p class='text-success mt-3'>Atualizado com sucesso!</p>";
    } catch (PDOException $e) {
        $mensagem = "<p class='text-danger mt-3'>Erro ao atualizar!</p>";
    }
}

$stmt = $con->prepare("SELECT * FROM atendentes WHERE id = :id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$r = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$r) { die("Registro não encontrado. <a href='index_atendentes.php'>Voltar</a>"); }
?>
<h1>Editar Atendente</h1>
<form method="post">
<input type="hidden" name="id" value="<?= $r['id'] ?>">
<div class="mb-3">
<label for="nome" class="form-label">Informe nome</label>
<input type="text" id="nome" name="nome" class="form-control" required value="<?= htmlspecialchars($r['nome']) ?>">
</div>
<div class="mb-3">
<label for="matricula" class="form-label">Informe matrícula</label>
<input type="text" id="matricula" name="matricula" class="form-control" required value="<?= htmlspecialchars($r['matricula']) ?>">
</div>
<div class="mb-3">
<label for="turno" class="form-label">Informe turno</label>
<input type="text" id="turno" name="turno" class="form-control" required value="<?= htmlspecialchars($r['turno']) ?>">
</div>
<div class="mb-3">
<label for="telefone" class="form-label">Informe telefone</label>
<input type="text" id="telefone" name="telefone" class="form-control" required value="<?= htmlspecialchars($r['telefone']) ?>">
</div>
<div class="mb-3">
<label for="email" class="form-label">Informe e-mail</label>
<input type="email" id="email" name="email" class="form-control" required value="<?= htmlspecialchars($r['email']) ?>">
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
</form>
<?= $mensagem ?>
<a href="index_atendentes.php">Voltar</a>
</div>
</body>
</html>
