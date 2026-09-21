<?php
    $valor1 = $_POST["valor1"];

    $horas = $valor1 * 24 ;
    $minutos = $valor1 * 24 * 60 ;
    $segundos = $valor1 * 24 * 60 * 60 ;
    
    echo "Horas: $horas <br> Minutos: $minutos <br> Segundos: $segundos";
