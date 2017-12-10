<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 14:55
 */
$sql=new mysqli("localhost","root","915603");
if(!$sql){
    die("链接数据库失败".mysqli_error());
}
mysqli_select_db($sql,'py');
$result=mysqli_query($sql,"select * from jiandan ORDER BY right_01");
if(mysqli_num_rows($result)>0)
    while($rows=mysqli_fetch_array($result)){
        echo "<b>名字：</b> ".$rows['name']." <b>赞同： </b>".$rows['right_01'].
            ' <b>反对：</b> '.$rows['diright'].' <b>吐槽: </b>'.$rows['tu_cao'].' <b>内容</b> '.$rows['contents']."<br><br>";
    }
mysqli_close();
?>
