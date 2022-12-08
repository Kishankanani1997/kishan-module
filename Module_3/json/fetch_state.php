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
<body>
    <center>
        <form method="post">
            <label>Select Your State:-</label>
            <select name="State">
                <option value="">--Select your state--</option>

                <?php
                    $url="state_list_json.json";
                    $data=file_get_contents($url,TRUE);
                    $kk=json_decode($data);

                    foreach($kk as $kk1)
                    {
                ?>
                    <option value="<?php echo $kk1; ?>"> <?php echo $kk1;?></option>
                    <?php
                    }
                    ?>

                </select>
                    <br> <br>

                    <label>Select Your City:-</label>
                    <select name="City">
                    <option value="">--Select your City--</option>
                    <?php
                    $url="city_list_json.json";
                    $data=file_get_contents($url,TRUE);
                    $aa=json_decode($data);
                    foreach($aa as $aa1)
                   {
                    ?>
                    <option value="<?php echo $aa1; ?>"> <?php echo $aa1; ?> </option>
                    <?php
                   }
                   ?>


            </select>
        </form>
    </center>
</body>
</html>