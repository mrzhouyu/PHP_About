<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/14
 * Time: 15:16
 */$con =new mysqli("localhost","root","915603");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con, 'py');

$result = mysqli_query($con,"SELECT * FROM jiandan
WHERE name='世界的第八天'");

while($row = mysqli_fetch_array($result))
{
    echo $row['name'] . " " . $row['contents'];
    echo "<br>";
}