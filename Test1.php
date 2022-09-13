

<?php

    $value = $_POST['arreglo'];
    if(empty($value)){
        echo("El arreglo no puede estar vacío<br>");
    }else{
        $myArray = explode(",", $value);
        $arreglo = array_count_values($myArray);
       
        asort($arreglo);

        $val_maximo = max($arreglo);

        $new_array = array_filter($arreglo, function($k) use ($val_maximo){
            return $k == $val_maximo;
        }, ARRAY_FILTER_USE_BOTH);

        $cantidad = reset($new_array); 
        $numero = key($new_array);

        echo "Longest: ".$cantidad. "<br>";
        echo "Number: ". $numero. "<br>";
       
    }
     
?>
    <button onclick="location.href='Test1.html';">Actualizar</button>
    <button onclick="location.href='index.html';">Inicio</button>

