<?php

    $connect = new mysqli('localhost:3309', 'root', '', 'crud_db');

    if($connect){  
    
    }else{
        echo "ERROR " . mysqli_error($connect);
    }
?>
