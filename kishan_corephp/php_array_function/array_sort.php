<?php
$name=array("hudson","emma","taylor","armani","hermes");
sort($name);

$name1 = count($name);
for($k=0; $k < $name1; $k++)
{
    echo $name[$k];
    echo "<br>";
}
?>