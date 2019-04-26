<?php
   $Sno = $_GET['Sno'];
   $Sname = $_GET['Sname'];
   $Ssex = $_GET['Ssex'];
   $Sstate = $_GET['Sstate'];
   $college = $_GET['college'];
   $major = $_GET['major'];
   $Sbirthday = $_GET['Sbirthday'];
   $Saddress = $_GET['Saddress'];
//连接数据库
    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
    $mysqli->set_charset('utf8');
    //
    $sql = "UPDATE student SET Sno=$Sno, Sname='$Sname',Ssex='$Ssex',Sstate='$Sstate',collegeName='$college',majorName='$major',Sbirthday='$Sbirthday',Saddress='$Saddress' WHERE Sno=$Sno";
    //执行sql
    $res = $mysqli ->query($sql);
    if($res === false){
        die('执行sql出错'.$sql);
    }else{
          echo "<h3>信息修改成功</h3>";
    echo "<h4>3秒后返回页面</h4>";
    echo "<a href='javaScript:history.back(-2)'>立刻返回</a>";
    echo "<script language='javascript' type='text/javascript'>";
    echo "setTimeout(function(){window.history.go(-2);},3000);";
    echo "</script>";
    }
  