<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function rock()
        {
        if(confirm('Are you sure you want to delete data'))
        {
            alert('Your data deleted succesfully')
            window.location="https://www.google.com";
        }
        else
        {
            window.location='confirm_delete.php';
        }
         }
    </script>
</head>
<body>
    <button type="button" onclick="rock()">Delete Here</button>
</body>
</html>