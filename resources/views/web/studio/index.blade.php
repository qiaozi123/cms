@extends('web.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/team.css')}}">
    <div class="content">
        <div class="team-div">
            <div class="team-div-content">
                <div class="team-top-div" style="background-image: url(http://www.huihome.cn/static/img/gongzuoshimoren.png);">
                    <div class="team-infor">
                        {{--<img src="/{{$data->avatar}}" alt="绘装">--}}
                        <p>绘装</p>
                        <div class="consulting">
                            在线咨询
                        </div>
                    </div>

                </div>
                <div class="team-content">
                    <div class="team-option-div">

                        <div class="team-option " data-cate="partner" id="huoban" >
                            团队伙伴
                            <div class="option-border" id="huoband" style="display: none;">
                            </div>
                        </div>

                        <div class="team-option team-slection" id="gushi" data-cate="story">
                            我们的故事
                            <div class="option-border" id="gushid" style="">
                            </div>
                        </div>
                        <script>
                            $('#huoban').click(function () {
                                $('#huoband').css({
                                    "display":"block",
                                })
                                $('#huoban_detail').css({
                                    "display":"block",
                                })
                                $('#huoban').addClass('team-slection')
                                $('#gushi').removeClass('team-slection')

                                $('#gushid').css({
                                    "display":"none",
                                })
                                $('#gushi_detail').css({
                                    "display":"none",
                                })
                            })

                            $('#gushi').click(function () {
                                $('#gushid').css({
                                    "display":"block",
                                })
                                $('#gushi').addClass('team-slection')
                                $('#huoban').removeClass('team-slection')
                                $('#gushi_detail').css({
                                    "display":"block",
                                })
                                $('#huoband').css({
                                    "display":"none",
                                })
                                $('#huoban_detail').css({
                                    "display":"none",
                                })
                            })
                        </script>
                    </div>
                    <!--
                           作者：403571264@qq.com
                           时间：2017-07-11
                           描述：工作室团队伙伴
                       -->
                    <div class="partner-list-div"  id="huoban_detail" style="display: none;">
                        @foreach($cell as $item)
                        <div class="partner-div">
                            <div class="partner-infor-div">
                                <a href="{{url('pm')}}/{{$item->id}}">
                                    <img class="partner-avatar" alt="{{$item->name}}" src="/{{$item->avatar}}">
                                </a>
                                <div class="partner-infor">
                                    <div style="display: flex;">
                                        <p class="partner-name">{{$item->name}}</p>
                                        <p class="partner-role">/{{$item->job}}</p>
                                    </div>
                                    <p class="partner-manner">擅长风格：现代,美式,日式,北欧</p>
                                    <p class="partner-exp">设计经验：{{$item->name}}年 成功案例：{{\App\Model\Cases::where(['designer_id'=>$item->id])->get()->count()}}套</p>
                                </div>
                            </div>
                            <div class="partner-follow" data-targetuid="1769" data-followstatus="1">
                                加关注
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--
                           作者：403571264@qq.com
                           时间：2017-07-11
                           描述：工作室我们的故事
                    -->
                    <div class="team-story-div" id="gushi_detail" style="">
                         {!! $data->body !!}
                    </div>

                </div>

            </div>
            <div style="margin-left: 10px;width: 330px;">
                <div class="QRcode">
                    <p>上绘装APP</p>
                    <p style="margin-top: 12px;">随时随地和达人一起聊装修</p>
                    <img src="./绘装网-绘装_files/apperweima.png">
                </div></div>
        </div>
    </div>
    @endsection
