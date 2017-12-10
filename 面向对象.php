<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 15:37
 */
//这里的public表示可以被其他的程序调用
class Hello{
    public function hello_world(){
        echo "我是被调用的类里的公有函数".'<br>';
    }
}
?>
<?php
class People{
    private function what_people(){
        echo "我是私有函数，只能在类内使用，不被外部调用";
    }
    public function other_people(){
        echo "我是公有函数，可以被类的外部调用".'<br>';
    }
}

//实例化
$n=new People();
$n->other_people();
?>