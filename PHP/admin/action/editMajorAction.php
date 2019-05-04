<?php
  session_start();
  $majorName = $_SESSION['editID'];
  $newMajorName = $_GET['newMajorName'];
  $college = $_GET['college'];
//连接数据库
    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
    $mysqli->set_charset('utf8');
    //
    $sql = "UPDATE major SET majorName = '$newMajorName',collegeName ='$college'  WHERE  majorName = '$majorName' ";

    //执行sql
    $res = $mysqli ->query($sql);
    if($res === false){
        die('执行sql出错'.$sql);
    }else{
        $_SESSION['editID'] = null;
          echo "<h3>信息修改成功</h3>";
    echo "<h4>3秒后返回页面</h4>";
    echo "<a href='../majorList.php'>立刻返回</a>";
    echo "<script language='javascript' type='text/javascript'>";
    echo "setTimeout(function(){window.history.go(-2);},3000);";
    echo "</script>";
    }