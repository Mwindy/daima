<?php
namespace app\index\controller;
use Think\Upload;
use think\Controller;
use think\Request;
use think\Session;

class Order extends Controller {
    public function index(){
		$sf=db('user')->select();
        // $this -> assign('UNAME',Session::get('UNAME'));
        // $where=array();
        // $key=input('key');
        // $this->assign('key',$key);
        // if($key!=''){
        //     $where['o.id']=array('like',"%$key%");
        // }
        // $where['o.uid']=Session::get('UID');
        // $user = db("Orderes o");
        // $num = $user->field('count(*) count')->where($where) -> find();
        // $total = $num["count"];
		$useres=db('orderes')->select();
        // $data = $user->field('o.*,name as uname,u.address,u.realname,u.tel,name')
        //     ->join('users u','u.id=o.uid','left')
        //     ->join('goods g','g.id=o.gid','left')
        //     ->where($where)->paginate(5);
        $this -> assign('title',"订单管理");
        // $this -> assign('user',$data);
		$this->assign('useres',$useres);
		$this->assign('sf',$sf);
        return $this->fetch();
    }

    //收货
    public function upstatus(){
        $uid = $_GET["uid"];
        $where['id']=$uid;
        $data['status']=3;
        $data['receive_time']=date("Y-m-d H:i:s",time());
        $db = db("Orderes");
        $res = $db ->where($where)-> update($data);
        if($res){
            echo 1;
            return;
        }
        echo 0;
    }

    public function evaluate(){
		$sf=db('user')->select();
		$useres=db('orderes')->select();
       //  $this -> assign('UNAME',Session::get('UNAME'));
       //  $where=array();
       //  $key=input('key');
       //  $this->assign('key',$key);
       //  if($key!=''){
       //      $where['o.id']=array('like',"%$key%");
       //  }
       //  $where['o.uid']=Session::get('UID');
       //  $user = db("Orderes o");
       //  $num = $user->field('count(*) count')->where($where) -> find();
       //  $total = $num["count"];
       
       //  $data = $user->field('o.*,u.name as uname,u.address,u.realname,u.tel,g.name')
       //      ->join('user u','u.id=o.uid','left')
       //      ->join('goods g','g.id=o.gid','left')
       //      ->where($where)->paginate(5);
        $this -> assign("title","订单管理");
		$this->assign('useres',$useres);
		$this->assign('sf',$sf);
        // $this -> assign("user",$data);
        return $this->fetch();
    }
		public function del(){
			  $id=input('id');
			    if($id !=1){
			    if(db('orderes')->delete($id)){
					return $this->success('评论删除成功','index/evaluate');
				}else{
					return $this->error('评论删除失败');
				}
				}else{
					return $this->error('超级公告不允许删除');
				}
			}

    //添加评论
    public function addEvaluate(){
        $this -> assign('UNAME',Session::get('UNAME'));
        $user = db("Orderes");
        if(Request::instance()->isPost()){
            $id=input('post.id');
            $where['id']=$id;
            $data['evaluate']=input('evaluate');
            $data['status']=4;
            $res = $user ->where($where)-> update($data);
            if($res){
               $this->success('评价成功',url('Order/index'));
            }else{

               $this->error('评价失败');
            }
        }else{
            $where['id']=input('id');
            $data = $user ->where($where)->find();
            $this -> assign("title",'添加评论');
            $this -> assign("data",$data);
            return $this->fetch();
        }

    }

}