<?php

$assarr = array(
    "name"=> "moon",
    "age"=> "23",
    "versity"=> "CU",
);

echo $assarr['name'];


foreach ($assarr as $key => $value) {
    echo  $key .'=>'. $value . "<br>";
}



$mulArr = array(
    array("mobin",25),
    array("mahin",30),
    array("fahim",10),
) ;

echo $mulArr[3][3];
?>