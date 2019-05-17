<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="format-detection" content="telephone=no, address=no">
    <meta http-equiv="Cache-Control" content="public, max-age=99936000">
    <meta name="browsermode" content="application">
    <meta name="x5-page-mode" content="app">
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>佩奇-快速报价</title>
    <script src="{{url('asset/js')}}/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
    <link href="{{url('asset/css/')}}/4a215f2a6454aae18ce4.bundle.css" rel="stylesheet">
    <style type="text/css">body {
            font-family: SourceHanSansCN-Normal, Microsoft yahei, tahoma, arial, Hiragino Sans GB, \\5B8B\4F53, sans-serif;
            width: 100%;
            min-width: 1200px
        }</style>
</head>
<body>
<div id="app" class="app">
    <div id="startScene" class="start-scene"><img src="{{url('asset/images')}}/83f4a39d64e66dc6c700bc668ff3528e.jpg" alt=""
                                                  class="banner">
        <section class="calculator"><h1 class="title">装修计算器</h1>
            <h2 class="sub-title">已有<span class="num">...</span>位业主获取了装修预算</h2>
            <div class="form-row">
                <div class="block"><input type="text" name="loupan" id="loupan" value="" placeholder="楼盘名称"></div>
                <div class="block"><input type="number" name="area" id="area" value="" placeholder="房屋面积">
                    <p class="unit">m<sup>2</sup></p></div>
            </div>
            <div class="form-row">
                <div class="block"><input type="number" name="shi" value="" id="shi" placeholder="一">
                    <p class="unit">室</p></div>
                <div class="block"><input type="number" name="ting" value="" id="ting" placeholder="一">
                    <p class="unit">厅</p></div>
            </div>
            <div class="form-row">
                <div class="block treple-cloumn"><input type="number" name="chu" id="chu" value="" placeholder="一">
                    <p class="unit">厨</p></div>
                <div class="block treple-cloumn"><input type="number" name="wei" id="wei" value="" placeholder="一">
                    <p class="unit">卫</p></div>
                <div class="block treple-cloumn"><input type="number" name="yangtai" id="yangtai" value="" placeholder="一">
                    <p class="unit">阳台</p></div>
            </div>
            <div class="form-row">
                <div class="block treple-cloumn"><input type="text" name="name" value="" id="name" placeholder="请输入您的称呼"></div>
            </div>
            <div class="form-row">
                <div class="block treple-cloumn"><input type="text" name="telphone" value="" id="telphone" placeholder="请输入您的手机号码"></div>
            </div>
            <p class="btn-free-quote" onclick="baojia()">免费获取报价</p></section>

        <div class="ivu-back-top" style="bottom: 30px; right: 30px;">
            <div class="ivu-back-top-inner"><i class="ivu-icon ivu-icon-chevron-up"></i></div>
        </div>
        <script>
            function baojia() {
                loupan =  $('#loupan').val();
                area =  $('#area').val()
                shi =  $('#shi').val()
                ting =  $('#ting').val()
                chu =  $('#chu').val()
                wei =  $('#wei').val()
                yangtai =  $('#yangtai').val()
                name =  $('#name').val()
                telphone =  $('#telphone').val()
                if (loupan == ''){
                     alert('楼盘不能为空')
                    return
                }
                if (area == ''){
                    alert('面积不能为空')
                    return
                }
                if (shi == ''){
                    alert('市不能为空')
                    return
                }
                if (ting == ''){
                    alert('厅不能为空')
                    return
                }
                if (wei == ''){
                    alert('卫不能为空')
                    return
                }
                if (yangtai == ''){
                    alert('阳台不能为空')
                    return
                }
                if (name == ''){
                    alert('用户名不能为空')
                    return
                }
                if (telphone == ''){
                    alert('手机号不能为空')
                    return
                }

                $.ajax({
                    type: "POST",//规定传输方式
                    url: "/baojia",//提交URL
                    data: {'_token':'{{csrf_token()}}','loupan':loupan,'area':area,'shi':shi,'ting':ting,'chu':chu,'wei':wei,'yangtai':yangtai,'name':name,'telphone':telphone},//提交的数据
                    success: function(data){
                        alert(data.msg)
                    }
                });
            }
        </script>
    </div>
</div>

</body>
</html>
