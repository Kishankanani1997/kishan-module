<?php
    class item
    {
        public function item()
        {
           $name="My name is patel";
           echo $name; 
        }
    }
$boj=new item;   


// User Defined Constructor does not support the php version 8, it gives the output in verion 7 or earlier.
// so that's why we do not use the user defined constructor.
?>