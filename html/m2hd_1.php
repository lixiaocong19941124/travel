<style>

    /** Reset */
    * {
        list-style: none;
        margin: 0;
        padding: 0;
        outline: 0;
        text-decoration: none;
        box-sizing: border-box !important;
        -webkit-box-sizing: border-box !important;
        -moz-box-sizing: border-box !important;
        -ms-box-sizing: border-box !important;
    }
    .clear:after{
        content: "";
        height: 0;
        display: block;
        visibility: hidden;
        clear: both;
    }
    /**
     *  START FREEBIE STYLES
     */

    /*! Font Faces */
    @font-face {
        font-family: 'museo500';
        font-weight: normal;
        font-style: normal;
    }
    /*! Freebie Skelet */
    ul.expmenu {
        width:100%;position: relative;
    }
    ul.expmenu * {
        list-style: none;
    }
    ul.expmenu > li > div.header {
        padding: 12px;
        border-bottom: 1px #396e9f solid;
    }
    ul.expmenu > li:last-child > div.header {
        border-bottom: none;
    }
    ul.expmenu > li ul li {
        background-color: #ececec;
        padding: 12px;
        /*border-bottom: 1px solid #dcdcdc;*/
        border-top: 1px solid #fff;
        color: #727272;
        text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8);
    }
    ul.expmenu > li ul li:last-child {
        border-bottom: none;
    }
    ul.expmenu > li ul li.selected {
        background-color: #f4f4f4;
    }
    ul.expmenu div.header {
        color: #203f61;
        text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.2);
        background: #4d7fb8; /* Old browsers */
        background: -moz-linear-gradient(top, #4d7fb8 0%, #4572a5 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4d7fb8), color-stop(100%, #4572a5)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #4d7fb8 0%, #4572a5 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #4d7fb8 0%, #4572a5 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #4d7fb8 0%, #4572a5 100%); /* IE10+ */
        background: linear-gradient(to bottom, #4d7fb8 0%, #4572a5 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d7fb8', endColorstr='#4572a5', GradientType=0 ); /* IE6-9 */
    }
    ul.expmenu > li > div.header > .label {
        padding-left: 24px;
        background: no-repeat;
    }
    ul.expmenu > li > div.header > .arrow {
        display: block;
        width: 16px;
        height: 16px;
        background: no-repeat center;
        float: right;
    }
    ul.expmenu > li > div.header > .arrow.up {
        background-image: url(../images/arrow_u.png);
    }
    ul.expmenu > li > div.header > .arrow.down {
        background-image: url(../images/arrow_d.png);
    }
    /* Mouse Events */
    ul.expmenu div.header:hover {
        background: #4571a0; /* Old browsers */
        background: -moz-linear-gradient(top, #4d7fb8 0%, #4571a0 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4d7fb8), color-stop(100%, #4571a0)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #4d7fb8 0%, #4571a0 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #4d7fb8 0%, #4571a0 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #4d7fb8 0%, #4571a0 100%); /* IE10+ */
        background: linear-gradient(to bottom, #4d7fb8 0%, #4571a0 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d7fb8', endColorstr='#4571a0', GradientType=0 ); /* IE6-9 */
        cursor: pointer;
    }
    ul.expmenu > li ul li:not(.selected):hover {
        background: #e7e7e7; /* Old browsers */
        cursor: pointer;
    }
    ul.expmenu > li ul li:not(.selected):active {
        background: #f1f1f1; /* Old browsers */
        cursor: pointer;
    }
    /**
     *  END FREEBIE STYLES
     */


    /**
     *	Not important styles
     */

    ul#pagination-freebie {
        display: table;
        padding-right: 20px;
        margin: 20px auto;
        list-style: none;
    }
    ul#pagination-freebie:last-child {
        padding-right: 0;
    }
    ul#pagination-freebie li {
        float: left;
        margin-bottom: 20px
    }
    ul#pagination-freebie li:last-child {
        margin-right: 0;
    }
    div#text {
        text-align: center;
        font-size: 48px;
        width: 610px;
        margin: 0 auto;
        margin-top: 50px;
        margin-top: 80px;
    }
    div#smalltext {
        text-align: center;
        font-size: 15px;
        width: 600px;
        margin: 0 auto;
    }
    div#content {
        display: table;
        margin: 0 auto;
        padding: 20px;

        width: 100%;
    }
    .fol{
        float: left;width: 200px;position: relative;margin-left:6%;
    }
    .menu{
        position: absolute;


    }
    .m-f{

        overflow-y: auto !important;

    }
    .m-c{

        overflow-y: auto !important;

    }

    .menu li{

    }
    .dn{
        margin-top: 0.2rem;
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
    /*.log-r{*/
        /*width: 60%;*/
        /*float: right;*/
        /*padding: 1.4rem 0;*/
        /*cursor: pointer;*/
    /*}*/
    /*.log-r div{*/
        /*float: right;*/
        /*width: 5%;*/
        /*margin-left: 0.4rem;*/
    /*}*/
    /* 代码整理：懒人之家 www.lanrenzhijia.com */












    *{
        margin: 0;padding: 0;background: none;outline: none;box-sizing: border-box;
    }
    .clear:after{
        content: "";height: 0;display: block;visibility: hidden;clear: both;
    }
    ul{
        list-style: none;
    }
    .obx{
        width:650px;margin:0.2rem auto;background: #e3f6ff;border-bottom: 1px solid #999;padding-bottom: 1rem;
    }

    .oul{
        margin: 20px auto;
        max-width:600px ;
    }
    .oul li{
        margin: auto;
        border-bottom: 3px solid transparent;
        cursor: pointer;
        padding: 1rem 0;
        text-align: center;
        float: left;
        width:12.5%;
    }
    .odiv{
        max-width:600px;
        margin: 0 auto;

    }
    .odiv ul{
        display: none;
    }
    .odiv ul li{
        background: white !important;
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
    .cer{
        float: left;width: 14%;text-align: center;
    }
    .cer div{
        margin-bottom: 0.4rem;font-size: 1rem;margin-top: 0.4rem;
    }

    .put{
        width: 600px;margin: auto;margin-bottom: 1rem;
    }
    .put input{
        width: 100%;padding: 0.4rem 0;font-size: 1.1rem;border:none;margin-top: 0.6rem;
        border-radius: 0.2rem;
    }

</style>
<div class="baner">
    <img src="../img/timg.jpg" width="100%" alt="" style="display: block">
</div>
<div class="statement clear">
    <div id="content" style="background: #999">
        <ul id="expmenu-freebie">
            <li>
                <ul class="expmenu clear">
                    <li class="fol">
                        <div class="header">
                            <span class="label" style="color: white">出行日期</span>
                            <span class="arrow down dn"></span>
                        </div>
                        <ul class="menu m-f" style="display:none;width: 200px;height: 200px;">
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                        </ul>
                    </li>
                    <li class="fol">
                        <div class="header">
                            <span class="label" style="color: white">价格区间</span>
                            <span class="arrow down dn"></span>
                        </div>
                        <ul class="menu m-c" style="display:none;width: 200px;height: 200px">
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                            <li>Your settings</li>
                        </ul>
                    </li>
                    <li class="fol">
                        <div class="header">
                            <span class="label" style="color: white">目的地</span>
                            <span class="arrow down dn"></span>
                        </div>
                        <ul class="menu" style="display:none">
                            <div class="obx">
                                <div class="put">  <input type="text" placeholder="输入关键字" style="text-indent: 0.4rem"></div>

                                <ul class="oul clear">
                                    <li style="border-bottom:3px solid blue;color: blue">热门</li>
                                    <li>ABCD</li>
                                    <li>EFGH</li>
                                    <li>IJKL</li>
                                    <li>MNOP</li>
                                    <li>QRST</li>
                                    <li>UVWX</li>
                                    <li>YZ</li>
                                </ul>
                                <div class="odiv clear">
                                    <ul class="clear" style="display: block;">
                                        <li class="clear">
                                            <div class="cer">
                                                <div>北京</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                            </div>
                                            <div class="cer">
                                                <div>上海</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                            </div>
                                            <div class="cer">
                                                <div>天津</div>
                                                <div>北京</div>

                                                <div>北京</div>
                                            </div>
                                            <div class="cer">
                                                <div>黑龙江</div>
                                                <div>北京</div>

                                                <div>北京</div>
                                            </div>
                                            <div class="cer">
                                                <div>海南</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                                <div>北京</div>
                                            </div>
                                            <div class="cer">
                                                <div>深圳</div>
                                                <div>北京</div>
                                                <div>北京</div>

                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>对于我呢，老实说，也有点小失望，一方面源于地理环境，一方面因为工厂里的枯燥乏味的工作。大家都有梦想，</h4></div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul><ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="si_div"><h4>每次与久未联系的朋友聊天，5555555对方第一句话就是：“怎么样，一个人在那边还好吧”</h4></div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="fol">
                        <div class="header"style="border-bottom: 1px solid #396e9f">
                            <span class="label" style="color: white">目的地</span>
                            <span class="arrow down dn" style="background-image: url(../images/search.png);"></span>
                        </div>
                    </li>
                </ul>
                <!-- End Freebie -->
            </li>
        </ul>

    </div>

</div>
<ul class="s-oul clear">
    <li><img src="../img/l8.jpg" width="100%" height="100px" alt=""></li>
    <li><img src="../img/l4.jpg" width="100%" height="100px" alt=""></li>
    <li><img src="../img/l2.jpg" width="100%" height="100px" alt=""></li>
</ul>
<div class="statement">
    <h3>热卖产品</h3>
</div>
<div class="s-info clear">
    <div class="s-l">
        <div></div>
    </div>
    <div class="s-r">
        <div class="ospan clear">
            <span>活动1</span><span>活动1</span>
        </div>

        <ul class="olis clear">
            <li>aaa</li>
            <li style="text-align: right">123元</li>
        </ul>
        <div class="hot">活动测试</div>
        <div class="bot"><div style="background: #ffce60">立即购买</div><div><a href="m2hdxq.php">查看详情</a></div></div>
    </div>
</div>
<div class="s-info clear">
    <div class="s-l">
        <div></div>
    </div>
    <div class="s-r">
        <div class="ospan clear">
            <span>活动1</span><span>活动1</span>
        </div>

        <ul class="olis clear">
            <li>aaa</li>
            <li style="text-align: right">123元</li>
        </ul>
        <div class="hot">活动测试</div>
        <div class="bot"><div style="background: #ffce60">立即购买</div><div><a href="m2hdxq.php">查看详情</a></div></div>
    </div>
</div>
<div class="s-info clear">
    <div class="s-l">
        <div></div>
    </div>
    <div class="s-r">
        <div class="ospan clear">
            <span>活动1</span><span>活动1</span>
        </div>

        <ul class="olis clear">
            <li>aaa</li>
            <li style="text-align: right">123元</li>
        </ul>
        <div class="hot">活动测试</div>
        <div class="bot"><div style="background: #ffce60">立即购买</div><div><a href="m2hdxq.php">查看详情</a></div></div>
    </div>
</div>
<div class="s-info clear">
    <div class="s-l">
        <div></div>
    </div>
    <div class="s-r">
        <div class="ospan clear">
            <span>活动1</span><span>活动1</span>
        </div>

        <ul class="olis clear">
            <li>aaa</li>
            <li style="text-align: right">123元</li>
        </ul>
        <div class="hot">活动测试</div>
        <div class="bot"><div style="background: #ffce60">立即购买</div><div><a href="m2hdxq.php">查看详情</a></div></div>
    </div>
</div>

<script>

    var oul = document.getElementsByClassName('oul')
    var odiv = document.getElementsByClassName('odiv')
    function fun1(ab,ac) {
        var oli = ab.getElementsByTagName('li')
        var aul = ac.getElementsByTagName('ul')
        var len = oli.length
        for(i=0;i<len;i++){
            oli[i].index = i
            oli[i].onclick = function () {
                for (j=0;j<aul.length;j++){
                    aul[j].style.display = 'none'
                    oli[j].style.color = ''

                    oli[j].style.borderBottom= '3px solid transparent'
                }
                aul[this.index].style.  display= 'block'
                oli[this.index].style.color = 'blue'
                oli[this.index].style.borderBottom = '3px solid blue'
            }
        }
    }

    for(k=0;k<oul.length;k++){
        fun1(oul[k],odiv[k])
    }

</script>