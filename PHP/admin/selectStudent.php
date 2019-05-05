 <?php
session_start();
?> 

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>学生信息查询</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link href="style/font-awesome.css" rel="stylesheet">
    <link href="style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="style/beyond.css" rel="stylesheet" type="text/css">
    <link href="style/demo.css" rel="stylesheet">
    <link href="style/typicons.css" rel="stylesheet">
    <link href="style/animate.css" rel="stylesheet">

</head>

<body>
    <!-- 头部 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <h4>学生综合素质测评系统</h4>
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="images/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <?php
                                           if(isset($_SESSION['user']) && !empty($_SESSION)){
                                               echo "<h2><span class='profile'><span>".$_SESSION['user']."</span></span></h2>";
                                           }else{
                                                echo "<h2><span class='profile'><span>admin</span></span></h2>";
                                           }
                                        ?>
                                        
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="./action/logout.php" onclick = "logout" >
                                            退出登录
                                        </a>
                                    </li>
                                    
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>

    <!-- /头部 -->

    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
              
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="./selectStudent.php" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">
                                信息查询 </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="./selectStudent.php">
                                    <span class="menu-text">
                                        学生信息查询 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="./selectEvaluation.php">
                                    <span class="menu-text">
                                       测评信息查询  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                学生信息管理 </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="./list.php">
                                    <span class="menu-text">
                                        学生信息列表 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                测评信息管理 </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="./evaluationList.php">
                                    <span class="menu-text">
                                        测评信息列表 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>

                            <span class="menu-text">
                                系统 </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="./changePwd.php">
                                    <span class="menu-text">
                                        密码信息修改 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                              <li>
                                <a href="./majorList.php">
                                    <span class="menu-text">
                                        专业信息设置 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                              <li>
                                <a href="./termList.php">
                                    <span class="menu-text">
                                        学期信息设置 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">学生信息查询</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <h2 style="text-align:center">学生信息查询</h2>
                                      <div class="form-horizontal" >
                                        <!-- <form role="form" action="./action/selectStudentAction.php" method="get"> -->
                                            <div class="form-group">
                                                 <div class="col-sm-4">
                                                    <select id="action" name="action" style="width: 100%;">
                                                    <option selected="selected" value="">请选择查询方式</option>
                                                    <option value="id">按照学号查询</option>
                                                    <option value="name">按照姓名查询</option>
                                                    <option value="college">按照学生所在学院查询</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-group">
                                                    <input id="keyWord" type="text" name="keyWord" class="form-control" placeholder="Search for...">
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" onclick='selectAction()'>Select!</button>
                                                    </span>
                                                     </div>
                                                     </div><!-- /.col-lg-6 -->
                                                <div class="col-sm-4">
                                                    <select id="major" name="major" style="width: 100%;">
                                                    <option selected="selected" value="">学生所在专业</option>
                                                     <?php
                                                       getMajor();
                                                     ?>
                                                    </select>
                                                </div>
                                        </div> 
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <div class="widget-body">
                                  <div class="jumbotron">
                                    
                                    
                                    </div>
                                      <div class="jumbotron">
                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Page Body -->

             
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    

    <!--Basic Scripts-->
    <script src="style/jquery_002.js"></script>
    <script src="style/bootstrap.js"></script>
    <script src="style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="style/beyond.js"></script>

    <script type='text/javascript'>
       function selectAction(){
           var major = document.getElementById('major').value;
           var action = document.getElementById('action').value;
           var keyWord = document.getElementById('keyWord').value;

          var data ={
              major:major,
              action:action,
              keyWord:keyWord,
          }
          $.ajax({
              url:"./action/selectStudentAction.php",
              type:"POST",
              data:data,
              success:function(res){
                //   console.log(res);
                  var r = JSON.parse(res);
                  console.log(r.list);
                //   console.log(r.list);
              }
          })
       }
    </script>
</body>

</html>

<?php
function start(){
   if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        
        }else{
        echo  "<a href='./login.html'>还没登录请先登录</a>"; 
     }

}

function getMajor(){
        if (!isset($_SESSION['user']) && empty($_SESSION['user'])){
          return;
      }
    $sql = "select * from major";
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
        echo "<option value=".$msg[0].">".$msg[0]."</option>";
    }
    $mysqli->close();
}
?>