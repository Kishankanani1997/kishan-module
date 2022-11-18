<?php
    $grade='C';
    switch($grade)
    {
        case 'A':
            echo "<h2 align='center'>You are topper student.</h2>";
            break;
           
         case 'B':
            echo "<h2 align='center'>You are average student.</h2>";
            break; 
            
        case 'C':
            echo "<h2 align='center'>You are lower student.</h2>";
            break;      

        case 'D':
            echo "<h2 align='center'>You are failed student.</h2>";
            break;  
        
        default:
            echo "<h2 align='center'>Sorry you are not found try again.</h2>";
            break;     
    }


/*
    PHP switch statement is used to execute one statement from multiple conditions. It works like PHP if-else-if statement.

    Syntax:-
    
    switch(expression)
    {
        Case value1: 
            // code to be executed
        break;

        Case value2:
            // code to be executed
        break;
        ..
        ..
        ..
        default:
            // code to be executed if all above cases are not matching
        break;     
    }


*/
?>    
