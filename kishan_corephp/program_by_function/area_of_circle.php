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
<body bgcolor="grey">

    <?php
    if(isset($_POST["check"]))
    {
        $pi=3.14;
        $number1=$_POST["number"];
        $area=$pi*$number1*$number1;

        echo "<h2 align='center'>Area of Circle is:$area</h2>";
    }
    ?>

    <center>
    <form method="post">
        Enter any number:
        <input type="text" name="number" placeholder="Enter any number" required>
        <input type="submit" name="check" value="Check">
    </form>
    </center>    
</body>
</html>