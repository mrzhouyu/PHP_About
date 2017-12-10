<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 16:19
 */

class Constrauct_methon
{
    private $_age,$_name;
    //跟python 的__init__类似

    /**
     * Constrauct_methon constructor.
     * @param string $name 名字
     * @param int $age 年龄
     */
    public function __construct($name,$age)
    {
        $this->_name=$name;
        $this->_age=$age;
        echo '<br>'.'调用了Constrauct_methon这个类';
    }

    public function get_name(){
        return $this->_name;
    }

    public function get_age(){
        return $this->_age;
    }
    //静态方法
    public static function Say_hello(){
        echo "say hello!";
    }
    //静态变量 类内部使用
    private static $x=10;
    //静态常量 不要加$ 可以外部调用
    const y=10;
}