<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consultar Atendentes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-3">
<h1>Consultar Atendentes</h1>
<form method="get" class="mb-3">
<label for="busca" class="form-label">Buscar por nome</label>
<input type="text" id="busca" name="busca" class="form-control mb-2" value="<?= htmlspecialchars($_GET['busca'] ?? '') ?>">
<button type="submit" class="btn btn-primary">Buscar</button>
</form>
<?php
require_once("conexao.php");
$busca = "%" . ($_GET['busca'] ?? '') . "%";
$stmt = $con->prepare("SELECT * FROM atendentes WHERE nome LIKE :busca ORDER BY nome");
$stmt->bindParam(":busca", $busca);
$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table class="table table-striped">
<tr><th>ID</th><th>Nome</th><th>Matrícula</th><th>Turno</th><th>Telefone</th><th>E-mail</th></tr>
<?php foreach ($linhas as $r) { ?>
<tr>
<td><?= $r['id'] ?></td>
<td><?= htmlspecialchars($r['nome']) ?></td>
<td><?= htmlspecialchars($r['matricula']) ?></td>
<td><?= htmlspecialchars($r['turno']) ?></td>
<td><?= htmlspecialchars($r['telefone']) ?></td>
<td><?= htmlspecialchars($r['email']) ?></td>
</tr>
<?php } ?>
</table>
<?php if (count($linhas) == 0) echo "<p>Nenhum registro encontrado.</p>"; ?>
<a href="index_atendentes.php">Voltar</a>
</div>
</body>
</html>
