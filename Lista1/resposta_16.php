<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];
    $total = ($valor1 * ($valor2 / 100)) * $valor3 ;
    echo "O valor do juros no período é: $total";
