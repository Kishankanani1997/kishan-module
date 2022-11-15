<?php
// mktime() - This is a function which is used to print current date, future date, past date and time of system.

// Syntax of mktime - mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("Y"))

$today=mktime(0,0,0,date("m")+2,date("d")+17,date("y")+5);

// echo "Today's Date is:".date("d/m/Y",$today);    This shows the today's date.

// echo "Tomorrow's Date is:".date("d/m/y",$today);   this shows the tomorrow's date.

// echo "Before 25 days and 3 months the date is :".date("d/m/y",$today); this shows the past date.

echo "After 17 days and 2 months and 5 years the date is:".date("d/m/y",$today);


?>