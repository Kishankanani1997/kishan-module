<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JSON</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="lightpink">

    <center>
        <form method="post">
            <label>Select Your Country</label>
            <select name="Country">

                    <option value="">**Select Your Country**</option>
                    <?php
                    $url="http://country.io/names.json";
                    $data=file_get_contents("$url",TRUE);
                    $mk=json_decode($data);
                    foreach($mk as $mk1)
                    {
                     ?>
                     <option value="<?php echo $mk1; ?>"> <?php echo $mk1; ?> </option>
                     <?php   
                    }
                    ?>
                  
            </select>
            <br> <br>

            <label>Select ISO Code:-</label>
                <select name="ISO Code">
                <option value="">**Select ISO Code:**</option>

                <?php
                $url="http://country.io/iso3.json";
                $data=file_get_contents($url,TRUE);
                $zx=json_decode($data);

                  foreach($zx as $zx1)
                {
                ?>
                <option value="<?php echo $zx1; ?>"> <?php echo $zx1;?></option>
                <?php
                }
                ?>
                </select>


            <br> <br>

            <label>Select Capital City:-</label>
            <select name="Capital City">
                <option value="">**Select Capital City**</option>

                <?php
                    $url="http://country.io/capital.json";
                    $data=file_get_contents($url,TRUE);
                    $jj=json_decode($data);

                    foreach($jj as $jj1)
                    {
                ?>
                    <option value="<?php echo $jj1; ?>"> <?php echo $jj1;?></option>
                    <?php
                    }
                    ?>
            </select>
            <br> <br>

            <label>Select Your State:-</label>
            <select name="State">
                <option value="">**Select your state**</option>

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
                    <option value="">**Select your City**</option>
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

            <br><br>

            <label>Select Curency:-</label>
            <select name="Currency">
                <option value="">**Select Curency:**</option>

                <?php
                    $url="http://country.io/currency.json";
                    $data=file_get_contents($url,TRUE);
                    $as=json_decode($data);

                    foreach($as as $as1)
                    {
                ?>
                    <option value="<?php echo $as1; ?>"> <?php echo $as1;?></option>
                    <?php
                    }
                    ?>
            </select>

            <br><br>

                <label>Select Phone Code:-</label>
                <select name="Phone Code">
                <option value="">**Select Phone Code:**</option>

                <?php
                $url="http://country.io/phone.json";
                $data=file_get_contents($url,TRUE);
                $mm=json_decode($data);

                  foreach($mm as $mm1)
                {
                ?>
                <option value="<?php echo $mm1; ?>"> <?php echo $mm1;?></option>
                <?php
                }
                ?>
                </select>

            <br> <br>
        </form>
    </center>

    
</body>
</html>