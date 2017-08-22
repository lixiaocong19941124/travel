<style>

       html,body,header,section,footer,div,ul,ol,li,img,a,span,em,del,legend,center,strong,var,fieldset,form,label,dl,dt,dd,cite,input,hr,time,mark,code,figcaption,figure,textarea,h1,h2,h3,h4,h5,h6,p{
           margin:0;
           border:0;
           padding:0;
           font-style:normal;
           font-family: "微软雅黑" !important;
       }
       li{
           list-style: none !important;
       }
       a{
           text-decoration: none;
       }
       a:hover{
           color: white !important;
       }
       [v-clock]{
           display: none;
       }
       .fl-left{
           float: left !important;
       }
       .fl-right{
           float: right !important;
       }
       .ocont{
           width: 2.6rem;
           height:3.4rem;
           border-bottom: 2px solid transparent;
           margin-right: 1rem;
           transition: .5s all;
       }
       .ocon{
           width: 80%;
           height: 2rem;
           margin-left: 0.3rem;
           background-image: url(../image/ssuo.png);
           background-size: 100% 100%;
           margin-top: 0.6rem;
           transition: .5s all;
       }

       .ocont:hover .ocon{
           background-image: url(../image/ssuo2.png);
           transition: .5s all;
       }

       .bor{
           width: 0;border: 2px solid transparent;margin:0.6rem auto 0; transition: .5s all;
       }
       .ocont:hover .bor{
           transition: all 0.5s;
           width:35px;border:  2px solid #e6d3ba; transition: .5s all;
       }


       .acont{
           width: 2.6rem;
           height:2.6rem;
           border-bottom: 2px solid transparent;
           margin-right: 1rem;
           transition: .5s all;
       }

       .acon{
           margin-left: 0.3rem;
           width: 80%;
           height: 2rem;
           background-image: url(../image/pop.png);
           background-size: 100% 100%;
           transition: .5s all;
           margin-top: 0.6rem
       }


       .acont:hover .acon{
           background-image: url(../image/pop.png);
           transition: .5s all;
       }

       .bar{
           width: 0;border: 2px solid transparent;margin:0.6rem auto 0; transition: .5s all;
       }
       .acont:hover .bar{
           transition: all 0.5s;
           width:35px;border:  2px solid #e6d3ba; transition: .5s all;
       }

       .cont{
           width: 2.8rem;
           height:3.4rem;
           border-bottom: 2px solid transparent;
           margin-right: 1rem;
           transition: .5s all;
           position: relative;
       }

       .con{
           width: 80%;
           height: 2rem;
           margin-left: 0.3rem;
           background-image: url(../image/gneng.png);
           background-size: 100% 100%;
           margin-top: 0.6rem;
       }
       .onc{
           width: 80%;
           height: 2rem;
           margin-left: 0.3rem;
           background-image: url(../image/gneng2.png);
           background-size: 100% 100%;
           margin-top: 0.6rem;
       }
       .con-info{
           position: absolute;
           top:60px;
           height:26rem;
           right:-1.5rem;
           width: 6rem;
           z-index: 999;
           background:#eae6e8;
           display: none;
           color: #666;
       }
       .bir{
           width: 0;border: 2px solid transparent;margin:0.6rem auto 0; transition: .5s all;
       }
       .cont:hover .bir{
           transition: all 0.5s;
           width:35px;border:  2px solid #e6d3ba; transition: .5s all;
       }
       .con-info li{
           text-align: center;
           width: 100%;
           line-height:2rem !important;
           z-index: 999;
           padding: 0.5rem 0 0 0;
           margin-top: 0.1rem;

       }
       .con-info li:last-child{
           border: none;
       }
       .con-info li:hover{
           background: #999;
       }

       .header{
           position: fixed;
           height: 90px;
           width: 100%;
           top: 0;
           line-height: 90px;
           z-index: 11;
       }
       .footer{
           position: fixed;
           height: 90px;
           width: 100%;
           bottom: 0;
           line-height: 90px;
           text-align: center;
       }
       .tx-cl-white{
           color: white !important;
       }
       .ckxq,.ljgm{
           vertical-align: middle;
           padding: 10px 15px;
           display: inline-block;
           color: white;
           cursor: pointer;
       }
       .biaoqian{
           display: inline-block;
           padding: 5px 8px;
           border: 1px solid lightgray;
           color: #939393;
           margin-right: 5px;
           margin-bottom: 5px;
       }
       .col-black{
           color: black !important;
       }
       /*头部最大最小宽度*/
       .head-max-min{
           max-width: 1200px;
           min-width: 400px;
           margin: 0 auto;
       }
       /*顶部头像的导航条*/
       .toubulog{
           max-width: 1200px;
           min-width: 400px;
           height: 200px;
           margin: 0 auto;
       }

       #leftnav,#rightnav{
           position: absolute;
           top: 50%;
           margin-top: -62.5px;
           display: inline-block;
           cursor: pointer;
           height: 65px;
           width: 40px;
           background-repeat: no-repeat;
           background-image: url(../image/imgs-grid-icons.png);
       }

       #leftnav{
           background-position: 2px center;
           left: 10px;
       }
       #rightnav{
           background-position: -42px center;
           right: 10px;
       }


       /* General Blueprint Style */
       @import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
       @font-face {
           font-family: 'bpicons';
           src:url('../fonts/bpicons/bpicons.eot');
           src:url('../fonts/bpicons/bpicons.eot?#iefix') format('embedded-opentype'),
           url('../fonts/bpicons/bpicons.woff') format('woff'),
           url('../fonts/bpicons/bpicons.ttf') format('truetype'),
           url('../fonts/bpicons/bpicons.svg#bpicons') format('svg');
           font-weight: normal;
           font-style: normal;
       } /* Made with http://icomoon.io/ */

       *, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
       body, html { font-size: 100%; padding: 0; margin: 0;}

       /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
       .clearfix:before, .clearfix:after { content: " "; display: table; }
       .clearfix:after { clear: both; }

       body {
           font-family: 'Lato', Calibri, Arial, sans-serif;
           color: #47a3da;
       }

       a {
           color: #666;
           text-decoration: none;
           outline: none;
       }
       .container > header {
           width: 90%;
           max-width: 69em;
           margin: 0 auto;
           padding: 2.875em 1.875em 1.875em;
       }

       .container > header h1 {
           font-size: 2.125em;
           line-height: 1.3;
           margin: 0 0 0.6em 0;
           float: left;
           font-weight: 400;
       }

       .container > header > span {
           display: block;
           position: relative;
           z-index: 200;
           font-weight: 700;
           text-transform: uppercase;
           letter-spacing: 0.5em;
           padding: 0 0 0.6em 0.1em;
       }

       .container > header > span span:after {
           width: 30px;
           height: 30px;
           left: -12px;
           top: -8px;
           font-size: 75%;
           position: relative;
       }

       .container > header > span span:hover:before {
           content: attr(data-content);
           text-transform: none;
           text-indent: 0;
           letter-spacing: 0;
           font-weight: 300;
           font-size: 110%;
           padding: 0.8em 1em;
           line-height: 1.2;
           text-align: left;
           left: auto;
           margin-left: 4px;
           position: absolute;
           color: #fff;
           background: #47a3da;
       }

       .container > header nav {
           float: right;
           text-align: center;
       }

       .container > header nav a {
           display: inline-block;
           position: relative;
           text-align: left;
           width: 2.5em;
           height: 2.5em;
           background: #fff;
           border-radius: 50%;
           margin: 0 0.1em;
           border: 4px solid #47a3da;
       }

       .container > header nav a > span {
           display: none;
       }

       .container > header nav a:hover:before {
           content: attr(data-info);
           color: #47a3da;
           position: absolute;
           width: 600%;
           top: 120%;
           text-align: right;
           right: 0;
           pointer-events: none;
       }

       .container > header nav a:hover {
           background: #47a3da;
       }

       .bp-icon:after {
           font-family: 'bpicons';
           speak: none;
           font-style: normal;
           font-weight: normal;
           font-variant: normal;
           text-transform: none;
           text-align: center;
           color: #47a3da;
           -webkit-font-smoothing: antialiased;
       }

       .container > header nav .bp-icon:after {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           line-height: 2;
           text-indent: 0;
       }

       .container > header nav a:hover:after {
           color: #fff;
       }

       .bp-icon-next:after {
           content: "\e000";
       }
       .bp-icon-drop:after {
           content: "\e001";
       }
       .bp-icon-archive:after {
           content: "\e002";
       }
       .bp-icon-about:after {
           content: "\e003";
       }
       .bp-icon-prev:after {
           content: "\e004";
       }

       @media screen and (max-width: 55em) {

           .container > header h1,
           .container > header nav {
               float: none;
           }

           .container > header > span,
           .container > header h1 {
               text-align: center;
           }

           .container > header nav {
               margin: 0 auto;
           }

           .container > header > span {
               text-indent: 30px;
           }
       }


       /*layer*/


       /**/
       @font-face {
           font-family: 'fontawesome';
           src:url('../fonts/fontawesome/fontawesome.eot?-e43dk9');
           src:url('../fonts/fontawesome/fontawesome.eot?#iefix-e43dk9') format('embedded-opentype'),
           url('../fonts/fontawesome/fontawesome.woff?-e43dk9') format('woff'),
           url('../fonts/fontawesome/fontawesome.ttf?-e43dk9') format('truetype'),
           url('../fonts/fontawesome/fontawesome.svg?-e43dk9#fontawesome') format('svg');
           font-weight: normal;
           font-style: normal;
       } /* Made with http://icomoon.io/app */

       /* General style */
       .grid-gallery ul {
           list-style: none;
           margin: 0;
           padding: 0;
       }

       .grid-gallery figure {
           margin: 0;
       }

       .grid-gallery figure img {
           display: block;
           width: 100%;
           border: 1px solid #e4e4e4;
       }

       .grid-gallery figcaption h3 {
           margin: 0;
           padding: 0 0 0.5em;
       }

       .grid-gallery figcaption p {
           margin: 0;
       }

       /* Grid style */
       .grid-wrap {
           /*max-width: 70em;*/
           width: 100%;
           /*margin: 0 auto;*/
           /*padding: 0 1em 1.875em;*/
       }

       .grid {
           margin: 0 auto;
       }

       .grid li {
           width: 16.666666%;
           float: left;
           cursor: pointer;
       }

       .grid figure {
           padding: 15px;
           -webkit-transition: opacity 0.2s;
           transition: opacity 0.2s;
       }

       .grid li:hover figure {
           opacity: 0.7;
       }

       .grid figcaption {
           background: #e4e4e4;
           padding: 25px;
       }

       /* Slideshow style */
       .slideshow {
           z-index: 1002;
           position: fixed;
           background: rgba(0,0,0,0.6);
           width: 100%;
           height: 100%;
           top: 0;
           left: 0;
           opacity: 0;
           visibility: hidden;
           overflow: hidden;
           -webkit-perspective: 1000px;
           perspective: 1000px;
           -webkit-transition: opacity 0.5s, visibility 0s 0.5s;
           transition: opacity 0.5s, visibility 0s 0.5s;
       }

       .slideshow-open .slideshow {
           opacity: 1;
           visibility: visible;
           -webkit-transition: opacity 0.5s;
           transition: opacity 0.5s;
       }

       .slideshow ul {
           width: 100%;
           height: 100%;
           -webkit-transform-style: preserve-3d;
           transform-style: preserve-3d;
           -webkit-transform: translate3d(0,0,150px);
           transform: translate3d(0,0,150px);
           -webkit-transition: -webkit-transform 0.5s;
           transition: transform 0.5s;
       }

       .slideshow ul.animatable li {
           -webkit-transition: -webkit-transform 0.5s;
           transition: transform 0.5s;
       }

       .slideshow-open .slideshow ul {
           -webkit-transform: translate3d(0,0,0);
           transform: translate3d(0,0,0);
       }

       .slideshow li {
           width: 1000px;
           height: 700px;
           position: absolute;
           top: 50%;
           left: 50%;
           margin: -350px 0 0 -500px;
           visibility: hidden;
       }

       .slideshow li.show {
           visibility: visible;
       }

       .slideshow li:after {
           content: '';
           position: absolute;
           width: 100%;
           height: 100%;
           top: 0;
           left: 0;
           background: rgba(255,255,255,0.8);
           -webkit-transition: opacity 0.3s;
           transition: opacity 0.3s;
       }

       .slideshow li.current:after {
           visibility: hidden;
           opacity: 0;
           -webkit-transition: opacity 0.3s, visibility 0s 0.3s;
           transition: opacity 0.3s, visibility 0s 0.3s;
       }

       .slideshow figure {
           width: 100%;
           height: 100%;
           background: #fff;
           border: 30px solid #fff;
           overflow: hidden;
       }

       .slideshow figcaption {
           padding-bottom: 20px;
       }

       .slideshow figcaption h3 {
           font-weight: 300;
           font-size: 200%;
       }

       /* Navigation */
       .slideshow nav span {
           position: fixed;
           z-index: 1000;
           color: #404751;
           text-align: center;
           padding: 3%;
           cursor: pointer;
           font-size: 2.2em;
       }

       .slideshow nav span.nav-prev,
       .slideshow nav span.nav-next {
           top: 50%;
           -webkit-transform: translateY(-50%);
           transform: translateY(-50%);
       }

       .slideshow nav span.nav-next {
           right: 0;
       }

       .slideshow nav span.nav-close {
           top: 0;
           right: 0;
           padding: 0.5em 1em;
           color: #d6f5ff;
       }

       .icon:before,
       .icon:after {
           font-family: 'fontawesome';
           speak: none;
           font-style: normal;
           font-weight: normal;
           font-variant: normal;
           text-transform: none;
           line-height: 1;
           -webkit-font-smoothing: antialiased;
           -moz-osx-font-smoothing: grayscale;
       }

       span.nav-prev:before {
           content: "\e601";
       }

       span.nav-next:before  {
           content: "\e600";
       }

       span.nav-close:before {
           content: "\e602";
       }

       /* Info on arrow key navigation */
       .info-keys {
           position: fixed;
           top: 10px;
           left: 10px;
           width: 60px;
           font-size: 8px;
           padding-top: 20px;
           text-transform: uppercase;
           color: #fff;
           letter-spacing: 1px;
           text-align: center;
       }

       .info-keys:before,
       .info-keys:after {
           position: absolute;
           top: 0;
           width: 16px;
           height: 16px;
           border: 1px solid #fff;
           text-align: center;
           line-height: 14px;
           font-size: 12px;
       }

       .info-keys:before {
           left: 10px;
           content: "\e603";
       }

       .info-keys:after {
           right: 10px;
           content: "\e604";
       }

       /* Example media queries (reduce number of columns and change slideshow layout) */

       @media screen and (max-width: 60em) {
           /* responsive columns; see "Element sizing" on http://masonry.desandro.com/options.html */
           .grid li {
               width: 33.3%;
           }

           .slideshow li {
               width: 100%;
               height: 100%;
               top: 0;
               left: 0;
               margin: 0;
           }

           .slideshow li figure img {
               width: auto;
               margin: 0 auto;
               max-width: 100%;
           }

           .slideshow nav span,
           .slideshow nav span.nav-close {
               font-size: 1.8em;
               padding: 0.3em;
           }

           .info-keys {
               display: none;
           }

       }

       @media screen and (max-width: 35em) {
           .grid li {
               width: 50%;
           }
       }

       @media screen and (max-width: 24em) {
           .grid li {
               width: 100%;
           }
       }

      .mar-l-20 {
         margin-left: 80px;
      }

      .mar-r-20 {
         margin-right: 80px;
      }

      /*slider样式*/
      .image-slider{
         width: 100%;
      }
      .image-slider-contents{
         width: 100%;
      }
      .image-slider-contents{
         overflow: visible;
      }
      .image-slider-forward,.image-slider-back{
         display: none !important;
      }
      .image-slider-contents .outer{
         width: 25%;
         margin: 0;
      }
      .znx{
         padding: 4px 10px;
         display: inline-block;
         color: white;
         background-color: #47a3da;
         cursor: pointer;
      }

   </style>
<div id="demo" >
   <div style="height: 200px;background: url('../image/旅行者4_03.png') no-repeat;background-size: cover;">
       <div class="toubulog" style="position: relative;">
           <div style="position: absolute;bottom: 0;">
               <img class="fl-left" :src="grzl.txtp" width="100" height="100">
               <div class="fl-left" style="width: 300px;color: white;margin-left: 10px;">
                   <div style="margin-bottom: 10px;">昵称：{{ grzl.mc }}</div>
                   <div>电话：{{ grzl.sj }}</div>
               </div>
           </div>
       </div>
   </div>
   <div style="max-width: 1200px;margin: 0 auto;">
      <div style="margin-top: 10px;">
         <span class="col-black" style="vertical-align: middle">热度 {{ grzl.ld }}</span>
         <div class="znx fl-right" onclick="znx({{ grzl.rid }})" style="border: 1px solid #e4e4e4">给TA发送站内信</div>
      </div>
      <div style="margin: 40px 0;">
         {{ grzl.js }}
      </div>
      <div id="grid-gallery" class="grid-gallery">
         <section class="grid-wrap">
            <ul class="grid" id="grid">
               <li class="grid-sizer"></li>
               <!-- for Masonry column width -->
               <script type="text/template" id="grid_template">
                  {{~ it:a:index }}
                  <li>
                     <figure>
                        <img src="{{= a.tp}}" alt=""/>
                        <figcaption>
                           <h3>{{= a.bt}}</h3>
                           <p>{{= a.js}}</p></figcaption>
                     </figure>
                  </li>
                  {{~}}
               </script>
            </ul>
         </section><!-- // grid-wrap -->
         <section class="slideshow">
            <ul id="slide">
               <script type="text/template" id="slide_template">
                  {{~ it:a:index }}
                     <li>
                        <figure>
                           <figcaption>
                              <h3>{{= a.bt}}</h3>
                              <p>{{= a.js}}</p>
                           </figcaption>
                           <img src="{{= a.tp}}" alt="" style="margin: 0 auto;height: 100%;width: auto;"/>
                        </figure>
                     </li>
                  {{~}}
               </script>
            </ul>
            <nav>
               <span class="icon nav-prev"></span>
               <span class="icon nav-next"></span>
               <span class="icon nav-close"></span>
            </nav>
         </section><!-- // slideshow -->
      </div><!-- // grid-gallery -->
   </div>
</div>

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/api.js"></script>
<script src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/doT.min.js"></script>
<script type="text/javascript" src="../layer/layer.js"></script>
<script src="../js/vue.js"></script>
<script src="../js/common.js"></script>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/cbpGridGallery.js"></script>
<script>
   var sign=URLencode($.cookie('sign'));
   var rid=GetQueryString('rid');
   $(function () {
       //获取摄影师的个人数据
      $.ajax({
         type: "get",
         url: G_url + 'views/get?rid=' + rid,
         dataType: "json",
         async: false,
         success: function (res) {
            if (res.ok) {
               demo.grzl = res.data;
               demo.tppic = res.pic;
               demo.bq = res.bq;
               uid = res.data.rid;
               if (res.data.txtp == null) {
                  demo.grzl[0].txtp = '../image/logo.jpg';
               }
               //使用doT来循环数据
               f_template('grid', res.pic, "grid_template");
               f_template('slide', res.pic, "slide_template");
               //初始化看图插件
               new CBPGridGallery(document.getElementById('grid-gallery'));
            } else {
               alert('数据获取出错请刷新')
            }
         },
         error: function (XMLHttpRequest, textStatus, errorThrown) {
            //f_toast_show('close','操作失败!');
         }
      });
       //点击图片时放大
      $('#grid li').click(function () {
         $('#slide li').each(function () {
            var bigw = $(this).children('figure').innerHeight(), smalw = $(this).children('figure').children('figcaption').outerHeight();
            $(this).children('figure').children('img').css('height', bigw - smalw + 'px');
         })
      });
   });

   //点击发送站内信的方法
   function znx(mrid) {
      if (mrid == $.cookie('userrid')) {
         layer.msg('无法给自己发送站内信', {icon: 2});
      }else {
         layer.prompt({title: '想对作者的说的话', formType: 2}, function (text, index) {
            $.ajax({
               type: "post",
               url: G_url + 'doi_usid/add/tvms?sign=' + sign,
               data: 'usid2=' + rid + '&msg=' + text,
               dataType: "json",
               async: false,
               success: function (res) {
                  if (res.ok) {
                     layer.close(index);
                  } else {
                     alert('数据获取出错请刷新')
                  }
               },
               error: function (XMLHttpRequest, textStatus, errorThrown) {
                  //f_toast_show('close','操作失败!');
               }
            });
         });
      }
   }
   function f_template(a,b,c){
      var doid = $api.byId(a);
      console.log(doid);
      var template = $api.byId(c);
      dot = doT.template(template.innerHTML);
      doid.innerHTML = dot(b);
   }
   var demo = new Vue({
      el: '#demo',
      data: {
         grzl: []
      }
   });
</script>