<?php require_once('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>職缺報報</title>
</head>

<body>
    <div class="container">
        <h1>Job Board 職缺報報 管理後台</h1>
        <a href="add.php">新增職缺</a>
        <div class="jobs">
        <?php
            $sql='SELECT * from jobs ORDER BY create_at DESC' ;//降冪排列
            $result = $conn->query($sql);
            if($result->num_rows >0 ){
              while($row=$result->fetch_assoc()){
                echo "<div class='job'>";
                echo "<h2 class='job_title'>".$row['title']."</h2>";
                echo "<p class='job_desc'>職稱敘述：".$row['description']."</p>";
                echo "<p class='job_salary'>薪水範圍：".$row['Salary']."</p>";
                echo "<p class='job_date'>職缺到期日：".$row['date']."</p>";
                echo "<a class='job_link' href='./update.php?id=".$row['id']."'>
            編輯職缺</a>";
            echo "<a class='job_link' href='./delete.php?id=".$row['id']."'>
            刪除職缺</a>";

                echo "</div>";

              }
            }

            ?>
            
        </div>

    </div>
</body>

</html>