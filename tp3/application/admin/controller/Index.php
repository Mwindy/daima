<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
	 public function lst()
           {   $result=db('member')->select();
		   $result1=db('user')->select();
	    $this->assign('result',$result)->assign('result1',$result1);
        return $this->fetch();
}
 public function goods()
           {   $result=db('goods')->select();
		   $result1=db('user')->select();
	    $this->assign('result',$result)->assign('result1',$result1);
        return $this->fetch();
}
	 public function user()
           {   $result=db('number')->select();
		   $result1=db('user')->select();
	    $this->assign('result',$result)->assign('result1',$result1);
        return $this->fetch();
}
	
    public function index()
    {		$result=db('user')->select();
	    $this->assign('result',$result);
        return $this->fetch();
	}
	public function service()
	           {   $result=db('number')->select();
			   $result1=db('user')->select();
		    $this->assign('result',$result)->assign('result1',$result1);
	        return $this->fetch();
	}
	public function bbs()
	           {   $result=db('bbs')->select();
			   $result1=db('user')->select();
		    $this->assign('result',$result)->assign('result1',$result1);
	        return $this->fetch();
	}
		 public function order()
	           {   $result=db('order')->select();
			   $result1=db('user')->select();
		    $this->assign('result',$result)->assign('result1',$result1);
	        return $this->fetch();
	}	
}
