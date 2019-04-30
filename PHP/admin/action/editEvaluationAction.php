<?php
session_start();
$id = $_SESSION['editID'];
$Tno = $_GET['termID'];
$moralScore = $_GET['moralScore'];
$theoryScore = $_GET['theoryScore'];
$healthScore = $_GET['healthScore'];
$practiceScore = $_GET['practiceScore'];
$integrateScore = $_GET['integrateScore'];
$evaluation = $_GET['evaluation'];

 $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
    $mysqli->set_charset('utf8');
    if($Tno){
        // echo "yes";
    $sql = "UPDATE evaluationinfo SET  Tno=$Tno,moralScore=$moralScore,theoryScore=$theoryScore,healthScore=$healthScore,practiceScore=$practiceScore,integrateScore=$integrateScore,evaluation='$evaluation' WHERE Eno=$id";
        //执行sql
        $res = $mysqli ->query($sql);
        if($res === false){
            die('执行sql出错'.$sql);
        }else{
        $_SESSION['editID'] = null;
        echo "<h3>信息修改成功</h3>";
        echo "<h4>3秒后返回页面</h4>";
        echo "<a href='javaScript:history.back(-2)'>立刻返回</a>";
        echo "<script language='javascript' type='text/javascript'>";
        echo "setTimeout(function(){window.history.go(-2);},3000);";
        echo "</script>";

        }
    }else{
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('选择正确的学期');window.history.go(-1);";
            echo "</script>";
    }
  
?>