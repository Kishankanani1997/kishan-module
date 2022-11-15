<?php
$amount=5000;
$checkindate=mktime(0,0,0,date("m"),date("d"),date("Y"));
$checkoutdate=mktime(0,0,0,date("m"),date("d")+5,date("Y"));
$difference=($checkoutdate-$checkindate)/86400;
echo "Total Number of Day's spent is:".$difference."<br>";
echo "Total Amount to Pay is:".$difference*$amount;
?>