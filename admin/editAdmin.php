<?php
require_once '../include.php';
$id = $_REQUEST['id'];
$sql = "select id,username,password,email from imooc_admin where id='{$id}'";
$row = fetchOne($sql);
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
				<h3>编辑管理员</h3>
					<div class="details_operation clearfix">
						<form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>"
							method="post">
							<table width="70%" border="1" cellpadding="5" cellspacing="0"
								bgcolor="#cccccc">
								<tr>
									<td align="right">管理员名称</td>
									<td><input type="text" name="username"
										value="<?php echo $row['username'];?>" /></td>
								</tr>
								<tr>
									<td align="right">管理员密码</td>
									<td><input type="password" name="password"
										value="<?php echo $row['password'];?>" /></td>
								</tr>
								<tr>
									<td align="right">管理员邮箱</td>
									<td><input type="text" name="email"
										value="<?php echo $row['email'];?>" /></td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" value="编辑管理员" /></td>
								</tr>

							</table>
						</form>

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