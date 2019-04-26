
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>添加</title>

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
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="./action/logout.php">
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
                                <a href="#">
                                    <span class="menu-text">
                                        密码信息修改 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                              <li>
                                <a href="#">
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
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">测评信息管理</a>
                    </li>
                                        <li>
                        <a href="#">测评信息列表</a>
                    </li>
                    <li class="active">添加测评信息</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增测评</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="./action/addEvaluationAction.php" method="get">
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">学号</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="Sno" placeholder="" name="Sno" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                         <div class="form-group">
                            <label for="" class="col-sm-2 control-label no-padding-right">所在学期</label>
                            <div class="col-sm-6">
                                <select name="termID" style="width: 100%;">
                                <option selected="selected" value="">请选择学期</option>
                                <?php
                                    getTerm();
                                ?>
                                </select>
                            </div>
                             <p class="help-block col-sm-4 red">* 必填</p>
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">思想道德素质分</label>
                             <div class="col-sm-6">
                                <input class="form-control" id="moralScore" placeholder="" name="moralScore" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">分（满分100分）</p>
                        </div>  
                          <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">专业理论素质分</label>
                             <div class="col-sm-6">
                                <input class="form-control" id="theoryScore" placeholder="" name="theoryScore" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">分（满分100分）</p>
                        </div>  
                          <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">身体素质分</label>
                             <div class="col-sm-6">
                                <input class="form-control" id="healthScore" placeholder="" name="healthScore" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">分（满分100分）</p>
                        </div>  
                          <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">人文素质分</label>
                             <div class="col-sm-6">
                                <input class="form-control" id="practiceScore" placeholder="" name="practiceScore" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">分（满分100分）</p>
                        </div>  
                          <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">创新与实践素质分</label>
                             <div class="col-sm-6">
                                <input class="form-control" id="inregrateScore" placeholder="" name="integrateScore" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">分（满分100分）</p>
                        </div>  
                             <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">对该生评价</label>
                             <div class="col-sm-6">
                             <textarea class="form-control" name="evaluation"   cols="40"   rows="4"   style="OVERFLOW:hidden"></textarea>
                            </div>
                           
                        </div>  
                       
                         
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                                <button type="reset" class="btn btn-default" style="margin-left:20px;">重置</button>
                            </div>
                        </div>
                    </form>
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

    <script type="j"></script>
</body></html>

<?php

function getTerm(){
      $sql = "select * from termInfo";
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