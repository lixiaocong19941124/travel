    <style>
        *{
            margin: 0;padding: 0;background: none;outline: none;box-sizing: border-box;
        }
        .clear:after{
            content: "";height: 0;display: block;visibility: hidden;clear: both;
        }
        ul{
            list-style: none;
        }

        .box{
            width: 100%;9;padding-bottom: 1rem;height: 100%;position: relative;
        }
        .b-img{
            width: 90%;margin:auto;
        }
        .b-img img{
            margin-left: 20%;
        }
        .nm{font-size: 1.1rem;padding: 0.4rem 0;
            width: 54%;margin: auto;
        }
        .inf div{
            float: left;width: 50%;
        }
        .inf div:last-child{
            text-align: right;
        }
        .wx{
            width: 54%;margin: auto;
        }
        .cang{
            width: 40%;background: #e5e5e5;padding: 0.2rem;
        }
        .ca-f{
            width: 20%;float: left;margin-left: 0.2rem;
        }
        .ca-f div{
            float: left;width: 20%;
        }
        .ca-f div:first-child{
            margin: 0.3rem;
        }
        .ca-f div:last-child{
            float: right;width: 60%;margin-top: 0.2rem;
        }
        .ca-l{
            width: 30%;background: #c8c8c8;
        }
        .ca-l img{
            margin-left: 0.5rem;
        }
        .fz{
            width: 40%;
        }
        .fz div{
            float: left;
        }
        .fz div:first-child{
            width:10%;padding: 0.4rem 0;
        }
        .fz div:first-child img{
            margin-left: 0.2rem;
        }
        .fz div:last-child{
            width: 90%;background: #bf6e57;height:1.6rem;line-height: 1rem;margin-top: 0.4rem;
        }
        .lab input{
            width: 20px;height: 20px;margin-left: 0.2rem;float: left;
        }
        .lab p{float: right;
            height: 0.6rem;line-height: 0.6rem;padding: 0.2rem;margin-top: 0.3rem;
        }
        .b-info{
            padding: 0.6rem 0;background: #737373;width: 40%;
        }
        .cle{
            float: left;margin-left: 0.6rem;
        }
        .r-btn{
            margin-right: 0.6rem;
        }
        .r-btn button{
            padding: 0 0.8rem ;background: #ff9476;color: white;cursor: pointer;
        }
        #clos{
            width:50px;position: absolute;top:5px; right: 10%;background: #565656;text-align: center;
            font-size: 1.2rem;cursor: pointer;padding: 0.4rem;border-radius: 5px;
            color: white;
        }
    </style>
<div class="box">
    <a href="m2meitu_1_jk.php"><div id="clos">×</div></a>
    <div class="b-img">
        <img style="display: block" src="../simg/big/sy1.jpg" width="60%" height="700px" alt="">
    </div>
    <div class="nm">作者：某某某</div>
    <div class="inf nm clear">
        <div>作者简介：***********************</div>
        <div>进入摄影主页</div>
    </div>
    <div class="wx">
        <div class="cang clear">
            <div class="ca-f clear"><div><img src="../image/sc.png"width="20px" alt=""></div><div>收藏</div></div>
            <div class="ca-f clear"><div><img src="../image/xz1.png"width="20px" alt=""></div><div>收藏</div></div>
            <div class="ca-f clear"><div><img src="../image/fx.png"width="20px" alt=""></div><div>收藏</div></div>
            <div class="ca-f ca-l clear"><div><img src="../image/xh.png"width="20px" alt=""></div><div>我喜欢</div></div>

        </div>
        <div class="fz clear">
            <div><img style="display: block" src="../image/fzj.png"width="25px" alt=""></div>
            <div></div>
        </div>
        <div class="b-info clear">
            <div class="cle"><img src="../image/sc.png"width="20px" alt=""><img src="../image/sc.png"width="20px" alt=""></div>
            <div class="lab cle"><input name="fruit" type="radio"><p>标签基础语法知识</p></div>
            <div class="r-btn" style="float: right"><button>评论</button></div>
        </div>
    </div>

</div>
<script>
    var cl = document.getElementById('clos')
    var box = document.getElementsByClassName('box')[0]
    cl.onclick = function () {
        box.style.display = 'none'
    }
</script>