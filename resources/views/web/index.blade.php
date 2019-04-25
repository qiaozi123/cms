@extends('web.layouts.app')

@section('content')

    <div class="content">
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
                            <a href="{{url('guide/'.$item->id)}}" title="{{$item->title}}">
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
                            <a href="{{url('guide/'.$item->id)}}" title="{{$item->title}}">
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
                <a href="{{url('anli')}}" title="查看更多案例">
                    <p class="case-more">查看更多&gt;&gt;</p>
                </a>
            </div>
            <div class="index-case-list">


                <a href="{{url('case/'.$head->id)}}" title="{{$head->name}}"> <div class="case-left">
                        <img class="case-left-img" src="{{url( \App\Model\CasesPic::where(['case_id'=>$head->id])->first()->img_url)}}" alt="{{$head->name}}">
                        <div class="case-left-infor">
                            <img class="case-left-avatar" src="{{url( \App\Model\CasesPic::where(['case_id'=>$head->id])->first()->img_url)}}" alt="{{$head->designer_name}}">
                            <div class="case-left-role-infor">
                                <p class="case-left-username">{{$head->designer_name}}</p>
                                <p class="case-left-style">{{$head->house_type}}</p>
                            </div>
                        </div>
                    </div>
                </a>

                @foreach($more as $item)
                <a href="{{url('case/'.$item->id)}}" title="{{$item->name}}"> </a><div class="case-right-list"><a href="{{url('case/'.$item->id)}}" title="{{$item->name}}">
                        <div class="case-right">
                            <img class="case-right-img" src="{{url( \App\Model\CasesPic::where(['case_id'=>$item->id])->first()->img_url)}}" alt="{{$item->name}}">
                            <div class="case-right-infor">
                                <img class="case-right-avatar" src="{{url( \App\Model\CasesPic::where(['case_id'=>$item->id])->first()->img_url)}}" alt="{{$item->designer_name}}">
                                <div class="case-right-role-infor">
                                    <p class="case-right-usernmae">{{$item->designer_name}}</p>
                                    <p class="case-right-style">三室·田园</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach

            </div>
            <!--
                   作者：403571264@qq.com
                   时间：2017-07-07
                   描述：请工长/设计
            -->
            <div>
                <div class="role-menu">
                    {{--<div class="design-menu role-select">请设计</div>--}}
                    {{--<div style="font-size: 20px; color: #ccc;">|</div>--}}
                    <div class="pm-menu role-select">请设计</div>
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
                        <a href="{{url('/pm/'.$item->id)}}" title="{{$item->name}}个人主页">
                            <div class="role-go-detail">了解更多</div>
                        </a>
                    </div>
                    @endforeach

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
                    <a href="{{url('/cell/'.$item->id)}}" title="{{$item->name}}">
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
                <a title="{{$item->title}}" href="{{url('guide/'.$item->id)}}"><span>{{$item->title}}</span></a>
                @endforeach
            </div>
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
