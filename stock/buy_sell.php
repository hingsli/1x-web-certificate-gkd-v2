<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy/Sell Stocks</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <h1>Buy/Sell Stocks</h1>
        <form action="process_buy_sell.php" method="post">
            <div class="form-group">
                <label for="stock_symbol">Stock Symbol:</label>
                <input type="text" class="form-control" id="stock_symbol" name="stock_symbol" required>
                <small id="symbolHelp" class="form-text text-muted">Enter the stock symbol (e.g., AAPL).</small>
            </div>
            <div class="form-group">
                <label for="transaction_type">Transaction Type:</label>
                <select class="form-control" id="transaction_type" name="transaction_type" required>
                    <option value="buy">Buy</option>
                    <option value="sell">Sell</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
                <small id="quantityHelp" class="form-text text-muted">Enter the quantity of shares to buy/sell.</small>
            </div>
            <button type="button" class="btn btn-info" id="checkPriceBtn">Check Price</button>
            <div id="stockPrice"></div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container mt-3">
        <a class="btn btn-secondary" href="index.php">Back</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#checkPriceBtn').click(function() {
                var stockSymbol = $('#stock_symbol').val();
                $.getJSON('get_stock_price.php', {
                    stock_symbol: stockSymbol
                }, function(data) {
                    $('#stockPrice').html('<p>Current Price: $' + data.price + '</p>');
                }).fail(function() {
                    $('#stockPrice').html('<p>Error: Unable to get stock price.</p>');
                });
            });
        });
    </script>
</body>

</html>