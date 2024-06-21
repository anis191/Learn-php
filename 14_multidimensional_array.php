<?php
//Associative array is 98% same as python dictionary!
/*
$array_name = array(
    'key' => 'value',
    'key2' => array(item1,item2,....item_n),
    'key3' => array(
        'key1' => 'value1',
        'key2' => 'value2'
    ),
    'key_n' => 'value_n'
);
*/
$info = array(
    'Name' => 'Anisul Alam',
    'Id' => 2314,
    'City' => 'Ctg',
    'CGPA' => 3.12,
    'Contact' => array(
        'Phone' => 8801814365,
        'Email' => "anis245@gmail.com"
    ),
    'Semester' => array("1st","2nd","3rd","4th","5th","6th"),
    'Status' => true
);
echo "<pre>";
print_r($info);
echo "<pre>";
?>