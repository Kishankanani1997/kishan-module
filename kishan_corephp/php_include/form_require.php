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
<body  bgcolor="lightskyblue">
    
    <?php
    //require("require.php");
    //require("require.php");
    //require("require.php");

    // here if we write the above require code 3 times it will display the output 3 times.

    require_once("require.php");
    require_once("require.php");
    require_once("require.php");

    // Here if we write the above require_once code 3 times but it will display the output only single time.


/*
    REQUIRE FUNCTION:- require will produce a fatal error (E_COMPILE_ERROR) and stop the script.

    require is a function i.e used to reuse code one page to another page if require not get file extention its return fatal error and rest of code excuted is stopped.

         Syntax - require 'filename';
*/
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