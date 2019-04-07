<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>创建文章</title>
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
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>标题
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="name" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>

        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>关键词
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="keyword" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>作者
            </label>
            <div class="layui-input-inline">
                <select  name="author" class="valid">
                    <option value="佚名">佚名</option>
                    <option value="佚名">admin</option>
                    <option value="佚名">小张</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>所属小组
            </label>
            <div class="layui-input-inline">
                <select  name="belongto" class="valid">
                    @foreach($team as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="layui-upload">
            <button type="button" class="layui-btn" id="test2">封面图上传</button>
            <input type="text"  name="avatar" value=""  id="avatar" style="display: none;" required="" lay-verify="required"
                   autocomplete="off" class="layui-input">
            <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                预览图：
                <div class="layui-upload-list" id="demo2"></div>
            </blockquote>
            
        </div>

        <script>
            layui.use('upload', function(){
                var $ = layui.jquery
                    ,upload = layui.upload;
                //多图片上传
                upload.render({
                    elem: '#test2'
                    ,url: '/admin/upload/avatar/'
                    ,data: {'_token':'{{csrf_token()}}'}
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
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;float:right" href="javascript:location.replace(location.href);" title="刷新">
            <i class="layui-icon" style="line-height:30px">ဂ</i>
        </a>



        @include('UEditor::head')
        <script id="container" name="content" type="text/plain">

</script>

        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
        </script>
        </tbody>
        </table>



        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                确认添加文章
            </button>
        </div>
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
                url:"/admin/article/list/create",
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
