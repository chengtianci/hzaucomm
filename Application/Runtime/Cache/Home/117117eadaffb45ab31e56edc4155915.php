<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width,user-scalable=yes" />
 	<title>实验教学中心互动平台</title>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/showitem.css"/>

</head>
<body>
	<div id="Cheader">
		<div class="Ccontainer">
  <div id="header_left">
    
  </div>
  <div id="header_right">
      <div id="login">
        <p><a href="#">学生登录</a> | <a href="#">教师登录</a> | <a href="#">注册</a></p><br/>
      </div>
      <form action="#" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索"alt="搜索" />
      </form>
  </div>
</div>
	</div>

	<div id="Cnav">
		<div class="Ccontainer">
    <div id="nav">
        <ul id="nav_mul">
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/index/main">首页</a>
            </li>
            
            <li class="nav_first">
                <a id="nav_course" href="/hzaucomm/index.php/Home/course/course">学科交流</a>
                <div id="nav_hidden1">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/course/course?">实践实习类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">专业基础类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">作物生产类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">植物保护类</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course?">创新实验课程</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
                <a id="nav_source" href="/hzaucomm/index.php/Home/source/source">资源共享</a>
                <div id="nav_hidden2">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/source/picture">图片</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/document">文件</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/video">视频</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/zip">其他</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
               <a id="nav_comp" id="nav_comp" href="/hzaucomm/index.php/Home/comp/comp">综合交流</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/source/pic_update">资源上传</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/introduction/introduction">关于我们</a>
                <div id="nav_hidden3">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/introduction/introduction">平台简介</a></li>
                    <li><a href="/hzaucomm/index.php/Home/introduction/notice">通知公告</a></li>
                </ul>
                </div>
            </li>            
        </ul>
    </div>
</div>

	</div>

	<div id="Cmain">
		<div class="Ccontainer">
			<div id="main_nav">
				<section>
					<h3>综合交流</h3>
					<ul class="ultop">
						<!-- <li><a href="/hzaucomm/index.php/Home/course/course">实践实习类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">专业基础类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">作物生产类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">植物保护类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">创新实验课程</a></li> -->
					</ul>
				</section>
			</div>
			<div class="rightc">
				<div id="theme">
					<span class="theme_contant">发布人的主题从大山深处穿越而来记载着一个个美丽的一个个美丽的传说传说能营造出绚丽</span>
					<sapn class="theme_des">主题的简述：浪漫的五月总能营造出绚丽多姿的色彩，总能姿意 出淡雅清新的情愫。五月风，越过高山的坎坎坷坷，拂去了岁月的 尘埃，五月的风，如诗人的笔，如画家的五彩，将 绿色覆盖每一片荒凉，让大地换上了新装。五月风，洋溢着笑脸， 灿烂着每一朵花儿，用希望的手叩响了沉睡的天空 ，吹散了糜烂，吹走了腐味，带来了清晰。五月风，轻轻地从耳边 吹过，柔柔的，软软的，象一朵云彩轻拂着我的脸 。她是从春天的阳光中走来，从大山深处穿越而来，带着花草的清 香，带着放飞的梦想，一路欢歌，把大地点缀得如 诗如画。五月风，记载着一个个美丽的传说，每一个传说都化做一 片云彩，弥漫在整个天空。</sapn>
					<div class="clr"></div>
					<span class="theme_publisher">来自XXXXX</span>
					<div class="clr"></div>
				</div>
				<div id="comment">
					<div class="total">
						XXX个回答
					</div>
					<div class="sigleconmment">
						<div class="s_m_left">
							<span class="commentor">评论人</span>
							<div class="clr"></div>
							<picture class="replay">回复</picture>
							<a class="praise" href=""><picture></picture>赞</a>
						</div>
						<div class="s_m_right">
						<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
						<span class="comment_to">回复给：XXXXXX</span>
						<span class="comment_time">2017-05-06</span>
						</div>
						<div class="clr"></div>
					</div>
					<div class="sigleconmment">
						<div class="s_m_left">
							<span class="commentor">评论人</span>
							<div class="clr"></div>
							<picture class="replay">回复</picture>
							<a class="praise" href=""><picture></picture>赞</a>
						</div>
						<div class="s_m_right">
						<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
						<span class="comment_to">回复给：XXXXXX</span>
						<span class="comment_time">2017-05-06</span>
						</div>
						<div class="clr"></div>
					</div>
					<div class="sigleconmment">
						<div class="s_m_left">
							<span class="commentor">评论人</span>
							<div class="clr"></div>
							<picture class="replay">回复</picture>
							<a class="praise" href=""><picture></picture>赞</a>
						</div>
						<div class="s_m_right">
						<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
						<span class="comment_to">回复给：XXXXXX</span>
						<span class="comment_time">2017-05-06</span>
						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="Chidden">
		<div class="re_frame">
			<form id="reply_h">
				<div class="con_input">
				<textarea id="textarea" class='input' type="text" name="title" placeholder="回复给：XXXXXX"></textarea> 
				</div>
				<div class="clr"></div>
				<div class="con_input"><input id='submit' type="submit" value="回复"></div>
				<div class="clr"></div>

			</form>
		</div>
	</div>
	<div class="clr"></div>
	</div>
	<div id="Cfooter">
		<div id="con">
<div class="Ccontainer">
  <div class="footbox">
    <h2>快速导航</h2>
    <ul>
      <li><a href="#">&raquo; 首页</a></li>
      <li><a href="#">&raquo; 网站地图</a></li>
      <li><a href="#">&raquo; 互动平台</a></li>
      <li><a href="#">&raquo; 访问说明</a></li>
    </ul>
  </div>
  <div class="footbox">
    <h2>联系方式</h2>
    <address>
    湖北省武汉市洪山区狮子山街一号<br />
    中国·湖北·武汉<br />
    430070<br />
    Tel: 027-87499963<br />
    </address>
  </div>
  <div class="foot-bottom">
    <p><span>技术支持：<a href="http://www.52feidian.com/">华中农业大学 沸点工作室</a></span>
      CopyRight©2017  华中农业大学作物学实验教学中心 <a href="">管理</a>
    </p>
  </div>
</div>
</div>
	</div>
		<script type="text/javascript" src="/hzaucomm/Public/face/js/showitem.js"></script>
		<script type="text/javascript">
			document.getElementById("submit").onclick = function(){
				Form.style.display = "none";
				document.getElementById('Cheader').style.filter = ' ';
				document.getElementById('Cnav').style.filter    = 'blur(0px) ';
				document.getElementById('Cmain').style.filter   = 'blur(0px) ';
				document.getElementById('Cfooter').style.filter = 'blur(0px) ';
			// $.ajax({  
   //              type: "POST",  
   //              url:"/hzaucomm/index.php/Home/.......",  
   //              data:{'username':$("#username").val(),
   //              	  'password':$("#password").val()},// 序列化表单值  
   //              async: true,  
   //              error: function(request) {  
   //                  alert(request.readyState + ' ' +request.status );  
   //              },  
   //              success: function(data) {  
			// 		if(data['flag'] == 1){
			// 			window.location.href="/hzaucomm/index.php/Home/Index/index";
			// 		}else {
   //                  	alert(data['message']);
			// 		}
			// 	}  
   //          }); 
		}
		</script>
</body>
</html>