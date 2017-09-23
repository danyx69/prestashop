<?php /*%%SmartyHeaderCode:653459c3b367c82ed1-09569664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1505997255,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '653459c3b367c82ed1-09569664',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c3b367cbfb67_72017940',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c3b367cbfb67_72017940')) {function content_59c3b367cbfb67_72017940($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/account" rel="nofollow">
      Il tuo account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Il tuo account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/prestashop/indirizzi" title="Indirizzi" rel="nofollow">
            Indirizzi
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/dati-personali" title="Informazioni personali" rel="nofollow">
            Informazioni personali
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/buono-ordine" title="Note di credito" rel="nofollow">
            Note di credito
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop/cronologia-ordini" title="Ordini" rel="nofollow">
            Ordini
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
