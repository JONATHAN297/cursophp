<?php

//funcion normal de php  
    function mifuncion(){
//mostrar un nombre 
         //echo 'Este es un nombre';
    
       //  $r=array(1);
        // return $r;
    }
     
     //mifuncion();
    function mifuncion2($valorA,$valorB,$opcion){
        
        switch ($opcion) {
            case 'suma':
                echo $valorA + $valorB;
                break;
            
            case 'resta':
                echo $valorA - $valorB;
                break; 
            case 'multiplicacion':
                echo $valorA * $valorB;
                break; 
            case 'division':
                echo $valorA / $valorB;
                break;          
            default:
                # code...
                break;
        }
        



    } 
   
    echo mifuncion2(5,10 'resta');


?>