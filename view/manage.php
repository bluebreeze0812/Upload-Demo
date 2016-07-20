<!DOCTYPE html>
<html>
<head>
<meta http-equiv="charset" content="utf-8">
<title>Manage</title>
</head>
<body>
<?php

require_once '/program/ZendStudio/project/upload-demo/model/upload-img-service.class.php';

$uis = new UploadImgService();

$arr = $uis->showData();
for ($i = 0; $i < count($arr); $i++) {
    echo "<p><img src={$arr[$i]['path']} width='200'></p>";
    echo "<p>uploader:&nbsp;{$arr[$i]['name']}</p>";
    echo "<p>describe:&nbsp;{$arr[$i]['info']}</p>";
    echo "<hr>";
}

?>
</body>
</html>





