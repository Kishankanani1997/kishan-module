<?php
$num=372;
$total=0;
$a=$num;

while($a!=0)
{
    $rem=$a%10;
    $total=$total+$rem*$rem*$rem;
    $a=$a/10;
}
if($num==$total)
{
    echo "The number is armstrong number";
}
else
{
    echo "The number is not armstrong number";
}
?>