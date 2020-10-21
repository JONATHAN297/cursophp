<?php
//los operadores logicos sirven para validar exprsiones tal es el caso del operador or
//que sirve para validar una sentencia u otra en el caso del operador and que sirve 
//validar amboas sentencias

$resultado=50;
    
      if($resultado< 51 and $resultado > 49){
          //echo "es un numero 50 valido";

      }
$edadvalida=25;

      if($edadvalida >18 and $edadvalida < 26){
         // echo "la edad es  valida";


      }
$sexo="M";
    if($sexo=='M' or $sexo =='F'){
       // echo "sexo valido";


    } 
    //el operador se diferente y la negacion, operador fiferente, sirve para validar que 
    //un daro no corresponde a la cantidad o caracter
$dato=10;
    if($dato != 10){
        echo "es un daro bueno";
//la negacion sirve para ser una validacion de algo que no pasa
    } 
$dato2=false;
    if(!$dato2){
        echo "no es verdadero";

    }  
?>