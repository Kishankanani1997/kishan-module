<?php
/*
    Method overloading:- When we use same function passed with different parameter or different argument there we used method overloading / compile time.

    Polymorphism in php does not support the method overloding.
*/
class A
{
    public function number($num1,$num2)
    {
        $num=$num1+$num2;
        echo $num;
    }
}
class B extends A
{
    public function number($num1,$num2,$num3)
    {
        $num=$num1*$num2*$num3;
        echo $num;
    }
}
$obj=new B;
$obj->number(2,7,9);
?>