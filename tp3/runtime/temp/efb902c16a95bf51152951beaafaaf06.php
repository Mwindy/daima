<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"H:\WWW\tp3\public/../application/admin\view\goods\goods_add.html";i:1576205740;s:48:"H:\WWW\tp3\application\admin\view\same\left.html";i:1576205875;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ThinkPHP</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost:8080/tp3/public/static/admin/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost:8080/tp3/public/static/admin/css/font-awesome.css" rel="stylesheet">
    <link href="http://localhost:8080/tp3/public/static/admin/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost:8080/tp3/public/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://localhost:8080/tp3/public/static/admin/css/demo.css" rel="stylesheet">
    <link href="http://localhost:8080/tp3/public/static/admin/css/typicons.css" rel="stylesheet">
    <link href="http://localhost:8080/tp3/public/static/admin/css/animate.css" rel="stylesheet">
    
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
                            <img src="http://localhost:8080/tp3/public/static/admin/images/3.jpg" alt="">
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
                                    <img src="http://localhost:8080/tp3/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <?php if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$sf): ?>
                                <section>
                                    <h2><span class="profile"><span><?php echo $sf['username']; ?></span></span></h2>
                                </section>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
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
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('index/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表信息                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            
                        </ul>   
                       
                                               
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">管理列表</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('index/goods'); ?>">
                                    <span class="menu-text">
                                        商品管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('index/order'); ?>">
                                    <span class="menu-text">
                                        订单管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('index/bbs'); ?>">
                                    <span class="menu-text">
                                        公告管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('index/user'); ?>">
                                    <span class="menu-text">
                                       会员信息管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                             <li>
                                <a href="<?php echo url('index/service'); ?>">
                                    <span class="menu-text">
                                       客服信息管理                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="warning('确认要退出吗','<?php echo url('login/login'); ?>')">
                                    <span class="menu-text">
                                        退出管理系统                                   </span>
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
                        <a href="<?php echo url('index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('index/goods'); ?>">商品信息列表</a>
                    </li>
                                        <li class="active">添加商品</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增商品</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                 <form class="form-horizontal" role="form" action="" method="post" name="result">
                 	
                       <div class="form-group">
                         <label for="goodsname" class="col-sm-2 control-label no-padding-right">书名</label>
                         <div class="col-sm-6">
                             <input class="form-control" id="goodsname" placeholder="" name="goodsname" required type="text" style="width: 300px;height: 34px;">
                         </div>
                         <p class="help-block col-sm-4 red">&nbsp;</p>
                     </div>
                 <div class="form-group">
                     <label for="picture" class="col-sm-2 control-label no-padding-right">图片</label>
                     <div class="col-sm-6">
                         <input  id="picture" placeholder="" name="picture" required type="file">
                     </div>
                     <p class="help-block col-sm-4 red">&nbsp;</p>
                 </div>
                     <div class="form-group">
                         <label for="group_id" class="col-sm-2 control-label no-padding-right">书本简介</label>
                         <div class="col-sm-6">
                            
                  <textarea id="introduce" placeholder="" name="introduce" required rows="4" cols="45" style="font-size: 35px;"></textarea>
                         </div>
                          <p class="help-block col-sm-4 red">&nbsp;</p>
                     </div>  
                      <div class="form-group">
                         <label for="group_id" class="col-sm-2 control-label no-padding-right">原价</label>
                         <div class="col-sm-6">
                             <input class="form-control" id="price" placeholder="" name="price" required type="text" style="width: 160px;height: 34px;">
                  
                         </div>
                           <p class="help-block col-sm-4 red">&nbsp;</p>
                        </div>
                        <div class="form-group">
                         <label for="group_id" class="col-sm-2 control-label no-padding-right">折扣价</label>
                         <div class="col-sm-6">
                             <input class="form-control" id="nowPrice" placeholder="" name="nowPrice" required type="text" style="width: 160px;height: 34px;">
                  
                         </div>
                         
                        </div>
                     
                        
                     <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-default">添加商品</button>
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
    <script src="http://localhost:8080/tp3/public/static/admin/js/jquery_002.js"></script>
    <script src="http://localhost:8080/tp3/public/static/admin/js/bootstrap.js"></script>
    <script src="http://localhost:8080/tp3/public/static/admin/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost:8080/tp3/public/static/admin/js/beyond.js"></script>
    


</body></html>