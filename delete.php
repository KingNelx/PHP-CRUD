<?php
    require_once 'connect.php';
    if(isset($_GET['id'])){
        $ID = $_GET['id'];

        $sql = "DELETE FROM DotaHeroes WHERE Heroe_ID =  $ID";
        $result = mysqli_query($connect, $sql);
        if($result){
            header('location: display.php');
        }else{
            die(mysqli_error($connect));
        }
    }

?>
