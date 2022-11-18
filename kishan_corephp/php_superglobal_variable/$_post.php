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
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
    
    echo"<h2 align='center'>My Name is:$name</h2>";
    }
    ?>

    <center>
        <form method="post">
            Enter Your Name:
            <input type="text" name="name" placeholder="Enter your name" required> <br> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>
</html>