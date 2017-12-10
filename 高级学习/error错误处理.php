<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 20:04
 */
//常见的错误处理函数die(“*****”)输出错误并且终止脚本执行
//定义一个错误处理函数error_function(error_level,error_message,
//error_file,error_line,error_context) 该函数最大有五个参数
//函数名称必须是cutomError 继承
function customError($errorno,$errstr,$myfile,$a_line,$mycontext){
    echo "<b>错误等级：</b> [$errorno] <b>错误消息：</b> $errstr <b>错误文件名：</b>$myfile <b>错误行号：</b>$a_line";

}
//设置当前所有错误都是用该处理函数处理 php自带的显示错误形式继承customeError函数
set_error_handler("customError");
//下面是错误的语句 用来测试 自定义的错误处理啊还能输
echo ($test);
?>
<!--在脚本中用户输入数据的位置，当用户的输入无效时触发错误的很有用的。在 PHP 中，这个任务由 trigger_error() 完成。  -->
<!--因为在同一个脚本里上面已经handler过自己建立的错误函数 所以 trigger_error()函数继承了自己创建的函数-->
<?php
$test=2;
if ($test>1)
{
    trigger_error("Value must be 1 or below");
}
?>
<!--下面是各个脚本的错误等级代表的错误信息-->
<!--2	E_WARNING	非致命的 run-time 错误。不暂停脚本执行。-->
<!--8	E_NOTICE  Run-time 通知。脚本发现可能有错误发生，但也可能在脚本正常运行时发生。-->
<!--256	E_USER_ERROR	致命的用户生成的错误。这类似于程序员使用 PHP 函数 trigger_error() 设置的 E_ERROR。-->
<!--512	E_USER_WARNING	非致命的用户生成的警告。这类似于程序员使用 PHP 函数 trigger_error() 设置的 E_WARNING。-->
<!--1024	E_USER_NOTICE	用户生成的通知。这类似于程序员使用 PHP 函数 trigger_error() 设置的 E_NOTICE。-->
<!--4096	E_RECOVERABLE_ERROR	可捕获的致命错误。类似 E_ERROR，但可被用户定义的处理程序捕获。(参见 set_error_handler())-->
<!--8191	E_ALL-->
<!--所有错误和警告，除级别 E_STRICT 以外。-->
<!--（在 PHP 6.0，E_STRICT 是 E_ALL 的一部分）-->
