<?php
interface A
{
    public function item(); // declared a function
}
interface B
{
    public function item1(); // declared a function
}
interface C
{
    public function item2(); // declared a function
}
interface D
{
    public function item3(); // declared a function
}
class E implements A,B,C,D
{
    public function item()
    {
        echo "Hello i am learning PHP"."<br>";
    }

    public function item1()
    {
        echo "Hello i am learning Bootstrap"."<br>";
    }

    public function item2()
    {
        echo "Hello i am learning Javascript"."<br>";
    }

    public function item3()
    {
        echo "Hello i am learning CSS"."<br>";
    }
}
$obj=new E;
$obj->item();
$obj->item1();
$obj->item2();
$obj->item3();
?>