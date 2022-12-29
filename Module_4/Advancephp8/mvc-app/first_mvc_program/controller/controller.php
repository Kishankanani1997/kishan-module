<?php
require_once("model/model.php");
class product extends item
{
    public function display()
    {
        $name="First MVC Program";
        echo $name;
    }
}
$obj=new product;
$obj->display();
?>