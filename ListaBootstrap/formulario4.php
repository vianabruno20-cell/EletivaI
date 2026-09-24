<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome     = $_POST['nome'] ?? '';
    $cpf      = $_POST['cpf'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $nivel    = $_POST['nivel'] ?? '';
    $email    = $_POST['email'] ?? '';
    $senha    = $_POST['senha'] ?? '';
    $status   = $_POST['status'] ?? '';

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 800px;">
    <h2 class="mb-4">Novo Usuário</h2>
    <hr>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome...">
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o cpf...">
            </div>
            <div class="col-md-5">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço...">
            </div>
            <div class="col-md-3">
                <label for="nivel" class="form-label">Nível:</label>
                <select class="form-select" id="nivel" name="nivel">
                    <option selected>----</option>
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuário</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email...">
            </div>
            <div class="col-md-5">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha...">
            </div>
            <div class="col-md-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status">
                    <option selected>----</option>
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>
</body>
</html>
