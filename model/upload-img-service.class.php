<?php
require_once '/program/ZendStudio/project/mysql/tool/SqlTool.class.php';

class UploadImgService {
    private $sqlTool;
    
    function __construct() {
        $this->sqlTool = new SqlTool();
        $this->sqlTool->connect('localhost', 'root', 'root', 'mydb');    
    }
    
    function addData($name, $desc, $path) {
        $sql = "insert into upload_img values ('$name', '$desc', '$path');";
        $this->sqlTool->just_do($sql);
    }
    
    function showData() {
        $sql = "select * from upload_img;";
        $arr = $this->sqlTool->return_result($sql);
        return $arr;
    }
    
    function __destruct() {
        $this->sqlTool->disconn();
    }
}
?>