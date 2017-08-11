<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
 	<title>实验教学中心互动平台</title>
 		<link type="text/css" rel="stylesheet" href="/hzaucomm/Public/face/css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="/hzaucomm/Public/face/css/flexslider.css" />
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/public.css"/>
	<link rel="stylesheet" href="/hzaucomm/Public/face/css/source.css"/>
</head>
<body>
	<div id="Cheader">
		<div class="Ccontainer">
  <div id="header_left">
    <a href="/hzaucomm/index.php/home/Index/index.html"><h1>华中农业大学作物学实验教学中心<h2>互动平台</h2></h1></a>
    <p>     Teaching Center of Crop Science Experiment | Plat of Communication</p>
  </div>
  <div id="header_right">
      <div id="login">
        <p><a href="#">学生登录</a> | <a href="#">教师登录</a></p><br/>
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
                <a id="nav_main" href="/hzaucomm/index.php/Home/index/main.html">首页</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/introduction/introduction.html">平台简介</a>
            </li>
            <li class="nav_first">
                <a id="nav_course" href="/hzaucomm/index.php/Home/course/course.html">学科交流平台</a>
                <div id="nav_hidden">
                <ul >
                    <li><a href="/hzaucomm/index.php/Home/course/course.html?">course one</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course.html?">course two</a></li>
                    <li><a href="/hzaucomm/index.php/Home/course/course.html?">course three</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
                <a id="nav_source" href="/hzaucomm/index.php/Home/source/source.html">资源共享平台</a>
                <div id="nav_hidden">
                <ul >
                    <li><a href="">picture</a></li>
                    <li><a href="/hzaucomm/index.php/Home/source/document.html">document</a></li>
                    <li><a href="">video</a></li>
                    <li><a href="">zip</a></li>
                </ul>
                </div>
            </li>
            <li class="nav_first">
               <a id="nav_comp" id="nav_comp" href="/hzaucomm/index.php/Home/comp/comp.html">综合交流平台</a>
            </li>
            <li class="nav_first">
                <a id="nav_main" href="/hzaucomm/index.php/Home/about/about.html">关于我们</a>
            </li>             
        </ul>
    </div>
</div>

	</div>

	<div id="Cmain">
		<div id="content">
			<div id="Cright">
				<div class="minihead">
					<h3 class="m_h_title"><a href="">资源交流</a></h3><!-- <span class="m_h_more"><a href="">更多>></a></span> -->
				</div>

				<div id="cr_w">
					<div><h3  class="cr_mi_ti"><a href="">文档资源</a></h3></div>
					<div class="clr"></div>
					<ul>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>__	PUBLIC__/face/js/main.js</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
					</ul>	
				</div>
								<div id="cr_p">
					<div><h3  class="cr_mi_ti"><a href="">图片资源</a></h3></div>
					<div class="container">
					 	<section class="topspace blackshadow bg-white">   
							<div class="flexslider">
					          <ul class="slides">
					              <li><img src="/hzaucomm/Public/face/images/slider/lrgimg4.jpg" alt="" />
								  <div style="position: absolute; top:75px; left:45px;; width:70%; height:400px;">
									  <div class="slide_content_left"><h2>Cya, Mary!</h2></div>
									  <div class="slide_desc_left">Hamburg, Germany</div>
								  </div>
								  </li>
								  <li><img src="/hzaucomm/Public/face/images/slider//lrgimg5.jpg" alt="" />
									  <div class="slide_content_right"><h2>Harbour buildings </h2></div>
									  <div class="slide_desc_right">Hamburg,Germany</div>
								  </li>
					              <li><img src="/hzaucomm/Public/face/images/slider//lrgimg2.jpg" alt="" />
									  <div class="slide_content_left"><h2>Osaka  Airport</h2></div>
									  <div class="slide_desc_left">Osaka, Japan</div>
								  </li>
					              <li><img src="/hzaucomm/Public/face/images/slider//lrgimg6.jpg" alt="" />
									  <div class="slide_content_right"><h2>Piha, New Zealand</h2></div>
									  <div class="slide_desc_right">Piha, New Zealand </div>
								  </li>
					          </ul>
						    </div>
						</section>
					</div>
				</div> 
				<div id="cr_v">
					<div><h3  class="cr_mi_ti"><a href="">视频资源</a></h3></div>
					<div class="clr"></div>
					<ul>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题综合交流区的第一个主题标题综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题综合交流区的第一个主题标题综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题综合交流区的第一个主题标题综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题综合交流区的第一个主题标题综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
					</ul>	
				</div>
				<div id="cr_r">
					<div><h3  class="cr_mi_ti"><a href="">相关压缩包</a></h3></div>
					<div class="clr"></div>
					<ul>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题综合交流区的第一个主题标题综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>
						<li class="c_c_ex"><a class="c_c_e_title" href=""><div class="point"></div>综合交流区的第一个主题标题</a><span class="c_c_ex_time">03-04</span></li>		
					</ul>	
				</div>	
				<div class="clr"></div>
			</div>
			</div>
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
	<script src="/hzaucomm/Public/public/js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/jquery.min.js"></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/hzaucomm/Public/face/js/custom.js"></script> 
</body>
</html>