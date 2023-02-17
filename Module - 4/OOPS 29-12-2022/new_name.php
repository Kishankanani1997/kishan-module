<?php
class A
{
    public function __construct()
    {
        echo "Hello"."<br>";
    }
}
class B extends A 
{
    public function item()
    {
        echo "how are you";
    }
} 
$obj=new B;
$obj->item();
?>