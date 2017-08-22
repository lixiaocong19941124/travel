<div>
    <ul class="oul clear">
        <li style="border-bottom: 0.2rem solid #f8ff85;">隐私</li>
        <li>隐私政策</li>
        <li>正文内容</li>
    </ul>
    <div class="odiv clear">
        <ul class="clear" style="display: block;">
            <li class="clear">

                <div class="si_div"><b>一方面因为工厂里的枯燥乏味的工作。大家都有梦想，</b></div>
                <div class="si-info">每次我都要迟疑几秒钟才回答：“还好吧”, <br>然后迅速转移到其它话题上来，因为我真不知道怎么回答这个问题</div>
                <div class="si_div"><b>有时候人家也只是随口来的一句开场问候，我总不能语音一接通就排山倒海诉衷肠吧</b></div>
                <div class="si-info">如果你是真的关心我，既然都知道我是一个人身处异地，就不会这么问。 <br>那年毕业后，也不知怎地就选择了去外地一个陌生的城市工作，虽然找了家大公司</div>
                <div class="si_div"><b>由于读的工科出来做技术，还是进了工厂，一座拥有几千人的新工厂</b></div>
                <div class="si-info">是公司新开辟的制造基地，从95后中专小鲜肉到80后博士老屌丝各种年龄和学历层次的人都有 <br>当然，这种电子厂大都是像我这种大学刚毕业的年轻面孔，且绝大部分是汉子。</div>

            </li>
        </ul>
        <ul>
            <li>
                <div class="si_div"><b>对于我呢，老实说，也有点小失望，一方面源于地理环境，一方面因为工厂里的枯燥乏味的工作。大家都有梦想，</b></div>
                <div class="si-info">每次我都要迟疑几秒钟才回答：“还好吧”, <br>然后迅速转移到其它话题上来，因为我真不知道怎么回答这个问题</div>
                <div class="si_div"><b>有时候人家也只是随口来的一句开场问候，我总不能语音一接通就排山倒海诉衷肠吧</b></div>
                <div class="si-info">如果你是真的关心我，既然都知道我是一个人身处异地，就不会这么问。 <br>那年毕业后，也不知怎地就选择了去外地一个陌生的城市工作，虽然找了家大公司</div>
                <div class="si_div"><b>由于读的工科出来做技术，还是进了工厂，一座拥有几千人的新工厂</b></div>
                <div class="si-info">是公司新开辟的制造基地，从95后中专小鲜肉到80后博士老屌丝各种年龄和学历层次的人都有 <br>当然，这种电子厂大都是像我这种大学刚毕业的年轻面孔，且绝大部分是汉子。</div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="si_div"><b>每次与久未联系的朋友聊天，对方第一句话就是：“怎么样，一个人在那边还好吧”</b></div>
                <div class="si-info">每次我都要迟疑几秒钟才回答：“还好吧”, <br>然后迅速转移到其它话题上来，因为我真不知道怎么回答这个问题</div>
                <div class="si_div"><b>有时候人家也只是随口来的一句开场问候，我总不能语音一接通就排山倒海诉衷肠吧</b></div>
                <div class="si-info">如果你是真的关心我，既然都知道我是一个人身处异地，就不会这么问。 <br>那年毕业后，也不知怎地就选择了去外地一个陌生的城市工作，虽然找了家大公司</div>
                <div class="si_div"><b>由于读的工科出来做技术，还是进了工厂，一座拥有几千人的新工厂</b></div>
                <div class="si-info">是公司新开辟的制造基地，从95后中专小鲜肉到80后博士老屌丝各种年龄和学历层次的人都有 <br>当然，这种电子厂大都是像我这种大学刚毕业的年轻面孔，且绝大部分是汉子。</div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
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

                    oli[j].style.borderBottom= '0.2rem solid transparent'
                }
                aul[this.index].style.  display= 'block'

                oli[this.index].style.borderBottom = '0.2rem solid #f8ff85'
            }
        }
    }
    /*    fun1(oul[0],odiv[0])
     fun1(oul[1],odiv[1])*/
    for(k=0;k<oul.length;k++){
        fun1(oul[k],odiv[k])
    }
</script>