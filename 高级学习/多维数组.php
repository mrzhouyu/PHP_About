<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 15:18
 */
$name=array(
    array('zhouyu',11,22),
    array('yajing',33,44)
);
for($i=0;$i<2;$i++){
    echo '第'.$i.'个同学'.$name[$i][0].' '.$name[$i][1].' '.$name[$i][2];
}