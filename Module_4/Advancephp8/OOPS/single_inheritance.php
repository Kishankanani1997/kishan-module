<?php
// Here in single inheritance one class property only access by its one child class it is called single inheritance.
class phone
{
    public function item()
    {
        $name="IPHONE 13 is best Smartphone";
        echo $name."<br>";
    }
}
class brand extends phone
{
    public function item1()
    {
        $name="Iphone brand name is Apple";
        echo $name."<br>";
    }
}
$obj=new brand;
$obj->item();
$obj->item1();
?>