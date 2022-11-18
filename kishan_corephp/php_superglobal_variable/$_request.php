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
    if(isset($_REQUEST["submit"]))
    {
        $name1=$_REQUEST["name1"];
    
    echo "<h2 align='center'>My Name is:$name1</h2>";
    }
    ?>

    <center>
        <form method="post">
            Enter Your Name:
            <input type="text" name="name1" placeholder="Enter your name" required> <br> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>
</html>