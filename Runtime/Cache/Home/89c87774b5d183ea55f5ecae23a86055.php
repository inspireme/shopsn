<?php if (!defined('THINK_PATH')) exit();?><!--樊恩材新增发票信息弹出框-->
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/invoice.css" />
<style>
#pay_taxes{
    padding: 0;
    width: 256px;
    height: 18px;
}
</style>
<div class="bill">
	<div class="bill_Title">
		发票信息
		<a href="javascript:;" class="dialog_gb"><img src="http://www.shopsn.xyz/Public/Home/img/dialog_gb.png" alt=""></a>
	</div>
	<div class="invoice-dialog">
        <ul class="tab-nav clearfix">
            <li class="tab-nav-item fl tab-item-selected" data-value="1">普通发票<b></b></li>
            <li class="tab-nav-item fl" data-value="2">电子发票<b></b></li>
        </ul>
        <div class="tab-con form">
            <div class="con active">
                <div class="invoice_title clearfix item">
                    <span class="label fl">发票抬头：</span>
                    <div class="fl invoice-list invoice-tit-list">
                        <div id="invoice-tit-list">
                            <div class="invoice-item  <?php if($check_invoice == false): ?>invoice-item-selected<?php endif; ?> block" onclick="click_display();">
                                <input id="click_display" type="text" class="itxt" data-r="个人" value="个人" readonly="readonly">
                                <b></b>
                            </div>
                        <!--显示默认选择-->
                        <?php if($check_invoice == true): ?><div class="invoice-item invoice-item-selected" onclick="display_block();">
                                    <div class="add-invoice-tit">
                                        <input type="text" name=""  value="<?php echo ($check_invoice["invoice_header"]); ?>" class="itxt itxt04 xsg_new_class" placeholder="新增单位发票抬头">
                                        <b></b>
                                        <div class="btns"><a href="javascript:;" class="ftx-05 edit-tit">编辑</a>
                                            <a href="javascript:;" class="ftx-05 ml10 del-tit">删除</a></div>
                                    </div>
                                </div><?php endif; ?>
                        </div>
                        <div class="add-invoice"><a href="#none" class="ftx-05 add-invoice-btn">新增单位发票</a></div>
                    </div>
                </div>
            <!--纳税人识别号-->
<?php if($check_invoice == true): ?><div class="item invoice_content clearfix" id="old_display"><span class="label fl">纳税人识别号：</span>
                <div class="fl">
                    <div id="invoice-tit-list">
                        <div class="invoice-item invoice-item-selected block">
                            <div class="add-invoice-tit">
                                <input id="pay_taxes" type="text"  value="<?php echo ($check_invoice["pay_taxes_code"]); ?>" placeholder="纳税人识别号">
                            </div>
                            <b></b>
                        </div>
                    </div>
                </div>
            </div><?php endif; ?>
                <div class="item invoice_content clearfix">
                    <span class="label fl">发票内容：</span>
                    <div class="fl">
                        <div class="invoice-list">
                            <ul id="electro_book_content_radio">
                                <li class="invoice-item invoice-item-selected">
                                    明细<b></b>
                                </li>
                                <li class="invoice-item">
                                    办公用品<b></b>
                                </li>
                                <li class="invoice-item">
                                    电脑配件<b></b>
                                </li>
                                <li class="invoice-item">
                                    耗材<b></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="invoice_title clearfix item">
                    <span class="label fl">发票抬头：</span>
                    <div class="fl invoice-list invoice-tit-list">
                        <div>
                            <div class="invoice-item block invoice-item-selected">
                                <input type="text" class="itxt" data-r="个人" value="个人" readonly="readonly">
                                <b></b>
                            </div>
                            <div class="invoice-item">
                                <div class="add-invoice-tit">
                                    <input type="text" name="" class="itxt itxt04" placeholder="新增单位发票抬头">
                                    <b></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item invoice_content clearfix">
                    <span class="label fl">发票内容：</span>
                    <div class="fl">
                        <div class="invoice-list">
                            <ul id="electro_book_content_radio">
                                <li class="invoice-item invoice-item-selected">
                                    明细<b></b>
                                </li>
                                <li class="invoice-item">
                                    办公用品<b></b>
                                </li>
                                <li class="invoice-item">
                                    电脑配件<b></b>
                                </li>
                                <li class="invoice-item">
                                    耗材<b></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item clearfix">
                    <span class="label fl"><em>*</em>收票人手机：</span>
                    <div class="fl">
                        <input type="text" id="mobile" class="itxt itxt03">
                    </div>
                    <span class="message"></span>
                </div>
                <div class="item clearfix">
                    <span class="label fl">收票人邮箱：</span>
                    <div class="fl">
                        <input type="text" id="email" class="itxt itxt03">
                    </div>
                    <span class="message" id="e_consignee_email_error"></span>
                </div>
            </div>
            <div class="bill_bottom">
				<a href="javascript:;" class="bill_save">保存</a>
				<a href="javascript:;" class="bill_off">取消</a>
			</div>
        </div>
    </div>
</div>
<script>
    click_display=function()
    {
        $('#old_display').css('display','none');
    }
    display_block=function()
    {
        $('.new_style').css('display','none');
        $('#old_display').css('display','block');
    }
</script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/settlement/invoice.js"></script>