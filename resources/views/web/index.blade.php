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
                <textarea class="top-textarea" placeholder="请简单描述你想问的装修问题" id="content" name="content" maxlength="500"></textarea>
                <input class="top-input" placeholder="请填写您的手机号码" id="telphone" name="telphone">
                <div class="top-apply" onclick="post()">免费申请</div>
                <p class="top-p1">声明：绘装以保护您的隐私为己任，</p>
                <p class="top-p2">手机号仅作提供咨询服务，请放心填写。</p>
            </div>
            <script>
                function post() {
                    $.ajax({
                        type: "POST",//规定传输方式
                        url: "/userpost",//提交URL
                        data: {'_token':'{{csrf_token()}}','content':$('#content').val(),'telphone':$('#telphone').val()},//提交的数据
                        success: function(data){
                          alert(data.msg)
                        }
                    });
                }
            </script>
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
                    @foreach(\App\Model\Designer::HeaderDesinger() as $item)
                    <div class="designer-div">
                        <div class="role-mask"></div>
                        <div class="role-infor">
                            <div class="designer-cost">{{$item->price}}元/m²</div>
                            <div class="role-infor-div">
                                <img class="role-small-avatar" src="{{$item->avatar}}" alt="{{$item->name}}">
                                <p class="role-name">{{$item->name}}</p>
                                <p class="role-atelier">{{$item->studio}}</p>
                            </div>
                        </div>
                        <img class="designer-avatar" src="{{$item->avatar}}" alt="{{$item->name}}">
                        <p class="designer-expert" title="{{$item->style}}">
                            {{$item->style}}</p>
                        <p class="designer-txt" title="{{$item->dream}}">{{$item->dream}}</p>
                        <a href="{{url('/designer'.$item->id)}}.html" title="{{$item->name}}个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                    @endforeach
                <div class="designer-other-div" data-cate="0" data-dindex="1" data-pindex="0">
                    <img src="/asset/images/huanyihuan.png" alt="换一批"> <span>换一批</span>
                </div>
            </div>

            <!--
                   作者：403571264@qq.com
                   时间：2017-07-10
                   描述：家具商城
            -->

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
                 @foreach(\App\Model\Brands::all() as $item)
                    <a href="{{url('/merchant/'.$item->id)}}" title="{{$item->name}}">
                        <img src="{{url($item->img_url)}}" alt="{{$item->nae}}">
                    </a>
                     @endforeach
                </div>
            </div>

            <!--
                   作者：403571264@qq.com
                   时间：2017-07-10
                   描述：SEO优化
            -->
            <div class="index-SEO">
                @foreach(\App\Model\Article::Article('shouye',15) as $item)
                <a title="{{$item->name}}" href="{{url('page/'.$item->id)}}.html"><span>{{$item->name}}</span></a>
                @endforeach
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
