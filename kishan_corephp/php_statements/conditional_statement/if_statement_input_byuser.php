<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="lightslategrey">

<?php
if(isset($_POST["check"]))
{
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];
    
    if($number1>$number2)
    {
        echo"<h2 align='center'>A is greater than B</h2>";
    }
    else
    {
        echo"<h2 align='center'>A is less than B</h2>";
    }
    
}

?>
    <center>
    <form method="post">
        Enter any Number A:
        <input type="text" name="number1" placeholder="Enter any number" required> <br> <br>
        Enter any Number B:
        <input type="text" name="number2" placeholder="Enter any number" required> <br> <br>
        <input type="submit" name="check" value="Check">
    </form>
    </center>
</body>
</html>