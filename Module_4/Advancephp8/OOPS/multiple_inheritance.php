<?php
//Note : multiple inheritance is not supported in php and java only c++ and python will support multiple inheritance 
class phone
{
    public function item()
    {
        $name="IPHONE 13 is best Smartphone";
        echo $name."<br>";
    }
}
class brand 
{
    public function item1()
    {
        $name="Iphone brand name is Apple";
        echo $name."<br>";
    }
}
class purchase extends phone,brand
{
    public function itme2()
    {
        $name="i have purchased on july 2022";
        echo $name;
    }
}
$obj=new purchase;
$obj->item();
$obj->item1();
$obj->item2();
?>