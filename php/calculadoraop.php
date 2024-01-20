<?php 

if(isset($_POST["enviar"])){


    function calcular(){
    $operacion = $_POST["opcion"];
    $numero1 = $_POST["primer_numero"];
    $numero2 = $_POST["segundo_numero"];
    
    if($operacion == "suma"){
        $res = $numero1 + $numero2;
        echo $res;
    }
    if($operacion == "resta"){
        $res = $numero1 - $numero2;
        echo $res;
    }
    if($operacion == "multiplicar"){
        $res = $numero1 * $numero2;
        echo $res;
    }
    if($operacion == "dividir"){
        $res = $numero1 / $numero2;
        echo $res;
    }
    if($operacion == "modulo"){
        $res = $numero1 % $numero2;
        echo $res;
    }
}
calcular();
}

?>