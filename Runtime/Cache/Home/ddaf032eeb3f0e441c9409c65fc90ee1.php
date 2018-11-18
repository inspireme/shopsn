<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/reg.css">
	<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://www.shopsn.xyz/Public/Home/js/login/login.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>
	<!--头部-->
	<div class="regiup-header w clearfix">
		<div class="regiup-headerLeft fl">
			<a href="<?php echo U('Index/index');?>" class=" fl">
				<img src="<?php echo ($logo_name); ?>" alt=""/>
				<h2><?php echo ($intnetTitle); ?></h2>
			</a>
			<h4 class="fl">欢迎登录</h4>
		</div>
		<div class="fr" style="padding-top:60px;padding-right:200px;"><a href="<?php echo U('Index/index');?>">网站首页</a></div>
	</div>
	<div class="sini-section">
		<div class="sini-main w">
			<!--账号手机登录-->
			<div class="login-box-warp active">
				<!--扫妈登录按钮-->
				<div class="signMode" id="signMode">
					<div class="code"></div>
				</div>
				<!--登录方式选择-->
				<div class="loginOptions clearfix">
					<span class="fl active">账号密码登录</span>
					<span class="fl" id="display_status">手机验证码登录</span>
					<em></em>
				</div>
				<!--手机登录 密码登录form-->
				<div class="signInParent">
				    <!-- <form action="<?php echo U('Public/login');?>" method="post" onsubmit="return check_name();"> -->
						<ul class="passwordS one hover">
							<li class="clearfix userName">
								<label class="fl"></label>
								<input type="text" class="fl" name="name" id="name" placeholder="<?php if($is_start == 1): ?>邮箱/用户名/已验证手机<?php else: ?>用户名<?php endif; ?>"/>
								<input type="hidden" name="referer" id="referer" value="<?php echo ($referer); ?>">
								<i></i>
							</li>
							<li class="clearfix passWord">
								<label class="fl"></label>
								<input type="password" class="fl" name="pwd" id="pwd" placeholder="密码">
							</li>
							<li class="clearfix">
								<label class="fl">
									<input type="checkbox" class="checked" name="logon"  value="1">
									自动登录
								</label>
								<a href="<?php echo U('Public/confirm_account');?>" class="fr">忘记密码？</a>
							</li>
							<li>
								<input type="button" value="登&nbsp;&nbsp;录" onclick="check_name();" class="btn">
							</li>
						</ul><!-- 
					 --><!-- </form> -->
					<!-- <form action="<?php echo U('Public/login_mobile');?>" method="post" onsubmit="return check_tel();"> -->
					<!--判断是否开启手机登录验证-->
					<input type="hidden" name="is_start" value="<?php echo ($is_start); ?>">
						<ul class="passwordS active" id="form_status">
							<li class="clearfix userName">
								<label class="fl"></label>
								<input type="text" class="fl" id="tel" name="tel" placeholder="请输入手机号">
								<i><a href="javascript:;" id="V-btn">获取验证码</a></i>
							</li>
							<li class="clearfix passWord" id="is_check">
								<label class="fl"></label>
								<input type="text" class="fl" name="code" id="code" placeholder="请输入短信验证码">
							</li>
							<li>
								<!--<input type="hidden" name="get_code">-->
								<input type="button" value="登&nbsp;&nbsp;录" onclick="check_tel()" class="btn">
							</li>
						</ul>
					<!-- </form> -->
					<div class="juion clearfix">
						<a href="<?php echo U('Public/reg');?>" class="fr">免费注册</a>
					</div>
					<!--外部账号登陆-->
					<div class="external clearfix">
						<a href="<?php echo U('login', ['type'=>2]);?>" class="fl"><img src="http://www.shopsn.xyz/Public/Home/img/q25.jpg">QQ登录</a>
						<a href="<?php echo U('login', ['type'=>3]);?>" class="fl"><img src="http://www.shopsn.xyz/Public/Home/img/q26.jpg">微信登录</a>
						<a href="<?php echo U('login', ['type'=>1]);?>" class="fl active"><img src="http://www.shopsn.xyz/Public/Home/img/q27.jpg">微博登录</a>
					</div>
				</div>
			</div>
			<!--扫码登录-->
			<div class="login-box-warp scanCode">
				<!--扫妈登录按钮-->
				<div class="signMode" id="signMode1">
					<div class="code"></div>
				</div>
				
				<div class="title">手机扫码，安全登录</div>
				
				<div class="ysCodePast">
					<div class="code">
						<img src="http://www.shopsn.xyz/Public/Home/img/q31.jpg">
					</div>
					<div class="stat"></div>
					<div class="titlet">打开<b>亿速网络APP</b> 扫一扫登录</div>
				</div>

				<div class="signInParent">
					<div class="juion clearfix">
						<a href="<?php echo U('Public/reg');?>" class="fr">免费注册</a>
					</div>
					<!--外部账号登陆-->
					<div class="external clearfix">
						<a href="<?php echo U('login', ['type'=>2]);?>" class="fl"><img src="http://www.shopsn.xyz/Public/Home/img/q25.jpg">QQ登录</a>
						<a href="<?php echo U('login', ['type'=>3]);?>" class="fl"><img src="http://www.shopsn.xyz/Public/Home/img/q26.jpg">微信登录</a>
						<a href="<?php echo U('login', ['type'=>1]);?>" class="fl active"><img src="http://www.shopsn.xyz/Public/Home/img/q27.jpg">微博登录</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--底部-->
	<ul class="regi-footer">
		<li>
			<a href="javascript:;">关于我们</a>
			<a href="javascript:;">联系我们</a>
			<a href="javascript:;">加盟我们</a>
			<a href="javascript:;">商城APP</a>
			<a href="javascript:;" class="active">友情链接</a>
		</li>
		<li>
			<span class="active">Powed by ShopsN © 全网电商系统  版权所有 保留一切权利<?php echo ($intnet_phone); ?></span>
		</li>
		<li>上海亿速网络科技有限公司 提供技术支持 www.shopsn.net</li>
	</ul>
</body>
<script>
	window.onload=function()
	{
		if($('input[name=is_start]').val()==0)
		{
			$('#form_status').css('display','none');
			$('#display_status').css('display','none');
		}
	}
	//输入框提示文字输入关闭
	$('.sini-section .login-box-warp .passwordS.one input').on('focus',function(){
		$('.sini-section .login-box-warp .passwordS.one span').eq($(this).parent().index()).css('display','none');
	}).on('blur',function(){
		if($(this).val() == ''){
			$('.sini-section .login-box-warp .passwordS.one span').eq($(this).parent().index()).css('display','block');
		}else{
			$('.sini-section .login-box-warp .passwordS.one span').eq($(this).parent().index()).css('display','none');
		}
	});
	$('.sini-section .login-box-warp .passwordS.one input').eq(0).on('input',function(){
		if($(this).val().length >= 1){
			$('.sini-section .login-box-warp .passwordS.one i').css('display','block');
		}else{
			$('.sini-section .login-box-warp .passwordS.one i').css('display','none');
		}
	});
	$('.sini-section .login-box-warp .passwordS.one i').on('click',function(){
		$('.sini-section .login-box-warp .passwordS.one input').eq($(this).parent().index()).val('');
		$(this).css('display','none');
		$('.sini-section .login-box-warp .passwordS.one span').eq($(this).parent().index()).css('display','block');
	});
	$('.sini-section .login-box-warp .passwordS.one span').on('click',function(){
		$('.sini-section .login-box-warp .passwordS.one input').eq($(this).parent().index()).focus();
	});
	$('.sini-section .login-box-warp .passwordS.active span').on('click',function(){
		$('.sini-section .login-box-warp .passwordS.active input').eq($(this).parent().index()).focus();
	});
	$('.sini-section .login-box-warp .passwordS.active input').on('focus',function(){
		$('.sini-section .login-box-warp .passwordS.active span').eq($(this).parent().index()).css('display','none');
	}).on('blur',function(){
		if($(this).val() == ''){
			$('.sini-section .login-box-warp .passwordS.active span').eq($(this).parent().index()).css('display','block');
		}else{
			$('.sini-section .login-box-warp .passwordS.active span').eq($(this).parent().index()).css('display','none');
		}
	});
	//登录方式切换
	$('.sini-section .login-box-warp .loginOptions span').on('click',function(){
		$('.sini-section .login-box-warp .signInParent .passwordS').removeClass('hover').eq($(this).index()).addClass('hover');
		$('.sini-section .login-box-warp .loginOptions span').removeClass('active').eq($(this).index()).addClass('active');
		$('.sini-section .login-box-warp .loginOptions em').animate({left:$(this).index()*$('.sini-section .login-box-warp .loginOptions em').outerWidth()},300)
	});
	//扫码登录切换
	$('#signMode').on('click',function(){
		$('.login-box-warp.active').css('display','none');
		$('.login-box-warp.scanCode').css('display','block');
	});
	$('#signMode1').on('click',function(){
		$('.login-box-warp.active').css('display','block');
		$('.login-box-warp.scanCode').css('display','none');
	});


	$('.sini-section .login-box-warp .signInParent input[type=password]').on('keydown',function(ev){
	    if(ev.keyCode === 13){
	    	check_name();
	    }
	})
	$('#code').on('keydown',function(ev){
	    if(ev.keyCode === 13){
	    	check_tel();
	    }
	})
	$("#code").bind("input propertychange",function(){
//		if($(this).val()!=$('input[name=get_code]').val()) {
//			layer.tips('验证码不正确,请重试', '#is_check');
//			return false;
//		} else {
//			if($(this).val()!=''){
//				layer.tips('验证码输入正确','#is_check');
//			}
//		}

		$.ajax({
			type:"POST",
			url:"check_tel_codestatus",
			data:'code='+$(this).val()+'&print_code='+$('input[name=get_code]').val(),
			success:function(data){
				if(data['status']==1)
				{
					layer.tips('验证码正确','#is_check');
				}else{
					layer.tips('验证码不正确','#is_check');
				}
			}
		})
	});
</script>
<script>

var bFlag = false;

$('#V-btn').on('click',function(){
    if(bFlag == true)return;
    var tel = $('#tel').val();
    var _this = $(this);
    var N = 60;
    var timer = null;
    if (tel == "") {
        layer.tips('请输入手机号', '#tel');
        bFlag = false;
        return false;
    }
    if(!/^1[345789]\d{9}$/.test(tel)){
        layer.tips('请输入正确的手机号', '#tel');
        bFlag = false;
        return false;
    }
	$.post("/index.php/Home/Public/mobile_check", {'tel':tel}, function (a) {
		if (a == 1) {
			$.ajax({
                type: "POST",
                url: "check_code_ajax",
                data: {tel: tel},
                success: function (data) {
                    if (data.status == 1) {
                        console.log(data.status);
                        bFlag = true;
                        _this.addClass('hover');
                        timer = setInterval(function () {
                            if (N <= 0) {
                                N = 60;
                                clearInterval(timer);
                                _this.html('重新获取验证');
                                _this.removeClass('hover');
                                bFlag = false;
                            } else {
                                _this.html(N + '秒后重试');
                            }
                        }, 1000);
                    } else {
                        layer.tips('获取失败');
                        return false;
                    }
                }
            })
		}else{
			layer.tips('该手机号未注册!', '#tel');
				return false;
		}
	})

});	
</script>
</html>