<?php require_once('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="register_style.css">

    <title>註冊頁面</title>
</head>
<body>
    <h1>註冊頁面</h1>
    <form method="POST" action="handle_register.php">
    <div class="container">
        <div class="register">
            <label for="username">帳號：</label>
            <input type="text" id="username" name="username" required>
        </div><br>
        <div>
            <label for="password">密碼：</label>
            <input type="password" id="password" name="password" required>
        </div><br>
        <div>
            <label for="email">信箱：</label>
            <input type="email" id="email" name="email" required>
        </div><br> 
        <div>
            <input type="submit" value="註冊">
        </div>
    </div>
    </form>
</body>
</html>
