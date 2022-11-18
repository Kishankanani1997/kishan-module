<?php
$password='Ramesh#12345';
echo "My Password is:".$password."<br>";
echo "My Password After Encryption by md5 Function is:".md5($password);

// MD5 is primarily used to authenticate files. It's much easier to use the MD5 hash to check a copy of a file against an original than to check bit by bit to see if the two copies match. MD5 was once used for data security and encryption, but these days its primary use is authentication.

// The md5() function calculates the MD5 hash of a string. The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorith
// Syntax - md5(string);
?>