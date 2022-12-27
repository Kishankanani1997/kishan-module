<?php
/*
    Pseudo Variable - A pseudo variable is used to called direct inside of method or globally access any avaribles  in its method.

    It is used with $this symbol.
*/
class test
{
    public $name="php is backed language!";
    public function display()
    {
        echo $this->name;
    }
}
$obj=new test;
$obj->display();
?>