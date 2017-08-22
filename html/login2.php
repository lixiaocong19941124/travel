<style>
    /*登陆注册框*/
    .flat-form {
        z-index: 9999;
        background: lightgray;
        width: 390px;
        height: 100%;
        position: fixed;
        top: 0px;
        right: -390px;
        margin-left: -180px;
        /*css滑入过渡*/
        transition:0.8s all ease;
        -moz-transition:0.8s all ease;
        -webkit-transition:0.8s all ease;
        -o-transition:0.8s all ease;
    }
    .tabs {
        margin: 0;
        padding: 0;
        list-style-type: none;
        width: 100%;
        position: relative;
        display: block;
        margin-bottom: 20px;
    }
    .tabs li {
        display: block;
        float: left;
        margin: 0;
        padding: 0;
        width: 50%;
    }
    .tabs a {
        color: black !important;
        background: white;
        display: block;
        float: left;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        padding: 12px 0;
        width: 100% !important;
        /*border-right: 1px solid @tab-border;*/

    }
    .tabs li:last-child a {
        border-right: none;
        width: 174px;
        padding-left: 0;
        padding-right: 0;
        text-align: center;
    }
    .tabs a.active {
        background-color: lightgray;
        border-right: none;
        -webkit-transition: all 0.5s linear;
        -moz-transition: all 0.5s linear;
        transition: all 0.5s linear;
    }
    .form-action {
        padding: 0 20px;
        position: relative;
        margin-bottom: 10px;
    }

    .form-action h1 {
        font-size: 42px;
        padding-bottom: 10px;
    }
    .form-action p {
        font-size: 12px;
        padding-bottom: 10px;
        line-height: 25px;
    }
    form {
        padding-right: 15px !important;
    }

    /*google浏览器去除上下箭头*/
    form input::-webkit-outer-spin-button,
    form input::-webkit-inner-spin-button{
        -webkit-appearance: none !important;
        margin: 0;
    }
    /*fox浏览器去除上下箭头*/
    form input[type="number"]{-moz-appearance:textfield;}

    form input[type=text],form input[type=number],
    form input[type=password] {
        width: 100%;
        height: 40px;
        margin-bottom: 10px;
        padding-left: 15px;
        background: #fff;
        border: 1px solid #b3b3b3;
        color: black;
        outline: none;
    }

    .dark-box {
        background: #5e0400;
        box-shadow: 1px 3px 3px #3d0100 inset;
        height: 40px;
        width: 50px;
    }
    .form-action .dark-box.bottom {
        position: absolute;
        right: 0;
        bottom: -24px;
    }
    .tabs + .dark-box.top {
        position: absolute;
        right: 0;
        top: 0px;
    }
    .show {
        display: block;
    }
    .hide {
        display: none;
    }

    .button {
        border: none;
        display: block;
        background: #3385ff;
        margin: 0 auto;
        margin-top: 35px;
        height: 40px;
        line-height: 40px;
        width: 60%;
        min-width: 80px;
        color: #ffffff;
        text-align: center;
        /*box-shadow: 0px 3px 1px #2075aa;*/
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        transition: all 0.15s linear;
    }
    .button:hover {
        background: #1f85be;
        /*box-shadow: 0 3px 1px #237bb2;*/
    }
    .button:active {
        background: #1f85be;
        /*box-shadow: 0 3px 1px #0f608c;*/
    }

    ::-webkit-input-placeholder {
        color: lightgray;
    }
    :-moz-placeholder {
        /* Firefox 18- */
        color: lightgray;
    }
    ::-moz-placeholder {
        /* Firefox 19+ */
        color: lightgray;
    }
    :-ms-input-placeholder {
        color: lightgray;
    }
    /*登陆注册样式结束*/
    /*其他登录样式*/
    .qtdl{
        padding: 10px 15px;
    }
    .qtdl li{
        text-align: center;
        padding: 10px;
    }
    .qtdl-button{
        padding: 5px;
        width: 60%;
        height: 45px;
        background: #333;
        border-color: transparent;
    }
    .qtdl-button-icon{
        height: 100%;
        width: 29%;
        float: left;
        border-right: 1px solid white;
    }
    .qtdl-button-text{
        height: 100%;
        width: 70%;
        float: left;
        color: white;
        line-height: 31px;
    }
    #sina:hover{
        background-color: rgb(230, 75, 43) !important;
    }
    #QQ:hover{
        background-color: rgb(13, 127, 172) !important;
    }
    #wechat:hover{
        background-color: rgb(152, 199, 8) !important;
    }
    .zuohua{
        cursor: pointer;
        width: 40px;
        height: 30px;
        position: absolute;
        left: 5px;
        top: 50%;
        margin-top: -20px;
        background: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E") no-repeat;
    }
    .sys-img{
        width: 100%;
        height: 100%;
    }

</style>
<!--登录框-->
<div class="container">
    <div class="flat-form">
        <div class="zuohua"></div>
        <ul class="tabs" id="login-text">
            <li>
                <a href="#login" class="active">登录</a>
            </li>
            <li>
                <a href="#register">注册</a>
            </li>
        </ul>
        <!--<div id="login" class="form-action show">
            <form id="login-msg">
                <ul>
                    <li>
                        <input type="text" placeholder="邮箱/手机号码" name="bh" id="log-bh"/>
                    </li>
                    <li>
                        <input type="password" placeholder="密码" name="mm" id="log-mm" />
                    </li>
                    <li>
                        <div>
                            <div style="float:left;margin-bottom: 10px;">
                                <input type="checkbox" style="vertical-align: middle;"><span> 下次自动登录</span>
                            </div>
                            <div style="float:right;margin-bottom: 10px;">
                                <span>忘记密码?</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
            <div class="button" onclick="f_log()" id="log-but">登 录</div>
        </div>-->
        <!--/#login.form-action-->
        <!--<div id="register" class="form-action hide">
            <form id="zc-msg">
                <ul>
                    <li>
                        <input type="text" placeholder="邮箱/手机号码" name="bh" id="ze-bh"/>
                    </li>
                    <li>
                        <input type="password" placeholder="密码" name="mm" id="mm"/>
                    </li>
                    <li>
                        <input type="password" placeholder="确认密码" id="qrmm"/>
                    </li>
                    <li>
                        <input type="number" placeholder="验证码" style="width: 55%" name="yzm"/>
                        <img id="getCode" onclick="getImgCode();" src="" height="41" style="vertical-align: middle;">
                    </li>
                </ul>
            </form>
            <div class="button" onclick="f_zc()" id="zc-but" style="margin-top: 0;">注 册</div>
        </div>-->
        <!--/#register.form-action-->
        <ul class="qtdl">
            <li style="border-top: 1px solid #b3b3b3;">使用其他方式登录</li>
            <li style="">
                <button class="qtdl-button" id="sina" style="background-color: rgb(230,94,66)" onclick="layer.tips('开发中', '#sina');">
                    <div class="qtdl-button-icon">
                        <img src="../image/sina.jpg" height="100%">
                    </div>
                    <div class="qtdl-button-text">新浪微博登录</div>
                </button>
            </li>
            <li style="">
                <button class="qtdl-button" id="QQ" style="background-color: rgb(48,142,181)" onclick="layer.tips('开发中', '#QQ');">
                    <div class="qtdl-button-icon">
                        <img src="../image/QQ.png" height="100%">
                    </div>
                    <div class="qtdl-button-text">腾讯QQ登录</div>
                </button>
            </li>
            <li style="">
                <button class="qtdl-button" id="wechat" style="background-color: rgb(127,169,0)" onclick="layer.tips('开发中', '#wechat');">
                    <div class="qtdl-button-icon">
                        <img src="../image/wechat.png" height="100%">
                    </div>
                    <div class="qtdl-button-text">微信账号登录</div>
                </button>
            </li>
        </ul>
    </div>
</div>