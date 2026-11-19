<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Novo Paciente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Novo Paciente</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Informe o nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="convenio" class="form-label">Informe código de convênio</label>
                    <input type="text" id="convenio" name="convenio" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">Informe o CPF</label>
                    <input type="number" id="cpf" name="cpf" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="dn" class="form-label">Informe a data de nascimento</label>
                    <input type="date" id="dn" name="dn" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Informe o gênero/sexo (M - masculino / F - feminino)</label>
                    <input type="text" id="genero" name="genero" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Informe o número de telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nome = $_POST['nome'];
                    $conv = $_POST['convenio'];
                    $cpf = $_POST['cpf'];
                    $dn = $_POST['dn'];
                    $gen = $_POST['genero'];
                    $tel = $_POST['telefone'];
                    require_once("conexao.php");

                    $sql = "INSERT INTO pacientes (nome, convenio, cpf, data_nascimento, genero, telefone) VALUES (:nome, :conv, :cpf, :dn, :gen, :telefone)";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nome", $nome);
                    $resultado->bindParam(":convenio", $conv);
                    $resultado->bindParam("cpf:", $cpf);
                    $resultado->bindParam(":data_nascimento", $dn);
                    $resultado->bindParam(":genero", $gen);
                    $resultado->bindParam(":telefone", $tel);
                    if($resultado->execute())
                        echo "<p>Inserido com sucesso!</p>";
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>
            <a href="index.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>