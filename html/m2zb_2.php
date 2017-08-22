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
      .image-slider-contents .outer{
         width: 25%;
         margin: 0;
      }

      /*标题样式*/
      .title-size-weight{
         font-size: 18px;
         font-weight: 600;
         margin-bottom: 10px;
      }
      .title-xhx{
         border-bottom: 1px solid #cfcfcf;
         padding-bottom: 10px;
      }
      /*推荐理由文字样式*/
      .tjly{
         display: inline-block;
         padding: 0 10px 10px 10px;
         height: 100%;
         width: 100%;
      }
      .tjly-wbk{
         padding: 10px;
         border: 1px solid #cfcfcf;
         height: 280px;
         position: relative;
      }
      .tjly-b-je{
         position: absolute;
         bottom: 10px;
         right: 10px;
      }
      .tjly-je{
         font-size: 20px;
         font-weight: 600;
         vertical-align: middle;
         margin-right: 10px;
      }
      .rm-bk{
         margin-bottom: 10px;
         padding: 10px;
         border: 1px solid #cfcfcf;
      }
       .fl-left{
           float: left;
       }
   </style>

<!--内容-->
<div id="demo">
   <div>
      <div class="title-size-weight">限时特卖</div>
      <div class="fl-left" style="margin-bottom: 20px;width: 60%">
         <img :src="zbsj.tp" width="100%" height="300">
      </div>
      <div class="fl-left" style="width: 40%;margin-bottom: 20px;">
         <div class="tjly">
            <div class="tjly-wbk">
               <div>
                  <span class="biaoqian" v-for="bq in zbsj.bq">{{bq}}</span>
               </div>
               <div class="title-size-weight">推荐理由</div>
               <div>
                  {{zbsj.sm}}
               </div>
               <div class="tjly-b-je">
                  <span class="tjly-je">价格：{{zbsj.jg}}元</span>
                  <span class="ljgm" style="vertical-align: middle;background: #3ec9e6;">立即购买</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="fl-left" style="width: 60%;">
         <div class="title-size-weight title-xhx">产品介绍</div>
         <img src="../image/旅行者4_03.png" width="100%" height="400">
         <div style="margin: 10px 0;">
            Etiam nisi lorem, posuere at turpis at, fringilla efficitur quam. Suspendisse vitae lacus ac lectus facilisis ornare. Vivamus vitae pulvinar nisi, in vehicula elit. Praesent iaculis ante tellus, eu mattis lectus suscipit sit amet. Sed congue accumsan nunc in iaculis. Sed malesuada elit turpis, eu egestas eros rhoncus non. Sed pulvinar euismod libero sit amet scelerisque. Vestibulum ante felis, condimentum in vulputate id, tempor eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam condimentum augue vitae nulla suscipit eleifend. Phasellus consectetur volutpat nulla, cursus facilisis elit vulputate sed. Mauris in semper sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.
         </div>
         <img src="../image/旅行者4_03.png" width="100%" height="400">
      </div>
      <div class="fl-left" style="width: 40%;">
         <div style="padding-left: 50px">
            <div>
               <div class="title-size-weight title-xhx">推荐大咖</div>
               <div>
                  <div class="fl-left" style="width: 30%;">
                     <img src="../image/tv1_03.png" width="100%">
                  </div>
                  <div class="fl-left" style="width: 70%;">
                     <div style="padding: 0 10px 10px 10px;">
                        Ut luctus velit egestas purus feugiat, sit amet sodales ligula interdum. Praesent ut egestas ante. Nam non felis quam. Sed maximus sapien eget nunc eleifend fermentum. Suspendisse rutrum ligula commodo maximus pulvinar. Donec auctor lorem non dui fringilla, a molestie ex cursus. Morbi laoreet pretium felis in posuere. Etiam in finibus risus.
                     </div>
                  </div>
               </div>
            </div>
            <div>
               <div class="title-size-weight title-xhx">更多热卖</div>
               <div class="rm-bk">
                  <img src="../image/tv1_03.png" width="100%">
                  <span>文字文字文字文字文字文字</span>
               </div>
               <div class="rm-bk">
                  <img src="../image/tv1_03.png" width="100%">
                  <span>文字文字文字文字文字文字</span>
               </div>
               <div class="rm-bk">
                  <img src="../image/tv1_03.png" width="100%">
                  <span>文字文字文字文字文字文字</span>
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

   var rid=GetQueryString('rid');//获取地址后面？带的rid参数
   $(function () {
       //获取周边详情的数据
      $.ajax({
         type: "get",
         url: G_url + 'views/gets/tvpe/'+rid,
         dataType: "json",
         async:false,
         success: function (res) {
            if (res.ok) {
               if(res.data.bq==null){
                  res.data.bq=[];
               }else {
                  res.data.bq=res.data.bq.split(',');
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