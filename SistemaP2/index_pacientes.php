<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pacientes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-3">
<h1>Pacientes</h1>
<p>
<a href="cadastrar_pacientes.php" class="btn btn-primary">Novo paciente</a>
<a href="consulta_pacientes.php" class="btn btn-secondary">Consultar</a>
<a href="index.php" class="btn btn-outline-dark">Menu principal</a>
</p>
<?php
require_once("conexao.php");
$stmt = $con->query("SELECT * FROM pacientes ORDER BY nome");
?>
<table class="table table-striped">
<tr><th>ID</th><th>Nome</th><th>CPF</th><th>Data de nascimento</th><th>Telefone</th><th>E-mail</th><th>Ações</th></tr>
<?php foreach ($stmt as $r) { ?>
<tr>
<td><?= $r['id'] ?></td>
<td><?= htmlspecialchars($r['nome']) ?></td>
<td><?= htmlspecialchars($r['cpf']) ?></td>
<td><?= htmlspecialchars($r['data_nascimento']) ?></td>
<td><?= htmlspecialchars($r['telefone']) ?></td>
<td><?= htmlspecialchars($r['email']) ?></td>
<td>
<a href="editar_pacientes.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
<a href="excluir_pacientes.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Excluir este registro?')">Excluir</a>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
