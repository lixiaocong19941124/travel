<div style="height: 100%; width:100%; display: block; z-index: 3; left: 0px;">
    <div style="background: #d9d9d9;height: 100%;font-size: 100px;">
        <div class="tip">
            <!--<img class="pic-im" src="../ima/1.jpg" style="left:50%;">-->
        </div>
        <a href="sys_ss.php" title="点击更多"></a>
    </div>
</div>
<script>
    var pimg = document.getElementsByClassName('pic-im')
    var tip = document.getElementsByClassName('tip')[0]
    var vt = 0
    for(k=0;k<6;k++){
        tip.innerHTML += '<img class="pic-im" src="../ima/'+ (k+1) + '.jpg"style="left:'+ ((k*8)+50)+'%;"' + '>'
    }
    for (w=0;w<pimg.length;w++){
        pimg[w].index = w
        pimg[w].onclick = function () {
            if(this.index>vt){
                for (t=vt+1;t<=this.index;t++){
                    pimg[t].style.left = parseInt(pimg[t].style.left) - 50 + '%'
                }
                vt = this.index
            }
            else if(this.index< vt){
                for (u=this.index+1;u<=vt;u++){
                    pimg[u].style.left = parseInt(pimg[u].style.left)+50 + '%'
                }
                vt   =     this.index
            }
        }
    }

</script>