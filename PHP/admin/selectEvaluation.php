 <?php
session_start();
?> 

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>测评信息查询</title>

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
                        <li class="active">测评信息查询</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <div class="page-body">
                    
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <h2 style="text-align:center;padding-top:15px;">学生信息查询</h2>
                                      <div class="form-horizontal" >
                                        <!-- <form role="form" action="./action/selectStudentAction.php" method="get"> -->
                                            <div class="form-group">
                                                 <div class="col-sm-4">
                                                    <select id="action" name="action" style="width: 100%;">
                                                    <option selected="selected" value="">请选择查询方式</option>
                                                    <option value="id">按照学号查询</option>
                                                    <option value="name">按照姓名查询</option>
                                                    <option value="major">按照学生所在专业查询</option>
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
                                                    <select id="term" name="term" style="width: 100%;">
                                                    <option selected="selected" value="">学期</option>
                                                     <?php
                                                       getTerm();
                                                     ?>
                                                    </select>
                                                </div>
                                        </div> 
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <div class="widget-body" id ="widget-body">
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
           var term = document.getElementById('term').value;
           var action = document.getElementById('action').value;
           var keyWord = document.getElementById('keyWord').value;
           if(!action){
               alert("请选择正确的查找方式");
               return;
           }

           if(!keyWord){
               alert("请输入关键字");
               return;
           }
          var data ={
              term:term,
              action:action,
              keyWord:keyWord,
          }
          $.ajax({
              url:"./action/selectEvalutionAction.php",
              type:"POST",
              data:data,
              success:function(res){
                  var option ="";
                  console.log(res);
                  var r = JSON.parse(res);
                //   console.log(res);
                  console.log(r.list);

                if(r.code == 200 &&r.list.length > 0){
                    var list = r.list;
                    for(var i = 0; i < list.length; i++){
                        option +="<div class='jumbotron'>"+
                                     "<table  class='table table-bordered table-hover'>"+
                                     "<tr><th class='text-center'>学号</th> <th class='text-center'>姓名</th><th class='text-center'>专业</th>   <th class='text-center' colspan='2'>所评价学期</th> </tr>"+
                                     "<tr><td class='text-center'>"+list[i][1]+"</td>"+
                                     "<td class='text-center'>" + list[i][10]+"</td>"+
                                     "<td class='text-center'>" + list[i][14]+"</td>"+
                                     "<td class='text-center' colspan='2'>" + list[i][2]+"</td>"+
                                     "</tr>"+
                                     "<tr><th class='text-center'>思想道德素质分</th><th class='text-center'>专业理论素质分</th><th class='text-center'>身体素质分</th><th class='text-center'>人文素质分</th><th class='text-center'>创新实践素质分</th></tr>"+
                                     "<tr><td class='text-center'>"+list[i][3]+"</td>"+
                                     "<td class='text-center'>" + list[i][4]+"</td>"+
                                     "<td class='text-center'>" + list[i][5]+"</td>"+
                                     "<td class='text-center'>" + list[i][6]+"</td>"+
                                     "<td class='text-center'>" + list[i][7]+"</td>"+
                                     "</tr>"+
                                     "<tr><th class='text-center' colspan = '5'>对该生综合素质评价</th>"+
                                     "<tr><td class='text-center' colspan = '5'>"+ list[i][8]+"</td></tr>"+
                                     "</table></div>";
                    }
                }
                if(r.list.length==0){
                    option = "<h1>未查找到记录</h1>"
                }
                $("#widget-body").html(option);
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

function getTerm(){
        if (!isset($_SESSION['user']) && empty($_SESSION['user'])){
          return;
      }
    $sql = "select * from terminfo";
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
        echo "<option value=".$msg[0].">".$msg[1]."</option>";
    }
    $mysqli->close();
}
?>