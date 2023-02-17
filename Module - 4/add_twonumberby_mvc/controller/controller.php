<?php
require_once("model/model.php");
class number2 extends number1
{
    public function item($num1,$num2)
    {
        $number=$num1+$num2;
        echo "Addition of two number is : ".$number;
    }
}
$obj=new number2;
$obj->item(20,80)
?>