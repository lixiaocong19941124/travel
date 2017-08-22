<div class="featured orbit" id="section0" style="background-color: #000">
    <div style="width: 100%;height: 100%;">
        <img width="100%"  height="100%" src="../ima/9.jpg">
        <a class="jr" href="m2zb_1_jk.php?rid=9"></a>
    </div>
    <div style="width: 100%;height: 100%;">
        <img width="100%"  height="100%" src="../ima/8.jpg">
        <a class="jr" href="m2zb_1_jk.php?rid=9"></a>
    </div>
    <div style="width: 100%;height: 100%;">
        <img width="100%"  height="100%" src="../ima/7.jpg">
        <a class="jr" href="m2zb_1_jk.php?rid=9"></a>
    </div>
    <div style="width: 100%;height: 100%;">
        <img width="100%"  height="100%" src="../ima/1.jpg">
        <a class="jr" href="m2zb_1_jk.php?rid=9"></a>
    </div>
</div>


<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<!--<script type="text/javascript" src="../js/jquery.fullPage.js"></script>-->
<script type="text/javascript" src="../js/jquery.orbit-1.2.3.js"></script>
<script>

//$('.featured div').css({'height':$('#fullpage').height(),'width':"100%"});
//
//$('img').load(function(){
//    // 加载完成
//    var img=($('.featured>div').height()-$('.featured div img').height())/2;
//    $('.featured div').css("paddingTop",img);
//    console.log('1');
//    $('.featured').show();
//    //}
//
//});

var imgNum=$('.jimg').length;
$('.jimg').load(function(){
    if(!--imgNum){
        // 加载完成
        var img=($('.featured>div').height()-$('.jimg').height())/2;
        $('.jimg').css("marginTop",img);


        $(window).resize(function() {
            var img=($('.featured>div').height()-$('.jimg').height())/2;
            $('.jimg').css("marginTop",img);
        });


        $('.featured').orbit({
            timer:true
        })
    }
//    $('.jimg').show();

});
//除了摄影师其他的界面内容的轮播初始化
$('.featured').orbit({
    animation: 'horizontal-push',
    pauseOnHover: true,
    timer: true,
    advanceSpeed: 2000,
    startClockOnMouseOut: true,
    bullets: true
});



</script>