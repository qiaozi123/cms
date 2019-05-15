<!DOCTYPE html>
<!-- saved from url=(0022)http://www.huihome.cn/ -->
<html class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" type="text/javascript" src="{{url('asset/js')}}/pckit.js"></script>
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="icon" type="image/x-icon" href="http://www.huihome.cn/static/img/logo-ico.png">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/index.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/swiper-3.4.2.min.css">
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/iview.css">
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/prtar.css">
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/menu_top.css">
<input type="hidden" name="service_flag" id="service_flag" value="0">
<div class="menu-top-content">
    <div class="content" style="margin-top: 0; width: 1208px;">
        <input type="hidden" id="menu_type" value="0">
        <div class="menu-middle">
            <img class="menu-logo" src="{{url('asset/images')}}/logo_new.png" alt="LOGO">
            @if(\Illuminate\Support\Facades\Auth::check())
            <div class="menu-inlogin-div" style="display: flex">
                <img src="{{url('asset/images')}}/morentouxiang.png" alt="默认头像">
                <p onclick="logout()">退出</p>
                <script>
                    function logout() {
                        $.ajax({
                            type: "post",
                            url:"/user/logout",
                            data: { "_token":"{{csrf_token()}}"},
                            success: function (data) {
                                window.location.reload();
                            },
                            error: function(data) {

                            }
                        });
                    }
                </script>
            </div>
            @else
            <div class="menu-login-div">
                <div class="menu-login" onclick="login()">登录</div>
                <div class="menu-register" onclick="regist()">注册</div>
            </div>
            @endif
            <script>
                function login() {
                    $("#VueLogin").attr("style","");
                    $("#loginbar").addClass("ivu-tabs-tab-active");
                    $("#registbar").removeClass("ivu-tabs-tab-active");
                    $("#login_down").css({"display":"block","width":"150px","transform":"translate3d(0px, 0px, 0px)"});
                    $("#login_view").css({"transform":"translateX(0%) translateZ(0px)"});
                }

                function regist() {
                    $("#VueLogin").attr("style","");
                    $("#loginbar").removeClass("ivu-tabs-tab-active");
                    $("#registbar").addClass("ivu-tabs-tab-active");
                    $("#login_down").css({"display":"block","width":"150px","transform":"translate3d(166px, 0px, 0px)"});
                    $("#login_view").css({"transform":"translateX(-100%) translateZ(0px)"});
                }
            </script>
            <script>

            </script>
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
<div class="menu-position-div" style="margin-top: 130px;">
</div>
<!-- 右边菜单栏 -->
<div class="menu-right-div">
    <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解佩奇"
       style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
        了解佩奇
    </a>
    <div class="menu-right-option menu-right-option-erweima">
        <img style="height: 34px; width: 34px; vertical-align: middle;" src="{{url('asset/images')}}/erweima.png"
             alt="扫描二维码"> <img class="menu-right-div-erweima-img" src="{{url('asset/images')}}/land_code.png"
                               alt="佩奇APP下载、佩奇公众号" style="display: none;">
    </div>
    <div class="menu-right-option menu-right-option-kefu">
        <img style="height: 36px; width: 32px; vertical-align: middle;" src="{{url('asset/images')}}/kefu.png" alt="在线客服">
    </div>
    <div class="menu-right-option menu-right-option-toTop">
        <img style="height: 16px; width: 30px; vertical-align: middle;" src="{{url('asset/css')}}/zhidong.png"
             alt="回到顶部">
    </div>
</div>
<script type="text/javascript">
    function Zoom(obj) {
        var width = 126;
        var height = 126;
        var img = new Image();
        img.src = obj.src;
        var scale = Math.max(width / img.width, height / img.height);
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
<script src="{{url('asset/js')}}/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="{{url('asset/js')}}/config.js"></script>
<script src="{{url('asset/js')}}/js.cookie.js"></script>
<script src="{{url('asset/js')}}/utils.js"></script>
<script src="{{url('asset/js')}}/saved_resource" charset="utf-8"></script>
<script src="{{url('asset/js')}}/components.js"></script>
<script src="{{url('asset/js')}}/menu_top.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="{{url('asset/js')}}/vue.min.js"></script>
<script type="text/javascript" src="{{url('asset/js')}}/iview.min.js"></script>
<script type="text/javascript" src="{{url('asset/js')}}/vue-resource@1.3.4.js"></script>
<link rel="stylesheet" href="{{url('asset/css')}}/login.css">
<section id="VueLogin" class="layer-login-signin" style="display:none">
    <div class="container">
        <div class="close" onclick="closelogin()">+</div>
        <script>
            function closelogin() {
                $("#VueLogin").attr("style","display:none");
            }
        </script>
        <div class="ivu-tabs">
            <div class="ivu-tabs-bar">
                <div class="ivu-tabs-nav-container">
                    <div class="ivu-tabs-nav-wrap">
                        <div class="ivu-tabs-nav-scroll">
                            <div class="ivu-tabs-nav">
                                <div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" id="login_down" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                                <div class="ivu-tabs-tab  ivu-tabs-tab-active" onclick="login_view()" id="loginbar"><!----> 会员登录 <!----></div>
                                <div class="ivu-tabs-tab" onclick="regist_view()" id="registbar"><!----> 会员注册 <!----></div>
                                <script>
                                    function login_view() {
                                        $("#loginbar").addClass("ivu-tabs-tab-active");
                                        $("#registbar").removeClass("ivu-tabs-tab-active");
                                        $("#login_down").css({"display":"block","width":"150px","transform":"translate3d(0px, 0px, 0px)"});
                                        $("#login_view").css({"transform":"translateX(0%) translateZ(0px)"});
                                    }

                                    function regist_view() {
                                        $("#loginbar").removeClass("ivu-tabs-tab-active");
                                        $("#registbar").addClass("ivu-tabs-tab-active");
                                        $("#login_down").css({"display":"block","width":"150px","transform":"translate3d(166px, 0px, 0px)"});
                                        $("#login_view").css({"transform":"translateX(-100%) translateZ(0px)"});
                                    }
                                </script>

                            </div> <!---->
                        </div>
                    </div>
                </div>
            </div>
            <div class="ivu-tabs-content ivu-tabs-content-animated" id="login_view" style="transform: translateX(0%) translateZ(0px);">
                <div class="ivu-tabs-tabpane">
                    <div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!---->
                            <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                            <input type="text" placeholder="请输入用户名" id="username_l" class="ivu-input"> <!---->
                    </div>
                    <div class="imgCodeRow">
                        <div class="normal-input  ivu-input-wrapper ivu-input-type"><!----> <!---->
                            <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                            <input type="password" placeholder="请输入密码" id="password_l" class="ivu-input"> <!---->
                        </div>
                    </div>

                    <div class="login-btn-submit" onclick="login_data()">登录</div>
                    <script>
                        function login_data() {
                            username = $('#username_l').val()
                            password = $('#password_l').val()
                            $.ajax({
                                type: "post",
                                url:"/user/login",
                                data: {"username" : username,"password":password,"_token":"{{csrf_token()}}" },
                                success: function (data) {
                                    if (data.status==200){
                                       window.location.reload();
                                    }
                                },
                                error: function(data) {

                                }
                            });
                        }
                    </script>

                </div>
                <div class="ivu-tabs-tabpane">
                    <div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!---->
                        <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                        <input type="text" placeholder="请输入用户名" id="username_r" class="ivu-input"> <!---->
                    </div>
                    <div class="ivu-tabs-tabpane">
                        <div class="normal-input  ivu-input-wrapper ivu-input-type"><!----> <!---->
                            <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                            <input type="password" placeholder="请输入密码"  id="password_r" class="ivu-input"> <!---->
                        </div>
                    </div>
                    <div class="ivu-tabs-tabpane">
                        <div class="normal-input  ivu-input-wrapper ivu-input-type"><!----> <!---->
                            <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                            <input type="password" placeholder="重复密码"  id="r_password_r" class="ivu-input"> <!---->
                            <p style="color: red" id="r_error"></p>
                        </div>
                    </div>
                    <label class="autoLogin ivu-checkbox-wrapper">
                        <span class="ivu-checkbox">
                            <span class="ivu-checkbox-inner"></span> <!---->
                            <input type="checkbox" class="ivu-checkbox-input">
                        </span>我已看过并同意
                        <a href="#" class="protocol">佩奇用户协议条款</a></label>
                    <div class="signin-btn-submit" onclick="regist_data()"> 注册</div>
                    <script>
                        function regist_data() {
                            username = $('#username_r').val()
                            password = $('#password_r').val()
                            repassword = $('#r_password_r').val()
                            if (password != repassword){
                                $("#r_error").html('两次密码不一致')
                                return
                            }
                            $.ajax({
                                type: "post",
                                url:"/user/regist",
                                data: {"username" : username,"password":password,"_token":"{{csrf_token()}}" },
                                success: function (data) {
                                    if (data.status==200){
                                        window.location.reload();
                                    }else{
                                        $("#r_error").html(data.msg)
                                    }
                                },
                                error: function(data) {

                                }
                            });
                        }
                    </script>

                </div>
            </div>
        </div> <!----></div>
</section>
<script src="{{url('asset/js')}}/login.js"></script>
<div class="v-transfer-dom">

    <div class="ivu-modal-mask" style="display: none;"></div>
    <div class="ivu-modal-wrap ivu-modal-hidden">
        <div class="ivu-modal" style="width: 520px; display: none;">
            <div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a>
                <div class="ivu-modal-header">
                    <div class="ivu-modal-header-inner">注册成功</div>
                </div>
                <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div>
                <div class="ivu-modal-footer">
                    <button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span>
                    </button>
                    <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
<link rel="stylesheet" href="{{url('asset/css')}}/live.css">
<!---->
<script src="{{url('asset/js')}}/live.js"></script>
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

<div style="background-color: #f5fafc; margin-top: 30px; width: 100%; border-top: 1px solid #ccc; z-index: 9992;">
    <div class="content" style="background-color: #f5fafc;">
        <div style="padding-top: 30px;">
            <p style="font-size: 28px; color: #000;">友情链接</p>
            <div style="padding-bottom: 10px; border-bottom: 1px solid #ccc;">
                @foreach(\App\Model\FriendLink::all() as $item)
                    <a href="{{$item->link_url}}" class="menu-bottom-link">{{$item->name}}</a>
                @endforeach
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
                        <img src="/asset/images/apperweima.png" style="width: 142px; height: 142px;" alt="佩奇APP下载">
                        <p style="font-size: 20px; color: #000; margin-top: 16px;">佩奇APP</p>
                    </div>
                    </div>
                    <div style="text-align: center; margin-left: 20px;">
                        <img src="/asset/images/erweima2bankuan.png" style="width: 142px; height: 142px;" alt="佩奇公众号">
                        <p style="font-size: 20px; color: #000; margin-top: 16px;">佩奇公众号</p>
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
