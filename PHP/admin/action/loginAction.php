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
//获取表单中的数据
session_start();
$user = $_GET['username'];
$pwd = $_GET['password'];

//非空验证
  if(empty($user)||empty($pwd)){
    echo "<script>alert('用户名或密码不能为空'');</script>";
}

//
$_SESSION['user'] = $user;
$_SESSION['pwd'] = $pwd;

//构建sql
$sql ="select * from userinfo_table where user_name ='$user' and user_pwd = '$pwd'";
// echo $sql;

//连接数据库
$mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');

//设置编码格式
$mysqli->set_charset('utf8');


//执行sql
$res=$mysqli ->query($sql);
if($res === false){
	// show_error('执行sql出售','1.html')
	die('执行sql出错'.$sql);
}

//echo mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
	 $_SESSION['user'] = $user;//登录成功给session user 赋值
//        //跳转到首页
       echo "<script language='javascript' type='text/javascript'>";
       echo "window.location.href='../index.php'";
       echo "</script>";
}else{
      echo "<script language='javascript' type='text/javascript'>";
      echo "  alert('登录失败，用户名或密码不正确');";
      echo "window.location.href='../login.html';" ;
      echo "</script>";

}


// 关闭数据库连接
$mysqli->close();
?>