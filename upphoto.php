<?php
require "public_module.php";

// ==== 上传图片 ====

$pho  = $_FILES["photo"]["name"];

if (strlen($pho) < 1) {
    echo "<script>alert('图片不能为空');history.go(-1);</script>";
    exit();
}

if (!empty($_FILES["photo"]["name"])) { // 提取文件域内容名称，并判断

	unlink("qr.png"); // 删除已存在的文件（删除失败不影响）

    $result = move_uploaded_file($_FILES["photo"]["tmp_name"], "qr.png"); // 移动图片到目标文件夹

    echo "上传成功";

} else {
	echo "上传失败";
}
