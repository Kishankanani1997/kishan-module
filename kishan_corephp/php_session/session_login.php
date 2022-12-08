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

<center>
    <form method="post">
        Enter Your Email:
        <input type="text" name="email" placeholder="Enter Your Email" required> <br> <br>
        Enter Your Password:
        <input type="password" name="password" placeholder="Enter Your Password" required> <br> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</center>

<?php
session_start();
if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    if($email=='kishan@gmail.com' && $password=='k123')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h2 align='center' style='color:green'>You are Succesfully Logged in</h2>";
        header('refresh:4,welcome.php');
    }
    else
    {
        echo"<h2 align='center' style='color:red'>Your Email or Password is Incorrect</h2>";
        header('refresh:4,logout.php');
    }
}
?>

