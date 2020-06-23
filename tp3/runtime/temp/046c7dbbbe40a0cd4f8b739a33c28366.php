<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"H:\WWW\tp3\public/../application/admin\view\login\phone_login.html";i:1575884116;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>手机号快捷登录页面</title>
<style type="text/css">
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
	height: 438px;
	width: 368px;  
	position: absolute;
	background-color: #FFFFFF;
	top: 20%;
	right: 20%;
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
	width: 100%;
	height: 42px;
	text-indent: 2.5rem;
}
.logIn .lgF input {
	width: 50%;
	height: 42px;
	text-indent: 2.5rem;
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
 
<body>
<div class="body" id="body">
	<div class="logIn">
			<div class="logB logBtop">
				<p class="p1">手机号快捷登录</p>
			</div>
			<div class="lgB">
				<img src="http://localhost:8080/tp3/public/static/index/images/user.jpg" width="20" height="20" alt="账户" title="账户"/>
				<input type="text"
					placeholder="请输入手机号或邮箱" />
			</div>
            <div class="lgF">
            	<img src="http://localhost:8080/tp3/public/static/index/images/sjyzm.jpg" width="20" height="20" alt="验证码" title="验证码"/>
                <input type="text" placeholder="请输入验证码" />
                <button><center>获取验证码</center></button>
            </div>
			<div class="logA">
                <a href="login" target="_self">
                	<button>确定登录</button>
                </a>
			</div>
            <div class="logA">
                <a href="login" target="_self">
                	<button>退出</button>
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
