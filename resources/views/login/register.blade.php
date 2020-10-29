<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>个人注册</title>


    <link rel="stylesheet" type="text/css" href="/index/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/index/css/pages-register.css" />
</head>

<body>
	<div class="register py-container ">
		<!--head-->
		<div class="logoArea">
			<a href="" class="logo"></a>
		</div>
		<!--register-->
		<div class="registerArea">
			<h3>注册新用户<span class="go">我有账号，去<a href="{{'login'}}" >登陆</a></span></h3>
			<div class="info">
				<form class="sui-form form-horizontal" action="{{('/login/store')}}" method="post">
				@csrf
					<div class="control-group">
						<label class="control-label">用户名：</label>
						<div class="controls">
							<input type="text" name="user_name" id="user" placeholder="请输入你的用户名" class="input-xfat input-xlarge">
							<b style="color:red;display:none" class="user">请输入用户名</b>
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">登录密码：</label>
						<div class="controls">
							<input type="password" name="password" id="password" placeholder="设置登录密码" class="input-xfat input-xlarge">
							<b style="color:red;display:none" class="password">请设置密码</b>
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">确认密码：</label>
						<div class="controls">
							<input type="password" name="" id="password1" placeholder="再次确认密码" class="input-xfat input-xlarge">
							<b style="color:red;display:none" class="password1">请再次确认密码</b>
							<b style="color:red;display:none" class="password2">两次密码不一致</b>

						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">邮箱：</label>
						<div class="controls">
							<input type="text" name="email" id="tel" placeholder="请输入你的手机号" class="input-xfat input-xlarge">
							<b style="color:red;display:none" class="tel">邮箱不能空</b>
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">短信验证码：</label>
						<div class="controls">
							<input type="text" id="code" placeholder="短信验证码" class="input-xfat input-xlarge">  <a href="{{('/login/code')}}">获取短信验证码</a>
							<b style="color:red;display:none" class="code">请输入短信验证码</b>
						</div>
					</div>
					
					<div class="control-group">
						<label for="inputPassword" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<div class="controls">
							<input name="" type="checkbox" id="xie" value="2" checked=""><span>同意协议并注册《品优购用户协议》</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls btn-reg">
							<input type="submit" value="注册">
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--foot-->
		<div class="py-container copyright">
			<ul>
				<li>关于我们</li>
				<li>联系我们</li>
				<li>联系客服</li>
				<li>商家入驻</li>
				<li>营销中心</li>
				<li>手机品优购</li>
				<li>销售联盟</li>
				<li>品优购社区</li>
			</ul>
			<div class="address">地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</div>
			<div class="beian">京ICP备08001421号京公网安备110108007702
			</div>
		</div>
	</div>


<script type="text/javascript" src="/index/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/index/js/plugins/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/index/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="/index/js/plugins/jquery-placeholder/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/index/js/pages/register.js"></script>
</body>

</html>
<script>
    $(document).on("blur","#tel",function(){
        var tel = $("#tel").val();
        if(tel==""){
            $(this).siblings(".tel").show();
        }else{
            $(this).siblings(".tel").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#user",function(){
        var user = $("#user").val();
        if(user==""){
            $(this).siblings(".user").show();
        }else{
            $(this).siblings(".user").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#password",function(){
        var password = $("#password").val();
        if(password==""){
            $(this).siblings(".password").show();
        }else{
            $(this).siblings(".password").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#password1",function(){
        var password1 = $("#password1").val();
        if(password1==""){
            $(this).siblings(".password1").show();
        }else{
            $(this).siblings(".password1").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#xie",function(){
        var xie = $("#xie").val();
        if(xie==""){
            $(this).siblings(".xie").show();
        }else{
            $(this).siblings(".xie").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#code",function(){
        var code = $("#code").val();
        if(code==""){
            $(this).siblings(".code").show();
        }else{
            $(this).siblings(".code").hide();
        }
		// alert(1);
    })
	$(document).on("blur","#password1",function(){
        var password = $("#password").val();
		var password1 = $("#password1").val();
        if(password==password1){
            $(this).siblings(".password2").hide();
        }else{
            $(this).siblings(".password2").show();
        }
		// alert(1);
    })
</script>