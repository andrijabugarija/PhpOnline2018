<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var='algebra'; //postavili smo string
echo $var;  //ispisujemo varijablu
          
$var=35; //postavili cijelobrojnu
echo $var; 
        
unset($var); //varijable poništavamo
echo $var;

echo '<br>';

$naziv_var='iznos';
$$naziv_var=99;  //kao da je napisano iznos=99
echo $iznos;

$a='algebra';  //varijabla a 
$b=&$a;        //varijabla b pokazuje na adresu var a
echo $b;
$a=3.14;
echo '<br>'.$b;  //$b i dalje pokazuje var a

//konstanta

define('NAZIV','Algebra'); //KONSTANTA naziv=algebra
echo NAZIV;


?>

