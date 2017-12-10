<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    <style>
        /*下面的html字段里输出错误的span标签类class=“error” 所以这里使用script定义风格*/
        .error {color: #FF0000; size: 5px;}
    </style>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 8:57
 */
//这段PHP脚本是为了验证下面要输入的表单
$name=$email=$web=$comment=$sex="";
$nameerr=$emailerr=$weberr=$commenterr=$sexerr="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['name'])){
        //判断用户输入是否为空
        $nameerr="喂！你还没填写名字呢!";
    }else{
        //使用剔除函数
        $name=test($_POST['name']);
        //判断格式是否正确
        if(!preg_match('/^[a-zA-Z ]*$/',$name)){
            $nameerr="名字格式不对,只允许字母和空格";
        }
    }
    if(empty($_POST['E-mail'])){
        //判断用户输入是否为空
        $emailerr="别偷懒，你还没写邮箱呢！";
    }
    else{
        //使用剔除函数
        $email=test($_POST['E-mail']);
        //判断格式是否正确
        if(!preg_match('/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/',$email)){
            $emailerr="邮箱格式错误";
        }
    }
    if(empty($_POST['website'])){
        //判断用户输入是否为空
        $weberr="没写网址哦！";

    }else{
        //使用剔除函数
        $web=test($_POST['website']);
        //判断格式是否正确

    }
    if(empty($_POST['gender'])){
        //判断用户输入是否为空
        $sexerr="没选性别";
    }else{
        //使用剔除函数
        $sex=test($_POST['gender']);
    }
    if(empty($_POST['comment'])){
        //判断用户输入是否为空
        $commenterr="备注没写是不是傻";
    }else{
        //使用剔除函数
        $comment=test($_POST['comment']);
    }
}
//该函数为了剔除不必要的用户输入信息和保护信息的安全
function test($data){
    //去除空格 制表符 换行符等等
    $data=trim($data);
    //去除\（反斜杠）
    $data=stripslashes($data);
    //函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt; 。这样可防止攻击者通过在表单中注入
    // HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用
    $data=htmlspecialchars($data);
    return $data;
}

?>
<h1>表单验证实例</h1>
<p><span class="error">* </span><span>代表必填字段</span></p>
<!--这里的action里的php脚本表示把表单的数据发送到页面本身 而不是从新打开一张网页 或者action=""-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >
    名字：  <input type="text" name="name">
<!--    紧随输入框框之后 提示* 或者提示错误就是$nameerr在php脚本里的赋值 是空或者其他 下面以此类推-->
    <span class="error">* <?php echo $nameerr ?></span>
    <br><br>
    E-mail:<input type="text" name="E-mail">
    <span class="error">* <?php echo $emailerr;?></span>
    <br><br>
    网址：  <input type="text" name="website">
    <span class="error"><?php echo $weberr; ?></span>
    <br><br>
    备注：  <textarea name="comment" rows="5" cols="50"><?php echo $commenterr; ?></textarea>

    <br><br>
    性别：<input type="radio" name="gender" value="wommen">女
    <input type="radio" name="gender" value="man">男
    <span class="error">  <?php echo $sexerr; ?></span><br><br>
<!--    提交表单-->
    <input type="submit" name="submit" value="提交表单">
</form>
<?php
echo "<h2>您输入的内容是:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $web;
echo "<br>";
echo $comment;
echo "<br>";
echo $sex;
?>

</body>
</html>


