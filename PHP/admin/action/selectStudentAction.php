<?php
$action = $_POST['action'];
$keyWord = $_POST['keyWord'];
$major = $_POST['major'];
$sql = "";

if($action){
    if($major){
        switch($action){
            case "name":
              $sql ="SELECT * from student WHERE  INSTR(Sname,'$keyWord') and majorName = '$major'";
              toSelect($sql);
              break;
            case "id":
              $sql ="SELECT * from student WHERE INSTR(Sno,$keyWord) and majorName = '$major'";
              toSelect($sql);
              break;
            case "college":
              $sql ="SELECT * from student WHERE INSTR(collegeName,'$keyWord') and majorName = '$major'";
              toSelect($sql);
              break;
            }
    }else{

           switch($action){
            case "name":
              $sql ="SELECT * from student WHERE INSTR(Sname,'$keyWord')";
              toSelect($sql);
              break;
            case "id":
              $sql ="SELECT * from student WHERE INSTR(Sno,$keyWord) ";
              toSelect($sql);
              break;
            case "college":
              $sql ="SELECT * from student WHERE INSTR(collegeName,'$keyWord') ";
              toSelect($sql);
              break;
            }
        
    }

}

function toSelect($sql){
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
   echo json_encode(['code'=>200, 'list'=>$list]);
}else{
   echo json_encode(['code'=>500]);
}
$mysqli->close();


}
?>