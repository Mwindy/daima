<?php
namespace app\admin\controller;
use think\Controller;
class More extends Controller
{
	 public function lst_one()
           {   $id=input('id');
$result=db('member')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
 public function goods_one()
           {   $id=input('id');
$result=db('goods')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
 public function user_one()
           {   $id=input('id');
$result=db('number')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
 public function service_one()
           {   $id=input('id');
$result=db('number')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}

	 public function bbs_one()
           {   $id=input('id');
$result=db('bbs')->find($id);
$vo=db('user')->select();
	    $this->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
public function order_one()
           {   $id=input('id');
$result=db('order')->find($id);
$result1=db('orders')->select();
$vo=db('user')->select();
	    $this->assign('result1',$result1)->assign('result',$result)->assign('vo',$vo);
        return $this->fetch();
}
	 public function order()
	           {   $result=db('order')->select();
			   $result1=db('user')->select();
		    $this->assign('result',$result)->assign('result1',$result1);
	        return $this->fetch();
	}	
}