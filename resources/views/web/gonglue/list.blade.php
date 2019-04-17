@extends('web.layouts.app')

@section('content')

    <div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div>

    <div class="content" >
        <div class="details">
            @foreach($article as $item)
                <div class="detail">
                    <a href="{{url('guide/'.$item->id)}}"><p class="title">{{$item->title}}</p></a>
                    <p class="summary">{!! str_limit($item->content,150) !!}</p>
                    <div class="detail-bottom">
                        <p class="info">{{$item->author}}  {{$item->created_at}}</p>
                        <div class="viewer">
                            <img src="{{url('asset/images')}}/yuedu.png" alt="阅读数" class="icon"> {{$item->see}}</div>
                        <div class="awsome">
                            <img src="{{url('asset/images')}}/dianzan2.png" alt="点赞数" class="icon"> 0</div>
                        <div class="comment">
                            <img src="{{url('asset/images')}}/pinlun2.png" alt="评论数" class="icon"> 0</div>
                        <div class="share">
                            <img src="{{url('asset/images')}}/fenxiang.png" alt="分享数" class="icon"> 0</div>
                    </div>
                </div>
            @endforeach


            <section class="pageCuter">

                <div class="pages selected">  {{$article->links()}}</div>

            </section>
        </div>
        <div class="accessory">
            <link rel="stylesheet" type="text/css" href="{{url('asset/css/consultation.css')}}">
            <div class="top-infor-div">
                <h2 class="top-h2">还有疑问，我要专业咨询</h2>
                <textarea class="top-textarea" placeholder="请简单描述你想问的装修问题" name="description" maxlength="500"></textarea>
                <input class="top-input" placeholder="请填写您的手机号码" name="mobile">
                <div class="top-apply">免费申请</div>
                <p class="top-p1">声明：绘装以保护您的隐私为己任，</p>
                <p class="top-p2">手机号仅作提供咨询服务，请放心填写。</p>
            </div>
            <script src="{{url('asset/js/consultation.js')}}"></script><p class="sub-title">点击排行</p>
            <div class="article-list">
                @foreach($hot as $key=>$item)
                    <a title="{{$item->title}}" href="{{url('guide/').$item->id}}" class="unit">
                        <span class="num">{{$key+1}}</span>
                        <span class="titleOfarticle">{{$item->title}}</span>
                    </a>
                @endforeach
            </div></div>
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
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/guide.css')}}">
@endsection
