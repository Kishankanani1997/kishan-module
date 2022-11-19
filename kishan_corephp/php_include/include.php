<?php
    if(isset($_POST["find"]))
    {
        $number=$_POST["number"];

        $value=$number*$number;
        echo"<h1 align='center'>The Square of Number is:$value</h1>";
    }
?>