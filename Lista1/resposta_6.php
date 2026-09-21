<?php
    $valor1 = $_POST["valor1"];
    $conversao = ($valor1 -32) * (5/9);
    echo "A temperatura convertida em Celsius é: $conversao";