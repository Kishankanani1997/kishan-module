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
   if(isset($_POST["add"]))
   {
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];
    $add=$number1+$number2;

    echo "<h2 align='center'>Addition of Two Number is:$add</h2>";
   }
   ?>
    <center>
    <form method="post">
        Enter any number:
        <input type="text" name="number1" placeholder="Enter any number*" required> <br> <br>
        Enter any number:
        <input type="text" name="number2" placeholder="Enter any number*" required> <br> <br>
        <input type="submit" name="add" value="Add">
    </form>
    </center>
</body>
</html>