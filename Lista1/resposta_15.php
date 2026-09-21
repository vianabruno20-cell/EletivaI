<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $preco_final = $valor1 - (($valor2/100) * $valor1) ;
    echo "O valor final do produto é: $preco_final";
