<?php
///**
// * Created by PhpStorm.
// * User: Yu
// * Date: 2017/10/13
// * Time: 21:12
// */
////验证表单传来的数据
////先判断是否有输入
//if(filter_has_var(INPUT_POST,'email')&&filter_has_var(INPUT_POST,'url'))
//{
//    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//    if($email === false) {
//        echo '请输入正确的邮箱';
//        echo $_POST['email'];
//        //如果邮箱错误 后面的脚本不执行
//        exit;
//
//    }
//    $email = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
//    if($email === false) {
//        echo '请输入正确的URL';
//        echo $_POST['url'];
//        exit;
//    }
//}
//?>


<!--自定义一个过滤规则-->

<?php
//=>相当于python里的： 键值对
$rules=array(
    "name"=>array(
        'filter'=>FILTER_SANITIZE_STRING
    ),
    "number"=>array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>120

        )
    ),
    "email"=>array(
        "filter"=>FILTER_VALIDATE_EMAIL
    ),
    "url"=>array(
        "filter"=>FILTER_VALIDATE_URL
    )

);
//安装自定义的规则过滤输入 不符合直接剔除
$RESULT=filter_input_array(INPUT_POST,$rules);
//下面用来判断剩下来什么
if(!$RESULT["number"]){
    echo "数字规则出错";
}elseif (!$RESULT["email"]){
    echo "email规则出错";
}elseif ($RESULT["name"]){
    echo "名字规则出错";
}elseif ($RESULT["url"]){
    echo "url规则出错";
}
?>