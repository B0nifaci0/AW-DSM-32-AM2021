<?php include('Layout/header.php')?>

<?php 
    /*  Declaracion de variables siempre empiezan con un $ */
    /* Tipo De Datos Alfanumeericos , string o de cadena */
    $presentacion = "HOLA MUNDO DESDE MI PRIEMR LINEA DE CODIGO PHP YO SOY \"EL\" !!";
    $nombre = "ING.FERNANDO BONIFACIO MORALES";
    /* Declaracion de tipo de dato entero */
    $num1 = 10;
    $num2 = 30;
/* Imprimimos Variables en php y con . hacemos una contatenacion es decir unimos dos variables  */
    echo ($presentacion . $nombre);
    echo ("<br>");
    echo ($num1);
    echo ("<br>");
    echo ($num2);
    echo ("<br>");
    echo ("el resultado de la suma en php es ".$num1 + $num2);
    echo ("<br>");
    echo ("el resultado de la resta en php es ".$num1 - $num2);
    echo ("<br>");
    echo ("el resultado de la Multiplicacion en php es ".$num1 * $num2);
/* Declaracion de tipo de datos decimales mejor conocidos como double */
    $double = 123.45;
    echo ("<br>");
    echo ($double);
    $bolean = true;
    echo ("<br>");
    echo ($bolean);
    echo ("<br>");

    /* DECLARACIONES DE OPERADORES DE COMPRACION */
    $int = 30;
    $int2 = 40;
    echo ("<br> el resutado es ");

    $total = $int + $int2 ;
/* Operadores condicionales */
    if($total <= 100){
        echo("el resutado es menor 100----" . $total);
    }else{
        echo("el resultado no es mayor a 100");
        echo($total);

    }
    echo ("<br>");

$favcolor ="red";
    switch($favcolor){
        case "red":
            echo ("mi color favorito es red");
         break;
        case "blue":
            echo ("mi color favorito es blue");
            break;
        case "green":
            echo ("mi color favorito es green");
            break;
        default:
        echo("tu color favorito es red,blue, green o no se encuentra en la lista ");

    }

/* Array y objetos dentro de php*/  
/* delcarcion de mi primer array mediante contructor */  
echo ("<br>");

$mi_primerarray = array("Mex","colombia","Paname");
echo ("<br> mi primer array");
echo $mi_primerarray[0];
/* aparti de php5.4 delcarian de array puede ser mediante []*/
$mi_segundoarray = ["Mex","colombia","Panama"];
echo ("<br> mi segundo array");
echo $mi_segundoarray[1];
echo ("<br>");
echo ("<br>");
echo ("<br>");

/* delcarcion de array asociativios */
$personas = array("josafat"=>20,"jessica"=>19,"dulce maria"=>24);
/* declaracion de foreach */
 foreach($personas as $persona => $edad){
     echo "<br>$persona tiene unda edad de $edad";
 }
 echo ("<br>");

 /* delcaricon de for */
 $alumno ="";
 for($alumno=1; $alumno<10; $alumno=$alumno+1)
 {echo ($alumno."Aprobaron el curso<br>");};
 include('../class/ClassCoche.php');
 echo ("estos datos provienen de una objeto");
 echo ("<br>");

 echo ('el color del coche:'.$miCoche->color);
 echo ("<br>");
 

 echo ('la marca del coche:'.$miCoche->marca);
 echo ("<br>");
 echo ('la velocidad  del coche:'.$miCoche->velocidad);
 echo ("<br>");
 echo ("estos datos provienen de una  mi segundo objeto");
 echo ("<br>");

 echo ('el color del coche:'.$otroCoche->color);
 echo ("<br>");

 echo ('la marca del coche:'.$otroCoche->marca);
 echo ("<br>");
 echo ('la velocidad  del coche:'.$otroCoche->velocidad);
 echo ("<br>");
 /* proviene de una fun */
 echo ("estos datos provienen de una funcion");
 echo ("<br>");

 echo ('el color   del coche:'.$miCoche->getColor());
 echo ("<br>");
 echo ('la velocidad   del coche:'.$miCoche->getVelocidad());
 echo ("<br>");
 echo ('la marca   del coche:'.$miCoche->getMarca());
 echo ("<br>");

 if($miCoche->elCochceElegidoEselMasRapido($otroCoche)){
     echo 'El '.$otroCoche->marca.'es el mas rapido';
 }else{
     echo 'El'.$miCoche->marca. 'es mas rapido';

 }
 $miCoche->elCochceElegidoEselMasRapido($otroCoche);
?>
<!-- mandamos a llamar la class -->



<?php include('Layout/Footer.php')?>