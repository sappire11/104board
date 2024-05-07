<?php
require_once("./conn.php");

    $title=$_POST['title'];
    $desc=$_POST['description'];
    $salary=$_POST['salary'];
    $link=$_POST['link'];
    $date=$_POST['date'];

    if(empty($title)||empty($desc)||empty($salary)||empty($link)||empty($date)){
        die("請檢查資料");
    }

    $sql="INSERT INTO jobs(title,description,salary,link,date) VALUES('$title','$desc'
    ,'$salary','$link','$date')";
    $result=$conn->query($sql);

    if($result){
        echo "success";
        header('Location:./admin.php');
    }else{
        echo "failed".$conn->error;
    }

?>