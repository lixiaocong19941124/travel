/**
 * Created by Shanxian_ji on 2016/11/18.
 */
//配置的公共接口
var G_url='http://120.26.121.25/tv/sys/ciqt/index.php/';
//var G_url='http://sl.deeyi.com/ws/tv/ciqt/index.php/';
var G_url_im='http://120.26.121.25/tv/sys/ci/index.php/';
//var G_url_im='http://sl.deeyi.com/ws/tv/ci/index.php/';

//对sign进行转码
function URLencode(sStr){
   return escape(sStr).replace(/\+/g, '%2B').replace(/\"/g,'%22').replace(/\'/g, '%27').replace(/\//g,'%2F');
}

// 获取url地址后面带的?参数如：www.baidu.com/?userid=123 得到的'userid' 为 123.
function GetQueryString(name) {
   var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
   var r = decodeURI(window.location.search).substr(1).match(reg);
   if (r != null) return unescape(r[2]); return '';
}

function log_lay(a) {
    if($(a).attr('data-zt') == 0){
        $('.flat-form').css('right','0px');
        $(a).attr('data-zt','1');
        $('.zuohua').click(function () {
            $('.flat-form').css('right','-390px');
            $(a).attr('data-zt','0');
        });
    }
    // else if($(a).attr('data-zt') == 1){
    //     $('.flat-form').css('right','-390px');
    //     $(a).attr('data-zt','0');
    // }
}


//登录的AJAX
function f_log() {
    var zh=$('#log-bh').val(),
        mm=$('#log-mm').val();
    if(zh=='' || mm==''){
        layer.tips('账号或密码不能为空', '#log-but');
    }else {
        $.getJSON(G_url+"login/signin",$('#login-msg').serialize(),function(data){
                if(!data.ok){
                    layer.tips(data.msg, '#log-but');
                }else {
                    $.cookie('sign', data.sign);
                    $.cookie('user', data.user.bh);
                    $.cookie('usertp', data.user.txtp);
                    $.cookie('userrid', data.user.rid);
                    $('.container').hide();
                    $('.login-befor').hide();
                    $('.login-after').show();
                    $('#tx').attr('src',data.user.txtp);
                    window.location.reload();
                }
            }//返回的data是字符串类型
        );
    }
}

//注册的AJAX
function f_zc() {
    var zh1=$('#zc-bh').val(),
        yzm1=$('input[name="yzm"]').val(),
        mm2=$('#qrmm').val(),
        mm1=$('#mm').val();
    if(mm1!=mm2){
        layer.tips('输入两次密码不同', '#zc-but');
        return;
    }
    if(zh1=='' || mm1=='' || yzm1==""){
        layer.tips('账号或密码不能为空', '#zc-but');
    }else {
        $.getJSON(G_url+"login/reg",$('#zc-msg').serialize(),function(data){
                if(!data.ok){
                    layer.tips(data.msg, '#zc-but');
                }else {
                    $.cookie('sign', data.sign);
                    $.cookie('user', data.user.bh);
                    $.cookie('userrid', data.user.rid);
                    $('.container').hide();
                    $('.login-befor').hide();
                    $('.login-after').show();
                    alert("注册成功")
                    window.location.reload();
                }
            }//返回的data是字符串类型
        );
    }
}

//退出账号
function tuichu() {
    layer.confirm('确定退出账号吗？', {
        btn: ['确定','取消'] //按钮
    }, function(){
        $.cookie('sign', '', { expires: -1 });
        $.cookie('user', '', { expires: -1 });
        $.cookie('usertp', '', { expires: -1 });
        $.cookie('userrid', '', { expires: -1 });

        window.location.reload();
    }, function(){

    });
}
//获取验证码
function getImgCode(){
    var getimagecode = document.getElementById("getCode");
    getimagecode.src=G_url+"login/get_yzm_img";
}

(function ($) {
    $(window).load(function () {
        $('#status').fadeOut();
        $('#preloader').delay(300).fadeOut('slow');
    });
}(jQuery));
