<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="<?php echo ($init_key_word); ?>" />
    <meta name="description" content="<?php echo ($intnet_description); ?>" />
	<title><?php echo ($intnetTitle); ?></title>
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/reg.css">
	<script src="http://www.shopsn.xyz/Public/Home/js/jquery-1.7.2.min.js"></script>
	<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>
	<!--头部-->
	<div class="regiup-header w clearfix">
		<div class="regiup-headerLeft">
			<a href="<?php echo U('Index/index');?>" class="fl">
				<img src="<?php echo ($logo_name); ?>" alt=""/>
				<h2><?php echo ($intnetTitle); ?></h2>
			</a>
			<h4 class="fl">欢迎注册</h4>
		</div>
		<div class="regiup-headerRight fr">
			<span>已有账号</span>
			<a href="<?php echo U('Public/login');?>">请登录</a>
		</div>
	</div>
	<div class="regiup-sectionPt">
		<div class="regiup-section w">
			<!--栏目状态-->
			
			<!--设置用户名-->
			<div class="regiup-form-main one w active">
				<div class="container">
					
					<div class="one clearfix">
						<div class="fl">设置会员名<a class="xsg_relative">*</a></div>
						<div class="fr">
							<input type="text" class="txt"  name="user_name" id="user_name">
							<span>请再次输入你会员名</span>
						</div>
					</div>
				
					<div class="one clearfix">
						<div class="fl">设置登录密码<a class="xsg_relative">*</a></div>
						<div class="fr">
							<input type="password" class="txt"  name="password" id="password">
							<span>只能输入6-20个字母、数字、下划线</span>
						</div>
					</div>
				
					<div class="one clearfix">
						<div class="fl">密码确认<a class="xsg_relative">*</a></div>
						<div class="fr">
							<input type="password" class="txt"  name="password1" id="password1">
							<span>请再次输入你的密码</span>
						</div>
					</div>
					
					<div class="one clearfix">
						<div class="fl">验证码<a class="xsg_relative">*</a></div>
						<div class="fr">
							<input type="text" class="txt"  id="old_code">
							<img id="checkpic" onclick="changing(this)" src="<?php echo U('Public/verify');?>">
							<input type="hidden" id="check_code" value="0">
							<span>请输入验证码</span>
						</div>
					</div>
					<div class="one clearfix">
						<div class="fl">手机号</div>
						<div class="fr">
							<input type="text" class="txt" id="tel" name="mobile">
							<span>请输入手机号</span>
						</div>
					</div>
					<div class="one clearfix">
						<div class="fl code_display">验证<a class="xsg_relative">*</a></div>
						<input type="hidden" name="get_code">
						<input type="hidden" name="regester_type" value="<?php echo ($is_start); ?>">
					<div class="fr code_display">
							<input type="text" class="txt1" name="rel_code" id="code">
							<input type="hidden" id="check_tel_code" value="0">

							<a href="javascript:;" type="button" class="btn hover" id="V-btn">获取验证码</a>
							<span>请输入验证码</span>
					</div>
						<div>
							<div class="fl" id="xsg_email_change">设置邮箱</div>
							<div class="fr">
								<input type="text" class="txt"  name="email" id="email">
								<span>设置你的邮箱</span>
							</div>
							</div>
                        <div class="one clearfix">
                            <div class="fl">推荐人</div>
                            <div class="fr">
                                <input type="text" <?php if(!empty($reco_code)): ?>disabled="disabled" value="<?php echo ($reco_code); ?>"<?php endif; ?>   class="txt" id="p_id" name="p_id">
                                <span>推荐人账号</span>
                            </div>
                        </div>
					<div class="three">
						<input type="button" value="立即注册" id="user-btn">
					</div>
				</div>
			</div>
		
			<!--注册成功-->
			<div class="regiup-form-main w">
				<div class="container-ok">
					<div class="top">恭喜注册成功，你的账户为：</div>
					<div class="bottom">
						<span>登录名 ：<b>18570623665</b></span>
						<span>商城会员名：<b>张三</b></span>
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
			<span><?php echo ($record_number); ?></span>
			<span class="active">有任何问题请联系我们在线客服 电话：<?php echo ($intnet_phone); ?></span>
		</li>
		<li><?php echo ($str); ?></li>
	</ul>
</body>
<!-- <script src="http://www.shopsn.xyz/Public/Home/js/registerSetUp.js"></script> -->
<script>
	$(document).ready(function(){
		//判断验证状态
		if($('input[name=regester_type]').val()==0)
		{
				$('.code_display').hide();
		}else{
			$('#tel').parent().prev().append("<a class='xsg_relative'>*</a>");
			$('#xsg_email_change').parent().addClass('xsg_one_change');

		}
	})
	$('#password').bind('blur', function(){
		var password = $('#password').val();
		if (password == '') {
			layer.tips('请填写密码!','#password');
			return false;
		};
		if (password.length<6) {
			layer.tips('密码不能小于6位!','#password');
			return false;
		};
		if (password.length>20) {
			layer.tips('密码不能大于20位!','#password');
			return false;
		};
		if (/^(?:\d+|[a-zA-Z]+|[!@#$%^&*]+)$/.test(password)) {
            layer.tips('密码强度弱,有盗号风险!','#password');
		}else if (/^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)(?![a-zA-z\d]+$)(?![a-zA-z!@#$%^&*]+$)(?![\d!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(password)) {
			layer.tips('密码强度强!','#password');
		}else if (/^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*]+$)[a-zA-Z\d!@#$%^&*]+$/.test(password)) {
			layer.tips('密码强度中!','#password');
		};	
		return true;
	});
	//点击更换验证码
	function changing(src){
		document.getElementById('checkpic').src=src.src+'?'+Math.random();
	}

    $('#old_code').change(function(){
    	var code = $(this).val();
    	$.post('/index.php/Home/Public/check_code',{"code":code},function(data){
            if (data ==1) {
                $('#check_code').val(1);
            	layer.tips('验证码输入正确', '#old_code');
            }else{
            	$('#check_code').val(0);
            	layer.tips('请输入正确的验证码！', '#old_code');
            }
    	})
    })

    var bFlag = false;
	$('#V-btn').click(function(){
        var N = 60;
        var timer = null;
        var _this = $(this);
        if(bFlag == true)return;
//		var mobile_val=$("input[name=mobile]").val();
		var tel = $('#tel').val();
		if(!/^1[34578]\d{9}$/.test(tel)){
			layer.tips('请输入正确的手机号', '#tel');
			return false;
		}else {
			$.post("/index.php/Home/Public/mobile_check", {'tel':tel}, function (a) {
                if (a == 2) {
                    $.ajax({
                        type:"POST",
                        url:"check_code_ajax",
                        data:{tel:tel},
                        success: function (data) {
                            if(data.status == 1){
                                console.log(data.status );
                                bFlag = true;
                                _this.removeClass('hover');
                                timer = setInterval(function(){
                                    N--;
                                    if(N <= 0){
                                        N = 60;
                                        clearInterval(timer);
                                        _this.html('重新获取验证');
                                        _this.addClass('hover');
                                        bFlag = false;
                                    }else{
                                        _this.html(N+'秒后重试');
                                    }
                                },1000);
                            }else {
                                layer.tips('获取失败');
                                return false;
                            }
                        }
                    })
                }else{
                    layer.tips('该手机号已注册!', '#tel');
                    return false;
                }
            })
        }
    })
	//输入触发
	$("#code").change(function(){
		$.ajax({
			type:"POST",
			url:"check_tel_code",
			data:'code='+$(this).val(),
			success:function(data){
				if(data==1)
				{
					$('#check_tel_code').val(1);
					layer.tips('验证码输入正确','#V-btn');

				}else{
					$('#check_tel_code').val(0);
					layer.tips('验证码不正确,请重试', '#V-btn');
				}
			}
		})
	});

	//验证用户名是否存在
	$('input[name=user_name]').bind("input propertychange",function(){
		$.ajax({
			type:"POST",
			url:"<?php echo U('public/ajax_check_username');?>",
			data:"username="+$(this).val(),
			success:function(data){
				if(data['status']==1)
				{
					layer.tips('用户名格式正确','#user_name');
				}else{
					layer.tips('用户名已存在','#user_name');
				}
			}
		})
	})

	$('input[name=email]').bind("input propertychange",function(){
		var email=$(this).val();
		if(!/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/.test(email)){
			layer.tips('请填写正确邮箱', 'input[name=email]');
			return false;
		}else{
			layer.tips('邮箱格式正确', 'input[name=email]');
		}
	})

	$('#password1').change(function(){
		if($('#password').val() != $(this).val())
		{
			layer.tips('两次输的密码不一致', $(this));
			return false;
		}else {
			if($(this).val()!=''){
				layer.tips('输入正确', $(this));
			}
		}
	})
	$('#user-btn').on('click',function(){
		var user_name = $('#user_name').val();
		var password = $('#password').val();
		var password1 = $('#password1').val();
		var mobile = $('#tel').val();
		var code = $('#old_code').val();
		var check_code = $('#check_code').val();
		var mobile_code = $('#check_tel_code').val();
		var email = $('#email').val();
        var p_id = $('#p_id').val();
		if(user_name == ''){
			layer.msg('请填写会员名');
			return false;
		}
		if(password==''){
			layer.msg('请填设置密码');
			return false;
		}
		if(password1==''){
			layer.msg('请确认密码');
			return false;
		}
		if(password!=password1){
			layer.msg('两次密码不一致');
			return false;
		}
		if(code==''){
			layer.msg('请填写验证码');
			return false;
		}
		if(check_code==0){
			layer.msg('验证码不正确');
			return false;
		}
		if(mobile==''){
			layer.msg('请填写手机号');
			return false;
		}
		if(!/^1[345789]\d{9}$/.test(mobile)){
			layer.msg('请输入正确的手机号');
			return false;
		}

        if($('input[name=regester_type]').val() != 0)
        {
            if(mobile_code==''){
                layer.msg('请填写手机验证码');
                return false;
            }

            if(mobile_code==0){
                layer.msg('手机验证码不正确');
                return false;
            }
        }


		$.post('/index.php/Home/Public/reg_complete',{'user_name':user_name,'password':password,'mobile':mobile,'email':email,'p_id':p_id},function(data){
			if(data==1){
				layer.msg('手机号已存在');

			}else if(data==2){
				layer.msg('邮箱已存在');

			}else if(data==3){
				layer.msg('注册失败');

			}else if(data==4){
                layer.msg('推荐码不正确');

            }else{
				layer.msg('注册成功');
				window.location.href="<?php echo U('login');?>";

			}

		})

	})
</script>
</html>