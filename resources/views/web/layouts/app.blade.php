<!DOCTYPE html>
<html class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" type="text/javascript" src="">{{url('asset/js/pckit.js')}}</script>
    <title>绘装_长沙装修_长沙装修效果图-长沙装修平台</title>
    <meta name="keywords" content="长沙装修，长沙装修效果图，长沙装修案例，长沙装修报价">
    <meta name="description" content="绘装为湖南首家互联网装修服务平台，致力于为长沙装修业主提供长沙装修案例，长沙装修报价，长沙装修效果图，为您提供优质长沙装修装饰服务；众多装修攻略为你选择长沙装修公司提供更多参考，帮您一站式解决装修问题。">
    <link rel="icon" type="image/x-icon" href="http://www.huihome.cn/static/img/logo-ico.png">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/swiper-3.4.2.min.css')}}">
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{url('asset/css/iview.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('asset/css/prtar.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('asset/css/menu_top.css')}}">
<input type="hidden" name="service_flag" id="service_flag" value="0">
<div class="menu-top-content">
    <div class="content" style="margin-top: 0; width: 1208px;">
        <input type="hidden" id="menu_type" value="0">
        <div class="menu-middle">
            <img class="menu-logo" src="/asset/images/logo_new.png" alt="LOGO">
            <div class="menu-search">
                <div class="menu-search-select">
                    <span key="all">全部</span> <img src="/asset/images/xiala.png" alt="切换搜索条件">
                </div>
                <input class="menu-search-input" placeholder="如何请设计师？">
                <div class="menu-search-img-div">
                    <img class="menu-search-img" src="/asset/images/shousuo.png" alt="搜索用户、直播、案例、攻略、商城活动">
                </div>
                <div class="menu-search-option">
                    <div key="all">全部</div>
                    <div key="user">用户</div>
                    <div key="case">案例</div>
                    <div key="guide">攻略</div>
                </div>
            </div>
            <div class="menu-inlogin-div">
                <a class="menu-to-work" style="display: none;" href="http://www.huihome.cn/designer/workList/t_s_e_n_p1.html" target="_blank">
                    作品管理 </a> <img src="/asset/images/morentouxiang.png" alt="默认头像">
                <span>退出</span>
            </div>
            <div class="menu-login-div">
                <div class="menu-login">登录</div>
                <div class="menu-register">注册</div>
            </div>
        </div>
    </div>
    <div class="menu-select-div">
        <ul class="content" style="display: flex; margin-top: 0; background-color: #fff;">

            @foreach(\App\Model\Nav::nav() as $item)
            <a class="menu-option @if($item->en_name == \Request::route()->getName()) menu-option-select @else @endif" target="_blank" href="{{url($item->en_name)}}">
                <li class="">{{$item->name}}</li>
            </a>
            @endforeach

        </ul>
    </div>
</div>

 @yield('content')


<div style="background-color: #f5fafc; margin-top: 30px; width: 100%; border-top: 1px solid #ccc; z-index: 9992;">
    <div class="content" style="background-color: #f5fafc;">
        <div style="padding-top: 30px;">
            <p style="font-size: 28px; color: #000;">友情链接</p>
            <div style="padding-bottom: 10px; border-bottom: 1px solid #ccc;">
                <a href="http://hn.qq.com/" class="menu-bottom-link">腾讯大湘网</a>
                <a href="http://xlfdjc.com/" class="menu-bottom-link">小李飞刀甲醛检测</a>
                <a href="http://xlfd315.com/" class="menu-bottom-link">小李飞刀验房公司</a>
                <div style="clear: both;"></div>
            </div>
            <div style="display: flex; margin-top: 30px;">
                <div>
                    <div style="display: flex; font-size: 20px; color: #3db8a8;">
                        <a href="http://www.huihome.cn/introduction" style="margin-right: 12px; cursor: pointer;">关于我们</a> <a href="http://www.huihome.cn/introduction?page=protocol" style="margin-right: 12px; cursor: pointer;">网站条款</a> <a href="http://www.huihome.cn/introduction?page=invite" style="margin-right: 12px; cursor: pointer;">人才招聘</a> <a href="http://www.huihome.cn/introduction?page=cooperation" style="cursor: pointer;">公司合作</a>
                    </div>
                    <img src="/asset/images/logo2.png" style="width: 353px; height: 71px; margin-top: 40px;" alt="LOGO">
                </div>
                <div style="text-align: center; margin-left: 142px;">
                    <p style="font-size: 31px; color: #000; line-height: 50px;">400-655-5695</p>
                    <p>周一至周日 8：00-20：00</p>
                    <div class="menu-bottom-consultation">联系在线客服</div>
                </div>
                <div style="margin-left: 183px; display: flex;">
                    <div style="text-align: center;">
                        <img src="/asset/images/apperweima.png" style="width: 142px; height: 142px;" alt="绘装APP下载">
                        <p style="font-size: 20px; color: #000; margin-top: 16px;">绘装APP</p>
                    </div>
                    <div style="text-align: center; margin-left: 20px;">
                        <img src="/asset/images/erweima2bankuan.png" style="width: 142px; height: 142px;" alt="绘装公众号">
                        <p style="font-size: 20px; color: #000; margin-top: 16px;">绘装公众号</p>
                    </div>
                </div>
            </div>
            <div style="display: flex;justify-content: center;">
                <a style="text-align: right; font-size: 14px; color: #000; margin-top: 44px; padding-bottom: 20px;padding-right: 50px;" target="_blank" href="http://www.huihome.cn/static/img/huihomeZZ.jpg">统一社会信用代码：91430100329512159P</a>
                <a href="http://www.miitbeian.gov.cn/" target="_blank" style="text-align: left; font-size: 14px; color: #000; margin-top: 44px; padding-bottom: 20px;">湘ICP备15005697号-1</a>
                <a target="_blank" href="http://www.huihome.cn/static/img/huihomeICP.jpg" style="text-align: left; font-size: 14px; color: #000; margin-top: 44px; padding-bottom: 20px;padding-left: 50px;">增值电信业务经营许可证：湘B2-20180069</a>
            </div>
        </div>
    </div>
</div>
<script src="{{url('/asset/js/swiper-3.4.2.jquery.min.js')}}"></script>
<script src="{{url('/asset/js/index.js')}}" type="text/javascript"></script>
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
</body></html>
