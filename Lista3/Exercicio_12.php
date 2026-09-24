<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercícios PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<h1>Exercícios Lista 3</h1>
<h3>Exercício 12<h3>
<br>
<p> Este programa gera uma senha de 8 caracteres aleatórios. </p>
<p> Quer ver? </p>
<form method="post" action="Exercicio_12.php">
<div class="mb-3">
              <label for="escolha" class="form-label">Pronto?</label>
              <select id="escolha" name="escolha" class="form-select" required="">
                <option value="Sim">Sim</option><option value="Por favor">Por favor</option><option value="Só se for agora">Só se for agora</option>
              </select>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$senha = substr(str_shuffle($caracteres), 0, 8); 
echo "senha gerada: $senha";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>