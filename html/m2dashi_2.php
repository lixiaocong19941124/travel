<div class="clear">
        <div class="con-lift">
            <ul class="product">
                <li><h3>大师姓名</h3></li>
                <li>大师个人简介</li>
                <li style="border: none">大师作品展示</li>
            </ul>
            <div class="picthr clear">
                <div><img src="../simg/sml/sx2.jpg" width="100%" alt=""></div>
                <div><img src="../simg/sml/sx3.jpg" width="100%" alt=""></div>
                <div><img src="../simg/sml/sx4.jpg" width="100%" alt=""></div>
            </div>
            <div class="syno">
                <p>个人具体介绍<span>menu</span> </p>
                <p id="op">UI为用户提供了200个线型字体图标，使用字体图标的好处就是大小和颜色可以自由控制，
                    同时还能方便的增加背景等效果。使用图标时请确保字体文件和css文件在同一目录下UI为用户提供了200个线型字体图标，
                    使用字体图标的好处就是大小和颜色可以自由控制，同时还能方便的增加背景等效果。使用图标时请确保字体文件和css文件在同一目录下
                </p>
                <div class="c-input clear">
                    <input type="button" value="在线询问">
                    <input style="margin-left: 1.5rem" type="button" value="联系我们">
                </div>
                <ul class="c-oul">
                    <li>***************</li>
                    <li>***************</li>
                </ul>
            </div>
        </div>
        <div class="con-right">
            <div class="ban" id="demo1">
                <div class="ban2" id="ban_pic1">
                    <div class="prev1" id="prev1">
                        <img src="../images/index_tab_l.png" width="28" height="51"  />
                    </div>
                    <div class="next1" id="next1">
                        <img src="../images/index_tab_r.png" width="28" height="51"  />
                    </div>
                    <ul>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b1.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b2.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b3.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b4.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b5.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b1.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b2.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b3.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b4.jpg" width="500" height="500" /></a></li>
                        <li><a href="m2meitu_1_jk.php"><img src="../images/b5.jpg" width="500" height="500" /></a></li>
                    </ul>
                </div>
                <div class="min_pic">
                    <div class="prev_btn1" id="prev_btn1"><img src="../images/feel3.png" width="9" height="18"  /></div>
                    <div class="num clearfix" id="ban_num1">
                        <ul id="oul">
                            <li><a href="#"><img src="../images/s1.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s2.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s3.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s4.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s5.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s1.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s2.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s3.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s4.jpg" width="80" height="80" /></a></li>
                            <li><a href="#"><img src="../images/s5.jpg" width="80" height="80" /></a></li>
                        </ul>
                    </div>
                    <div class="next_btn1" id="next_btn1"><img src="../images/feel4.png" width="9" height="18"  /></div>
                </div>
            </div>

            <div class="mhc"></div>

            <div class="pop_up" id="demo2">
                <div class="pop_up_xx"><img src="../images/chacha3.png" width="40" height="40"  /></div>
                <div class="pop_up2" id="ban_pic2">
                    <div class="prev1" id="prev2"><img src="../images/index_tab_l.png" width="28" height="51"  /></div>
                    <div class="next1" id="next2"><img src="../images/index_tab_r.png" width="28" height="51"  /></div>

                </div>
            </div>
        </div>
</div>

<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/pic_tab.js"></script>
<script>
    jq(function(){
        jq('#demo1').banqh({
            box:"#demo1",//总框架
            pic:"#ban_pic1",//大图框架
            pnum:"#ban_num1",//小图框架
            prev_btn:"#prev_btn1",//小图左箭头
            next_btn:"#next_btn1",//小图右箭头
            pop_prev:"#prev2",//弹出框左箭头
            pop_next:"#next2",//弹出框右箭头
            prev:"#prev1",//大图左箭头
            next:"#next1",//大图右箭头
            /*  pop_div:"#demo2",//弹出框框架
             pop_pic:"#ban_pic2",//弹出框图片框架*/
            /*  pop_xx:".pop_up_xx",//关闭弹出框按钮*/
            /*   mhc:".mhc",//朦灰层*/
            autoplay:true,//是否自动播放
            interTime:2000,//图片自动切换间隔
            delayTime:200,//切换一张图片时间
            pop_delayTime:400,//弹出框切换一张图片时间
            order:0,//当前显示的图片（从0开始）
            picdire:true,//大图滚动方向（true为水平方向滚动）
            mindire:true,//小图滚动方向（true为水平方向滚动）
            min_picnum:5,//小图显示数量
            pop_up:true//大图是否有弹出框
        })
    })
</script>
