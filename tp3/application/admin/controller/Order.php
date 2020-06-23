<?php
namespace app\admin\controller;
use think\Controller;
class Order extends Controller
{
	public function modify()
	           {   $id=input('id');
	$result=db('order')->find($id);
	$vo=db('user')->select();
		    $this->assign('result',$result)->assign('vo',$vo);
	        return $this->fetch();
	}
	 public function update()
	    {if(request()->isPost()){
	      $data=[
		
	  'truename'=>input('truename'),'address'=>input('address'),'postcode'=>input('postcode'),'tel'=>input('tel')];
	   if(db('order')->where('id',10001)->update($data)){ return $this->success('订单信息修改成功','index/order');	
	}else{
	return $this->error('订单信息修改失败');}    return $this->fetch();
		}
		}
		public function del()
	    {   $id=input('id');
		    if($id !=1){
		    if(db('order')->delete($id)){
				return $this->success('订单删除成功','index/order');
			}else{
				return $this->error('订单删除失败');
			}
			}else{
				return $this->error('超级订单不允许删除');
			}
		} 
	}
	