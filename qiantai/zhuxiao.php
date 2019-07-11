<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/7/3
 * Time: 9:49
 */
session_start();
session_unset();
session_destroy();
?>
<script type="text/javascript">
    alert("您已经退出登录");
    location="index.php";

</script>
