<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 10:07
 */
//初始化创造一个xml解析器
$xml_parser=xml_parser_create();
//创造遇到某个标签开始的时候需要调用的函数
function start($xml_parse,$element_name,$element_attrs){
    switch ($element_name){
        case "NOTE":
            echo "-- Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";

    }
}
//创造遇到某个标签名结束时候需要调用的函数    换行
function stop($xml_parser,$element_name){
    echo "<br />";
}
//在查找字符数据时使用的函数
function char($xml_parser,$data){
    echo $data;
}
//指定元素标签的处理时候调用stop 和 start函数
xml_set_element_handler($xml_parser,"start","stop");
//指定数据的处理时候调用char函数
xml_set_character_data_handler($xml_parser,"char");
$fp=fopen("test.xml","r");
//调用xml_parser解析xml文件  注意;$xml_parser是我自己定义的变量不能混淆
//同时还添加了错误处理机制
while ($data=fread($fp,4096))
{
    xml_parse($xml_parser,$data,feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($xml_parser)),
        xml_get_current_line_number($xml_parser)));
}
//释放内存 一定要有
xml_parser_free($xml_parser);
?>