<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Access denied: Please login first.");
}

function getPrice($stockSymbol)
{
    $json = file_get_contents('stocks.json');
    if ($json === false) {
        error_log("Unable to open the stocks.json file.");
        return false;  // 文件读取失败处理
    }
    $stocks = json_decode($json, true);
    foreach ($stocks as $stock) {
        if ($stock['stock_symbol'] === $stockSymbol) {
            return $stock['price'];
        }
    }
    error_log("Stock symbol not found: " . $stockSymbol);
    return false;  // 如果未找到股票符号对应的价格
}

$conn = new mysqli("localhost", "root", "", "stock_trading");
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

$stockSymbol = $_POST["stock_symbol"];
$transactionType = $_POST["transaction_type"];
$quantity = intval($_POST["quantity"]);  // 确保数量为整数
$userId = $_SESSION["user_id"];
$price = getPrice($stockSymbol);

if ($price === false) {
    die("Failed to get the price for the stock symbol.");
}

$totalPrice = $quantity * $price;

$sql = $conn->prepare("INSERT INTO transactions (user_id, stock_symbol, transaction_type, quantity, price, timestamp) VALUES (?, ?, ?, ?, ?, NOW())");
if ($sql === false) {
    error_log("SQL Prepare failed: " . $conn->error);
    die("SQL Prepare error: " . $conn->error);
}
$sql->bind_param("issid", $userId, $stockSymbol, $transactionType, $quantity, $price);
if (!$sql->execute()) {
    error_log("Execute failed: " . $sql->error);
    die("Error executing the transaction: " . $sql->error);
}

// 更新持仓信息
if ($transactionType === "buy") {
    $sql = $conn->prepare("INSERT INTO portfolio (user_id, stock_symbol, quantity) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
    $sql->bind_param("isi", $userId, $stockSymbol, $quantity);
} else {
    $sql = $conn->prepare("UPDATE portfolio SET quantity = quantity - ? WHERE user_id = ? AND stock_symbol = ?");
    $sql->bind_param("iis", $quantity, $userId, $stockSymbol);
}
if (!$sql->execute()) {
    error_log("Execute failed: " . $sql->error);
    die("Error updating the portfolio: " . $sql->error);
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Success</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 40px;
        }

        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Transaction Summary</h1>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Transaction Successful!</h4>
            <p>You have successfully <strong><?= htmlspecialchars($transactionType) ?></strong> <?= $quantity ?> shares of <?= htmlspecialchars($stockSymbol) ?> at $<?= $price ?> each.</p>
            <hr>
            <p class="mb-0">Total Price: $<?= $totalPrice ?></p>
        </div>
        <a href="index.php" class="btn btn-primary">Go to Dashboard</a>
        <a href="buy_sell.php" class="btn btn-info">New Transaction</a>
    </div>
</body>

</html>