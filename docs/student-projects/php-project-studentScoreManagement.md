# 学生成绩管理
> 作者:段瑞青

项目说明：该系统是对学生基本信息（身份证号、学号、姓名）和成绩（web成绩、java成绩、python成绩）进行管理，具体操作是：添加学生信息和各科成绩、删除学生全部成绩、修改学生成绩。

## 目录

1. 建立数据库

	1.1 创建数据库

	1.2 创建transcript表并插入数据


2. 数据库连接

	
	2.1 创建连接

	2.2 检测连接
  
3. 创建index首页

	3.1 index首页构建

	3.2 引入数据库连接文件

	3.3 查询数据并执行

4. 添加学生成绩信息

	4.1 add添加页面构建
	
	4.2 引入数据库连接文件并获取数据执行

5. 删除学生成绩信息

	5.1 delete添加页面构建
	
	5.2 引入数据库连接文件并获取数据执行

6. 修改学生成绩信息

	6.1 modify添加页面构建
	
	6.2 引入数据库连接文件并获取数据执行
   





## 建立数据库

### 1.1 创建数据库，使用数据库：

创建一个名为"drq"的数据库并使用。

```mysql
CREATE DATABASE drq;
USE drq;
```

### 1.2 创建transcript表并插入数据：

```mysql
CREATE TABLE transcript (
ID number VARCHAR(50) NOT NUL,
Student ID VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
web int(30) NOT NULL,
java int(30) NOT NULL,
python int(30) NOT NULL,
);
```

 ID number:学生的身份证号；

 Student ID:学生的学号；

 name:学生的姓名；

 web:学生的web学科成绩；

 java：学生的java学科成绩

 python：学生的python学科成绩
## 数据库连接

### 2.1 创建连接：

在VScode中建立一个名为"fon"的文件夹，用来与数据库进行连接。

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drq";

// 创建连接(连接数据库)
$conn = new mysqli($servername, $username, $password, $dbname);
```

### 2.2 检测连接：

连接数据库后进行检测是否连接成功。

```php
//检测连接
if ($conn->connect_error) {
	die("连接失败: " . $conn->connect_error);
}
//var_dump($conn);
?>
```

通过var_dump($conn)可判断数据库连接是否成功，查看http://localhost/drq/fon/connect.php。

## 创建index首页

### 3.1 index首页构建：

建立一个名为"index.php"的php文件，页面可显示学生的相关信息和各科成绩，通过http://localhost:3000/index.php可进行查看。

```html
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>学生成绩</title>
</head>
<style>
	button a {
    	text-decoration: none;
    	color: orangered;
	}

	nav .nav-right a {
    	text-decoration: none;
    	color: orangered;
	}

	.nav {
    	width: 100%;
    	height: 30px;
    	line-height: 30px;
    	background-color: pink;
	}

	.nav .nav-left {
    	float: left;
    	margin-left: 20px;
	}

	.nav .nav-right {
    	float: right;
	}

	table tr {
   		width: 100%;
    	height: 40px;
    	margin: auto;
	}

	table td {
    	padding: 50px;
    	border-bottom: 1px solid #ccc;
	}

	p {
    	width: 200px;
    	height: 30px;
    	line-height: 30px;
    	border: 1px solid #ccc;
    	background-color: greenyellow;
	}
</style>

<body>
	<nav class="nav">
    	<div class="nav-left">学生成绩管理</div>
    	<div class="nav-right">
        	<button><a href="http://localhost/drq/delete.php">删除</a></button>
        	<button><a href="http://localhost/drq/add.php">添加</a></button>
    	</div>
	</nav>
	<main>
    	<table>
       	 <p>显示全部信息</p>
        	<tr>
            	<td>身份证号</td>
            	<td>学号</td>
            	<td>姓名</td>
            	<td>java成绩</td>
           	 	<td>web成绩</td>
            	<td>python成绩</td>
            	<td>操作</td>
        	</tr>

		</table>
	</main>
</body>

</html>
```

### 3.2 引入数据库连接文件

在index.php头部引入数据库

```php
<?php
include_once "./fon/connect.php";
?>
```

### 3.3 查询数据并执行：

在index.php里的表格标签中插入以下代码，查询数据库的数据，并将数据显示在表格下。

```php
<?php
    //查询数据
    $sql = "select * from transcript";
    //执行查询
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $row['ID number'] ?></td>
        <td><?php echo $row['Student ID'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['web'] ?></td>
        <td><?php echo $row['java'] ?></td>
        <td><?php echo $row['python'] ?></td>
        <td>
        	<a href="http://localhost/drq/modify.php?Student_ID=<?php echo $row['Student ID'] ?>">修改</a>
        </td>
     </tr>
   </form>

<?php
	}
?>
```

## 添加学生成绩信息

### 4.1 add添加页面构建

建立一个名为"add.php"的php文件，并将index.php里按钮的a标签的路径补充完整：http://localhost/drq/add.php

```html
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>添加数据</title>
</head>

<body>
	<form method="post" action="./receive/r_add.php">
    	<label for="inputField">输入添加学生成绩:</label><br />
    	<input type="text" name="ID_number" placeholder="身份证号"><br>
    	<input type="text" name="Student_ID" placeholder="学号"><br>
    	<input type="text" name="name" placeholder="姓名"><br>
    	<input type="text" name="web" placeholder="web成绩"><br>
    	<input type="text" name="java" placeholder="java成绩"><br>
   	 	<input type="text" name="python" placeholder="python成绩"><br>
   		<input type="submit" value="提交">
	</form>
</body>

</html>
```

### 4.2 引入数据库连接文件并获取数据执行

建立一个名为"receive"的文件夹，并创建一个名为"r_add.php"的文件,通过POST获取输入框的数据并执行sql添加语句。

```php
 <?php
//引入数据库连接文件
 include_once "./fon/connect.php";

//获取输入框的值
$ID_number = $_POST['ID_number'];
$Student_ID = $_POST['Student_ID'];
$name = $_POST['name'];
$web = $_POST['web'];
$java = $_POST['java'];
$python = $_POST['python'];

// echo $ID_number;
// echo $Student_ID;
// echo $name;
// echo $web;
// echo $java;
// echo $python;

$sql = "INSERT INTO `transcript` VALUES ('$ID_number','$Student_ID','$name','$web','$java','$python')";
if ($conn->query($sql) === TRUE) {
    echo '添加成功';
} else {
    echo '添加失败: ' . $conn->error;
}
?>
```

> echo $ID_number; echo $Student_ID; echo $name; echo $web; echo $java; echo $python; 可查询输入框的值是否获取到。

## 删除学生成绩信息

### 5.1 delete删除页面构建

建立一个名为"delete.php"的php文件

```html
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>删除数据</title>
</head>

<body>
	<form method="post" action="./receive/r_delete.php">
    	<label for="inputField">输入删除学生成绩的学号:</label>
    	<input type="text" id="inputField" name="Student_ID">
    	<input type="submit" value="提交">
	</form>
</body>
</html>
```

### 5.2 引入数据库连接文件并获取数据执行

在"receive"的文件夹下创建一个名为"r_delete.php"的文件，通过POST获取输入框的数据并执行sql删除语句。

```php
<?php
//引入数据库连接文件
include_once "./fon/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// 获取输入框的值
	$Student_ID = $_POST['Student_ID'];
	echo "你输入的值是: " . htmlspecialchars($Student_ID);
}
// echo $Student_ID;
//删除数据的SQL语言
$sql = "DELETE FROM `transcript` WHERE `transcript`.`Student ID` = $Student_ID";

//执行
if ($conn->query($sql) === TRUE) {
 	echo '删除成功';
} else {
  	echo '删除失败:' . $conn->error;
}
?>
```

## 修改学生成绩信息

### 6.1 modify修改页面构建

建立一个名为"modify.php"的php文件，通过Get获取不同学号的学生的不同数据。

```php+HTML
<?php
// 创建连接
include_once "./fon/connect.php";

// 查询SQL
$sql = "SELECT * FROM `transcript` WHERE `Student ID` = ?";

//准备和绑定
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $Student_ID);

//设置参数并执行
$Student_ID = $_GET['Student_ID'];
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>添加数据</title>
</head>

<body>
	<form method="post" action="./receive/r_modify.php">
    	<label for="inputField">修改学生的成绩:</label><br />
    	<input type="text" name="ID_number" value="<?php echo $row['ID number'] ?>" placeholder="身份证号"><br>
    	<input type="text" name="Student_ID" value="<?php echo $row['Student ID'] ?>" placeholder="学号"><br>
    	<input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="姓名"><br>
    	<input type="text" name="web" value="<?php echo $row['web'] ?>" placeholder="web成绩"><br>
    	<input type="text" name="java" value="<?php echo $row['java'] ?>" placeholder="java成绩"><br>
    	<input type="text" name="python" value="<?php echo $row['python'] ?>" placeholder="python成绩"><br>
    	<input type="submit" value="提交">
	</form>
</body>
<?php
        }
    }
?>
</html>
```

### 6.2 引入数据库连接文件并获取数据执行

在"receive"的文件夹下创建一个名为"r_modify.php"的文件，通过POST获取修改后的输入框的数据执行sql修改语句。

```php
// 创建连接
include_once "./fon/connect.php";
//获取输入框的值
$ID_number = $_POST['ID_number'];
$Student_ID = $_POST['Student_ID'];
$name = $_POST['name'];
$web = $_POST['web'];
$java = $_POST['java'];
$python = $_POST['python'];

// 更新语句
$sql = "UPDATE  transcript SET `ID number` = '$ID_number', `Student ID`= '$Student_ID', `name` = '$name', `web` = '$web', `java` = '$java', `python` = '$python'WHERE `Student ID` = '$Student_ID'";
if ($conn->query($sql) === TRUE) {
	echo '添加成功';
} else {
	echo '添加失败: ' . $conn->error;
}

?>
```