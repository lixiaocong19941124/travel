<div class="login" >
    <span  class="close_login">&times;</span>
    <div >
            <div class="box">
                    <div class="awrap">
                        <div class="bcont">成为旅行者会员</div>
                        <ul class="ac-oul clear">
                            <li>微信</li>
                            <li>微博</li>
                            <li>微信</li>
                        </ul>
                        <div class="ait">或者</div>
                        <div class="otf">
                            <div>
                                <form id="zc-msg">
                                    <input style="width:50%;" type="text" placeholder="邮箱/手机号码" name="bh" id="ze-bh">
                                    <input style="width:50%;" type="password" placeholder="密码" name="mm" id="mm">
                                    <input style="width:50%;" type="password" placeholder="确认密码" id="qrmm">
                                    <div  class="clear">
                                        <input style="width:50%;float: left" type="number" placeholder="验证码" name="yzm">
                                        <div style="padding-top: 17px">
                                            <img id="getCode" onclick="getImgCode();"
                                                 src="http://120.26.121.25/tv/sys/ciqt/index.php/login/get_yzm_img" height="50"
                                                 style="vertical-align: middle"
                                            >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="acomm" id="zc-but">注 册</div>
                        <div class="anum">现在点击注册，视为已确认接收服务条款</div>
                        <div class="acomm">登录</div>
                    </div>



        </div>
    </div>
</div>

<script>
    $('.close_login').on('click',function () {
        $('#fullpage2').fadeOut('');
    })
    $('#zc-but').on('click',function () {
        $('#fullpage2').fadeOut();
    })
</script>