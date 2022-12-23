<?php
$file=fopen("kishan.text","r") or die("file does not exist");
if($file)
{
    echo"File open succesfully!";
}
else
{
    echo"file went wrong ";
}
?>