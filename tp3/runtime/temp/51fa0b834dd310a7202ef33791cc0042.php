<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\phpStudy\WWW\tp5\public/../application/index\view\article\article.html";i:1575428766;s:61:"D:\phpStudy\WWW\tp5\application\index\view\common\header.html";i:1575428766;s:60:"D:\phpStudy\WWW\tp5\application\index\view\common\right.html";i:1575428766;s:61:"D:\phpStudy\WWW\tp5\application\index\view\common\footer.html";i:1575428766;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>文章模块</title>
        <meta name="keywords" content="ThinkPHP" />
        <meta name="description" content="ThinkPHP" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link  href="../../../../public/static/index/css/lady.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript"  src="../../../../public/static/index/js/ismobile.js"></script>
    </head>

    <body>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ThinkPHP</title>
        <meta name="keywords" content="ThinkPHP" />
        <meta name="description" content="ThinkPHP" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="http://localhost:9096/tp5/public/static/index/css/lady.css" type="text/css" rel="stylesheet" />
		<script  type="text/javascript" src="http://localhost:9096/tp5/public/static/index/js/ismobile.js"></script>
    </head>

    <body>

        <div class="ladytop">
            <div class="nav">
                <div class="left"><a href="/jiehun/"><img  src="http://localhost:9096/tp5/public/static/index/images/hunshang.png" alt="wed114婚尚"></a></div>
                <div class="right">
                <div class="box">
        
					                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): ?>
                 <a href="<?php echo url('Cate/cate',array('id'=>$vo['id'])); ?>"  rel="dropmenu209"><?php echo $vo['catename']; ?></a>  
                 <?php endforeach; endif; else: echo "" ;endif; ?>
					
                 </div>
                </div>
            </div>
        </div>

        <div class="hotmenu">
            <div class="con">热门标签：<a href='/jiehun/qiwenqushi/'>奇闻趣事</a> <a href='/jiehun/shenghuomiaozhao/'>生活妙招</a> <a href='/jiehun/xingzuo/'>星座</a> <a href='/jiehun/qinzi/'>亲子</a> <a href='/jiehun/qiche/'>汽车</a> <a href='/jiehun/chongwubaike/'>宠物百科</a> <a href='/jiehun/jiaji/'>家居</a> </div>
        </div>
</body>
</html>
 

        <!--顶部通栏-->
        <script src='http://localhost:9096/blog/public/static/index//jiehun/goto/my-65547.js' language='javascript'></script>
<div class="position"><a href="http://www.wed114.cn">主页</a> > <a href=''>生活</a> >  </div>

    <div class="overall">
            <div class="left">
           <div class="scrap">
           <h1><?php echo $articles['title']; ?></h1>
          <div class="spread">
           <span class="writor">发布时间：<?php echo $articles['time']; ?></span>
          <span class="writor">编辑：<?php echo $articles['author']; ?></span>
   <span class="writor">标签：<a href='/jiehun/z97712.html'><?php echo $articles['keywords']; ?></a></span>
   <span class="writor">热度：<?php echo $articles['click']; ?>
   <script src="/jiehun/plus/count.php?view=yes&aid=156214&mid=55" type='text/javascript' language="javascript"></script></span> </div>  </div>            
               <!--百度分享-->
                <script src='/jiehun/goto/my-65542.js' language='javascript'></script>
                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $articles['desc']; ?></p>
                    <span class="btn arr-right"></span>
                </div>
                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>
                <div class="substance">               
                <p style="text-indent:30px;"><img src="http://localhost:9096/tp5/public/static/index/images<?php echo $articles['pic']; ?>" alt="<?php echo $articles['title']; ?>" style="float:left; margin-right:20px;"/><?php echo $articles['content']; ?></p><p></p> </div>



                <div class="biaoqian">
                   
                </div>

            </div>

            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ThinkPHP</title>
        <meta name="keywords" content="ThinkPHP" />
        <meta name="description" content="ThinkPHP" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="http://localhost:9096/blog/public/static/index/css/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='http://localhost:9096/blog/public/static/index/js/ismobile.js'></script>
    </head>

<body>

<div class="right">
                <!--右侧各种广告-->
                <!--猜你喜欢-->
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a data-pos="0" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" target="_blank" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" class="hm-t-img-title" style="visibility: visible;"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="1" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" target="_blank" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" class="hm-t-img-title" style="visibility: visible;"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="2" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" target="_blank" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" class="hm-t-img-title" style="visibility: visible;"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="3" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" target="_blank" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" class="hm-t-img-title" style="visibility: visible;"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" target="_blank" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" data-pos="0"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" target="_blank" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" data-pos="1"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" target="_blank" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" data-pos="2"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" target="_blank" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" data-pos="3"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>

<div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="">              <input type="hidden" value="10711555151249188672" name="s">              <input type="hidden" value="1" name="entry">                                              <input type="hidden" value="gbk" name="ie">                                                          <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="q" autocomplete="off" style="line-height: 30px; width:220px;">              <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       </form>      </div>                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">              <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>          </div>                  </div>                           </div></div>

<div style="height:15px"></div>


                
            </div>
</body>
</html>

    
</div>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<div class="footerd">
            <ul>
                <li>Copyright &#169; 2008-2015  all rights reserved 版权所有</li> 
            </ul>
        </div>
</body>
</html>


    </body>
</html>