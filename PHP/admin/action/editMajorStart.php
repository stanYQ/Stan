<?php
session_start();
$major = $_GET['majorName'];
$_SESSION['editID'] = $major;
//连接数据库
$mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');

//构建SQL
$sql = "select * from major where majorName = '$major'";
//设置编码格式
$mysqli->set_charset('utf8');


//执行sql
$res=$mysqli ->query($sql);

if($res === false){
	die('执行sql出错'.$sql);
}

 header("Content-Type=application/json;charset=utf-8");//设置响应头
    if($res) {
        $list = array();
        while($row = mysqli_fetch_row($res)){
            $list = $row;
            // echo $list;
        }
    }
?>