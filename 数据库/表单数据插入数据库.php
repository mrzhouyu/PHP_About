<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 11:03
 */
//表单数据过滤规则
$rules=array(
    "firstname"=>array(
        "filter"=>FILTER_SANITIZE_STRING
    ),

    "lastname"=>array(
        "filter"=>FILTER_SANITIZE_STRING
    ),

    "age"=> [
        "filter"=>FILTER_VALIDATE_INT,
        "options"=> [
            "min_range"=>1,
            "max_range"=>120
        ]
    ]
);

//过滤
$result=filter_input_array(INPUT_POST,$rules);
//判断是否所有的数据输入都正确 是就存入数据库
if(!$result["firstname"]){
    echo "1输入的不是字符串或者长度过大,重新输入";
    exit;
}elseif (!$result["lastname"]){
    echo "2输入的不是字符串或者长度过大,重新输入";
    exit;
}elseif (!$result["age"]){
    echo "年龄输入形式出错";
    exit;
}else{
    //连接mysql
    $sql=new mysqli("localhost","root","915603");
    if(!$sql){
//        结束程序 输入错误
        die("无法链接mysql".' '.mysqli_error());
    }else{
//        echo $_POST[firstname].' '.$_POST['firstname'].' '.$_POST["firstname"].'<br>';
//        echo $_POST[lasttname].' '.$_POST['lastname'].' '.$_POST["lastname"].'<br>';
//        echo $_POST[age].' '.$_POST['age'].' '.$_POST["age"];
        //使用py数据库
        mysqli_select_db($sql,'py');
        $control="insert into phptable(FirstName,LastName,Age) VALUES
        ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
        mysqli_query($sql,$control);
        mysqli_close();
        echo "已经提交到数据库 感谢您的使用";

    }

}
?>