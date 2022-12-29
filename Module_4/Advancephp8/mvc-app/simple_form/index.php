
<?php
require_once("controller/controller.php");
?>

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

    <center>
        <form method="post">

   <lablel>Name:</label> <input style="font-size:16px;" type="text" name="name" placeholder="Enter your Fullname" required> <br> <br>
    <lablel>Email:</label> <input style="font-size: 16px;" type="text" name="email" placeholder="Enter your Email" required> <br> <br>
    <input style="background-color: red; color: white; font-size: 18px;" type="submit" name="submit" value="login">
        </form>
    </center>


</body>
</html>