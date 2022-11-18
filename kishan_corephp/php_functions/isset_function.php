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
            $name=$_POST["Name"];
            echo "<h2 align='center'> Your name is:$name</h2>";

            $pass=$_POST["password"];
            echo "<h2 align='center'> Your password is:$pass</h2>";
        }
    ?>
    <center>
        <form method="post">
         Enter Your Name: <input style="background-color: blue; color:white;" type="text" name="Name" placeholder="Enter Your Name" required> <br> <br>
         Enter your Password : <input style="background-color: red; color:beige;" type="password" name="password" placeholder="Enter your Password" required> <br> <br>
         <h3> <input style="background-color:lightseagreen;" type="submit" value="submit" name="submit">  </h3>
        </form>
    </center>
</body>
</html>