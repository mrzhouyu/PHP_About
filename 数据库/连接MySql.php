<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 9:57
 */
//mysqli方法链接 py数据库  如果不加dbname那么只是链接上了数据mysql 没有链接到具体的数据库
$sql=new mysqli("localhost","root","915603","py");
//判断是否链接成功
if(!$sql){
    echo "链接数据库失败";
}else{
    echo "链接成功";
    //传入数据库操作脚本
    $sq="select right_01,diright,tu_cao from jiandan";
    $data=mysqli_query($sql,$sq);
    //判断数据获取是否成功
    if (!$data){
        echo "获取数据失败";
        echo $sql->error;
    }else{
        //判断是否大于1行 从0行开始
        if(mysqli_num_rows($data)>0)
            //循环输出所有行
            while ($row=mysqli_fetch_assoc($data)){
            echo $row['right_01'].'  '.$row['diright'].' '.$row['tu_cao'];
            }
            //记得关闭数据库
            $sql->close();
    }


}
?>