<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	
 	<meta name="viewport" content="width=device-width,user-scalable=yes" />
 	<title>实验教学中心互动平台</title>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/themeluanch.css"/>

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
					<h3>学科交流</h3>
					<ul class="ultop">
						<li><a href="/hzaucomm/index.php/Home/course/course">实践实习类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">专业基础类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">作物生产类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">植物保护类</a></li>
						<li><a href="/hzaucomm/index.php/Home/course/course">创新实验课程</a></li>
					</ul>
				</section>
			</div>
			<div class="rightc">
				<div id="topicCon">
					<div class="mini_nav">
						<span class="mini_title">课程发布</span>
					</div>
					<div class="luanch">
						<div class="form">
							<div class="con_input"><sapn class="hint">课程：</sapn>
							<select style="height: 35px;width: 120px;margin-top: 8px;">
								<option value="">实践实习类</option>
								<option value="">专业基础类</option>
								<option value="">作物生产类</option>
								<option value="">植物保护类</option>
								<option value="">创新实验课程</option>	
							</select></div><div class="clr"></div>
							<div class="con_input"><sapn class="hint">标题：</sapn><input class='input' type="text" name="descripe"></div><div class="clr"></div>
							
							<div class="con_input"><sapn class="hint">简述：</sapn> </div>
							<div class="con_input">
							<div class="clr"></div>
							<div class="textinput">
								<div id="editor">
								</div>
							</div><div class="clr"></div>
							</div><div class="clr"></div>
							<div class="con_input"><input id='submit' type="submit" value="提交"></div>
						</div>
					</div>
				</div>	
			</div>		
			<div class="hottpc">
					<div id="h_t_ti">热门课程话题</div>
					<ul id="h_t_cont">
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num_c">1</span><a class="h_t_con_ex_tit" href="">说为何啵啵猝死家中 </a><span class="h_t_con_ex_heat">999</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num_c">2</span><a class="h_t_con_ex_tit" href="">天宇为何无故。</a><span class="h_t_con_ex_heat">99</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num_c">3</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">80</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">4</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">70</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">5</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">60</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">6</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">50</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">7</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">40</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">8</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">30</span></li>
						<li  class="h_t_con_ex"><span class="h_t_con_ex_num">9</span><a class="h_t_con_ex_tit" href="">biaoti </a><span class="h_t_con_ex_heat">25</span></li>

						
					</ul>
			</div>	
			<div class="clr"></div>
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
    <script type="text/javascript" src="/hzaucomm/Public/Js/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E( document.getElementById('editor') );
        editor.create();
    </script>
</body>
</html>