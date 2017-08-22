<style>
      /*slider样式*/
      .image-slider,.image-slider-contents{
         width: 100%;
      }
      .image-slider-contents{
         overflow: visible;
      }
      .image-slider-forward,.image-slider-back{
         display: none !important;
      }
      .image-slider-contents .outer {
          width: 25%;
          margin: 0;
      }
      .clear-both:after{
         clear: both;
      }

      /*热卖产品 css*/
      .remai-content{
         zoom: 1;
      }
      .remai-content:after{
         content: '';
         clear: both;
         width: 0;
         height: 0;
         display: block;
      }

      .remai-content .remai-content-img{
         width: 35%;
         float: left;
         margin-bottom: 10px;
         height: 220px;
      }
      .remai-content .remai-content-img>div{
         padding: 10px;
         border: 1px solid #e5e5e5;
         height: 100%;
      }

      .remai-content .remai-content-text{
         width: 65%;
         float: left;
         margin-left: -1px;
         margin-bottom: 10px;
      }
      .remai-content .remai-content-text .remai-content-text-out{
         padding: 10px;
         border: 1px solid #e5e5e5;
         position: relative;
         height: 220px;
      }
      .remai-content-text-title{
         font-size: 18px;
         font-weight: 600;
         padding: 10px 0;
      }
      .remai-content-text-bottom{
         position: absolute;
         bottom: 10px;
         right: 10px;
      }
      .remai-content-text-bottom>span{
          padding: 0.8rem 0.4rem;
      }
   </style>
<!--内容-->
<div id="demo" >
   <div>
      <img src="../image/tv1_03.png" width="100%" height="400">
   </div>
   <div style="padding: 10px 0">
      <span style="font-size: 20px;">限时特卖</span>
      <div id="temai">
         <div style="float: left;width: 33.3333%;">
            <div style="padding: 10px;">
               <img src="../image/tv1_03.png" width="100%" height="200">
            </div>
         </div>
         <div style="float: left;width: 33.3333%;">
            <div style="padding: 10px;">
               <img src="../image/tv1_03.png" width="100%" height="200">
            </div>
         </div>
         <div style="float: left;width: 33.3333%;">
            <div style="padding: 10px;">
               <img src="../image/tv1_03.png" width="100%" height="200">
            </div>
         </div>
      </div>
   </div>
   <div style="padding: 10px 0;">
      <div style="padding: 10px 0;">
         <span style="font-size: 20px;">热卖产品</span>
      </div>
      <div>
         <div class="remai-content" v-for="dt in zbsj">
            <div class="clear-both remai-content-img">
               <div>
                  <img :src="dt.tp" width="100%" height="200">
               </div>
            </div>
            <div class="clear-both remai-content-text">
               <div class="remai-content-text-out">
                  <div>
                     <span class="biaoqian" v-for="bq in dt.bq">{{bq}}</span>
                  </div>
                  <div class="remai-content-text-title">
                     <span style="display: inline-block;width: 80%">{{dt.mc}}</span>
                     <span class="fl-right">{{dt.jg}}元</span>
                  </div>
                  <div class="remai-content-text-content">
                     {{dt.sm}}
                  </div>
                  <div class="remai-content-text-bottom">
                     <span class="ckxq" style="background: #e69d3b;">
<!--                         <a onclick="location.href='m2zb_1_1.php?rid={{dt.rid}}'">查看详情</a>-->
                         <a href='m2zb_1_jk.php'>查看详情</a>
                     </span>
                     <span class="ljgm" style="background: #3ec9e6;">立即购买</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript" src="../js/vue.js"></script>
<script>
   $(function () {
       //获取周边的全部数据
      $.ajax({
         type: "get",
         url: G_url + 'views/see/tvpe',
         dataType: "json",
         async:false,
         success: function (res) {
            if (res.ok) {
               for(var i=0;i<res.data.length;i++){
                  if(res.data[i].bq==null){
                     res.data[i].bq=[];
                  }else {
                     res.data[i].bq=res.data[i].bq.split(',');
                  }
               }
               demo.zbsj=res.data;
            } else {
               alert('数据获取出错请刷新')
            }
         },
         error: function (XMLHttpRequest, textStatus, errorThrown) {
            //f_toast_show('close','操作失败!');
         }
      });
   });
   var demo = new Vue({
      el: '#demo',
      data: {
         zbsj: []
      }
   });
</script>