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
<body bgcolor="lightgreen">

<?php
if(isset($_POST["submit"]))
{
    $amount=$_POST["amount"];
    $years=$_POST["years"];
    $rate=$_POST["rate"];
    

    $compint = $amount*pow((1+$rate/100),$years);
    
    echo "<h1 align='center'>The Compound Interest is:$compint</h1>";
}
?>
    <center> 
        <form method="post"> 
            Enter Principal Amount:
            <input type="text" name="amount" placeholder="Enter Principal Amount" required> <br> <br>
            Enter Number of years:
            <input type="text" name="years" placeholder="Enter Number of years" required> <br> <br>
            Enter Rate of Interest:
            <input type="text" name="rate" placeholder="Enter Rate of Interest" required> <br> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>

</body>
</html>