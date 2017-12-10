<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 17:27
 */
//设置cookie 必须在<html>标签之前 一小时后失效
setcookie('myname','zhouyu',time()+3600);
?>
<html>
<body>
<?php
//取回cookies并且显示在页面
echo $_COOKIE['myname'].'<br>';
print_r($_COOKIE);
echo '<br>'
?>
<!--删除cookies使得cookies的时间点变为过去即可-->
<?php
setcookie('myname','zhouyu',time()-3600)
?>

</body>
</html>
