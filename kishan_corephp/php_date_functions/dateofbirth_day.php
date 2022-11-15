<?php
// syntax of mktime - mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("Y"))

echo "The day on 17/4/1997 is:".date("l",mktime(0,0,0,4,17,1997))."<br>";

// kishan Birth date
echo "The day on 17/3/1997 is:".date("l",mktime(0,0,0,3,17,1997))."<br>";

// jenil Birth date
echo "The day on 15/10/2022 is:".date("l",mktime(0,0,0,10,15,2021)); 
?>