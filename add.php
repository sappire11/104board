<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>職缺報報 f</title>
</head>

<body>
    <div class="container">
        <h1>Job Board 職缺報報-新增職缺</h1>
        <a href="admin.php">回到管理頁</a>
        <form method="POST" action="handle_add.php">
            <div>職缺名稱：<input name="title" /></div>
            <div>職缺描述：<textarea name="description" rows="10"></textarea></div>
            <div>薪水範圍：<input name="salary" /></div>
            <div>職缺連結：<input name="link" /></div>
            <div>到期日：<input type="date" name="date"></div>
            <input type="submit" value="送出">
        </form>


    </div>
</body>

</html>