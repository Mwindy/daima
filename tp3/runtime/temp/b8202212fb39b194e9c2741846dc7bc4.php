<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\WWW\tp3\public/../application/admin\view\login\article.html";i:1575883447;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost:8080/tp3/public/static/index/css/zhuce.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='http://localhost:8080/tp3/public/static/index/js/check.js'></script>
<title>注册页面</title>
<style>
*{
	margin: 0;
	padding: 0;
}
#body {
	height: 800px;
	width: 100;
	background-image:url(http://localhost:8080/tp3/public/static/index/images/11.png);
	background-repeat: no-repeat;
	background-position: 100%100%;
	background-size:100% 100%;
	position: relative;
}
#foot {
	width: 100;
	height: 130px;
	background-color: #CC9933;
	position: relative;
}
#body .logIn {
		height: 450px;
	width: 368px;  
	top: 20%;
	right: 20%;
	position: absolute;
	background-color: #FFFFFF;
	border-style:solid;
	border-color: #CC9933;
	border-radius:30px;
}
.logA a button {
	width: 100%;
	height: 45px;
	background-color: #ee7700;
	border: none;
	color: white;
	font-size: 18px;
}
.logIn .logB.logBtop .p1 {
	display: inline-block;
	font-size: 28px;
	margin-top: 30px;
	width: 86%;
}
#body .logIn .logB.logBtop {
	width: 86%;
	border-bottom: 1px solid #ee7700;
	margin-bottom: 30px;
	margin-top: 0px;
	margin-right: auto;
	margin-left: auto;
}
.logIn .lgB img {
	position: absolute;
	top: 12px;
	left: 8px;
}
.logIn .lgF img {
	position: absolute;
	top: 12px;
	left: 8px;
}
.logIn .lgB input {
	width: 85%;
	height: 42px;
	text-indent: 2.5rem;
}
.logIn .lgF input {
	width: 45%;
	height: 42px;
	text-indent: 2.5rem;
}
.placeholder{
	color:#000;
}
.logIn .lgF button {
	width: 40%;
	height: 42px;
	background-color:#0C0;
	border:1px;
}
#body .logIn .lgB {
	width: 86%;
	position: relative;
	margin-bottom: 30px;
	margin-top: 30px;
	margin-right: auto;
	margin-left: auto;
}

#body .logIn .lgF {
	width: 86%;
	position: relative;
	margin-bottom: 30px;
	margin-top: 30px;
	margin-right: auto;
	margin-left: auto;
}
#body .logIn .logA {
	width: 86%;
	margin-top: 15px;
	margin-right: auto;
	margin-bottom: 15px;
	margin-left: auto;
}
 
.copyright {
	font-family: "宋体";
	color: #FFFFFF;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);  /* 使用css3的transform来实现 */
	height: 60px;
	width: 40%;
	text-align:center;
}
	
 
#foot .copyright .main {
	width: 100%;
	height: 24px;
	position:relative;
}
#foot .copyright .main span {
	height: 10px;
	width: 100%;
}
input {
    width: 150px;
    height: 42px;
   
    padding: 0 15px;
    background: #2d2d2d; /* browsers that don't support rgba */
    background: rgba(45,45,45,.15);
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    border: 1px solid #3d3d3d; /* browsers that don't support rgba */
    border: 1px solid rgba(255,255,255,.15);
    -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

input:-moz-placeholder { color: #fff; }
input:-ms-input-placeholder { color: #fff; }
input::-webkit-input-placeholder { color: #fff; }

input:focus {
    outline: none;
    -moz-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}
button {
    cursor: pointer;
    width: 300px;
    height: 44px;
 
    padding: 0;
    background: #ef4300;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    border: 1px solid #ff730e;
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);
    -o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

button:hover {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

button:active {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:        
        0 5px 8px 0 rgba(0,0,0,.1) inset,
        0 1px 4px 0 rgba(0,0,0,.1);

    border: 0px solid #ef4300;
}
</style>
</head>
 
<script type="text/javascript">
    function tijiao(){
	 if(form1.username.value=="")
	 {
		 alert("请输入用户名");
	     form1.username.focus();
	     return false;
	 }
	 
 
     if(form1.password.value=="")
     {
		 alert("请输入密码");
	     form1.password.focus();
	     return false;
	 }
	  if(form1.password1.value=="")
     {
		 alert("请重新输入密码");
	     form1.password.focus();
	     return false;
	 }
  if(form1.password.value!=form1.password1.value)
     {
		 alert("两次输入密码不一致");
	     form1.password.focus();
	     return false;
	 }
 if(form1.password.length<6)
 {
      alert("密码数不能小于6");
      form1.password.length.focus();
      return false;
}
   document.getElementById(form1).submit();
    }
    </script>

<body>

<div class="body" id="body">

	<div class="logIn">
			<div class="logB logBtop">
				<p class="p1">注册</p>
			</div>
           <form id="form1" name="form1" method="post" action="" onsubmit="return tijiao()">
			<div class="lgB">
				<img src="http://localhost:8080/tp3/public/static/index/images/user.jpg" width="20" height="20" alt="账户" title="账户"/>
				<input type="text" name="username" name="username"
					placeholder="请输入手机号或邮箱" />
			</div>
			<div class="lgB">
				<img src="http://localhost:8080/tp3/public/static/index/images/password.jpg" width="20" height="20" alt="密码" title="密码"/>  
				<input type="password" id="password" name="password"
					placeholder="请输入用户密码" />
			</div>
            <div class="lgB">
				<img src="http://localhost:8080/tp3/public/static/index/images/password.jpg" width="20" height="20" alt="密码" title="密码"/>  
				<input type="password" id="password1" name="password1"
					placeholder="确认输入用户密码" />
			</div>
         
           
			<div class="logA">
           
				<a href="" target="_self"><button type="submit" id="button" name="button">注 册</button></a> 
                </form></div>
            <div class="logA">
                <a href="http://localhost:8080/tp3/public/index.php/admin/login/login" target="_self">
                	<button>退出注册</button>
                </a>
			</div>
		</div>
       
</div>
	
<div class="foot" id="foot">
  <div class="copyright">
  	<div class="main">
    	<span>
        	版权所有：酷购团队<br />
            联系邮箱:844941589@qq.com<br />
            联系地址：中山大学新华学院<br />
            联系电话：13727545983
        </span>
    </div>
  </div>
</div>
	
	
</body>
</html>
