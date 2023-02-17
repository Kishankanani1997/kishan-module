<?php
$file=fopen("php.text","w") or die("file npot exist");
$path="php.text";
$remove=unlink($path);
if($remove)
{
    echo "file has removed";
}
?>