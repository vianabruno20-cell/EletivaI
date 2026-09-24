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
<h3>Exercício 11<h3>
<form method="post" action="Exercicio_11.php">
<div class="mb-3">
              <label for="valor" class="form-label">Digite um valor monetário: </label>
              <input type="number" id="valor" name="valor" step="any" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valor = $_POST['valor'] ?? 00;
        echo "Valor formatado para a moeda corrente:";
        echo 'R$ ' . number_format($valor, 2, ',', '.');


    }    
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>