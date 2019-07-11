<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/4
 * Time: 16:25
 */


?>
<script language="javascript">

    function sure(){
        if(confirm("您即将执行form表单，确定吗？")){
            alert("即将执行form表单中request.asp的内容");
            return true;
        }
        else{
            alert("中止了form表单，将不执行request.asp！");
            return false;
        }
    }

</script>
<form action="dingdan_shop.php" method="post">
<div align="center">
<table width="400">
    <caption align="top">配送信息:</caption>
    <tr><td >收货人：</td><td><input type="text" name="shr_shop"> </td></tr>
    <tr><td >性别：</td><td><select name="sex_shop"><option>男</option><option>女</option></select></td></tr>
    <tr><td >地址：</td><td><input type="text" name="address_shop"></td></tr>
    <tr><td >电话：</td><td><input type="text" name="tel_shop"></td></tr>
    <tr><td>配送方式：</td><td><select name="psfs_shop"><option>韵达</option><option>中通</option><option>邮政</option></select></td></tr>
    <tr><td>支付方式：</td><td><select name="zffs_shop"><option>支付宝</option><option>微信</option><option>银联</option></select></td></tr>
</table>
<?php
if(isset($_POST['submit_shop'])){
    ?>
    <table width="400" a>
    <caption align="top">商品清单:</caption>
    <tr><td>产品名称</td><td>单价</td><td>数量</td><td>总价</td></tr>
        <?php
        $sum=0;
        $ix=0;
    for($i=0;$i<count($_POST['checkbox_shop']);$i++){
        if(isset($_POST['wine_name'.$i])){
            echo "<tr><td>".$_POST['wine_name'.$i]."</td><td>".$_POST['wine_price'.$i]."</td><td>".$_POST['wine_shuliang'.$i]."</td><td>".$_POST['wine_num'.$i]."</td></tr>";
            $sum+=$_POST['wine_num'.$i]; ?>
            <input type="hidden" name="wine_name<?=$ix?>" value="<?=$_POST['wine_name'.$i]?>"/>
            <input type="hidden" name="wine_price<?=$ix?>" value="<?=$_POST['wine_price'.$i]?>"/>
            <input type="hidden" name="wine_shuliang<?=$ix?>" value="<?=$_POST['wine_shuliang'.$i]?>"/>
            <input type="hidden" name="wine_num<?=$ix?>" value="<?=$_POST['wine_num'.$i]?>"/>
            <input type="hidden" name="wine_table<?=$ix?>" value="<?=$_POST['wine_table'.$i]?>" />
            <input type="hidden" name="cat_id<?=$ix?>" value="<?=$_POST['cat_id'.$i]?>" />
        <?php
        }
        $ix++;
    }
   ?>
        <tr><td></td><td></td><td>总价：</td><td><?=$sum?></td></tr>
    </table>
    <input type="submit" id="tijiao_submit" name="tijiao_submit" value="提交" />
</div>

</form>
    <?php
}
?>