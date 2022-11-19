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
<body bgcolor="lightskyblue">
    <?php
    if(isset($_POST["submit"]))
    {
        $name1=$_POST["name1"];

        echo"<h2 align='center'>Your Name is:$name1</h2>";
    }
    ?>
    
    <center>
        <form method="post">
            Enter Your Name:
            <input type="text" name="name1" placeholder="Enter Your Name" required> <br> <br>
            <input style="color: red;" type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>
</html>