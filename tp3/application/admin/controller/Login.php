<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User;
use think\View;
class Login extends Controller
{
	 public function login()
     {return $this->fetch();
	}
	 public function onlogin($username='123456',$password='123456'){
	
    $user = User::get([
        'username' => $username,
        'password' => $password
        ]);
    if($user){
        return $this->success('登录成功','Index/index');
    }else{
		return $this->error('登录失败');
		
    }
  }
		    public function findPassword() {
		return $this->fetch();
		   }
		    public function phoneLogin() {
		return $this->fetch();
		   }
		   
		 public function article()
    {  if(request()->isPost()){
         $data=[
	'username'=>input('username'),
	'password'=>input('password'),
          ];
		  //dump($data);
      if(db('user')->insert($data)){  //添加功能
	  
	return $this->success('用户添加成功','login');
       }else{
	return $this->error('用户添加失败');
       }}
        return $this->fetch();
	}
}
