<?php
/*
    TRAITS:-PHP only supports single inheritance: a child class can inherit only from one single parent.
            So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

            Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).  Traits are declared with the trait keyword
*/
trait A
{
    public function item()
    {
        $name="Hi How are you?"."<br>";
        echo $name;
    }
}
trait B
{
    public function item1()
    {
        $name="I am Fine!"."<br>";
        echo $name;
    }
}
trait C
{
    public function item2()
    {
        $name="What is your profession?"."<br>";
        echo $name;
    }
}
trait D
{
    public function item3()
    {
        $name="I am doing Job!"."<br>";
        echo $name;
    }
}
class E
{
    use A,B,C,D;
}
$obj=new E;
$obj->item();
$obj->item1();
$obj->item2();
$obj->item3(); 
// Output:-Hi How are you?
//         I am Fine!
//         What is your profession?
//         I am doing Job!
?>