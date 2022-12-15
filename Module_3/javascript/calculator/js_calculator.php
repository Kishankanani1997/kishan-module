<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JS Calculator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <script>
        function add()
        {
        let a=parseInt(prompt('Enter any a Number'));
        let b=parseInt(prompt('Enter any b number'));
        let c=a+b;
        document.write('Addition of two number is:',c)
        }
    </script>    

    <script>
        function sub()
        {
            let a=parseInt(prompt('Enter any a number'));
            let b=parseInt(prompt('Enter any b number'));
            let c=a-b;
            alert("Subtraction of two number is:"+c)
        }
    </script>

    <script>
        function mult()
        {
            let a=parseInt(prompt('Enter any a number'));
            let b=parseInt(prompt('Enter any b number'));
            let c=a*b;
            alert("Subtraction of two number is:"+c)
        }
    </script>

<script>
    function divi()
    {
        let a=parseInt(prompt('Enter any a number'));
        let b=parseInt(prompt('Enter any b number'));
        let c=a/b;
        alert("Subtraction of two number is:"+c)
    }
</script>

<script>
    function per()
    {
        let a=parseInt(prompt('Enter 1st subject mark'));
        let b=parseInt(prompt('Enter 2nd subject mark'));
        let c=a+b;
        let d=c/2;
        alert("Average of four subject is:"+d)
    }
</script>

</head>
<body>
    <button type="button" onclick="add()">Click here to do Addition</button>
    <button type="button" onclick="sub()">Click here to do Subtraction</button>
    <button type="button" onclick="mult()">Click here to do Multiplication</button>
    <button type="button" onclick="divi()">Click here to do Division</button>
    <button type="button" onclick="per()">Click here to find Average</button>
</body>
</html>