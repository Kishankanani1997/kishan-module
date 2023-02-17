<?php
/*
    Class:- A class is a member and its member function.
            class is an instance of object.
*/

class test
{
    public function display()
    {
        $name="Hello php!";
        echo $name;
    }
}
$obj=new test;
$obj->display();
// Output - HEllo php! 
?>