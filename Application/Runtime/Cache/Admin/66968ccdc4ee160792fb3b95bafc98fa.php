<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>新闻通知具体展示</title>
</head>
<body>
	<font color="#777777"><strong>用户名称：</strong></font>
    <table >
        <div class='panel'>
            <thead>
            </thead>
            <div id='p_body'>
                <tr>
                    <td><h2><?php echo ($data["inforname"]); ?></h2></td>
                </tr>
                <tr>
                    <td><?php echo ($data["inforcnt"]); ?></td>
                </tr>
                <tr>
                	<td></td>
                	<td></td>
                	<td><p><?php echo ($data["infortime"]); ?></p></td>
                </tr>
                <tr>
                    <td><a href="/hzaueqt/hzaueqt/index.php/Admin/Index/news"><div id="buttom" ><button>返回</button></div></a></form></td>
                </tr>
            </div>
        </div>
    </table>
</body>
</html>