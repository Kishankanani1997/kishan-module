<?php
class namecheck
{
    public function display()
    {
        $arr=array("ram","rakesh",",meet","raju");
        if(in_array("raju",$arr))
        {
            echo "The name is availbale";
        }
        else
        {
            echo "The name is not available";
        }
    }
}
$obj=new namecheck;
$obj->display();
?>