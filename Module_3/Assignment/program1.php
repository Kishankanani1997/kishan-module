<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Program - 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="lightblue">

    <?php
    if(isset($_POST["find"]))
    {
        $physics=$_POST["physics"];
        $chemistry=$_POST["chemistry"];
        $biology=$_POST["biology"];
        $maths=$_POST["maths"];
        $computer=$_POST["computer"];

        $totalmarks=$physics+$chemistry+$biology+$maths+$computer;
        $sumofmarks=500;
        $percentage=($totalmarks*100)/500;

        echo "<h2 align='center'>Total Marks of 5 Subject is:$totalmarks</h2>";
        echo "<h2 align='center'>Percentage of 5 Subject is:$percentage</h2>";
}
    ?>

    <center>
        <form method="post">
        <label>Physics:-</label>    <input type="text" name="physics" placeholder="Enter marks of Physics" required><br> <br>
         <label>Chemistry:-</label>   <input type="text" name="chemistry" placeholder="Enter marks of Chemistry" required><br><br>
        <label>Biology:-</label>    <input type="text" name="biology" placeholder="Enter marks of Biology" required><br><br>
        <label>Mathematics:-</label>    <input type="text" name="maths" placeholder="Enter marks of Mathematics" required><br><br>
        <label>Computer:-</label>    <input type="text" name="computer" placeholder="Enter marks of Computer" required><br><br>
        <label></label>    <input type="submit" name="find" value="submit">
        </form>
    </center>
    
</body>
</html>