<?php
    require_once '../include.php';
    $sql = "select id,cName from bs_category order by id asc";
    $rows = fetchAll($sql);
?>
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./index.php">主页</a></li>
                    <li><a href="./productList.php">全部商品</a></li>
                        <?php foreach ($rows as $row):?>
                            <li><a href="productListById.php?id=<?php echo $row['id']?>"><?php echo $row['cName'];?></a></li>
                        <?php endforeach;?>
                    <li><a href="./cartList.php">购物车</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->