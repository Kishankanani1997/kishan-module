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
<body bgcolor="lightgrey">
    <?php
    if(isset($_POST["check"]))
    {
        $number=$_POST["number"];
        if($number%2==0)
        {
            echo"<h2 align='center'>The Number is Even Number</h2>";
        }
        else
        {
            echo"<h2 align='center'>The Number is Odd Number</h2>";
        }
    }
    ?>
    <center>
        <form method="post">
            Enter any Number:
            <input type="text" name="number" placeholder="Enter any Number" required> <br> <br>
            <input style="background-color: blue; color:red" type="submit" name="check" value="Check">
        </form>
    </center>

</body>
</html>