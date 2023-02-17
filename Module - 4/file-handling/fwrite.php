<?php
$file=fopen("detail.text","w") or die("file not exist");
$text="php is very is very usefull language";
fwrite($file,$text);
fclose($file);
?>