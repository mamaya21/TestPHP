<?php
// $myArray = array(
//     array(1,2,9),
//     array(2,5,3),
//     array(5,1,5)
// );

$value = $_POST['arreglo'];

if(empty($value)){
    echo("El arreglo no puede estar vacío<br>");

}else{

    $array_simple = explode(",", $value);
    //creando la matriz 3*3
    $myArray = array_chunk($array_simple, 3);
    
    $array_temp = array();
    $array_pasos = array();

    $posicion = 0;

    for ($i = 0; $i < count($myArray); $i++){

        //se hace los if por la posicion que puede adoptar el numero menor en la matriz 3 * 3, 
        //ya que una condicion es que si está en la posicion 0 de la primera columna no puede ir a la posicion 2 de la siguiente columna 

        if($posicion == 0){
            if($i == 0){
                for($n = 0; $n<count($myArray[0]); $n++){   
                    array_push($array_temp, $myArray[$n][$i]);
                }
            }else{
                for($n = 0; $n<count($myArray[0]) - 1; $n++){   
                    array_push($array_temp, $myArray[$n][$i]);
                }
            }
        }else if($posicion == 2){
            for($n = 1; $n<count($myArray[0]); $n++){   
                array_push($array_temp, $myArray[$n][$i]);
            }
        }else{
            for($n = 0; $n<count($myArray[0]); $n++){   
                array_push($array_temp, $myArray[$n][$i]);
            }
        }
        
        //ordeno por valor menor posible sin perder el key
        asort($array_temp);
        //inserto el numero del menor paso
        array_push($array_pasos, reset($array_temp));
        //recupero la posición para saber que pasos extraer de la siguiente columna (for)
        $posicion  = key($array_temp);

        $array_temp = array();
    }

    //imprimiendo los pasos
    foreach($array_pasos as $sub_arr){
        echo $sub_arr;
    }
   
}


?>
    <button onclick="location.href='Test3.html';">Actualizar</button>
    <button onclick="location.href='index.html';">Inicio</button>