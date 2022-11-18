<?php
$password='S2lzaGFuIzEyOTA=';
echo "My password is:".$password."<br>";
echo "My password After Decryption is:".base64_decode($password);

// The base64_decode() is an inbuilt function in PHP which is used to Decodes data which is encoded in MIME base64.
// Syntax - string base64_decode( $data);
?>