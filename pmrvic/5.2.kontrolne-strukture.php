<?php

/* 
 * if-else
 * switch-acse
 * while
 * for
 * foreach
 */

$a = 1;

if ($a <= 2){
    echo 'varijabla a je jednaka ili manje od 2';
}
else{
    echo 'varijabla a je veća od 2';
    echo "Ovdje pišem do bsvijesti...";
}

echo '<hr>';

$naziv= 'AlgebraXXXZ';
if(strlen($naziv)>10){
    echo 'Naziv ima više od 10 znakova';
}
else{
    echo 'Naziv ima manje ili jednako 10 znakova';
}

echo '<br> nizanje uvijeta && || <br>';
echo   'true && true   = true <br>'
     . 'true && false  = false <br>'
     . 'false && true  = false <br>'
     . 'false && false = false <br>';

echo 'i &&<br>';
echo ' 1 && 1 = 1 <br>';
echo ' 1 && 0 = 0 <br>';
echo ' 0 && 1 = 0 <br>';
echo ' 0 && 0 = 0 <br>';

echo 'ili ||<br>';
echo ' 1 || 1 = 1 <br>';  //altgr+w  |
echo ' 1 || 0 = 1 <br>';
echo ' 0 || 1 = 1 <br>';
echo ' 0 || 0 = 0 <br>';

echo 'not !<br>';
echo '!1=0<br>';
echo '!0=1<br>';

echo '<hr>';

$naziv= 'AlgebraXXX';
if(strlen($naziv)<5 || strlen($naziv)>=11){
    echo 'lozinka mora imati najmanje 6 znakova i strogo manje od 11';
echo '<br>lozinka '.$naziv.' ima '.strlen($naziv).' znakova!';
    
}
else{
    echo 'lozinka je ispravna';
}