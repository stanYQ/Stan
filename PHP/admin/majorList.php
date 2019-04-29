<?php
session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>专业列表</title>

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
                                        <a href="/admin/user/logout.html">
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
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">
                                信息查询 </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <span class="menu-text">
                                        学生信息查询 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
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
                                <a href="./list.php?action=student">
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
                                <a href="#">
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
                    <ul class='breadcrumb'>
                        <li>
                            <a href='#'>专业信息设置</a>
                        </li>
                        <li class='active'>专业信息列表</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <button type="button" tooltip="添加专业" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = './majorAdd.php'">
                        <i class="fa fa-plus"></i> Add
                    </button>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="flip-scroll">
                                        <table class='table table-bordered table-hover'>
                                            <thead>
                                            <tr>
                                            <th class='text-center'>专业</th>
                                            <th class='text-center'>
                                            <select id ='college' name='college' style='width:100%;' onchange='selectCollege()'>
                                            <option selected='selected'>请选择学院</option>
                                            <option value='All' >所有学院</option>
                                             <?php
                                                getCollege();
                                             ?>   
                                            </select>
                                                </th>
                                                <th class='text-center'>操作</th>
                                                </tr>
                                                </thead>
                                                <tbody id = "majorListBox"> 
                                                    <?php
                                                       start();
                                                    ?>                   
                                                </tbody >
                                                </table>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="style/jquery_002.js"></script>
    <script src="style/bootstrap.js"></script>
    <script src="style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="style/beyond.js"></script>
    
    <script type="text/javascript">
        function  selectCollege() {
            var collegeName = document.getElementById('college').value;
            var data = {college:collegeName};
            $.ajax({
                url: "./action/selectCollegeAction.php",             // php的url路径
                type: 'POST',
                data: data,
                success: function(res) {
                    var option = "";
                    var r = JSON.parse(res);//返回的是一个json格式的字符串  需要进行解析
                    if(r.code == 200){
                        var list = r.list;
                        for (var i = 0; i < list.length; i++) {   // 循环返回的值（城市）
                           option +=  "<tr>"+
                                       "<td align='center'>"+list[i][0]+"</td>"+
                                       "<td align='center'>"+list[i][1]+"</td>"+
                                       "<td align='center'>"+
                                       " <a href='./edit.php?action=edit&majorName="+list[i][0]+"' class='btn btn-primary btn-sm shiny'>"+
                                       " <i class='fa fa-edit'></i> 编辑  </a>"+
                                       "<a href='./action/remove.php?action=removeMajor&id="+list[i][0]+
                                       "'class='btn btn-danger btn-sm shiny'>"+
                                       "<i class='fa fa-trash-o'></i> 删除</a></td></tr>";
                        }
                    }
                    $("#majorListBox").html(option);    // js刷新第二个下拉框的值
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
//
//function getMajorData($sql){
//
//// echo $sql;
//
////连接数据库
//    $mysqli = new mysqli("localhost",'root','123456','infodb') or die('连接数据库失败');
//
//
////设置编码格式
//    $mysqli->set_charset('utf8');
//
//
////执行sql
//    $res=$mysqli ->query($sql);
//
//    if($res === false){
//        die('执行sql出错'.$sql);
//    }
//
//
//    while($msg = mysqli_fetch_row($res)) {
//        echo "<tr>";
//        echo "<td align='center'>".$msg[0]."</td>";
//        echo "<td align='center'>".$msg[1]."</td>";
//        echo "<td align='center'>";
//        echo " <a href='./edit.php?action=edit&majorName=".$msg[0]."' class='btn btn-primary btn-sm shiny'>";
//        echo " <i class='fa fa-edit'></i> 编辑  </a>";
//        echo "<a href='./action/remove.php?action=remove&majorName=".$msg[0]."
//          ' class='btn btn-danger btn-sm shiny'>
//          <i class='fa fa-trash-o'></i> 删除</a></td></tr>";
//    }
//    $mysqli->close();
//}

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
?>