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
if(isset($_POST["login"]))
{
$email=$_POST["email"];
$passd=$_POST["passd"];

if($email=="k12@gmail.com" && $passd=="k123")
{
    echo "<h2 align='center' style='color:green'>Logged in Succesfully </h2>";
    header("location:welcomepage.php");
}
else
{
    echo "<h2 align='center' style='color:red'> Email & Password is incorrect</h2>";
    header("refresh:5,loginpage2.php");
}
}
?>
    <center>
    <form method="post">
    <h2>Login Form</h2>

    Enter your Email : <input type="text" name="email" placeholder="Enter Your Email" required> <br> <br>
    Enter your Password: <input type="password" name="passd" placeholder="Enter Your Password" required> <br> <br>
    <input style="color: red;" type="submit" name="login" value="Login">

    </form>
    </center>

</body>
</html>
