<?php
// 连接数据库
$conn = new mysqli("localhost", "root", "", "stock_trading");

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取注册页面提交的数据
$username = $_POST["username"];
$password = $_POST["password"];

// 插入用户信息到用户表中
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
