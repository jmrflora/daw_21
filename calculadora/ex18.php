<?php 

if (isset($_POST["op"]) and ctype_digit($_POST["a"]) and ctype_digit($_POST["b"]) ){
    $operacao = $_POST["op"];
    $A = $_POST["a"];
    $B = $_POST["b"];
    switch ($operacao){
        case "soma":
            $result= $A + $B;
            break;
        case "sub":
            $result= $A - $B;
            break;
        case "mult":
            $result= $A * $B;
            break;
        case "div":
            $result= $A / $B;
            break;
    }
    echo "resultado= " . $result;
}