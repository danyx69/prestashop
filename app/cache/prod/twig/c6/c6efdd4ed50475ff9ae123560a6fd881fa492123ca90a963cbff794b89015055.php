<?php

/* __string_template__fda53a53099d35621e2c825da028f096508d4b26a5b8683df4d7643aabd49cd7 */
class __TwigTemplate_1f252f68242d55bd29fc0974b65d4a30fdc13e1bb903262b6c823005c89bc5e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Selezione modulo • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'it';
    var full_language_code = 'it';
    var full_cldr_language_code = 'it-IT';
    var country_iso_code = 'IT';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'È stato effettuato un nuovo ordine nel tuo negozio.';
    var order_number_msg = 'Numero dell\\\\\\'ordine: ';
    var total_msg = 'Totale: ';
    var from_msg = 'Da: ';
    var see_order_msg = 'Vedi quest\\\\\\'ordine';
    var new_customer_msg = 'Un nuovo cliente si è registrato nel tuo negozio.';
    var customer_name_msg = 'Nome cliente: ';
    var new_msg = 'Al tuo negozio è stato inviato un nuovo messaggio.';
    var see_msg = 'Leggi questo messaggio';
    var token = '462efae75f806ca5764258f14e1c2f78';
    var token_admin_orders = 'df2f7638619f99dfda614f1e6884ec95';
    var token_admin_customers = '7ad0b73efcd7914ac69e8d9f16c4e775';
    var token_admin_customer_threads = 'e07050f4f02220c5afdc93d6b5d94d0a';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'cfcd07658d6bfd3e4541049699dd2e4e';
    var choose_language_translate = 'Scegli lingua';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin48457g6pi/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM';
    var tab_modules_list = '';
    var update_success_msg = 'Aggiornato con successo';
    var errorLogin = 'PrestaShop non ha potuto accedere ad Addons. Si prega di controllare le tue credenziali e la tua connessione Internet.';
    var search_product_msg = 'Cerca un prodotto';
  </script>

      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin48457g6pi/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin48457g6pi/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin48457g6pi\\/\";
var baseDir = \"\\/prestashop\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin48457g6pi/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin48457g6pi/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin48457g6pi/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminGamification&token=9b93051f0ae0afdc6b8a55a324629d6c';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminDashboard&amp;token=9cdbed490e467b2e558dc0a1c40090ec\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accesso Veloce</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin48457g6pi/index.php/module/manage?token=c21ffee96acc2be0e58385c07beae497\"
                 data-item=\"Moduli installati\"
      >Moduli installati</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCategories&amp;addcategory&amp;token=954fdab454bf41323d17f441f75f9423\"
                 data-item=\"Nuova categoria\"
      >Nuova categoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin48457g6pi/index.php/product/new?token=c21ffee96acc2be0e58385c07beae497\"
                 data-item=\"Nuovo prodotto\"
      >Nuovo prodotto</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=066c8a55ddea9cb7bb8e902ca8cdab85\"
                 data-item=\"Nuovo voucher\"
      >Nuovo voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminOrders&amp;token=df2f7638619f99dfda614f1e6884ec95\"
         target=\"_blank\"         data-item=\"Ordini\"
      >Ordini</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"109\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminQuickAccesses&token=1c7f3feec24221c88249ca94b54d1011\"
        data-prompt-text=\"Da\\\\\\' un nome a questo shortcut:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Aggiungi a QuickAccess la pagina corrente
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminQuickAccesses&token=1c7f3feec24221c88249ca94b54d1011\">
      <i class=\"material-icons\">settings</i>
      Gestisci gli accessi rapidi
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/prestashop/admin48457g6pi/index.php?controller=AdminSearch&amp;token=32f9a89eb3aab18e206e5198d922301d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Ricerca (es. riferimento prodotto, nome cliente...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Ovunque
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Ovunque\" href=\"#\" data-value=\"0\" data-placeholder=\"Cosa hai bisogno di trovare?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Ovunque</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome prodotto, codice a barre, riferimento...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogo
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clienti per nome\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nome, ...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clienti per nome
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clienti per indirizzo IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clienti per indirizzo IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Ordini\" href=\"#\" data-value=\"3\" data-placeholder=\"ID ordine\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Ordini
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Fatture\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero fattura\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Fatture
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carrelli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrello\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carrelli
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Moduli\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome modulo\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Moduli
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">CERCA<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/danix1000%40hotmail.it.jpg\" /><br>
      <span>Daniele Paiano</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminEmployees&amp;token=cfcd07658d6bfd3e4541049699dd2e4e&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Il tuo profilo
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminLogin&amp;token=8ac444d46a8d1015d957bb2c4c055979&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Esci
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Ordini<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messaggi<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo ordine :(<br>
              Hai consultato i tuoi <strong><a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCarts&token=0d4e5a1b94187a8cd5a2bcfae25da4ef&action=filterOnlyAbandonedCarts\">carrelli abbandonati</a></strong>?<br>Il tuo prossimo ordine potrebbe essere nascosto lì!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo cliente :(<br>
              Hai inviato qualche email di acquisto ultimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora non ci sono nuovi messaggi.<br>
              Sembra che tutti i tuoi clienti siano felici :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      da <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrato <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/prestashop/\" target= \"_blank\">prestashop</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminDashboard&amp;token=9cdbed490e467b2e558dc0a1c40090ec\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pannello di controllo</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Vendi</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminOrders&amp;token=df2f7638619f99dfda614f1e6884ec95\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Ordini
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminOrders&amp;token=df2f7638619f99dfda614f1e6884ec95\" class=\"link\"> Ordini
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminInvoices&amp;token=0cfc2220581815e9211b92a2385dde01\" class=\"link\"> Fatture
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminSlip&amp;token=4c599d5407211f8f63765282da53880e\" class=\"link\"> Note di credito
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminDeliverySlip&amp;token=301caa5a52400060fea653e3a276a322\" class=\"link\"> Bolle di consegna
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCarts&amp;token=0d4e5a1b94187a8cd5a2bcfae25da4ef\" class=\"link\"> Carrello della spesa
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/prestashop/admin48457g6pi/index.php/product/catalog?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogo
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/prestashop/admin48457g6pi/index.php/product/catalog?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\" class=\"link\"> Prodotti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCategories&amp;token=954fdab454bf41323d17f441f75f9423\" class=\"link\"> Categorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminTracking&amp;token=5a6b0c46b90fa8f905fc9f0921b615d0\" class=\"link\"> Monitoraggio
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminAttributesGroups&amp;token=431712b775d2715ef5aedb2b31b6df3f\" class=\"link\"> Attributi e Funzionalità
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminManufacturers&amp;token=5fc79adb26847051972dd3dcabf14097\" class=\"link\"> Marche &amp; Fornitori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminAttachments&amp;token=d6b17ac2be7866518c41c474b44274cb\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCartRules&amp;token=066c8a55ddea9cb7bb8e902ca8cdab85\" class=\"link\"> Buoni sconto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/prestashop/admin48457g6pi/index.php/stock/?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCustomers&amp;token=7ad0b73efcd7914ac69e8d9f16c4e775\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clienti
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCustomers&amp;token=7ad0b73efcd7914ac69e8d9f16c4e775\" class=\"link\"> Clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminAddresses&amp;token=a78fe0bf9341c3738d2611c12763e2a0\" class=\"link\"> Indirizzi
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCustomerThreads&amp;token=e07050f4f02220c5afdc93d6b5d94d0a\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servizio clienti
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCustomerThreads&amp;token=e07050f4f02220c5afdc93d6b5d94d0a\" class=\"link\"> Servizio clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminOrderMessage&amp;token=e4e79be2d58700f5d5e4489f55d70e34\" class=\"link\"> Messaggi d&#039;ordine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminReturn&amp;token=531964758e9e98e99e49b8908222c7cd\" class=\"link\"> Restituzione Prodotto
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminStats&amp;token=ea739ec31a96d1b84d9233ef4dc5e1ea\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiche
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Migliora</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/prestashop/admin48457g6pi/index.php/module/catalog?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduli
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/prestashop/admin48457g6pi/index.php/module/catalog?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\" class=\"link\"> Moduli &amp; Servizi
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminAddonsCatalog&amp;token=e97bf015367fba234acbadcfb7b5cd5d\" class=\"link\"> Strumenti di Compra-Vendita
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminThemes&amp;token=06ce589fa78d05b778429323b73bb944\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminThemes&amp;token=06ce589fa78d05b778429323b73bb944\" class=\"link\"> Tema &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminThemesCatalog&amp;token=7b77911de111a20e90964f1acfe6f5be\" class=\"link\"> Catalogo dei Temi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCmsContent&amp;token=6770fa7eaa33056567022c754ae70d91\" class=\"link\"> Pagine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminModulesPositions&amp;token=614d895fc636a8789eb304d324f1bd2e\" class=\"link\"> Posizioni
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminImages&amp;token=0a6a4ec838d9edb1ef80a2b9a3834753\" class=\"link\"> Impostazioni immagine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminLinkWidget&amp;token=6ea321c7996d385ee67f5090f269cc86\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCarriers&amp;token=fb7ffee3c388452c2d5ee61ebd8b0c97\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Spedizione
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCarriers&amp;token=fb7ffee3c388452c2d5ee61ebd8b0c97\" class=\"link\"> Mezzi di spedizione
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminShipping&amp;token=1494701bc3e599c142b815b810f2abae\" class=\"link\"> Impostazioni
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPayment&amp;token=0586a52f2e73f533e48b13196717ded8\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pagamento
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPayment&amp;token=0586a52f2e73f533e48b13196717ded8\" class=\"link\"> Metodi di Pagamento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPaymentPreferences&amp;token=e7db307ac366358bf707e75fb41dccea\" class=\"link\"> Impostazioni
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminLocalization&amp;token=4894ba45de31190cf387b0ed5a7b7ca9\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internazionale
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminLocalization&amp;token=4894ba45de31190cf387b0ed5a7b7ca9\" class=\"link\"> Localizzazione
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCountries&amp;token=58d4f7d1c0effcb3a62cac4339b6b35e\" class=\"link\"> Località
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminTaxes&amp;token=8af3c74c67a514509d52a23fc67ba54f\" class=\"link\"> Tasse
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminTranslations&amp;token=5781494161eb39ac71518c809ee9aa4d\" class=\"link\"> Traduzioni
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configura</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPreferences&amp;token=d75d53842f70462846046cfa1b2ea551\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parametri Negozio
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPreferences&amp;token=d75d53842f70462846046cfa1b2ea551\" class=\"link\"> Generale
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminOrderPreferences&amp;token=470a1f8041448ab1346cb124d31ed6b2\" class=\"link\"> Impostazioni Ordine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPPreferences&amp;token=e6137b7e7a24d8f3c78d9c22ff41c9b8\" class=\"link\"> Prodotti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminCustomerPreferences&amp;token=5c63fcd36d46e50198c14d32c13e15ce\" class=\"link\"> Impostazioni clienti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminContacts&amp;token=f771531502bb9dce26bba00bc172d3b7\" class=\"link\"> Contatto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminMeta&amp;token=0d25ab41cdfec60cff506440d16d8909\" class=\"link\"> Traffico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminSearchConf&amp;token=94f3c43c29cfee5ee2cade7ef88ac280\" class=\"link\"> Cerca
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminGamification&amp;token=9b93051f0ae0afdc6b8a55a324629d6c\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminInformation&amp;token=c352088d5a59bad84b5769c8630cb067\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parametri Avanzati
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminInformation&amp;token=c352088d5a59bad84b5769c8630cb067\" class=\"link\"> Informazioni
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminPerformance&amp;token=68a2f613a4ef97d56232f4bfa40304d4\" class=\"link\"> Prestazioni
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminAdminPreferences&amp;token=18eda5050b1f781331da8eb72213e4f3\" class=\"link\"> Amministrazione
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminEmails&amp;token=c85f1c576f7445c54bd329faf0e5064a\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminImport&amp;token=c1ade832d811f85566e4b7afbe099a2b\" class=\"link\"> Importa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminEmployees&amp;token=cfcd07658d6bfd3e4541049699dd2e4e\" class=\"link\"> Dipendenti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminRequestSql&amp;token=28e9c7428faf241ab71b327444b2cca3\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminLogs&amp;token=564389176f1523fa1a5aaa7031f5b002\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminWebservice&amp;token=3fb8880e191c858acad8eb2ac79c3bb1\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancia il tuo negozio!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Riprendi</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Arresta l'OnBoarding</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminParentModulesSf&amp;token=2bf29858e873a709f03de646ea2569ed\">Moduli</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Selezione modulo    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Carica un modulo\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Carica un modulo</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Collegati al Marketplace degli Addon\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Collegati al Marketplace degli Addon</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aiuto\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/prestashop/admin48457g6pi/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dit/Aiuto?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aiuto</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/prestashop/admin48457g6pi/index.php/module/catalog?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\">Selezione</a>

                <a class=\"tab\"
   href=\"/prestashop/admin48457g6pi/index.php/module/manage?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\">Moduli installati</a>

                <a class=\"tab\"
   href=\"/prestashop/admin48457g6pi/index.php/module/notifications?_token=SdoUc8z9qn8JlFHOubNwIa8Jgq8UPFTnAYrIDmtqwbM\">Notifiche  <div class=\"notification-container\">
    <span class=\"notification-counter\">4</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-IT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/it/login?email=danix1000%40hotmail.it&amp;firstname=Daniele&amp;lastname=Paiano&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin48457g6pi/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Collega il tuo negozio al marketplace di PrestaShop al fine di importare automaticamente tutti i tuoi acquisti di Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Non hai ancora un account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Scopri la potenza di PrestaShop Addons! Esplora il Market Ufficiale di PrestaShop e trovi oltre 3500 moduli innovativi e temi che ottimizzano i rapporti di conversione, incrementano il traffico, fidelizzano il cliente e massimizzano i tuoi ritorni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Collegati con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/it/forgot-your-password\">Ho dimenticato la mia password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/it/login?email=danix1000%40hotmail.it&amp;firstname=Daniele&amp;lastname=Paiano&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrea un account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Accedi
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continua</button>
  <a class=\"onboarding-button-shut-down\">Salta questo tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Benvenuto nel tuo negozio!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Ciao! Il mio nome \\u00e8 Preston e sono qui per farti fare un giro.<\\/p>\\n    <p>Scoprirai pochi passi essenziali prima di poter lanciare il tuo negozio:\\n    Crea il tuo primo prodotto, personalizza il tuo negozio, configura spedizioni e pagamenti...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Iniziamo!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Pi\\u00f9 tardi<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Inizio<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Creiamo il tuo primo prodotto\",\"subtitle\":{\"1\":\"Cosa vorresti dire in proposito? Pensa a ci\\u00f2 che i tuoi clienti vorrebbero sapere.\",\"2\":\"Aggiungi delle informazioni chiare e attraenti. Niente paura, potrai modificarle pi\\u00f9 tardi :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Da' al tuo prodotto un nome accattivante.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Riempi in questa scheda i dettagli essenziali. Le altre schede sono per ulteriori informazioni avanzate.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Aggiungi una o pi\\u00f9 immagini affinch\\u00e9 il tuo prodotto sia allettante!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"A quanto vuoi vendere?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Evviva! Hai creato il tuo primo prodotto. Sembra buono, giusto?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Da' al tuo negozio una sua identit\\u00e0\",\"subtitle\":{\"1\":\"Come vuoi che appaia il tuo negozio? Cosa lo renderebbe speciale?\",\"2\":\"Personalizza il tuo tema o scegli il miglior design dal nostro catalogo dei temi.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Un buon modo per cominciare \\u00e8 aggiungere qui il tuo logo!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Se vuoi qualcosa di veramente speciale, da' un'occhiata al catalogo dei temi!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Rendi il tuo negozio pronto per i pagamenti\",\"subtitle\":{\"1\":\"Come vuoi che i tuoi clienti ti paghino?\",\"2\":\"Adatta la tua offerta l tuo mercato: aggiungi per i tuoi clienti i metodi di pagamento pi\\u00f9 popolari!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Questi metodi di pagamento sono gi\\u00e0 disponibili per i tuoi clienti.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"E puoi scegliere di aggiungere da qui altri metodi di pagamento!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Scegli le opzioni di spedizione\",\"subtitle\":{\"1\":\"Come vuoi spedire i tuoi prodotti?\",\"2\":\"Seleziona le opzioni di spedizione che possono soddisfare di pi\\u00f9 i tuoi clienti! Crea il tuo vettore o aggiungi un modulo pronto all'uso.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ecco i metodi di spedizione disponibili oggi sul tuo negozio.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Puoi offrire pi\\u00f9 opzioni di spedizione impostano vettori aggiuntivi\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Migliora il tuo negozio con dei moduli\",\"subtitle\":{\"1\":\"Aggiungi nuove funzionalit\\u00e0 e gestisci quelle esistenti grazie ai moduli.\",\"2\":\"Alcuni moduli sono pre-installati, altri possono essere gratuiti o a pagamento - esplora la nostra selezione e guarda cosa \\u00e8 disponibile!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Scopri la nostra selezione di moduli nella prima scheda. Gestiscili nella seconda e leggi le notifiche nella terza.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">A te!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Hai visto l'essenziale, ma c'\\u00e8 molto altro da esplorare.<br \\/>\\n    Alcune risorse possono aiutarti ad andare oltre:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Guida introduttiva<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Addestramento<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Video tutorial<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Sono pronto<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminWelcome&token=e5884e6b7e7d5f20b025943376b750dc\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Ehi! Ti sei perso?</p>    <p>Per continuare, clicca qui:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continua</button>    </div>    <p>Se desideri interrompere il tutorial, clicca qui:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Esci dal tutorial di Benvenuto</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Successivo</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1238
        $this->displayBlock('content_header', $context, $blocks);
        // line 1239
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1240
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1241
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1242
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"m-t-3\">
    La versione mobile di questa pagina non è ancora disponibile.
  </p>
  <p class=\"m-t-2\">
    Si prega di utilizzare un computer desktop per accedere a questa pagina, fin quando non sarà stata adattata ai dispositivi mobili.
  </p>
  <p class=\"m-t-2\">
    Grazie.
  </p>
  <a href=\"http://localhost/prestashop/admin48457g6pi/index.php?controller=AdminDashboard&amp;token=9cdbed490e467b2e558dc0a1c40090ec\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Indietro
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Tempo di caricamento: \"></i> 1.795s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-IT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contatto
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-IT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-IT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-IT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addon
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-IT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Addestramento
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-IT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/it/login?email=danix1000%40hotmail.it&amp;firstname=Daniele&amp;lastname=Paiano&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin48457g6pi/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Collega il tuo negozio al marketplace di PrestaShop al fine di importare automaticamente tutti i tuoi acquisti di Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Non hai ancora un account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Scopri la potenza di PrestaShop Addons! Esplora il Market Ufficiale di PrestaShop e trovi oltre 3500 moduli innovativi e temi che ottimizzano i rapporti di conversione, incrementano il traffico, fidelizzano il cliente e massimizzano i tuoi ritorni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Collegati con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/it/forgot-your-password\">Ho dimenticato la mia password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/it/login?email=danix1000%40hotmail.it&amp;firstname=Daniele&amp;lastname=Paiano&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrea un account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Accedi
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1407
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1238
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1239
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1240
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1241
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1407
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__fda53a53099d35621e2c825da028f096508d4b26a5b8683df4d7643aabd49cd7";
    }

    public function getDebugInfo()
    {
        return array (  1486 => 1407,  1481 => 1241,  1476 => 1240,  1471 => 1239,  1466 => 1238,  1457 => 84,  1449 => 1407,  1282 => 1242,  1279 => 1241,  1276 => 1240,  1273 => 1239,  1271 => 1238,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fda53a53099d35621e2c825da028f096508d4b26a5b8683df4d7643aabd49cd7", "");
    }
}
