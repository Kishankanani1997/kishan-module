<?php
$num = 0;
$num1 = 0;
$num2 = 1;
echo "Fibonacci Series till number 34 is:";
echo "\n";
echo $num1.' '.$num2.' ';
while($num < 8 )
{
    $num3 = $num2 + $num1;
    echo $num3.' ';
    $num1 = $num2;
    $num2 = $num3;
    $num = $num + 1;
}
?>