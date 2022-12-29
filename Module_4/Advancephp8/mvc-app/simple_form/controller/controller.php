<?php
require_once("model/model.php");
class item1 extends item
{
    public function __construct()
    {
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            echo "<h2 align='center' style='color:blue'>Your name is :".$name."<h2>";
            echo "<h2 align='center' style='color:purple'>Your email is :".$email."<h2>";
            
        }
    }
}
$obj=new item1;
?>