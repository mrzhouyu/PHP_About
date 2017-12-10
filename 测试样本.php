<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="提交">
</form>
<?php
$x=$_POST['name'];
$y=$_POST['age'];
$z=$_REQUEST['name'];
$w=$_REQUEST['age'];
echo $x,$y;
echo $z,$w;
?>