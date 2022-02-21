<?php

include './connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `ecare` where id = '$id'";
    $result = mysqli_query($connect, $sql);

    if($result){
        // echo "deleted successfully";
        header('location:read.php');
    }

}

?>