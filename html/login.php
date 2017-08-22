<style>
    div{
        color: #666;
        font-size: 16px;
    }
</style>


<div class="login" >
    <span  class="close_login">&times;</span>
    <div >
            <div class="box clear">
                <div class="box-l">
                    <div class="odiv">成为旅行者会员</div>
                    <div class="l-odiv">加入旅行者社区</div>
                    <div class="l-odiv">下载大师作品</div>
                    <div class="l-odiv">关注达人动态</div>
                    <div class="l-odiv">为好作品点赞以及发布你超乎想象的创作</div>
                    <div class="res pin to_reg">注册</div>
                </div>
                <div class="box-r">
                    <div class="nav-t">ING IN</div>
                    <div class="nav-c">登录</div>
                    <div class="nav-c">微信</div>
                    <div class="nav-c">微博</div>
                    <div class="nav-c" style="border: none">或者</div>
                    <div class="btn">
                        <form id="login-msg">
                            <input type="text" placeholder="邮箱/手机号码" name="bh" id="log-bh">
                            <input type="password" placeholder="密码" name="mm" id="log-mm">
                        </form>
                    </div>
                    <div class="img clear">

                        <div class="otext">
                            <input type="checkbox" id="r_mima" >&nbsp;<label for="r_mima">记住密码</label>
                        </div>
                    </div>
                    <div class="nav-c" onclick="f_log()" id="log-but">登录 </div>
                    <div class="nav-c clase" style="border: none">忘记密码 此处可点击</div>
                </div>
            </div>


    </div>
</div>

    <script>
        $('.close_login').on('click',function () {
            $('#fullpage2').fadeOut();
        })
        //打开注册层
        $('.to_reg').on('click',function () {
            f_load('reg.php');
        })
    </script>