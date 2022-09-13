

<?php

    $value = $_POST['arreglo'];
    // $value = "1,3,2,0,7,8,1,3,0,6,7,1";
    $sub_array = array();
    if(empty($value)){
        echo("El arreglo no puede estar vacío<br>");
    }else{
        $myArray = explode(",", $value);

        foreach($myArray as $arr){
             if ( $arr > 0 ){
                array_push($sub_array, $arr);
             }else{
                if(empty($sub_array)){
                    echo " X ";
                }else{
                    sort($sub_array);
                    foreach($sub_array as $sub_arr){
                        echo $sub_arr;
                    }
                    echo " ";
                    $sub_array = array();
                }
             }
        }

        if(!empty($sub_array)){
            sort($sub_array);
            foreach($sub_array as $sub_arr){
                echo $sub_arr;
            }
            $sub_array = array();
        }
       
    }
     
?>
    <button onclick="location.href='Test2.html';">Actualizar</button>
    <button onclick="location.href='index.html';">Inicio</button>