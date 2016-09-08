<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-08 09:20:07
         compiled from "codes/T/default/theme/head.html" */ ?>
<?php /*%%SmartyHeaderCode:50227761157caa177b013f8-20465765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2c9723d181c8499f5655a8794fc4e5185f777f' => 
    array (
      0 => 'codes/T/default/theme/head.html',
      1 => 1473297601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50227761157caa177b013f8-20465765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57caa177b57154_80700697',
  'variables' => 
  array (
    'title' => 0,
    'mycss' => 0,
    'myjs' => 0,
    'instatus' => 0,
    'slstatus' => 0,
    'pdstatus' => 0,
    'svstatus' => 0,
    'spstatus' => 0,
    'jnstatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caa177b57154_80700697')) {function content_57caa177b57154_80700697($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset='utf=8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="硕星,服务器,硕星服务器,西安硕星,星蕴服务器,西安硕星信息技术有限公司" />
		<meta name="description" content="硕星,西安硕星信息技术有限公司致力于为科研领域提供专业的计算模拟解决方案，公司始终本着 “以信为本， 以质取胜” 的宗旨，着眼于市场需求， 守信经营。客户在这里可以得到售前技术咨询，售中合理化方案和售后标 准化服务等一整套完善的技术支持， 从而最大限度的满足用户的需求。" />
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel='stylesheet' href='<?php echo @constant('_P_');?>
/css/uikit.min.css'>
		<link rel='stylesheet' href='<?php echo @constant('_P_');?>
/css/uikit.docs.min.css'>
		<link rel='stylesheet' href='<?php echo @constant('_P_');?>
/css/public.css'>
		<?php echo $_smarty_tpl->tpl_vars['mycss']->value;?>

		<?php echo '<script'; ?>
 src="<?php echo @constant('_P_');?>
/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo @constant('_P_');?>
/js/uikit.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo @constant('_P_');?>
/js/components/slider.js"><?php echo '</script'; ?>
>
		
		<?php echo $_smarty_tpl->tpl_vars['myjs']->value;?>

	</head>
	<body>
		<div class='uk-container uk-container-center uk-margin-top uk-margin-large-bottom'>
			<nav class='uk-navbar uk-margin-large-bottom'>
				<a class='uk-navbar-brand uk-hidden-small' href='<?php echo @constant('URL');?>
'><img width=30 src='<?php echo @constant('_P_');?>
/img/logo-small.jpg'></a>
				
				<ul class='uk-navbar-nav uk-hidden-small'>
					<li class='<?php echo $_smarty_tpl->tpl_vars['instatus']->value;?>
'>
						<a href='<?php echo @constant('URL');?>
/index/index.html'>首页</a>
					</li>
					<li class='<?php echo $_smarty_tpl->tpl_vars['slstatus']->value;?>
'>
						<a href='<?php echo @constant('URL');?>
/Solution/index.html'>方案</a>
					</li>
					<li class='<?php echo $_smarty_tpl->tpl_vars['pdstatus']->value;?>
' data-uk-dropdown>
						<a href='<?php echo @constant('URL');?>
/Product/index.html'>产品</a>
						<!--<div class='uk-dropdown uk-dropdown-navbar'>
							<ul class='uk-nav uk-nav-navbar'>
								<li class='uk-nav-header uk-text-lager'>硕星产品系列</li>
								<li>
									<a href='<?php echo @constant('URL');?>
/Product/pseries.html'>星蕴服务器系列</a>
								</li>
								<li><a href='<?php echo @constant('URL');?>
/Product/wseries.html'>星蕴工作站系列</a></li>
								<li><a href='<?php echo @constant('URL');?>
/Product/sseries.html'>星蕴集群系列</a></li>
								<li><a href='<?php echo @constant('URL');?>
/Product/sseries.html'>星蕴GPU计算系列</a></li>
								<li><a href='<?php echo @constant('URL');?>
/Product/sseries.html'>星蕴PC集群计算系列</a></li>
								<li><a href='<?php echo @constant('URL');?>
/Product/sseries.html'>星蕴PC产品系列</a></li>
							</ul>
						</div>-->
					</li>
					<li class='<?php echo $_smarty_tpl->tpl_vars['svstatus']->value;?>
'>
						<a href='<?php echo @constant('URL');?>
/Service/index.html'>服务</a>
					</li>
					<li class='<?php echo $_smarty_tpl->tpl_vars['spstatus']->value;?>
'>
						<a href='<?php echo @constant('URL');?>
/Support/index.html'>技术支持</a>
					</li>
					<li class='<?php echo $_smarty_tpl->tpl_vars['jnstatus']->value;?>
'>
						<a href='<?php echo @constant('URL');?>
/Joinus/index.html'>加入我们</a>
					</li>
				</ul>
				
				<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
				<div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img width=30 src='<?php echo @constant('_P_');?>
/img/logo-small.jpg'></div>
			</nav>
<?php }} ?>
