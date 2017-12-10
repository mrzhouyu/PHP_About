<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 10:29
 */
//链接MySQL 不链接具体的数据库
$sql=new mysqli("localhost","root","915603");
if(!$sql){
    die("无法链接mysql".' '.mysqli_error());
}else{
    //链接到py数据库
    mysqli_select_db($sql,'py');
    $create_databases="create table phptable(
    FirstName varchar(15),
    LastName varchar(15),
    Age int
    )";
    mysqli_query($sql,$create_databases);
    $sql->close();
}