<?php
class item
{
    public function __construct($num1,$num2)
    {
        $number=$num1*$num2;
        echo "Multiplication of two number is : ".$number;
    }
}
$obj=new item(70,50);
// Output:- Multiplication of two number is : 3500
?>
