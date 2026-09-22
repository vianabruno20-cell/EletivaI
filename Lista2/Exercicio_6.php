<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercícios PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<h1>Exercício 6</h1>
<form method="post" action="exercicio_6.php">
<div class="mb-3">
              <label for="valor1" class="form-label">Digite um número: </label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valor1 = $_POST['valor1'] ?? 0;
        $i = 1;
        $soma = 0;
    while($i <= $valor1)
        {
        $soma += $i; 
        $i++;
        }
    echo "<p> A soma de todos os valores de 1 a $valor1 é: $soma";
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>