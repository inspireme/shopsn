<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>管理后台</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link href="/Public/Admin/css/css.css" rel="stylesheet" type="text/css" />
    <link href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
 	<link href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 

    <link href="http://www.shopsn.xyz/Public/Common/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> 

    <link href="http://www.shopsn.xyz/Public/Common/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="http://www.shopsn.xyz/Public/Common/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link href="http://www.shopsn.xyz/Public/Common/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />

    <script src="http://www.shopsn.xyz/Public/Common/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="http://www.shopsn.xyz/Public/Common/js/global.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/myFormValidate.js"></script>    
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/myAjax.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    //全选
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['90%', '90%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    					layer.closeAll();
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
    </script>        
  </head>
  <body style="background-color:#ecf0f5;">
 

<div class="wrapper">
	
	<section class="content">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css"/>
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看积分商品信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
	               	<nav class="navbar navbar-default">	     
				        <div class="collapse navbar-collapse">
				          <form class="navbar-form form-inline" action="<?php echo U('index');?>" method="post">
				            <div class="form-group">
				              	<input type="text" name="keywords" class="form-control" placeholder="请输入商品名称" value="<?php echo ($keywords); ?>">
				            </div>
				            <div class="form-group">
				            	 <select name="status" class="form-control">
                                    <option value="-1" <?php if($status == -1): ?>selected<?php endif; ?>>==所有==</option>
                                    <option value="1" <?php if($status == 1): ?>selected<?php endif; ?>>显示</option>
                                    <option value="0" <?php if($status == 0): ?>selected<?php endif; ?>>关闭</option>
                                 </select>   
				            </div>
				            <button type="submit" class="btn btn-primary">查询</button>
				            <div class="form-group pull-right">
					            <a href="<?php echo U('integral', ['act'=>'add']);?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> 新增积分商品</a>
				            </div>		          
				          </form>
				      	</div>
	    			</nav>
	             </div>
	             <div class="box-body">
	           	 <div class="row">
	            	<div class="col-sm-12">
		              <table id="list-table" class="table table-bordered table-striped dataTable">
		                 <thead>
		                   <tr role="row">
                               <th>商品ID</th>
                               <th>商品名称</th>
			                   <th>需要积分</th>	
			                   <th>会员价</th>	                   
			                   <th>库存</th>
			                   <th>是否显示</th>
		                  	   <th>添加时间</th>
		                  	   <th>操作</th>
		                   </tr>
		                 </thead>
						<tbody>
                          <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr role="row">    
                             <td><?php echo ($vo['goods_id']); ?></td>
                             <td><?php echo ($vo['title']); ?></td>
		                     <td><?php echo ($vo['integral']); ?></td>	                    
		                     <td><?php echo ($vo['price_member']); ?></td>
		                     <td><?php echo ($vo['stock']); ?></td>                           
		                     <td>
                                 <img width="20" height="20" src="/Public/Admin/img/<?php if($vo[status] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('IntegralGoods','id','<?php echo ($vo["id"]); ?>','status',this)"/>
		                     </td>
		                     <td>
                             <?php echo (date("Y-m-d H:m:s",$vo['create_time'])); ?>	                     	
		                     </td>
		                     <td>
		                      <a class="btn btn-primary" href="<?php echo U('integral',['act'=>'edit','id'=>$vo['id']]);?>"><i class="fa fa-pencil"></i></a>
		                      <a class="btn btn-danger" onclick="delfunc(this)" data-url="<?php echo U('goodsHandle', ['act'=>'del']);?>" data-id="<?php echo ($vo["id"]); ?>"><i class="fa fa-trash-o"></i></a>
				            </td>
		                   </tr><?php endforeach; endif; ?>
		                   </tbody>
		                 <tfoot>
		                 
		                 </tfoot>
		               </table>
	               </div>
	          </div>
              <div class="row">
                    <div class="col-sm-12">
                        <div class="page"><?php echo ($page); ?></div>
                    </div>		
              </div>
	          </div>
	        </div>
       	</div>
       </div>
   </section>
<script>

</script>
</div>
</body>
</html>