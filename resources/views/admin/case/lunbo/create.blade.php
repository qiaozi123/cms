<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>创建案例轮播</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{url('css/font.css')}}">
    <link rel="stylesheet" href="{{url('css/xadmin.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{url('js/xadmin.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="x-body">
    <form class="layui-form" >
        {{csrf_field()}}

        <div class="layui-upload">
            <button type="button" class="layui-btn" id="test2">头像上传</button>

            <input type="text"  name="id" value="{{$id}}" style="display: none;" required="" lay-verify="required"
                   autocomplete="off" class="layui-input">
            <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                预览图：
                <div class="layui-upload-list" id="demo2"></div>
            </blockquote>
        </div>
        <div class="layui-upload">
            <button type="button" class="layui-btn" id="test2">头像上传</button>

            <input type="text"  value="图片上传后关闭即可 " required="" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
        <script>
            layui.use('upload', function(){
                var $ = layui.jquery
                    ,upload = layui.upload;
                //多图片上传
                upload.render({
                    elem: '#test2'
                    ,url: '/admin/upload/case/lunbo'
                    ,data: {'_token':'{{csrf_token()}}','id':'{{$id}}'}
                    ,multiple: true
                    ,before: function(obj){
                        //预读本地文件示例，不支持ie8
                        obj.preview(function(index, file, result){
                            $('#demo2').append('<img src="'+ result +'" alt="'+ file.name +'" style="height:100px" class="layui-upload-img">')
                        });
                    }
                    ,done: function(res){
                        $('#avatar').val(res.url)
                    }
                });


            });
        </script>

    </form>
</div>
<script>
    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form
            ,layer = layui.layer;

        form.on('submit(add)', function(data){
            console.log(data.field);
            $.ajax({
                type:"post",//type可以为post也可以为get
                url:"/admin/case/list/lunbo/create",
                data:data.field,//这行不能省略，如果没有数据向后台提交也要写成data:{}的形式
                dataType:"json",//这里要注意如果后台返回的数据不是json格式，那么就会进入到error:function(data){}中
                async:false,
                success:function(data){
                    //发异步，把数据提交给php
                    // if (data==200){
                    layer.alert("增加成功", {icon: 6},function () {
                        // 获得frame索引
                        window.parent.location.reload();
                        var index = parent.layer.getFrameIndex(window.name);
                        //关闭当前frame
                        parent.layer.close(index);
                    });
                },
                error:function(data){

                }
            });

            return false;

        });

    });


</script>

<script>

</script>
</body>

</html>
