<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style_2.css">
</head>
<body>
<div class="with">
    <div class="log clear">
        <div class="log-in">
            <a href="index.php">
                <img src="../image/tv_tl.png">
            </a>
        </div>
        <div class="log-r clear">
            <div class="menu-header">
                <img src="../img/g.png"width="80%" alt="">
                <ol class="menu_list" >
                    <li><a href="index.php">首页</a></li>
                    <li><a href="m2meitu.php">美图</a></li>
                    <li><a href="m2sys.php">大师</a></li>
                    <li><a href="m2sys.php">摄影师</a></li>
                    <li><a href="m2cp.php">产品</a></li>
                    <li><a href="m2zb.php">周边</a></li>
                    <li><a href="m2gywm.php">关于我们</a></li>
                    <li><a href="m2lxwm.php">联系我们</a></li>
                    <li><a href="m2ys.php">隐私</a></li>
                    <li><a href="m2fwtk.php">服务条款</a></li>
                </ol>
            </div>
            <div><a href="#" style="color: #87e2ff">未登录</a></div>
            <div><img src="../img/logo.jpg" width="80%" alt=""></div>
        </div>
    </div>
</div>
<div class="center">
<?php
        require_once($b);
?>
</div>
</body>
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery.tools.min.js"></script>
<script src="../js/main.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script>
    function f_load(a) {
        $('.center').load(a);
        $('.center').fadeIn('normal');
    }
</script>
</html>