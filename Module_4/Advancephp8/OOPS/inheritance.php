<?php
/*
    INHERITANCE:- Inheritance is ysed to access one class property with another class i.e. called inheritance
    There are 3 types of inheritance:
    1. Single inheritance 
    2. Multiple inheritance
    3. Multilevel inheritance
*/ 
class A
{
    public function item()
    {
        $name="Hello my name is hitesh";
        echo $name."<br>";
    }
}
class B extends A 
{
    public function item1()
    {
        $name="hello my surname is patel";
        echo $name."<br>";
    }
}
$obj=new B;
$obj->item();
$obj->item1();
?>