<?php
/* Smarty version 3.1.34-dev-7, created on 2023-05-21 05:09:01
  from 'C:\Users\allen\Documents\Github\81online_shop\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6469a76d60e134_60599403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3ae00b8f1f55c260bcabbbe1d68d22a774e4cca' => 
    array (
      0 => 'C:\\Users\\allen\\Documents\\Github\\81online_shop\\templates\\index.html',
      1 => 1684645736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tool_post.html' => 1,
    'file:tool_edit.html' => 1,
    'file:show_one_post.html' => 1,
    'file:display_user.html' => 1,
    'file:registered.html' => 1,
    'file:login.html' => 1,
    'file:show_all_post.html' => 1,
    'file:chat.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_6469a76d60e134_60599403 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="jQuery_validation_engine/js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="jQuery_validation_engine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="jQuery_validation_engine/css/validationEngine.jquery.css" type="text/css" />
</head>

<body>

	<div class='container'>
		<div id="shop_head">
		<a href="index.php?op=home">
			<img src="https://imgcdn.cna.com.tw/www/WebPhotos/1024/20190120/077137361902.jpg"
			 height="100" width="100">
		</a>
		<a href="chat.php">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Golden_Retriever_Buddy_0311.jpg/220px-Golden_Retriever_Buddy_0311.jpg"
			 height="100" width="100">
		</a>
		</div>
		<div id="shop_main" class="row">
			<div class="col-md-9 col-sm-8">
				<?php if ($_smarty_tpl->tpl_vars['op']->value == "post" && isset($_smarty_tpl->tpl_vars['isuser']->value)) {?>
					<?php $_smarty_tpl->_subTemplateRender("file:tool_post.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "edit" && isset($_smarty_tpl->tpl_vars['isuser']->value)) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:tool_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "list" && isset($_smarty_tpl->tpl_vars['isuser']->value)) {?>
				<a href="tool.php?op=post" class="btn btn-block btn-primary">發布內容</a>
				<!-- <a href="tool.php?op=edit" class="btn btn-block btn-success">編輯內容</a> -->
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:show_one_post.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:display_user.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "registered" || $_smarty_tpl->tpl_vars['op']->value == "registered_insert") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:registered.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "login" || $_smarty_tpl->tpl_vars['op']->value == "loginout") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "home") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:show_all_post.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 篇
				<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

				<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "chat") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:chat.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			</div>
			<div class="col-md-3 col-sm-4"> 
				<?php if ($_smarty_tpl->tpl_vars['op']->value != "login" && $_smarty_tpl->tpl_vars['op']->value != "registered" && $_smarty_tpl->tpl_vars['op']->value != "registered_insert" && $_smarty_tpl->tpl_vars['op']->value != "loginout") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:index_side.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			</div>
		</div>
	</div>
</body>
</html>
<?php }
}
