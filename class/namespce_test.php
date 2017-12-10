<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 16:05
 */
require_once ("class1/Nespace.php");
require_once ("class2/Nespace.php");
require_once "Constrauct_methon.php";

$S1=new \spce_01\Nespace();
$S2=new \spce_02\Nespace();

$S1->test();
$S2->test();
//实例化该类
$s3=new Constrauct_methon("zhouyu",23);
//调用方法
echo $s3->get_age();
echo $s3->get_name();
//调用静态方法
Constrauct_methon::Say_hello();

?>



