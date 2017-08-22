<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>旅行者</title>
    <meta name="description" content="旅行者官网"/>
    <meta name="Resource-type" content="Document"/>
    <link rel="stylesheet" href="../css/aui.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css"/>
    <!--[if IE]>
    <script type="text/javascript">
        var console = {
            log:function (){ }
        };
    </script>
    <![endif]-->
    <style>
        #fullpage{
            position: fixed;top: 80px;left: 100px;right: 100px;bottom: 80px;
            border: 3px solid #b3b3b3;
        }
        #fullpage2{
            z-index:9;position: fixed;top: 80px;left: 100px;right: 100px;bottom: 80px;display: none;
        }
    </style>
</head>
<body >
<!--右侧固定分页-->
<div class="" style="width: 100px;position: fixed;right: 0;top: 30%">
    <div class="right-nav-ys ">
        <div class="abc"><a href="index.php" class="<?php echo @$c[1]?>">首页</a></div>
        <div class="abc"><a href="f2.php" class="<?php echo @$c[2]?>">美图</a></div>
        <div class="abc"><a href="f3.php" class="<?php echo @$c[3]?>">大师</a></div>
        <div class="abc"><a href="f4.php" class="<?php echo @$c[4]?>">摄影师</a></div>
        <div class="abc"><a href="f5.php" class="<?php echo @$c[5]?>">活动</a></div>
        <div class="abc"><a href="f6.php" class="<?php echo @$c[6]?>">周边</a></div>
    </div>
</div>
<div class="head">
    <div class="fl-left header-logo mar-l-20" style="cursor: pointer;">
        <a>
            <img src="../image/tv_tl.png" width="100%">
        </a>
    </div>
    <div class="fl-right header-logo mar-r-20" style="cursor: pointer;">
        <div class="ocont" onclick="f_load('search.php')">
                <div class="ocon">
                </div>

                <div class="bor"></div>
        </div>
        <!--登录页面-->
        <div class="demo ocont">
            <div class="acon"></div>
            <div class="bor"></div>
        </div>


        <div class="ocont">
                <div class="aa con">
                </div>
            <div class="bor"></div>
            <ul class="con-info">
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
            </ul>

        </div>
    </div>
</div>

<div  id="fullpage" >
<!--内容可变区域-->
    <?php
        require_once($b);
    ?>
</div>
<div  id="fullpage2"></div>
<!--footer-->
<div class="fot">
    <div class="footerA">
        <ul>
            <li><a href="#">成为会员</a></li>
            <li class="footer_bar"> | </li>
            <li><a href="m2gywm.php">关于我们</a></li>
            <li class="footer_bar"> | </li>
            <li><a href="m2lxwm.php">联系我们</a></li>
            <li class="footer_bar"> | </li>
            <li><a href="m2hezuo_jk.php">其他</a></li>
            <li class="footer_bar"> | </li>
            <li><a href="m2ys.php">隐私</a></li>
            <li class="footer_bar"> | </li>
            <li><a  href="m2fwtk.php">服务条款</a></li>
            <li class="footer_bar"> | </li>
            <li><a  href="#">网站服务方</a></li>
        </ul>
    </div>
    <div class="bah">
        沪备 12312312342
    </div>
</div>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../layer/layer.js"></script>
<script type="text/javascript" src="../js/jquery.orbit-1.2.3.js"></script>
<script src="../js/api.js"></script>
<script src="../js/aui-waterfall.js"></script>
</body>
<script>


//    f1();
    function f1() {
        $.get('carousel.html',function (data) {
            $('#fullpage').html(data);

        })
    }

//    $('#fullpage').load('carousel.html');



function f2(){
    $('#fullpage').load('f2_meitu.php');
//    $('#fullpage2').show();
//    $('#zj').load('swipe.html');
    //$('#zj').load('slide.html');
}
$('.demo').on('click',function () {
    $('#fullpage2').load('login.php');
    $('#fullpage2').fadeIn('normal');
})

function f_load(a) {
    $('#fullpage2').load(a);
    $('#fullpage2').fadeIn('normal');
}
//function tt(){
//    var h,w;
//    h=$('#fullpage').height();
//    w=$('#fullpage').width();
//    $.get('carousel.html',function (data) {
//        layer.open({
//            type: 1,
//            content: data,
//            closeBtn: 0,
//            title: false,
//            anim: 0,
////        offset: ["80px","100px","80px","100px"],
//            area: [w+'px',h+'px'],
//            shadeClose: true,
//            success:function(){
//            }
//        });
//    })
//}
//除了摄影师其他的界面内容的轮播初始化
$('.featured').orbit({
    animation: 'horizontal-push',
    pauseOnHover: true,
    timer: true,
    advanceSpeed: 2000,
    startClockOnMouseOut: true,
    bullets: true
});
// 点击下载登录下载呈现一个img、失败则提示登录框
function alt(){
    if($.cookie("user")!=null){
        download("http://120.26.121.25/tv/sys/ci/index.php/imgshow/uploads/148731879178013.jpg/1600/576")
    }else(
        ft()
    );
}
function download(src) {
    $a = $("<a></a>").attr("href", src).attr("download", "img.jpg");
    $a[0].click();
}
</script>
</html>