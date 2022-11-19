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
<body bgcolor="blue">
    
    <?php
    include("include.php");
    /*
    INCLUDE FUNCTION:- Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

         include will only produce a warning (E_WARNING) and the script will continue.

         Syntax - include 'filename';
    */
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