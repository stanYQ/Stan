<?php 
session_start();
$user = $_GET['username'];
$oldPwd = $_GET['passwordOld'];
$newPwd = $_GET['passwordNew'];

//构建sql
$sql ="select * from userinfo_table where user_name ='$user' and user_pwd = '$oldPwd'";
$sql2 = "UPDATE userinfo_table SET user_pwd = '$newPwd'";

//连接数据库
$mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');

//设置编码格式
$mysqli->set_charset('utf8');

if ($_SESSION['user'] == $user){
    //执行sql
    $res=$mysqli ->query($sql);
    if($res === false){
        // show_error('执行sql出售','1.html')
        die('执行sql出错'.$sql);
    }

    if(mysqli_num_rows($res)>0){
            $res2=$mysqli ->query($sql2);
            if($res2 === false){
                // show_error('执行sql出售','1.html')
                die('执行sql出错'.$sql2);
            }else{
                        $_SESSION['user'] = null;
                        echo"dfasdfa";
                        echo "<script language='javascript' type='text/javascript'>";
                        echo "alert('密码修改成功,请重新登录');";
                        echo "window.location.href='../login.html';" ;
                        echo "</script>";
            }
    }else{
      echo "<script language='javascript' type='text/javascript'>";
      echo "alert('修改失败，用户名或密码不正确');";
      echo "window.location.href='../changePwd.php';" ;
      echo "</script>";

    }
}

?>