<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>



<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">
	<section class="content">
		<!-- Main content -->
		<div class="container-fluid">
			<div class="pull-right">
				<a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
					class="btn btn-default" data-original-title="返回"><i
					class="fa fa-reply"></i></a> 
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 商品属性
					</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_tongyong" data-toggle="tab">商品属性</a></li>
					</ul>
					<!--表单数据-->
					<form method="post" id="addGoodsAttributeForm">
						<!--通用信息-->
						<div class="tab-content">
							<div class="tab-pane active" id="tab_tongyong">

								<table class="table table-bordered">
									<tbody>
										<tr>
											<td>属性名称：</td>
											<td>
												<input  class="checkValue" isMust="1" required="required" type="text" name="<?php echo ($model::$attrName_d); ?>" /> <span id="err_attr_name"  class="rxd"></span>
											</td>
										</tr>
										<tr>
											<td>所属商品类型：</td>
											<td><select name="type_id" id="<?php echo ($model::$typeId_d); ?>">
													<option value="">请选择</option>
													<?php if(is_array($parentClassData)): foreach($parentClassData as $key=>$vo): ?><option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; ?>
											</select> <span id="err_type_id" class="rxd"></span>
											</td>
										</tr>
										<tr>
											<td>能否进行检索：</td>
											<td><input type="radio" value="0" name="<?php echo ($model::$attrIndex_d); ?>"/>不需要检索
											 	<input type="radio" value="1" name="<?php echo ($model::$attrIndex_d); ?>"/>关键字检索
											</td>
										</tr>
									
										<tr>
											<td>该属性值的录入方式：</td>
											<td><input type="radio" value="0" name="<?php echo ($model::$inputType_d); ?>"/>手工录入 
											<input type="radio" value="1" name="<?php echo ($model::$inputType_d); ?>"/>从下面的列表中选择（一行代表一个可选值）
											<input type="radio" value="2"name="<?php echo ($model::$inputType_d); ?>"/>多行文本框</td>
										</tr>
										<tr>
											<td>可选值列表：</td>
											<td><textarea rows="5" class="checkValue" cols="30" name="<?php echo ($model::$attrValues_d); ?>"></textarea>
												录入方式为手工或者多行文本时，此输入框不需填写。 <span id="err_attr_values"
												class="rxd"></span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="pull-right">
							<button class="btn btn-primary" title="" data-toggle="tooltip"
								type="submit"
								onclick="selectTool.addAttribute('addGoodsAttributeForm','<?php echo U('addAttr');?>');"
								data-original-title="保存">
								<i class="fa fa-save"></i>
							</button>
						</div>
					</form>
					<!--表单数据-->
				</div>
			</div>
		</div>
		<!-- /.content -->
	</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/validateCustom.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/attribute.js?a=<?php echo time();?>"></script> 




</body>
</html>