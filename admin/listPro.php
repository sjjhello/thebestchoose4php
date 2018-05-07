<?php 
require_once '../include.php';
checkLogined();
$order = isset($_REQUEST['order'])?$_REQUEST['order']:null;
$orderBy = $order?"order by p.".$order:null;
$keywords = isset($_REQUEST['keywords'])?$_REQUEST['keywords']:null;
$where = $keywords?"where p.pName like '%{$keywords}%'":null;
//得到所有商品
$sql = "select p.id,p.pName,p.pTitle,p.pUrl,p.bPrice,p.nPrice,p.isShow,p.address,c.cName from bs_pro as p join bs_category c on p.cId=c.id {$where}";
$totalRows = getResultNum($sql);
$pageSize = 15;
$totalPage = ceil($totalRows/$pageSize);
$page = isset($_REQUEST['page'])?(int)$_REQUEST['page']:1;
if($page<1 || $page==null || !is_numeric($page)){
    $page = 1;
}
if($page>=$totalPage){
    $page = $totalPage;
}
$offset = ($page-1)*$pageSize; 
$sql = "select p.id,p.pName,p.pTitle,p.pUrl,p.bPrice,p.nPrice,p.isShow,p.address,c.cName from bs_pro as p join bs_category c on p.cId=c.id {$where} {$orderBy} limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
//print_r($rows);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="./styles/backstage.css">
<link rel="stylesheet" href="./scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<script src="./scripts/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="./scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
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
				<div id="showDetail"  style="display:none;">

                </div>
				<div class="details">
					<div class="details_operation clearfix">
						<div class="bui_select">
							<input type="submit" value="添&nbsp;&nbsp;加" class="add"
								onclick="addPro()">
						</div>
						
                        <div class="fr">
                            <div class="text">
                                <span>商品价格：</span>
                                <div class="bui_select">
                                    <select name="" id="" class="select" onchange="change(this.value)">
                                        <option>--请选择--</option>
                                        <option value="nPrice asc">由低到高</option>
                                        <option value="nPrice desc">由高到低</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="text">
                                <span>搜索</span>
                                <input id="search" type="text" value="" class="search" onkeypress="search()">
                            </div>
                        </div>
					</div>
					<!--表格-->
					<table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="20%">商品名称</th>
                                <th width="10%">商品分类</th>
                                <th width="10%">是否上架</th>
                                <th width="10%">打折前价格</th>
                                <th width="10%">打折后价格</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $i=1;foreach($rows as $row): ?>

                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check" value=<?php echo $row['id'];?>><label for="c1" class="label"><?php echo $i;?></label></td>
                                <td><?php echo $row['pTitle'];?></td>
                                <td><?php echo $row['cName'];?></td>
                                <td>
                                <?php 
										$show=($row['isShow']==1)?"上架":"下架";
										echo $show;
                                ?>
                                </td>
                                <td><?php echo $row['bPrice'];?>元</td>
                                 <td><?php echo $row['nPrice'];?>元</td>
                                 
                                <td align="center">
                                				<input type="button" value="详情" class="btn" onclick="showDetail(<?php echo $row['id'];?>,'<?php echo $row['pName'];?>')"><input type="button" value="修改" class="btn" onclick="editPro(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn" onclick="delPro(<?php echo $row['id'];?>)">
					                            <div id="showDetail<?php echo $row['id'];?>" style="display:none;">
					                        	<table class="table" cellspacing="0" cellpadding="0">
					                        		<tr>
					                        			<td width="20%" align="right">商品名称</td>
					                        			<td><?php echo $row['pName'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品类别</td>
					                        			<td><?php echo $row['cName'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品链接</td>
					                        			<td><a href='<?php echo $row['pUrl'];?>' target="view_window"><?php echo $row['pUrl'];?></a></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品产地</td>
					                        			<td><?php echo $row['address'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td  width="20%"  align="right">打折前价格</td>
					                        			<td><?php echo $row['bPrice'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td  width="20%"  align="right">打折后价格</td>
					                        			<td><?php echo $row['nPrice'];?></td>
					                        		</tr>

					                        		
					                        		<tr>
					                        			<td width="20%"  align="right">是否上架</td>
					                        			<td>
					                        			<?php 
					                        				$show=($row['isShow']==1)?"上架":"下架";
															echo $show;
					                        			?>
					                        			</td>
					                        		</tr>
					                        	</table>
					                        	<span style="display:block;width:80%; ">
					                        	商品描述<br/>
					                        	<?php echo $row['pTitle'];?>
					                        	</span>
					                        </div>    
                                </td>
                            </tr>
                           <?php $i++;endforeach;?>
                           <?php if($totalRows>$pageSize):?>
							<tr>
							 <td colspan="7"><?php echo showPage($page,$totalPage,"keywords={$keywords}&order={$order}");?></td>
							</tr>
							<?php endif;?>
                        </tbody>
                    </table>
				</div>
				<!--表格-->

			</div>
		</div>
		<div class="menu">
			<?php
                require_once './common/menu.php';
            ?>
		  </div>
	</div>
	<!--左侧列表-->
	<script type="text/javascript">
function showDetail(id,t){
	$("#showDetail"+id).dialog({
		  height:"auto",
	      width: "auto",
	      position: {my: "center", at: "center",  collision:"fit"},
	      modal:false,//是否模式对话框
	      draggable:true,//是否允许拖拽
	      resizable:true,//是否允许拖动
	      title:"商品名称："+t,//对话框标题
	      show:"slide",
	      hide:"explode"
	});
}
	function addPro(){
		window.location='addPro.php';
	}

	function editPro(id){
		window.location='editPro.php?id='+id;
	}

	function delPro(id){
		if(window.confirm("您确认要删除嘛？")){
			window.location='doAdminAction.php?act=delPro&id='+id;
		}
	}

	function search(){
	    if(event.keyCode==13){
		    var val=document.getElementById("search").value;
		    window.location="listPro.php?keywords="+val;
	    }
	}

	function change(val){
		window.location="listPro.php?order="+val;
	}
</script>
</body>

</html>