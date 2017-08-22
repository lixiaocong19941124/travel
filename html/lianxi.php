<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
        a{
            text-decoration: none;
        }
        .with{
            width: 100%;background: #333333;height: 5rem;
        }
        .log{
            max-width: 1200px;margin: 0 auto;
        }
        .log-in{
            width: 30%;
            padding: 0.6rem 0;
            float: left;
        }
        .log-r{
            width: 60%;
            float: right;
            padding: 1.4rem 0;
            cursor: pointer;
        }
        .log-r div{
            float: right;
            width: 5%;
            margin-left: 0.4rem;
        }
        .t-in div{
            padding: 0.6rem 0;
        }

        .box{
            max-width:1200px;margin:2rem auto;
        }

        .oul{
            margin: 20px auto;
            max-width:1200px ;
            border-bottom:1px solid #dadada;
        }
        .oul li{
            margin: auto;
            border-bottom: 2px solid transparent;
            cursor: pointer;
            padding: 1rem 0;
            text-align: center;
            float: left;
            width: 25%;
        }
        .odiv{
            width: 100%;
            margin: 0 auto;

        }
        .odiv ul{
            display: none;
        }

        .b-l{
            float: left;width:60%;
        }
        .f-div{
            margin-top: 1rem;    margin-bottom: 0.6rem;
        }
        .b-r{
            float: right;width: 40%;
        }
        .t-div{
            width: 100%;padding: 0.6rem 0;
        }
        .s-div{
            padding: 0.6rem 0;
        }
        .fm{
            width: 100%;
            padding: 0.6rem 0;
        }
        .fm input{
            width: 80%;padding: 0.4rem 0;border:1px solid #b9b9bb;margin-top: 0.4rem;text-indent: 2rem;
        }
        .ifo{
            width: 70%; margin:3rem auto 0;border: 1px solid #b9b9bb;text-align: center;padding: 0.4rem 0;
        }
        .fon{
            width: 70%;margin: auto;padding: 0.7rem 0;text-align: center;margin-top: 1rem;
        }
        .bt-oul{
            width: 80%;margin: auto;
            margin-left: 13%;
            margin-top: 2rem;
            text-align: center;
        }
        .bt-oul div{
            width: 20%;float: left;height: 3rem;border: 1px solid #000000;line-height: 3rem;
            margin-left: 0.8rem;margin-top: 0.4rem;
        }
        .si_div{
            margin-top: 1.4rem;margin-bottom: 0.6rem;
        }
        .si-info{
            margin-top: 1rem;
        }
        .bt-oul{
            width: 80%;margin: auto;
            margin-left: 13%;
            margin-top: 2rem;
        }
        .bt-oul li{
            width: 20%;float: left;height: 3rem;border: 1px solid #000000;text-align: center;line-height: 3rem;
            margin-left: 0.8rem;margin-top: 0.4rem;
        }
        *{
            margin: 0;padding: 0;background: none;outline: none;box-sizing: border-box;
        }
        .clear:after{
            content: "";height: 0;display: block;visibility: hidden;clear: both;
        }
        a{
            text-decoration: none;
        }
        .with{
            width: 100%;background: #333333;height: 5rem;
        }
        .log{
            max-width: 1200px;margin: 0 auto;
        }
        .log-in{
            width: 30%;
            padding: 0.6rem 0;
            float: left;
        }
        .log-r{
            width: 60%;
            float: right;
            padding: 1.4rem 0;
            cursor: pointer;
        }
        .log-r div{
            float: right;
            width: 5%;
            margin-left: 0.4rem;
        }
        .t-in div{
            padding: 0.6rem 0;
        }
    </style>

</head>
<body>
<div class="with">
    <div class="log clear">
        <div class="log-in">
            <img style="display: block" src="../img/tv_tl.png" alt="">
        </div>
        <div class="log-r clear">
            <div><img src="../img/g.png"width="80%" alt=""></div>
            <div style="width: 10%"><a href="#" style="color: #87e2ff">未登录</a></div>
            <div><img src="../img/logo.jpg" width="80%" alt=""></div>
        </div>
    </div>
</div>
<div class="box">
    <div class="b-l">
        <div class="f-div"><h3>联系我们</h3></div>
        <div class="t-div">Address地址：</div>
        <div class="s-div">上海市淮海中路1670弄23号</div>
        <div class="t-div">TEL电话：+862164334000</div>
        <div class="t-in">
            <div>FAX传真：+862164334999</div>
            <div>Email邮箱：website@tclub.cn?</div>
            <div>website网址：www.tclub.cn</div>
            <div>官网二维码</div>
            <div><img src="../img/er.jpg"width="140" style="display: block" alt=""></div>
            <div>扫描上方二维码跟我们一起去旅行</div>
        </div>

        <form class="fm">
            <input list="browsers" placeholder="输入有关信息">
            <datalist id="browsers">
                <option value="Internet Explorer">
                <option value="Firefox">
            </datalist>
            <input  type="text" placeholder="输入有关信息">
            <input  type="text" placeholder="输入有关信息">
            <input  type="text" placeholder="输入有关信息">
        </form>


    </div>
    <div class="b-r">
        <div class="ifo">
            成为会员
        </div>
        <div class="fon">已是会员</div>
        <ul class="bt-oul clear">
            <li>微博</li>
            <li>微信</li>
            <li>扣扣</li>
            <li>微博</li>
            <li>微信</li>
            <li>扣扣</li>
            <li>微博</li>
            <li>微信</li>
        </ul>
    </div>
</div>
</body>
</html>