<?php
// Formulário 2
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome        = $_POST['nome'] ?? '';
    $email       = $_POST['email'] ?? '';
    $cpf         = $_POST['cpf'] ?? '';
    $celular     = $_POST['celular'] ?? '';
    $telefoneFixo = $_POST['telefoneFixo'] ?? '';
    $cep         = $_POST['cep'] ?? '';
    $logradouro  = $_POST['logradouro'] ?? '';
    $numero      = $_POST['numero'] ?? '';
    $bairro      = $_POST['bairro'] ?? '';
    $cidade      = $_POST['cidade'] ?? '';
    $uf          = $_POST['uf'] ?? '';
    $status      = $_POST['status'] ?? '';

}

$codigo = 32;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 900px;">
    <form method="POST" action="">
        <div class="row mb-3">
            <div class="col-1">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" value="<?php echo htmlspecialchars($codigo); ?>" disabled>
            </div>
            <div class="col-4">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo do Cliente">
            </div>
            <div class="col-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="cliente@dominio.com">
            </div>
            <div class="col-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Só números">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-2">
                <label for="celular" class="form-label">N° Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="N° do celular">
            </div>
            <div class="col-2">
                <label for="telefoneFixo" class="form-label">N° Telefone fixo</label>
                <input type="text" class="form-control" id="telefoneFixo" name="telefoneFixo" placeholder="N° telefone">
            </div>
            <div class="col-2">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="ex:88308070">
            </div>
            <div class="col-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="ex:Rua 1400,">
            </div>
            <div class="col-1">
                <label for="numero" class="form-label">N°</label>
                <input type="text" class="form-control" id="numero" name="numero">
            </div>
            <div class="col-2">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
            </div>
            <div class="col-1">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
            </div>
            <div class="col-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option selected>Selecione</option>
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>
        </div>

        <div class="text-end">
            <button type="reset" class="btn btn-danger">Resetar</button>
            <button type="submit" class="btn btn-success">Próximo</button>
        </div>
    </form>
</div>
</body>
</html>
