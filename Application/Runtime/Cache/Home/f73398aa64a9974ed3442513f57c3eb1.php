<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width,user-scalable=yes" />
 	<title>实验教学中心互动平台</title>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/message.css"/>
 
</head>
<body>
	<div id="Cheader">
		<div class="Ccontainer">
  <div id="header_left">
    
  </div>
  <div id="header_right">
      <div id="login">
        <p><a href="#">学生登录</a> | <a href="#">教师登录</a> | <a href="#">注册</a></p><br/>
        <!-- 判断登陆后        显示下面这行代码 -->
        <p><a href="#">访问旧版</a> | XXX你好！ | <a href="/hzaucomm/index.php/Home/User/index">个人中心</a></p><br/>
      </div>
      <form action="#" method="post" id="sitesearch">
        <input type="text" value="" placeholder="全文搜索" class="search_input"  />
         <!-- <input type="text" value="" class="search_input" onfocus="this.value=(this.value=='全文搜索&hellip;')? '' : this.value ;" /> -->
        <input type="submit" id="search" value="搜索"alt="搜索" />
      </form>
  </div>
</div>

<!--***************登陆框***************-->
<div id="LoginBox">
    <div class="logreg_title">
        登陆<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
            <a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
        </div>
        <div class="row">
            <input type="checkbox" />
            下次自动登录
             &nbsp&nbsp|&nbsp&nbsp
            <a class="reg_link" href="#">注册</a>
        </div>
        <div class="row">
           <a href="javascript:login()" class="okbtn">登陆</a>
        </div>
    </form>    
</div>

<script>
// $(function(){
//      //登录AJAX提示判断
//     $.post('', {
//         username:$("#logName").val(),
//         password:$("#logPwd").val(),
//     },function(text){
//         if(text=="pass"){
//             // alert('pass')
//             window.location.href="/hzaucomm/index.php/Home/Index/index";
//         }else{
//             $("#suggest").html(text);
//         }
//     });
// })
</script>



<!--***************注册框***************-->
<div id="RegisterBox">
    <div class="logreg_title">
         注册<a href="javascript:void(0)" title="关闭窗口" class="close_btn" >×</a>
    </div>
    <form action="" method="post" name="myForm">
        <p class="suggest"></p>
        <div class="row">    
            <input type="text" placeholder="用户名" id="logName" name="username"/>
        </div>
        <div class="row">     
            <input type="password" placeholder="密码" id="logPwd" name="password"/>
        </div>
        <div class="row">
             <input type="password" placeholder="确认密码" id="Repwd" name="repassword"/>
        </div>
        <div class="row">
            <input type="text" id="regcode" placeholder="验证码" name='code' />
            <img src="" alt="Code" id="regcode" onclick="this.src=this.src+'?'+Math.random()">
        </div>
        <div class="regrow">
           <a href="javascript:login()" class="okbtn">注册</a>
        </div>
    </form>    
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
                <a id="nav_main" href="/hzaucomm/index.php/Home/introduction/introduction">平台概况</a>
                <div id="nav_hidden3">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/introduction/introduction">平台概况</a></li>
                    <li><a href="/hzaucomm/index.php/Home/introduction/notice">通知公告</a></li>
                    <li><a href="/hzaucomm/index.php/Home/introduction/connect">联系我们</a></li>
                </ul>
                </div>
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
                      
        </ul>
    </div>
</div>

	</div>

	<div id="Cmain">
		<div class="Ccontainer">
			<div id="main_nav">
			<section>
				<h3>个人中心</h3>
				<ul class="ultop">
					<li><a href="/hzaucomm/index.php/Home/User/index">基本信息</a></li>
					<li><a href="/hzaucomm/index.php/Home/User/application">我的申请</a></li>
					<li><a href="/hzaucomm/index.php/Home/User/message">我的消息</a></li>
				</ul>
			</section>
			</div>
			<div class="rightc">
				<div id="topicCon">
					<div class="mini_nav">
						<span class="mini_title">我的消息</span>
					</div>
					<div class="mesn">
						<div id="comment">
							<div class="sigleconmment">
								<div class="s_m_left">
									<span class="commentor">评论人</span>
									<div class="clr"></div>
									<picture class="replay">回复</picture>
								</div>
								<div class="s_m_right">
								<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
								<span class="comment_time">2017-05-06</span>
								</div>
								<div class="clr"></div>
							</div>
							<div class="sigleconmment">
								<div class="s_m_left">
									<span class="commentor">评论人</span>
									<div class="clr"></div>
									<picture class="replay">回复</picture>
								</div>
								<div class="s_m_right">
								<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
								<span class="comment_time">2017-05-06</span>
								</div>
								<div class="clr"></div>
							</div>
							<div class="sigleconmment">
								<div class="s_m_left">
									<span class="commentor">评论人</span>
									<div class="clr"></div>
									<picture class="replay">回复</picture>
								</div>
								<div class="s_m_right">
								<p class="comment_con">内容克己奉公还u是个好废话use和ifiiu啊是u额发挥啊还是进口的回复给 ua遏房价很高哈手机客户端发给撒额飞机和嘎数据库福嘎搜素的衣服高交会馆啊收到回复吧u呀故事我一个肺结核阿苏对啊是快递发箍牙是的风格卷四地方覅u啊死都反挂闪电分倦色覅</p>
								<span class="comment_time">2017-05-06</span>
								</div>
								<div class="clr"></div>
							</div>
							<div class="clr"></div>
						</div>

					</div>
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