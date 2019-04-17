@extends('web.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/guideDetails.css">
<div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div>

    <div class="content">
    <section class="main">
        <h3 class="title">{{$data->title}}</h3>
        <p class="date">
            <img src="{{url('asset/images')}}/shijian.png" alt="创建时间" class="time">&nbsp;&nbsp;{{$data->created_at}}</p>
        <div class="rawHTML">
            <section data-role="outer" label="Powered by 135editor.com">
                <section data-role="outer" label="Powered by 135editor.com">
                    <section>
                        <section style="font-family: 微软雅黑;">
                                {!! $data->content !!}
                        </section>
                    </section>
                </section>
            </section>
    </div>
        <div class="page-info">
            <div class="viewer">
                <img src="{{url('asset/images')}}/yuedu.png" alt="阅读数" class="icon"> {{$data->see}}</div>
        </div>
        <div class="insideLinks">
            @if(empty($pre))

            @else
                <a href="{{url('guide/').$pre}}" class="preview">上一篇：{{\App\Model\Article::find($pre)->title}}</a>
            @endif

            @if(empty($next))
45112
            @else
                    <a href="{{url('guide/').$next}}" class="next">下一篇：{{\App\Model\Article::find($next)->title}}</a>
            @endif
        </div>
    </section>
    <section class="accessory">
        <div class="author">
            <div class="avatar" style="background-image:url(&#39;http://image.huihome.cn/app/huixiaomi.png&#39;)"></div>
            <p class="summary">作者</p>
            <p class="name">{{$data->author}}&nbsp;/&nbsp;业主</p>

        </div>
        <p class="sub-title">点击排行</p>
        <div class="article-list">
            @foreach($hot as $key=>$item)
            <a title="{{$item->title}}" href="{{url('guide/').$item->id}}" class="unit">
                <span class="num">{{$key+1}}</span>
                <span class="titleOfarticle">{{$item->title}}</span>
            </a>
            @endforeach

        </div><div style="margin-top: 20px;">
            <div class="QRcode">
                <p>上绘装APP</p>
                <p style="margin-top: 12px;">随时随地和达人一起聊装修</p>
                <img src="{{url('asset/images')}}/apperweima.png">
            </div></div>
    </section>
    {{--<section class="comments">--}}
        {{--<p class="title">评论</p>--}}
        {{--<div class="container"><div class="floor resident"><div class="component-reply-unlogin">--}}
                    {{--<div class="row">--}}
                        {{--<div class="avatarChunk">--}}
                            {{--<div class="avatar" style="background-image:url(&#39;http://www.huihome.cn/static/img/morentouxiang.png&#39;)"></div>--}}
                            {{--<p class="user">请登陆</p>--}}
                        {{--</div>--}}
                        {{--<div type="textarea" class="textArea">--}}
                            {{--<a href="javascript:void(0)" class="loginPlase">评论请先登录</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="btn_release">发布</div>--}}
                {{--</div></div>--}}
            {{--<div class="floor" data-topicid="3728" data-targetuid="32063" data-parentid="1652">--}}
                {{--<div class="floor-top">--}}
                    {{--<a href="javascript:void(0)" class="avatar">--}}
                        {{--<div style="background-image:url(&#39;http://image.huihome.cn/1902/19/32063_PWDWESXDYIQWMYBGDFMEIUEOXZZUHHXP.png&#39;)"></div>--}}
                    {{--</a>--}}
                    {{--<div class="userinfo">--}}
                        {{--<p class="username">姚梦来-</p>--}}
                        {{--<p class="date">2019-04-16 21:26</p>--}}
                    {{--</div>--}}
                    {{--<div class="reply">回复</div>--}}
                {{--</div>--}}
                {{--<div class="floor-bottom">棒棒哒</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div style="display:none;">--}}
            {{--<div class="component-reply-unlogin">--}}
                {{--<div class="row">--}}
                    {{--<div class="avatarChunk">--}}
                        {{--<div class="avatar" style="background-image:url(&#39;http://www.huihome.cn/static/img/morentouxiang.png&#39;)"></div>--}}
                        {{--<p class="user">请登陆</p>--}}
                    {{--</div>--}}
                    {{--<div type="textarea" class="textArea">--}}
                        {{--<a href="javascript:void(0)" class="loginPlase">评论请先登录</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="btn_release">发布</div>--}}
            {{--</div>--}}
            {{--<div class="component-reply">--}}
                {{--<div class="row">--}}
                    {{--<div class="avatarChunk">--}}
                        {{--<div class="avatar" style="background-image:url(&#39;http://www.huihome.cn/static/img/morentouxiang.png&#39;)"></div>--}}
                        {{--<p class="user"></p>--}}
                    {{--</div>--}}
                    {{--<textarea class="textArea" data-topicid="3728" placeholder=""></textarea>--}}
                {{--</div>--}}
                {{--<div class="btn_release">发布</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
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
