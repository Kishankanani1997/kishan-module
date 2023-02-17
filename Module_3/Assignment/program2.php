<?php  
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
//For testing  
for($year=1901; $year<2016; $year++)  
{  
    If (isLeap($year))  
    {  
        echo "$year : LEAP YEAR <br/>";  
    }  
    else  
    {  
        echo "$year : Not LEAP YEAR <br/>";  
    }  
}  
?>  