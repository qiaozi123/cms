@extends('web.layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/case.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('asset/css/pageCuter.css')}}">
    <script src=".{{url('asset/js/jquery-3.2.1.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src=".{{url('asset/js/config.js')}}"></script>
    <script src=".{{url('asset/js/js.cookie.js')}}"></script>
    <script src=".{{url('asset/js/utils.js')}}"></script>

    <script src=".{{url('asset/js/menu_top.js')}}" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src=".{{url('asset/js//vue.min.js')}}"></script>
    <script type="text/javascript" src=".{{url('asset/js/iview.min.js')}}"></script>
    <script type="text/javascript" src=".{{url('asset/js/vue-resource@1.3.4.js')}}"></script>
    <link rel="stylesheet" href=".{{url('asset/css/login.css')}}">

    <script src=".{{url('asset/js/login.js')}}"></script>

    <div class="content">
        <nav class="filter">
            <input type="hidden" name="houseType" value="">
            <input type="hidden" name="decoStyle" value="styleg">
            <input type="hidden" name="houseArea" value="area3">
            <input type="hidden" name="by" value="">
            <input type="hidden" name="pageIndex" value="">

            <div class="type">
                <div class="summary">户型：</div>
                <div class="container">
                    @foreach(\App\Model\CaseHouseStyle::all() as $item)
                    <a href="{{url('anli/type/'.$item->id)}}" class="unit" id="houseAll">{{$item->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="style">
                <div class="summary">风格：</div>
                <div class="container">
                    @foreach(\App\Model\CaseStyle::all() as $item)
                        <a href="{{url('anli/style/'.$item->id)}}" class="unit" id="houseAll">{{$item->name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="area">
                <div class="summary">面积：</div>
                <div class="container">
                    @foreach(\App\Model\CaseArea::all() as $item)
                        <a href="{{url('anli/area/'.$item->id)}}" class="unit" id="houseAll">{{$item->name}}</a>
                    @endforeach
                </div>
            </div>
        </nav>
        <section class="cards">
            @foreach($case as $item)

            <a href="{{url('case/'.$item->id)}}" class="card">

                <div class="view" style="background-image:url({{url( \App\Model\CasesPic::where(['case_id'=>$item->id])->first()->img_url)}})">
                    <p class="summary"><span class="name" title="{{$item->designer_name}}">{{$item->designer_name}}</span>
                        <span class="location" title="{{ $area = \App\Model\CaseArea::find($item->area_id)->name}}·{{$style = \App\Model\CaseStyle::find($item->style_id)->name}}">{{$area}}·{{$style}}</span></p>
                </div>
                <div class="rowAvatar">
                    <div class="avatar" style="background-image:url({{url($item->avatar)}})"></div>
                    <p class="name">{{$item->name}}-{{$item->studio}}</p>
                    <p class="comefrom">{{$item->jigou}}</p>
                </div>
                <div class="rowJohndoe">
                    <div class="viewer">
                        <img src="{{url('asset/images')}}/yuedu.png" alt="阅读数" class="icon"> {{$item->see}}</div>
                </div>
            </a>
            @endforeach

        </section>
        <section class="pageCuter">
            {{$case->links()}}
        </section></div>
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
