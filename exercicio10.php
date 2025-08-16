<?php
    //entrada
    $nota1 = 6;
    $nota2 = 5;
    $nota3 = 7;
    $nota4 = 9;

    //processamento
    $notas_com_peso30 = (($nota1 + $nota2 + $nota3) / 3) * 0.30;
    $notas_com_peso70 = ($nota4 * 0.70);
    $notas_total = $notas_com_peso30 + $notas_com_peso70; 

    //saida
    echo"<br/> Nota1: $nota1";
    echo"<br/> Nota2: $nota2";
    echo"<br/> Nota3: $nota3";
    echo"<br/> Nota4: $nota4";
    echo"<br/> Média notas ponderadas de 30%: $notas_com_peso30";
    echo"<br/> Média notas ponderadas de 70:  $notas_com_peso70";
    echo"<br/> Média Total: $notas_total";

?>