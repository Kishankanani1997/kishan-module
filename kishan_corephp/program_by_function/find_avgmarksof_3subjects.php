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
<body bgcolor="aqua">
    <?php
    if(isset($_POST["find"]))
    {
        $science=$_POST["science"];
        $english=$_POST["english"];
        $maths=$_POST["maths"];

        $totalmarks=($science+$english+$maths);
        $avg=$totalmarks/3;

        echo"<h2 align='center'>Total Marks of 3 Subjects is:$totalmarks</h2>";
        echo"<h2 align='center'>Average Marks is:$avg</h2>";
    }
    ?>

    <center>
        <form method="post">
            Enter Marks of Science Subject:
            <input type="text" name="science" placeholder="Enter Marks of Subject*" required> <br> <br>
            Enter Marks of English Subject:
            <input type="text" name="english" placeholder="Enter Marks of  Subject*" required> <br> <br>
            Enter Marks of Maths Subject:
            <input type="text" name="maths" placeholder="Enter Marks of Subject*" required> <br> <br>
            <input style="background-color: red; color: blue;" type="submit" name="find" value="Find">
        </form>
    </center>
</body>
</html>