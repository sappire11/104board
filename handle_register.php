<?php
require_once("./conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取表單提交的數據
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (empty($username) || empty($password) || empty($email)) {
        die("請檢查資料");
    }

    // 檢查是否已存在相同的 username
    $check_query = "SELECT * FROM logins WHERE username = '$username'";
    $check_result = $conn->query($check_query);
    if ($check_result->num_rows > 0) {
        die("該帳號已被註冊");
    }

    // 將密碼進行雜湊處理
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO logins (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    $result = $conn->query($sql);

    if ($result) {
        echo "success";
        header('Location:./register.php');
    } else {
        echo "failed" . $conn->error;
    }
}
?>
