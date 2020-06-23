<?php
namespace app\admin\controller;
use think\Controller;
class Bbs extends Controller
{
	public function bbs_add()
	    {
			$id=input('id');
	$result=db('bbs')->find($id);
	$vo=db('user')->select();
		    $this->assign('result',$result)->assign('vo',$vo);
	if(request()->isPost()){
		
	 $data=[
		
	  'title'=>input('title'),'content'=>input('content'),'INTime'=>input('INTime')];
	if(db('bbs')->insert($data)){	
	return $this->success('公告添加成功','index/bbs');		
	}else{		
	return $this->error('公告添加失败');  }}
	        return $this->fetch();
	} 
	public function modify()
	           {   $id=input('id');
	$result=db('bbs')->find($id);
	$vo=db('user')->select();
		    $this->assign('result',$result)->assign('vo',$vo);
	        return $this->fetch();
	}
	 public function update()
	    {if(request()->isPost()){
	      $data=[
		
	  'title'=>input('title'),'content'=>input('content'),'INTime'=>input('INTime')];
	   if(db('bbs')->where('id',2)->update($data)){ return $this->success('公告信息修改成功','index/bbs');	
	}else{
	return $this->error('公告信息修改失败');}    return $this->fetch();
		}
		}
		public function del()
	    {   $id=input('id');
		    if($id !=1){
		    if(db('bbs')->delete($id)){
				return $this->success('公告删除成功','index/bbs');
			}else{
				return $this->error('公告删除失败');
			}
			}else{
				return $this->error('超级公告不允许删除');
			}
		} 
	}