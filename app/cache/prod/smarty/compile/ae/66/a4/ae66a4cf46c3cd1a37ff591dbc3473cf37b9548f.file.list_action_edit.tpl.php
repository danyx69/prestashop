<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 17:05:54
         compiled from "C:\wamp64\www\prestashop\admin48457g6pi\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:484359c3d5528b7e72-20818187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae66a4cf46c3cd1a37ff591dbc3473cf37b9548f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin48457g6pi\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1505997244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '484359c3d5528b7e72-20818187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c3d5528ca6d1_39856226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c3d5528ca6d1_39856226')) {function content_59c3d5528ca6d1_39856226($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
