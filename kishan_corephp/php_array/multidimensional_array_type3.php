<?php
/*
        MULTIDIMENSIONAL ARRAY:- A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index.
*/ 

    $arr=array(("color")=>array("Pink","Blue","Red","Blue"),("fruit")=>array("strawberry","cherry","mango","litchi"));
    print_r($arr);
    print_r($arr["color"][1]);
?>