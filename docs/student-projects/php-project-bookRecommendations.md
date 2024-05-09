
> 作者: @xieleihan

> 项目遵从原作者的开源协议,允许对我的内容进行修改等改进
>
> 如果后续有人也是提交项目的话需要注意,图片的相对路径要在前面添加`/1x-web-certificate-gkd/`

# 第一步: 熟悉Git操作

参考课堂上的Git操作,推荐使用Git Bash进行操作,而不是使用图形化界面,每一步的操作通过自己的敲打可以发现实际问题.

# 项目: 根据输入自己的需求推荐相关的书籍

## 项目第一步: 技术栈:HTML+CSS+JavaScript 使用的框架是Bootstrap

1. **<font color=red face="PingFang SC">index.html</font>**

	```html
	    <!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>一个小项目</title>
	    <!-- 引入bootstarp的css -->
	    <link rel="stylesheet" href="./css/bootstrap-5.3.1.css">
	    <!-- 引入自己的css样式 -->
	    <link rel="stylesheet" href="./css/style.css">
	<body>
	    <!-- 导航栏 -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
	        <div class="container">
	            <a class="navbar-brand text-dark" href="#">项目实战</a>
	            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_example_1"
	                aria-controls="navbar_example_1" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbar_example_1">
	                <ul class="customizeOne navbar-nav">
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./index.html">首页</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./choose.html">选择</a>
	                    </li>
	            
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./about.html">关于我</a>
	                    </li>
	                </ul>
	                <ul class="navbar-nav ml-auto">
	                </ul>
	            </div>
	        </div>
	    </nav>
	    <div class="main clear">
	        <div class="title">
	            <div class="title-box">
	                <p>这不是bug,这是一个特性.在我设备上可以很好的运行</p>
	            </div>
	        </div>
	        <div class="down-type fr">
	            <img src="/images/arrow.png" alt="" class="down-type-1">
	            <img src="/images/arrow.png" alt="" class="down-type-2">
	            <img src="/images/arrow.png" alt="" class="down-type-3">
	        </div>
	    </div>
	    <main>
	        <div class="container d-flex flex-column align-items-center customizeThree">
	            <img src="/images/logo.webp" class="w-25 mb-3" alt="">
	            <h2>我来给你推荐课本</h2>
	            <p class="lead text-center">不是智能,是模拟,等我开发完自己的AI</p>
	            <form action="" class="mt-4 w-75">
	                
	                <div class="checkbox-container">
	                    <div class="custom-control custom-checkbox mb-3">
	                        <input type="checkbox" class="custom-control-input" id="customCheck1">
	                        <label class="custom-control-label" for="customCheck1">前端</label>
	                    </div>
	                    <div class="custom-control custom-checkbox mb-3">
	                        <input type="checkbox" class="custom-control-input" id="customCheck2">
	                        <label class="custom-control-label" for="customCheck2">后端</label>
	                    </div>
	                    <div class="custom-control custom-checkbox mb-3">
	                        <input type="checkbox" class="custom-control-input" id="customCheck3">
	                        <label class="custom-control-label" for="customCheck2">嵌入式</label>
	                    </div>
	                    <div class="custom-control custom-checkbox mb-3">
	                        <input type="checkbox" class="custom-control-input" id="customCheck4">
	                        <label class="custom-control-label" for="customCheck2">UI设计</label>
	                    </div>
	                </div>
	                
	                <div class="mb-3">
	                    <label for="email" class="form-label">Your email</label>
	                    <input type="email" class="form-control" id="email" name="email" placeholder="请输入你的邮箱">
	                </div>
	                <div class="mb-3">
	                    <label for="course" class="form-label">你所学的课程</label>
	                    <input type="text" class="form-control" id="course" name="course" placeholder="请输入课程名称">
	                </div>
	                <div class="mb-3">
	                    <label for="body" class="form-label">详细信息</label>
	                    <textarea class="form-control" id="body" name="body" rows="4" placeholder="请输入你的评价"></textarea>
	                </div>
	                <div class="mb-3">
	                    <input type="submit" name="submit" value="Submit" class="btn btn-dark w-100">
	                </div>
	            </form>
	        </div>
	    </main>
	    <div class="text-center customizeFour">
	        SouthAki版权所有 &copy; 2024
	    </div>
	
	    
	</body>
	<!-- 引入bootstarp的js -->
	<script src="./js/bootstrap-5.3.1.js"></script>
	<!-- 引入jQuery -->
	<script src="./js/jquery-3.7.1.js"></script>
	<script src="./js/main.js"></script>
	</html>
	```

2. **<font color=red face="PingFang SC">choose.html</font>**

	```HTML
	<!DOCTYPE html>
	<html lang="en">
	
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>帮你选择</title>
	    <!-- 引入bootstarp的css -->
	    <link rel="stylesheet" href="./css/bootstrap-5.3.1.css">
	    <!-- 引入自己的css样式 -->
	    <link rel="stylesheet" href="./css/style.css">
	
	<body>
	    <!-- 导航栏 -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
	        <div class="container">
	            <a class="navbar-brand text-dark" href="#">项目实战</a>
	            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_example_1"
	                aria-controls="navbar_example_1" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse" id="navbar_example_1">
	                <ul class="customizeOne navbar-nav">
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./index.html">首页</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./choose.html">选择</a>
	                    </li>
	
	                    <li class="nav-item">
	                        <a class="nav-link text-dark" href="./about.html">关于我</a>
	                    </li>
	                </ul>
	                <ul class="navbar-nav ml-auto">
	                </ul>
	            </div>
	        </div>
	    </nav>
	    <main>
	        <div class="mt-3 container d-flex flex-row justify-content-between align-items-center text-light">
	            <h2>选择推荐</h2>
	            <div class="card my-3" style="width: 18rem;">
	                <div class="card-body">
	                    helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!
	                </div>
	            </div>
	            <div class="card my-3" style="width: 18rem;">
	                <div class="card-body">
	                    helloWorld!helloWorld!helloWorld!helloWorld!
	                </div>
	            </div>
	            <div class="card my-3" style="width: 18rem;">
	                <div class="card-body">
	                    helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!helloWorld!
	                </div>
	            </div>
	        </div>
	    </main>
	    <footer class="text-center customizeFour">
	        SouthAki版权所有 &copy; 2024
	    </footer>
	
	
	</body>
	<!-- 引入bootstarp的js -->
	<script src="./js/bootstrap-5.3.1.js"></script>
	<!-- 引入jQuery -->
	<script src="./js/jquery-3.7.1.js"></script>
	<script src="./js/main.js"></script>
	
	</html>
	```
	3. **<font color=red face="PingFang SC">about.html</font>**
	
		```html
		<!DOCTYPE html>
		<html lang="en">
		
		<head>
		    <meta charset="UTF-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <title>关于我</title>
		    <!-- 引入bootstarp的css -->
		    <link rel="stylesheet" href="./css/bootstrap-5.3.1.css">
		    <!-- 引入自己的css样式 -->
		    <link rel="stylesheet" href="./css/style.css">
		
		<body>
		    <!-- 导航栏 -->
		    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
		        <div class="container">
		            <a class="navbar-brand text-dark" href="#">项目实战</a>
		            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_example_1"
		                aria-controls="navbar_example_1" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		            </button>
		            <div class="collapse navbar-collapse" id="navbar_example_1">
		                <ul class="customizeOne navbar-nav">
		                    <li class="nav-item">
		                        <a class="nav-link text-dark" href="./index.html">首页</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link text-dark" href="./choose.html">选择</a>
		                    </li>
		
		                    <li class="nav-item">
		                        <a class="nav-link text-dark" href="./about.html">关于我</a>
		                    </li>
		                </ul>
		                <ul class="navbar-nav ml-auto">
		                </ul>
		            </div>
		        </div>
		    </nav>
		    <div class="main">
		        <section class="bg-dark text-light p-5 text-center">
		            <div class="container">
		                <div class="customizeFive">
		                    
		                    <div>
		                        <h1>一个前端开发者</h1>
		                        <p class="lead">
		                            我是一个前端开发者,熟悉三大件,精通目前市场主流的的前端框架,如Vue,React,Electron等,对Git,Markdown,TypeScript,Node.js十分熟悉,目前是一个Android,鸿蒙认证开发者.
		                        </p>
		                        <p class="lead">
		                            我在Github上也有开源项目,欢迎fork.
		                        </p>
		                        <button class="btn btnPrimany btn-lg">调转到我的GitHub</button>
		                    </div>
		                    <img src="./images/banner-skill.webp" class="img-fluid w-50">
		                </div>
		            </div>
		        </section>
		
		    </div>
		    <footer class="text-center customizeFour">
		        SouthAki版权所有 &copy; 2024
		    </footer>
		
		
		</body>
		<!-- 引入bootstarp的js -->
		<script src="./js/bootstrap-5.3.1.js"></script>
		<!-- 引入jQuery -->
		<script src="./js/jquery-3.7.1.js"></script>
		<script src="./js/main.js"></script>
		
		</html>
		```
	
		4. 因为我们是打算用PHP运行的环境,所以我们需要做些准备
	
			- **创建项目的文件夹**:*(这里我们用到的是XAMPP这个集成软件)*在XAMPP目录下,我们找到`htdocs`这个文件夹.在`htdocs`这个文件夹里,创建我们的项目文件,我这里命名为`chooseApp`.这个文件夹将放置我们的项目文件.
	
			- **拷贝我们的网页文件**:将我们整个网页结构放到上面我们创建的`choose`文件夹中
	
			- **启动Apache服务器**:这一步就像是我们搞Spring一样,各种方法能启动就行
	
			- **访问项目**:打开我们的Chrome浏览器,输入URL``.
	
				你应该能看到index.html被正确的渲染.
	
			下面是我的的运行截图
	
			![index.html](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/1.png)
	
			![index.html](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/2.png)
	
			![choose.html](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/3.png)
	
			![about.html](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/4.png)
	
		## 项目第二步,从HTML切换到PHP
	
		这一步算是很重要的一步,因为要让浏览器知道我们需要用上*php*,而不是*html*.
		
		![更改成PHP](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/5.png)
		
		- 然后,我们需要对这三个PHP内容,进行**修改**,因为里面指向的链接有点问题,我们现在是*php*结尾的文件
		
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/6.png)
		
		- 然后呢,我们去到浏览器,查看我们对应的URL,能否正确跳转到我自己的定义是这样的,根据自己的实际情况进行更改`http://localhost/chooseApp/index.php`
		
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/7.png)
		
			然后,需要测试**其他链接**的跳转是否有问题
		
			如果跳转不过去,就说明路径有问题,检查下,正常来说的话,三个跳转链接是没有问题的.
		
			我就**不水废话和废图**,继续下一步
	
	1. 现在,我们进行**连接数据库测试和模拟测试**
	
	2. 首先,启动你的`XMAPP`,**这里你需要保证的是您的Apache和Mysql都是start状态**
	
		 最少需要的两个![XMAPP](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/8.png)
	
	3. 然后把下面的做了
		1. 我们在项目文件夹`chooseApp`下创建一个文件夹`config`,这个文件夹的作用是用来**存储我们的配置文件和连接数据库的必须信息**
		
		2. 再创建一个`dp.php`**文件**:这个是放在`config`这个文件夹下的,这个*php*定义了数据连接所需的信息,包括了**port**,**psw**等.<font color="red">**需要注意**:*我们这里是一个测试,不是生产环境,在生产环境,暴露psw可能造成不可预估的影响,是绝对禁止的*</font>
		
		 ![如图所示](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/9.png)
		
		3. 😊对了,在进行上面这一步的时候,需要注意的是,我们需要先去`MariaDB`中创建一个用户名,和一个`chooseApp`的数据库,包含一个指定字段的表`chooseTitle`
		
		- 这里我把过程以图片发出来
		
			到你的XMAPP里,点开`Shell`,输入下面的内容
		  	
			```sql
			mysql -u root -p
			```
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/10.png)
		  	
			不要输入密码等,直接`Enter`
		
		- 然后创建一个新用户
		
			```sql
			CREATE USER 'someuser'@'localhost' IDENTIFIED BY 'somepassword';
			```
		  
			✨<font color="red">Warnning:</font>在SQL语句中,使用大写字符来书写SQL关键字,这是约定俗成的,不是强制性,但是能提高可读性.
		  	
			分配权限
		  	
			```sql
			GRANT ALL PRIVILEGES ON * . * TO 'someuser'@'localhost';
			```
		  
			立即生效
		  	
			```sql
			FLUSH PRIVILEGES;
			```
		  
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/11.png)
		
		  - **创建选择数据库**
		
			```sql
			CREATE DATABASE chooseApp;
			USE chooseApp;
			```
		  
			创建表
		  	
			```sql
			CREATE TABLE chooseTitle(
			-> id INT AUTO_INCREMENT PRIMARY KEY,
			-> suject VARCHAR(10) NOT NULL,
		  	-> email VARCHAR(500) NOT NULL,
			-> suject_name VARCHAR(500) NOT NULL,
			-> content TEXT NOT NULL,
			-> date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
			-> );
			```
		  
			- `id` :是主键
			- `suject`:是checkbox选择的内容
			- `email`: user is email address
			- `suject_name`: 具体的课程名
			- `date`: 记录时间戳
		  	
			
			插入数据
			
		  ```sql
		  	INSERT INTO chooseTitle (suject, email, suject_name, content) VALUES 
		  	('前端', 'zhangsan@example.com', 'WEB开发', 'HTML+CSS+JavaScript'),
		  	('后端', 'lisi@example.com', 'SpringBoot', '使用SpringBoot创建后端'),
		  	('嵌入式', 'wangwu@example.com', 'ARM开发', '通过对学习C语言和数据结构,编写响应的驱动'),
		  	('UI设计', 'zhaoliu@example.com', 'Adobe PS', '学习对应的PS和Figma可以设计出很好看的UI界面');
			```
			
			![插入表的数据](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/12.png)
		
		4. ​	**更新db.php**
		
			- 这里我打算补充一些我遇到的问题
		
				如果在连接过程中遇到问题:比如你电脑之前安装过mysql环境,那可能会遇到xampp启动不了的情况发生
		
				**解决方法**:
		
				1. 到这个文件夹下,找到`my.ini`![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/21.png)把所有的**`3306`**,修改一下端口,这个端口任意都行
		
				2. 然后去到任务管理器,**stop自己的原先的mysql服务**![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/22.png)
			
				3. 再到这里`D:\XAMPP\phpMyAdmin`这个文件![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/23.png)
			
				4. 修改一下
			
					```php
					/* Authentication type and info */
					$cfg['Servers'][$i]['auth_type'] = 'config';
					$cfg['Servers'][$i]['user'] = 'root'; // root权限
					$cfg['Servers'][$i]['password'] = ''; // 这里是你管理员密码
					$cfg['Servers'][$i]['extension'] = 'mysqli';
					$cfg['Servers'][$i]['AllowNoPassword'] = true;
					$cfg['Lang'] = ''; // 记得改成CN
					$cfg['Servers'][$i]['port']='3316'; // 这里要给端口
					
					/* Bind to the localhost ipv4 address and tcp */
					$cfg['Servers'][$i]['host'] = '127.0.0.1';
					$cfg['Servers'][$i]['connect_type'] = 'tcp';
					
					/* User for advanced features */
					$cfg['Servers'][$i]['controluser'] = 'root'; //这里改成root
					$cfg['Servers'][$i]['controlpass'] = '';
					```
		
				5. 如果遇到**目标计算机积极拒绝访问**,可以使用网络工具关闭这个端口的防火墙,就可以了
		
			- **将我们必须连接的信息写入**:这其中包括`Database_host:localhost`,`Database_User:somename`,`Database_psw:*(缺省)`,`Database_name:chooseApp`
		
			- **创建数据库连接**:使用`new mysqli()`创建一个新的数据库链接
		
			- **检查连接**:通过检查`$conn->connect_error`来确认是否连接到数据库
		
				```sql
				<?php
				define('DB_HOST', 'localhost');
				define('DB_USER', 'root');
				define('DB_PASS', '');
				# 我的mysql修改过端口,如果是默认状态就是3306,或者直接缺省就行
				define('DB_PORT', 3316);
				define('DB_NAME', 'chooseApp');
				
				// new connect
				$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
				
				// check connection
				if($conn->connect_error){
				    die("Connection failed: " . $conn->connect_error);
				}
				
				// print connection
				echo "Connected successfully";
				?>
				
				```
			
				通过上面添加的*db.php*,我们可以去到我们的`index.php`去看下是否success.
			
				![成功图](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/13.png)
			
			5. 在`choose.php`引入我们的模拟数据
			
				这里的话,我们在`*choose.php*`上面加入*php数组*,里面的内容包括我们建表的时候的,`id`,`suject`,`email`,`suject_name`,`content`,`data`的数据
			
				**<font color="red">这里的是我们模拟从数据库获取数据,生产环境下并不能这样做</font>**
			
				```php
				<?php
				$chooseTitle = [
				    [
				        'id'=>1,
				        'suject'=>'前端',
				        'email'=>'zhangsan@example.com',
				        'suject_name'=>'WEB开发',
				        'data'=>'2023-05-01 08:00:00'
				    ],
				    [
				        'id'=>2,
				        'suject'=>'后端',
				        'email'=>'lisi@example.com',
				        'suject_name'=>'SpringBoot',
				        'data'=>'2023-05-02 08:00:00'
				    ],
				    [
				        'id'=>3,
				        'suject'=>'嵌入式',
				        'email'=>'wangwu@example.com',
				        'suject_name'=>'ARM开发',
				        'data'=>'2023-05-03 08:00:00'
				    ]
				];
				?>
				```
			
				```php
				<!-- 条件判断 -->
				<?php if(empty($chooseTitle)):?>
				    <span>空数组</span>
				<?php endif; ?>
				```
			
				![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/14.png)
			
				然后,我们需要让*php*自己去数据库动态获取数据
			
				```php
				<?php
				$sql = 'SELECT * FROM choosetitle';
				$result = mysqli_query($conn, $sql);
				$choosetitle = mysqli_fetch_all($result, MYSQLI_ASSOC);
				?>
				```
			
				```php+HTML
				<main>
				        <div class="mt-3 container d-flex flex-row justify-content-between align-items-center text-light">
				            <h2>选择推荐</h2>
				            <?php foreach($choosetitle as $choosetitles): ?>
				    <div class="card my-3" style="width: 18rem;">
				        <div class="card-title text-center mt-2">
				            <?php echo $choosetitles['suject_name'];?>
				        </div>
				        <div class="card-body">
				            <?php echo $choosetitles['suject'];?>
				            "来自<?php echo $choosetitles['email'];?>"
				        </div>
				        <div class="text-secondary mt-2">
				            <?php echo $choosetitles['date'];?>
				        </div>
				    </div>
				<?php endforeach; ?>
				```
			
				上面的是对我们之前使用占位去进行修改,引入*php*.
			
				![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/15.png)
			
			6. 回到`index.php`,我们需要对表单做出些修改,一样的,让其对错误信息进行修改
			
			   ```php
			   <?php
			   // 初始化表单数据
			   $suject = $email = $suject_name = $content = '';
			   // 初始化表单错误数据
			   $sujectError = $emailError = $suject_nameError = $contentError = '';
			   ?>
			   ```
			
			   ​	
			   这里需要注意的是,上面的数据都是我们在数据库中定义的,就是在表单首次加载的时候,对`$suject`,`email`,`suject_name`,`content`的字符串进行设置null.
			   ​	
			
			*Error同理*
			
			7. 修改`index.php`的表单提交方法
			
				**post**: 是method中的一个方法,这个方法能隐藏式的提交敏感数据,不会被user端显示在URL中
			
				**GET**:是method中另一个方法,这个方法不能隐藏式的提交数据,只适用于对数据不敏感的搜索引擎等地方使用.但是从使用频率来说,**get**用得很多
				
				这两个方法要根据具体情况去使用,没有说哪一个好
				
				我们先添加post方法进form表单标签
				
				```html
				<form method="post"></form>
				```
				
				**form标签标签还有一个属性action**:这个属性,是用来指明表单需要提交到的地址,我们引入*php*
				
				```
				<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>
				```
				
				到这里,其实会看到,跟之前一个人的项目好像相似度很高,没关系,来点不一样的,**<font color="red">`引入注册登录验证,才能提交数据`</font>**,这个功能算是一个小功能
				
				下面,我们在`index.html`里,添加一个模态
				
				```html
				 <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</button>
				
				<button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#signupModal">SIGNIN</button>
				
				<!-- 登录模态框 -->
				<div class="modal fade text-dark" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="loginModalLabel">登录</h5>
				                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				            </div>
				            <div class="modal-body text-dark">
				                <form>
				                    <div class="mb-3">
				                        <label for="login-username" class="col-form-label">用户名</label>
				                        <input type="text" class="form-control" id="login-username">
				                    </div>
				                    <div class="mb-3">
				                        <label for="login-password" class="col-form-label">密码</label>
				                        <input type="password" class="form-control" id="login-password" placeholder="请输入密码">
				                    </div>
				                </form>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
				                <button type="button" class="btn btn-primary" id="login-submit">登录</button>
				            </div>
				        </div>
				    </div>
				</div>
				
				<!-- 注册模态框 -->
				<div class="modal fade text-dark" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="signupModalLabel">注册</h5>
				                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				            </div>
				            <div class="modal-body text-dark">
				                <form>
				                    <div class="mb-3">
				                        <label for="signup-username" class="col-form-label">用户名</label>
				                        <input type="text" class="form-control" id="signup-username">
				                    </div>
				                    <div class="mb-3">
				                        <label for="signup-password" class="col-form-label">密码</label>
				                        <input type="password" class="form-control" id="signup-password" placeholder="请输入密码">
				                    </div>
				                </form>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
				                <button type="button" class="btn btn-primary" id="signup-submit">注册</button>
				            </div>
				        </div>
				    </div>
				</div>
				```
				
				然后我们去`mysql里`**创建新表<font color="red">(用来校验登录的权限)</font>**
				
				```sql
				CREATE TABLE authentication (
				    id INT AUTO_INCREMENT PRIMARY KEY,
				    name VARCHAR(500) NOT NULL,
				    psw VARCHAR(500) NOT NULL
				);
				```
				
				不能忘记了,给`index.html`添加form表单提交
				
				`我们在注册模态修改一下`
				
				```php+HTML
				<!-- 注册模态框 -->
				<div class="modal fade text-dark" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="signupModalLabel">注册</h5>
				                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				            </div>
				            <div class="modal-body text-dark">
				                <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' method="post">
				                    <div class="mb-3">
				                        <label for="signup-username" class="col-form-label">用户名</label>
				                        <input type="text" class="form-control" id="signup-username">
				                    </div>
				                    <div class="mb-3">
				                        <label for="signup-password" class="col-form-label">密码</label>
				                        <input type="password" class="form-control" id="signup-password" placeholder="请输入密码">
				                    </div>
				                </form>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
				                <button type="button" class="btn btn-primary" id="signup-submit">注册</button>
				            </div>
				        </div>
				    </div>
				</div>
				```
				
				然后添加注册的*php*
				
				```php
				<?php
				// 检查表单是否提交
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				    // 包含数据库连接文件
				    include 'D:\XAMPP\htdocs\chooseApp\config\db.php';
				
				    // 处理提交的数据
				    $name = $_POST['signup-username'];
				    $password = $_POST['signup-password'];
				
				    // 准备SQL语句
				    $sql = "INSERT INTO authentication (name, psw) VALUES ('$name', '$password')";
				
				    // 执行SQL语句
				    if (mysqli_query($conn, $sql)) {
				        echo "数据已成功写入数据库";
				    } else {
				        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				    }
				
				    // 关闭数据库连接
				    mysqli_close($conn);
				}
				?>
				```
				
				​	
				
				但是这样子,我们要来验证是否可以从模态里,提交数据到你的mysql,**很显然,不行的**,这里我用Ajax,这种方式,是目前主流的方式.
				
				**<font color="red">Ajax</font>**:*异步 JavaScript 和 XML (AJAX) 是 Web 应用程序开发技术的组合，可使 Web 应用程序对用户交互的响应速度更快。每当您的用户与 Web 应用程序进行交互时，例如当他们点击按钮或复选框时，浏览器都会与远程服务器交换数据。数据交换可能导致页面重新加载并中断用户体验。使用 AJAX，Web 应用程序可以在后台发送和接收数据，因此只有一小部分页面会根据需要刷新。*
				
				```javascript
				document.getElementById('signup-submit').addEventListener('click', function () {
				    var username = document.getElementById('signup-username').value;
				    var password = document.getElementById('signup-password').value;
				
				    // 创建XMLHttpRequest对象
				    var xhr = new XMLHttpRequest();
				
				    // 设置请求类型和URL
				    xhr.open('POST', 'index.php', true);
				
				    // 设置请求头
				    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				
				    // 处理响应
				    xhr.onload = function () {
				        if (xhr.status == 200) {
				            // 请求成功处理
				            console.log(xhr.responseText);
				        } else {
				            // 请求失败处理
				            console.error('请求失败：' + xhr.status);
				        }
				    };
				
				    // 发送请求
				    xhr.send('signup-username=' + username + '&signup-password=' + password);
				});
			
			结果就是,我们确实把数据提交到`mysql`里
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/16.png)
			
			**look,我们在注册模态里,确实写入了这行数据**
			
			**Q:**那么怎么鉴权登录呢
			
			A:**遍历比对啊,(其实生产环境下,是不允许的)**
			
			但是我们只是在课堂上的演示,我们可以模拟一下,具体的内容可以看我的博客上面,会有详细介绍如何避免在前端泄露数据
			
			这里我们对登录模态进行修改
			
			**这里新建一个`login.php`用于我们的登录验证,其实是为了避免代码太杂乱,方便我维护**
			
			```php+HTML
			// login.php
			<?php
			// 包含数据库连接文件
			include 'D:\XAMPP\htdocs\chooseApp\config\db.php';
			
			// 检查是否收到登录表单的 POST 请求
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login-username']) && isset($_POST['login-password'])) {
			    // 获取提交的用户名和密码
			    $username = $_POST['login-username'];
			    $password = $_POST['login-password'];
			
			    // 准备SQL语句
			    $sql = "SELECT * FROM authentication";
			    
			    // 执行SQL语句
			    $result = mysqli_query($conn, $sql);
			    
			    // 初始化数组来存储所有用户信息
			    $users = array();
			
			    // 检查是否找到匹配的用户
			    if (mysqli_num_rows($result) > 0) {
			        // 遍历查询结果，并将每一行的数据存储到数组中
			        while ($row = mysqli_fetch_assoc($result)) {
			            // 将每一行的数据存储为一个关联数组
			            $user = array(
			                'name' => $row['name'],
			                'psw' => $row['psw']
			            );
			            // 将用户数组添加到用户数组中
			            $users[] = $user;
			        }
			    } else {
			        // 如果查询结果为空，则输出错误信息或执行其他操作
			        echo "没有找到用户信息";
			    }
			
			    // 遍历数组，检查是否有匹配的用户名和密码
			    $validUser = false;
			    foreach ($users as $user) {
			        if ($user['name'] === $username && $user['psw'] === $password) {
			            $validUser = true;
			            break;
			        }
			    }
			
			    // 返回响应
			    if ($validUser) {
			        // 用户验证成功
			        echo "success";
			    } else {
			        // 用户验证失败
			        echo "failure";
			    }
			} else {
			    // 如果不是 POST 请求，则返回错误响应
			    echo "error";
			}
			
			// 关闭数据库连接
			mysqli_close($conn);
			?>
			```
			
			在`main.js`进行些修改,添加入我们login的Ajax请求
			
			```javascript
			document.getElementById('login-submit').addEventListener('click', function () {
			    var username = document.getElementById('login-username').value;
			    var password = document.getElementById('login-password').value;
			
			    // 创建XMLHttpRequest对象
			    var xhr = new XMLHttpRequest();
			
			    // 设置请求类型和URL
			    xhr.open('POST', 'login.php', true);
			
			    // 设置请求头
			    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			
			    // 处理响应
			    xhr.onload = function () {
			        if (xhr.status == 200) {
			            // 请求成功处理
			            var response = xhr.responseText;
			            if (response === "success") {
			                // 登录成功，允许其他操作
			                console.log('登录成功！');
			            } else {
			                // 登录失败，拒绝其他操作
			                console.log('用户名或密码不正确！');
			            }
			        } else {
			            // 请求失败处理
			            console.error('请求失败：' + xhr.status);
			        }
			    };
			
			    // 发送请求
			    xhr.send('login-username=' + username + '&login-password=' + password);
			});
			```
			
			我们来看看效果,我为了方便演示,我把模态开启不跳转和开启console.log展示
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/17.png)
			
			如上所示,**Success**
			
			然后我们来改进下,当我这边只有登录**Success**的时候,我们`首页的表单才能提交`哩
			
			```JavaScript
			document.getElementById('login-submit').addEventListener('click', function () {
			    var username = document.getElementById('login-username').value;
			    var password = document.getElementById('login-password').value;
			
			    // 创建XMLHttpRequest对象
			    var xhr = new XMLHttpRequest();
			
			    // 设置请求类型和URL
			    xhr.open('POST', 'login.php', true);
			
			    // 设置请求头
			    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			
			    // 处理响应
			    xhr.onload = function () {
			        if (xhr.status == 200) {
			            // 请求成功处理
			            var response = xhr.responseText;
			            if (response === "success") {
			                // 登录成功，允许提交最外层表单
			                document.getElementById('main-form-submit').removeAttribute('disabled');
			                console.log('登录成功！');
			            } else {
			                // 登录失败，禁止提交最外层表单
			                document.getElementById('main-form-submit').setAttribute('disabled', 'disabled');
			                console.log('用户名或密码不正确！');
			            }
			        } else {
			            // 请求失败处理
			            console.error('请求失败：' + xhr.status);
			        }
			    };
			
			    // 发送请求
			    xhr.send('login-username=' + username + '&login-password=' + password);
			});
			```
			
			```php
			<?php
			// 包含数据库连接文件
			include 'D:\XAMPP\htdocs\chooseApp\config\db.php';
			
			// 检查是否收到登录表单的 POST 请求
			if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login-username']) && isset($_POST['login-password'])) {
			    // 获取提交的用户名和密码
			    $username = $_POST['login-username'];
			    $password = $_POST['login-password'];
			
			    // 准备SQL语句
			    $sql = "SELECT * FROM authentication WHERE name='$username' AND psw='$password'";
			    
			    // 执行SQL语句
			    $result = mysqli_query($conn, $sql);
			    
			    // 检查是否找到匹配的用户
			    if (mysqli_num_rows($result) > 0) {
			        // 用户验证成功
			        // 执行表单处理代码
			        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['course']) && isset($_POST['body'])) {
			            // 获取提交的表单数据
			            $suject = $_POST['email'];
			            $email = $_POST['course'];
			            $suject_name = $_POST['suject_name'];
			            $content = $_POST['body'];
			
			            // 检查表单数据是否有效
			            if (!empty($suject) && !empty($email) && !empty($suject_name) && !empty($content)) {
			                // 添加到数据库
			                $sql = "INSERT INTO choosetitle (suject, email, suject_name, content) VALUES('$suject', '$email', '$suject_name', '$content')";
			
			                if (mysqli_query($conn, $sql)) {
			                    // 成功
			                    header('Location: choose.php');
			                } else {
			                    // 错误
			                    echo "出错：" . mysqli_error($conn);
			                }
			            } else {
			                // 表单数据不完整
			                echo "表单数据不完整";
			            }
			        } else {
			            // 不是有效的表单提交请求
			            echo "无效的表单提交请求";
			        }
			    } else {
			        // 用户验证失败
			        // 返回失败响应
			        echo "failure";
			    }
			} else {
			    // 如果不是 POST 请求，则返回错误响应
			    echo "error";
			}
			
			// 关闭数据库连接
			mysqli_close($conn);
			?>
			```
			
			这样,我们来试试看
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/18.png)
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/19.png)
			
			![](https://raw.githubusercontent.com/hingsli/1x-web-certificate-gkd/main/assets/php-practiceProjects-1/20.png)
			
			**如果需要自己将项目发布于公网或者搭建自己的GitHub镜像站,可以看下最新的一个教程,我更新在老师这个项目下.**



## 等我后面再想想还有什么要加入的,先暂时这样

未完待续




# 项目结尾 个人一些看法

> **仅限参考**:
>
> 在本次项目中,我想吐槽的是bootstrap这个框架的毛病
>
> 1. **不清晰具体的实现原理**:正常来说通过直接对CSS和JavaScript的操作,可以很快速的解决布局和事件操作,但是因为必须使用bootstrap框架,导致我在开发的时候必须查阅相关的文档,了解具体的实现原理,对框架进行一定量的魔改,才能满足自己的需要.
> 2. **很死板的设计**:引入这个框架一定程度上,受限于这个框架的设计美学,无法自己设计UI,看起来就不是现代的感觉.2024年了,前端的UI方向现在是超现实主义,这种过时的设计实在不应该再使用,严重脱离市场.
> 3. **开发速度被严重拖累**:在开发的过程中,我对bootstrap框架的好感度几乎是没有的状态,虽然通过查阅文档了解了实现原理.但是相比我直接使用三大件的速度来说,直接开写CSS和JavaScript会更快.

> 还有一个是PHP
>
> **2024年了**,不应该使用PHP了,PHP已死.有这个学习PHP时间,应该把精力放在*Vue*或*React*上,如果还没学会三大件,反而更应该花时间在三大件上,如果真要学过时的技术,*jQuery*反而是个不错的选择.

## 关于我

> 我是一个前端工程师,[我的Github](https://github.com/xieleihan)欢迎follow me.