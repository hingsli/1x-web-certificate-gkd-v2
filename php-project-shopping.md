# 项目实战:  简易在线商店项目
### github地址: https://github.com/CCCzzzNNN/shopping
### 作者: CCCzzzNNN
## 目录
1. [H5页面](#H5页面)
2. [配置php的运行环境](#配置php的运行环境)
3. [使用include引入PHP代码](#使用include引入PHP代码)
4. [数据库](#数据库)
5. [完善加入购物车功能](#完善加入购物车功能)
6. [完善结算功能](#完善结算功能)
7. [完善登录注册功能](#完善登录注册功能)
8. [完善个人中心页面](#完善个人中心页面)

在本次的实验中我们来构建一个基于PHP的课程评价APP，此网站的静态网页代码如下，该项目使用了Bootstrap框架：
# H5页面
1、`index.html`(主页页面)
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            padding-top: 56px; /* Fix navbar height */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .product-card {
            margin-bottom: 20px;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商城</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <h2>欢迎来到我的在线商城</h2>
        <!-- Product Cards -->
        <div class="row mt-4" id="product-list">
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="../img/1.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
            <!-- Add more product cards here -->
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="../img/2.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="../img/3.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="../img/4.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="../img/5.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">  
                <div class="card product-card">
                    <img src="../img/6.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">vehicle</h5>
                        <p class="card-text">无敌超跑，帅到爆炸</p>
                        <a href="product_detail.html" class="btn btn-primary">详情</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 Online Store</span>
        </div>
    </footer>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


```
2. `product_detail.html`(主页)
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store - Product Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商城</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>商品详情</h2>
        <div class="row">
            <div class="col-md-6">
                <!-- 商品图片 -->
                <img id="product-image" src="" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <!-- 商品名称 -->
                <h3 id="product-name">商品名称</h3>
                <!-- 商品描述 -->
                <p id="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie risus vitae purus condimentum, ut convallis enim tristique. Aliquam consequat leo eu tortor eleifend tristique.</p>
                <!-- 商品价格 -->
                <p id="product-price">价格: $99.99</p>
                <!-- 商品库存 -->
                <p id="product-availability">库存: In stock</p>
                <!-- 添加到购物车按钮 -->
                <button class="btn btn-primary" onclick="addToCart()">添加到购物车</button>
            </div>
        </div>
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // 获取主页传递的商品信息，并填充到页面中
        const urlParams = new URLSearchParams(window.location.search);
        const productName = urlParams.get('name');
        const productDescription = urlParams.get('description');
        const productPrice = urlParams.get('price');
        const productAvailability = urlParams.get('availability');
        const productImage = urlParams.get('image');

        // 填充商品信息到页面对应的元素
        document.getElementById('product-name').innerText = productName;
        document.getElementById('product-description').innerText = productDescription;
        document.getElementById('product-price').innerText = '价格: $' + productPrice;
        document.getElementById('product-availability').innerText = '库存: ' + productAvailability;
        document.getElementById('product-image').src = productImage;

        // 添加到购物车
        function addToCart() {
            // 在这里添加购物车逻辑，可以使用 JavaScript 或者 AJAX 请求将商品加入购物车
            alert('商品已添加到购物车!');
        }
    </script>
</body>
</html>




```
3. `cart.html`(购物车页面)
```html
    3.cart.html(购物车页面)
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>购物车</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .product-item {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .product-image {
            max-height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商店</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>购物车</h2>
        <div class="row">
            <div class="col-md-8">
                <!-- 商品项目将动态添加在此 -->
                <div class="product-item d-flex align-items-center">
                    <img src="product1.jpg" alt="商品图片" class="product-image">
                    <div>
                        <h5>商品名称</h5>
                        <p>价格：$99.99</p>
                        <input type="number" value="1" class="form-control" style="width: 70px;">
                    </div>
                    <button class="btn btn-danger ml-auto">移除</button>
                </div>
                <!-- 添加更多商品项目 -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">购物车汇总</h5>
                        <p>总计商品数量：<span id="total-items">1</span></p>
                        <p>总价：<span id="total-price">$99.99</span></p>
                        <button class="btn btn-primary btn-block">结算</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

```
4. `checkout.html`(结算页面)
```html
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>结算</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商店</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>结算</h2>
        <!-- 您的结算表单和内容在这里 -->
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

```

5. `user_profile.html`(用户个人中心页面)
```html
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户个人中心</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商店</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">退出</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>用户个人中心</h2>
        <!-- 您的用户个人信息和订单历史内容在这里 -->
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


```

6. `login.html`(登录页面)
```html
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户登录</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商店</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">注册</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>用户登录</h2>
        <form>
            <div class="form-group">
                <label for="username">用户名</label>
                <input type="text" class="form-control" id="username" placeholder="输入用户名">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" placeholder="输入密码">
            </div>
            <button type="submit" class="btn btn-primary">登录</button>
        </form>
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

```
7. `register.html`(注册页面)
```html
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户注册</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>`
</head>
<body>
    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">在线商店</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 内容 -->
    <div class="container mt-5">
        <h2>用户注册</h2>
        <form>
            <div class="form-group">
                <label for="username">用户名</label>
                <input type="text" class="form-control" id="username" placeholder="输入用户名">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" placeholder="输入密码">
            </div>
            <div class="form-group">
                <label for="confirm_password">确认密码</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="确认密码">
            </div>
            <button type="submit" class="btn btn-primary">注册</button>
        </form>
    </div>

    <!-- 页脚 -->
    <footer class="footer bg-light py-3">
        <div class="container text-center">
            <span class="text-muted">© 2024 在线商店</span>
        </div>
    </footer>

    <!-- Bootstrap 和 jQuery 脚本 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

```

# 配置php的运行环境
1、创建项目文件夹：在`XMAPP`目录下找到`htdocs`文件夹，创建一个名为`shopping`的文件夹，这个文件夹用于存放项目文件

2、复制网页文件: 将之前创建的静态网页文件（）复制到`shopping`文件夹中的`public`文件夹

3、启动Apache服务器: 在`XAMPP Control Panel`中，找到`Apache`模块旁边`start`按钮，点击它启动`Apache`服务器。如果一切正常，你应该会看到`Apache`模块旁边的指示灯变为绿色

4、打开浏览器，访问`http://localhost/shopping/public/index.html`
此时能够看到页面被渲染
在浏览器中查看网页
![087604da34eb1a19de6db4cd3f36e52.png](https://pic.leetcode.cn/1716258879-QIfVhl-087604da34eb1a19de6db4cd3f36e52.png)
![b1a0f6c15951cfda0fc94e439472af2.png](https://pic.leetcode.cn/1716258966-cwlHjW-b1a0f6c15951cfda0fc94e439472af2.png)
![f40132275b8580b09748240a06b057e.png](https://pic.leetcode.cn/1716259024-IiwGAH-f40132275b8580b09748240a06b057e.png)
![262bdfaf9796c0cfe806c6dc37176b4.png](https://pic.leetcode.cn/1716259053-dWKWXg-262bdfaf9796c0cfe806c6dc37176b4.png)
![a248343a0454c78595a63b59fbada61.png](https://pic.leetcode.cn/1716259080-NDHaVL-a248343a0454c78595a63b59fbada61.png)
![e11e7bf63ae5678648aa00df5aaa300.png](https://pic.leetcode.cn/1716259105-TGiLaD-e11e7bf63ae5678648aa00df5aaa300.png)
![9ae7efd1d211dd53b255eced2e45dbe.png](https://pic.leetcode.cn/1716259135-DLSQbt-9ae7efd1d211dd53b255eced2e45dbe.png)


# 使用include引入PHP代码
## 修改文件扩展名
首先需要将所有的静态文件`.html`扩展名换成`.php`，这样子做是因为我们即将在这些文件中引入`php`代码，而且`web`服务器是需要知道他们包含
的`php`代码，便于进行正确的处理

## 创建文件夹
创建`inc/`文件夹并添加`.php`
在项目的目录中创建一个inc/文件夹，这个文件夹用于存放页面中可重复的php片段， 例如网站的头部和尾部，
这样的做法可以避免每个页面上重复相同的HTML代码，以便于之后的维护和更新变得更加简单

## 创建通用文件
在`inc`文件夹创建`header.php`和`footer.php`
`header.php`:包含网页的头部分（`<head>`标签、导航栏、开始的`<main>`标签），它将被包含在每个页面的顶部。
`footer.php`: 包含关闭的`<main>`标签、网页的尾部内容（`<footer>`标签和引入的`Bootstrap`、 `JavaScript`文件），它将被包含在每个页面的底部。

`header.php`代码
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在线商店</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义样式 */
        body {
            padding-top: 56px; /* 修复导航栏高度 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .product-card {
            margin-bottom: 20px;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<!-- 导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">在线商城</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">登录</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



```

`footer.php`代码
```html
<!-- 页脚 -->
<footer class="footer bg-light py-3">
    <div class="container text-center">
        <span class="text-muted">© 2024 在线商店</span>
    </div>
</footer>

<!-- Bootstrap 和 jQuery 脚本 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
```
## 在页面包含通用文件
在页面包含header.php和footer.php，使用include语句引入header.php、footer.php
例如在`index.php`中
```html
<?php include '../inc/header.php'; ?>

<?php include '../inc/footer.php'; ?>
```
`index.php`
![d0405f4d64d2acface5722e50b8dad6.png](https://pic.leetcode.cn/1716260203-jBdWwB-d0405f4d64d2acface5722e50b8dad6.png)


通过以上步骤，你的项目结构现在支持PHP，并且通过使用 `include`功能来重用代码，使得网站的开发和后续维护更加高效。
每次修改头部或尾部时，只需要更新 `header.php` 或 `footer.php` 文件，变 更就会自动应用到所有页面上。
对于你的`PHP`项目中的导航链接，我们需要做的是更新 `header.php`文件中的链接路径，以确保在你的开发环境中它们能正确指向你的`PHP`页面。

# 数据库
## 1、创建数据库
```sql
CREATE DATABASE online_store;
-- 创建用户表
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- 创建产品表
CREATE TABLE products (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
description TEXT NOT NULL,
price DECIMAL(10, 2) NOT NULL,
availability VARCHAR(50) NOT NULL,
image VARCHAR(255) NOT NULL
);

-- 创建购物车表
CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
product_id INT NOT NULL,
quantity INT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (product_id) REFERENCES products(id)
);
```

## 2、插入数据
```sql
-- 插入用户数据
INSERT INTO users (username, password, email) VALUES ('user1', 'password1', 'user1@example.com');


-- 插入产品数据
INSERT INTO products (name, description, price, availability, image) VALUES 
('vehicle1', '无敌超跑，帅到爆炸', 100000, 'In stock', '../img/1.jpg'),
('vehicle2', '无敌超跑，帅到爆炸', 200000, 'In stock', '../img/2.jpg'),
('vehicle3', '无敌超跑，帅到爆炸', 300000, 'In stock', '../img/3.jpg');

-- 插入购物车数据
INSERT INTO cart (user_id, product_id, quantity) VALUES (1, 1, 2);
INSERT INTO cart (user_id, product_id, quantity) VALUES (1, 2, 1);

-- 插入产品数据
INSERT INTO products (name, description, price, availability, image) VALUES 
('vehicle4', '无敌超跑，帅到爆炸', 400000, 'In stock', '../img/4.jpg'),
('vehicle5', '无敌超跑，帅到爆炸', 500000, 'In stock', '../img/5.jpg'),
('vehicle6', '无敌超跑，帅到爆炸', 600000, 'In stock', '../img/6.jpg');
```

## 3、创建数据库链接文件
1、在项目根目录下创建`config`文件，创建`db.php`文件
这个文件包含了定义数据库连接所需的信息（如数据库主机、用户名 、密码和数据库名）和建立连接的代码。使用mysqli扩展来连接到MySQL数据库。

## 4、编写`db.php`内容
```php
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'online_store');
define('DB_USER', 'root'); // 替换为你的数据库用户名
define('DB_PASS', '1234'); // 替换为你的数据库密码

// 创建连接
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
?>

```
## 5、更新页面使用`include`以包含`db.php`
```html
<?php include '../config/db.php'; ?>
```

### 使用mysqli_real_escape_string 函数来确保从URL中获取的值是安全的 避免SQL注入

关键点

1、在index中传递id参数：每个商品的详情链接包含商品的id参数

2、在proper_detail.php中获取id参数，使用$_GET[‘id’]获取并验证id参数

3、确保数据库链接正确关闭: 在脚本结束前调用$conn->close(); 关闭数据库链接

我们需要在index.php页面中为每个商品的详情链接传递id参数
```html
<!-- 内容 -->
<div class="container mt-5">
   <h2>商品详情</h2>
   <div class="row">
      <div class="col-md-6">
         <!-- 商品图片 -->
         <img id="product-image" src="<?php echo htmlspecialchars($productImage); ?>" class="img-fluid" alt="Product Image">
      </div>
      <div class="col-md-6">
         <!-- 商品名称 -->
         <h3 id="product-name"><?php echo htmlspecialchars($productName); ?></h3>
         <!-- 商品描述 -->
         <p id="product-description"><?php echo htmlspecialchars($productDescription); ?></p>
         <!-- 商品价格 -->
         <p id="product-price">价格: $<?php echo htmlspecialchars($productPrice); ?></p>
         <!-- 商品库存 -->
         <p id="product-availability">库存: <?php echo htmlspecialchars($productAvailability); ?></p>
         <!-- 添加到购物车按钮 -->
         <button class="btn btn-primary" onclick="addToCart()">添加到购物车</button>
      </div>
   </div>
</div>

```
`index`页面效果
![image.png](https://pic.leetcode.cn/1716261199-MqFljI-image.png)

# 完善加入购物车功能
## 1、在`product_detail.php`页面添加一个用于输入购买数量的表单
```html
<!-- 添加到购物车表单 -->
<div id="add-to-cart-form" style="display: none;">
   <div class="container mt-5">
      <h3>添加到购物车</h3>
      <form id="cart-form">
         <div class="form-group">
            <label for="quantity">数量</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="<?php echo htmlspecialchars($productAvailability); ?>" required>
         </div>
         <input type="hidden" id="product_id" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
         <button type="submit" class="btn btn-primary">确认</button>
         <button type="button" class="btn btn-secondary" onclick="hideAddToCartForm()">取消</button>
      </form>
   </div>
</div>
```
## 2、使用`JS`显示和隐藏菜单
```js
// 显示添加到购物车表单
function showAddToCartForm() {
   document.getElementById('add-to-cart-form').style.display = 'block';
}

// 隐藏添加到购物车表单
function hideAddToCartForm() {
   document.getElementById('add-to-cart-form').style.display = 'none';
}
```
## 3、使用`AJAX`将表单提交刀片服务端，更新购物车数据
```js
/ 处理表单提交
document.getElementById('cart-form').addEventListener('submit', function(e) {
   e.preventDefault();

   var formData = new FormData(this);

   fetch('add_to_cart.php', {
      method: 'POST',
      body: formData
   })
   .then(response => response.text())
   .then(data => {
      alert('商品已添加到购物车!');
      hideAddToCartForm();
   })
   .catch(error => {
      console.error('Error:', error);
   });
});
```
## 4、创建`add_to_cart.php`
这个文件将处理添加到购物车逻辑
```php
<?php
include '../config/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "用户未登录";
    exit();
}

$product_id = intval($_POST['product_id']);
$quantity = intval($_POST['quantity']);
$user_id = $_SESSION['user_id'];

// 检查产品库存是否足够
$sql = "SELECT availability FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row['availability'] >= $quantity) {
    // 插入到购物车表
    $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";
    if ($conn->query($sql) === TRUE) {
        echo "商品已添加到购物车";
    } else {
        echo "添加到购物车失败: " . $conn->error;
    }
} else {
    echo "库存不足";
}

$conn->close();
    ?>

```
## 5、修改`cart.php`界面
先假定用户的id为1(实际情况中应该根据登录的用户获取购物车)
```html
$user_id = 1; 
```
### 获取购物车的数据
通过SQL查询获取当前用户购物车中的商品数据，并进行分组和数量累加，结果存储在$result变量中
```html
// 获取购物车数据
$sql = "SELECT c.id, p.name, p.price, c.quantity, (p.price * c.quantity) AS total_price
FROM cart c
JOIN products p ON c.product_id = p.id
WHERE c.user_id = $user_id";
$result = $conn->query($sql);

$total_items = 0;
$total_price = 0;
```
### 此时的页面效果
![8bae68ac51b854cdb0ecf850c5b58bb.png](https://pic.leetcode.cn/1716262166-iMGmun-8bae68ac51b854cdb0ecf850c5b58bb.png)
![ec0c62c9922b3d0a9ff267bf500be68.png](https://pic.leetcode.cn/1716262185-mOZPlt-ec0c62c9922b3d0a9ff267bf500be68.png)
移除商品模态框

创建`remove_from_cart.php`文件 ,文件负责处理购物车商品的移除请求
```html
data = json_decode(file_get_contents(‘php:..input’, true)):接收并解析来自cart.php页面的post请求

<?php
    $data = json_decode(file_get_contents('php://input'), true);

$product_id = intval($data['product_id']);
$user_id = intval($data['user_id']);
$quantity_to_remove = intval($data['quantity']);

// 获取当前购物车中的商品数量
$sql = "SELECT quantity FROM cart WHERE user_id = $user_id AND product_id = $product_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row) {
$current_quantity = $row['quantity'];

if ($current_quantity <= $quantity_to_remove) {
// 如果移除数量大于或等于当前数量，则删除该条目
$sql = "DELETE FROM cart WHERE user_id = $user_id AND product_id = $product_id";
} else {
// 否则，更新数量
$new_quantity = $current_quantity - $quantity_to_remove;
$sql = "UPDATE cart SET quantity = $new_quantity WHERE user_id = $user_id AND product_id = $product_id";
}

if ($conn->query($sql) === TRUE) {
echo "商品已移除";
} else {
echo "移除商品失败: " . $conn->error;
}
} else {
echo "购物车中没有找到该商品";
}

$conn->close();
?>
```
定义一个模态框，当用户点击移除按钮时会弹出。 模态框包含一个数量输入框和一个确认按钮，用户可以在其中输入要移除的商品数量
```html
<!-- 移除商品模态框 -->
<div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="removeModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="removeModalLabel">移除商品</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <input type="number" class="form-control mb-2" id="removeQuantity" min="1" value="1">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-danger" id="confirmRemove">确认移除</button>
         </div>
      </div>
   </div>
</div>
```
效果图
![61a5eefdb5f6757d9da1d8e3c195906.png](https://pic.leetcode.cn/1716262313-bZUgzp-61a5eefdb5f6757d9da1d8e3c195906.png)
完成以上步骤，可以实现点击商品详情页面中的添加到购物车按钮后弹出表单填写数量，并将商品添加到购物车，购物车页面会显示购物车中的商品，并且用户可以删除购物车中的商品。

# 完善结算功能
## 1、创建和更新数据库表
```html
CREATE TABLE user_payments (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
payment_type VARCHAR(50) NOT NULL,
account VARCHAR(100) NOT NULL,
balance DECIMAL(10, 2) NOT NULL
);
更新 products 表，确保包含商品的库存信息。
ALTER TABLE products ADD COLUMN availability INT NOT NULL;

更新 cart 表，存储用户购物车信息。
CREATE TABLE cart (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
product_id INT NOT NULL,
quantity INT NOT NULL
);
创建 orders 表，存储用户的订单信息
CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT NOT NULL,
total_price DECIMAL(10, 2) NOT NULL,
order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
## 2、创建和更新页面,添加支付方式选择和确认订单功能.
```html
添加支付方式
<div class="form-group">
   <label for="payment_method">选择支付方式</label>
   <select class="form-control" id="payment_method" name="payment_method" required>
      <?php
        $sql = "SELECT * FROM user_payments WHERE user_id = $user_id";
        $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
      echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['payment_type']) . ' (余额: $' . htmlspecialchars($row['balance']) . ')</option>';
      }
      } else {
      echo '<option value="">没有可用的支付方式</option>';
      }
      ?>
   </select>
</div>
```
### 确认订单功能
```html
<?php foreach ($cart_items as $item): ?>
<div>
   <p><?php echo htmlspecialchars($item['name']); ?> - 数量：<?php echo htmlspecialchars($item['quantity']); ?> - 总价：$<?php echo htmlspecialchars($item['total_price']); ?></p>
</div>
<?php endforeach; ?>
<p>总价：$<span id="total-price"><?php echo $total_price; ?></span></p>
<button type="submit" class="btn btn-primary">确认付款</button>
```
### 创建 checkout_process.php，
从表单数据中获取用户ID、购物车商品列表和支付方式
```html
$user_id = 1; // 假设用户ID为1，实际情况中应该根据登录用户获取
$items = $_POST['items'];
$payment_type = $_POST['payment_type'];

$total_price = 0;
foreach ($items as $item) {
$total_price += $item['price'] * $item['quantity'];
}
```
余额检查,查询用户选择的支付方式余额、检查是否足够支付总价
```html
$sql = "SELECT balance FROM user_payments WHERE user_id = $user_id AND payment_type = '$payment_type'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row) {
$balance = $row['balance'];

if ($balance >= $total_price) {
// 扣款逻辑在这里
} else {
echo "余额不足，请选择其它支付方式";
}
} else {
echo "支付方式不存在";
}
```
### 扣款和库存更新
更新用户支付方式余额
```html
$new_balance = $balance - $total_price;
$sql = "UPDATE user_payments SET balance = $new_balance WHERE user_id = $user_id AND payment_type = '$payment_type'";
if ($conn->query($sql) === TRUE) {
// 更新库存逻辑在这里
} else {
echo "扣款失败: " . $conn->error;
}
```
遍历购物车商品，检查库存是否足够，更新库存数量
```html
$success = true;
foreach ($items as $item) {
$product_id = $item['id'];
$quantity = $item['quantity'];

// 获取当前库存
$sql = "SELECT availability FROM products WHERE id = $product_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row) {
$current_stock = $row['availability'];

// 检查库存是否足够
if ($current_stock >= $quantity) {
$new_stock = $current_stock - $quantity;
$sql = "UPDATE products SET availability = $new_stock WHERE id = $product_id";
if ($conn->query($sql) !== TRUE) {
$success = false;
break;
}
} else {
$success = false;
break;
}
} else {
$success = false;
break;
}
}
```
### 创建`success.php`页面
显示支付成功信息
```html
<div class="container mt-5">
   <h2>支付成功</h2>
   <p>您的订单已成功支付。感谢您的购买！</p>
   <a href="index.php" class="btn btn-primary">返回首页</a>
</div>
<?php include '../inc/footer.php'; ?>
```
效果图
![f961bad0875ab8197c02975bea5867a.png](https://pic.leetcode.cn/1716263062-FEEbIc-f961bad0875ab8197c02975bea5867a.png)
![6a91864d71797b726c70117e9ce6b3d.png](https://pic.leetcode.cn/1716263090-gcUgMA-6a91864d71797b726c70117e9ce6b3d.png)
![1a75e774397ddd7d17ce891c65ed680.png](https://pic.leetcode.cn/1716263106-ccOMjb-1a75e774397ddd7d17ce891c65ed680.png)

# 完善登录注册功能
使用 `PHP` 的 `$_SESSION` 处理用户登录状态。

#### 更改`header.php` 根据会话状态显示登录/注册或退出链接。

```html
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>在线商店</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
         /* 自定义样式 */
         body {
            padding-top: 56px; /* 修复导航栏高度 */
         }
         .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
         }
         .product-card {
            margin-bottom: 20px;
         }
         .product-card img {
            height: 200px;
            object-fit: cover;
         }
      </style>
   </head>
   <body>
      <!-- 导航栏 -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <a class="navbar-brand" href="index.php">在线商城</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">首页</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="user_profile.php">个人中心</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="cart.php">购物车</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="checkout.php">结算</a>
                  </li>
                  <?php if (isset($_SESSION['user_id'])): ?>
                  <li class="nav-item">
                     <a class="nav-link" href="logout.php">退出</a>
                  </li>
                  <?php else: ?>
                  <li class="nav-item">
                     <a class="nav-link" href="login.php">登录</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="register.php">注册</a>
                  </li>
                  <?php endif; ?>
               </ul>
            </div>
         </div>
      </nav>

```
#### 更新所有使用临时用户信息的页面和功能来使用会话中的用户信息。
例如 `index.php`
```html
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
```
此时的效果
![3d895d4bfb5bac3bc0a35b1b958f793.png](https://pic.leetcode.cn/1716263483-VRQCYE-3d895d4bfb5bac3bc0a35b1b958f793.png)

#### 完善`login.php`
处理表单提交，验证用户名和密码。如果验证通过，则设置会话变量并重定向到首页。
```html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
if (password_verify($password, $row['password'])) {
$_SESSION['user_id'] = $row['id'];
$_SESSION['username'] = $row['username'];
header("Location: index.php");
exit();
} else {
echo "<script>alert('密码错误');</script>";
}
} else {
echo "<script>alert('用户名不存在');</script>";
}
}
```
#### 完善`register.php`
处理表单提交，验证用户名和电子邮件是否已存在。如果不存在，则插入新用户信息。
```
// 检查用户名是否已存在
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('用户名已存在，请选择其他用户名');</script>";
    } else {
        // 检查电子邮件是否已存在
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<script>alert('电子邮件已存在，请选择其他电子邮件');</script>";
        } else {
            // 插入新用户
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

```
#### 初始余额都为10,000,000 元。
`$default_balance = 10000000.00;`
#### 获取获取用户输入的支付方式数据。
```html
if ($conn->query($sql) === TRUE) {
$user_id = $conn->insert_id;
// 插入支付方式
$sql_payments = "INSERT INTO user_payments (user_id, payment_type, account, balance) VALUES
($user_id, '支付宝', '$alipay_account', $default_balance),
($user_id, '银行卡', '$bank_account', $default_balance),
($user_id, '信用卡', '$credit_card_account', $default_balance),
($user_id, '微信支付', '$wechat_account', $default_balance)";
if ($conn->query($sql_payments) === TRUE) {
echo "<script>alert('注册成功！'); window.location.href='login.php';</script>";
} else {
echo "支付方式添加失败: " . $conn->error;
}
}
```
#### 创建`logout.php` 注销逻辑
启动会话，销毁会话数据，并重定向到登录界面
```
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>  
```
效果图
![a6c371d0e82f76ec797b71d3dc2febc.png](https://pic.leetcode.cn/1716263836-IhduXG-a6c371d0e82f76ec797b71d3dc2febc.png)
![d774b37da5c1bcdc9c1d58b3819c4d0.png](https://pic.leetcode.cn/1716263879-gbsqyc-d774b37da5c1bcdc9c1d58b3819c4d0.png)

# 完善个人中心页面
修改`checkout_process.php`页面

在支付成功后插入订单数据到 orders 表中，并在 user_profile.php 中展示用户的订单历史。此修改保证了订单数据的持久化存储，并为用户提供了订单历史查看功能
#### 1、检查用户余额并更新支付方式余额
```html
if ($payment_method['balance'] >= $total_price) {
// 更新支付方式余额
$new_balance = $payment_method['balance'] - $total_price;
$sql = "UPDATE user_payments SET balance = $new_balance WHERE id = $payment_method_id";
$conn->query($sql);
}
```
#### 2、更新产品库存
```html
foreach ($cart_items as $item) {
$new_availability = $item['availability'] - $item['quantity'];
$sql = "UPDATE products SET availability = $new_availability WHERE id = " . $item['id'];
$conn->query($sql);
}
```
#### 3、插入订单数据
```html
// 插入订单数据
foreach ($cart_items as $item) {
$order_sql = "INSERT INTO orders (user_id, product_id, quantity, price, payment_method, created_at) VALUES
($user_id, " . $item['id'] . ", " . $item['quantity'] . ", " . $item['total_price'] . ", '" . $payment_method['payment_type'] . "', NOW())";
$conn->query($order_sql);
}
```
效果图
![bd2673849b25d82df4d12c304858a5c.png](https://pic.leetcode.cn/1716269388-nsNVZS-bd2673849b25d82df4d12c304858a5c.png)


### 功能完善
#### 用户信息编辑功能
允许用户在个人中心页面编辑和更新自己的个人信息，包括用户名、密码和邮箱。 在 `user_profile.php` 中添加用户信息编辑表单， 添加原密码输入框，确保用户在修改密码时输入正确的原密码
```html
 <h2>用户个人中心</h2>
<div class="row">
   <div class="col-md-6">
      <h3>个人信息</h3>
      <form id="profile-form" method="post" action="update_profile.php">
         <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user_info['username']); ?>" required>
         </div>
         <div class="form-group">
            <label for="email">邮箱</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user_info['email']); ?>" required>
         </div>
         <div class="form-group">
            <label for="current_password">原密码</label>
            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="输入原密码">
         </div>
         <div class="form-group">
            <label for="new_password">新密码</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="输入新密码">
         </div>
         <button type="submit" class="btn btn-primary">更新信息</button>
      </form>
   </div>

```

#### 创建一个`update_profile.php`用于处理更新请求
```html
<?php
session_start();
include '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : null;

$sql = "UPDATE users SET username='$username', email='$email'";
if ($password) {
    $sql .= ", password='$password'";
}
$sql .= " WHERE id=$user_id";

if ($conn->query($sql) === TRUE) {
echo "<script>alert('信息更新成功'); window.location.href='user_profile.php';</script>";
} else {
echo "更新失败: " . $conn->error;
}

$conn->close();
?>

```
#### 支付方式管理,允许用户在个人中心页面更改、删除支付方式。
### 支付方式管理表单
在 user_profile.php 中添加支付方式管理部分
```html
<form id="payments-form" method="post" action="update_payments.php">
   <div class="form-group">
      <label for="payment_id">选择支付方式</label>
      <select class="form-control" id="payment_id" name="payment_id" required>
         <?php if ($payments_result->num_rows > 0): ?>
         <?php while ($payment = $payments_result->fetch_assoc()): ?>
         <option value="<?php echo $payment['id']; ?>"><?php echo htmlspecialchars($payment['payment_type']) . " - " . htmlspecialchars($payment['account']) . " (余额: $" . htmlspecialchars($payment['balance']) . ")"; ?></option>
         <?php endwhile; ?>
         <?php else: ?>
         <option value="">没有支付方式</option>
         <?php endif; ?>
      </select>
   </div>
   <div class="form-group">
      <label for="account">新账号</label>
      <input type="text" class="form-control" id="account" name="account" required>
   </div>
   <button type="submit" class="btn btn-primary">更新支付方式</button>
</form>
```
展示现有的支付方式
```html
<ul>
   <?php
                $payments_sql = "SELECT * FROM user_payments WHERE user_id = $user_id";
                $payments_result = $conn->query($payments_sql);
   if ($payments_result->num_rows > 0) {
   while ($payment = $payments_result->fetch_assoc()) {
   echo "<li>" . htmlspecialchars($payment['payment_type']) . " - " . htmlspecialchars($payment['account']) . " (余额: $" . htmlspecialchars($payment['balance']) . ") <a href='delete_payment.php?id=" . $payment['id'] . "' class='btn btn-danger btn-sm'>删除</a></li>";
   }
   } else {
   echo "<li>没有支付方式。</li>";
   }
   ?>
</ul>
```
创建一个新的 `update_payments.php` 处理添加
```html
<?php
session_start();
include '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
```
更新支付方式
```html
$sql = "UPDATE user_payments SET account='$account' WHERE id=$payment_id AND user_id=$user_id";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('支付方式更新成功'); window.location.href='user_profile.php';</script>";
} else {
echo "更新失败: " . $conn->error;
}
```
创建一个`delete_payment.php` 删除支付方式的请求
```html
$sql = "DELETE FROM user_payments WHERE id=$payment_id AND user_id=$user_id";

if ($conn->query($sql) === TRUE) {
echo "<script>alert('支付方式删除成功'); window.location.href='user_profile.php';</script>";
} else {
echo "删除失败: " . $conn->error;
}
```
添加了更改密码按钮，点击按钮后弹出更改密码的模态框。
```html
<h5 class="modal-title" id="changePasswordModalLabel">更改密码</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">&times;</span>
</button>
function showChangePasswordForm() {
$('#changePasswordModal').modal('show');
}
```
更新用户支付方式的账号信息。
```html
$sql = "UPDATE user_payments SET account='$account' WHERE id=$payment_id AND user_id=$user_id";
if ($conn->query($sql) === TRUE) {
echo "<script>alert('支付方式更新成功'); window.location.href='user_profile.php';</script>";
} else {
echo "更新失败: " . $conn->error;
}
```
修改header.php,引入css样式
```css
 body {
            padding-top: 56px;
            background-color: #f8f9fa; /* 浅灰色背景 */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* 深色背景 */
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .product-card {
            margin-bottom: 20px;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }
        .card-custom {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            transition: 0.3s;
            border: none; /* 去除边框 */
            border-radius: 10px; /* 圆角边框 */
        }
        .card-custom:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
        }
        .modal-header-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none; /* 去除边框 */
            border-radius: 20px; /* 圆角按钮 */
        }
        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }
        .btn-danger-custom {
            background-color: #dc3545;
            color: white;
            border: none; /* 去除边框 */
            border-radius: 20px; /* 圆角按钮 */
        }
        .btn-danger-custom:hover {
            background-color: #c82333;
            color: white;
        }
        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
        }
        .nav-link {
            font-size: 1.1em;
        }
        .container {
            max-width: 1200px;
        }
        .card-title {
            font-size: 1.25em;
            font-weight: bold;
        }
        .card-text {
            font-size: 1em;
            color: #6c757d;
        }
```
效果图
![8d13a9759b65baa24559f6f94e003b0.png](https://pic.leetcode.cn/1716269888-LRdXKz-8d13a9759b65baa24559f6f94e003b0.png)
![98a8a913a16174e2779e8171bf4b31b.png](https://pic.leetcode.cn/1716269921-fgYNXa-98a8a913a16174e2779e8171bf4b31b.png)
![0fa3a62765f9fee58eee83f97f7576d.png](https://pic.leetcode.cn/1716269988-VDCQgJ-0fa3a62765f9fee58eee83f97f7576d.png)




