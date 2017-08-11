<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>华中农业大学实验教学中心互动平台</title>

  	<link rel="shortcut icon" href="/hzaucomm/back.ico" type="image/x-icon" />
	  <!-- Bootstrap -->
    <link href="/hzaucomm/Public/back/include/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 图标引入 -->
    <link href="/hzaucomm/Public/back/include/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/hzaucomm/Public/back/include/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/hzaucomm/Public/back/css/custom.min.css" rel="stylesheet">
    <link href="/hzaucomm/Public/back/css/public.css" rel="stylesheet" >
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!--************************************************* 左导航 *************************************************-->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
        
            <div class="navbar nav_title" style="border: 0;">
  <a href="#" class="site_title"> <i class="fa fa-fire"></i> <span>Teaching Admin</span></a>
</div>

<div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="/hzaucomm/Public/back/images/user.png" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>Mr.Tian</h2>
  </div>
</div>
              <br />

          
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>2017/5/16</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> 首页管理 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaucomm/index.php/Admin/Index/index">页面管理</a></li>              
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> 平台概况 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaucomm/index.php/Admin/Introduction/introduction">平台概况</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Introduction/notice">通知公告</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Introduction/connect">联系我们</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> 学科交流 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaucomm/index.php/Admin/Course/course">实践学习类</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Course/course">专业基础类</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Course/course">作物生产类</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Course/course">植物保护类</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Course/course">创新实验课程</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-mortar-board"></i> 资源共享 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          	<li><a href="/hzaucomm/index.php/Admin/Source/picture">图片</a></li>
          	<li><a href="/hzaucomm/index.php/Admin/Source/document">文件</a></li>
        	  <li><a href="/hzaucomm/index.php/Admin/Source/video">视频</a></li>
        	  <li><a href="/hzaucomm/index.php/Admin/Source/zip">其他</a></li>
      	</ul>
      <li><a><i class="fa fa-share-alt-square"></i>综合交流 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="/hzaucomm/index.php/Admin/Comp/comp">综合交流</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-flask"></i>资源上传<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaucomm/index.php/Admin/Source/pic_update">图片</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Source/doc_update">文件</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Source/vid_update">视频</a></li>
          <li><a href="/hzaucomm/index.php/Admin/Source/zip_update">其他</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>用户管理<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="/hzaucomm/index.php/Admin/User/index">管理</a></li>
          <li><a href="/hzaucomm/index.php/Admin/User/authority">权限设置</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

            
             <div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="待开发">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="/hzaucomm/index.php/Admin/Index/index">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>

          </div>
        </div>

        <!--************************************************* 顶导航 *************************************************-->
        <div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="/hzaucomm/Public/back/images/user.png" alt="">Mr.Tian
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a data-toggle="modal" data-target="#MyEdit"> Edit Me</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">待开发</span>
                <span>Settings</span>
              </a>
            </li>

            <li><a href="/hzaucomm/index.php/Admin/Index/index"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

       
      </ul>
    </nav>
  </div>
</div>

<!--  Edit模态框 -->
<div class="modal fade" id="MyEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          Edit Message
        </h4>
      </div>
      <div class="modal-body">
        
        <form action="" method="post">
          Name：<input type="text"><br>
          Password: <input type="text">
          <br><input type="file" name="gallery_file">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>
      

        <!--************************************************* 右内容 *************************************************-->
        <div class="right_col" role="main">

          <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>平台公告 <small>Platform announcement</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="panel_toolbox_li"><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                  <li class="panel_toolbox_li"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th style="width:15%;">Date</th>
                    <th style="width:20%;">operation</th>
                  </tr>
                  </thead>


                  <tbody>
                  <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0) { ?>
                    <tr>
                      <td><a href="/hzaucomm/index.php/Admin/Introduction/fictitious_show1_update/id/<?php echo ($vo["id"]); ?>/by/1"><?php echo ($vo["r_name"]); ?></a></td>
                      <td><?php echo ($vo["r_time"]); ?></td>
                      <td>
                        <a href="/hzaucomm/index.php/Admin/Introduction/fictitious_show1_update/id/<?php echo ($vo["id"]); ?>/by/1" >Edit <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/hzaucomm/index.php/Admin/Introduction/creation_show1_delete/id/<?php echo ($vo["id"]); ?>/ta/1" >Delete <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                      <td><a href="/hzaucomm/index.php/Admin/Introduction/fictitious_show1_update/id/<?php echo ($vo["id"]); ?>/by/1"><?php echo ($vo["r_name"]); ?></a></td>
                      <td><?php echo ($vo["r_time"]); ?></td>
                      <td>
                        <a href="/hzaucomm/index.php/Admin/Introduction/fictitious_show1_update/id/<?php echo ($vo["id"]); ?>/by/1" >Edit <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;<a href="/hzaucomm/index.php/Admin/Introduction/creation_show1_delete/id/<?php echo ($vo["id"]); ?>/ta/1" >Delete <i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <?php } endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table>
                <br><br>
                <div  data-toggle="modal" data-target="#myModal" class="gallery_add">添加</div>
              </div>
            </div>
          </div>

          <!-- 模态框（Modal）添加 -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    Educational Reform
                  </h4>
                </div>
                <div class="modal-body">

                  <input type="text" id="idInfor" value="<?php echo ($data["id"]); ?>" hidden>
                  <input type="text" class="gallery_title" name="gallery_title" id="gallery_title" placeholder="Fill in the title, please">
                  <script id='container' style="height:350px;" name='content' type="text/plain">请输入详细内容</script>
                  <script src="/hzaucomm/Public/Js/jquery-3.1.1.min.js"></script>
                  <!--配置文件-->
                  <script type="text/javascript" src="/hzaucomm/Public/Ueditor/ueditor.config.js">
                  </script>
                  <!--编译器源码文件-->
                  <script type="text/javascript" src="/hzaucomm/Public/Ueditor/ueditor.all.js">
                  </script>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" id="saveContent" class="btn btn-primary">Submit</button>
                </div>
                <!--实例化编译器-->
                <script type="text/javascript">
                    $(function () {
                        var ue=UE.getEditor ('container');
                        $('#saveContent').click(function () {
                            var html = ue.getContent();
                            var param = {
                                gallery_title: $('#gallery_title').val(),
                                content:html
                            };
                            $.ajax({
                                url: '/hzaucomm/index.php/Admin/Introduction/subInfor/at/15',
                                type: 'POST',
                                dataType: 'json',
                                data: param,
                                success: function(data){
                                    console.log(data);
                                    window.location.href="/hzaucomm/index.php/Admin/Introduction/fictitious_show1";
                                },
                                error: function(xhr){
                                    alert("添加失败");
                                    console.log(xhr);
                                }
                            });
                        });
                    });
                </script><br>
              </div>
            </div>
          </div>
        </div>
        
            <!--************************************************* 底部版权 *************************************************-->
            <footer id="footer">
    <div class="pull-right">
		CopyRight©2017 <a href="/hzaucomm/index.php/Home/Index/index.html" target="_blank" title="华中农业大学作物学实验教学中心">华中农业大学作物学实验教学中心</a> <a href="http://www.52feidian.com/" title="华中农业大学 沸点工作室" target="_blank">华中农业大学 沸点工作室</a>
	</div>
	<div class="clearfix"></div>    
</footer>

    </div>

    <!--************************************************* publc JS *************************************************-->
     <!-- jQuery -->
<script src="/hzaucomm/Public/back/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/hzaucomm/Public/back/include/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/hzaucomm/Public/back/js/custom.min.js"></script>



    <!-- <script src="/hzaucomm/Public/back/include/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="/hzaucomm/Public/back/include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>