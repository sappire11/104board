<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="register_style.css">
    <title>登入</title>
</head>
<body>
    <h1>登入</h1>
    <form method="POST" action="handle_login.php">
    <div class="container">
         <div class="register">
            <label for="username">帳號：</label>
            <input type="text" id="username" name="username" required>
        </div><br>
        <div class="register">
            <label for="password">密碼：</label>
            <input type="password" id="password" name="password" required>
        </div><br>
        <div class="register">
            <input type="submit" value="登入">
        </div>
    </div>>
    </form>
</body>
</html>
