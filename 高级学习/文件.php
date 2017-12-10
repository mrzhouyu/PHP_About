<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--第一种打开方式-->
<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 16:15
 */
//返回文本长度 给length readfile执行过程已经输出了文本内容 不用echo在输出
echo '这是用readfile函数的'.'<br>';
$length=readfile("F:\php\learn\高级学习\我是测试文件.txt");
echo '<br>'.$length.'<br><br>';
?>


<!--第二种打开方式-->
<?php
//打开文件 以r 读的方式打开 如果无法打开 那么输出 ‘无法打开’
echo '这是用fopen函数的'.'<br>';
$myfile=fopen('F:\php\learn\高级学习\我是测试文件.txt','r') or die('无法打开');
//输出读取的文件 规定读取的最大尺寸
echo fread($myfile,filesize('F:\php\learn\高级学习\我是测试文件.txt')).'<br>';
//关闭文件
fclose($myfile)
?>

<?php
echo '这是用fgets函数单行读取的'.'<br>';
$myfile = fopen("F:\php\learn\高级学习\我是测试文件.txt", "r") or die("Unable to open file!");
//第一行读完指针直接指向第二行
echo fgets($myfile).'<br>';
//这是第二行
echo fgets($myfile).'<br>';
//这是第三行
echo fgets($myfile).'<br>';
fclose($myfile);
?>
<!--feof() 函数检查是否已到达 "end-of-file" (EOF) feof() 对于遍历未知长度的数据很有用-->
<?php
echo '这是用fgets函数读取的'.'<br>';
$myfile=fopen('F:\php\learn\高级学习\我是测试文件.txt','r') or die('无法打开');
//如果没有达到文件最后就一直执行
while(!feof($myfile)){
    echo fgets($myfile).'<br>';
}
?>

<!--PHP 读取单字符 - fgetc()-->
<?php
echo '这是用fgetc函数读取的'.'<br>';
$myfile = fopen("F:\php\learn\高级学习\我是测试文件.txt", "r") or die("Unable to open file!");
// 输出单字符直到 end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
?>
</body>
</html>