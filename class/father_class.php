<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 16:56
 */

class father_class
{
    //私有变量
    private $inner_age,$inner_name,$inner_sex;
    //构造函数

    /**
     * father_class constructor.
     * @param int $age
     * @param string $name
     * @param string $sex
     */
    public function __construct($age,$name,$sex)
    {
        $this->inner_age=$age;
        $this->inner_name=$name;
        $this->inner_sex=$sex;
    }

    public function return_age(){
        return $this->inner_age;
    }
    public function return_name(){
        return $this->inner_name;
    }
    public function return_sex(){
        return $this->inner_sex;
    }
    //定义私有变量
    private static $people_number=0;
    //定义私有常量
    const MAX_people_number=100;

}