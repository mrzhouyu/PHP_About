<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 15:38
 */
//引入另一个php脚本 include类似
require_once ("面向对象.php");
//创建一个类的实例
 $H=new Hello();
 //调用类的函数
 $H->hello_world();


 $m=new People();
 $m->other_people();
 ?>