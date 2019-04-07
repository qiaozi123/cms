@extends('web.layouts.app')

@section('content')
    <div class="menu-right-div">
        <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解绘装" style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
            了解绘装
        </a>
        <div class="menu-right-option menu-right-option-erweima">
            <img style="height: 34px; width: 34px; vertical-align: middle;" src="./装修知识_装修知识大全–绘装网_files/erweima.png" alt="扫描二维码"> <img class="menu-right-div-erweima-img" src="./装修知识_装修知识大全–绘装网_files/land_code.png" alt="绘装APP下载、绘装公众号">
        </div>
        <div class="menu-right-option menu-right-option-kefu">
            <img style="height: 36px; width: 32px; vertical-align: middle;" src="./装修知识_装修知识大全–绘装网_files/kefu.png" alt="在线客服">
        </div>
        <div class="menu-right-option menu-right-option-toTop">
            <img style="height: 16px; width: 30px; vertical-align: middle;" src="./装修知识_装修知识大全–绘装网_files/zhidong.png" alt="回到顶部">
        </div>
    </div>
    <script type="text/javascript">
        function Zoom(obj) {
            var width = 126;
            var height = 126;
            var img = new Image();
            img.src = obj.src;
            var scale = Math.max(width/img.width,height/img.height);
            var newWidth = img.width * scale;
            var newHeight = img.height * scale;
            if (newWidth > width) {
                $(obj).css('margin-left', (width - newWidth) / 2 + 'px');
            }
            if (newHeight > height) {
                $(obj).css('margin-top', (height - newHeight) / 2 + 'px');
            }
            $(obj).css('width', newWidth + 'px');
            $(obj).css('height', newHeight + 'px');
        }
    </script>
    <script src="{{url('asset/js/jquery-3.2.1.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{url('asset/js/config.js')}}"></script>
    <script src="{{url('asset/js/js.cookie.js')}}"></script>
    <script src="{{url('asset/js/utils.js')}}"></script>
    <script src="{{url('asset/js/components.js')}}"></script>
    <script src="{{url('asset/js/menu_top.js')}}" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="{{url('asset/js/vue.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/iview.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/vue-resource@1.3.4.js')}}"></script>
    <link rel="stylesheet" href="{{url('asset/css/login.css')}}">
    <section id="VueLogin" class="layer-login-signin" style="display: none;"><div class="container"><div class="close">+</div> <div class="ivu-tabs"><div class="ivu-tabs-bar"><div class="ivu-tabs-nav-container"><div class="ivu-tabs-nav-wrap"><div class="ivu-tabs-nav-scroll"><div class="ivu-tabs-nav"><div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div> <div class="ivu-tabs-tab ivu-tabs-tab-active"><!----> 会员登录 <!----></div><div class="ivu-tabs-tab"><!----> 会员注册 <!----></div></div> <!----></div></div></div></div> <div class="ivu-tabs-content ivu-tabs-content-animated" style="transform: translateX(0%) translateZ(0px);"><div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="./装修知识_装修知识大全–绘装网_files/vCode" alt="登录图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 下次自动登录</label> <div class="login-btn-submit">登录</div> <p class="line"></p> <p class="tip">第三方登录</p> <div class="thirdPart"><a href="javascript:void(0);" class="qq"></a> <a href="javascript:void(0);" class="weChat"></a></div></div> <div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="./装修知识_装修知识大全–绘装网_files/vCode" alt="注册图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 我已看过并同意<a href="http://www.huihome.cn/guide/t_p.html" class="protocol">绘装用户协议条款</a></label> <div class="signin-btn-submit">注册</div></div></div></div> <!----></div></section>
    <script src="{{url('asset/js/login.js')}}"></script><div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
        <nav class="menu" data-tags="" data-value="">
            <div class="before">装修前
                <ul class="sub-menu-before">
                    <a href="http://www.huihome.cn/guide/t_p1.html">
                        <li class="option">不限</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag0_p1.html">
                        <li class="option">收房验房</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag1_p1.html">
                        <li class="option">风格案例</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag2_p1.html">
                        <li class="option">需求分析</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag3_p1.html">
                        <li class="option">预算&amp;合同</li>
                    </a>
                </ul>
            </div>
            <div class="rightnow">装修中
                <ul class="sub-menu-rightnow">
                    <a href="http://www.huihome.cn/guide/t_p1.html">
                        <li class="option">不限</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag4_p1.html">
                        <li class="option">建材购买</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag5_p1.html">
                        <li class="option">拆改</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag6_p1.html">
                        <li class="option">水电</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag7_p1.html">
                        <li class="option">泥工</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag8_p1.html">
                        <li class="option">木工</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttag9_p1.html">
                        <li class="option">油工</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttaga_p1.html">
                        <li class="option">安装</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttagb_p1.html">
                        <li class="option">验收结算</li>
                    </a>
                </ul>
            </div>
            <div class="after">装修后
                <ul class="sub-menu-after">
                    <a href="http://www.huihome.cn/guide/t_p1.html">
                        <li class="option">不限</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttagc_p1.html">
                        <li class="option">软装搭配</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttagd_p1.html">
                        <li class="option">电器购买</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttage_p1.html">
                        <li class="option">家具清单</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttagf_p1.html">
                        <li class="option">居住指南</li>
                    </a>
                    <a href="http://www.huihome.cn/guide/ttagg_p1.html">
                        <li class="option">好物发现</li>
                    </a>
                </ul>
            </div>
        </nav>
        <div class="details">
            <div class="detail">
                <a href="http://www.huihome.cn/guide/3724.html"><p class="title">新风系统常见的15个问题</p></a>
                <p class="summary">新风系统的那些事，你都知道吗？今天，小编给大家整理了关于新风系统的15个热点问题，和大家分享。 &nbsp; 1.以前没有装新风系统，不还是生活得好好的？ 我们以前住的房子都是木窗子、墙是由泥土和石头建成的，这些都是有空隙的，可以通风透气！气流可以通</p>
                <div class="detail-bottom">
                    <p class="info">绘小米2019-04-02 18:04</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 8</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 0</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 0</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/3723.html"><p class="title">关于新风那些事儿|新风系统是什么？真的有必要安装吗？</p></a>
                <p class="summary">城市环境污染日趋严重，人们对于空气质量的要求也在逐渐提高，因此空气净化器和新风系统一度成为装修必备品。但是也有很多人对新风系统一知半解，不确定自己是否需要。 那么，今天，让绘小米和大家一起来认识一下新风系统吧！ &nbsp; 一、什么是新风系统 新风</p>
                <div class="detail-bottom">
                    <p class="info">绘小米2019-04-02 17:59</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 3</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 0</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 0</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/1047.html"><p class="title">为什么有了户型图还是要量房？</p></a>
                <p class="summary">大家都知道，如果通过正规装修，第一步都会来量房。很多人奇怪了，我家有户型图，为什么还要劳师动众来量房呢？他们到底量的是什么？ 一、为什么要量房？ 了解房屋格局利弊情况 通过现场量房，设计师会仔细的观察房屋的位置和朝向。以及周围的环境状况、噪</p>
                <div class="detail-bottom">
                    <p class="info">夏休2019-04-02 16:21</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 223</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 7</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 18</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/3708.html"><p class="title">追求幸福的人，都是这样设计卧室的！</p></a>
                <p class="summary">为给广大绘友提供更好的交流和互动方式，“绘装”特别策划干货类栏目#101问#，每期发起一个有奖问题，大家可各自发表不同的意见，同时我们也会邀请设计师和工长来回复，所有参与活动者均可奖励绘米。大家有想了解的问题，可以在评论区留言哦。 本期话题</p>
                <div class="detail-bottom">
                    <p class="info">绘小米2019-04-02 15:27</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 850</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 3</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 5</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/92.html"><p class="title">发霉、气泡、开裂？十大墙面问题，一次性解决到位！</p></a>
                <p class="summary">墙面问题，是困扰多数业主的显著问题，比如油漆剥落、油漆断裂、起泡、发霉等。许多业主由于是第一次面对这样棘手的问题，都不知道该从何下手，我们给大家总结了10条墙面油漆的常见问题，以及附上相应的解决对策，你在装修中再遇到类似问题，就都不是事了！</p>
                <div class="detail-bottom">
                    <p class="info">绘小编2019-04-02 14:02</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 391</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 211</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 2</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 190</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/843.html"><p class="title">破解三大谎言，四招教你挑选适合床垫</p></a>
                <p class="summary">破解三大谎言，四招教你挑选适合床垫! 正常来说，每个人每天差不多有三分之一的时间需要在床上度过。床垫无疑是陪伴你时间最长的家具之一。 但是奇葩的是，到目前为止，4大床垫品类中，只有棕榈类床垫一个国家标准。历史最为悠久的弹簧床垫也只有一个轻工</p>
                <div class="detail-bottom">
                    <p class="info">一休哥2019-04-01 16:04</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 466</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 87</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 91</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/1326.html"><p class="title">装修中关于水电的那些事儿</p></a>
                <p class="summary">水电是装修里最重要的工程之一，其一它是隐蔽工程，一旦出现问题整改起来非常麻烦；其二它和日常生活的舒适度高度挂钩，给水、用电、网络等都是人们最基本的生活需求，如果连这些都无法保障，房子更本毫无舒适感可言，可以说水电施工的成功代表着房子装修成功</p>
                <div class="detail-bottom">
                    <p class="info">绘小编2019-04-01 15:56</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 1873</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 27</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 54</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/1101.html"><p class="title">装修前为什么要“铲墙皮”？看完你就懂啦~</p></a>
                <p class="summary">收房时有些开发商会把墙面刷白，等装修的时候一般都要铲掉，很多人不明白，明明刷的好好的，为什么要铲掉呢？今天小编就来普及一下，铲墙皮的原因都有哪些。 装修中的“铲墙皮”是指铲除墙面原有的装饰层，为现在的墙面装修项目打基础。包括墙面涂刷、墙面铺</p>
                <div class="detail-bottom">
                    <p class="info">夏休2019-04-01 15:00</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 519</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 16</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 19</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/1323.html"><p class="title">【安装】邻居哭着喊着要扔掉投影仪，原来是安装没做好</p></a>
                <p class="summary">投影仪也是家电，进了家门，就是我们生活的一部分，应该根据我们自己的生活方式，按照自己的需求来安排。 &nbsp; 绘友们表示我对投影仪就是真爱，已经迫不及待地要和它一起愉快地玩耍了。 但到底怎么安，安在哪，就又成了问题。 &nbsp; 其实对于投影仪的安装调试</p>
                <div class="detail-bottom">
                    <p class="info">Ailun2019-04-01 14:16</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 746</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 9</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 3</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 11</div>
                </div>
            </div>
            <div class="detail">
                <a href="http://www.huihome.cn/guide/1046.html"><p class="title">家庭影院打包回家，超实用投影干货贴</p></a>
                <p class="summary">全球最后一家生产VCR设备的公司，日本船井电子公司（Funai）宣布停产，也就是说，曾经统治客厅十几年的“录像带”以及“录像机”正式退出江湖了。&nbsp; 客厅设备经历了从黑白电视，彩色电视，大屏电视，超大屏电视，现在走到了投影+电视这一步，人对娱</p>
                <div class="detail-bottom">
                    <p class="info">一休哥2019-04-01 14:15</p>
                    <div class="viewer">
                        <img src="./装修知识_装修知识大全–绘装网_files/yuedu.png" alt="阅读数" class="icon"> 851</div>
                    <div class="awsome">
                        <img src="./装修知识_装修知识大全–绘装网_files/dianzan2.png" alt="点赞数" class="icon"> 24</div>
                    <div class="comment">
                        <img src="./装修知识_装修知识大全–绘装网_files/pinlun2.png" alt="评论数" class="icon"> 1</div>
                    <div class="share">
                        <img src="./装修知识_装修知识大全–绘装网_files/fenxiang.png" alt="分享数" class="icon"> 28</div>
                </div>
            </div>
            <section class="pageCuter"><div class="pages selected">1</div>
                <a href="http://www.huihome.cn/guide/t_p2.html"><div class="pages">2</div></a>
                <a href="http://www.huihome.cn/guide/t_p3.html"><div class="pages">3</div></a>
                <a href="http://www.huihome.cn/guide/t_p4.html"><div class="pages">4</div></a>
                <a href="http://www.huihome.cn/guide/t_p5.html"><div class="pages">5</div></a>
                <a href="http://www.huihome.cn/guide/t_p6.html"><div class="pages">6</div></a>
                <a href="http://www.huihome.cn/guide/t_p7.html"><div class="pages">7</div></a>
                <a href="http://www.huihome.cn/guide/t_p8.html"><div class="pages">8</div></a>
                <div class="more">...</div>
                <a href="http://www.huihome.cn/guide/t_p57.html"><div class="pages">57</div></a>
                <a href="http://www.huihome.cn/guide/t_p2.html"><div class="rightArrow"></div></a>
            </section></div>
        <div class="accessory">
            <link rel="stylesheet" type="text/css" href="./装修知识_装修知识大全–绘装网_files/consultation.css">
            <div class="top-infor-div">
                <h2 class="top-h2">还有疑问，我要专业咨询</h2>
                <textarea class="top-textarea" placeholder="请简单描述你想问的装修问题" name="description" maxlength="500"></textarea>
                <input class="top-input" placeholder="请填写您的手机号码" name="mobile">
                <div class="top-apply">免费申请</div>
                <p class="top-p1">声明：绘装以保护您的隐私为己任，</p>
                <p class="top-p2">手机号仅作提供咨询服务，请放心填写。</p>
            </div>
            <script src="./装修知识_装修知识大全–绘装网_files/consultation.js.下载"></script><p class="sub-title">点击排行</p>
            <div class="article-list">
                <a title="都说厨房墙面必须贴瓷砖，留出一半不行吗？" href="http://www.huihome.cn/guide/1235.html" class="unit">
                    <span class="num">1</span>
                    <span class="titleOfarticle">都说厨房墙面必须贴瓷砖，留出一半不行吗？</span>
                </a>
                <a title="#101问#VOL.33：客餐厅吊顶的100种可能！" href="http://www.huihome.cn/guide/2679.html" class="unit">
                    <span class="num">2</span>
                    <span class="titleOfarticle">#101问#VOL.33：客餐厅吊顶的100种可能！</span>
                </a>
                <a title="装修前必读的100例攻略，第二弹来了！" href="http://www.huihome.cn/guide/1135.html" class="unit">
                    <span class="num">3</span>
                    <span class="titleOfarticle">装修前必读的100例攻略，第二弹来了！</span>
                </a>
                <a title="#101问#VOL.16：厨卫吊顶材料大PK" href="http://www.huihome.cn/guide/1453.html" class="unit">
                    <span class="num">4</span>
                    <span class="titleOfarticle">#101问#VOL.16：厨卫吊顶材料大PK</span>
                </a>
                <a title="2018最全装修流程，附相关节点攻略！" href="http://www.huihome.cn/guide/2747.html" class="unit">
                    <span class="num">5</span>
                    <span class="titleOfarticle">2018最全装修流程，附相关节点攻略！</span>
                </a>
                <a title="2018年装修党必看十大攻略，少走弯路全靠它了！" href="http://www.huihome.cn/guide/2633.html" class="unit">
                    <span class="num">6</span>
                    <span class="titleOfarticle">2018年装修党必看十大攻略，少走弯路全靠它了！</span>
                </a>
                <a title="你家的电视背景墙比这些好看吗？" href="http://www.huihome.cn/guide/1763.html" class="unit">
                    <span class="num">7</span>
                    <span class="titleOfarticle">你家的电视背景墙比这些好看吗？</span>
                </a>
                <a title="厨房这样装修设计，连邻居都羡慕" href="http://www.huihome.cn/guide/1480.html" class="unit">
                    <span class="num">8</span>
                    <span class="titleOfarticle">厨房这样装修设计，连邻居都羡慕</span>
                </a>
                <a title="关于卫浴间装修的所有难题，看这一篇就够了！" href="http://www.huihome.cn/guide/2473.html" class="unit">
                    <span class="num">9</span>
                    <span class="titleOfarticle">关于卫浴间装修的所有难题，看这一篇就够了！</span>
                </a>
                <a title="【玄关】虽小，却是家的第一印象！" href="http://www.huihome.cn/guide/1476.html" class="unit">
                    <span class="num">10</span>
                    <span class="titleOfarticle">【玄关】虽小，却是家的第一印象！</span>
                </a>
            </div></div>
        <div style="clear: both;"> </div>
    </div>
    <style type="text/css">
        .menu-bottom-consultation {
            width: 210px;
            height: 46px;
            line-height: 46px;
            background-color: #3db8a8;
            color: #fff;
            border-radius: 4px;
            text-align: center;
            font-size: 21px;
            margin-top: 18px;
            cursor: pointer;
        }

        .menu-bottom-link {
            font-size: 16px;
            color: #000;
            float: left;
            line-height: 40px;
            padding-right: 50px;
            margin-top: 14px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/guide.css')}}">
    @endsection
