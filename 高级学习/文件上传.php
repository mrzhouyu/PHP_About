<?php
/**
 * Created by PhpStorm.
 * User: Yu
 * Date: 2017/10/13
 * Time: 16:57
 */
//如果出错 输出错误
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/pjpeg"))
    && ($_FILES["file"]["size"] < 20000)) {
    if ($_FILES['file']['error'] > 0) {
        echo '上传出错：' . $_FILES['file']['error'] . '<br>';
    }
    else {
        echo '文件上传的文件名' . $_FILES['file']['name'] . '<br>';
        echo '文件的类型' . $_FILES['file']['type'] . '<br>';
        echo '文件的尺寸' . ($_FILES['file']['size'] / 1024) . '<br>';
        //这里是存储文件 的如果已经存在 该文件则输出
        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {   //不存在则重新创建并且保存
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "F:\\php\\learn\\高级学习\\" . $_FILES["file"]["name"]);
            echo "Stored in: " . "F:\\php\\learn\\高级学习\\" . $_FILES["file"]["name"];
        }

    }
}
else{
    echo '文件类型出错';
}