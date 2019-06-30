<?php 

    $alfabeto = "123456789ABCDFGHIJKLMNOPQR";
    $tamanho = 11;
    $letra = "";
    $resultado = "";

    for($i = 1; $i < $tamanho; $i++){
        $letra = substr($alfabeto, rand(0, 23), 1);
        $resultado .= $letra;
    }
    
    //echo $resultado;

    date_default_timezone_set('America/Recife');
    $agora = getdate();

    $codigo_data = $agora['year']."_".$agora['yday'].$agora['hours'].$agora['minutes'].$agora['seconds'];
    
    echo "Rendrikson_".$resultado."_".$codigo_data;
?>