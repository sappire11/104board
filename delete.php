<?php
    require_once('./conn.php');
    $id=$_GET['id'];
    $sql="DELETE FROM jobs WHERE id=" .$id;
    if($conn->query($sql)){
        header('Location: http://localhost:8080/104board/admin.php');
    }else{
        echo"failed".$conn->error;
    }




?>