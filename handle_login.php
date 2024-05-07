<?php
require_once("./conn.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取表單提交的帳號和密碼
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 在這裡進行帳號和密碼的驗證
    $sql = "SELECT * FROM logins WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // 取得資料庫中儲存的密碼
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // 驗證使用者輸入的密碼是否正確
        if (password_verify($password, $hashedPassword)) {
            // 登入成功，將使用者名稱存入 session
            $_SESSION['username'] = $username;
            header('Location: ./index.php');
            exit();
        } else {
            // 登入失敗，顯示錯誤訊息或重新導向回登入頁面
            echo "帳號或密碼錯誤";
        }
    } else {
        // 登入失敗，顯示錯誤訊息或重新導向回登入頁面
        echo "帳號或密碼錯誤";
    }
}
?>
