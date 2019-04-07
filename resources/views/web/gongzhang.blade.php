@extends('web.layouts.app')

@section('content')
    <div class="menu-right-div">
        <a class="menu-right-option" target="_blank" href="http://www.huihome.cn/about" title="了解绘装" style="line-height: 18px; padding-top: 7px;"> 一分钟 <br>
            了解绘装
        </a>
        <div class="menu-right-option menu-right-option-erweima">
            <img style="height: 34px; width: 34px; vertical-align: middle;" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/erweima.png" alt="扫描二维码"> <img class="menu-right-div-erweima-img" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/land_code.png" alt="绘装APP下载、绘装公众号">
        </div>
        <div class="menu-right-option menu-right-option-kefu">
            <img style="height: 36px; width: 32px; vertical-align: middle;" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/kefu.png" alt="在线客服">
        </div>
        <div class="menu-right-option menu-right-option-toTop">
            <img style="height: 16px; width: 30px; vertical-align: middle;" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/zhidong.png" alt="回到顶部">
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
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jquery-3.2.1.js.下载" type="text/javascript" charset="utf-8"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/config.js.下载"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/js.cookie.js.下载"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/utils.js.下载"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/saved_resource" charset="utf-8"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/components.js.下载"></script>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/menu_top.js.下载" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/vue.min.js.下载"></script>
    <script type="text/javascript" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/iview.min.js.下载"></script>
    <script type="text/javascript" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/vue-resource@1.3.4.js.下载"></script>
    <link rel="stylesheet" href="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/login.css">
    <section id="VueLogin" class="layer-login-signin" style="display: none;"><div class="container"><div class="close">+</div> <div class="ivu-tabs"><div class="ivu-tabs-bar"><div class="ivu-tabs-nav-container"><div class="ivu-tabs-nav-wrap"><div class="ivu-tabs-nav-scroll"><div class="ivu-tabs-nav"><div class="ivu-tabs-ink-bar ivu-tabs-ink-bar-animated" style="display: block; width: 0px; transform: translate3d(0px, 0px, 0px);"></div> <div class="ivu-tabs-tab ivu-tabs-tab-active"><!----> 会员登录 <!----></div><div class="ivu-tabs-tab"><!----> 会员注册 <!----></div></div> <!----></div></div></div></div> <div class="ivu-tabs-content ivu-tabs-content-animated" style="transform: translateX(0%) translateZ(0px);"><div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/vCode" alt="登录图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 下次自动登录</label> <div class="login-btn-submit">登录</div> <p class="line"></p> <p class="tip">第三方登录</p> <div class="thirdPart"><a href="javascript:void(0);" class="qq"></a> <a href="javascript:void(0);" class="weChat"></a></div></div> <div class="ivu-tabs-tabpane"><div class="normal-input ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入手机号" class="ivu-input"> <!----></div> <div class="imgCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入图形验证码" class="ivu-input"> <!----></div> <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/vCode" alt="注册图形验证码" class="imgVcode"></div> <div class="vCodeRow"><div class="normal-input vCode ivu-input-wrapper ivu-input-type"><!----> <!----> <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i> <input type="text" placeholder="请输入短信验证码" class="ivu-input"> <!----></div> <div class="getVcode">验证码</div></div> <label class="autoLogin ivu-checkbox-wrapper"><span class="ivu-checkbox"><span class="ivu-checkbox-inner"></span> <!----> <input type="checkbox" class="ivu-checkbox-input"></span> 我已看过并同意<a href="http://www.huihome.cn/pm/c.html" class="protocol">绘装用户协议条款</a></label> <div class="signin-btn-submit">注册</div></div></div></div> <!----></div></section>
    <script src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/login.js.下载"></script><div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
        <div class="filter">
            <input type="hidden" name="pmCase" value="">
            <input type="hidden" name="workYear" value="">
            <div class="site-quantity">
                <div class="filter-title">
                    工地数量：
                </div>
                <div class="filter-div">
                    <a href="http://www.huihome.cn/pm/c.html" id="caseAll">
                        <div class="filter-select">
                            不限
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cpmcase1.html" id="pmcase1">
                        <div>≤5个</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cpmcase2.html" id="pmcase2">
                        <div>6-10个</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cpmcase3.html" id="pmcase3">
                        <div>11-20个</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cpmcase4.html" id="pmcase4">
                        <div>&gt;20个</div>
                    </a>
                </div>
            </div>
            <div class="practitioners" style="margin-top: 10px;">
                <div class="filter-title">
                    从业年限：
                </div>
                <div class="filter-div">
                    <a href="http://www.huihome.cn/pm/c.html" id="workAll">
                        <div class="filter-select">
                            不限
                        </div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cwork1.html" id="work1">
                        <div>≤2年</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cwork2.html" id="work2">
                        <div>3-5年</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cwork3.html" id="work3">
                        <div>6-10年</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cwork4.html" id="work4">
                        <div>11-15年</div>
                    </a>
                    <a href="http://www.huihome.cn/pm/cwork5.html" id="work5">
                        <div>&gt;15年</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="pm-content">
            <div class="pm-list">
                <h1>工长列表</h1>
                <div class="pm-list-div">
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/5126.html">
                                    <img class="pm-avatar" alt="吴志海" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/5126_7275cdca-800c-48ed-aa8a-bbfbd7c2107f.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/5126.html">
                                            <p class="pm-name">吴志海</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：16年 施工案例数：30个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/11281.html">
                                    <img class="pm-avatar" alt="向义" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/11281_7c9060d2-9df6-48a0-aa04-6b02db968262.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/11281.html">
                                            <p class="pm-name">向义</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：8年 施工案例数：24个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/26289.html">
                                    <img class="pm-avatar" alt="肖超华" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/26289_18ef272c-97cf-4315-9da2-d44c57c9112b.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/26289.html">
                                            <p class="pm-name">肖超华</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：15年 施工案例数：12个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/31018.html">
                                    <img class="pm-avatar" alt="周福明" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/31018_0fb6641f-df14-462d-a252-a977684cdb12.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/31018.html">
                                            <p class="pm-name">周福明</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：14年 施工案例数：10个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/1003.html">
                                    <img class="pm-avatar" alt="盛才均" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1003_25f89c8c-19d8-4426-b4cf-8be45f802e21.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/1003.html">
                                            <p class="pm-name">盛才均</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：26年 施工案例数：46个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/1949.html">
                                    <img class="pm-avatar" alt="孙亚来" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1949_6f213ccf-b1fb-45d4-a572-1d2c8476bc7e.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/1949.html">
                                            <p class="pm-name">孙亚来</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：12年 施工案例数：41个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/8258.html">
                                    <img class="pm-avatar" alt="赵冠韬" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/8258_EZXNDKXWMWZRWDDLOZQOTFURWFLRYRYD.png">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/8258.html">
                                            <p class="pm-name">赵冠韬</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：9年 施工案例数：16个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/38183.html">
                                    <img class="pm-avatar" alt="万俭" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/38183_3b62cd46-170c-476f-82ad-a55a7ad62dd7.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/38183.html">
                                            <p class="pm-name">万俭</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/53.html">
                                            <div class="atelier-name">
                                                旺喜精工•私人定制</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：15年 施工案例数：37个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/1934.html">
                                    <img class="pm-avatar" alt="杨志" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1934_fb015aaa-dd54-4c43-893a-a67fc15b264a.png">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/1934.html">
                                            <p class="pm-name">杨志</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：22年 施工案例数：27个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="http://www.huihome.cn/pm/1001.html">
                                    <img class="pm-avatar" alt="黄细交" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1001_8e70f11a-cff6-43ed-9a41-938b98fcabbe.jpg">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="http://www.huihome.cn/pm/1001.html">
                                            <p class="pm-name">黄细交</p>
                                        </a>
                                        <a href="http://www.huihome.cn/cell/93.html">
                                            <div class="atelier-name">
                                                绘装</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">施工经验：26年 施工案例数：19个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/jinpai.png">
                                    <img class="bao" alt="品质保证" src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pm-more" data-pindex="1" data-psize="10">加载更多&gt;&gt;</div>
                </div>
            </div>

            <div style="width: 330px;">
                <style>
                    .public-team-div{
                        justify-content: space-between;
                        font-size: 16px;
                        color: #fff;
                        line-height: 36px;
                        display: block;
                        display: none;
                    }
                    .public-team-list-div{
                        padding: 0 16px;
                        background-color: #3db8a8;
                        border-radius: 4px;
                        margin-top: 8px;
                    }
                </style>
                <p style="line-height: 40px;font-size: 30px;color: #000;">工作室</p>
                <div style="padding: 20px;background-color: #fff;box-shadow: 0 0 4px #646c7a;margin-top: 10px;">
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/93.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">绘装</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共53位团队伙伴</p>
                            <p style="float: right;">粉丝：4160</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/42.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">沐言空间设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：861</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/44.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">娜语拾光空间设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：726</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/43.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">锐范德陈设软装</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共5位团队伙伴</p>
                            <p style="float: right;">粉丝：393</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/39.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">绘禧</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共12位团队伙伴</p>
                            <p style="float: right;">粉丝：341</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/11.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">方平米设计事务所</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：324</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/5.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">SID设计事务所</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：196</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/74.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">正楷装饰</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共8位团队伙伴</p>
                            <p style="float: right;">粉丝：97</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/54.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">刘洪空间设计事务所</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：87</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/56.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">JY-甲乙设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：59</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/37.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">慧优工程管理有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：58</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/58.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">湖南绘装网络科技有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：56</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/81.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">长沙1986设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：53</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/47.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">东昇造室设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共6位团队伙伴</p>
                            <p style="float: right;">粉丝：51</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/52.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">湘广土木工程</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共10位团队伙伴</p>
                            <p style="float: right;">粉丝：50</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/83.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">曲线空间设计机构</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：42</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/30.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">北京久栖室内设计有限责任公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：40</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/18.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">丛林设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：35</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/84.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">北酉设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：22</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/48.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">龙颜建构设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：18</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/53.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">旺喜精工•私人定制</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：16</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/85.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">湖南创捷装饰</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：16</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/55.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">梵舍晓艺装修设计工程有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：13</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/67.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">尖叫大宅设计施工</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：12</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/69.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">演示专用工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：12</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/78.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">戴言设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：12</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/62.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">栖恩工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：11</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/89.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">三耳室内设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：11</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/64.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">叁拾创设建筑工程有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：9</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/51.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">青芒装饰</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：8</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/61.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">弥芥间（怡艾）大宅庭院设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：8</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/63.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">御匠 • 汪 工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：8</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/73.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">文羽设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：8</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/76.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">顾德家装监理</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共5位团队伙伴</p>
                            <p style="float: right;">粉丝：8</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/60.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">藏缘情艺术软装</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：7</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/87.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">笨鸟工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：7</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/49.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">已南工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：6</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/86.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">北象空间设计事务所</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：6</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/88.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">湖南斌宇园林建筑有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共13位团队伙伴</p>
                            <p style="float: right;">粉丝：5</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/94.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">绘升装饰工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共4位团队伙伴</p>
                            <p style="float: right;">粉丝：5</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/57.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">米弘设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：4</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/65.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">焕新公社小改改设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：4</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/72.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">壹相堂设计事务所</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：4</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/90.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">喜爱&amp;宅记设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共3位团队伙伴</p>
                            <p style="float: right;">粉丝：4</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/59.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">筑空间设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：3</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/70.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">服务商演示工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共7位团队伙伴</p>
                            <p style="float: right;">粉丝：3</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/75.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">祺玉设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：3</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/50.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">惟心造景工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：2</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/79.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">张家界志达装饰装潢有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：2</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/80.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">子杰设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：2</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/71.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">湖南唯鼎建筑装饰设计有限公司</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共2位团队伙伴</p>
                            <p style="float: right;">粉丝：1</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/77.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">雅兰居红木设计馆</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：1</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/92.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">绘装商业空间设计</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：1</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/66.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">大唐设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共0位团队伙伴</p>
                            <p style="float: right;">粉丝：0</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="public-team-list-div">
                        <a href="http://www.huihome.cn/cell/91.html">
                            <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">山谷HUANG设计工作室</p>
                        </a>
                        <div class="public-team-div">
                            <p style="float: left;">共1位团队伙伴</p>
                            <p style="float: right;">粉丝：0</p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('.public-team-list-div').hover(function(){
                            $(this).find('.public-team-div').show();
                        },function(){
                            $(this).find('.public-team-div').hide();
                        });
                    </script>
                </div><style>
                    .activeList-list {
                        box-shadow: 0 0 4px #646c7a;;
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                        justify-content: flex-start;
                        background-color: #fff;
                        width: 330px;
                        margin-top: 20px;
                        padding-bottom: 20px;
                    }

                    .activeList-list a {
                        overflow: hidden;
                        width: 33.33333%;
                        text-align: center;
                        padding: 19px 19px 0 19px;
                    }

                    .activeList-list a img {
                        width: 72px;
                        height: 72px;
                        border-radius: 72px;
                    }
                    .activeList-list a img:hover{
                        border: 1px solid #fff;
                    }
                </style>
                <p style="line-height: 40px; font-size: 30px; color: #000; margin-top: 20px;">最近活跃的工长</p>
                <div class="activeList-list">
                    <a href="http://www.huihome.cn/pm/5126.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/5126_7275cdca-800c-48ed-aa8a-bbfbd7c2107f.jpg" alt="吴志海">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">吴志海</p>
                    </a>
                    <a href="http://www.huihome.cn/pm/11281.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/11281_7c9060d2-9df6-48a0-aa04-6b02db968262.jpg" alt="向义">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">向义</p>
                    </a>
                    <a href="http://www.huihome.cn/pm/26289.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/26289_18ef272c-97cf-4315-9da2-d44c57c9112b.jpg" alt="肖超华">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">肖超华</p>
                    </a>
                    <a href="http://www.huihome.cn/pm/31018.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/31018_0fb6641f-df14-462d-a252-a977684cdb12.jpg" alt="周福明">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">周福明</p>
                    </a>
                    <a href="http://www.huihome.cn/pm/1003.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1003_25f89c8c-19d8-4426-b4cf-8be45f802e21.jpg" alt="盛才均">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">盛才均</p>
                    </a>
                    <a href="http://www.huihome.cn/pm/1949.html">
                        <img src="./长沙家装设计师_长沙室内设计师_长沙装修设计公司—绘装网_files/1949_6f213ccf-b1fb-45d4-a572-1d2c8476bc7e.jpg" alt="孙亚来">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">孙亚来</p>
                    </a>
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
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/pmList.css')}}">
    @endsection
