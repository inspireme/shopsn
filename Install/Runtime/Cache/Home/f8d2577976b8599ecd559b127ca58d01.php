<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo C('title');?></title>
<link rel="stylesheet" href="/Public/Install/css/css.css"/>
</head>
<body>
<div class="wrap">
  <div class="width top">
	<div class="logo left"><img src="/Public/Install/img/logo.png" width="324" height="41"></div>
  <div class="Can-finish right clear center size16">只需3步，即可完成安装</div>
</div>
  
  


<form id="J_install_form" action="<?php echo U('stepFour');?>" method="post">
<div class="content width">
	<div class="step2">
    	<h3 style=" background:url(/Public/Install/img/step.jpg) no-repeat center -140px ;"></h3>
    	<ul>
        	<li class="center left " style="margin-left:15px;">欢迎使用ShopsN</li>
            <li class="center left ">检查环境  </li>
            <li class="center left Orange" style="margin-left:-15px;">配置系统</li>
        </ul>
    </div>


<input type="hidden" name="force" value="0" />

<div class="frame  size12">
	<h4>数据库信息</h4>
	
	
	
    <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="line-height:30px;">
  <tr>
    <td width="14%" height="30"  align="right" >数据库服务器：</td>
    <td width="14%" align="left"><input type="text" name="dbhost" id="dbhost" value="localhost" class="input"></td>
    <td width="64%" align="left" class="gray2"><div id="J_install_tip_dbhost">数据库服务器地址，一般为localhost</div></td>
    </tr>
  <tr>
    <td height="40" align="right">数据库端口：</td>
    <td><input type="text" name="dbport" id="dbport" value="3306" class="input"></td>
    <td  class="gray2"><div id="J_install_tip_dbport">数据库服务器端口，一般为3306</div></td>
    </tr>
  <tr>
    <td height="40" align="right">数据库用户名：</td>
    <td><input type="text" name="dbuser" id="dbuser" value="root" class="input"></td>
    <td class="gray2"><div id="J_install_tip_dbuser"></div> 非ROOT用户,请另行在mysql开通账户创建权限,否则不能自动创建数据库 </td>
    </tr>
  <tr>
    <td height="40" align="right">数据库名：</td>
    <td><input type="text" name="dbname" id="dbname" value="shopsn" class="input"></td>
    <td class="gray2"><div id="J_install_tip_dbname" style="color:red"></div>无需手动创建,程序会自动创建数据库</td>
    </tr>
  <tr>
    <td height="40" align="right">数据库密码：</td>
    <td><input type="password" name="dbpw" id="dbpw" value="" class="input" autoComplete="off" onBlur="CheckData.TestDbPwd(0, '<?php echo U('checkLink');?>')"></td>
            <td class="gray2"><div id="J_install_tip_dbpw"></div></td>
  </table></div>
<div class="frame  size12" style="margin-top:0">
	<h4>管理员信息</h4>
    <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="line-height:30px;">
  <tr>
    <td width="14%" height="30"  align="right" >管理员帐号：</td>
    <td width="14%" align="left"><input type="text" name="manager" id="manager" value="admin" class="input"></td>
    <td width="64%" align="left" class="gray"><div id="J_install_tip_manager"></div></td>
    </tr>
  <tr>
    <td height="40" align="right">管理员密码：</td>
    <td><input type="password" name="manager_pwd" id="manager_pwd" class="input" autoComplete="off"></td>
    <td  class="gray"><div id="J_install_tip_manager_pwd"></div></td>
    </tr>
  <tr>
    <td height="40" align="right">重复密码：</td>
    <td><input type="password" name="manager_ckpwd" id="manager_ckpwd" class="input" autoComplete="off"></td>
    <td><div id="J_install_tip_manager_ckpwd"></div></td>
    </tr>
  <tr>
    <td height="40" align="right">数据库表前缀：</td>
    <td><input type="text" name="dbprefix" id="dbprefix" value="db_" class="input"  readonly="readonly"></td>
    <td><div id="J_install_tip_dbprefix"><span class="gray2">建议使用默认，同一数据库安装多个项目时需修改</span></div></td>
    </tr>
  <tr>
    <td height="40" align="right">Email：</td>
    <td><input type="text" name="manager_email" class="input" value=""></td>
    <td><div id="J_install_tip_manager_email"></div></td>
  </tr>
    </table>
</div>
<div id="J_response_tips" style="display:none;"></div>
<div class="bottom tac">
	<span class="left">
	<a href="./index.php?step=2" class="on-Button left">上一步</a>
	<input type="button" onClick="CheckData.checkForm('<?php echo U('checkLink');?>');" class="under-Button left J_install_btn" value="创建数据"/>
</div>

</div>
</form>
<script src="/Public/Common/js/jquery-1.11.3.min.js"></script> 
  <script src="/Public/Common/js/jquery.validate.min"></script>
  <script src="/Public/Install/js/ajaxForm.js"></script> 
  <script src="/Public/Install/js/intnet.js?a=<?php echo time();?>"></script> 
   <script src="/Public/Install/js/checkDb.js?a=<?php echo time();?>"></script> 



  
  <script type="text/javascript" src="/Public/Install/js/index.js"></script>
 <div class="bottom  width center">
  <p><a href="http://www.shopsn.net" target="view_window" >ShopsN开源商城官网</a> </p>
  <p> Powered by ShopsN开源商城 B2C单商户版   www.shopsn.net </p>
</div>
</div>
</body>
</html>