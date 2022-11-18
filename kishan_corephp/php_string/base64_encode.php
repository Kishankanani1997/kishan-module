<?php
$password='Kishan#1290';
echo "My Password is:".$password."<br>";
echo "My Password After Encryption is:".base64_encode($password);

// The base64_encode() function is an inbuilt function in PHP which is used to Encodes data with MIME base64.
// The base64_encoded data takes 33% more space then original data.
// Syntax - string base64_encode( $data )
?>
