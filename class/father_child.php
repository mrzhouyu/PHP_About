<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 17:16
 */
require_once "child_class.php";
//通过调用子类 可以直接访问父类的方法
$A=new child_class(22,'zhouyu');
echo $A->return_age().'  '.$A->return_sex().'  '.$A->return_name();
?>