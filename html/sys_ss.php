<style>
            /* http://meyerweb.com/eric/tools/css/reset/
       v2.0 | 20110126
       License: none (public domain)
    */

        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: local('Lato Regular'), local('Lato-Regular'), url(9k-RPmcnxYEPm8CNFsH2gg.woff) format('woff');
        }
        /*
        @import url(http://fonts.googleapis.com/css?family=Happy+Monkey);
        */
        html, body, div, span, applet, object, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 1em;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            background: rgba(231, 231, 231, 0.43);
            line-height: 1.125em;
            color: white;
            max-width: 1920px;
            margin: 0 auto;
            position: relative;
            font-family: 'Lato', Helvetica, Arial, Tahoma;
        }
        ol, ul {
            padding: 0 10px;
            margin: 0 10px;
            line-height: 1.5em;
        }
        h1, h2, h3, h4, h5, h6 {
            text-shadow: 1px 1px 0 rgba(0,0,0,0.5);
            font-family: 'Lato', Georgia, Helvetica, Tahoma;
            margin: 10px 0;
            font-weight: normal;
        }
        h1 {
            font-size: 1.875em;
        }
        h2 {
            font-size: 1.6em;
            line-height: 1em;
        }
        h3 {
            font-size: 1.25em;
        }
        h4 {
            font-size: 1.125em;
        }
        h5 {
            font-size: 1em;
        }
        h6 {
            font-size: 0.875em;
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:hover {
            color: white;
            opacity: 0.9;
        }
        a:visited {
            color: white;
        }
        h2 {
            cursor: pointer;
        }
        code, pre {
            font-family: Monaco, Menlo, Consolas;
            font-size: 1em;
            color: #FFFFDE;
            padding: 0 3px 2px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .header {
            padding: 14px 0;
            background-color: rgb(19, 17, 17);
            background-color: #006a3f;
            background-image:
                    radial-gradient(rgba(0,0,0,0.1) 15%, transparent 16%),
                    radial-gradient(rgba(0,0,0,0.1) 15%, transparent 16%),
                    radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%),
                    radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%);
            background-image:
                    -webkit-radial-gradient(rgba(0,0,0,0.1) 15%, transparent 16%),
                    -webkit-radial-gradient(rgba(0,0,0,0.1) 15%, transparent 16%),
                    -webkit-radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%),
                    -webkit-radial-gradient(rgba(255, 255, 255, 0.1) 15%, transparent 20%);
            background-position: 0 0px, 4px 4px, 0 1px, 4px 5px;
            background-size: 8px 8px;
            border-bottom: 1px solid rgb(41, 41, 41);
        }

        .header div.float-left {
            padding-left: 2%;
        }

        .header a {
            font-size: 35px;
            color: white;
            display: block;
        }
        .header a:first-letter {
            font-size: 60px;
            line-height: 40px;
            font-weight: bold;
        }
        .header .target {
            margin-left: 5px;
            margin-bottom: 20px;
        }

        .header .reponsive-block {
            list-style: none;
            margin: 0px;
            padding: 50px 2% 0 0;
        }

        .header .reponsive-block li {
            display: inline-block;
            float:left;
        }

        .header .reponsive-block a {
            display: inline-block;
            margin: 0 5px;
            cursor: pointer;
            background: url(../i/reponsive.png) no-repeat;
        }

        .header .reponsive-block a.desktop {
            background-position: 3px 0;
            width: 34px; height: 26px;
        }

        .header .reponsive-block a.tablet-landscape {
            background-position: -49px 0;
            width: 22px;
            height: 22px;
        }

        .header .reponsive-block a.tablet-portrait {
            background-position: -90px 0;
            width: 18px;
            height: 24px;
        }

        .header .reponsive-block a.iphone-landscape {
            background-position: -129px 0;
            width: 20px;
            height: 20px;
        }

        .header .reponsive-block a.iphone-portrait {
            background-position: -166px 0;
            width: 16px;
            height: 26px;
        }

        .header .reponsive-block a.desktop:hover,
        .header .reponsive-block a.desktop.active {
            background-position: 3px -34px;
        }

        .header .reponsive-block a.tablet-landscape:hover,
        .header .reponsive-block a.tablet-landscape.active {
            background-position: -49px -34px;
        }

        .header .reponsive-block a.tablet-portrait:hover,
        .header .reponsive-block a.tablet-portrait.active {
            background-position: -91px -33px;
        }

        .header .reponsive-block a.iphone-landscape:hover,
        .header .reponsive-block a.iphone-landscape.active {
            background-position: -128px -33px;
        }

        .header .reponsive-block a.iphone-portrait:hover,
        .header .reponsive-block a.iphone-portrait.active {
            background-position: -166px -33px;
        }
        .free-wall {
            margin: auto;
        }

        .free-wall-logo {
            margin: auto;
            height: 420px;
        }
        .size2-2 {
            width: 80px;
            height: 80px;
        }

        .size11 {
            height: 160px;
            width: 160px;
        }

        .size12 {
            width: 160px;
            height: 320px;
        }

        .size21 {
            width: 320px;
            height: 160px;
        }

        .size22 {
            height: 320px;
            width: 320px;
        }

        .size13 {
            width: 160px;
            height: 480px;
        }

        .size31 {
            width: 480px;
            height: 160px;
        }

        .size23 {
            width: 320px;
            height: 480px;
        }

        .size24 {
            width: 320px;
            height: 640px;
        }

        .size32 {
            width: 480px;
            height: 320px;
        }

        .size33 {
            width: 480px;
            height: 480px;
        }

        .size34 {
            width: 480px;
            height: 640px;
        }

        .size43 {
            width: 640px;
            height: 480px;
        }

        .size35 {
            width: 480px;
            height: 800px;
        }

        .size53 {
            width: 800px;
            height: 480px;
        }

        .size36 {
            width: 480px;
            height: 960px;
        }

        .donate form {
            height: 100%;
            width: 100%;
            background: rgb(44, 62, 80);
        }

        .donate form .paypal {
            display: block;
            margin: auto;
            padding: 20px 0px 0px 0px;
            outline: 0;
        }

        .img-demo {
            vertical-align: bottom;
            list-style: none;
            margin:0;
            padding: 0;
        }

        .img-demo li {
            float: left;
            width: 25%;
            text-align: center;
        }

        .img-demo li img {
            border: 2px solid white;
            width: 98px;
            height: 98px;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }

        .clearfix:before,
        .clearfix:after {
            content: "";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        .clearfix {
            zoom: 1; /* For IE 6/7 (trigger hasLayout) */
        }

        .rest-left {
            margin-left: 244px;
        }

        .desc h1,
        .desc h2,
        .desc h3,
        .desc h4,
        .desc h5,
        .desc h6 {
            font-weight: bold;
        }

        .desc h2 {
            border-bottom: 1px solid rgba(0,0,0,0.1);
            margin-top: 0px;
            margin-bottom: 0px;
            padding-bottom: 50px;
        }

        .desc h2 span {
            float: left;
            display: block;
            line-height: 50px;
        }

        .brick {
            background-color: white;
            float: left;
            cursor: default;
            overflow: hidden;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .brick .cover {
            overflow: hidden;
            margin: 20px;
        }

        .brick .read-more {
            position: absolute;
            display: none;
            bottom: 0px;
            left: 0px;
            right: 0px;
            padding: 12px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.45);
        }

        .brick:hover .read-more {
            display: block;
            cursor: pointer;
        }

        .brick .desc {
            display: none;
        }

        .full-width .float-left {
            display: none;
        }

        .full-width .desc {
            display: block;
        }

        .full-width.brick {
            box-shadow: none;
            overflow: visible;
            border: none !important;
            background: none !important;
        }

        .full-width.brick .cover {
            margin: 0px 20px;
            color: #333;
        }

        .full-width.brick .cover * {
            text-shadow: none;
        }

        .full-width.brick .cover code {
            color: #666;
        }

        .open .float-left {
            display: none;
        }

        .open .desc {
            display: block;
        }

        .example {
            width: 0px;
            height: 0px;
            overflow: visible !important; /* for ie7 */
        }

        .example-draggable {
            cursor: move;
        }

        .example-draggable * {
            cursor: move;
        }

        .example-draggable a {
            cursor: pointer;
        }

        .cell {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            background-color: #222;
        }

        [class*="-share"] {
            cursor: pointer;
            margin: 20px 0;
            line-height: 30px;
            padding-left: 30px;
        }

        .facebook-share {
            background: url(../i/fb.png) no-repeat left center;
        }

        .twitter-share {
            background: url(../i/tw.png) no-repeat left center;
        }

        .google-share {
            background: url(../i/gp.png) no-repeat left center;
        }

        .download-icon {
            background: url(../i/download.png) no-repeat left center;
            display: block;
            margin: 0 0 10px 0;
            line-height: 30px;
            padding-left: 30px;
        }

        .js-icon {
            background: url(../i/js.png) no-repeat left center;
            display: block;
            line-height: 30px;
            padding-left: 30px;
        }

        .fork {
            float: right;
            width: 100%;
            height: 100%;
            display: block;
            background: url(../i/forkme.png) no-repeat top right;
        }

        .back-button {
            position: fixed;
            z-index: 9999;
            padding: 1%;
            bottom: 2%;
            right: 2%;
            display: none;
            background: black;
        }

        .back-button .back-icon {
            background: url(../i/back.png) no-repeat top center;
            width: 45px;
            height: 27px;
            display: block;
        }

        .back-button .back-icon:hover {
            background: url(../i/back.png) no-repeat bottom center;
        }







        @charset "utf-8";
        /* CSS Document */
        h1, h2, h3, h4, h5, h6, p, ul, ol, li, form, img, dl, dt, dd, table, th, td, blockquote, fieldset, div, strong, label, em {
            margin: 0;
            padding: 0;
            border: 0;
        }

        ul, ol, li {
            list-style: none;
        }

        input, button {
            margin: 0;
            font-size: 12px;
            vertical-align: middle;
        }

        body {
            font-family: "Microsoft YaHei UI";
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        p, p a {
            font-size: 12px;
            color: #666;
        }

        /* image-slider */
        .image-slider {
            width: 802px;
            height: 195px;
            margin: 0 auto;
            padding: 14px 0px 0px 0px;
            position: relative;
        }

        .image-slider-back, .image-slider-forward {
            float: left;
            width: 23px;
            height: 98px;
            color: White;
            position: relative;
            top: 32px;
            cursor: pointer;
        }

        .image-slider-back {
            background-repeat: no-repeat;
            background-position: left;
        }

        .image-slider-forward {
            background-repeat: no-repeat;
            background-position: right;
        }

        .image-slider-contents {
            width: 755px;
            height: 164px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .image-slider-contents .contents-wrapper {
            position: absolute;
            padding-top: 18px;
            left: 0;
            width: 100% !important;
        }

        .image-slider-contents .outer {
            background-color: #fff;
            float: left;
            width: 156px;
            height: 186px;
            margin: 0px 15px;
            cursor: pointer;
            position: relative;
        }

        .spic {
            width: 156px;
            height: 186px;
            text-align: center;
            color: #333;
            float: left;
            padding-top: 10px;
        }

        .image-slider-contents img {
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }

        .spic a {
            display: block;
            text-align: center;
        }

        .hidden {
            display: none;
        }

        .visible {
            display: block;
        }

        .thumbnail-active {
            filter: alpha(opacity=100);
            opacity: 1.0;
            cursor: pointer;
        }

        .thumbnail-inactive {
            filter: alpha(opacity=20);
            opacity: 0.2;
            cursor: pointer;
        }

        .preview {
            position: absolute;
            width: 100%;
            height: auto;
            background-color: White;
            padding: 10px 30px;
            border: solid 1px black;
        }

        .preview .img-large {
            width: 70%;
            height: 100%;
            z-index: 1000;
            position: relative;
        }

        .preview .img-large .left,.preview .img-large .right{
            position: absolute;
            top: 50%;
            margin-top: -12px;
            width: 16px;
            height: 24px;
            z-index: 1000;
            cursor: pointer;
        }
        .preview .img-large .left {
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E") no-repeat;
            left: -15px;
        }

        .preview .img-large .right {
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E") no-repeat;
            right: -15px;
        }

        /*.preview .close {*/
        /*position: absolute;*/
        /*left: 434px;*/
        /*top: -16px;*/
        /*width: 32px;*/
        /*height: 34px;*/
        /*float: right;*/
        /*cursor: pointer;*/
        /*z-index: 2000;*/
        /*}*/

        .preview .img-large img {
            width: 330px;
            height: 330px;
        }

        .preview .label {
            width: 434px;
            line-height: 30px;
            float: left;
            position: absolute;
            top: 316px;
            left: 0;
            padding: 8px;
            background-color: White;
            font-weight: bold;
            font-size: 13px;
            text-align: center;
        }

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
        /*a{*/
            /*text-decoration: none;*/
            /*color: white !important;*/
        /*}*/
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
    </style>
<style>
      body{
         background-color: white;
      }
      figure{
         width: 100%;
         height: 100%;
         background: #fff;
         overflow: hidden;
         background: rgba(0,0,0,0.7);
      }
      figcaption{
         padding: 25px;
         background: #b5b3b3;
      }
      figcaption h3{
         font-weight: 300;
         font-size: 200%;
      }
      figcaption p{
         margin: 0;
         font-size: 100%;
         margin-top: 10px;
      }
      figure img{
         display: block;
      }
      /*Hearder css*/
      .head{
         position: fixed;
         top: 0;
         left: 0;
         background-color: rgb(51, 51, 51);
         height: 80px;
         width: 100%;
         z-index:1001;
      }
      /*样式*/
      .header-logo {
         display: flex;
         align-items: center;
         height: 80px;
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
      #content{
         max-width: 1200px;
         min-width: 400px;
         margin: 90px auto 0 auto;
      }
      .image-slider-contents .outer{
         width: 25%;
         margin: 0;
      }

      /*搜索条*/
      .sousuo{
         height: 35px;
         padding: 0 15px;
         border: 1px solid #969696;
         width: 365px;
         font-size: 16px;
         outline: none;
      }
      .sousuo-icon{
         cursor: pointer;
         display: inline-block;
         width: 35px;
         height: 35px;
         position: absolute;
         border: 1px solid #969696;
         right: -34px;
         top: 0;
      }

      /*ul-tab样式*/
      .tabs {
         position: relative;
         width: 100%;
         overflow: hidden;
         margin: 0 0 2em;
         font-weight: 300;
      }
      .tabs nav {
         text-align: center;
         padding-bottom: 10px;
         border-bottom: 1px solid #c5c5c5;
      }
      .tabs nav ul {
         padding: 0;
         list-style: none;
         display: inline-block;
         margin-left: 54px;
      }
      .tabs nav li.tab-current {
         border: 1px solid #47a3da;
         box-shadow: inset 0 2px #47a3da;
         border-bottom: none;
         z-index: 100;
      }
      .tabs nav ul li {
         border: 1px solid #becbd2;
         margin: 0 0.25em;
         display: block;
         float: left;
         position: relative;
      }
      .tabs nav li.tab-current:before, .tabs nav li.tab-current:after {
         content: '';
         position: absolute;
         height: 1px;
         right: 100%;
         bottom: 0;
         width: 1000px;
         background: #47a3da;
      }
      .tabs nav li.tab-current a {
         color: #47a3da;
      }
      .tabs nav a:hover {
         color: #969696;
         opacity: 1;
      }
      .tabs nav ul li:hover{
         border-color: #768e9d;
         cursor: pointer;
      }
      .tabs nav a {
         color: #becbd2;
         display: block;
         line-height: 2;
         padding: 0 1.25em;
         white-space: nowrap;
      }
      .tabs nav li.tab-current:after {
         right: auto;
         left: 100%;
         width: 4000px;
      }
      .tabs nav li.tab-current:before, .tabs nav li.tab-current:after {
         content: '';
         position: absolute;
         height: 1px;
         right: 100%;
         bottom: 0;
         width: 1000px;
         background: #47a3da;
      }
      .content section.content-current {
         display: block;
      }
      .content section{
         display: none;
      }

      /*fellwall css*/

      .free-wall {
         margin-top: 20px;
         padding: 15px 0;
      }
      .free-wall .cell{
         transition: 200ms !important;
         transform-style: preserve-3d;
         background: white;
      }
      .free-wall .cell:hover{
         transform: scale(1.1);
         z-index: 1;
         box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
      }
      .resou{
         color: black;
         margin-top: 3px;
         text-align: left;
         font-size: 14px;
      }
      .resou span{
         cursor: pointer;
      }
      .resou span:hover{
         color: #d6423b;
      }
   </style>
<!--内容-->
<div id="content">
   <div style="padding:20px 0;width: 100%;text-align: center;">
      <div style="position: relative;display: inline-block;">
            <span class="sousuo-icon" onclick="search()">
               <img src="../image/sousuo.png" width="100%" height="100%">
            </span>
         <input type="text" class="sousuo" placeholder="关键词">
         <div class="resou">
            热门搜索：
            <span> 热门</span>
            <span> 最新</span>
            <span> 风光</span>
            <span> 人像</span>
            <span> 纪实</span>
         </div>
      </div>
   </div>
   <div>
      <div id="tabs" class="tabs">
         <div class="content">
            <div id="freewall" class="free-wall"></div>
         </div><!-- /content -->
      </div>
   </div>
</div>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/freewall.js"></script>
<script type="text/javascript" src="../layer/layer.js"></script>
<script>
   var wall = new Freewall("#freewall");
   var sjdata;
   $(function () {
       //获取所有摄影师数据
      $.ajax({
         type: "get",
         url: G_url + 'views/tvus',
         dataType: "json",
         async:false,
         success: function (res) {
            if (res.ok) {
               f_freewall(res.data);
               sjdata=res.data;
            } else {
               alert('数据获取出错请刷新')
            }
         },
         error: function (XMLHttpRequest, textStatus, errorThrown) {
            //f_toast_show('close','操作失败!');
         }
      });
      $('.resou span').click(function () {
         $('.sousuo').val($(this).text());
         search();
      });
   });
   //将图片数据获取到并且渲染在页面上
   function f_freewall(a) {
      var temp = "<div class='cell' data-am-modal='{target: \"#doc-modal-2\", closeViaDimmer: 0, width: 400, height: 225}' data-index='{index}' style='overflow: hidden;position: relative;border: 1px solid lightgray;width:{width}px; height: {height}px; background-image: url({bgurl});background-size: 100%;background-position: center;background-repeat: no-repeat;'></div>";
      var w = 200, h = 200, html = '', limitItem = a.length,zt,cla;
      for (var i = 0; i < limitItem; ++i) {
         html += temp.replace(/\{height\}/g, h)
             .replace(/\{width\}/g, w)
             .replace("{bgurl}", a[i].txtp)
             .replace("{index}", a[i].rid);
      }
      $("#freewall").html(html);
      wall.reset({
         selector: '.cell',
         animate: true,
         cellW: 200,
         cellH: 200,
         onResize: function() {
            wall.refresh();
         }
      });
      wall.fitWidth();
      $("#freewall .cell").click(function(){
         var _this = $(this).attr('data-index');//将当前的pimg元素作为_this传入函数
         f_opsys(_this);
      });
   }
   //搜索的方法
   function search() {
      if($('.sousuo').val()==''){
         layer.msg('搜索内容不能为空');
      }else {
         $.ajax({
            type: "post",
            url: G_url + 'views/tvus?s='+$('.sousuo').val(),
            dataType: "json",
            async:false,
            success: function (res) {
               if (res.ok) {
                  if(res.data==''){
                     layer.msg('无此关键词图片');
                  }else {
                     f_freewall(res.data);
                  }
               } else {
                  alert('数据获取出错请刷新')
               }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
               //f_toast_show('close','操作失败!');
            }
         });
      }
   }
   //点击摄影师跳转到摄影师的主页上
   function f_opsys(b) {
      location.href='sys_gr_jk.php?rid='+b;
   }
</script>