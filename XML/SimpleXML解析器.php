<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 10:55
 */
//加载文件
$xml=simplexml_load_file("test.xml");
//$xml->getName()这里是获得第一个标签名字 为了方便 所以打印在窗口
echo $xml->getName()."<br>";
//遍历所有的子节点打印标签名和标签内的内容
foreach ($xml->children() as $child){
    echo $child->getName().' ：'.$child.'<br>';
}
