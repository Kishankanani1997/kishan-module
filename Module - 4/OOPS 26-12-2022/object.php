<?php
/*
To declare an object of a class we need to use new statement.
 what is object : An object is instances of class.
 object will called through new keyword 

Syntax of Object:-
class myclass
{
   ...
}
$obj=new myclass;
*/ 

class item 
{
    public function display()
    {
    $name="hello i am php";
    echo $name;
    }
}
$obj=new item;
$obj->display();
// Output - hello i am php
?>