<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Trading Platform</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">StockTrader</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy_sell.php">Buy/Sell Stocks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <?php
                    session_start();
                    if (isset($_SESSION['user_id'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="text-center mb-4">Welcome to the Stock Trading Platform</h1>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <p>Welcome back, user!</p>
        <?php else : ?>
            <p>Please <a href="login.php">login</a> or <a href="register.php">register</a>.</p>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Stock Prices</h5>
                        <div id="latest-stock-prices"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Financial News</h5>
                        <div id="recent-transactions">
                            <!-- News will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Example stock symbols
            const symbols = ['AAPL', 'MSFT', 'GOOGL']; // You can change this list as needed
            const apiKeyStocks = 'S7V1VB8WD7RL9JN9';
            const container = $('#latest-stock-prices');

            symbols.forEach(function(symbol) {
                const url = `https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=${symbol}&apikey=${apiKeyStocks}`;
                $.getJSON(url, function(response) {
                    const price = response['Global Quote']['05. price'];
                    container.append(`<p>${symbol}: $${price}</p>`);
                }).fail(function() {
                    console.log("An error occurred while retrieving stock prices.");
                });
            });

            // Fetching news from NewsAPI
            const newsApiKey = '5147bc74cc4047a489b16de06fe830ea';
            const newsContainer = $('#recent-transactions');
            const newsUrl = 'https://newsapi.org/v2/top-headlines?category=business&language=en&apiKey=' + newsApiKey;

            $.getJSON(newsUrl, function(data) {
                data.articles.forEach(function(article) {
                    newsContainer.append(`<p><a href="${article.url}" target="_blank">${article.title}</a></p>`);
                });
            }).fail(function() {
                newsContainer.append('<p>Error loading news.</p>');
            });
        });
    </script>
</body>

</html>