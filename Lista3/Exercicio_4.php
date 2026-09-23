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
<h3>Exercício 4<h3>
<form method="post" action="Exercicio_4.php">
<div class="mb-3">
              <label for="dia" class="form-label">Digite o dia do mês (ex. 15)</label>
              <input type="number" id="dia" name="dia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="mes" class="form-label">Digite o número correspondente ao mês (ex. 07 para julho)</label>
              <input type="number" id="mes" name="mes" class="form-control" required="">
            </div><div class="mb-3">
              <label for="ano" class="form-label">Digite o ano (ex. 1986)</label>
              <input type="number" id="ano" name="ano" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dia = $_POST['dia'] ?? 0;
        $mes = $_POST['mes'] ?? 0;
        $ano = $_POST['ano'] ?? 0;

    if(checkdate($mes, $dia, $ano))
        {
        echo "<p>A data digitada está correta!</p>". sprintf("%02d/%02d/%04d",$dia,$mes,$ano);
        }
    else
        {
        echo "<p> Dados incorretos. Verifique a digitação!</p>";
        }
    }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>