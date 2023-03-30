<?php
    include "dbconn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM register where id = $id"; 
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: index.php?msg=User Record Deleted");
    }
    else
    {
        echo "Failed". mysqli_error($conn);
    }
?>