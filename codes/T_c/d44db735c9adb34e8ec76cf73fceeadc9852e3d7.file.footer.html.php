<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-07 16:50:20
         compiled from "codes/T/default/theme/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:12032829657caa177b62618-39566995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44db735c9adb34e8ec76cf73fceeadc9852e3d7' => 
    array (
      0 => 'codes/T/default/theme/footer.html',
      1 => 1473238215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12032829657caa177b62618-39566995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57caa177b7b084_47630442',
  'variables' => 
  array (
    'instatus' => 0,
    'slstatus' => 0,
    'pdstatus' => 0,
    'svstatus' => 0,
    'spstatus' => 0,
    'jnstatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57caa177b7b084_47630442')) {function content_57caa177b7b084_47630442($_smarty_tpl) {?>
		    <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel uk-panel-box uk-text-center">
                        <p><strong>西安硕星信息技术有限公司.</strong>  现正招贤纳士，联系热线:4006933112. <a class="uk-button uk-button-primary uk-margin-left" href="<?php echo @constant('URL');?>
/Joinus/index.html">查看更多</a></p>
                    </div>
                </div>
            </div>
		</div>
		
		<div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
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
'>
						<a href='<?php echo @constant('URL');?>
/Product/index.html'>产品</a>
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
            </div>
        </div>
	</body>
</html><?php }} ?>
