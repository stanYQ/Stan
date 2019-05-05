<?php
$action = $_POST['action'];
$keyWord = $_POST['keyWord'];
$term = $_POST['term'];
$sql = "";

if($action){
    if($term){
        switch($action){
            case "name":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(Sname,'$keyWord') and Tno = '$term'";
              toSelect($sql);
              break;
            case "id":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(student.Sno,'$keyWord') and Tno = '$term'";
              toSelect($sql);
              break;
            case "major":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(majorName,'$keyWord') and Tno = '$term'";
              toSelect($sql);
              break;
            }
    }else{

           switch($action){
            case "name":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(Sname,'$keyWord')";
              toSelect($sql);
              break;
            case "id":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(student.Sno,'$keyWord')";
              toSelect($sql);
              break;
            case "major":
              $sql ="SELECT * from evaluationinfo INNER JOIN student ON evaluationinfo.Sno=student.Sno WHERE INSTR(majorName,'$keyWord')";
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