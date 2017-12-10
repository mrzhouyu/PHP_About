<html>
<body>
<?php
//odbc链接数据库
$conn=odbc_connect('test','','');
if (!$conn) {
    exit("Connection Failed: " . $conn);
    echo "链接失败";
}else{
    echo "链接成功";
    $sql="SELECT * FROM customers";
    $rs=odbc_exec($conn,$sql);}
if (!$rs)
{exit("Error in SQL");}
    echo "<table><tr>";
    echo "<th>name</th>";
    echo "<th>good</th>";
    echo "<th>habbit</th></tr>";
    while (odbc_fetch_row($rs))
{
    $name=odbc_result($rs,"名字");
    $good=odbc_result($rs,"特长");
    $habbit=odbc_result($rs,"爱好");
    echo "<tr><td>$name</td>";
    echo "<tr>$good</tr>";
    echo "<td>$habbit</td></tr>";
}
odbc_close($conn);
echo "</table>";
?>
</body>
</html>