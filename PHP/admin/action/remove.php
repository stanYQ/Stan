<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/22 0022
 * Time: 下午 4:59
 */
$action = $_GET["action"];
// echo $action;
 $id = $_GET["id"];
if($action == "removeStudent"){
    //构建sql
    $sql ="delete from student WHERE Sno = {$id}";
    remove($sql);
}

if($action == "removeUser"){
    $sql ="delete from userinfo_table WHERE id = {$id}";
    remove($sql);
}


function remove($sql){
     
//连接数据库
    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
    //设置编码格式
   $mysqli->set_charset('utf8');
//执行sql
    $result=$mysqli ->query($sql);
    if($result === false){
        // show_error('执行sql出售','1.html')
        die('执行sql出错'.$sql);
    }
if($result){
    echo "<h3>删除信息成功</h3>";
    echo "<h4>3秒后返回页面</h4>";
    echo "<a href='javaScript:history.back(-1)'>立刻返回</a>";
    echo "<script language='javascript' type='text/javascript'>";
    echo "setTimeout(function(){window.history.go(-1);},3000);";
    echo "</script>";
}else{
    echo "<h3>删除信息失败</h3>";
}
}

$mysqli->close();
?>




