<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"H:\WWW\tp3\public/../application/admin\view\index\service.html";i:1576129052;s:48:"H:\WWW\tp3\application\admin\view\same\left.html";i:1576205875;}*/ ?>
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
              <?php if(is_array($result1) || $result1 instanceof \think\Collection || $result1 instanceof \think\Paginator): if( count($result1)==0 ) : echo "" ;else: foreach($result1 as $key=>$vo): ?>
                                <section>
                                    <h2><span class="profile"><span><?php echo $vo['username']; ?></span></span></h2>
                                </section>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="#" onclick="warning('确定要退出吗', '<?php echo url('login/login'); ?>'">
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
                                        <li class="active">客服信息列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('service/service_add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">客服用户名</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                                                     <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $key=>$vo): ?>
 <tr>
<td align="center"><?php echo $vo['id']; ?></td><td align="center"><a href="<?php echo url('more/service_one',array('id'=>$vo['id'])); ?>"><?php echo $vo['username']; ?></a></td>
<td align="center">
 <a href="<?php echo url('service/modify',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny"><i class="fa fa-edit"></i> 编辑</a>
<?php if($vo['id'] != 1): ?> <a href="#" onClick="warning('确定要删除吗', '<?php echo url('service/del',array('id'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
 <i class="fa fa-trash-o"></i> 删除</a><?php endif; ?>                         
</td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?> 
                                                    </tbody>
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
    <script src="http://localhost:8080/tp3/public/static/admin/js/jquery_002.js"></script>
    <script src="http://localhost:8080/tp3/public/static/admin/js/bootstrap.js"></script>
    <script src="http://localhost:8080/tp3/public/static/admin/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost:8080/tp3/public/static/admin/js/beyond.js"></script>
    


</body></html>