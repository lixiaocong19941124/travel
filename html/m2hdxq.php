<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>Title</title>
    <script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="../js/jquery.jqtimeline.js"></script>
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
        .xq-info{
            width: 100%;
        }
        .xq-banner{
            width: 100%;position: relative;
        }
        #nex{
            padding: 0.6rem 1rem;width: 60px;height: 100px;background: #d1d1d1;outline: none;border: none;color: white;
            cursor: pointer;font-size: 1.2rem;position: absolute;top: 50%;left: 0;
        }
        #pr{
            padding: 0.6rem 1rem;width: 60px;height: 100px;background: #d1d1d1;outline: none;border: none;color: white;
            cursor: pointer;font-size: 1.2rem;position: absolute;top: 50%;right: 0;
        }
        .xq-l{
            max-width:700px;float: left;position: absolute;
            top:80px;left:25%;
        }
        .xq-r{
            max-width:320px;float: right;top:80px;right:22%;position: absolute;
            line-height: 1.5rem;font-size: 1.2rem;color: #9e9e9e;font-weight: 200;
            background: white;padding: 1.4rem 1.6rem;text-align: center;
            border-radius: 0.2rem;
        }
        .xq-l>h1{
            margin: 0.6rem 0;color: #9d9e8a;
        }
        .xq-l>div{
            color: #9c9d89;margin:1rem 0;
        }
        .yd input{
            width: 120px;background: #edc68f;outline: none;padding:0.8rem 0;border: none;cursor: pointer;
            margin-left: 0.6rem;border-radius: 0.2rem;margin-top: 2rem;font-size: 1.2rem;
        }
        .yd input:last-child{
            background: white;
        }
        .yd input:first-child{
            color: white;
        }
        .xq-r div:first-child{
            text-align:left;
        }
        .xq-cont{
            max-width: 1200px; margin: auto;
        }
        .ct-l{
            width: 50%;line-height: 1.4;padding: 1rem 0;float: left;
        }
        .ct{
            width: 100%;border: 1px solid #afafaf;line-height: 1.4;padding: 1rem 0;

        }
        .ct-r{
            width: 45%;float: right;
        }
        .trip-length{
            width: 20%;border-right: 1px solid #d1d1d1;text-align: center;float: left;
        }
        .trip-length span:first-child{
            display: block;
        }
        .trip-length span:last-child{
            font-size: 10px;
        }
        .group-pop{
            width: 20%;border-right: 1px solid #d1d1d1;text-align: center;float: left;
        }
        .group-pop span:first-child{
            display: block;
        }
        .tranport{
            width: 25%;text-align: center;float: left;margin: 0 0.4rem;

        }
        .tranport i{
            background: #c6c7b0;
            color: #6f6f68;
            width: 30px;
            height: 38px;
            font-size: 27px;
            line-height: 38px;
            text-align: center;
            display: inline-block;
            margin-bottom: 3px;
        }
        .tranport div{
            width: 70%;
            color: #6f6f68;
            height: 38px;
            line-height: 38px;
            text-align: center;
            display: inline-block;
            margin-bottom: 3px;
            margin-left: 1rem;
        }
        .tranport p{
            margin-left: 0.5rem;
        }
        .price-display{float: left;text-align: center;
            width: 22%;margin-left: 0.8rem;border-left: 1px solid #d1d1d1;padding-left: 0.8rem;
        }
        .d-wrap{
            width: 60%;border: 1px solid #cacaca;margin-top:1rem ;
        }
        .date-display{float: left;padding-bottom: 0.9rem;
            width:25%;text-align: center;background: #858585; color: white;
        }
        .date-display span{
            display: block;
        }
        .date-display span:first-child{
            margin-top: 0.4rem;
        }
        .data-star{text-align: center;float: left;
            width: 20%;margin-left: 2rem;
        }
        .data-star span{
            display: block;
        }
        .data-end{text-align: center;float: left;margin-left: 2rem;
            width: 20%;
        }
        .data-end span{
            display: block;
        }
        .data-h{margin-left: 2rem;
            line-height: 4rem;
        }
        .interests{
            width: 100%;margin-top: 1rem;font-size: 1.2rem;border-bottom: 1px solid #c6c6c6;
            padding-bottom:0.6rem ;
        }
        .interests li{
            width: 8%;float: left;
        }
        .interests li:first-child{
            width: 6%;text-align: left;
        }
        .column{
            width: 100%;border-bottom: 1px solid #b3b3b3;padding-bottom: 1rem;
        }
        .column li:first-child{
            font-size: 1.4rem;list-style: none;margin-left: 0;
        }
        .column li{
            margin-top: 0.6rem;list-style:disc;margin-left: 1.2rem;
        }
        .xq-star{
            max-width: 1200px;margin: auto;
        }
        .xq-star div:first-child{
            font-size: 1.4rem;
        }
        .str{
            text-indent: 1rem;margin:0.8rem 0;
        }
        .gt-timeline{
            margin: auto !important;
        }
        .brig{
            max-width:1200px;margin: auto;padding: 1rem 0;font-size: 1.6rem;text-align: center;
        }
        .featured-img{
            max-width: 1200px;margin: auto;padding: 2rem 0;
        }
        .feat-ul{
            width: 100%;
        }
        .feat-ul li{
            width: 30%; float: left;margin-left: 2rem;
        }
        .feat-ul li img{
            width: 360px;
            height: 228px;
        }
        .dis-info{
            width: 100%;position: absolute;font-size: 1.2rem;bottom: 0;background: #999999;padding: 0.6rem 0;
            text-indent: 1rem;color: white;cursor: pointer;
        }
        .days-info{
            max-width:1200px;margin:3rem auto;
        }
        .decor-wrap{
            width: 100%;text-align: center;font-size: 2rem;padding: 2rem 0;
        }
        .itinerar-item{
            width: 100%;
        }
        .itinerar-item li{
            width: 30%;float: left;margin-left: 2rem;margin-top: 2rem;
        }
        .day-field{
            width: 10%;float: left;
        }
        .day-field span{
            display: block;max-width: 40px;max-height: 32px;color: white;text-align: center;line-height: 32px;
        }
        .day-field span:first-child{
            background: #4b4b4b;
            display: block;max-width: 40px;max-height: 32px;color: white;text-align: center;line-height: 32px;

        }
        .tia{
            display: block;max-width: 40px;max-height: 32px;color: white;text-align: center;line-height: 32px;
            background: #4b4b4b;
        }
        .nub{
            display: block;max-width: 40px;max-height: 32px;color: white;text-align: center;line-height: 32px;
            background: #999;
        }
        .day-md{
            float: right;
            width: 85%;
        }
        #yding{
            width: 100%;text-align: center;
        }
        #yding div{
            width: 10%;background: #ff9627;margin: auto;padding: 1rem;border-radius: 0.2rem;
            color: white;font-size: 1.2rem;cursor: pointer;
        }
        .decor-w{
            max-width:1200px;margin:2rem auto;
        }
        .mone{
            width: 40%;float: left;margin-top: 2rem;margin-left: 3rem;
        }
        .mone>ul{
            margin-top:1rem;
        }
        .mone>ul li{
            margin-top: 0.4rem;list-style: disc;width: 80%;margin-left: 1rem;
        }
        .mone-r{
            width: 40%;float: right;margin-top: 2rem;margin-left: 3rem;
        }
        .mone-r>ul{
            margin-top:1rem;
        }
        .mone-r>ul li{
            margin-top: 0.4rem;list-style: disc;width: 80%;margin-left: 1rem;
        }
        .bz{
            margin-top: 1rem;
        }
        #mon-yd{
            width: 100%;border: 1px solid #1c8de0;
        }
        .mon-in{
            max-width: 1200px;
            margin: auto;
            margin-top: 1.5rem;
        }
        .mon-in div{
            width: 10%;
            background: #ff9627;
            margin: auto;
            padding: 1rem;
            border-radius: 0.2rem;
            color: white;
            font-size: 1.2rem;
            text-align: center;
            cursor: pointer;
        }
        .ab{
            position: relative;
        }
        .ols-info{
            width: 100%;position: absolute;font-size: 1.2rem;background: #999999;
            color: white;cursor: pointer;padding:6% ;opacity: 0.8;display: block;bottom:0;
        }
        .obli:hover .o-op{
            background: #666;color: white;
        }
        .o-op{
            padding: 1rem;margin-top:-0.6rem;background: #cacbb6;font-size:1.2rem;font-weight: 100;
        }



        /**/
        /*set html basic style*/

        /*font family*/
        @font-face {
            font-family: "aui_iconfont";
            src: url('aui_iconfont.ttf') format('truetype');
        }
        .aui-iconfont {
            position: relative;
            font-family:"aui_iconfont" !important;
            font-size: 0.3rem;
            font-style:normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .aui-icon-appreciate:before { content: "\e644"; }
        .aui-icon-check:before { content: "\e645"; }
        .aui-icon-close:before { content: "\e646"; }
        .aui-icon-edit:before { content: "\e649"; }
        .aui-icon-emoji:before { content: "\e64a"; }
        .aui-icon-favorfill:before { content: "\e64b"; }
        .aui-icon-favor:before { content: "\e64c"; }
        .aui-icon-loading:before { content: "\e64f"; }
        .aui-icon-locationfill:before { content: "\e650"; }
        .aui-icon-location:before { content: "\e651"; }
        .aui-icon-phone:before { content: "\e652"; }
        .aui-icon-roundcheckfill:before { content: "\e656"; }
        .aui-icon-roundcheck:before { content: "\e657"; }
        .aui-icon-roundclosefill:before { content: "\e658"; }
        .aui-icon-roundclose:before { content: "\e659"; }
        .aui-icon-roundrightfill:before { content: "\e65a"; }
        .aui-icon-roundright:before { content: "\e65b"; }
        .aui-icon-search:before { content: "\e65c"; }
        .aui-icon-timefill:before { content: "\e65e"; }
        .aui-icon-time:before { content: "\e65f"; }
        .aui-icon-taxi:before { content: "\e65d"; }
        .aui-icon-unfold:before { content: "\e661"; }
        .aui-icon-warnfill:before { content: "\e662"; }
        .aui-icon-warn:before { content: "\e663"; }
        .aui-icon-camerafill:before { content: "\e664"; }
        .aui-icon-camera:before { content: "\e665"; }
        .aui-icon-commentfill:before { content: "\e666"; }
        .aui-icon-comment:before { content: "\e667"; }
        .aui-icon-likefill:before { content: "\e668"; }
        .aui-icon-like:before { content: "\e669"; }
        .aui-icon-notificationfill:before { content: "\e66a"; }
        .aui-icon-notification:before { content: "\e66b"; }
        .aui-icon-order:before { content: "\e66c"; }
        .aui-icon-samefill:before { content: "\e66d"; }
        .aui-icon-same:before { content: "\e66e"; }
        .aui-icon-deliver:before { content: "\e671"; }
        .aui-icon-evaluate:before { content: "\e672"; }
        .aui-icon-pay:before { content: "\e673"; }
        .aui-icon-send:before { content: "\e675"; }
        .aui-icon-shop:before { content: "\e676"; }
        .aui-icon-ticket:before { content: "\e677"; }
        .aui-icon-left:before { content: "\e679"; }
        .aui-icon-cascades:before { content: "\e67c"; }
        .aui-icon-discover:before { content: "\e67e"; }
        .aui-icon-list:before { content: "\e682"; }
        .aui-icon-more:before { content: "\e684"; }
        .aui-icon-myfill:before { content: "\e685"; }
        .aui-icon-my:before { content: "\e686"; }
        .aui-icon-scan:before { content: "\e689"; }
        .aui-icon-settings:before { content: "\e68a"; }
        .aui-icon-questionfill:before { content: "\e690"; }
        .aui-icon-question:before { content: "\e691"; }
        .aui-icon-shopfill:before { content: "\e697"; }
        .aui-icon-form:before { content: "\e699"; }
        .aui-icon-pic:before { content: "\e69b"; }
        .aui-icon-filter:before { content: "\e69c"; }
        .aui-icon-footprint:before { content: "\e69d"; }
        .aui-icon-top:before { content: "\e69e"; }
        .aui-icon-pulldown:before { content: "\e69f"; }
        .aui-icon-pullup:before { content: "\e6a0"; }
        .aui-icon-right:before { content: "\e6a3"; }
        .aui-icon-refresh:before { content: "\e6a4"; }
        .aui-icon-back:before { content: "\e679"; }
        .aui-icon-moreandroid:before { content: "\e6a5"; }
        .aui-icon-deletefill:before { content: "\e6a6"; }
        .aui-icon-refund:before { content: "\e6ac"; }
        .aui-icon-cart:before { content: "\e6af"; }
        .aui-icon-qrcode:before { content: "\e6b0"; }
        .aui-icon-remind:before { content: "\e6b2"; }
        .aui-icon-delete:before { content: "\e6b4"; }
        .aui-icon-profile:before { content: "\e6b7"; }
        .aui-icon-home:before { content: "\e6b8"; }
        .aui-icon-cartfill:before { content: "\e6b9"; }
        .aui-icon-discoverfill:before { content: "\e6ba"; }
        .aui-icon-homefill:before { content: "\e6bb"; }
        .aui-icon-message:before { content: "\e6bc"; }
        .aui-icon-addressbook:before { content: "\e6bd"; }
        .aui-icon-link:before { content: "\e6bf"; }
        .aui-icon-lock:before { content: "\e6c0"; }
        .aui-icon-unlock:before { content: "\e6c2"; }
        .aui-icon-vip:before { content: "\e6c3"; }
        .aui-icon-activity:before { content: "\e6c5"; }
        .aui-icon-friendaddfill:before { content: "\e6c9"; }
        .aui-icon-friendadd:before { content: "\e6ca"; }
        .aui-icon-friendfamous:before { content: "\e6cb"; }
        .aui-icon-friend:before { content: "\e6cc"; }
        .aui-icon-goods:before { content: "\e6cd"; }
        .aui-icon-selection:before { content: "\e6ce"; }
        .aui-icon-explore:before { content: "\e6d2"; }
        .aui-icon-present:before { content: "\e6d3"; }
        .aui-icon-squarecheckfill:before { content: "\e6d4"; }
        .aui-icon-square:before { content: "\e6d5"; }
        .aui-icon-squarecheck:before { content: "\e6d6"; }
        .aui-icon-round:before { content: "\e6d7"; }
        .aui-icon-roundaddfill:before { content: "\e6d8"; }
        .aui-icon-roundadd:before { content: "\e6d9"; }
        .aui-icon-add:before { content: "\e6da"; }
        .aui-icon-notificationforbidfill:before { content: "\e6db"; }
        .aui-icon-explorefill:before { content: "\e6dd"; }
        .aui-icon-fold:before { content: "\e6de"; }
        .aui-icon-game:before { content: "\e6df"; }
        .aui-icon-redpacket:before { content: "\e6e0"; }
        .aui-icon-selectionfill:before { content: "\e6e1"; }
        .aui-icon-similar:before { content: "\e6e2"; }
        .aui-icon-appreciatefill:before { content: "\e6e3"; }
        .aui-icon-infofill:before { content: "\e6e4"; }
        .aui-icon-info:before { content: "\e6e5"; }
        .aui-icon-forwardfill:before { content: "\e6ea"; }
        .aui-icon-forward:before { content: "\e6eb"; }
        .aui-icon-rechargefill:before { content: "\e6ec"; }
        .aui-icon-recharge:before { content: "\e6ed"; }
        .aui-icon-vipcard:before { content: "\e6ee"; }
        .aui-icon-voice:before { content: "\e6ef"; }
        .aui-icon-voicefill:before { content: "\e6f0"; }
        .aui-icon-friendfavor:before { content: "\e6f1"; }
        .aui-icon-wifi:before { content: "\e6f2"; }
        .aui-icon-share:before { content: "\e6f3"; }
        .aui-icon-wefill:before { content: "\e6f4"; }
        .aui-icon-we:before { content: "\e6f5"; }
        .aui-icon-lightauto:before { content: "\e6f6"; }
        .aui-icon-lightforbid:before { content: "\e6f7"; }
        .aui-icon-lightfill:before { content: "\e6f8"; }
        .aui-icon-camerarotate:before { content: "\e6f9"; }
        .aui-icon-light:before { content: "\e6fa"; }
        .aui-icon-barcode:before { content: "\e6fb"; }
        .aui-icon-flashlightclose:before { content: "\e6fc"; }
        .aui-icon-flashlightopen:before { content: "\e6fd"; }
        .aui-icon-searchlist:before { content: "\e6fe"; }
        .aui-icon-service:before { content: "\e6ff"; }
        .aui-icon-sort:before { content: "\e700"; }
        .aui-icon-down:before { content: "\e703"; }
        .aui-icon-mobile:before { content: "\e704"; }
        .aui-icon-mobilefill:before { content: "\e705"; }
        .aui-icon-copy:before { content: "\e706"; }
        .aui-icon-countdownfill:before { content: "\e707"; }
        .aui-icon-countdown:before { content: "\e708"; }
        .aui-icon-noticefill:before { content: "\e709"; }
        .aui-icon-notice:before { content: "\e70a"; }
        .aui-icon-upstagefill:before { content: "\e70e"; }
        .aui-icon-upstage:before { content: "\e70f"; }
        .aui-icon-choicenessfill:before { content: "\e714"; }
        .aui-icon-choiceness:before { content: "\e715"; }
        .aui-icon-clothesfill:before { content: "\e716"; }
        .aui-icon-clothes:before { content: "\e717"; }
        .aui-icon-creativefill:before { content: "\e718"; }
        .aui-icon-creative:before { content: "\e719"; }
        .aui-icon-female:before { content: "\e71a"; }
        .aui-icon-keyboard:before { content: "\e71b"; }
        .aui-icon-male:before { content: "\e71c"; }
        .aui-icon-pullleft:before { content: "\e71f"; }
        .aui-icon-pullright:before { content: "\e720"; }
        .aui-icon-rankfill:before { content: "\e721"; }
        .aui-icon-rank:before { content: "\e722"; }
        .aui-icon-bad:before { content: "\e723"; }
        .aui-icon-cameraadd:before { content: "\e724"; }
        .aui-icon-focus:before { content: "\e725"; }
        .aui-icon-friendfill:before { content: "\e726"; }
        .aui-icon-cameraaddfill:before { content: "\e727"; }
        .aui-icon-apps:before { content: "\e729"; }
        .aui-icon-paintfill:before { content: "\e72a"; }
        .aui-icon-paint:before { content: "\e72b"; }
        .aui-icon-picfill:before { content: "\e72c"; }
        .aui-icon-refresharrow:before { content: "\e72d"; }
        .aui-icon-markfill:before { content: "\e730"; }
        .aui-icon-mark:before { content: "\e731"; }
        .aui-icon-presentfill:before { content: "\e732"; }
        .aui-icon-repeal:before { content: "\e733"; }
        .aui-icon-album:before { content: "\e734"; }
        .aui-icon-peoplefill:before { content: "\e735"; }
        .aui-icon-people:before { content: "\e736"; }
        .aui-icon-servicefill:before { content: "\e737"; }
        .aui-icon-repair:before { content: "\e738"; }
        .aui-icon-file:before { content: "\e739"; }
        .aui-icon-repairfill:before { content: "\e73a"; }
        .aui-icon-taoxiaopu:before { content: "\e73b"; }
        .aui-icon-attentionfill:before { content: "\e73c"; }
        .aui-icon-attention:before { content: "\e73d"; }
        .aui-icon-commandfill:before { content: "\e73e"; }
        .aui-icon-command:before { content: "\e73f"; }
        .aui-icon-communityfill:before { content: "\e740"; }
        .aui-icon-community:before { content: "\e741"; }
        .aui-icon-read:before { content: "\e742"; }
        .aui-icon-calendar:before { content: "\e74a"; }
        .aui-icon-cut:before { content: "\e74b"; }
        .aui-icon-magic:before { content: "\e74c"; }
        .aui-icon-backwardfill:before { content: "\e74d"; }
        .aui-icon-forwardfill1:before { content: "\e74e"; }
        .aui-icon-playfill:before { content: "\e74f"; }
        .aui-icon-stop:before { content: "\e750"; }
        .aui-icon-tagfill:before { content: "\e751"; }
        .aui-icon-tag:before { content: "\e752"; }
        .aui-icon-group:before { content: "\e753"; }
        .aui-icon-move:before { content: "\e754"; }
        .aui-icon-all:before { content: "\e755"; }
        .aui-icon-backdelete:before { content: "\e756"; }
        .aui-icon-hotfill:before { content: "\e757"; }
        .aui-icon-hot:before { content: "\e758"; }
        .aui-icon-post:before { content: "\e759"; }
        .aui-icon-radiobox:before { content: "\e75b"; }
        .aui-icon-rounddown:before { content: "\e75c"; }
        .aui-icon-upload:before { content: "\e75d"; }
        .aui-icon-videofill:before { content: "\e75e"; }
        .aui-icon-video:before { content: "\e75f"; }
        .aui-icon-writefill:before { content: "\e760"; }
        .aui-icon-write:before { content: "\e761"; }
        .aui-icon-radioboxfill:before { content: "\e763"; }
        .aui-icon-punch:before { content: "\e764"; }
        .aui-icon-shake:before { content: "\e765"; }
        .aui-icon-add1:before { content: "\e767"; }
        .aui-icon-move1:before { content: "\e768"; }
        .aui-icon-safe:before { content: "\e769"; }
        .aui-icon-activityfill:before { content: "\e775"; }
        .aui-icon-crownfill:before { content: "\e776"; }
        .aui-icon-crown:before { content: "\e777"; }
        .aui-icon-goodsfill:before { content: "\e778"; }
        .aui-icon-messagefill:before { content: "\e779"; }
        .aui-icon-profilefill:before { content: "\e77a"; }
        .aui-icon-sound:before { content: "\e77b"; }
        .aui-icon-sponsorfill:before { content: "\e77c"; }
        .aui-icon-weunblock:before { content: "\e780"; }
        .aui-icon-weblock:before { content: "\e77f"; }
        .aui-icon-upblock:before { content: "\e77e"; }
        .aui-icon-sponsor:before { content: "\e77d"; }
        .aui-icon-babyfill:before { content: "\e710"; }
        .aui-icon-baby:before { content: "\e711"; }


        /**/
        body {


            font-family: Tahoma,Geneva,sans-serif;

            padding: 0px;

            margin: 0px;

        }

        h1{

            text-align: center;

        }



        .hl{

            color: red;

        }

        .top-line{

            margin-top:0px;

            color:black;

            border-color:black;

            border-bottom-width: 0px;

        }

        .container{

            margin-top: 30px;

        }

        .inner-wrap{

            width: 960px;

            margin-right: auto;

            margin-left: auto;

        }



        .tabs ul{

            list-style: none;

            padding: 0;

            margin: 0;

        }



        .tabs li{

            float: left;

            border: 1px solid #bbb;

            border-bottom-width: 0;

            margin: 0;

        }



        .tabs li a{

            text-decoration: none;

            display: block;

            background: #eee;

            padding: 0.24em 1em;

            color: #00c;

            width: 8em;

            text-align: center;

        }



        .tabs .selected{

            border-color: black;

        }



        .tabs .selected a{

            position: relative;

            top: 1px;

            background: white;

            color: black;

            font-weight: bold;

        }





        .header{

            text-align: center;

        }

        .header h2{

            color : #aaa;

        }



        .demo{

            padding-bottom: 10px;

            padding-top: 34px;

            background-color: #f5f5f5;

            border-top: 1px solid #e3e3e3;

            border-bottom: 1px solid #e3e3e3;

            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);

            -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);

            box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);

        }



        .apiDocTable{

            width: 100%;

            border: 1px solid black;

            border-collapse: collapse;

        }



        .timeline-content{

            text-align: center;

        }

        .timeline-content h3{

            /*text-align: center;*/

        }

        .timeline-content img{

            height: 200px;

            margin-left: auto;

            margin-right: auto;

        }



        .clear:before,

        .clear:after {

            content: " "; /* 1 */

            display: table; /* 2 */

        }



        .clear:after {

            clear: both;

        }



        .clear {

            *zoom: 1;

        }





        .button{

            background: url(../img/buttons.png) no-repeat 0 0;

            width: 255px;

            height: 42px;

            cursor: pointer;

            display: block;

        }



        .button-direct-download{

            background-position: 0px 0px;

        }

        .button-direct-download:hover{

            background-position: 0px -45px;

        }

        .button-github{

            background-position: 0px -90px;

        }

        .button-github:hover{

            background-position: 0px -135px;

        }





        .footer{

            background-color: #cccccc;

            min-height: 50px;

            margin-top: 20px;

            padding-top: 20px;

            border-top: 2px solid #999999;

        }



        /* Header styling */

        .top-bar{

            background-color: #2C3435;

            height: 40px;

        }

        .top-bar a{

            text-decoration: none;

        }

        .top-bar a:hover{

            background-color: transparent;

        }



        .wrap {

            width: 960px;

            margin-left: auto;

            margin-right: auto;

        }

        /**/
        .gt-timeline{

            position: relative;

            width: 960px;

            height: 120px;

            border: 0px solid red;

            font-family: 'Helvetica Neue', Helvetica, Arial, serif;

            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);

            color: #6d6d6d;

            margin: auto;

        }

        .gt-timeline div.main_line {

            border: none;

            border-top:3px solid #666666;

            clear:both;

            height:0;

            width: 100%;

            position: absolute;

            top:50px;

            left: 14px;

            z-index: 0;

        }



        .gt-timeline div.event{

            background: url(../img/main_img.png) no-repeat 0 -84px;

            width: 16px;

            height: 16px;

            cursor: pointer;

            position: absolute;

            z-index: 2;

            top: 44px;

        }



        .gt-timeline div.selected{

            /*border: 2px dashed #999999;*/

        }

        .gt-timeline div.e-message{

            background-color: #666666;

            position: absolute;

            top: 70px;

            color: white;

        }



        .gt-timeline div.e-message .msg{

            width: 300px;

            padding: 5px;

            font-size: 12px;

            text-shadow: 0 0 0;

            cursor: pointer;

            z-index: 100;

            position: relative;

        }



        .gt-timeline div.e-message .info{

            padding: 5px;

            font-size: 11px;

            text-shadow: 0 0 0;

            cursor: auto;

            z-index: 100;

            position: relative;

            font-weight: bold;

            border-bottom: 1px dashed #999999;

            position: default;

        }



        .gt-timeline div.e-message .message-pointer{

            background: url(../img/main_img.png) no-repeat 0 -122px;

            width: 14px;

            height: 18px;

            position: absolute;

            top: -11px;

            z-index: 1;

        }

        .gt-timeline .icon-close{

            background: url(../img/main_img.png) no-repeat -3px -227px;

            background-color: #999999;

            width: 14px;

            height: 14px;

            position: absolute;

            top: 5px;

            right: 7px;

            cursor: pointer;

        }

        .gt-timeline div.event:hover{

            background-position: -27px -84px;

        }



        .gt-timeline div.horizontal-line{

            border: 0px;

            border-left:3px solid #666666;

            clear:both;

            height:20px;

            width: 0px;

            position: absolute;

            z-index: 1;

            top: 30px;

        }



        .gt-timeline div.leftend{

            left: 14px;

        }

        .gt-timeline div.rightend{

            right: 0;

        }

        .gt-timeline .leftend .year{

            position: relative;

            text-align: center;

            top: -30px;

            left: -15px;

        }

        .gt-timeline .leftend .month{

            position: relative;

            text-align: center;

            top: -32px;

            left: -11px;

            white-space: nowrap;

        }



        .gt-timeline div.month-line{

            height: 15px;

            border-left: 2px solid #666666;

        }



        .gt-timeline div.even-month{

            top:37px;

        }

        .gt-timeline div.even-month .month{

            position: relative;

            top: -18px;

            left: -10px;

            white-space: nowrap;

        }



        .gt-timeline div.odd-month{

            top: 41px;

            height: 10px;

            border-left: 1px solid #999999;

        }



        .gt-timeline .year, .gt-timeline .month{

            font-size: 12px;

        }

        .gt-timeline .year{

            font-weight: bold;

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
            <div style="width: 10%"><a href="#" style="color: #87e2ff;text-decoration: none">未登录</a></div>
            <div><img src="../img/logo.jpg" width="80%" alt=""></div>
        </div>
    </div>
</div>
<div class="xq-info">
    <div class="xq-banner">
        <img id="mg" src="../simg/1.jpg" width="100%"height="768" alt="">
        <input id="nex" type="button"value=">">
        <input id="pr" type="button"value="<">
        <div class="xq-text">
            <div class="xq-l">
                <h1 class="tiele" style="text-align: left">探访摩洛哥古城，探索撒哈拉沙漠 <br>（十一小团）</h1>
                <div>摩洛哥是一个让人牵挂的国度。风尘滚滚的撒哈拉沙漠，蕴藏着数不尽的漂泊故事，三毛前世的淡淡乡愁，都曾在这书写。电影里走出来的卡萨布兰卡，熙熙攘攘的各种风情依旧上演，只是不见了重重谍影，有的是浪漫气息流动。地中海边的童话世界，媲美爱琴海小岛的精致风景等待赏识，

                </div>
                <div class="yd">
                    <input type="button" value="预定">
                    <input type="button" value="分享">
                </div>
            </div>
            <div class="xq-r">
                <div>开始行程</div>
                <div>，最后再回到卡萨布兰卡。在西班牙语中，卡萨布兰卡的意思是白屋，它因为电影和哈桑二世清真寺而闻名，当然那绝对不是它的全部。吹蛇人、占卜人和神医、舞者、摊贩，三教九流，光怪陆离，如果没有贾马夫纳广场，马拉喀什不过是一个再普通不过的摩洛哥城市。传说菲斯古城中有九千多条胡同，其中三千多条没有名字，你能想象生活在那里的人如何找到对方的地址吗，还是他们其实并不需要。埃本哈杜（Ait Benhaddou）有百年泥屋阵，入选了世界遗产，白袍的男子从中走过，
                    一下子就到了另一个世界。去梅尔祖卡，就进了沙漠，有最美的日落和星空。
                </div>
            </div>
        </div>
    </div>

    <div class="xq-cont clear">
        <div class="ct-l clear">
            <div class="ct clear">
                <div class="trip-length">
                    <span>旅行天数</span>
                    <span style="font-size: 32px !important;">13</span>
                    <span>天</span>
                </div>
                <div class="group-pop">
                    <span>旅行人数</span>
                    <span style="font-size: 32px !important;">≤</span>
                    <span style="font-size: 32px !important;">10</span>
                </div>
                <div class="tranport clear">
                    <i class="aui-iconfont aui-icon-cart crt"></i>
                    <i class="aui-iconfont aui-icon-cart crt"></i>
                    <i class="aui-iconfont aui-icon-cart crt"></i>
                    <i class="aui-iconfont aui-icon-cart crt"></i>
                    <p class="clear" style="width: 10%;float: left">
                        <i class="aui-iconfont aui-icon-cart crt"></i>
                    </p>

                    <div class="clear" style="float: left">
                        私密旅行小团
                    </div>
                </div>
                <div class="price-display">
                    <span>最低 RMB</span>
                    <span style="font-size: 32px !important;">¥25,800</span>
                    <span> /人</span>
                </div>
            </div>

            <div class="d-wrap clear">
                <div class="date-display">
                    <span style="font-size: 28px !important;">秋</span>
                    <span>AUTUMN</span>
                </div>

                <div class="data-star">
                    <span>2日</span>
                    <span style="font-size: 26px !important;">10月</span>
                    <span> 2017</span>
                </div>
                <div class="data-h" style="float: left">
                    -
                </div>
                <div class="data-end">
                    <span>14日</span>
                    <span style="font-size: 26px !important;">10月</span>
                    <span>2017</span>
                </div>
            </div>

            <ul class="interests clear">
                <li><i class="aui-iconfont aui-icon-pay"></i></li>
                <li>文化</li>
                <li>自然</li>
                <li>休闲</li>
                <li>摄影</li>
            </ul>

            <ul class="column">
                <li>我们喜欢什么</li>
                <li>从《北非谍影》和同名歌曲走进白色的卡萨布兰卡</li>
                <li>在撒哈拉沙漠探访原始的柏柏尔人，在夜晚仰望浩瀚的星空</li>
                <li>菲斯古城和马拉喀什古城中探寻历史的踪迹</li>
            </ul>
        </div>
        <div class="ct-r">
            <img src="../img/mg.png" style="width: 100%;height: 100%" alt="">
        </div>

    </div>
    <div class="xq-star">
        <div>基本行程</div>
        <div class="str">开始</div>

        <div class="longDemo demo" style="margin: auto">

            <div id="longTimeLine"></div>
        </div>
    </div>

    <div class="brig">
        亮点
    </div>
    <div class="featured-img">
        <ul class="feat-ul clear">
            <li>
                <div class="ab"><img src="../img/jr.jpg" alt="">
                    <div class="ols-info">由此进入菲斯古城</div>
                </div>
            </li>
            <li>
                <div class="ab"><img src="../img/tf.jpg" alt="">
                    <div class="ols-info">探索摩洛哥沙漠</div>
                </div>
            </li>
            <li>
                <div class="ab"><img src="../img/ps.jpg" alt="">
                    <div class="ols-info">亚特兰蒂斯之美</div>
                </div>
            </li>
        </ul>
    </div>



    <div class="days-info clear">
        <div class="decor-wrap">
            详细行程
        </div>
        <ul class="itinerar-item clear">
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">1</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">2</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">3</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">4</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">5</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">6</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">1</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">7</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">8</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">9</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
            <li class="clear">
                <div class="day-field">
                    <span class="kd">第</span>
                    <span class="nub">1</span>
                    <span class="tia">天</span>
                </div>
                <div class="day-md">
                    <h3 style="font-weight: 400">出发地-卡萨布兰卡(Casablanca)</h3><br>
                    当您抵达萨布兰卡国际机场后，您的导游和专属
                    司机会带着碧山的接机牌在接机大厅等候您，前往酒店办理入住并休憩。
                    之后可以参观摩洛哥的经济中心 - 卡萨布兰卡。从默罕默德五世广场，中央大市场，
                    到布满玲珑小商铺的Habbous区。午餐后还将游览Anfa & Ain Diab居民区，圣心大教堂，
                    旧城区Ancienne Medina, Ancienne Prefecture及哈桑二世清真寺，傍晚在酒店用餐。
                </div>
            </li>
        </ul>
        <div class="mon-in">
            <div>
                预定
            </div>
        </div>
    </div>
    <div class="decor-w clear">
        <div class="decor-wrap clear">
            价格信息
        </div>
        <div class="mone">
            <h3>价格包含</h3>
            <ul>
                <li>行程中所列或同等级别住宿（两人一间）</li>
                <li>行程中所有提及的景点及活动门票</li>
                <li>行程中所列午餐及晚餐</li>
                <li>在撒哈拉沙漠地区的4X4越野车服务</li>
                <li>在撒哈拉沙漠地区的4X4越野车服务</li>
            </ul>
        </div>
        <div class="mone-r">
            <h3>价格不包括</h3>
            <ul>
                <li>行程中所列或同等级别住宿（两人一间）</li>
                <li>行程中所有提及的景点及活动门票</li>
                <li>行程中所列午餐及晚餐</li>
                <li>在撒哈拉沙漠地区的4X4越野车服务</li>
                <li>在撒哈拉沙漠地区的4X4越野车服务</li>
            </ul>
            <h3 class="bz">备注</h3>
            <ul>
                <li>行程中所列或同等级别住宿（两人一间）</li>
                <li>行程中所有提及的景点及活动门票</li>
                <li>行程中所列午餐及晚餐</li>
            </ul>
        </div>
    </div>
    <div class="mon-in">
        <div>
            预定
        </div>
    </div>

    <div class="decor-wrap clear">
        璧山微信
    </div>
    <div class="featured-img">
        <ul class="feat-ul clear">
            <li>
                <div class="ab"><img src="../img/1.jpeg" alt="">
                    <div class="ols-info">2017-03-02 <br>
                        碧山人 | 摩洛哥导游邓嘉：人是需要流浪的。</div>
                </div>

                <p style="padding: 1rem 0">“我做这个，就是不希望成为一个途经的过客，我希望成为你们可能永远不会再回来的摩洛哥，一个留下的记忆。</p>
                <a href="#"><< Read Mone</a>
            </li>
            <li>
                <div class="ab"><img src="../img/2.jpeg" alt="">
                    <div class="ols-info">2017-03-02 <br>
                        碧山人 | 摩洛哥导游邓嘉：人是需要流浪的。</div>
                </div>

                <p style="padding: 1rem 0">“我做这个，就是不希望成为一个途经的过客，我希望成为你们可能永远不会再回来的摩洛哥，一个留下的记忆。</p>
                <a href="#"><< Read Mone</a>
            </li>
            <li>
                <div class="ab"><img src="../img/3.png" alt="">
                    <div class="ols-info">2017-03-02 <br>
                        碧山人 | 摩洛哥导游邓嘉：人是需要流浪的。</div>
                </div>
                <p style="padding: 1rem 0">“我做这个，就是不希望成为一个途经的过客，我希望成为你们可能永远不会再回来的摩洛哥，一个留下的记忆。</p>
                <a href="#"><< Read Mone</a>
            </li>
        </ul>
    </div>
    <div class="decor-wrap clear">
        相似行程
    </div>
    <div class="featured-img">
        <ul class="feat-ul clear">
            <li class="obli">
                <img src="../img/1.jpeg" alt="">
                <p class="o-op">我希望成为你会个留下的记忆。</p>
            </li>
            <li class="obli">
                <img src="../img/rj.jpg" alt="">
                <p class="o-op">我希望成为你会个留下的记忆。</p>
            </li>
            <li class="obli">
                <img src="../img/nj.jpg" alt="">
                <p class="o-op">我希望成为你会个留下的记忆。</p>
            </li>
        </ul>
    </div>
</div>
<script>
    var ximg = ['../simg/1.jpg','../simg/2.jpg','../simg/3.jpg','../simg/4.jpg']
    var nex = document.getElementById('nex')
    var pr = document.getElementById('pr')
    var xmg = document.getElementById('mg')
    var xlen = ximg.length
    xq = 0
    nex.onclick = function () {
        xq = xq+1
        if (xq == xlen){
            xq = 0
        }
        xmg.src=ximg[xq]
    }
    pr.onclick = function () {
        xq=xq-1

        if (xq < 0){
            xq = xlen-1
        }
        xmg.src=ximg[xq]
    }
    function xim() {
        xq++
        if (xq == xlen){
            xq = 0
        }
        xmg.src=ximg[xq]
    }
    function fn() {
        tim = setInterval(function () {
            xim()
        },3000)
    }

    fn()
    var ev = [{
        id : 1,
        name : "Android 1.0 发布，这是 Android 第一个版本。",
        on : new Date(2008,9,23)
    },{
        id : 2,
        name : "Android 1.5 发布，取名 Cupcake（纸杯蛋糕）。",
        on : new Date(2009,4,30)
    },{
        id : 3,
        name : "Android 1.6 发布，取名 Donut（甜甜圈），首次支持了 CDMA 网络。",
        on : new Date(2009,9,15)
    },{
        id : 4,
        name : "Android 2.0 发布，取名  Eclair（松饼）。",
        on : new Date(2009,10,26)
    },{
        id : 6,
        name : "Android 2.2 发布，取名 Froyo（冻酸奶）。",
        on : new Date(2010,5,20)
    },{
        id : 7,
        name : "Android 2.3 发布，取名 Gingerbread（姜饼）。",
        on : new Date(2010,12,7)
    },{
        id : 8,
        name : "Android 3.0 发布，取名 Honeycomb（蜂巢），专用于平板电脑。",
        on : new Date(2011,2,2)
    },{
        id : 9,
        name : "Android 3.1 发布，取名 Honeycomb（蜂巢）。",
        on : new Date(2011,5,11)
    },{
        id : 10,
        name : "Android 3.2 发布，取名 Honeycomb（蜂巢）。",
        on : new Date(2011,7,13)
    },{
        id : 11,
        name : "Android 4.0 发布，取名 Ice Cream Sandwich（冰激凌三明治），这是 Android 发展历史上最重大的一次升级。",
        on : new Date(2011,10,19)
    },{
        id : 12,
        name : "Android 4.1 发布，取名 Jelly Bean（果冻豆）。",
        on : new Date(2012,6,28)
    },{
        id : 13,
        name : "Android 4.2 发布，取名 Jelly Bean（果冻豆）。",
        on : new Date(2012,10,30)
    }];
    $('#longTimeLine').jqtimeline({
        events : ev,
        numYears:3,
        startYear:2008,
        click:function(e,event){
            loadPage(event);
        }
    });
</script>
</body>
</html>