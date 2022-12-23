<?php
$file=fopen("detail.text","w") or die("file does not exist");
if($file)
{
    echo "file open succes";
}
else
{
    echo "file not exist";
}
?>