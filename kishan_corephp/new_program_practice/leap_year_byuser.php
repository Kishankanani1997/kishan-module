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
<body bgcolor="red">
    <?php
    if(isset($_POST["check"]))
 {
        $year=$_POST["year"];

        if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
    {
    echo "<h2 align='center'>$year is a Leap Year.</h2>";    
    }
 
    else  
    {  
    echo "<h2 align='center'>$year is not a Leap Year.</h2>";    
    }
 }   
    ?>
    <center>
        <form method="post">
            Enter any Year:
            <input type="text" name="year" placeholder="Enter any Year*" required> <br> <br>
            <input style="color: blue;" type="submit" name="check" value="Check">
        </form>
    </center>
</body>
</html>