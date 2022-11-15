<?php
// DATATYPES - Dataypes defines which types of values are stored in variables such as int, float, string, boolean, Etc.
// var_dump() - This is a function which is used to find all details about the variables.

$a=20;
echo $a."<br>";
echo var_dump($a)."<br>"; // Example of (int)

$name='kishan';
echo $name."<br>";
echo var_dump($name)."<br>"; // Example of (string)

$b=90.54678210;
echo $b."<br>";
echo var_dump($b)."<br>"; // Example of (float)

$c=true;
echo $c."<br>";
echo var_dump($c)."<br>"; // Example of (boolean - true)

$d=false;
echo $d."<br>";
echo var_dump($d)."<br>"; // Example of (boolean - (false)

$e=12345987655679090;
echo $e."<br>";
echo var_dump($e)."<br>"; // Example of (int)

$f=0x2B;
echo $f."<br>";
echo var_dump($f)."<br>"; // Example of (int)
?>