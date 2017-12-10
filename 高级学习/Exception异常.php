<?php
//创建可抛出一个异常的函数
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//在 "try" 代码块中触发异常
try
{
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}

//捕获异常
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>
<!---->
<!--创建 checkNum() 函数。它检测数字是否大于 1。如果是，则抛出一个异常。-->
<!--在 "try" 代码块中调用 checkNum() 函数。-->
<!--checkNum() 函数中的异常被抛出-->
<!--"catch" 代码块接收到该异常，收到了throw new Exception 抛出的异常  原始异常不显示 并创建一个包含异常信息的对象 ($e)。-->
<!--通过从这个 exception 对象调用 $e->getMessage()，输出来自该异常的错误消息-->



<!--还可以自定义一个customException(必须是这个类名)的类 继承php自己的Exception类-->
<?php
//class customException extends Exception
//{
//    public function errorMessage()
//    {
//        //error message
//        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
//            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
//        return $errorMsg;
//    }
//}
//
//$email = "someone@example...com";
//
//try
//{
//    //check if
//    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
//    {
//        //throw exception if email is not valid
//        throw new customException($email);
//    }
//}
//
//catch (customException $e)
//{
//    //display custom message
//    echo $e->errorMessage();
//}
//?>


<!--异常还有其他内容 如：多个异常  重新抛出异常  设置顶层异常处理器 （Top Level Exception Handler）等等-->
