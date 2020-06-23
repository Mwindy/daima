<?php
namespace app\admin\controller;
use think\Controller;
class Goods extends Controller
{
	public function goods_add()
	    {
			$id=input('id');
	$result=db('goods')->find($id);
	$vo=db('user')->select();
		    $this->assign('result',$result)->assign('vo',$vo);
	if(request()->isPost()){
		
	 $data=[
		
	  'goodsname'=>input('goodsname'),'picture'=>input('picture'),'introduce'=>input('introduce'),'price'=>input('price'),'nowPrice'=>input('nowPrice')];
	if(db('goods')->insert($data)){	
	return $this->success('商品添加成功','index/goods');		
	}else{		
	return $this->error('商品添加失败');  }}
	        return $this->fetch();
	} 
	public function modify()
	           {   $id=input('id');
	$result=db('goods')->find($id);
	$vo=db('user')->select();
		    $this->assign('result',$result)->assign('vo',$vo);
	        return $this->fetch();
	}
	 public function update()
	    {if(request()->isPost()){
	      $data=[
		
	  'goodsname'=>input('goodsname'),'picture'=>input('picture'),'introduce'=>input('introduce'),'price'=>input('price'),'nowPrice'=>input('nowPrice')];
	   if(db('goods')->where('id',10)->update($data)){ return $this->success('商品信息修改成功','index/goods');	
	}else{
	return $this->error('商品信息修改失败');}    return $this->fetch();
		}
		}
		public function del()
	    {   $id=input('id');
		    if($id !=1){
		    if(db('goods')->delete($id)){
				return $this->success('商品删除成功','index/goods');
			}else{
				return $this->error('商品删除失败');
			}
			}else{
				return $this->error('超级商品不允许删除');
			}
		} 
	}
	