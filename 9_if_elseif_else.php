<?php
$gender = "male";
if($gender == "male"){
    echo "Room no 501<br>";
}else{
    echo "Room no 401<br>";
}

// elseif and nested if_else
$age = 18;
if($age < 7){
    echo "Child";
}elseif($age >= 7 && $age <= 17){
    echo "You are a boy!";
}elseif($age >= 18 && $age <=60){
    echo "You are adult!<br>";
    $l = false;
    if($l == true){
        echo "You can drive!<br>";
    }else{
        echo "You have no driving licensens<br>You can't drive";
    }
}else{
    echo "You are a old";
}
?>