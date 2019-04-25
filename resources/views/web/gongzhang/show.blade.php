<!DOCTYPE html>
<html class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script charset="utf-8" type="text/javascript" src="{{url('asset/js')}}/pckit.js"></script>
    <title></title>
    <link rel="icon" type="image/x-icon" href="http://www.huihome.cn/static/img/logo-ico.png">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/designerDetail.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/evaluateTAB.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/resume.css">
    <style type="text/css">
        .role-option{
            width: 25%;
        }
    </style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/iview.css">
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/prtar.css">
<link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/menu_top.css">
<input type="hidden" name="service_flag" id="service_flag" value="0">
<div class="menu-top-content">
    <div class="content" style="margin-top: 0; width: 1208px;">
        <input type="hidden" id="menu_type" value="4p">
        <div class="menu-middle">
            <img class="menu-logo" src="{{url('asset/images')}}/logo_new.png" alt="LOGO">
            <div class="menu-search">
                <div class="menu-search-select">
                    <span key="all">全部</span> <img src="{{url('asset/images')}}/xiala.png" alt="切换搜索条件">
                </div>
                <input class="menu-search-input" placeholder="如何请设计师？">
                <div class="menu-search-img-div">
                    <img class="menu-search-img" src="{{url('asset/images')}}/shousuo.png" alt="搜索用户、直播、案例、攻略、商城活动">
                </div>
                <div class="menu-search-option">
                    <div key="all">全部</div>
                    <div key="user">用户</div>
                    <div key="dync">直播</div>
                    <div key="case">案例</div>
                    <div key="guide">攻略</div>
                    <div key="prom">商城活动</div>
                </div>
            </div>
            <div class="menu-inlogin-div">
                <a class="menu-to-work" style="display: none;" href="http://www.huihome.cn/designer/workList/t_s_e_n_p1.html" target="_blank">
                    作品管理 </a> <img src="{{url('asset/images')}}/morentouxiang.png" alt="默认头像">
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
<div class="menu-position-div" style="margin-top: 130px;">

</div>
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/designerDetail.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/evaluateTAB.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/resume.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/iview.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/prtar.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/menu_top.css">
    <style type="text/css">
        .role-option{
            width: 25%;
        }
    </style>
<!-- 右边菜单栏 -->
<div class="menu-right-div">
    <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解绘装" style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
        了解绘装
    </a>
    <div class="menu-right-option menu-right-option-erweima">
        <img style="height: 34px; width: 34px; vertical-align: middle;" src="{{url('asset/images')}}/erweima.png" alt="扫描二维码"> <img class="menu-right-div-erweima-img" src="{{url('asset/images')}}/land_code.png" alt="绘装APP下载、绘装公众号">
    </div>
    <div class="menu-right-option menu-right-option-kefu">
        <img style="height: 36px; width: 32px; vertical-align: middle;" src="{{url('asset/images')}}/kefu.png" alt="在线客服">
    </div>
    <div class="menu-right-option menu-right-option-toTop">
        <img style="height: 16px; width: 30px; vertical-align: middle;" src="{{url('asset/images')}}/zhidong.png" alt="回到顶部">
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
<script src="{{url('asset/js')}}/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="{{url('asset/js')}}/config.js"></script>
<script src="{{url('asset/js')}}/js.cookie.js"></script>
<script src="{{url('asset/js')}}/utils.js"></script>
<script src="{{url('asset/js')}}/components.js"></script>
<script src="{{url('asset/js')}}/menu_top.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="{{url('asset/js')}}/vue.min.js"></script>
<script type="text/javascript" src="{{url('asset/js')}}/iview.min.js"></script>
<script type="text/javascript" src="{{url('asset/js')}}/vue-resource@1.3.4.js"></script>
<link rel="stylesheet" href="{{url('asset/css')}}/login.css">
<section id="VueLogin" class="layer-login-signin" style="display: none;"><div class="container"><div class="close">+</div> <div class="ivu-tabs"><div class="ivu-tabs-bar"><div class="ivu-tabs-nav-container"><div class="ivu-tabs-nav-wrap"><div class="ivu-tabs-nav-scroll"><div class="ivu-tabs-nav"><div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div> <div class="ivu-tabs-tab ivu-tabs-tab-active"><!----> 会员登录 <!----></div><div class="ivu-tabs-tab"><!----> 会员注册 <!----></div></div> <!----></div></div></div></div> <div class="ivu-tabs-content ivu-tabs-content-animated" style="transform: translateX(0%) translateZ(0px);"><div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow">
                        <div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="{{url('asset/images')}}/vCode" alt="登录图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 下次自动登录</label> <div class="login-btn-submit">登录</div> <p class="line"></p> <p class="tip">第三方登录</p> <div class="thirdPart"><a href="javascript:void(0);" class="qq"></a> <a href="javascript:void(0);" class="weChat"></a></div></div> <div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="{{url('asset/images')}}/vCode" alt="注册图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 我已看过并同意<a href="http://www.huihome.cn/pm/5126.html" class="protocol">绘装用户协议条款</a></label> <div class="signin-btn-submit">注册</div></div></div></div> <!----></div></section>
<script src="{{url('asset/js')}}/login.js"></script><div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div>
    <div class="content" >
    <div style="display: flex;">
        <div>
            <div class="design-top-div">
                <div class="deign-bagroup-div">
                    <div class="design-infor" data-pmid="5126">
                        <img class="designer-avatar" alt="{{$data->name}}" src="{{$data->avatar}}">
                        <div class="design-infor-content">
                            <p class="design-name">{{$data->name}}/<span class="design-role">{{$data->job}}</span></p>
                            <p style="margin-top: 15px;"><em class="star star-05"></em></p>
                        </div>
                    </div>
                    <div class="design-follow-div">

                    </div>
                </div>
                <div class="line-div">
                    <div class="line-consultation">
                        在线咨询
                    </div>
                    <div class="line-appointment">
                        电话预约<span style="margin-left: 10px;display: none;">400-655-5695</span>
                    </div>
                </div>
                <div class="role-infor">
                    <p class="role-title">个人资料</p>
                    <div class="role-infor-div">
                        <p>职位名称：{{$data->job}}</p>
                        <p>所属工作室：{{\App\Model\Studio::find($data->studio_id)->name}}</p>
                        <p>设计经验：{{\App\Model\DesignerTime::find($data->time_id)->times}}</p>
                        <p>案例数：{{ \App\Model\Cases::where(['designer_id'=>$id])->get()->count()}}个</p>
                    </div>
                    <p class="role-txt">
                        工作理念：{{$data->dream}}</p>
                </div>
            </div>

            <!--
               作者：403571264@qq.com
               时间：2017-07-12
               描述：主体内容
           -->

        </div>
        <div style="margin-left: 10px;width: 330px;">
            <div class="QRcode">
                <p>上绘装APP</p>
                <p style="margin-top: 12px;">随时随地和达人一起聊装修</p>
                <img src="{{url('asset/images')}}/apperweima.png">
            </div></div>
    </div>
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

<div style="background-color: #f5fafc; margin-top: 30px; width: 100%; border-top: 1px solid #ccc; z-index: 9992;">
    <div class="content" style="background-color: #f5fafc;">
        <div style="padding-top: 30px;">
            <p style="font-size: 28px; color: #000;">友情链接</p>
            <div style="padding-bottom: 10px; border-bottom: 1px solid #ccc;">
                @foreach(\App\Model\FriendLink::all() as $item)
                    <a href="{{$item->link_url}}" class="menu-bottom-link">{{$item->name}}</a>
                @endforeach
            </div>
            <div style="display: flex; margin-top: 30px;">
                <div>
                    <div style="display: flex; font-size: 20px; color: #3db8a8;">
                        <a href="http://www.huihome.cn/introduction" style="margin-right: 12px; cursor: pointer;">关于我们</a> <a href="http://www.huihome.cn/introduction?page=protocol" style="margin-right: 12px; cursor: pointer;">网站条款</a> <a href="http://www.huihome.cn/introduction?page=invite" style="margin-right: 12px; cursor: pointer;">人才招聘</a> <a href="http://www.huihome.cn/introduction?page=cooperation" style="cursor: pointer;">公司合作</a>
                    </div>
                    <img src="{{url('asset/images')}}/logo2.png" style="width: 353px; height: 71px; margin-top: 40px;" alt="LOGO">
                </div>
                <div style="text-align: center; margin-left: 142px;">
                    <p style="font-size: 31px; color: #000; line-height: 50px;">400-655-5695</p>
                    <p>周一至周日 8：00-20：00</p>
                    <div class="menu-bottom-consultation">联系在线客服</div>
                </div>
                <div style="margin-left: 183px; display: flex;">
                    <div style="text-align: center;">
                        <img src="{{url('asset/images')}}/apperweima.png" style="width: 142px; height: 142px;" alt="绘装APP下载">
                        <p style="font-size: 20px; color: #000; margin-top: 16px;">绘装APP</p>
                    </div>
                    <div style="text-align: center; margin-left: 20px;">
                        <img src="{{url('asset/images')}}/erweima2bankuan.png" style="width: 142px; height: 142px;" alt="绘装公众号">
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
<script src="{{url('asset/js')}}/detail.js"></script>

</body></html>
