<?php
    $valor1 = $_POST["valor1"];
    $conversao = ($valor1 * 1.8) + 32;
    echo "A temperatura convertida para Fahrenheit é: $conversao";