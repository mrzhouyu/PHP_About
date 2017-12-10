<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 16:53
 */
//用w写方式 下次如果再往该 文件写入的话 会覆盖一开始写入的文件 a 方式可以接着上次的结尾继续写入
$myfile = fopen("写入文件的.txt", "w") or die("Unable to open file!");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);
?>