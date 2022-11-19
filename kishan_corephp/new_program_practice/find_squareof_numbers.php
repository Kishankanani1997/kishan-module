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
<body bgcolor="aqua">
    <?php
if(isset($_POST["find"]))
{
    $number=$_POST["number"];

    $value=$number*$number;
    echo"<h1 align='center'>The Square of Number is:$value</h1>";
}
    ?>
    
    <center>
        <form method="post">
            Enter any Number
            <input type="text" name="number" placeholder="Enter any Number" required> <br> <br>
            <input type="submit" name="find" value="Find">
        </form>
    </center>
</body>
</html>