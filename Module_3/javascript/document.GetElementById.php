<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <script>
        function rock()
        {
            document.getElementById("paragraph").style="color:blue; font-size:50px; font-weight:500; background-color:pink";
        }

    </script>
</head>
<body>
    
    <p id="paragraph">Hello how are you</p>
    <button type="button" onclick="rock()">Click here to proceed</button>
</body>
</html>