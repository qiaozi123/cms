@extends('web.layouts.app')

@section('content')
    <div class="menu-right-div">
        <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解绘装" style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
            了解绘装
        </a>
        <div class="menu-right-option menu-right-option-erweima">
            <img style="height: 34px; width: 34px; vertical-align: middle;" src=".{{url('')}}/erweima.png" alt="扫描二维码"> <img class="menu-right-div-erweima-img" src=".{{url('')}}/land_code.png" alt="绘装APP下载、绘装公众号">
        </div>
        <div class="menu-right-option menu-right-option-kefu">
            <img style="height: 36px; width: 32px; vertical-align: middle;" src=".{{url('')}}/kefu.png" alt="在线客服">
        </div>
        <div class="menu-right-option menu-right-option-toTop">
            <img style="height: 16px; width: 30px; vertical-align: middle;" src=".{{url('')}}/zhidong.png" alt="回到顶部">
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
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/case.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/pageCuter.css')}}">
    <script src=".{{url('asset/js/jquery-3.2.1.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src=".{{url('asset/js/config.js')}}"></script>
    <script src=".{{url('asset/js/js.cookie.js')}}"></script>
    <script src=".{{url('asset/js/utils.js')}}"></script>

    <script src=".{{url('asset/js/menu_top.js')}}" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src=".{{url('asset/js//vue.min.js')}}"></script>
    <script type="text/javascript" src=".{{url('asset/js/iview.min.js')}}"></script>
    <script type="text/javascript" src=".{{url('asset/js/vue-resource@1.3.4.js')}}"></script>
    <link rel="stylesheet" href=".{{url('asset/css/login.css')}}">
    <section id="VueLogin" class="layer-login-signin" style="display: none;"><div class="container"><div class="close">+</div> <div class="ivu-tabs"><div class="ivu-tabs-bar"><div class="ivu-tabs-nav-container"><div class="ivu-tabs-nav-wrap"><div class="ivu-tabs-nav-scroll"><div class="ivu-tabs-nav"><div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div> <div class="ivu-tabs-tab ivu-tabs-tab-active"><!----> 会员登录 <!----></div><div class="ivu-tabs-tab"><!----> 会员注册 <!----></div></div> <!----></div></div></div></div> <div class="ivu-tabs-content ivu-tabs-content-animated" style="transform: translateX(0%) translateZ(0px);"><div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src=".{{url('')}}/vCode" alt="登录图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 下次自动登录</label> <div class="login-btn-submit">登录</div> <p class="line"></p> <p class="tip">第三方登录</p> <div class="thirdPart"><a href="javascript:void(0);" class="qq"></a> <a href="javascript:void(0);" class="weChat"></a></div></div> <div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src=".{{url('')}}/vCode" alt="注册图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 我已看过并同意<a href="http://www.huihome.cn/case/cstyleg,area3_o_p.html" class="protocol">绘装用户协议条款</a></label> <div class="signin-btn-submit">注册</div></div></div></div> <!----></div></section>
    <script src=".{{url('asset/js/login.js')}}"></script><div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
        <nav class="filter">
            <input type="hidden" name="houseType" value="">
            <input type="hidden" name="decoStyle" value="styleg">
            <input type="hidden" name="houseArea" value="area3">
            <input type="hidden" name="by" value="">
            <input type="hidden" name="pageIndex" value="">
            <div class="type">
                <div class="summary">户型：</div>
                <div class="container">
                    <a href="http://www.huihome.cn/case/c_o_p.html" class="unit selected" id="houseAll">不限</a>
                    <a href="http://www.huihome.cn/case/chouse1_o_p.html" class="unit" id="house1">一室</a>
                    <a href="http://www.huihome.cn/case/chouse2_o_p.html" class="unit" id="house2">二室</a>
                    <a href="http://www.huihome.cn/case/chouse3_o_p.html" class="unit" id="house3">三室</a>
                    <a href="http://www.huihome.cn/case/chouse4_o_p.html" class="unit" id="house4">四室及以上</a>
                    <a href="http://www.huihome.cn/case/chouse5_o_p.html" class="unit" id="house5">别墅</a>
                    <a href="http://www.huihome.cn/case/chouse6_o_p.html" class="unit" id="house6">其他</a>
                </div>
            </div>
            <div class="style">
                <div class="summary">风格：</div>
                <div class="container">
                    <a href="http://www.huihome.cn/case/c_o_p.html" class="unit" id="styleAll">不限</a>
                    <a href="http://www.huihome.cn/case/cstyle1_o_p.html" class="unit" id="style1">现代</a>
                    <a href="http://www.huihome.cn/case/cstyle2_o_p.html" class="unit" id="style2">美式</a>
                    <a href="http://www.huihome.cn/case/cstyle3_o_p.html" class="unit" id="style3">中式</a>
                    <a href="http://www.huihome.cn/case/cstyle5_o_p.html" class="unit" id="style5">欧式</a>
                    <a href="http://www.huihome.cn/case/cstyle6_o_p.html" class="unit" id="style6">日式</a>
                    <a href="http://www.huihome.cn/case/cstyle8_o_p.html" class="unit" id="style8">田园</a>
                    <a href="http://www.huihome.cn/case/cstylea_o_p.html" class="unit" id="stylea">混搭</a>
                    <a href="http://www.huihome.cn/case/cstyleb_o_p.html" class="unit" id="styleb">LOFT</a>
                    <a href="http://www.huihome.cn/case/cstylef_o_p.html" class="unit" id="stylef">北欧</a>
                    <a href="http://www.huihome.cn/case/cstyleg_o_p.html" class="unit selected" id="styleg">其他</a>
                </div>
            </div>
            <div class="area">
                <div class="summary">面积：</div>
                <div class="container">
                    <a href="http://www.huihome.cn/case/c_o_p.html" class="unit" id="areaAll">不限</a>
                    <a href="http://www.huihome.cn/case/carea1_o_p.html" class="unit" id="area1">≤90m²</a>
                    <a href="http://www.huihome.cn/case/carea2_o_p.html" class="unit" id="area2">91-140m²</a>
                    <a href="http://www.huihome.cn/case/carea3_o_p.html" class="unit selected" id="area3">141-200m²</a>
                    <a href="http://www.huihome.cn/case/carea4_o_p.html" class="unit" id="area4">201-300m²</a>
                    <a href="http://www.huihome.cn/case/carea5_o_p.html" class="unit" id="area5">301-400m²</a>
                    <a href="http://www.huihome.cn/case/carea6_o_p.html" class="unit" id="area6">&gt;400m²</a>
                </div>
            </div>
            <div class="condition">
                <div class="summary">筛选条件：</div>
                <div class="container">
                    <a href="http://www.huihome.cn/case/c_o_p.html" class="unit selected" id="by0">按时间最近</a>
                    <a href="http://www.huihome.cn/case/c_o1_p.html" class="unit" id="by1">按阅读最多</a>
                </div>
            </div>
        </nav>
        <section class="cards">
            <a href="http://www.huihome.cn/case/2312.html" class="card">
                <div class="view" style="background-image:url(&#39;http://image.huihome.cn/1811/14/41054_UFSYXNJYNPHOAARACUVJDAOJOTQKKTAV.png?x-oss-process=image/watermark,image_c2h1aXlpbjIucG5n,g_se,x_20,y_20,t_50&#39;)">
                    <p class="summary"><span class="name" title="办公室空间设计效果图">办公室空间设计效果图</span><span class="location" title="200m²·其他·其他">200m²·其他·其他</span></p>
                </div>
                <div class="rowAvatar">
                    <div class="avatar" style="background-image:url(&#39;http://image.huihome.cn/1811/07/41054_5f723dd0-05a7-4fbf-a0df-77399d41fbaf.jpg&#39;)"></div>
                    <p class="name">曲线空间-周博</p>
                    <p class="comefrom">曲线空间设计机构</p>
                </div>
                <div class="rowJohndoe">
                    <div class="viewer">
                        <img src=".{{url('')}}/yuedu.png" alt="阅读数" class="icon"> 105</div>
                    <div class="awsome">
                        <img src=".{{url('')}}/dianzan2.png" alt="点赞数" class="icon"> 2</div>
                    <div class="comment">
                        <img src=".{{url('')}}/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src=".{{url('')}}/fenxiang.png" alt="分享数" class="icon"> 2</div>
                </div>
            </a>
            <a href="http://www.huihome.cn/case/2274.html" class="card">
                <div class="view" style="background-image:url(&#39;http://image.huihome.cn/1811/05/39796_e37940c0-740a-4dff-8708-bf9e17ffec71.jpg?x-oss-process=image/resize,w_320&#39;)">
                    <p class="summary"><span class="name" title="第一湾">第一湾</span><span class="location" title="142㎡m²·三室·其他">142㎡m²·三室·其他</span></p>
                </div>
                <div class="rowAvatar">
                    <div class="avatar" style="background-image:url(&#39;http://image.huihome.cn/1810/27/39796_a01114a5-ed17-4596-8acb-f603081ea957.jpg&#39;)"></div>
                    <p class="name">集初建筑·陈海</p>
                </div>
                <div class="rowJohndoe">
                    <div class="viewer">
                        <img src=".{{url('')}}/yuedu.png" alt="阅读数" class="icon"> 127</div>
                    <div class="awsome">
                        <img src=".{{url('')}}/dianzan2.png" alt="点赞数" class="icon"> 1</div>
                    <div class="comment">
                        <img src=".{{url('')}}/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src=".{{url('')}}/fenxiang.png" alt="分享数" class="icon"> 3</div>
                </div>
            </a>
            <a href="http://www.huihome.cn/case/1103.html" class="card">
                <div class="view" style="background-image:url(&#39;http://image.huihome.cn/161215/1557_21227942-19b9-41c4-bb9b-d41a0d3eefac.jpg&#39;)">
                    <p class="summary"><span class="name" title="地中海">地中海</span><span class="location" title="160m²·四室及以上·其他">160m²·四室及以上·其他</span></p>
                </div>
                <div class="rowAvatar">
                    <div class="avatar" style="background-image:url(&#39;http://image.huihome.cn/161104/1557_afbb999f-f586-4ddb-8834-bc274ca777f5.jpg&#39;)"></div>
                    <p class="name">黄振标</p>
                    <p class="comefrom">绘装</p>
                </div>
                <div class="rowJohndoe">
                    <div class="viewer">
                        <img src=".{{url('')}}/yuedu.png" alt="阅读数" class="icon"> 900</div>
                    <div class="awsome">
                        <img src=".{{url('')}}/dianzan2.png" alt="点赞数" class="icon"> 1</div>
                    <div class="comment">
                        <img src=".{{url('')}}/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src=".{{url('')}}/fenxiang.png" alt="分享数" class="icon"> 1</div>
                </div>
            </a>
            <a href="http://www.huihome.cn/case/2445.html" class="card">
                <div class="view" style="background-image:url(&#39;http://image.huihome.cn/1902/21/23090_699492bd-ff16-43fd-8df8-2ac9b44a36f6.jpg?x-oss-process=image/watermark,image_c2h1aXlpbjIucG5n,g_se,x_20,y_20,t_50&#39;)">
                    <p class="summary"><span class="name" title="颐和家园">颐和家园</span><span class="location" title="160m²·四室及以上·其他">160m²·四室及以上·其他</span></p>
                </div>
                <div class="rowAvatar">
                    <div class="avatar" style="background-image:url(&#39;http://image.huihome.cn/1805/18/23090_TFXLPBVGSPVNNVXZJWZZUBTIDCJBLOAV.png&#39;)"></div>
                    <p class="name">李峯</p>
                    <p class="comefrom">沐言空间设计工作室</p>
                </div>
                <div class="rowJohndoe">
                    <div class="viewer">
                        <img src=".{{url('')}}/yuedu.png" alt="阅读数" class="icon"> 75</div>
                    <div class="awsome">
                        <img src=".{{url('')}}/dianzan2.png" alt="点赞数" class="icon"> 1</div>
                    <div class="comment">
                        <img src=".{{url('')}}/pinlun2.png" alt="评论数" class="icon"> 0</div>
                    <div class="share">
                        <img src=".{{url('')}}/fenxiang.png" alt="分享数" class="icon"> 0</div>
                </div>
            </a>
        </section>
        <section class="pageCuter"><div class="pages selected">1</div>
        </section></div>
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
    @endsection
