<?php

   $var="rhode estrada garibay";
   $fecha="26-11-2017";        
    
//explode es una funcion que convierte un string a un arreglo dependiendo de la contruccion pedida
    $datos=explode(" ", $var);
    $f=explode("-",$fecha);


    //echo $paterno=$datos[1];
    //var_dump($datos);
   // echo "<pre>";
   // print_r($datos);
   // echo "</pre>";
     echo "el año de la fecha es:".$f[2];
     echo "<br>";
     echo "el mes dela fecha es:".$f[1];



?>