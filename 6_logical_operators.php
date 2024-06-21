<?php
$a = true;
$b = false;
$c = true;
$d = false;
//And(&&):-
echo var_dump($a && $b)."<br>"; //(true)&&(false)-->false
echo var_dump($a && $c)."<br>"; //(true)&&(true)-->true
echo var_dump($b && $d)."<br>"; //(false)&&(false)-->false
//Or(||):-
echo var_dump($a || $b)."<br>"; //(true)&&(false)-->true
echo var_dump($a || $c)."<br>"; //(true)&&(true)-->true
echo var_dump($b || $d)."<br>"; //(false)&&(false)-->false
?>