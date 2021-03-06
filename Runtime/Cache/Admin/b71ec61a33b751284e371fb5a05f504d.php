<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome="/>
<title>后台管理系统</title>
<link rel="stylesheet" href="/Public/Admin/css/css.css"/>
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>

	<script
	src="http://www.shopsn.xyz/Public/Common/js/Ueditor/ueditor.config.js"></script> <script
	src="http://www.shopsn.xyz/Public/Common/js/Ueditor/ueditor.all.min.js"> </script> <script
	src="http://www.shopsn.xyz/Public/Common/js/Ueditor/lang/zh-cn/zh-cn.js"></script> <script
	src="http://www.shopsn.xyz/Public/Admin/js/goods/uploadPreview.min.js"></script>
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Admin/css/goods/goods.css?a=56" />
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
					<i class="fa fa-list"></i>商品详情
				</h3>
			</div>
			<div class="panel-body">
				<ul class="nav nav-tabs" id="tabSelect">
					<li class="active" url="<?php echo U('addGoods');?>"><a
						href="#tab_tongyong" data-toggle="tab">通用信息</a></li>
					<li url="<?php echo U('pictureAlbum');?>"><a href="#tab_goods_images"
						data-toggle="tab">商品相册</a></li>
					<li url="<?php echo U('specAddByGoods');?>"><a href="#tab_goods_spec"
						data-toggle="tab">商品规格</a></li>
					<li url="<?php echo U('AjaxGetAttribute/addGoodsAttribute');?>"><a href="#tab_goods_attr" data-toggle="tab">商品参数</a></li>
                     <!-- <li><a href="#tab_goods_shipping" data-toggle="tab">商品物流</a></li>-->
				</ul>
				<!--表单数据-->
				<form method="post" id="myform" enctype="multipart/form-data">

					<!--通用信息-->
					<div class="tab-content">
						<div class="tab-pane active" id="tab_tongyong">

							<table class="table table-bordered">
								<tbody>
									<tr>
										<td><span style="color: red">*</span>商品名称:</td>
										<td><input type="text" placeholder="<?php echo C('placeholder')[0];?>" name="title"
											class="form-control w380 title" id="title" 
											> <span id="err_title"
											class="rxd">商品名称没有填写</span> <span
											id="err_title1" class="rxd">商品名已存在，请重新取名</span>
										</td>
									</tr>
									<tr>
										<td>商品简介:</td>
										<td><textarea rows="3" placeholder="<?php echo C('placeholder')[1];?>" cols="80" name="description"></textarea>
											<span id="err_description"
											class="rxd"></span></td>
									</tr>
									<!-- <tr>
										<td>商品货号</td>
										<td><input type="text" name="code" class="form-control w380"
											 /> <span id="err_goods_sn" class="rxd"></span></td>
									</tr> -->

									<tr>
										<td><span style="color: red">*</span>商品分类:</td>
										<td>
											<div class="drop-wrap clearfix">
												<div class="drop-main fl">
													<div class="drop clearfix ">
														<span class="vision">请输入/选择商品分类</span>
														<input type="text" db_name="class_id" autocomplete="off" id="first" name="class_name" class="fl" onkeyup="GoodsOption.search(this);">
														<a href="javascript:;" class="fl" data="false">∨</a>
													</div>
													<ul class="menu">
														
													</ul>
												</div>
												<div class="drop-main fl">
													<div class="drop clearfix">
														<span class="vision">请输入/选择商品分类</span>
														<input type="text" db_name="class_id"  id='second' autocomplete="off" name="class_name" onkeyup="GoodsOption.search(this);" class="fl">
														<a href="javascript:;"   class="fl" data="false" >∨</a>
													</div>
													<ul class="menu">
														
													</ul>
												</div>
												<div class="drop-main fl">
													<div class="drop clearfix">
														<span class="vision">请输入/选择商品分类</span>
														<input type="text" class="check_class" db_name="class_id" name="class_name" id='three' autocomplete="off" onkeyup="GoodsOption.search(this);" class="fl">
														<a href="javascript:;" class="fl" data="false">∨</a>
													</div>
													<ul class="menu">
													</ul>
												</div>
											</div>
										</td>

									</tr>
									
									<tr>
										<td>扩展分类:</td>
										<td>
											<div class="drop-wrap clearfix">
												<div class="drop-main fl">
													<div class="drop clearfix ">
														<span class="vision">请输入/选择扩展分类</span>
														<input type="text" db_name="extend" autocomplete="off" id="four" name="class_name" class="fl" onkeyup="GoodsOption.search(this);">
														<a href="javascript:;"  class="fl" data="false">∨</a>
													</div>
													<ul class="menu">
														
													</ul>
												</div>
												<div class="drop-main fl">
													<div class="drop clearfix">
														<span class="vision">请输入/选择扩展分类</span>
														<input type="text"  id='five' db_name="extend" autocomplete="off" name="class_name" onkeyup="GoodsOption.search(this);" class="fl">
														<a href="javascript:;"   class="fl" data="false" >∨</a>
													</div>
													<ul class="menu">
														
													</ul>
												</div>
												<div class="drop-main fl">
													<div class="drop clearfix">
														<span class="vision">请输入/选择扩展分类</span>
														<input type="text" db_name="extend" name="class_name" id='six' autocomplete="off" onkeyup="GoodsOption.search(this);" class="fl">
														<a href="javascript:;" class="fl" data="false">∨</a>
													</div>
													<ul class="menu">
													</ul>
												</div>
											</div>
										</td>

									</tr>
									
									<tr>
										<td><span style="color: red">*</span>商品品牌:</td>
										<td><select name="brand_id" id="brand_id"
											class="form-control w380">
												<option value="">所有品牌</option>
												<?php if(is_array($brandList)): foreach($brandList as $key=>$brand): ?><option value="<?php echo ($brand["id"]); ?>">
													<?php echo ($brand["brand_name"]); ?>
												</option><?php endforeach; endif; ?>
										</select></td>
									</tr>

									 <tr>
										<td><span style="color: red">*</span>市场价:</td>
										<td><input type="text" name="price_market"
											class="form-control w380"
											onkeyup="this.value=this.value.replace(/[^\d.]/g,'')"
											onpaste="this.value=this.value.replace(/[^\d.]/g,'')" /> <span
											id="err_market_price" class="rxd"></span>
										</td>
									</tr>
									<tr>
										<td><span style="color: red">*</span>会员价:</td>
										<td><input type="text" name="price_member"
											class="form-control w380" 
											onkeyup="this.value=this.value.replace(/[^\d.]/g,'')"
											onpaste="this.value=this.value.replace(/[^\d.]/g,'')" /> <span
											id="err_cost_price" class="rxd"></span>
										</td>
									</tr>

									<!--<tr>-->
										<!--<td><span style="color: red">*</span>是否包邮:</td>-->
										<!--<td>是:<input type="radio" class="yunfei" value="1"-->
											<!--name="min_yunfei" /> 否:<input type="radio" class="yunfei"-->
											<!--value="0" name="min_yunfei" />-->
										<!--</td>-->
									<!--</tr>-->
									<tr>
										<td><span style="color: red">*</span>库存数量:</td>
										<td><input type="text" class="form-control w380" name="stock"
											onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" /> <span
											id="err_stock" class="rxd"></span></td>
									</tr>
									<!-- <tr>
										<td>库存预警:</td>
										<td><input type="text" class="form-control w380" placeholder="<?php echo C('placeholder')[2];?>"  name="stock_warning"
											onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" /> <span
											id="err_stock2" class="rxd"></span></td>
									</tr> -->
								
									<tr>
										<td>设置:</td>
										<td><input type="checkbox" checked="checked"
											class="shelves" value="1" name="shelves" /> 上架&nbsp;&nbsp; <input
											type="checkbox" checked="checked" class="shelves" value="1"
											name="recommend" />推荐&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td><span style="color: red">*</span>预售天数(库存为0)：</td>
										<td><input type="text" class="form-control w300"
												   id="start_time" name="advance_date">
										</td>

									</tr>
									<tr>
										<td>商品详情描述:</td>
										<td width="85%"><textarea class="span12 ckeditor"
												id="goods_content" name="detail" title=""></textarea>
											<span id="err_goods_content"
											class="rxd"></span></td>
									</tr>
								</tbody>
							</table>
						</div>


						<!--其他信息-->

						<!-- 商品相册-->
						<div class="tab-pane" id="tab_goods_images">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>
											<div class="goods_xc">
												<input type="hidden" name="goods_images[]" value="" /> <a
													href="javascript:void(0);"
													onclick="GoodsOption.uploadify('<?php echo C('upload_url');?>/uploadNum/<?php echo C('goods_picture_number');?>/path/goods/input/logo/callBack/GoodsOption.requstFather/config/image_config');"><img
													src="http://www.shopsn.xyz/Public/Admin/img/add-button.jpg" width="100" height="100" /></a> <br />
												<a href="javascript:void(0)">&nbsp;&nbsp;</a>
											</div></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--商品相册-->

						<!-- 商品规格-->
						<div class="tab-pane" id="tab_goods_spec">
							<table class="table table-bordered" id="goods_spec_table">
								<tr>
									<td>商品类型:</td>
									<td><select name="<?php echo ($goodsModel::$goodsType_d); ?>" id="spec_type"
										onchange="GoodsOption.getSpec(this, '<?php echo U('Goods/ajaxGetSpecSelect');?>', '<?php echo U('ajaxGetSpecInput');?>')"
										class="form-control" style="width: 250px;">
											<option value="0">选择商品类型</option>
											<?php if(is_array($goodsTypeList)): foreach($goodsTypeList as $key=>$goodsType): ?><option value="<?php echo ($key); ?>"><?php echo ($goodsType); ?></option><?php endforeach; endif; ?>
									</select></td>
								</tr>

							</table>
							<div id="ajax_spec_data"></div>
						</div>
						<!-- 商品规格-->

						<!-- 商品属性-->
						<div class="tab-pane" id="tab_goods_attr">
                          <table class="table table-bordered" id="goods_attr_table">                                
                              <tr>
                                  <td>商品属性:</td>
                                  <td>                                        
                                    <select name="<?php echo ($goodsModel::$attrType_d); ?>" id="goods_type" class="form-control" url="<?php echo U('AjaxGetAttribute/ajaxGetAttributeInput');?>" onchange="GoodsOption.selectGoodsAttribute(this)">
                                      <option value="0">选择商品属性</option>
                                      <?php if(is_array($goodsTypeList)): foreach($goodsTypeList as $k=>$vo): ?><option value="<?php echo ($k); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; ?>                                        
                                    </select>
                                  </td>
                              </tr>                                
                          </table>
                      </div>
						<!-- 商品属性-->

						<!-- 商品物流-->
						<!--<div class="tab-pane" id="tab_goods_shipping">
                          <h4><b>物流配送：</b><input type="checkbox" onclick="choosebox(this)">全选</h4>
                          <table class="table table-bordered table-striped dataTable" id="goods_shipping_table">
                              <?php if(is_array($plugin_shipping)): foreach($plugin_shipping as $kk=>$shipping): ?><tr>
                                      <td class="title left" style="padding-right:50px;">
                                          <b><?php echo ($shipping[name]); ?>：</b>
                                          <label class="right"><input type="checkbox" value="1" cka="mod-<?php echo ($kk); ?>">全选</label>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          <ul class="group-list">
                                              <?php if(is_array($shipping_area)): foreach($shipping_area as $key=>$vv): if($vv[shipping_code] == $shipping[code]): ?><li><label><input type="checkbox" name="shipping_area_ids[]" value="<?php echo ($vv["shipping_area_id"]); ?>" <?php if(in_array($vv['shipping_area_id'],$goods_shipping_area_ids)): ?>checked='checked='<?php endif; ?> ck="mod-<?php echo ($kk); ?>"><?php echo ($vv["shipping_area_name"]); ?></label></li><?php endif; endforeach; endif; ?>
                                              <div class="clear-both"></div>
                                          </ul>
                                      </td>
                                  </tr><?php endforeach; endif; ?>
                          </table>
                      </div>-->
						<!-- 商品物流-->
					</div>
					<div class="pull-right">
						<input type="button"
							onclick="GoodsOption.addGoods('myform', this.getAttribute('url'), '<?php echo U('goods_list');?>');"
							url="<?php echo U('addGoods');?>" class="btn btn-primary" value="保存">
					</div>
				</form>
				<!--表单数据-->
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/listener.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/ueditor.config.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/goods.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/spinner/spinner_click.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/spinner/Spinner.js?a=<?php echo time();?>"></script>
<script type="text/javascript">
		//var url = '<?php echo U("Goods/goodsCategory");?>';
    	GoodsOption.selectTab();
    	GoodsOption.del 	= "http://<?php echo ($_SERVER['HTTP_HOST']); ?>/upload.php/Upload/deleteFile";
    	GoodsOption.dbUrl	= "<?php echo U('deleteImageByDb');?>"
    	GoodsOption.ueditor(options,'goods_content');
    	//GoodsOption.threGoodsClass(url);
    	var CLASS_LIST = "<?php echo U('goodsCategory');?>";
    	//MySite.area = "{ \$model::$areaId_d \}";
    	 GoodsOption.getClass($('#first').get(0), CLASS_LIST, 0);
    	 console.log($('#four').get(0));
    	 GoodsOption.getClass($('#four').get(0), CLASS_LIST, 0);
    </script> 
</body>
</html>