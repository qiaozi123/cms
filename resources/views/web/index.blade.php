@extends('web.layouts.app')

@section('content')
    <div class="menu-position-div" style="margin-top: 130px;">
    </div>
    <!-- 右边菜单栏 -->
    <div class="menu-right-div">
        <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解绘装" style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
            了解绘装
        </a>
        <div class="menu-right-option menu-right-option-erweima">
            <img style="height: 34px; width: 34px; vertical-align: middle;" src="/asset/images/erweima.png" alt="扫描二维码"> <img class="menu-right-div-erweima-img" src="/asset/images/land_code.png" alt="绘装APP下载、绘装公众号">
        </div>
        <div class="menu-right-option menu-right-option-kefu">
            <img style="height: 36px; width: 32px; vertical-align: middle;" src="/asset/images/kefu.png" alt="在线客服">
        </div>
        <div class="menu-right-option menu-right-option-toTop">
            <img style="height: 16px; width: 30px; vertical-align: middle;" src="/asset/images/zhidong.png" alt="回到顶部">
        </div>
    </div>

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
    <section id="VueLogin" class="layer-login-signin" style="display: none;"><div class="container"><div class="close">+</div> <div class="ivu-tabs"><div class="ivu-tabs-bar"><div class="ivu-tabs-nav-container"><div class="ivu-tabs-nav-wrap"><div class="ivu-tabs-nav-scroll"><div class="ivu-tabs-nav"><div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div> <div class="ivu-tabs-tab ivu-tabs-tab-active"><!----> 会员登录 <!----></div><div class="ivu-tabs-tab"><!----> 会员注册 <!----></div></div> <!----></div></div></div></div> <div class="ivu-tabs-content ivu-tabs-content-animated" style="transform: translateX(0%) translateZ(0px);"><div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="/asset/images/vCode" alt="登录图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 下次自动登录</label> <div class="login-btn-submit">登录</div> <p class="line"></p> <p class="tip">第三方登录</p> <div class="thirdPart"><a href="javascript:void(0);" class="qq"></a> <a href="javascript:void(0);" class="weChat"></a></div></div> <div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="/asset/images/vCode" alt="注册图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 我已看过并同意<a href="http://www.huihome.cn/" class="protocol">绘装用户协议条款</a></label> <div class="signin-btn-submit">注册</div></div></div></div> <!----></div></section>
    <script src="{{url('asset/js/login.js')}}"></script><div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
        <!--
             作者：403571264@qq.com
             时间：2017-07-07
             描述：顶部图
        -->
        <div class="top-div">
            <div class="swiper-container swiper-container-horizontal">

                <div class="swiper-wrapper" style="transform: translate3d(-860px, 0px, 0px); transition-duration: 0ms;">

                    @foreach(\App\Model\Lunbo::get(1) as $item)
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 860px;">
                        <a href="{{$item->articleid}}" target="_blank" title="{{$item->name}}">
                            <img class="top-img" src="{{$item->img_url}}" alt="{{$item->name}}">
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev swiper-button-black"></div>
                <div class="swiper-button-next swiper-button-black"></div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">

                </div>

            </div>
            <link rel="stylesheet" type="text/css" href="{{url('/asset/css/consultation.css')}}">
            <div class="top-infor-div">
                <h2 class="top-h2">达人咨询服务</h2>
                <textarea class="top-textarea" placeholder="请简单描述你想问的装修问题" name="description" maxlength="500"></textarea>
                <input class="top-input" placeholder="请填写您的手机号码" name="mobile">
                <div class="top-apply">免费申请</div>
                <p class="top-p1">声明：绘装以保护您的隐私为己任，</p>
                <p class="top-p2">手机号仅作提供咨询服务，请放心填写。</p>
            </div>
            <script src="{{url('/asset/js/consultation.js')}}"></script></div>

         {{--装修攻略--}}
        <div class="index-guide">
            <div class="guide-div-title"></div>
            <div class="guide">
                <div>
                    <div class="guide-toList">
                        <h1>装修攻略</h1>
                        <a href="{{url('gonglue')}}" title="查看更多攻略">
                            <p class="guide-more">查看更多&gt;&gt;</p>
                        </a>
                    </div>
                    <div class="guide-list-div">
                        <div class="guide-list">
                            @foreach(\App\Model\Article::Pic_Article('anli',3) as $item)
                            <a href="{{url('article/'.$item->id)}}" title="{{$item->title}}">
                                <div class="guide-div">
                                    <img src="{{$item->avatar}}" alt="{{$item->title}}">
                                    <p>{{$item->title}}</p>
                                    <div></div>
                                </div>
                            </a>

                                @endforeach
                        </div>
                        <div class="more-guide-div">
                            @foreach(\App\Model\Article::Article('anli',12) as $item)
                            <a href="{{url('article/'.$item->id)}}" title="{{$item->title}}">
                                <p>{{$item->title}}</p>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <div style="width: 330px; margin-top: 20px;">
                        <h1 class="guide-marvell-title">精选话题</h1>
                    </div>
                    <div class="guide-selected-div">
                        <div class="guide-selected-list">
                            <a href="http://www.huihome.cn/subject/165.html" title="装修#101问#">
                                <div class="guide-selected">
                                    <img src="/asset/images/H0_359feb3e-7f04-40fb-818d-5524e04a1a92.jpg" alt="装修#101问#">
                                    <div></div>
                                    <p>装修#101问#</p>
                                </div>
                            </a>
                            <a href="http://www.huihome.cn/subject/89.html" title="晒#账单#">
                                <div class="guide-selected">
                                    <img src="/asset/images/H0_7ac8e58c-02f8-4276-a73a-1e562146342e.jpg" alt="晒#账单#">
                                    <div></div>
                                    <p>晒#账单#</p>
                                </div>
                            </a>
                            <a href="http://www.huihome.cn/subject/20.html" title="晒工地">
                                <div class="guide-selected">
                                    <img src="/asset/images/H0_ef537830-ba04-4e79-bad6-6be6258c4192.jpg" alt="晒工地">
                                    <div></div>
                                    <p>晒工地</p>
                                </div>
                            </a>
                            <a href="http://www.huihome.cn/subject/803.html" title="探店">
                                <div class="guide-selected">
                                    <img src="/asset/images/H0_b0596877-8381-495e-af0f-cafe11f9150f.jpg" alt="探店">
                                    <div></div>
                                    <p>探店</p>
                                </div>
                            </a>
                            <a href="http://www.huihome.cn/subject/p1.html" title="#更多热门话题#">
                                <div class="guide-selected">
                                    <img src="/asset/images/H0_862f613c-0d0d-43bc-ad27-f82be26fca9f.jpg" alt="#更多热门话题#">
                                    <div></div>
                                    <p>#更多热门话题#</p>
                                </div>
                            </a>
                        </div>
                        <a href="http://www.huihome.cn/subject/458.html" title="精选话题"> <img class="guide-selected-bottom" src="/asset/images/eliteSubject.png" alt="精选话题">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--
               作者：403571264@qq.com
               时间：2017-07-07
               描述：装修案例
        -->
        <div class="index-case">
            <div class="case-div-title">
                <h1>装修案例</h1>
                <a href="http://www.huihome.cn/case/c_o_p.html" title="查看更多案例">
                    <p class="case-more">查看更多&gt;&gt;</p>
                </a>
            </div>
            <div class="index-case-list">
                <a href="http://www.huihome.cn/case/2403.html" title="长空"> <div class="case-left">
                        <img class="case-left-img" src="/asset/images/1616_029411fb-18d1-4115-8664-d41e0a5bcb69.jpg" alt="长空">
                        <div class="case-left-infor">
                            <img class="case-left-avatar" src="/asset/images/1616_c623d714-1347-4b6a-a77f-91fababc9c97.png" alt="郑雄">
                            <div class="case-left-role-infor">
                                <p class="case-left-username">郑雄</p>
                                <p class="case-left-style">四室及以上·美式</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="http://www.huihome.cn/case/1737.html" title="陌上花开"> </a><div class="case-right-list"><a href="http://www.huihome.cn/case/1737.html" title="陌上花开">
                        <div class="case-right">
                            <img class="case-right-img" src="/asset/images/PIC_078227ff-8cfe-4010-806b-bd0a81b9c50d.jpg" alt="陌上花开">
                            <div class="case-right-infor">
                                <img class="case-right-avatar" src="/asset/images/1465_CYVDYPFSRMZLEIQFNRFOCLJKAUZXBAJU.png" alt="娜语拾光 周娜">
                                <div class="case-right-role-infor">
                                    <p class="case-right-usernmae">娜语拾光 周娜</p>
                                    <p class="case-right-style">三室·田园</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/case/1695.html" title="木光醇色"> <div class="case-right">
                            <img class="case-right-img" src="/asset/images/PIC_1d5413cc-6275-4d96-9adf-cab587613a40.jpg" alt="木光醇色">
                            <div class="case-right-infor">
                                <img class="case-right-avatar" src="/asset/images/1769_98cd4913-8459-49ab-a191-d637631d582a.jpg" alt="朱  佳">
                                <div class="case-right-role-infor">
                                    <p class="case-right-usernmae">朱  佳</p>
                                    <p class="case-right-style">三室·北欧</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/case/1874.html" title="清风徐来"> <div class="case-right">
                            <img class="case-right-img" src="/asset/images/PIC_b410ccc1-13a4-493b-a817-53ee3bcefad2.jpg" alt="清风徐来">
                            <div class="case-right-infor">
                                <img class="case-right-avatar" src="/asset/images/10772_e9b39897-a1cd-4311-ae8f-29a5a640c2c5.png" alt="王志平">
                                <div class="case-right-role-infor">
                                    <p class="case-right-usernmae">王志平</p>
                                    <p class="case-right-style">三室·混搭</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/case/1837.html" title="温馨雅居"> <div class="case-right">
                            <img class="case-right-img" src="/asset/images/1471_EKKEIMLPSJOROMENLEREHLBXXOCGQKAG.png" alt="温馨雅居">
                            <div class="case-right-infor">
                                <img class="case-right-avatar" src="/asset/images/1471_78b2214c-ff2d-4f8a-8d0f-f1cc3e7f4c76.png" alt="熊杰">
                                <div class="case-right-role-infor">
                                    <p class="case-right-usernmae">熊杰</p>
                                    <p class="case-right-style">四室及以上·中式</p>
                                </div>
                            </div>
                        </div>
                    </a></div><a href="http://www.huihome.cn/case/1837.html" title="温馨雅居">
                </a>
            </div>
            <!--
                   作者：403571264@qq.com
                   时间：2017-07-07
                   描述：请工长/设计
            -->
            <div>
                <div class="role-menu">
                    <div class="design-menu role-select">请设计</div>
                    <div style="font-size: 20px; color: #ccc;">|</div>
                    <div class="pm-menu">请工长</div>
                </div>
                <div class="role-list">
                    <div class="designer-div">
                        <div class="role-mask"></div>
                        <div class="role-infor">
                            <div class="designer-cost">50-150元/m²</div>
                            <div class="role-infor-div">
                                <img class="role-small-avatar" src="/asset/images/42777_d6642e57-9610-4d85-b41d-096ce45ac3b8.jpg" alt="黄雅君">
                                <p class="role-name">黄雅君</p>
                                <p class="role-atelier">喜爱&amp;宅记设计工作室</p>
                            </div>
                        </div>
                        <img class="designer-avatar" src="/asset/images/42777_d6642e57-9610-4d85-b41d-096ce45ac3b8.jpg" alt="黄雅君">
                        <p class="designer-expert" title="中式,日式,北欧,其他">
                            中式,日式,北欧,其他</p>
                        <p class="designer-txt" title="室内设计是设计师帮助人们打造能够实现内心向往的生活方式的空间，好的设计不仅仅是一个看上去好看的空间，">室内设计是设计师帮助人们打造能够实现内心向往的生活方式的空间，好的设计不仅仅是一个看上去好看的空间，</p>
                        <a href="http://www.huihome.cn/designer/42777.html" title="黄雅君个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                    <div class="designer-div">
                        <div class="role-mask"></div>
                        <div class="role-infor">
                            <div class="designer-cost">50-200元/m²</div>
                            <div class="role-infor-div">
                                <img class="role-small-avatar" src="/asset/images/44956_0752c553-9706-4b57-b945-a813d5b49589.jpg" alt="朱贵森">
                                <p class="role-name">朱贵森</p>
                                <p class="role-atelier">绘升装饰工作室</p>
                            </div>
                        </div>
                        <img class="designer-avatar" src="/asset/images/44956_0752c553-9706-4b57-b945-a813d5b49589.jpg" alt="朱贵森">
                        <p class="designer-expert" title="现代,美式,北欧">
                            现代,美式,北欧</p>
                        <p class="designer-txt" title="每个作品都是有灵魂的，希望每个都有一个温馨的家。">每个作品都是有灵魂的，希望每个都有一个温馨的家。</p>
                        <a href="http://www.huihome.cn/designer/44956.html" title="朱贵森个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                    <div class="designer-div">
                        <div class="role-mask"></div>
                        <div class="role-infor">
                            <div class="designer-cost">200-200元/m²</div>
                            <div class="role-infor-div">
                                <img class="role-small-avatar" src="/asset/images/41440_f36b045e-f542-4f2a-88de-8187321f0993.jpg" alt="文博">
                                <p class="role-name">文博</p>
                                <p class="role-atelier">湖南创捷装饰</p>
                            </div>
                        </div>
                        <img class="designer-avatar" src="/asset/images/41440_f36b045e-f542-4f2a-88de-8187321f0993.jpg" alt="文博">
                        <p class="designer-expert" title="现代,北欧,混搭,欧式">
                            现代,北欧,混搭,欧式</p>
                        <p class="designer-txt" title="若有光芒，必有远方。">若有光芒，必有远方。</p>
                        <a href="http://www.huihome.cn/designer/41440.html" title="文博个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                    <div class="designer-div">
                        <div class="role-mask"></div>
                        <div class="role-infor">
                            <div class="designer-cost">30-50元/m²</div>
                            <div class="role-infor-div">
                                <img class="role-small-avatar" src="/asset/images/40350_0edd91e9-6b1a-4e2b-955b-8b3d11a2552c.jpg" alt="董文洁">
                                <p class="role-name">董文洁</p>
                                <p class="role-atelier">刘洪空间设计事务所</p>
                            </div>
                        </div>
                        <img class="designer-avatar" src="/asset/images/40350_0edd91e9-6b1a-4e2b-955b-8b3d11a2552c.jpg" alt="董文洁">
                        <p class="designer-expert" title="现代,北欧">
                            现代,北欧</p>
                        <p class="designer-txt" title="做有温度的设计">做有温度的设计</p>
                        <a href="http://www.huihome.cn/designer/40350.html" title="董文洁个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                </div>
                <div class="designer-other-div" data-cate="0" data-dindex="1" data-pindex="0">
                    <img src="/asset/images/huanyihuan.png" alt="换一批"> <span>换一批</span>
                </div>
            </div>

            <!--
                   作者：403571264@qq.com
                   时间：2017-07-10
                   描述：家具商城
            -->
            <div>
                <div class="shop-title">
                    <h1>家居商城</h1>
                    <a href="http://www.huihome.cn/mall" title="查看更多活动">
                        <p class="shop-title-more">查看更多&gt;&gt;</p>
                    </a>
                </div>
                <div class="shop-list">
                    <a href="http://www.huihome.cn/mall/147.html" title="【长期团】晾霸电动晾衣架全网最低！底价还返现~居家达人必备晾衣神器！">
                        <div class="shop-div">
                            <img src="/asset/images/MER_PROMOTION_09cb1608-bf60-44f3-af84-f989172da9d7.jpg" alt="【长期团】晾霸电动晾衣架全网最低！底价还返现~居家达人必备晾衣神器！">
                            <div></div>
                            <p>【长期团】晾霸电动晾衣架全网最低！底价还返现~居家达人必备晾衣神器！</p>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/mall/281.html" title="【截至3.17】巴迪斯高品质吊顶！一厨两卫套餐4380，大额优惠券来袭">
                        <div class="shop-div">
                            <img src="/asset/images/MER_PROMOTION_5684725a-cd9c-41ee-9bc6-b4e8fb50fb42.png" alt="【截至3.17】巴迪斯高品质吊顶！一厨两卫套餐4380，大额优惠券来袭">
                            <div></div>
                            <p>【截至3.17】巴迪斯高品质吊顶！一厨两卫套餐4380，大额优惠券来袭</p>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/mall/262.html" title="【截至12.31】日立中央空调绘装首团！年底冲量钜惠保全年">
                        <div class="shop-div">
                            <img src="/asset/images/MER_PROMOTION_2f675c88-f56a-405e-8dce-ce3220258267.png" alt="【截至12.31】日立中央空调绘装首团！年底冲量钜惠保全年">
                            <div></div>
                            <p>【截至12.31】日立中央空调绘装首团！年底冲量钜惠保全年</p>
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/mall/257.html" title="【品牌聚惠】10月跟着绘装买这些更省钱！嘉宝+林内+梦天+陶泽+顺辉+安博">
                        <div class="shop-div">
                            <img src="/asset/images/MER_PROMOTION_afb364c9-e377-44dc-b8d9-834e6dca0a81.jpg" alt="【品牌聚惠】10月跟着绘装买这些更省钱！嘉宝+林内+梦天+陶泽+顺辉+安博">
                            <div></div>
                            <p>【品牌聚惠】10月跟着绘装买这些更省钱！嘉宝+林内+梦天+陶泽+顺辉+安博</p>
                        </div>
                    </a>
                </div>
            </div>

            <!--
                  作者：403571264@qq.com
                  时间：2017-07-10
                  描述：品牌墙
            -->
            <div>
                <div>
                    <h1>品牌墙</h1>
                </div>
                <div class="brand-list">
                    <a href="http://www.huihome.cn/merchant/3.html" title="菲林格尔（vöhringer）">
                        <img src="/asset/images/pinpai3.png" alt="菲林格尔（vöhringer）">
                    </a>
                    <a href="http://www.huihome.cn/merchant/55.html" title="梦天木门">
                        <img src="/asset/images/pinpai55.png" alt="梦天木门">
                    </a>
                    <a href="http://www.huihome.cn/merchant/51.html" title="恒洁卫浴（万家丽店）">
                        <img src="/asset/images/pinpai51.png" alt="恒洁卫浴（万家丽店）">
                    </a>
                    <a href="http://www.huihome.cn/merchant/50.html" title="板川安全集成灶">
                        <img src="/asset/images/pinpai50.png" alt="板川安全集成灶">
                    </a>
                    <a href="http://www.huihome.cn/merchant/47.html" title="嘉宝厨柜•衣柜">
                        <img src="/asset/images/pinpai47.png" alt="嘉宝厨柜•衣柜">
                    </a>
                    <a href="http://www.huihome.cn/merchant/8.html" title="巴迪斯吊顶南红星店">
                        <img src="/asset/images/pinpai8.png" alt="巴迪斯吊顶南红星店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/9.html" title="派格嘉橱柜">
                        <img src="/asset/images/pinpai9.png" alt="派格嘉橱柜">
                    </a>
                    <a href="http://www.huihome.cn/merchant/63.html" title="舒逸冷暖中央空调">
                        <img src="/asset/images/pinpai63.png" alt="舒逸冷暖中央空调">
                    </a>
                    <a href="http://www.huihome.cn/merchant/60.html" title="挪亚家家居">
                        <img src="/asset/images/pinpai60.png" alt="挪亚家家居">
                    </a>
                    <a href="http://www.huihome.cn/merchant/57.html" title="煜景门窗厂家直销">
                        <img src="/asset/images/pinpai57.png" alt="煜景门窗厂家直销">
                    </a>
                    <a href="http://www.huihome.cn/merchant/54.html" title="安博智能科技">
                        <img src="/asset/images/pinpai54.png" alt="安博智能科技">
                    </a>
                    <a href="http://www.huihome.cn/merchant/28.html" title="卓高(帝斯固)美缝">
                        <img src="/asset/images/pinpai28.png" alt="卓高(帝斯固)美缝">
                    </a>
                    <a href="http://www.huihome.cn/merchant/22.html" title="晾霸智能电动晾衣架">
                        <img src="/asset/images/pinpai22.png" alt="晾霸智能电动晾衣架">
                    </a>
                    <a href="http://www.huihome.cn/merchant/5.html" title="英国邓禄普床垫">
                        <img src="/asset/images/pinpai5.png" alt="英国邓禄普床垫">
                    </a>
                    <a href="http://www.huihome.cn/merchant/6.html" title="路过麦田窗帘软装">
                        <img src="/asset/images/pinpai6.png" alt="路过麦田窗帘软装">
                    </a>
                    <a href="http://www.huihome.cn/merchant/56.html" title="豪迪匠心全屋定制">
                        <img src="/asset/images/pinpai56.png" alt="豪迪匠心全屋定制">
                    </a>
                    <a href="http://www.huihome.cn/merchant/86.html" title="冠珠陶瓷">
                        <img src="/asset/images/pinpai86.png" alt="冠珠陶瓷">
                    </a>
                    <a href="http://www.huihome.cn/merchant/84.html" title="昱信暖通舒适家居">
                        <img src="/asset/images/pinpai84.png" alt="昱信暖通舒适家居">
                    </a>
                    <a href="http://www.huihome.cn/merchant/77.html" title="测试">
                        <img src="/asset/images/pinpai77.png" alt="测试">
                    </a>
                    <a href="http://www.huihome.cn/merchant/83.html" title="惠一美家家居">
                        <img src="/asset/images/pinpai83.png" alt="惠一美家家居">
                    </a>
                    <a href="http://www.huihome.cn/merchant/82.html" title="康麦森地板">
                        <img src="/asset/images/pinpai82.png" alt="康麦森地板">
                    </a>
                    <a href="http://www.huihome.cn/merchant/81.html" title="意大利萨铂艺术涂料">
                        <img src="/asset/images/pinpai81.png" alt="意大利萨铂艺术涂料">
                    </a>
                    <a href="http://www.huihome.cn/merchant/80.html" title="湖南置湘机电设备有限公司">
                        <img src="/asset/images/pinpai80.png" alt="湖南置湘机电设备有限公司">
                    </a>
                    <a href="http://www.huihome.cn/merchant/79.html" title="绿米智能家居体验馆">
                        <img src="/asset/images/pinpai79.png" alt="绿米智能家居体验馆">
                    </a>
                    <a href="http://www.huihome.cn/merchant/78.html" title="长沙卓高美缝">
                        <img src="/asset/images/pinpai78.png" alt="长沙卓高美缝">
                    </a>
                    <a href="http://www.huihome.cn/merchant/75.html" title="湖南斌宇建材贸易有限公司">
                        <img src="/asset/images/pinpai75.png" alt="湖南斌宇建材贸易有限公司">
                    </a>
                    <a href="http://www.huihome.cn/merchant/74.html" title="锦尚全屋定制">
                        <img src="/asset/images/pinpai74.png" alt="锦尚全屋定制">
                    </a>
                    <a href="http://www.huihome.cn/merchant/73.html" title="印博文化">
                        <img src="/asset/images/pinpai73.png" alt="印博文化">
                    </a>
                    <a href="http://www.huihome.cn/merchant/72.html" title="格林世家">
                        <img src="/asset/images/pinpai72.png" alt="格林世家">
                    </a>
                    <a href="http://www.huihome.cn/merchant/71.html" title="喜柚智能厨电&amp;威莫进口家电">
                        <img src="/asset/images/pinpai71.png" alt="喜柚智能厨电&amp;威莫进口家电">
                    </a>
                    <a href="http://www.huihome.cn/merchant/70.html" title="小沐头智造">
                        <img src="/asset/images/pinpai70.png" alt="小沐头智造">
                    </a>
                    <a href="http://www.huihome.cn/merchant/69.html" title="长沙富之豪窗帘店">
                        <img src="/asset/images/pinpai69.png" alt="长沙富之豪窗帘店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/68.html" title="天蓝舒适家">
                        <img src="/asset/images/pinpai68.png" alt="天蓝舒适家">
                    </a>
                    <a href="http://www.huihome.cn/merchant/67.html" title="罗莱家纺祁阳店">
                        <img src="/asset/images/pinpai67.png" alt="罗莱家纺祁阳店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/66.html" title="亮阁门窗长沙百纳店">
                        <img src="/asset/images/pinpai66.png" alt="亮阁门窗长沙百纳店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/65.html" title="梵品免漆木皮涂装板长沙店">
                        <img src="/asset/images/pinpai65.png" alt="梵品免漆木皮涂装板长沙店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/64.html" title="优派门窗">
                        <img src="/asset/images/pinpai64.png" alt="优派门窗">
                    </a>
                    <a href="http://www.huihome.cn/merchant/62.html" title="陶泽门窗">
                        <img src="/asset/images/pinpai62.png" alt="陶泽门窗">
                    </a>
                    <a href="http://www.huihome.cn/merchant/61.html" title="施丹顶墙全房定制">
                        <img src="/asset/images/pinpai61.png" alt="施丹顶墙全房定制">
                    </a>
                    <a href="http://www.huihome.cn/merchant/59.html" title="3M净水旗舰店">
                        <img src="/asset/images/pinpai59.png" alt="3M净水旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/58.html" title="欧琳水槽旗舰店">
                        <img src="/asset/images/pinpai58.png" alt="欧琳水槽旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/53.html" title="顺辉瓷砖">
                        <img src="/asset/images/pinpai53.png" alt="顺辉瓷砖">
                    </a>
                    <a href="http://www.huihome.cn/merchant/52.html" title="冠禹艺术涂料">
                        <img src="/asset/images/pinpai52.png" alt="冠禹艺术涂料">
                    </a>
                    <a href="http://www.huihome.cn/merchant/34.html" title="星湖伟业家居专营店">
                        <img src="/asset/images/pinpai34.png" alt="星湖伟业家居专营店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/40.html" title="viborg旗舰店">
                        <img src="/asset/images/pinpai40.png" alt="viborg旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/39.html" title="沃夫伍德旗舰店">
                        <img src="/asset/images/pinpai39.png" alt="沃夫伍德旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/48.html" title="绘装&amp;锐范德软装搭配">
                        <img src="/asset/images/pinpai48.png" alt="绘装&amp;锐范德软装搭配">
                    </a>
                    <a href="http://www.huihome.cn/merchant/46.html" title="领家颜选日系家居馆">
                        <img src="/asset/images/pinpai46.png" alt="领家颜选日系家居馆">
                    </a>
                    <a href="http://www.huihome.cn/merchant/45.html" title="Krono（柯诺）原装进口地板">
                        <img src="/asset/images/pinpai45.png" alt="Krono（柯诺）原装进口地板">
                    </a>
                    <a href="http://www.huihome.cn/merchant/44.html" title="GIA极简大理石瓷砖">
                        <img src="/asset/images/pinpai44.png" alt="GIA极简大理石瓷砖">
                    </a>
                    <a href="http://www.huihome.cn/merchant/42.html" title="editor01 生活家居">
                        <img src="/asset/images/pinpai42.png" alt="editor01 生活家居">
                    </a>
                    <a href="http://www.huihome.cn/merchant/36.html" title="吉事多卫浴">
                        <img src="/asset/images/pinpai36.png" alt="吉事多卫浴">
                    </a>
                    <a href="http://www.huihome.cn/merchant/33.html" title="优活臻品专卖店">
                        <img src="/asset/images/pinpai33.png" alt="优活臻品专卖店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/32.html" title="泽凡诺旗舰店">
                        <img src="/asset/images/pinpai32.png" alt="泽凡诺旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/31.html" title="qinxn旗舰店">
                        <img src="/asset/images/pinpai31.png" alt="qinxn旗舰店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/30.html" title="美家美户无缝墙布">
                        <img src="/asset/images/pinpai30.png" alt="美家美户无缝墙布">
                    </a>
                    <a href="http://www.huihome.cn/merchant/27.html" title="返必克地漏">
                        <img src="/asset/images/pinpai27.png" alt="返必克地漏">
                    </a>
                    <a href="http://www.huihome.cn/merchant/26.html" title="优冠金门">
                        <img src="/asset/images/pinpai26.png" alt="优冠金门">
                    </a>
                    <a href="http://www.huihome.cn/merchant/25.html" title="森奥家具">
                        <img src="/asset/images/pinpai25.png" alt="森奥家具">
                    </a>
                    <a href="http://www.huihome.cn/merchant/24.html" title="德贝橱柜">
                        <img src="/asset/images/pinpai24.png" alt="德贝橱柜">
                    </a>
                    <a href="http://www.huihome.cn/merchant/23.html" title="雷拓移门衣柜">
                        <img src="/asset/images/pinpai23.png" alt="雷拓移门衣柜">
                    </a>
                    <a href="http://www.huihome.cn/merchant/21.html" title="德国鲸彩漆长沙店">
                        <img src="/asset/images/pinpai21.png" alt="德国鲸彩漆长沙店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/13.html" title="蒂伊国际软装家居">
                        <img src="/asset/images/pinpai13.png" alt="蒂伊国际软装家居">
                    </a>
                    <a href="http://www.huihome.cn/merchant/15.html" title="VOC指纹锁">
                        <img src="/asset/images/pinpai15.png" alt="VOC指纹锁">
                    </a>
                    <a href="http://www.huihome.cn/merchant/16.html" title="绘装官方活动中心">
                        <img src="/asset/images/pinpai16.png" alt="绘装官方活动中心">
                    </a>
                    <a href="http://www.huihome.cn/merchant/11.html" title="美享家灯饰荟红星灯世界店">
                        <img src="/asset/images/pinpai11.png" alt="美享家灯饰荟红星灯世界店">
                    </a>
                    <a href="http://www.huihome.cn/merchant/12.html" title="方太厨电">
                        <img src="/asset/images/pinpai12.png" alt="方太厨电">
                    </a>
                    <a href="http://www.huihome.cn/merchant/10.html" title="蓝光门窗安居乐店">
                        <img src="/asset/images/pinpai10.png" alt="蓝光门窗安居乐店">
                    </a>
                </div>
            </div>

            <!--
                   作者：403571264@qq.com
                   时间：2017-07-10
                   描述：SEO优化
            -->
            <div class="index-SEO">
                <a title="软装搭配，一篇就让你心领神会" href="http://www.huihome.cn/guide/3600.html"><span>软装搭配，一篇就让你心领神会</span></a>
                <a title="台风暴雨袭击不是事!小编奉上家装防御技能" href="http://www.huihome.cn/guide/978.html"><span>台风暴雨袭击不是事!小编奉上家装防御技能</span></a>
                <a title="【绘客室】第7期：从游击队到专业施工团队，一句话改变了她" href="http://www.huihome.cn/guide/1374.html"><span>【绘客室】第7期：从游击队到专业施工团队，一句话改变了她</span></a>
                <a title="“花”点时间，提升夏日生活的幸福感" href="http://www.huihome.cn/guide/3635.html"><span>“花”点时间，提升夏日生活的幸福感</span></a>
                <a title="1000块的床垫和10000块的床垫区别在哪儿？" href="http://www.huihome.cn/guide/1415.html"><span>1000块的床垫和10000块的床垫区别在哪儿？</span></a>
                <a title="给家来点儿新鲜感" href="http://www.huihome.cn/guide/3609.html"><span>给家来点儿新鲜感</span></a>
                <a title="【绘客室】第1期：跨越1000多公里的母爱" href="http://www.huihome.cn/guide/1357.html"><span>【绘客室】第1期：跨越1000多公里的母爱</span></a>
                <a title="关于家电的选择心得分享，且看设计师的家是如何选择的！" href="http://www.huihome.cn/guide/1113.html"><span>关于家电的选择心得分享，且看设计师的家是如何选择的！</span></a>
                <a title="相比壁挂式空调，你家是不是更合适中央空调？" href="http://www.huihome.cn/guide/1050.html"><span>相比壁挂式空调，你家是不是更合适中央空调？</span></a>
                <a title="【材料选择】从环保角度如何选择家装板材?" href="http://www.huihome.cn/guide/52.html"><span>【材料选择】从环保角度如何选择家装板材?</span></a>
                <a title="绘装周娜：美貌与才华兼备的设计师" href="http://www.huihome.cn/guide/861.html"><span>绘装周娜：美貌与才华兼备的设计师</span></a>
                <a title="马桶也有大学问，可不要随便选！" href="http://www.huihome.cn/guide/3720.html"><span>马桶也有大学问，可不要随便选！</span></a>
                <a title="怎么给房屋做内科手术？家中结构改造必备" href="http://www.huihome.cn/guide/3615.html"><span>怎么给房屋做内科手术？家中结构改造必备</span></a>
                <a title="专业人士告诉你，瓷砖为什么要美缝" href="http://www.huihome.cn/guide/1439.html"><span>专业人士告诉你，瓷砖为什么要美缝</span></a>
                <a title="90后小情侣的温馨爱巢，设计为爱情添别样色彩！" href="http://www.huihome.cn/guide/3665.html"><span>90后小情侣的温馨爱巢，设计为爱情添别样色彩！</span></a>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{url('/asset/css/live.css')}}">
    <!---->
    <script src="{{url('/asset/js/live.js')}}"></script><style type="text/css">
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
    @endsection
