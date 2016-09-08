<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-08 09:11:10
         compiled from "codes/T/default/SolutionIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:80462122957cfcfebafbe91-72191164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c517ff8d473629d75c6cc2f89d78cf65172fd77' => 
    array (
      0 => 'codes/T/default/SolutionIndex.html',
      1 => 1473297067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80462122957cfcfebafbe91-72191164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57cfcfebb1e9f8_45384673',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cfcfebb1e9f8_45384673')) {function content_57cfcfebb1e9f8_45384673($_smarty_tpl) {?>
	<div class='uk-grid' data-uk-grid-margin>
		<div class="uk-width-medium-1-1">
			<div class="uk-vertical-align uk-text-center banner" style="background: url(<?php echo @constant('_P_');?>
/img/solution.jpg) 50% 0 no-repeat; height: 450px;color:#ffffff;">
				<div class='uk-vertical-align-middle uk-width-1-2'>
					<h1 class='uk-heading-large'><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h1>
					<p class='uk-text-large'><?php echo $_smarty_tpl->tpl_vars['row']->value['t_info'];?>
</p>
					<p>
						<a class="uk-button uk-button-primary uk-button-large" href="<?php echo @constant('URL');?>
/Product/index.html">查看产品</a>
						<a class="uk-button uk-button-large" href="<?php echo @constant('URL');?>
/About/index.html">了解硕星</a>
					</p>
				</div>
			</div>
		</div>
	</div>
<p>升级中,敬请期待...</p><?php }} ?>
