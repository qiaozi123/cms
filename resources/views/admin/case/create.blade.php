<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>创建案例</title>
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
                <span class="x-red">*</span>案例名
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="name" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>

        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>楼盘
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="loupan" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>面积
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="mianji" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>风格
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="style" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>地址
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="address" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>完成时间
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="finish_at" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>机构
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="jigou" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>设计师
            </label>
            <div class="layui-input-inline">
                <select  name="designer_id" class="valid">
                    @foreach(\App\Model\Designer::all() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                确认添加案例
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
                url:"/admin/case/create",
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
