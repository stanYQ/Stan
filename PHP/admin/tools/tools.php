<?php
//获取 学院列表
function getCollege(){
      if (!isset($_SESSION['user']) && empty($_SESSION['user'])){
          return;
      }
    $sql = "select * from college";
    //连接数据库
    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
    $mysqli->set_charset('utf8');
    //执行sql
    $res=$mysqli ->query($sql);
    if($res === false){
        die('执行sql出错'.$sql);
    }
    while($msg = mysqli_fetch_row($res)) {
        echo "<option value=".$msg[1].">".$msg[1]."</option>";
    }
    $mysqli->close();
}


function  editGetCollege($data){
    $sql = "select * from college";
    //连接数据库
    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
    $mysqli->set_charset('utf8');
    //执行sql
    $res=$mysqli ->query($sql);
    if($res === false){
        die('执行sql出错'.$sql);
    }
    while($msg = mysqli_fetch_row($res)) {
        if($data==$msg[1]){
                 echo "<option selected='selected' value=".$msg[1].">".$msg[1]."</option>";
        }else{
                 echo "<option value=".$msg[1].">".$msg[1]."</option>";
        }
   
        
    }
    $mysqli->close();
}



?>