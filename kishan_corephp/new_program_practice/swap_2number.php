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
if(isset($_POST["submit"]))
{
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];

    $number1=$number1+$number2;
    $number2=$number1-$number2;
    $number1=$number1-$number2;

    echo"<h1 align='center'>After swapping:$number1,$number2</h1>";

}
?>
    <center> 
        <form method="post"> 
            Enter any Number1:
            <input type="text" name="number1" placeholder="Enter any Number" required> <br> <br>
            Enter any Number2:
            <input type="text" name="number2" placeholder="Enter any Number" required> <br> <br>
           
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>

</body>
</html>