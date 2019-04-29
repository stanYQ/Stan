<?php
include './action/editStart.php';
session_start();
?>
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
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">学生信息管理</a>
                    </li>
                                        <li>
                        <a href="#">学生信息列表</a>
                    </li>
                    <li class="active">修改信息</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改学生信息</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="./action/editAction.php" method="get">
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">学号</label>
                            <div id='snoInput' class="col-sm-6">
                                <?php
                                echo "<input class='form-control' id='Sno' placeholder='$list[0]' value='$list[0]' name='Sno' type='text'>";
                                
                                ?>
                                
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">姓名</label>
                             <div class="col-sm-6">
                                 <?php
                                 echo " <input class='form-control' id='Sname' placeholder='$list[1]' value = '$list[1]' name='Sname'  type='text'>";
                                 ?>
                               
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>  
                         <div class="form-group">
                            <label  class="col-sm-2 control-label no-padding-right">性别</label>
                            <div class="col-sm-6">
                                <select name="Ssex" style="width: 100%;">
                                <?php
                                if($list[2]=="男"){
                                    echo "<option selected='selected' value='男'>男</option>
                                           <option value='女'>女</option>";
                                }else {
                                     echo "<option  value='男'>男</option>
                                           <option selected='selected'  value='女'>女</option>";
                                }
                                ?>
                                
                                </select>
                            </div>
                        </div>  
                          <div class="form-group">
                            <label for="Sstate" class="col-sm-2 control-label no-padding-right">政治面貌</label>
                            <div class="col-sm-6">
                                <select name="Sstate" style="width: 100%;">
                                  <?php
                                if($list[3]=="党员"){
                                    echo "<option selected='selected' value='党员'>党员</option>
                                           <option value='团员'>团员</option>
                                           <option value='清白'>清白</option>";
                                }else if($list[3] =="团员") {
                                       echo "<option value='党员'>党员</option>
                                           <option selected='selected' value='团员'>团员</option>
                                           <option value='清白'>清白</option>";
                                }else{
                                      echo "<option  value='党员'>党员</option>
                                           <option value='团员'>团员</option>
                                           <option selected='selected' value='清白'>清白</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="Scollege" class="col-sm-2 control-label no-padding-right">学院</label>
                            <div class="col-sm-6">
                                <select id ="college" name="college" onChange = "jump()" style="width: 100%;">
                                           <?php
                                            //   echo " <option selected='selected' value='$list[4]' >".$list[4]."</option></option>";
                                              getCollege($list[4]);
                                           ?>
                                </select>
                            </div>
                        </div> 
                          <div class="form-group">
                            <label for="major" class="col-sm-2 control-label no-padding-right">专业</label>
                            <div class="col-sm-6">
                                <select id="major" name="major" style="width: 100%;">
                                   <?php
                                       echo " <option selected='selected' value='$list[5]' >".$list[5]."</option></option>";
                                   ?>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">生日</label>
                            <div class="col-sm-6">
                               <?php
                               echo "   <input class='form-control' id='Sbirthday' placeholder='$list[6]' value='$list[6]' name='Sbirthday'  type='text'>";
                               ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">地址</label>
                            <div class="col-sm-6">
                               
                                 <?php
                               echo "   <input class='form-control' id='Saddress' placeholder='$list[7]' name='Saddress' value='$list[7]'  type='text'>";
                               ?>
                            </div>
                           
                        </div>
                         
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">确认修改</button>
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
    <script type="text/javascript">
    var list = null;
    //二级联动下拉列表框
       function jump(){
         var collegeName = document.getElementById('college').value;
         var data = {college:collegeName};
          $.ajax({
                url: "./action/selectAction.php",             // php的url路径
                type: 'POST',
                data: data,
                success: function(res) {
                    // console.log(res);
                    var option = "<option style='width:100%'>请选择专业</option>";
                    var r = JSON.parse(res);//返回的是一个json格式的字符串  需要进行解析
                    
                    if(r.code == 200){
                        var list = r.list;
                        for (var i = 0; i < list.length; i++) {   // 循环返回的值（城市）
                        option += "<option style='width:100%'>" + list[i] + "</option>";
                        }
                    }
                    $("#major").html(option);    // js刷新第二个下拉框的值
                }
            })
       }
    </script>


    


</body></html>

<?php
//初始化一级列表框 
function getCollege($data){
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
        if($data==$msg[1]){
                 echo "<option selected='selected' value=".$msg[1].">".$msg[1]."</option>";
        }else{
                 echo "<option value=".$msg[1].">".$msg[1]."</option>";
        }
   
        
    }
    $mysqli->close();
}
// echo  "<script type='text/javascript'>
//        $(document).ready(function(){
//            $.ajax({
//                url:'./action/editStart.php?id={$id}',
//                type:'POST',
//                 success: function(res) {
//                 var r = JSON.parse(res);//返回的是一个json格式的字符串  需要进行解析
//                 setDom(r);
//                      var option = '<input class='form-control' id='Sno' placeholder=r.list[0] name='Sno' required='' type='text'>';
//                       $('#snoInput').html(option); 
//                 }
//            })
//        })</script>
//        "


?>