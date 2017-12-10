
<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/12
 * Time: 21:32
 */
//下面是一个三目运算
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) :'';
//脚本部分
if ($q){
    if ($q=='google'){
        echo "这是：<br><a href=\"http://www.google.cn\">http://www.google.cn</a>";
    }else if ($q=='baidu'){
        echo "这是：<br><a href=\"http://www.baidu.com\">http://www.google.cn</a>";
    }else if ($q=='taobao'){
        echo "这是：<br><a href=\"http://www.taobao.com\">http://www.google.cn</a>";
    }
    }else {
?>
<form action="" method="get">
    <select name="q">
<!--  第一个value为""-->
        <option value="">做出你的选择</option>
        <option value="google">google</option>
        <option value="baidu">baidu</option>
        <option value="taobao">taobao</option>
    </select>
    <br>
    <input type="submit" value="提交">

</form>
    <?php
}
?>
