<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>

<form action="" method="post">
    名字: <input type="text" name="name">
    年龄: <input type="text" name="age">
    <input type="submit" value="提交">
</form>

</body>
</html>


<!--下面是PHP脚本调用html的表单值并且输出-->
名字是 <?php echo $_POST['name']; ?><br>
年龄 是<?php echo $_POST['age']; ?><br>
<?php
echo htmlspecialchars($_SERVER['PHP_SELF']);

?>