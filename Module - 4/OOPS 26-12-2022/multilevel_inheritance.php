<?php
// Here in multilevel inheritance if a=>b=>c=>d=?f this chain is called multilevel inheritance.
class phone
{
    public function item()
    {
        $name="Iphone 14 is best Smartphone";
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
class purchase extends brand
{
    public function item2()
    {
        $name="I have purchased Apple iphone from flipkart";
        echo $name."<br>";
    }
}
class date extends purchase
{
    public function item3()
    {
        $name="the date i have purchased is 20th july 2022";
        echo $name."<br>";
    }
}
$obj=new date();
$obj->item();
$obj->item1();
$obj->item2();
$obj->item3();
// output - Iphone 14 is best Smartphone
//          Iphone brand name is Apple
//          I have purchased Apple iphone from flipkart
//          the date i have purchased is 20th july 2022 
?>