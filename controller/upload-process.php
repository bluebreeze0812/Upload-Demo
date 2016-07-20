<?php
require_once '/program/ZendStudio/project/upload-demo/model/check-and-store.class.php';
$cs = new CheckAndStore();
//Here I hard code that the uploaded file can't bigger than 2M and has to be a png image.
//If you want to change it, move to model/check-and-store.class.php file to modify it.:-)

require_once '/program/ZendStudio/project/upload-demo/model/upload-img-service.class.php';
$uis = new UploadImgService();

$name = $_POST['name'];
$desc = $_POST['desc'];

$destination = "../uploads/" . $_FILES['pic']['name'];

if ($cs->check($_FILES['pic']['tmp_name'], $_FILES['pic']['type'], $_FILES['pic']['size'])) {
    if ($cs->store($_FILES['pic']['tmp_name'], $destination)) {
        //store data to database
        $uis->addData($name, $desc, $destination);
        header("Location: ../view/upload-success.php");
        exit();
    } else {
        header("Location: ../view/upload-fail.php");
        exit();
    }
} else {
        header("Location: ../view/upload-fail.php");
        exit();
}

?>