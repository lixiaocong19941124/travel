<style>
    .btn{
        padding: 0.4rem 0.6rem;color: white;cursor: pointer;background: deepskyblue;
        position: absolute;top:0;left: 48%;
    }
</style>

<div class="wrap">
    <div id="cls">
        ×
    </div>
    <div class="t-img">
        <a href="m2meitu_3.php"> <img id="b-img" style="display: block" src="../simg/big/sy1.jpg"alt=""></a>
        <div class="nm">作者：某某某  <span> 作者简介:</span></div>
        <button class="btn">! !</button>
        <input type="button" value="<" id="prev">
        <input type="button" value=">" id="next">
    </div>

    <ul class="y-ul clear">
        <li><img class="l-img" src="../simg/sml/sx1.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx2.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx3.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx4.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx5.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx6.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx7.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx8.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx9.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx11.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx12.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx13.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx14.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx15.jpg"width="70px" alt=""></li>
        <li><img class="l-img" src="../simg/sml/sx16.jpg"width="70px" alt=""></li>
    </ul>
</div>

<script src="../js/jquery-1.9.1.js"></script>
<script>
    var aimg = ['../simg/big/sy1.jpg','../simg/big/sy2.jpg','../simg/big/sy3.jpg','../simg/big/sy4.jpg',
        '../simg/big/sy5.jpg','../simg/big/sy6.jpg','../simg/big/sy7.jpg','../simg/big/sy8.jpg','../simg/big/sy9.jpg',
        '../simg/big/sy11.jpg','../simg/big/sy12.jpg','../simg/big/sy13.jpg','../simg/big/sy14.jpg','../simg/big/sy15.jpg',
        '../simg/big/sy16.jpg']
    var abtn = document.getElementById('btn')
    var oimg = document.getElementById('b-img')
    var prev = document.getElementById('prev')
    var next = document.getElementById('next')
    var ig = document.getElementsByClassName('l-img')
    var cls = document.getElementById('cls')
    var wp = document.getElementsByClassName('wrap')[0]
    var alen = aimg.length
    var num = 0
    var oiglen = ig.length
    cls.onclick = function () {
        window.location.href="m2meitu.php";
    }
    for(g=0;g<oiglen;g++){
        ig[g].index=g
        ig[g].onclick = function () {
            num=this.index
            oimg.src=aimg[num]
        }
    }
    function fun2() {
        num++
        if (num == alen){
            num = 0
        }
        oimg.src=aimg[num]
    }
    function fun1() {
        tim = setInterval(function () {
            fun2()
        },3000)

    }
    prev.onclick = function () {
        num++
        if (num == alen){
            num = 0
        }
        oimg.src=aimg[num]
    }
    next.onclick = function () {
        num--
        if (num<0){

            num =alen-1
        }
        oimg.src=aimg[num]
    }
    $(function(){
        $(".btn").addClass('btn'); // 初始化时添加背景1
        $(".btn").click(function() {
            $(this).toggleClass('nbtn').toggleClass('btn');
            clearInterval(tim)
        });
    })
    prev.onmousemove = function () {
        clearInterval(tim)
    }
    prev.onmouseout = function () {
        fun1()
    }
    next.onmousemove = function () {
        clearInterval(tim)
    }
    next.onmouseout = function () {
        fun1()
    }

    fun1()


</script>