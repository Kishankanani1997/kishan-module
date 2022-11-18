<?php
/*
    There are two types of call a functions in PHP.

    1. Call by value - Call by value means passing the value directly to a function.
                       The called function uses the value in a local variable; any changes it do not affect the souurce variable. 


    2. Call by reference - In PHP call by reference modification of values inside a function, modifies the actual vcalue.
                        The reference of the function parameter is represented by ampersand(&) symbol which is used inside the parenthesis before the argument.
*/

// CALL BY VALUE
function mult($a,$b)
{
    $c=$a*$b;
    echo "Multiplication of two number is:".$c;
}
mult(10,20)
?>