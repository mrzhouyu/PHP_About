<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 18:40
 */
//启动会话  必须位于<html>标签之前
session_start();
$_SESSION['view']='zhouyu';
?>
<html>
<body>
<?php
echo '会话是：'.$_SESSION['view'].'<br>';
?>


<!--判断是否有$_SESSION['other'] 如果没有就创建并且赋值 一直做加法运算-->
<?php
if(isset($_SESSION['other'])){
    $_SESSION['other']=$_SESSION['other']+1;
}else{
    $_SESSION['other']=1;
}
echo '新的cookies是:'.$_SESSION['other'].'<br>';
?>

<!--销毁session['other']两种方法-->
<?php
//unset() 函数用于释放指定的 session 变量：
unset($_SESSION['view']);
?>

<?php
// session_destroy() 函数彻底终结 session：
    session_destroy();
    //session_destroy() 将重置 session，您将失去所有已存储的 session 数据
?>

</body>
</html>
