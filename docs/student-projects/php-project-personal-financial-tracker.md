
>**作者：@Palpatine0

> 
> **github:** https://github.com/Palpatine0

> **项目地址:** https://github.com/Palpatine0/PocketGuard

```text
我们将构建一个基于PHP的个人财务追踪应用程序。这个应用程序将帮助用户跟踪他们的财务状况并管理他们的个人收支情况。  
该项目使用Bootstrap框架来构建网站的用户界面，使其看起来更加美观和易于使用。
```
  

**个人财务追踪应用程序将提供以下功能：**


 - **首页：** 欢迎页面，向用户展示应用程序的一般信息，并提供导航到其他页面的功能。在首页，用户可以了解到应用程序的基本介绍，以及如何使用导航链接访问其他功能页面，例如交易录入、交易列表、分类管理和个性化仪表板。

 
 - **交易录入表单：** 用户可以在此页面录入新的收入或支出记录。该页面提供表单，用户可以填写相关的交易信息，如金额、日期、类别等，并进行验证。录入的交易信息将通过PHP代码进行处理，并存储到数据库中，以便后续的管理和显示。

 
 - **交易列表：** 该页面展示了所有录入的交易记录列表。用户可以在此页面查看所有的交易记录，并了解每笔交易的详细信息，如日期、金额、类别等。通过PHP代码从数据库中获取交易数据，并以列表的形式呈现给用户，以便他们更好地管理和分析自己的财务状况。

 
 - **类型管理：** 用户可以在此页面进行交易类别的管理操作，包括添加新的类别、编辑已有类别或删除类别。该页面提供表单，用户可以填写新类别的信息，并显示已存在的类别列表，以供用户选择编辑或删除。通过PHP代码，管理页面可以实现对类别表的插入、更新和删除操作，以确保用户可以自由地管理自己的交易分类。


 - **仪表板：** 用户可在仪表板页面查看自己的财务状况概览，包括交易记录总览。该页面通过PHP代码从数据库中获取各项财务数据，并以图表的形式展示给用户，以便他们更直观地了解自己的财务状况和制定未来的理财计划。


## 1.项目配置

### 1.1 创建项目文件夹


== **本项目以MAMP服务器为例** ==

**步骤：**
<hr>

1. 在MAMP找到文件夹`htdoc`，创建一个新的文件夹`pocket-guard`点击Document root下的文件夹图标

   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc17aea46e.jpg)

2. 选中刚刚创建的项目

   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc1d0202aa.jpg)

### 1.2启动服务器

**步骤：**
<hr>
1. 在项目文件夹创建文件`index.php`,并在该写入`TEST`或者任意内容以在接下来的步骤测试服务器是否启动成功

2. 配置自己服务器与数据库的端口号  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc2372f42d.jpg)
3. 开机  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc27778869.jpg)
4. 在浏览器输入`localhost:[自己指定的服务器端口号]`  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc2f2ef6a1.jpg)   
   若看到自己刚刚在`index.php`写上的测试文本，则说明启动成功

### 1.3创建基础静态文件

#### 1.3.1 创建通用文件

创建通用文件，将通用文件放置在单独的文件夹中并在需要的地方引入它们，可以提高代码的重用性，简化维护和更新，使代码更加整洁和易读。  
这种模式最大的好处之一是，对于在每个页面都会出现的内容，当您需要修改这些内容的一部分时，您不需要在每个页面修改他们。

**通用文件包含：**

- 通用资源`resource.html`: 包括bootstrap的脚本文件等
- 网站的导航文件`nav.html`: 网站的导航
- 页脚文件`footer.html`: 项目的页脚文件，包含版权信息

**步骤：**
<hr>

1. 在项目文件夹下，创建文件夹`common`  
   <img src="https://pic.leetcode.cn/1713459995-LGALrt-WeChat0b68f82205551bb296b7f96ee4d31544.jpg" alt="image" width="300">

2. 创建 `resource.php`  
   `php`文件。后面需要插入php内容，该文件若为`html`格式将无法识别`php`内容

```php  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
```  
此文件中包含了一些常用的 HTML 标签，以及从外部 CDN 加载的 Bootstrap 样式和脚本。

3. 创建`nav.html

```html  

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Pocket Guard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="add_transaction.php">添加交易</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_transactions.php">查看交易</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage_categories.php">类别管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">仪表板</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
```  

4. 创建`footer.html`

```html  

<footer class="footer mt-5 py-4 text-gray" style="background-color: #f4f5f8;color:#39383d;">
    <div class="container">
        <div class="row">
            <div class="text-center text-md-left">
                <h5 class="mb-0">&copy; 2024 Pocket Guard. All rights reserved.</h5>
            </div>
        </div>
        <div class="row">
            <div class="text-center text-md-right">
                <p>Designed and Developed by <a href="https://github.com/" class="text-primary">Percival</a></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="footer-link text-dark text-decoration-none">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="footer-link text-dark text-decoration-none">About</a></li>
                    <li class="list-inline-item">
                        <a href="#" class="footer-link text-dark text-decoration-none">Services</a></li>
                    <li class="list-inline-item">
                        <a href="#" class="footer-link text-dark text-decoration-none">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>  
```  

#### 1.3.2 创建网页文件

创建组成该项目的基础网页文件  
**网页文件包含：**

- 首页`index.php`: 欢迎页面，提供关于应用程序的一般信息，并导航到其他页面
- 添加交易记录界面`add_transaction.php`: 允许用户添加新的收入或支出记录的页面
- 查看交易记录界面`view_transactions.php`: 显示所有已输入交易记录的页面
- 类别管理界面`manage_categories.php`: 允许用户添加、编辑或删除交易类别的页面
- 控制面板界面`dashboard.php`: 个性化的仪表板，用户可以查看其财务状况的快速概览，包括最近的交易、预算和目标

🌟在创建网页的同时引入通用文件

```php  
<head>    
    <!--TITLE-->  
    <?php include 'common/resource.html'; ?>  
</head>  
<body>    
    <?php include 'common/nav.html'; ?>  
    <!--CONTENTS-->  
    <?php include 'common/footer.html'; ?>  
</body>  
```  

**步骤：**
<hr>

1. 创建`index.php`

```html  
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personal Finance Tracker</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        
        <div class="container mt-5">
            <h1 class="text-center">欢迎使用您的个人财务跟踪器</h1>
            <p class="text-center">通过轻松跟踪收入和支出，掌控您的财务生活。</p>
            <section id="dashboard-overview" class="text-center mb-5 py-5 bg-light">
                <h3 class="mb-3 display-4">您的财务仪表板</h3>
                <p class="mb-4 text-muted">以下是我们与社区共同取得的成就！</p>
                <div class="row justify-content-center">
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title mb-3">活跃用户</h5>
                            <p class="card-text h3 text-dark">10,000+</p>
                            <p class="card-text"><small class="text-muted">加入我们不断增长的社区！</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">跟踪的交易</h5>
                            <p class="card-text h3 text-dark">500,000+</p>
                            <p class="card-text"><small class="text-muted">超过五十万笔交易，数量不断增加。</small></p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow rounded p-3">
                            <h5 class="card-title  mb-3">资金管理</h5>
                            <p class="card-text h3 text-dark">$1M+</p>
                            <p class="card-text"><small class="text-muted">已跟踪资产超过一百万美元。</small></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'common/footer.html'; ?>
    </body>
</html>
```  

**效果图✨**  
![](https://pic.leetcode.cn/1713430545-qxfHYg-WeChat53a592d4a74b32ad0e73f9c27f3e4504.jpg)

1. 创建`add_transaction.php`

```html  
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Transaction</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>添加交易</h2>
            <form action="" method="post">
                <!-- Transaction Type -->
                <div class="mb-3">
                    <label for="transactionType" class="form-label">交易类型*</label>
                    <select class="form-select" id="transactionType" name="transaction_type" required>
                        <option value="">选择类型</option>
                        <option value="1">收入</option>
                        <option value="2">支出</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="amount" class="form-label">金额*</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="输入金额" required>
                </div>
                
                <div class="mb-3">
                    <label for="transactionDate" class="form-label">时间*</label>
                    <input type="datetime-local" class="form-control" id="transactionDate" name="transaction_date" required>
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">类别*</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="类别（例如，杂货，工资）" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">描述</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="交易描述"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">添加交易</button>
            </form>
        </div>
        
        <?php include 'common/footer.html'; ?>
    </body>
</html>
```  

**效果图✨**  
![](https://pic.leetcode.cn/1713430761-HtSIEw-WeChat1baa4da4f1aa8f392ab3233760801089.jpg)

3. 创建`view_transaction.php`

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php include 'common/resource.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>查看交易</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>交易列表</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>日期</th>
                        <th>类型</th>
                        <th>类别</th>
                        <th>金额</th>
                        <th>描述</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        
        <?php include 'common/footer.html'; ?>
    </body>

</html>  
```  

- **添加模拟数据**  
  我们需要一些模拟数据来填充该界面，以展示页面的样式和功能。旨在  
  帮助我们更好地了解页面的布局和交互，对最终的展示有一个更清晰的预期

```html

<tbody>
    <?php    
    // Fake data    
    $transactions = [    
        ["date" => "2023-12-01", "type" => "Expense", "category" => "Groceries", "amount" => 100, "description" =>
    "Weekly groceries"],
    ["date" => "2023-12-02", "type" => "Income", "category" => "Salary", "amount" => 2000, "description" => "Monthly
    salary"],
    ["date" => "2023-12-03", "type" => "Expense", "category" => "Rent", "amount" => 500, "description" => "Monthly
    rent"],
    ["date" => "2023-12-04", "type" => "Expense", "category" => "Utilities", "amount" => 150, "description" => "Utility
    bills"],
    ["date" => "2023-12-05", "type" => "Expense", "category" => "Entertainment", "amount" => 200, "description" =>
    "Movie tickets"]
    ];
    
    // Output data of each row
    foreach($transactions as $transaction) {
    echo "
    <tr>
        <td>" . $transaction["date"] . "</td>
        <td>" . $transaction["type"] . "</td>
        <td>" . $transaction["category"] . "</td>
        <td>" . $transaction["amount"] . "</td>
        <td>" . $transaction["description"] . "</td>
    </tr>
    ";
    }
    ?>
</tbody>  
```

![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc3a96a5ee.jpg)

**效果图✨**  
![](https://pic.leetcode.cn/1713428660-dcCYMt-WeChat80b73047b576b156deb688451dc54162.jpg)

4. 创建`manage_categories.php`

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>类别管理</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>类别管理</h2>
            <form action="process_add_category.php" method="post" class="mb-4">
                <div class="input-group">
                    <input type="text" name="category_name" class="form-control" placeholder="New Category Name" required>
                    <button type="submit" class="btn btn-primary">添加类别</button>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>类别名称</th>
                        <th style="text-align: right">操作</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        
        <?php include 'common/footer.html'; ?>
    </body>
</html>
```  

- **添加模拟数据**

```html
<?php  
    // Fake data  
    $categories = [  
        ["id" => 1, "name" => "Groceries"],
["id" => 2, "name" => "Salary"],
["id" => 3, "name" => "Rent"],
["id" => 4, "name" => "Utilities"],
["id" => 5, "name" => "Entertainment"]
];

// Output data of each row
foreach ($categories as $category) {
echo "
<tr>
    <td>" . $category["name"] . "</td>
    <td>
        <div style='text-align: right;'>
            <a class='btn btn-secondary btn-sm'>编辑</a>
            <a class='btn btn-danger btn-sm'>删除</a>
        </div>
    </td>
</tr>";
}
?>  
```  

![](https://pic.leetcode.cn/1713431402-TieqKY-WeChata1f3740bd6c361c213a03f88f0a35028.jpg)

**效果图✨**  
![](https://pic.leetcode.cn/1713431095-FDpBsQ-WeChat36a54416c24d536accf7881b78187e5d.jpg)

5. 创建`dashboard.php`

```html
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>仪表板</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>仪表板</h2>
            <div class="row">
                <div class="col-md">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">总收支</h5>
                            <p class="card-text">$1,800</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="mb-5">
                    <h4 class="text-center">支出细分</h4>
                </div>
                <div class="mb-5">
                    <h4 class="text-center">收入细分</h4>
                </div>
            </div>
        </div>
        <?php include 'common/footer.html'; ?>
    </body>
</html>
```  

**效果图✨**  
![WeChatc2dfcfdd7db591f9d3520623713c7274.jpg](https://pic.leetcode.cn/1713441786-jdrHAX-WeChatc2dfcfdd7db591f9d3520623713c7274.jpg)


## 2.数据库配置

### 2.1 创建数据库表

创建该项目需要的数据库与数据库表

1. 创建数据库`pocket_guard`,并选择

```sql  
CREATE
DATABASE pocket_guard; 
USE pocket_guard;  
```  

2. 创建交易表`transactions

```sql  
CREATE TABLE transactions
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    type        INT,
    amount      DECIMAL(10, 2),
    datetime    int(10),
    cid         INT,
    description TEXT
);
```  

- **`id`**: 唯一标识每条交易的自增主键
- **`type`**: 交易类型 1: 收入, 2: 支出
- **`amount`**: 交易金额，以十进制格式存储，保留两位小数
- **`datetime`**: 交易发生的日期和时间
- **`cid`**: 记录交易类别表的id
- **`description`**: 交易描述，包括有关交易的详细信息

**插入数据**

```sql  
INSERT INTO transactions (type, amount, datetime, cid, description)
VALUES (1, 100.00, 1703662617, 1, 'Salary received'),
       (2, 50.25, 1703749000, 2, 'Grocery shopping'),
       (2, 20.50, 1703835400, 3, 'Dinner at restaurant'),
       (1, 150.00, 1703921800, 1, 'Freelance work payment'),
       (2, 35.75, 1704008200, 2, 'Online bill payment');

```  

3. 创建交易类型表`categories`

```sql  
CREATE TABLE categories
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
); 
```  

- **`id`**: 唯一标识每个类别的自增主键。
- **`name`**: 类别名称，限制为最大长度为50的字符串，不能为空。

**插入数据**

```sql  
INSERT INTO categories (name)
VALUES ('Groceries'),
       ('Salary'),
       ('Rent'),
       ('Utilities'),
       ('Entertainment');
```  

### 2.2 创建数据库配置文件

**步骤：**
<hr>

1. 在项目文件夹下，创建文件夹 `config`该文件夹用于存放配置类文件

    <img src="https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_66186209ae3dc.jpg" alt="image" width="300">  


2. 创建数据库配置文件`db.php`

```php  
<?php  
define('DB_HOST', 'localhost');  
define('DB_USER', 'root');  
define('DB_PASS', 'root');  
define('DB_NAME', 'pocket_guard');  
define('DB_PORT', '3307');    
    
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
?>    
```  

3. 在`resource.html` 添加数据库配置文件

```php  
<?php include 'config/db.php'; ?>  
```

## 3.项目搭建

### 3.1  类别管理

首先搭建类别管理，我们会在添加交易的时候用到类别管理的数据

### 3.1.1 动态化数据

1. 将模拟数据切换成数据库的数据

```php
$sql = 'SELECT * FROM categories';
$result = mysqli_query($conn, $sql);
$categories  = mysqli_fetch_all($result, MYSQLI_ASSOC);
```

通过替换原来的内容以动态化写死的数据

![](https://pic.leetcode.cn/1713428880-NSlOzq-WeChatc04f1fd52c8696d959dcecaf40e38db5.jpg)

### 3.1.2 添加类别功能

增加一种类别到数据库，以供添加交易记录的时候选择

1. 添加`php`数据处理逻辑

```php
<?php
if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO categories (name) VALUE('$category_name')";
    mysqli_query($conn, $sql);
}
?>
```

![](https://pic.leetcode.cn/1713428805-fkQCEC-WeChat2683c14b1d7d81e641525e1831d9b9ae.jpg)

简单的 PHP 脚本，用于处理表单提交。以下是其连接方式和各个部分的功能简介：

- 表单提交检查 `(isset($_POST['submit']))`:
  检查是否有名为 `submit` 的 `POST` 参数提交。这通常表示表单已经被提交。
- 获取表单数据 `($category_name = $_POST['category_name'])`:
  从表单中获取名为 `category_name` 的 `POST` 参数的值，这是用户输入的类别名称。
- `SQL` 查询构建 `($sql = "INSERT INTO categories (name) VALUE('$category_name')")`:
  构建 `SQL` 查询语句，将用户输入的类别名称插入到名为 `categories` 的数据库表中的 `name` 列中。
- 执行 SQL 查询 `(mysqli_query($conn, $sql))`:
  使用 `mysqli_query()` 函数执行 SQL 查询，将构建好的查询语句发送到数据库服务器进行执行。`$conn` 是数据库连接变量，代表与数据库的连接。


2. 添加空值判断

```php
<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['category_name'])) {
        echo '<div class="alert alert-danger" role="alert">请输入一个类别名称</div>';
    } else {
        $category_name = $_POST['category_name'];
        $sql = "INSERT INTO categories (name) VALUE('$category_name')";
        mysqli_query($conn, $sql);
    }
}
?>
 
```

![](https://pic.leetcode.cn/1713428941-ZnDizH-WeChatae056898abaffd8de0971c6690f5af16.jpg)

- `<div class="alert alert-danger" role="alert">请输入一个类别名称</div>` 是一个带有 Bootstrap 样式的 div
  元素，它会显示为红色背景的框，提示用户输入一个类别名称。
- `class="alert alert-danger"` 是 Bootstrap 的样式类，表示这是一个危险（danger）级别的提示框，通常用于显示错误或警告信息。
- `role="alert"` 是一个辅助性的 ARIA 角色属性，用于定义元素的作用，这里表示这个 div 元素是一个警告框。

**效果图✨**
![](https://pic.leetcode.cn/1713431496-LNGtpw-WeChat0853cf579731f202bd5faf2bf3d34d4a.jpg)

### 3.1.3 编辑类别功能

1. 修改编辑按钮

   添加了 data-id 和 data-name 属性，用于在模态框中显示对应的类别信息。

```html
<a class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#editCategoryModal' data-id='" . $category[' id'] . "' data-name='" . $category['name'] . "'>编辑</a>
```

- `data-bs-toggle='modal'`: 这个属性告诉 Bootstrap 模态框插件在单击按钮时要显示一个模态框。
- `data-bs-target='#editCategoryModal'`: 这个属性指定了要显示的模态框的目标，其值是模态框的 ID，也就是 editCategoryModal。
- `data-id='" . $category['id'] . "'`: 这个属性用于存储类别的 ID 值，以便在模态框中使用。
- `data-name='" . $category['name'] . "'`: 这个属性用于存储类别的名称，以便在模态框中使用。

2. 添加模态

   添加模态，当用户点击编辑的时候弹出widget，用户可以在widget中编辑类别名称
   接着提交修改

```html
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">编辑类别</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="updated_name" class="form-label">类别名称</label>
                        <input type="text" class="form-control" id="updated_name" name="updated_name">
                        <input type="hidden" id="category_id" name="id">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">更新类别</button>
                </form>
            </div>
        </div>
    </div>
</div>
```

```javascript
<script>
    var editCategoryModal = document.getElementById('editCategoryModal');
    editCategoryModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var name = button.getAttribute('data-name');
    var modalInputName = editCategoryModal.querySelector('.modal-body input[name="updated_name"]');
    var modalInputId = editCategoryModal.querySelector('.modal-body input[name="id"]');
    modalInputName.value = name;
    modalInputId.value = id;
});
</script>
```

3. 添加`php`数据处理逻辑

```php
<?php
    if (isset($_POST['update']) && !empty($_POST['updated_name']) && !empty($_POST['id'])) {
        $updated_name = $_POST['updated_name'];
        $category_id = $_POST['id'];
        $sql = "UPDATE categories SET name=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $updated_name, $category_id);
        mysqli_stmt_execute($stmt);
    }
?>
```

这段代码通过使用参数化查询来防止 SQL 注入。参数化查询是一种将 SQL 查询语句与用户提供的数据分开的方法。在这种情况下，SQL
查询中的变量部分（即需要从用户输入中获取的部分）被替换为占位符，而用户提供的数据则作为参数传递给查询。这样做可以防止恶意用户利用输入数据来执行
SQL 注入攻击。

> **SQL 注入**💡
>
> 常见的网络安全漏洞，攻击者通过在输入字段中注入恶意的 SQL 代码，从而获取或修改数据库中的数据，甚至完全控制数据库服务器。通过使用参数化查询，我们可以确保用户输入的数据不会被解释为
> SQL 代码的一部分，从而有效地防止了 SQL 注入攻击。

**效果图✨**
![](https://pic.leetcode.cn/1713429987-zAoFSS-WeChat8b9c3b21445a3a41e2ba1738f3eb3b55.jpg)
![](https://pic.leetcode.cn/1713430018-xcFnvV-WeChat3a42e58c7ab6da84c789a4f8f9284d88.jpg)

### 3.1.4 删除类别功能

1. 修改删除按钮

   修改按钮，以表单形式提交

```html

<form action='' method='post' style='display: inline-block;'>
    <input type='hidden' name='delete_id' value='" . $category["id"] . "'>
    <button type='submit' name='delete_submit' class='btn btn-danger btn-sm' style='margin-left: 5px;'>删除</button>
</form>
```

![](https://pic.leetcode.cn/1713429809-yemvZF-WeChatb52cec4251dd0db45e0dc3e2219e800b.jpg)

2. 添加`php`数据处理逻辑

```php
<?php
    if (isset($_POST['delete_id'])) {
        $delete_id = $_POST['delete_id'];
        $sql = "DELETE FROM categories WHERE id='$delete_id'";
        mysqli_query($conn, $sql);
    }
?>
```

![WeChat043ceee5e606886c59ecea1a7a893ae4.jpg](https://pic.leetcode.cn/1713431779-LYJirF-WeChat043ceee5e606886c59ecea1a7a893ae4.jpg)

### 3.2 添加交易

### 3.2.1 更新类别选择

将类别改成下拉菜单，数据从数据库里读取

```html

<div class="mb-3">
    <label for="category" class="form-label">类别</label>
    <select class="form-select" id="category" name="category" required>
        <option value="">选择类别</option>
        <?php
        $sql = "SELECT * FROM categories";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        ?>
    </select>
</div>
```

![](https://pic.leetcode.cn/1713430329-ZtFuOe-WeChat0854647a751666eb5f150aad16a3d95d.jpg)

**效果图✨**
![](https://pic.leetcode.cn/1713429623-hpxIpa-WeChata884feeaeafd8a3b95023ed06bdb90a5.jpg)

成功连通了自定义交易类别

### 3.2.2 添加交易功能

将页面的各个字段插入到数据库

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $datetime = strtotime($_POST['datetime']);
    $cid = $_POST['category'];
    $description = $_POST['description'];

    // Sanitize the input
    $type = mysqli_real_escape_string($conn, $type);
    $amount = mysqli_real_escape_string($conn, $amount);
    $datetime = mysqli_real_escape_string($conn, $datetime);
    $cid = mysqli_real_escape_string($conn, $cid);
    $description = mysqli_real_escape_string($conn, $description);

    // Insert transaction into the database
    $sql = "INSERT INTO transactions (type, amount, datetime, cid, description) 
    VALUES ('$type', '$amount', '$datetime', '$cid', '$description')";
    mysqli_query($conn, $sql);
}
?>
```

值得注意的是，我们获取的到的时间数据需要使用`strtotime()`方法转换成时间戳
好处如下
> - **统一格式：**
    > 将时间数据转换为时间戳后，可以在不同的系统和编程语言中更容易地进行处理，因为时间戳是一个统一的数字格式，不受时区、语言环境或日期格式的影响。
>- **便于比较：**
   > 时间戳是数字，可以直接进行大小比较。这对于在数据库中对时间进行排序或筛选时特别有用，也方便了对时间的各种计算和处理。
> - **易于操作：**
    > 使用时间戳可以方便地进行日期和时间的各种操作，如加减、格式化、转换等。而在字符串格式中，要进行相同的操作可能会更复杂一些。
> - **兼容性：**
    > 在许多编程语言和数据库系统中，时间戳都是常见的时间表示方法，因此使用时间戳可以提高代码的兼容性。

## 3.3 查看交易

### 3.3.1 动态化数据

1. 将模拟数据切换成数据库的数据

```php
$sql = 'SELECT * FROM transactions';
$result = mysqli_query($conn, $sql);
$transactions  = mysqli_fetch_all($result, MYSQLI_ASSOC);
```

接下来我们要对数据库里的数据进行处理，以确保他们正确在页面上显示

2. 配置日期格式

```php
<td>" . date('Y-m-d H:i', $transaction['datetime']) . "</td> 
```

通过此方式将数据库里的时间戳自动转换为日期时间格式

3. 配置交易类型

为了更方便的存储以及确保数据的安全性，我们在数据库里存放`0`和`1`以分别代表`收入`和`支出`。
我们在打印数据的时候需要把数库里的`0`和`1`转换为`收入`和`支出`。

首先我们先创建一个数组

```php
$typeArr=array(
    '1'=>'收入',
    '2'=>'支出'
);
```

这段代码定义了一个名为 $typeArr 的关联数组，其中键值对表示了交易类型和对应的中文描述。

- 键值 `1` 对应的中文描述是 `收入`，表示该交易类型为收入。
- 键值 `2` 对应的中文描述是 `支出`，表示该交易类型为支出。

这样的数组结构提供了一种便捷的方式，可以通过数字类型来表示不同的交易类型

接下来我们将从数据库拿到的类型字段放进这个数组

```php
<td>" . $typeArr[$transaction["type"]] . "</td>
```

我们从数据库拿到的要么是`0`或者是`1`，如果您拿到的是`1`，假如。
那放进我们创建的类型数组里面就会根据`1`找到对应的`收入`，然后打印出来。

4. 配置交易类别

当处理交易类别时，同样可以采用类似将从数据库拿到的数据在一个数组里做匹配的方法。
首先，从数据库中检索类别数据，并将其存储在一个关联数组中，以便在打印交易列表时能够将类别 ID 转换为类别名称。

```php
$sql = 'SELECT id, name FROM categories';
$result = mysqli_query($conn, $sql);
$categoriesArr = [];
while ($row = mysqli_fetch_assoc($result)) {
    $categoriesArr[$row['id']] = $row['name'];
}
```

这段代码首先执行了一个 SQL 查询，选择了数据库中的所有类别，并通过 mysqli_fetch_assoc() 函数逐行获取查询结果。在循环中，将每一行的类别
ID 作为关联数组的键，类别名称作为对应的值，最终形成了一个以类别 ID 为键、类别名称为值的关联数组 $categoriesArr。

通过这种方式，我们可以在后续代码中使用 $categoriesArr 数组，根据类别 ID 快速获取对应的类别名称，以便在交易列表等页面中显示更友好的类别信息。

接下来我们将从数据库拿到的类别字段放进这个数组

```php
<td>" . $categoriesArr[$transaction["cid"]] . "</td>
```

原理与类型一致

**效果图✨**
![](https://pic.leetcode.cn/1713429538-mAsswg-WeChat76675a5a273970592b5804a595609daf.jpg)

## 3.4 仪表盘

### 3.4.1 总金额计算

统计数据库里所有的消费金额

```php
$sql = 'SELECT SUM(amount) AS totalAmount FROM transactions';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalAmount = $row['totalAmount'];
```

讲计算好的总收支打印到页面上

```php
<p class="card-text">$<?php echo $totalAmount; ?></p>
```

![WeChatf8cbf0051423409624ff7a16d4f0bd20.jpg](https://pic.leetcode.cn/1713442033-VhEIvP-WeChatf8cbf0051423409624ff7a16d4f0bd20.jpg)


**效果图✨**
![WeChat07881e5128e814acabd3a7c417806663.jpg](https://pic.leetcode.cn/1713441913-UnjcuO-WeChat07881e5128e814acabd3a7c417806663.jpg)


### 3.4.2 总支出细分计算

接下来我们将每月支出细分做成一个图表

1. 引入`Chart.js`

   将支出数据显示在一个圆形图表（如饼图）中，您可以将JavaScript库（如Chart.js）集成到您的PHP和HTML代码中。
   以下是使用Chart.js创建按类别分类的支出的饼图的逐步指南

```javascript
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
```

2. 准备数据

   为了在饼图中显示支出数据，您需要准备一个包含每个类别支出金额的数组。
   您可以通过查询数据库来获取这些数据，然后将其存储在一个关联数组中。

```php
<?php
$sql = "
SELECT c.name AS category_name, SUM(t.amount) AS total_amount
FROM transactions t
JOIN categories c ON t.cid = c.id
WHERE t.type = 2
GROUP BY c.name
";
$result = mysqli_query($conn, $sql);
$labels = [];
$data = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['category_name'];
        $data[] = $row['total_amount'];
    }
} else {
    echo "未找到数据.";
}
?>
```

![WeChatb8320f253cb4f9d8163d2836fa4862ba.jpg](https://pic.leetcode.cn/1713440033-sORBEA-WeChatb8320f253cb4f9d8163d2836fa4862ba.jpg)
这段代码通过查询数据库获取特定类型的交易数据，并将其按照类别分组，最终将类别名称和总金额存储在数组中，用于后续的数据分析和展示。
- 通过命令`WHERE t.type = 2`，筛选出支出数据

3. 创建饼图

   在HTML代码中，您可以使用Chart.js库创建一个饼图，用于显示每个类别的支出金额。
   首先，您需要在页面中添加一个canvas元素，用于显示饼图。

```html
<div class="container" style="width: 45%;">
    <div class="d-flex justify-content-center">
        <canvas id="expenseTypePieChart"></canvas>
    </div>
</div>
```

![WeChata547197969a561c71e7ebbd981f88eaa.jpg](https://pic.leetcode.cn/1713440142-gpqRaK-WeChata547197969a561c71e7ebbd981f88eaa.jpg)

- `<canvas id="expenseTypePieChart" ></canvas>`：一个用于绘制饼图的 HTML5 画布元素，其 ID 被设置为 "expenseTypePieChart"
  ，以便在 JavaScript 中引用。


4. 初始化饼图

   接下来，您需要编写JavaScript代码，使用Chart.js库初始化饼图，并将数据传递给饼图。

```javascript
<script>
    var ctx = document.getElementById('expenseTypePieChart').getContext('2d');
    var expenseTypePieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: '',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                "#3A2D11",
                "#8780E9",
                "#EFF1F0",
                "#FDEFD5",
                "#CFC2B9",
                "#9E7C49"
                ],
                borderColor: [
                "#3A2D11",
                "#8780E9",
                "#EFF1F0",
                "#FDEFD5",
                "#CFC2B9",
                "#9E7C49"
                ],
                borderWidth: 1
            }]
        },options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                },
            }
        }
    });
</script>
```

这段脚本用于生成一个饼图，通过图表库`Chart.js`来实现。

- type: 'pie' 指定了图表的类型为饼图。
- 在 data 对象中，labels 属性是用 PHP json_encode 函数输出的标签数组，代表每个饼块的名称。
- datasets 数组中定义了图表的数据集，它包含数据点和配置如背景颜色（backgroundColor）和边框颜色（borderColor）。
- backgroundColor 和 borderColor 数组里的颜色字符串定义了饼图每一块的颜色和边框颜色。
- options 对象中，responsive: true 确保图表可以响应式地适应不同的屏幕大小。
- plugins 里的 legend 配置了图例的位置，而 tooltip 控制了鼠标悬停提示框的行为。

> **额外提示：**
> 
> - **了解图表比例：** 您可以将光标悬停在区块上方，以查看各部分的比例信息。
> - **颜色调色板：** 您可以自定义`backgroundColor`和`borderColor`数组，以匹配您网站的设计主题。
> - **响应式设计：** `Chart.js` 默认是响应式的，这确保您的图表在不同设备上都能呈现良好的效果。

**效果图✨**
![WeChat20c0c80429a8df067f851a06573ef3d8.jpg](https://pic.leetcode.cn/1713443164-runuNP-WeChat20c0c80429a8df067f851a06573ef3d8.jpg)


### 3.4.3 总收入细分计算

逻辑与支出一致，只是查询条件不同，这里不再赘述细节


1. 准备数据
```php
<?php
$sql = "
SELECT c.name AS category_name, SUM(t.amount) AS total_amount
FROM transactions t
JOIN categories c ON t.cid = c.id
WHERE t.type = 1
GROUP BY c.name
";
$result = mysqli_query($conn, $sql);
$labels_income = [];
$data_income = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $labels_income[] = $row['category_name'];
        $data_income[] = $row['total_amount'];
    }
} else {
    echo "未找到数据.";
}
?>
```

2. 创建饼图
```html
<div class="container" style="width: 45%;">
    <div class="d-flex justify-content-center">
        <canvas id="incomeTypePieChart" ></canvas>
    </div>
</div>
```


3. 初始化饼图
```js
<script>
    var ctx = document.getElementById('incomeTypePieChart').getContext('2d');
    var incomeTypePieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($labels_income); ?>,
            datasets: [{
                label: '',
                data: <?php echo json_encode($data_income); ?>,
                backgroundColor: [
                "#D8944A",
                "#51A8E6",
                "#ACD4EA",
                "#527C8F",
                "#D4B695",
                "#8E4F34"
                ],
                borderColor: [
                "#D8944A",
                "#51A8E6",
                "#ACD4EA",
                "#527C8F",
                "#D4B695",
                "#8E4F34"
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                },
            }
        }
    });
</script>
```

**效果图✨**
![WeChate33ab84eb3ff69e0e55f13d8046f332e.jpg](https://pic.leetcode.cn/1713443729-QOmVtg-WeChate33ab84eb3ff69e0e55f13d8046f332e.jpg)

