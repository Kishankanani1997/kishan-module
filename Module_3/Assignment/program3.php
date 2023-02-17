<?php
function largest ($num1,$num2,$num3)
{
  $maximum=$num1;

if($num1 >= $num2 && $num1 >= $num3)
  $maximum = $num1;

if($num2 >= $num1 && $num2 >= $num3)
$maximum = $num2;

if($num3 >= $num1 && $num3 >= $num2)
$maximum = $num3;

    echo "Largest number from $num1, $num2, $num3 is : $maximum\n";
}
largest(39,10,50);
?>