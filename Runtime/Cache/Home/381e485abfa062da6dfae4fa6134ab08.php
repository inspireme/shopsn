<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/pay_now.css" />
<title>立即支付</title>
</head>
<body>
	<div class="Pay_now_header">
		<div class="Pay_now_header_auto">客服电话：<?php echo ($intnet_phone); ?></div>
	</div>
	<div class="Pay_now_Content">
		<div class="Pay_now_Logo">
			<img src="<?php echo ($logo_name); ?>" alt="" class="Pay_now_logo_img" /> <span
				class="Pay_now_Logo_span">商城支付</span>
		</div>
		<div class="Pay_now_OrderID">
			<div class="Pay_now_OrderID_top">
				<div class="Pay_now_OrderID_left">
					<span class="Pay_now_OrderID_left_ts">订单提交成功，请您尽快付款！订单号：</span><span><?php echo ($info['order_sn_id']); ?></span>
				</div>
				<div class="Pay_now_OrderID_top_right">
					应付金额 <span class="Money"><?php echo ($info['price_sum']); ?></span> 元
				</div>
			</div>
			<div class="Pay_now_OrderID_Prompt">请您在提交订单后24小时内完成支付。</div>
			<div class="Pay_now_OrderID_Prompt">请选择一种支付方式,余额不足时将会使用。</div>
		</div>
		<div class="Pay_now_option">
			<div class="Pay_now_option_Balance">
				<div class="Pay_now_option_Balance_character">
					<span>使用余额支付（账户当前余额<?php echo ((isset($balance) && ($balance !== ""))?($balance):'0.00'); ?>元）</span>
				</div>
			</div>
			<div class="Pay_now_Tab_Control">
				<div class="Pay_now_Tab_ESB">
					<a href="javascript:;" class="active">平台支付</a>
				</div>
				<div class="Pay_now_Tab_Pay">
					<div class="Pay_now_Tab_Pay_a active">
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="javascript:;"
							data-id="<?php echo ($vo['id']); ?>">
							<div class="Pay_now_Tab_Pay_a_bg"></div> <img
							src="<?php echo ($pay_img[$vo['id']-1]); ?>" alt="" class="yinglie_img" /> </if>

						</a><?php endforeach; endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="Pay_now_button">
			<a href="javascript:;" class="Pay_now_apply_for"
				onclick="return pay();">立即支付</a> <a href="<?php echo U('Index/index');?>"
				class="Pay_now_button_fh">返回商城</a>
		</div>
	</div>
	<div class="Pay_now_footer">
		<div class="Pay_now_footer_lj">
			<a href="javascript:;">关于我们</a> <span class="Pay_now_footer_lj_fg">|</span>
			<a href="javascript:;">联系我们</a> <span class="Pay_now_footer_lj_fg">|</span>
			<a href="javascript:;">加盟我们</a> <span class="Pay_now_footer_lj_fg">|</span>
			<a href="javascript:;">商城APP</a> <span class="Pay_now_footer_lj_fg">|</span>
			<a href="javascript:;">友情链接</a>
		</div>
		<div class="Pay_now_footer_dh">皖ICP备15017038号 ｜ 有任何问题请联系我们在线客服
			电话：<?php echo ($intnet_phone); ?></div>
		<div class="Pay_now_footer_dh">&copy; 20016-2018 伟荣医疗用品
			版权所有，并保留所有权利</div>
	</div>
	<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	<script>
    $(".Pay_now_Tab_ESB a").click(function(){
        $(".Pay_now_Tab_ESB a").removeClass("active").eq($(this).index()).addClass("active")
    });
    $(".Pay_now_Tab_Pay .active a").live("click",function(){
        $(".Pay_now_Tab_Pay .active a").removeClass("active").eq($(this).index()).addClass("active");
    });
    $(".Pay_now_Tab_ESB a").click(function(){
        $(".Pay_now_Tab_Pay .Pay_now_Tab_Pay_a").removeClass("active").eq($(this).index()).addClass("active")
    });

    $('.Pay_now_Tab_Pay_a').find('a').each(function (index, ele) {
        if (index == 0) {
            $(ele).addClass('active');
        }
    });

    // 支付
    function pay() {
        var order_id = <?php echo ($info['id']); ?>;
        var used = 0;
        if ($('.Pay_now_option_Balance_choose').attr('checked')) {
            used = 1;
        }
        var pay  = $('.Pay_now_Tab_Pay_a a.active').attr('data-id');
        var data = {'pay_type':pay, 'order_id':order_id, 'use_b':used};

        var url = "<?php echo ($url); ?>";
        StandardPost(url, data);
        return false;
    }

    function StandardPost(url,args) {
        var form = $("<form method='post'></form>");
        form.attr({"action":url});
        for (arg in args) {
            var input = $("<input type='hidden'>");
            input.attr("name", arg);
            input.val(args[arg]);
            form.append(input);
        }
        $(document.body).append(form);
        form.submit();
    }
</script>
</body>
</html>