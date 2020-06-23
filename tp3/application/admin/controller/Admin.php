<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
   
	

public function lst_add()
    {
		$id=input('id');
$result=db('member')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
if(request()->isPost()){
	
 $data=[
	
  'username'=>input('username'),'password'=>input('password'),'truename'=>input('truename'),'city'=>input('city'),'postcode'=>input('postcode'),'cardType'=>input('cardType'),'cardNO'=>input('cardNO'),'tel'=>input('tel'),'email'=>input('email')];
if(db('member')->insert($data)){	
return $this->success('管理员添加成功','index/lst');		
}else{		
return $this->error('管理员添加失败');  }}
        return $this->fetch();
} 

 public function modify()
           {   $id=input('id');
$result=db('member')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
 public function update()
    {if(request()->isPost()){
      $data=[
	
  'truename'=>input('truename'),'city'=>input('city'),'postcode'=>input('postcode'),'cardType'=>input('cardType'),'cardNO'=>input('cardNO'),'tel'=>input('tel'),'email'=>input('email')];
   if(db('member')->where('id',1)->update($data)){ return $this->success('管理员信息修改成功','index/lst');	
}else{
return $this->error('管理员信息修改失败');}    return $this->fetch();
	}
	}
	public function del()
    {   $id=input('id');
	    if($id !=1){
	    if(db('member')->delete($id)){
			return $this->success('管理员删除成功','index/lst');
		}else{
			return $this->error('管理员删除失败');
		}
		}else{
			return $this->error('超级管理员不允许删除');
		}
	} 
}
