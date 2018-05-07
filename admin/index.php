<?php
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="./styles/backstage.css">
</head>

<body>
	<?php 
			require_once './common/header.php';
	?>
	<div class="content clearfix">
		<div class="main">
			<!--右侧内容-->
			<div class="cont">
				<div class="title">后台管理</div>
				<div class="details">
					<div class="details_operation clearfix">
						
							<h3>系统信息</h3>
							<table width="70%" border="1" cellpadding="5" cellspacing="0"
								bgcolor="#cccccc">
								<tr>
									<th>操作系统</th>
									<td><?php echo PHP_OS;?></td>
								</tr>
								<tr>
									<th>Apache版本</th>
									<td><?php echo apache_get_version();?></td>
								</tr>
								<tr>
									<th>PHP版本</th>
									<td><?php echo PHP_VERSION;?></td>
								</tr>
								<tr>
									<th>运行方式</th>
									<td><?php echo PHP_SAPI;?></td>
								</tr>
							</table>
							<h3>组员信息</h3>
							<table width="70%" border="1" cellpadding="5" cellspacing="0"
								bgcolor="#cccccc">
								<tr>
									<th>Team Name</th>
									<td>2Tap</td>
								</tr>
								<tr>
									<th>开发团队</th>
									<td>黄经纬、苏永基</td>
								</tr>
								<tr>
									<th>个人博客</th>
									<td><a href="http://115.29.147.190/wordpress">http://www.sufuring.top</a></td>
								</tr>
								
							</table>
						

					</div>
					<!--表格-->

				</div>
			</div>
		</div>
		<!--左侧列表-->
		<div class="menu">
			<?php 
			require_once './common/menu.php';
			?>
		</div>

	</div>
</body>
</html>