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
<body bgcolor="pink">

    <?php
    if(isset($_POST["submit"]))
    {
        $amount=$_POST["amount"];
        $interest=$_POST["interest"];
        $years=$_POST["years"];

        $simpleint=$amount*$interest*$years/100;

        echo "<h2 align='center'>Simple Interest is:$simpleint</h2>";
    }
    ?>

    <center>
        <form method="post">
            Enter Principal Amount:
            <input type="text" name="amount" placeholder="Enter Principal Amount*" required> <br> <br>
            Enter Rate of Interest:
            <input type="text" name="interest" placeholder="Enter Rate of Interest*" required> <br> <br>
            Enter Number of Years:
            <input type="text" name="years" placeholder="Enter number of years*" required> <br> <br>

            <input style=color:blue type="submit" name="submit" value="Submit">
        </form>
    </center>

</body>
</html>