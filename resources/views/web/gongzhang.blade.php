@extends('web.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/designerList.css">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css')}}/prtar.css">
    <div class="v-transfer-dom"><div class="ivu-modal-mask" style="display: none;"></div> <div class="ivu-modal-wrap ivu-modal-hidden"><div class="ivu-modal" style="width: 520px; display: none;"><div class="ivu-modal-content"><a class="ivu-modal-close"><i class="ivu-icon ivu-icon-ios-close-empty"></i></a> <div class="ivu-modal-header"><div class="ivu-modal-header-inner">注册成功</div></div> <div class="ivu-modal-body"><p>是否前往修改个人资料？</p></div> <div class="ivu-modal-footer"><button type="button" class="ivu-btn ivu-btn-text ivu-btn-large"><!----> <!----> <span>取消</span></button> <button type="button" class="ivu-btn ivu-btn-primary ivu-btn-large"><!----> <!----> <span>确定</span></button></div></div></div></div></div><div class="content">
        <div class="filter">
            <input type="hidden" name="fee" value="">
            <input type="hidden" name="workYear" value="">
            <input type="hidden" name="decoStyle" value="">
            <div class="measure">
                <div class="measure-title">
                    设计费：
                </div>

                <div class="filter-div">
                    @foreach(\App\Model\DesignerPrice::all() as $item)
                    <a href="{{url('designer/price/'.$item->id)}}" >
                        <div >
                           {{$item->price}}
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="layout">
                <div class="measure-title">
                    经验值：
                </div>
                <div class="filter-div">
                    @foreach(\App\Model\DesignerTime::all() as $item)
                        <a href="{{url('designer/time/'.$item->id)}}" >
                            <div >
                                {{$item->times}}
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="manner">
                <div class="measure-title">
                    风&nbsp;&nbsp;&nbsp;&nbsp;格：
                </div>
                <div class="filter-div">
                    @foreach(\App\Model\DesignerStyle::all() as $item)
                        <a href="{{url('designer/style/'.$item->id)}}" >
                            <div>
                                {{$item->style}}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pm-content">
            <div class="pm-list">
                <h1>设计师列表</h1>
                <div class="pm-list-div">
                    @foreach($data as $item)
                    <div class="pm-div">
                        <div class="pm-content-div">
                            <div style="display: flex;">
                                <a href="{{url('pm/'.$item->id)}}">
                                    <img class="pm-avatar" alt="{{$item->name}}" src="{{$item->avatar}}">
                                </a>
                                <div class="pm-infor">
                                    <div style="display: flex;">
                                        <a href="{{url('pm/'.$item->id)}}">
                                            <p class="pm-name">{{$item->name}}</p>
                                        </a>
                                        <a href="{{url('pm/'.$item->id)}}">
                                            <div class="atelier-name">
                                                {{\App\Model\Studio::find($item->studio_id)->name}}</div>
                                        </a>
                                    </div>
                                    <p class="pm-style">&nbsp;&nbsp;</p>
                                    <p class="pm-exp">设计经验：{{\App\Model\DesignerTime::find($item->time_id)->times}} 设计案例数：{{\App\Model\Cases::where(['designer_id'=>$item->id])->get()->count()}}个</p>
                                </div>
                            </div>
                            <div>
                                <div style="text-align: right;">
                                    <img class="jinpai" alt="金牌商家" src="{{url('asset/images')}}/jinpai.png">
                                    <img class="bao" alt="品质保证" src="{{url('asset/images')}}/biao.png">
                                    <div class="consulting">
                                        在线咨询
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach(\App\Model\Studio::all() as  $item)
                        <div class="public-team-list-div">
                            <a href="/cell/{{$item->id}}">
                                <p style="height: 36px;line-height: 36px;font-size: 20px;color: #fff;">{{$item->name}}</p>
                            </a>
                            <div class="public-team-div">
                            <p style="float: left;">共{{\App\Model\Designer::where(['studio_id'=>$item->id])->get()->count()}}位团队伙伴</p>
                            <div style="clear: both;"></div>
                            </div>
                        </div>
                    @endforeach

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
                <p style="line-height: 40px; font-size: 30px; color: #000; margin-top: 20px;">最近活跃的设计</p>
                <div class="activeList-list">
                    @foreach($data as $item)
                    <a href="{{url('pm')}}/{{$item->id}}">
                        <img src="{{$item->avatar}}" alt="{{$item->name}}">
                        <p style="line-height: 30px; height: 30px; font-size: 16px; color: #000;">{{$item->name}}</p>
                    </a>
                    @endforeach

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
