<HTML>
<title>这是php的一个网页</title>
<head>nothing</head>
<link rel="stylesheet" href="PHP对象.css" type="text/css">
<body>
<div>
    <h1>我是H1</h1>
    <br>
    <h2>我是H2</h2>
    <br>
    <h3>我是H3</h3>
    <br>
</div>
</body>
</HTML>



<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/12
 * Time: 20:47
 */
class Firstclass{
var $name;
var $age=23;
function Firstfun($data1,$data2){
    echo "<h2>我是$data1</h2>","<div><p aria-sort='ascending'>这是$data2</p></div>";
    print $this->name.PHP_EOL;
}
}
//实例化类名 跟python一样 ->为调用方法
$A=new Firstclass();
$A->name='ZHOUYU';
echo $A->name,"</br>";
echo $A->age;
$A->age=15;
echo $A->age;
$A->Firstfun('shuju1','shuju2');
?>