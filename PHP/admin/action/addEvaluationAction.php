<?php
// $Eno  = $_GET['Eno'];
$Sno = $_GET['Sno'];
$Tno = $_GET['termID'];
$moralScore = $_GET['moralScore'];
$theoryScore = $_GET['theoryScore'];
$healthScore = $_GET['healthScore'];
$practiceScore = $_GET['practiceScore'];
$integrateScore = $_GET['integrateScore'];
$evaluation = $_GET['evaluation'];

 $sql ="select * from student where Sno = {$Sno}";
 $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
//设置编码格式
$mysqli->set_charset('utf8');
//执行sql
$res=$mysqli ->query($sql);

if($res === false){
	die('执行sql出错'.$sql);
}
    if($msg = mysqli_fetch_row($res)){
       $sql2 =  "INSERT INTO evaluationinfo SET Sno=$Sno,Tno=$Tno,moralScore=$moralScore,theoryScore=$theoryScore,healthScore=$healthScore,practiceScore=$practiceScore,integrateScore=$integrateScore,evaluation='$evaluation'"; 
        $res2 = $mysqli->query($sql2);
    if($res2 === false){
        die('执行sql出错'.$sql2);
    }else{
            echo "<h3>信息添加成功</h3>";
    echo "<h4>3秒后返回页面</h4>";
    echo "<a href='javaScript:history.back(-2)'>立刻返回</a>";
    echo "<script language='javascript' type='text/javascript'>";
    echo "setTimeout(function(){window.history.go(-2);},3000);";
    echo "</script>";
    }
    }else{
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('请输入正确的学号');window.history.go(-1);";
            echo "</script>";
        
    }
?>