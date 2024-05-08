<?php
// 开启会话
session_start();

// 连接数据库
$conn = new mysqli("localhost", "root", "", "stock_trading");

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取登录页面提交的数据
$username = $_POST["username"];
$password = $_POST["password"];

// 使用预处理语句查询数据库，检查用户名和密码是否匹配
$sql = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$sql->bind_param("ss", $username, $password);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    // 登录成功，将用户信息存储到会话中
    $_SESSION["username"] = $username;
    // 可能还需要存储用户ID以便后续操作
    $_SESSION["user_id"] = $result->fetch_assoc()['id'];
    // 登录成功，重定向到主界面
    header("Location: index.php");
    exit;
} else {
    // 登录失败，显示错误消息
    echo "Invalid username or password.";
}

// 关闭数据库连接
$conn->close();
