<?php
//Associative array is 98% same as python dictionary!
/*
$array_name = array(
    'key' => 'value',
    'key2' => 'value2',
    'key_n' => 'value_n'
);
*/
$info = array(
    'Name' => 'Anisul Alam',
    'Id' => 2314,
    'City' => 'Ctg',
    'CGPA' => 3.12,
    'Status' => true
);
echo "<pre>";
print_r($info);
echo "<pre>";

// Add a new ('key'=>'value) pair in a associative array:-
// Syntax --> $array_name['key'] = "values";
$info['Phone'] = 8818358269;
print_r($info);

$info['Email'] = "anis512@gmail.com";
print_r($info);
?>