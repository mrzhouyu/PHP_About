<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 15:37
 */
//date(format,timestamp) format必需。规定时间戳的格式。  timestamp可选。规定时间戳。默认是当前时间和日期。
echo "今天是".date("Y/m/d").'<br>';
echo "今天是".date("Y.m.d").'<br>';
echo "今天是".date("Y-m-d").'<br>';
echo "今天是".date("1").'<br>';
?>
<!--    PHP 提示 - 自动版权年份-->
© 2010-<?php echo date("Y").'<br>';?>
<!--获得简单的时间-->
<?php
echo "现在时间是 " . date("h:i:s.a").'<br>';
?>
<!--获得时区的时间亚洲上海-->
<?php
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("h:i:s.a").'<br>';
?>

<!--通过 PHP mktime() 创建日期 自定义日期-->
<?php
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
?>

<!--通过 PHP strtotime() 用字符串来创建日期-->
<?php
$d=strtotime("10:38pm April 15 2015");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d).'<br>';
?>

<!--可以任意创建时间 定位时期 关键字如下等等-->
<?php

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
