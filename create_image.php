<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/15
 * Time: 17:35
 */
//创建一画布
$img=imagecreate(400,400);
//画布背景颜色
imagecolorallocate($img,150,255,255);

//画圆 定义圆的颜色
imageellipse($img,200,200,100,100,imagecolorallocate($img,255,0,0));
//打水印
imagestring($img,5,10,50,"ZY",imagecolorallocate($img,200,100,100));
//定义输出格式为 image/png格式
header('Content-type: image/png',"");
//定义图片类型 为png 还有jpeg等等
imagepng($img);
?>