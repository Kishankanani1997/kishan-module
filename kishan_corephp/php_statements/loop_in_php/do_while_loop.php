<?php
/*
    The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

        Syntax -  do
                  {
                  code to be executed;
                  } 
                  while (condition is true);
*/
$k=3;
do
{
    echo $k."<br>";
    $k++;
}
while($k<=10);
?>