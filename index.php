<?php
    session_start();
    require_once('./conn.php');
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
        <h1>Job Board 職缺報報</h1>

          <!-- 登入和登出按鈕 -->
          <div class="login-buttons">
            <?php
            
            if (isset($_SESSION['username'])) {
                // 顯示用戶名稱和登出按鈕
                echo "<span class='welcome-msg'>Hi, " . $_SESSION['username'] . "</span>";
                echo "<a class='logout-button' href='logout.php'>登出</a>";
            } else {
                // 未登入，顯示登入和註冊按鈕
                echo "<a class='login-button' href='login.php'>登入</a><br><br>";
                echo "<a class='register-button' href='register.php'>註冊</a>";
            }
            ?>
        </div>

        <div class="jobs">
            <?php
            $sql = 'SELECT * from jobs ORDER BY create_at DESC'; //降冪排列
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='job'>";
                    echo "<h2 class='job_title'>" . $row['title'] . "</h2>";
                    echo "<p class='job_desc'>職稱敘述：" . $row['description'] . "</p>";
                    echo "<p class='job_salary'>薪水範圍：" . $row['Salary'] . "</p>";
                    
                    // 比較當前日期與職缺的到期日期
                    $currentDate = date('Y-m-d');
                    if ($currentDate > $row['date']) {
                        // 職缺已到期，顯示「已到期」並應用紅色字體樣式
                        echo "<p class='job_date' style='color: red;'>職缺到期日：" . $row['date'] . "（已到期）</p>";
                    } else {
                        // 職缺未到期，顯示到期日期
                        echo "<p class='job_date'>職缺到期日：" . $row['date'] . "</p>";
                    }
                    
                    echo "<a class='job_link' href='" . $row['link'] . "'>更多資訊</a>";
                    echo "</div>";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>
