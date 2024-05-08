<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "stock_trading");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT p.stock_symbol, p.quantity, MAX(t.timestamp) as last_transaction_time
        FROM portfolio p
        LEFT JOIN transactions t ON p.stock_symbol = t.stock_symbol AND p.user_id = t.user_id
        WHERE p.user_id = ?
        GROUP BY p.stock_symbol, p.quantity";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Overview</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }

        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Your Portfolio</h2>
        <?php if ($result->num_rows > 0) : ?>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Stock Symbol</th>
                        <th>Quantity</th>
                        <th>Last Transaction Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?= htmlspecialchars($row['stock_symbol']) ?></td>
                            <td><?= htmlspecialchars($row['quantity']) ?></td>
                            <td><?= htmlspecialchars($row['last_transaction_time']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-muted">No portfolio data available. You might want to <a href='buy_sell.php'>buy some stocks</a>.</p>
        <?php endif; ?>
        <a class="btn btn-primary" href="index.php">Back to Home</a>
    </div>
</body>

</html>
<?php
$conn->close();
?>