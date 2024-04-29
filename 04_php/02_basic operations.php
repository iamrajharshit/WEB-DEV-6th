<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$x = "Hello World";
echo str_replace("world","everyone",$x);
echo strrev($x);

print_r($x);

$t = 10;  
$y = 6;

echo $t + $y; //addidtion

$u = 10;  
$v = 6;

echo $u - $v; //subraction

echo $u * $v; //Multiplication

echo $u / $v; //Division

echo $u % $v; //modulus

//Assigment

echo $u;

//Addition
$x = 20;  
$x += 100;
echo $x;

//Subtraction
$x = 50;
$x -= 30;
echo $x;

//Multiplication
$x = 5;
$x *= 6;
echo $x;

//Division
$x = 10;
$x /= 5;
echo $x;

//Modulus
$x = 15;
$x %= 4;
echo $x;


//
$x = 100;  
$y = "100";

var_dump($x == $y); 
// returns true because values are equal



?>
</body>
</html>
