<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
    <?php
    session_start();
    include_once ('../admin/admin_php/conn.php');
    $ix=0;
    ?>
<link href="shopping.css" rel="stylesheet" />
<script src="demo.js"></script>
</head>

<body>
<form action="car_shop.php" method="post">
<div class="catbox">
	<table id="cartTable">
		<thead>
			<tr>
				<th><label><input class="check-all check" type="checkbox"/>&nbsp;全选</label></th>
				<th>商品</th>
				<th>单价</th>
				<th>数量</th>
				<th>小计</th>
				<th>操作</th>
			</tr>
		</thead>


            <tbody><?php
            $result=mysqli_query($conn,"select * from  cats where urse_id=".$_SESSION['urse_id']);
            $rows_num = mysqli_num_rows($result);
            if ($rows_num>0 ) {
            while ($rows = mysqli_fetch_array($result)) {
                if($rows['cat_sftj']==0){
            $result1 = mysqli_query($conn, "select * from " . $rows['wine_table'] . " where wine_name=" . '"' . $rows['name_wine'] . '"');
            $rows1 = mysqli_fetch_array($result1);

            ?>
            <tr>
                <td class="checkbox"><input class="check-one check" type="checkbox" name="checkbox_shop[]" value="<?= $rows['cat_id'] ?>"/></td>
                <td class="goods"><img src="../admin/image/<?=$rows1['image']?>" alt="" width="230" height="223"/><span "><?=$rows1['wine_name']?></span> </td>
                <td class="price"><?=$rows['price_wine']?></td>
                <td class="count"><span class="reduce">-</span><input class="count-input"  name="wine_shuliang<?=$ix?>" type="text" name="" value="<?=$rows['shuliang']?>"/><span
                            class="add">+</span></td>
                <td class="subtotal" ><?=$rows['shuliang']*$rows['price_wine']?></td>
                <td class="operation"><a href="delect_shop.php?cat_id=<?=$rows['cat_id']?>" ><span class="delete" >删除</span></a></td>
           <script language="JavaScript">
                alert(document.getElementsByName('wine_name0').text());
           </script>
                <input type="hidden" name="wine_name<?=$ix?>" value="<?=$rows1['wine_name']?>"/>
                <input type="hidden" name="wine_price<?=$ix?>" value="<?=$rows['price_wine']?>"/>
                <input type="hidden" name="wine_num<?=$ix?>" value="<?=$rows['shuliang']*$rows['price_wine']?>"/>
                <input type="hidden" name="cat_id<?=$ix?>" value="<?=$rows['cat_id']?>" />
                <input type="hidden" name="wine_table<?=$ix?>" value="<?=$rows1['table_name']?>" />
            </tr>
                <?php

                $ix++;
            }
            }
            ?>
            </tbody>

    </table>

    <div class="foot" id="foot">
        <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;全选</label>
        <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
        <div class="fr closing"><input type="submit" name="submit_shop" value="结算"/> </div>
</form>
        <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
        <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span
                    class="arrow up">︽</span><span class="arrow down">︾</span></div>
        <div class="selected-view">
            <div id="selectedViewList" class="clearfix">
                <div><img src="images/1.jpg"><span>取消选择</span></div>
            </div>
            <span class="arrow">◆<span>◆</span></span>
        </div>
    </div>
    <?php
    }
    ?>

</div>



</body>
</html>