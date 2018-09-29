<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=987;// cijelbrojni

$b=54.45; //decimalni brojevi

$nizzznakova='ovo je mala poslje kise'; // nizovi znakova

$logickaistina=TRUE;
        
$logickaistinaa=FALSE;

if($logickaistina) {
      echo 'ljudi kazu da je istina';
        }
if($logickaistinaa){
        echo 'ovo se nece viti';  // PRESKOCI
}
else{
        echo 'ovo se dogodi ako je laz';  //ispise
          }

// obrnuta istina

if(!$logickaistinaa){
        echo 'ovo se nece viti';    //ispise
}
else{
        echo 'ovo se dogodi ako je laz';
        }

?>