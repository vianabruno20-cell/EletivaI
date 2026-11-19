<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novo Paciente</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-3">
<h1>Novo Paciente</h1>
<form method="post">
<div class="mb-3">
<label for="nome" class="form-label">Informe nome</label>
<input type="text" id="nome" name="nome" class="form-control" required>
</div>
<div class="mb-3">
<label for="cpf" class="form-label">Informe CPF</label>
<input type="text" id="cpf" name="cpf" class="form-control" required>
</div>
<div class="mb-3">
<label for="data_nascimento" class="form-label">Informe data de nascimento</label>
<input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
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
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    require_once("conexao.php");
    try {
        $sql = "INSERT INTO pacientes (nome, cpf, data_nascimento, telefone, email) VALUES (:nome, :cpf, :data_nascimento, :telefone, :email)";
        $stmt = $con->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":data_nascimento", $data_nascimento);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);
        $stmt->execute();
        echo "<p class='text-success mt-3'>Inserido com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p class='text-danger mt-3'>Erro ao inserir! (verifique se o registro já existe)</p>";
    }
}
?>
<a href="index_pacientes.php">Voltar</a>
</div>
</body>
</html>
