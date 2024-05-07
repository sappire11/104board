<?php
     $servername='127.0.0.1';
     $username='root';
     $password='12345678';
     $dbname='jobs';
      
    $conn=new mysqli($servername, $username, $password, $dbname);
    $conn->query('SET NAMES UTF8');

           if($conn->connect_error){
             die("connection failed".$conn->connect_error);
           }
?>