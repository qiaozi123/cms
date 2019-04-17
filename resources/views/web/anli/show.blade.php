@extends('web.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/caseDetail.css">
<div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden">
        <div class="ivu-modal" style="width: 520px; display: none;">
            <div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a>
                <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div>
                <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button>
                    <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
    <h3 class="title">{{$data->name}}</h3>
    <section class="banner">
        <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper" >
                @foreach($pic as $item)
                <div class="swiper-slide" style="width: 860px;">
                    <a href="javascript:void(0)" class="bannerImg" style="background-image:url({{url($item->img_url)}})">
                        <div class="tip"></div></a>
                </div>
                @endforeach

            </div>
        </div>
        <div class="thumbList">
            <div class="thumbView">
                @foreach($pic as $item)
                    <div class="thumb" style="background-image:url({{url($item->img_url)}})"></div>
                @endforeach

            </div>
        </div>
        <div class="banner-counter">
            <span id="countAll">{{count($pic)}}</span>
        </div>
    </section>
    <section class="profile">
        <div class="head-chunk" style="background-image:url({{$designer->avatar}})">
            <div class="rowAvatar">
                <a href="http://www.huihome.cn/designer/1616.html">
                    <div class="avatar" style="background-image:url({{$designer->avatar}})"></div>
                </a>
                <div class="layoutChunk">
                    <a href="http://www.huihome.cn/designer/1616.html">
                        <p class="name">{{$designer->name}}</p>
                    </a>
                    <a href="http://www.huihome.cn/cell/93.html">
                        <p class="comefrom">{{$designer->studio}}</p>
                    </a>
                    <div class="stars" data-score="5">★★★★★</div>
                </div>
            </div>
            <div class="btns">
                <div class="consult">在线咨询</div>
                <div class="appointment" data-mobile="400-655-5695">电话预约
                    <div class="appointment-div">
                        <div class="case-appointment-sanjiao">
                        </div>
                        <div class="case-appointment-phone">
                            400-655-5695</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details">
            <p class="infoRow">楼盘地址：{{$data->loupan}}</p>
            <p class="infoRow">面积：{{$data->mianji}}m²&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;风格：{{$data->style}}</p>
            <p class="infoRow">户型：{{$data->house_type}}</p>
            <pre class="summary">{{$data->say}}</pre>
            <div class="counter">
                <div class="viewer">
                    <img src="{{url('asset/images')}}/yuedu.png" alt="阅读数" class="icon">
                    {{$data->see}}</div>
            </div>
        </div>
    </section>



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
@endsection
