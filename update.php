<?php
    require_once("./conn.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM jobs WHERE id = " . $id;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // 檢查是否有找到職缺
    if (!$row) {
        die("找不到該職缺");
    }
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
        <h1>Job Board 職缺報報-編輯職缺</h1>
        <a href="admin.php">回到管理頁</a>
        <form method="POST" action="handle_update.php">
            <!-- 加入隱藏的 ID 欄位 -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div>職缺名稱：<input name="title" value="<?php echo htmlspecialchars($row["title"]) ?>"></div>
            <div>職缺描述：<textarea name="description" rows="10"><?php echo htmlspecialchars($row["description"]) ?></textarea></div>
            <div>薪水範圍：<input name="salary" value="<?php echo htmlspecialchars($row["Salary"]) ?>"></div>
            <div>職缺連結：<input name="link" value="<?php echo htmlspecialchars($row["link"]) ?>"></div>
            <input type="submit" value="送出">
        </form>
    </div>
</body>

</html>
