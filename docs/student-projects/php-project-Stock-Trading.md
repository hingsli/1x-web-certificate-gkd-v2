> **GitHub:** [https://github.com/ChalleNgerOvO]  
> **项目地址:** [https://github.com/ChalleNgerOvO/php-project]

**项目简介：**  
本项目是一个基于PHP的股票交易平台，旨在提供一个简洁而高效的在线股票交易环境。用户可以在平台上进行股票的买卖，查看实时股票数据，以及管理他们的投资组合。

**股票交易平台将提供以下功能：**

- **首页：** 用户可以在首页获取股票市场的概览，包括热门股票的动态，市场新闻，以及快速访问交易功能的链接。

- **股票购买与销售：** 用户可以通过专门的界面进行股票的购买或出售操作。这包括填写股票代码、购买或出售数量和价格等信息。

- **投资组合管理：** 用户可以查看和管理他们的股票投资组合，包括已持有股票的当前市值、购买成本和潜在的盈亏。

- **交易历史查看：** 用户可以查看他们的交易历史，包括每笔交易的详细信息，如交易日期、股票代码、交易类型、数量、价格等。

- **实时股票信息：** 平台提供实时更新的股票价格和市场动态，帮助用户做出及时的交易决定。

![Imgur](https://i.imgur.com/OYephLi.png)
![Imgur](https://i.imgur.com/cd5XMiT.png)
![Imgur](https://i.imgur.com/XgFtzCX.png)
---

## 技术栈描述

本项目是一个基于PHP的股票交易平台，采用了以下主要技术和工具，确保平台的可靠性、安全性和用户友好性：

### 后端技术

- **PHP**: 使用PHP 7.4作为主要的后端语言，负责处理服务器端的逻辑、用户认证、与数据库的交互等功能。PHP是一种广泛使用的服务器端脚本语言，以其灵活性和广泛的数据库支持而著称。
- **MySQL**: 使用MySQL 8.0作为后端数据库，存储用户数据、股票交易数据和其他业务信息。MySQL是一个强大的关系数据库管理系统，用于管理包含大量数据的关系数据库，是web应用非常流行的数据库系统。

### 前端技术

- **HTML5/CSS3**: 构建用户界面的基础技术，确保页面结构清晰，样式现代。
- **Bootstrap 4**: 用于快速开发响应式布局、按钮、表单等。Bootstrap是一个前端框架，包含了大量预制的CSS样式和组件，以及可选的JavaScript插件，用于开发响应式和移动设备优先的web项目。
- **JavaScript 和 jQuery**: 增强前端页面的交互性。使用jQuery简化DOM操作，事件处理和AJAX交互，快速响应用户操作并与服务器进行数据交换。

### 安全性工具

- **bcrypt**: 用于安全存储用户密码。在PHP中通过使用 `password_hash()` 和 `password_verify()` 函数来实现密码的加密和验证。
- **SSL/TLS**: 确保数据在客户端和服务器之间的传输过程中加密，保护数据不被窃听。推荐在服务器配置中启用HTTPS。

### 开发和部署工具

- **Apache HTTP Server**: 作为Web服务器软件，处理HTTP请求，托管网站内容。Apache是一种健壮、高性能的HTTP服务器，支持PHP的运行。
- **Git**: 用于版本控制，管理项目的源代码。
- **Composer**: PHP的依赖管理工具，用于管理项目的依赖关系。
- **Docker**（可选）: 使用Docker容器化技术可以简化部署过程，确保开发环境与生产环境的一致性。

### 性能和优化工具

- **Redis**（可选）: 作为缓存层来提高数据库查询的响应速度，存储常用的查询结果和重要的会话信息。
- **Nginx**（可选）: 作为反向代理和负载均衡器，提高应用的负载能力和可靠性。

---

## 系统架构概述
### 主要组件描述

- **前端**：
  - **技术栈**：HTML5, CSS3, JavaScript, Bootstrap
  - **功能**：提供用户界面，处理用户输入，显示股票数据和交易结果。
  - **交互**：通过RESTful API与后端交互，获取和发送数据。

- **后端**：
  - **技术栈**：PHP, Apache HTTP Server
  - **功能**：处理业务逻辑，如用户验证、数据处理、执行交易。
  - **交互**：与数据库进行交互，存取数据；通过API与前端和外部服务（如股票价格API）交互。

- **数据库**：
  - **技术**：MySQL
  - **功能**：存储用户数据、股票信息和交易记录。
  - **交互**：接收后端的查询和命令，返回数据。

- **外部接口**：
  - **功能**：提供实时股票市场数据和新闻更新。
  - **技术**：使用HTTPS API与第三方服务如Alpha Vantage和NewsAPI交互。

### 数据流

- 用户请求从前端发送到后端，后端验证请求并与数据库交互处理数据，然后将响应返回给前端显示。外部接口提供必要的市场数据更新，支持平台的实时数据显示需求。

---


## 用户界面和体验设计

### 界面设计

- **简洁的布局**：整个平台的布局旨在简洁明了，避免不必要的干扰元素，使用户能够快速找到他们需要的功能。主要元素如交易操作、股票概览和个人投资组合清晰地展示在用户界面上。
- **一致性**：全站采用统一的颜色方案、字体样式和元素布局，保证用户在不同页面之间有连贯的体验，减少学习使用界面的时间。
- **响应式设计**：界面设计完全响应式，能够适应不同的设备和屏幕尺寸，从桌面到平板到手机，确保用户在任何设备上都有优质的体验。

### 交互设计

- **即时反馈**：对用户的每一个操作都给予即时的视觉或文本反馈，确保用户明白自己的操作结果，如成功交易、错误提示等。
- **简化的操作流程**：优化用户的操作流程，减少达成目标所需的步骤数量，例如简化购买或销售股票的过程，使得操作直观易懂。
- **导航简便**：设计易于导航的界面，包括明确的菜单标签和一致的页面布局，使用户可以轻松地在各个部分之间切换。

### 可用性

- **无障碍访问**：确保平台遵循无障碍访问的最佳实践，如合适的对比度、大字体选项和键盘可访问性，让所有用户都能舒适地使用平台。
- **多语言支持**：提供多种语言选项，确保来自不同地区的用户可以在自己的母语中使用平台，增强用户的归属感和舒适度。

### 性能和可靠性

- **快速加载时间**：优化前端资源，如压缩图片和使用有效的缓存策略，以减少页面加载时间，提高用户满意度。
- **稳定性**：进行彻底的测试，确保界面元素在所有支持的浏览器和设备上均表现稳定，无错误发生。

通过这些设计原则和实践，我们的股票交易平台旨在提供一流的用户体验，帮助用户轻松、有效地进行股票交易和管理。这不仅提升了用户的整体满意度，也有助于吸引和保留用户。

---



## 1项目配置

### 1.1创建项目文件夹
**环境：** Apache服务器

**步骤：**
1. 在Apache的`htdocs`文件夹中创建一个名为`stock`的新文件夹。
![Imgur](https://i.imgur.com/fKfiON3.png)
2. 在`stock`文件夹中创建初始的PHP文件`index.php`以及其他所需的PHP脚本文件和资源文件夹。
![Imgur](https://i.imgur.com/YNCyctd.png)


### 1.2启动服务器

**步骤：**
1. 确保Apache服务器已安装并配置正确，MySQL数据库也已启动。
![Apache服务器](https://i.imgur.com/6sgOWu9.png)
2. 通过浏览器访问`http://localhost/stock/index.php`检查项目首页，确认配置无误。
![Imgur](https://i.imgur.com/OYephLi.png)

### 1.3创建数据库和表

**步骤：**
1. 打开phpmyadmin，检查数据库服务器：`http://localhost/phpmyadmin/`
2. 创建名为`stock_tranding`的数据库，并选择它。执行以下SQL语句：
![Imgur](https://i.imgur.com/eqjWggu.png)



```sql
-- 创建新数据库
CREATE DATABASE stock_trading;

-- 选择新创建的数据库
USE stock_trading;
```

#### 1.4设置数据库
创建名为`stock_trading_db`的数据库，并在其中创建`users`, `stocks`, `transactions`等表，用于存储用户信息、股票信息和交易记录。

**步骤：**
1. 登录到MySQL数据库管理工具（如phpMyAdmin），执行创建数据库和表的SQL脚本。
2. 确保每个表的字段都符合业务需求，并设置好主键和索引，以优化查询性能和数据完整性。

### 1.5数据表结构

**持仓信息表（portfolio）**

| 字段名       | 类型        | 描述                     |
| ------------ | ----------- | ------------------------ |
| id           | INT         | 主键，自增               |
| user_id      | INT         | 外键，关联用户表的用户ID |
| stock_symbol | VARCHAR(10) | 股票代码                 |
| quantity     | INT         | 持有数量                 |

![Imgur](https://i.imgur.com/V3N0k8W.png)
**交易记录表（transactions）**

| 字段名           | 类型                | 描述                     |
| ---------------- | ------------------- | ------------------------ |
| id               | INT                 | 主键，自增               |
| user_id          | INT                 | 外键，关联用户表的用户ID |
| stock_symbol     | VARCHAR(10)         | 股票代码                 |
| transaction_type | ENUM('buy', 'sell') | 交易类型（购买或出售）   |
| quantity         | INT                 | 交易数量                 |
| price            | DECIMAL(10, 2)      | 交易价格                 |
| timestamp        | DATETIME            | 交易时间                 |

![Imgur](https://i.imgur.com/otQmBhC.png)

**用户表（users）**

| 字段名   | 类型         | 描述           |
| -------- | ------------ | -------------- |
| id       | INT          | 主键，自增     |
| username | VARCHAR(50)  | 用户名         |
| password | VARCHAR(255) | 密码（哈希值） |

![Imgur](https://i.imgur.com/yYCOImI.png)

### 数据库表的SQL创建语句

```sql
-- 创建用户表（users）
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- 创建持仓信息表（portfolio）
CREATE TABLE portfolio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    stock_symbol VARCHAR(10) NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- 创建交易记录表（transactions）
CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    stock_symbol VARCHAR(10) NOT NULL,
    transaction_type ENUM('buy', 'sell') NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    timestamp DATETIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

以上SQL语句将创建三个表：`users`、`portfolio`和`transactions`，并设置了适当的主键、外键和字段约束。



## 2. 系统设计

### 2.1 文件说明


1. HTML 结构：整个页面的结构和布局，包括导航栏、容器、栅格系统等。
2. CSS 样式：使用 Bootstrap 提供的 CSS 类或者自定义 CSS 样式来美化页面，包括颜色、字体、边距、大小等样式设计。
3. JavaScript 交互：使用 JavaScript 来实现页面上的交互效果，例如页面加载时的动画、点击按钮触发的事件等。

# `index.php` 文件详细说明

## HTML 结构

### 头部 `<head>`
- **字符集和视口**:
  ```html
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  ```
- **标题**:
  ```html
  <title>Stock Trading Platform</title>
  ```
- **样式**:
  ```html
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
      .card {
          margin-bottom: 20px;
      }
  </style>
  ```

### 导航栏 `<nav>`
- **品牌标志**:
  ```html
  <a class="navbar-brand" href="index.php">StockTrader</a>
  ```
- **导航切换**:
  ```html
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  ```
- **导航链接**:
  ```php
  <?php
  session_start();
  if (isset($_SESSION['user_id'])) {
      echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
  } else {
      echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
      echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
  }
  ?>
  ```

### 主内容区 `<div class="container">`
- **欢迎标题**:
  ```html
  <h1 class="text-center mb-4">Welcome to the Stock Trading Platform</h1>
  ```
- **用户信息显示**:
  ```php
  <?php if (isset($_SESSION['user_id'])) : ?>
      <p>Welcome back, user!</p>
  <?php else : ?>
      <p>Please <a href="login.php">login</a> or <a href="register.php">register</a>.</p>
  <?php endif; ?>
  ```
- **信息板块**:
  ```html
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Latest Financial News</h5>
          <div id="recent-transactions">
              <!-- News will be loaded here -->
          </div>
      </div>
  </div>
  ```
![Imgur](https://i.imgur.com/ydXmtj8.png)

## JavaScript 功能

### 股票价格获取
- **调用 Alpha Vantage API**:
- **官方网址**:https://www.alphavantage.co/
  ```javascript
  symbols.forEach(function(symbol) {
      const url = `https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=${symbol}&apikey=${apiKeyStocks}`;
      $.getJSON(url, function(response) {
          const price = response['Global Quote']['05. price'];
          container.append(`<p>${symbol}: $${price}</p>`);
      }).fail(function() {
          console.log("An error occurred while retrieving stock prices.");
      });
  });
  ```
![Imgur](https://i.imgur.com/hJs97Uy.png)

### 金融新闻获取
- **调用 NewsAPI**:
- **官方网址**:https://newsapi.org/
  ```javascript
  const newsUrl = 'https://newsapi.org/v2/top-headlines?category=business&language=en&apiKey=' + newsApiKey;

  $.getJSON(newsUrl, function(data) {
      data.articles.forEach(function(article) {
          newsContainer.append(`<p><a href="${article.url}" target="_blank">${article.title}</a></p>`);
      });
  }).fail(function() {
      newsContainer.append('<p>Error loading news.</p>');
  });
  ```
![Imgur](https://i.imgur.com/WjaTM7D.png)

## 外部资源
- **jQuery**: 用于简化 DOM 操作和 AJAX 调用。
- **Bootstrap CSS 和 JavaScript**: 提供响应式布局和样式。
- **Popper.js**: Bootstrap 的依赖，用于提示框等功能。

# `buy_sell.php` 文件详细说明

### PHP Session Check
- **Session Check**:
  ```php
  <?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header('Location: login.php');
      exit;
  }
  ?>
  ```

### HTML Structure

#### Head Section
- **基本元数据和样式**:
  ```html
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Buy/S

</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  </head>


#### Body Section
- **表单界面**:
  ```html
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
  </body>
  ```

### JavaScript Functionality
- **价格查询功能**:
  ```javascript
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
  ```

# `process_buy_sell.php` 文件详细说明

### PHP Session Check and Initialization
- **Session和初始化**:
  ```php
  <?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      die("Access denied: Please login first.");
  }

  function getPrice($stockSymbol)
  {
      ...
  }
  ```

### 获取股票价格
- **从文件获取价格**:
  ```php
  function getPrice($stockSymbol)
  {
      $json = file_get_contents('stocks.json');
      if ($json === false) {
          error_log("Unable to open the stocks.json file.");
          return false;
      }
      $stocks = json_decode($json, true);
      foreach ($stocks as $stock) {
          if ($stock['stock_symbol'] === $stockSymbol) {
              return $stock['price'];
          }
      }
      error_log("Stock symbol not found: " . $stockSymbol);
      return false;
  }
  ```

### 数据库连接和错误处理
- **连接和错误处理**:
  ```php
  $conn = new mysqli("localhost", "root", "", "stock_trading");
  if ($conn->connect_error) {
      error_log("Connection failed: " . $conn->connect_error);
      die("Connection failed: " . $conn->connect_error);
  }
  ```

### 交易处理
- **交易执行和记录**:
  ```php
  $stockSymbol = $_POST["stock_symbol"];
  $transactionType = $_POST["transaction_type"];
  $quantity = intval($_POST["quantity"]);
  $userId = $_SESSION["user_id"];
  $price = getPrice($stockSymbol);

  if ($price === false) {
      die("Failed to get the price for the stock symbol.");
  }

  $totalPrice = $quantity * $price;
  ...
  ```

### 更新用户持仓信息
- **买卖更新**:
  ```php
  if ($transactionType === "buy") {
      ...
  } else {
      ...
  }
  if (!$sql->execute()) {
      error_log("Execute failed: " . $sql->error);
      die("Error updating the portfolio: " . $sql->error);

### 交易结果页面
- **结果显示和链接**:
  ```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      ...
  </head>
  <body>
      <div class="container">
          ...
      </div>
  </body>
  </html>
  ```

# `portfolio.php` 文件详细说明

### PHP Session and Database Connection
- **Session Check and Database Connection**:
  ```php
  <?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit;
  }

  $conn = new mysqli("localhost", "root", "", "stock_trading");
  if ($conn's connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
  ```

### SQL Query for Portfolio Data
- **Query Preparation and Execution**:
  ```php
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
  ```

### HTML and CSS
- **HTML Structure**:
  ```html
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
  ```

### Display Portfolio Data
- **Data Display**:
  ```html
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
  ```

### Close Database Connection
- **Clean Up**:
  ```php
  <?php
  $conn->close();
  ?>
  ```

# `login.php` 文件详细说明

### HTML 结构和元数据

#### Head Section
- **字符集和视口设置**:
  ```html
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Login</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  </head>
  ```

### 导航栏
- **使用 Bootstrap 创建的响应式导航栏**:
  ```html
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="index.php">StockTrader</a>
      </div>
  </nav>
  ```

### 登录表单
- **Form Layout**:
  ```html
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">User Login</div>
                  <div class="card-body">
                      <form action="login_process.php" method="post">
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="username" name="username" required>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type
                            div>
                          <button type="submit" class="btn btn-primary">Login</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  ```

# `login_process.php` 文件详细说明

### PHP Session and Database Connection
- **Session Initialization**:
  ```php
  <?php
  session_start();
  $conn = new mysqli("localhost", "root", "", "stock_trading");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
  ```

### Handling Login Data
- **Data Retrieval and Prepared Statement**:
  ```php
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
  $sql->bind_param("ss", $username, $password);
  $sql->execute();
  $result = $sql->get_result();
  ```

### Login Validation and Session Management
- **User Validation**:
  ```php
  if ($result->num_rows > 0) {
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = $result->fetch_assoc()['id'];
      header("Location: index.php");
      exit;
  } else {
      echo "Invalid username or password.";
  }
  ```

### Database Connection Closure
- **Close Connection**:
  ```php
  $conn->close();
  ```

# `register.php` 文件详细说明

### HTML 结构和 Bootstrap 样式

- **导航栏**:
  ```html
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="index.php">StockTrader</a>
      </div>
  </nav>
  ```

- **表单**:
  ```html
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">User Registration</div>
                  <div class="card-body">
                      <form action="register_process.php" method="post">
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="username" name="username" required>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" name="password" required>
                          </div>
                          <button type="submit" class="btn btn-primary">Register</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  ```

### 元数据和样式
- **Head Section**:
  ```html
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Registration</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  </head>
  ```

# `register_process.php` 文件详细说明

### 连接数据库
- **数据库连接**:
  ```php
  <?php
  $conn = new mysqli("localhost", "root", "", "stock_trading");
  if ($conn->connect_error) {
      die("Connection failed: " . $conn's connect_error);
  }
  ?>
  ```

### 处理注册数据
- **数据获取和 SQL 插入**:
  ```php
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
      echo "Registration successful!";
      header("Location: login.php");
  } else {
      echo "Error: " . $stmt->error;
  }
  ```

### 关闭数据库连接
- **关闭连接**:
  ```php
  $conn->close();
  ```

这些细节为 `register.php` 和 `register_process.php` 文件提供了完整的描述，明确了用户注册的处理流程及其所涉及的安全和数据管理实践。

### 2.2 后端设计


1. **用户认证和会话管理：** 使用 PHP 和 MySQL 实现了用户的注册和登录功能，并使用会话（Session）来跟踪用户的登录状态，确保只有授权用户可以访问受保护的页面。

2. **数据库交互：** 使用 MySQL 数据库来存储用户信息、股票信息和交易记录。通过 PHP 脚本与数据库进行交互，实现了用户注册、登录、购买股票和查看交易记录等功能。

3. **安全性考虑：** 在实际应用中，应该考虑密码安全性，比如加盐哈希存储密码，以及防止 SQL 注入等安全漏洞。

4. **前后端交互：** 前端页面通过表单提交用户输入的数据，后端 PHP 脚本接收并处理这些数据，然后返回相应的响应，实现了前后端之间的交互。

5. **页面重定向和错误处理：** 在登录验证成功后，通过 PHP 的 `header` 函数进行页面重定向，将用户引导到主页。并且在登录失败时，输出错误消息提示用户。

后端设计主要涉及用户认证、数据库交互、安全性考虑、前后端交互和页面重定向等方面。这些功能一起构成了一个简单但完整的后端设计，实现了用户登录、注册和股票交易等基本功能。

后端设计通常涉及到服务器端的逻辑和数据处理部分，包括与数据库交互、处理用户请求、验证用户身份、生成动态内容等。后端设计主要由 PHP 脚本完成。

PHP 脚本中的后端设计部分的代码示例：

1. **用户登录验证** (`login_process.php`)：

```php
1. **开启会话**:
   ```php
   session_start();
   ```
   这行代码初始化 PHP 会话系统，使得脚本能够存储和使用会话变量。这对于跟踪用户状态（如登录状态）至关重要。

2. **连接数据库**:
   ```php
   $conn = new mysqli("localhost", "root", "", "stock_trading");
   ```
   这里创建了一个新的数据库连接对象，连接到 MySQL 数据库。参数包括服务器地址（localhost），用户名（root），密码（空），以及要连接的数据库名称（stock_trading）。

3. **检查数据库连接是否成功**:
   ```php
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ```
   如果连接失败，脚本会停止执行并打印出连接错误信息。

4. **获取登录页面提交的数据**:
   ```php
   $username = $_POST["username"];
   $password = $_POST["password"];
   ```
   这两行代码从 POST 请求中提取用户名和密码，这些数据是用户在登录表单中输入的。

5. **使用预处理语句查询数据库**:
   ```php
   $sql = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
   $sql->bind_param("ss", $username, $password);
   $sql->execute();
   $result = $sql->get_result();
   ```
   这段代码使用预处理语句来执行 SQL 查询，查询 users 表以查找匹配的用户名和密码记录。这种方法可以防止 SQL 注入攻击，是处理用户输入的安全方式。预处理语句中的 `?` 是参数的占位符，随后通过 `bind_param` 方法绑定具体的变量。

6. **检查查询结果**:
   ```php
   if ($result->num_rows > 0) {
       $_SESSION["username"] = $username;
       $_SESSION["user_id"] = $result->fetch_assoc()['id'];
       header("Location: index.php");
       exit;
   } else {
       echo "Invalid username or password.";
   }
   ```
   如果查询返回的结果行数大于0，表示找到了匹配的用户，登录成功。随后：
   - 将用户名和用户ID存储到会话变量中，以便跨页面使用。
   - 使用 `header` 函数将浏览器重定向到主页 `index.php`。
   - 如果没有找到匹配的用户（即用户名或密码错误），则打印出一条错误消息。

7. **关闭数据库连接**:
   ```php
   $conn->close();
   ```
   在脚本执行完成后关闭数据库连接，这是一个好习惯，可以释放服务器资源。
```

2. **用户注册处理** (`register_process.php`)：

```php
1. **连接数据库**:
   ```php
   $conn = new mysqli("localhost", "root", "", "stock_trading");
   ```
   这行代码尝试连接到运行在 localhost 上的 MySQL 数据库。数据库的用户名是 `root`，密码为空，数据库名称为 `stock_trading`。

2. **检查数据库连接是否成功**:
   ```php
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ```
   如果数据库连接失败，脚本将停止执行，并输出错误消息。

3. **获取注册页面提交的数据**:
   ```php
   $username = $_POST["username"];
   $password = $_POST["password"];
   ```
   这两行代码从注册表单的 POST 请求中获取用户名和密码。这些值由用户在表单中填写。

4. **插入用户信息到用户表中**:
   ```php
   $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
   ```
   这行代码构造了一个 SQL 插入语句，目的是将获取的用户名和密码存入 `users` 表。这里直接将变量嵌入到 SQL 语句中，这可能引起 SQL 注入风险。

5. **执行 SQL 语句**:
   ```php
   if ($conn->query($sql) === TRUE) {
       echo "Registration successful!";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   ```
   使用 `conn->query()` 方法执行 SQL 语句。如果插入成功，显示“注册成功”；如果失败，则显示 SQL 语句和错误信息。输出 SQL 语句可能会暴露敏感信息，通常在生产环境中不推荐这样做。

6. **关闭数据库连接**:
   ```php
   $conn->close();
   ```
   最后关闭数据库连接，释放资源。
```




