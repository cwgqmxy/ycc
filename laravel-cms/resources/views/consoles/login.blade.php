<!doctype html>
<html  class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>Ycc</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{asset('back/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/login.css')}}">
	  <link rel="stylesheet" href="{{asset('back/css/xadmin.css')}}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
    <script src="{{asset('back/lib/layui/layui.js')}}" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">Ycc</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" >
            @csrf
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input name="code" placeholder="验证码" style="width: 200px;display: inline-block;" type="text" lay-verify="required" class="layui-input" >
            <img src="{{url('consoles/code')}}" style="height: 40px;margin-bottom: 10px;" onclick="this.src='{{url('consoles/code')}}?'+Math.random()" alt="easy">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              // layer.msg('玩命卖萌中', function(){
              //   //关闭后的操作
              //   });
              //监听提交
              form.on('submit(login)', function(data){
                // alert(888)
                // layer.msg(JSON.stringify(data.field),function(){
                //     location.href='index.html'
                // });
                $.ajax({
                  url:"{{url('consoles/login')}}",
                  type:"POST",
                  data:data.field,
                  success:function(data){
                    var strings=JSON.parse(data);
                    if(strings.code=='yzm'){
                      layer.msg(strings.msg);
                    }
                    if(strings.code=='dlcg'){
                      location.href='{{url("consoles/index")}}'
                    }
                    
                  }
                });
                return false;
              });
            });
        })
    </script>
    <!-- 底部结束 -->
    
</body>
</html>