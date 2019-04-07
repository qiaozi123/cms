<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>添加权限</title>
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
                    <span class="x-red">*</span>权限名
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="name" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>slug
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="slug" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>描述
            </label>
            <div class="layui-input-inline">
                <input type="text"  name="description" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>模型
            </label>
            <div class="layui-input-inline">
                <input type="text" name="model" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>请求类型
            </label>
            <div class="layui-input-inline">
                <select id="searchengines" name="type" class="valid">
                    <option value="get">GET</option>
                    <option value="post">POST</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>级别
            </label>
            <div class="layui-input-inline">
                <select  name="level" class="valid">
                        <option value="1">一级模块</option>
                        <option value="2">二级模块</option>
                        <option value="3">三级模块</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>前后端
            </label>
            <div class="layui-input-inline">
                <select id="searchengines" name="status" class="valid">
                    <option value="0">后端</option>
                    <option value="1">前端</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>图标
            </label>
            <div class="layui-input-inline">
                <select id="searchengines" name="icon" class="valid">
                    @foreach($ico as $item)
                        <option value="{{$item->name}}">
                            {{$item->text}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        @if(!empty($belongtoid))
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>上级权限
            </label>
            <div class="layui-input-inline">
                <input type="text" value="{{$belongtoid}}" style="display: none"  name="belongto" required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
                <input type="text" value="{{\App\Model\Permission::find($belongtoid)->name }}"  readonly="readonly"  required="" lay-verify="required"
                       autocomplete="off" class="layui-input">
            </div>
        </div>
        @endif
</tbody>
</table>


<div class="layui-form-item">
    <label for="L_repass" class="layui-form-label">
    </label>
    <button class="layui-btn" lay-filter="add" lay-submit="">
        确认添加权限
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
                url:"/admin/permission/create",
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
