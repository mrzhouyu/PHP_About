<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 16:02
 */
header("Content-Type:text/html;charset=utf8");
$rules=array(
    "firstname"=>array(
        "filter"=>'FILTER_SANITIZE_STRING'
    ),

    "lastname"=>array(
        "filter"=>'FILTER_SANITIZE_STRING'
    ),

    "wo"=>array(
        "学生"=>"龙岩学院",
        "宿舍"=>array(
            "三组"=>414
        )
    )
);
//编码
echo json_encode($rules);
?>

<?php
//解码
//json_string: 待解码的 JSON 字符串，必须是 UTF-8 编码数据
//assoc: 当该参数为 TRUE 时，将返回数组，FALSE 时返回对象。
//depth: 整数类型的参数，它指定递归深度
//options: 二进制掩码，目前只支持 JSON_BIGINT_AS_STRING
$json='{"a":1,"b":2,"c":3,"d":4,"e":5}';
//返回对象
var_dump(json_decode($json));
//返回数组
var_dump(json_decode($json, true));
?>