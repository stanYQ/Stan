<?php
$collegeName = $_POST['college'];       // 获取ajax传来的值
// echo  $collegeName;
$sql = "";
if ($collegeName == "All"){
    $sql = "select * from major";
}else{
    $sql = "select * from major WHERE collegeName = '$collegeName'";
}

$mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
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
        array_push($list, $row);
    }
    // echo  $list[0][0];
   echo json_encode(['code'=>200, 'list'=>$list]);
}else{
   echo json_encode(['code'=>500]);
}
$mysqli->close();


?>
