<?php
/*
    Method overriding:- When we use same function passed with same parameter or same argument therer we used method overriding.
*/ 
class A 
{
    public function display($num1,$num2)
     {
        $num=$num1*$num2;
        echo $num;
     }
} 
class B extends A 
{
    public function display($num1,$num2)
    {
        $num=$num1+$num2;
        echo $num;
    }
}
$obj=new B;
$obj->display(50,90);
//Output:-140
?>