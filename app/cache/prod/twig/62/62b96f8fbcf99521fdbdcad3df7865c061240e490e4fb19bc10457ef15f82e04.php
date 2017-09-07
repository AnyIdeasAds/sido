<?php

/* __string_template__7d941554b4bf42e756d417d7cdc72e5d6ec3bac0808570bdf03632952b6fdcb3 */
class __TwigTemplate_69e17349be53f90885922ce233ddf75c67a3944338fbb2a09970ac1e3218a1e4 extends Twig_Template
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
<html lang=\"lt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Modulio pasirinkimas • Sidonas</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'lt';
    var full_language_code = 'lt-lt';
    var full_cldr_language_code = 'lt-LT';
    var country_iso_code = 'LT';
    var _PS_VERSION_ = '1.7.2.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Parduotuvėje atliktas naujas užsakymas.';
    var order_number_msg = 'Užsakymo numeris: ';
    var total_msg = 'Viso: ';
    var from_msg = 'Nuo: ';
    var see_order_msg = 'Peržiūrėti šį užsakymą';
    var new_customer_msg = 'Parduotuvėje užsiregistravo naujas pirkėjas.';
    var customer_name_msg = 'Kliento vardas: ';
    var new_msg = 'Gauta nauja žinutė jūsų parduotuvėje.';
    var see_msg = 'Skaityti šią žinutę';
    var token = 'c4fe69e6bfa172de19a09f57b88c94a0';
    var token_admin_orders = '361ccdef9f6ce7c6559af3f4ceb8dc0a';
    var token_admin_customers = 'bdaf6276afea203677961893c97dea2b';
    var token_admin_customer_threads = '97cc2465d0a8c2f42768d5122e314c05';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'c9d1636e006218c5b4236c6b911294d7';
    var choose_language_translate = 'Pasirinkite kalbą';
    var default_language = '1';
    var admin_modules_link = '/admin794v4mu1q/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM';
    var tab_modules_list = '';
    var update_success_msg = 'Atnaujinta';
    var errorLogin = 'PrestaShop nepavyko prisijungti prie Addons. Patikrinkite savo prisijungimo duomenis ir interneto ryšį.';
    var search_product_msg = 'Ieškoti prekės';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin794v4mu1q/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin794v4mu1q/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin794v4mu1q\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euras\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin794v4mu1q/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.2\"></script>
<script type=\"text/javascript\" src=\"/admin794v4mu1q/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin794v4mu1q/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminGamification&token=d11f220b5c22514ea4e404b77b985dca';
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
    <a class=\"logo pull-left\" href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminDashboard&amp;token=4e7f96f04078c6b7ad875bb499ef76b8\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Greita prieiga</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://sidonas.dev/admin794v4mu1q/index.php/module/manage?token=7c84ec732b3657cfeb8f106abcee62e4\"
                 data-item=\"Įdiegti moduliai\"
      >Įdiegti moduliai</a>
          <a class=\"dropdown-item\"
         href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCategories&amp;addcategory&amp;token=48aed1fb5b026e46d24e73778411849d\"
                 data-item=\"Nauja kategorija\"
      >Nauja kategorija</a>
          <a class=\"dropdown-item\"
         href=\"http://sidonas.dev/admin794v4mu1q/index.php/product/new?token=7c84ec732b3657cfeb8f106abcee62e4\"
                 data-item=\"Nauja prekė\"
      >Nauja prekė</a>
          <a class=\"dropdown-item\"
         href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=9c701d5849aa327c8361e64a54d02bdf\"
                 data-item=\"Naujas kuponas\"
      >Naujas kuponas</a>
          <a class=\"dropdown-item\"
         href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminOrders&amp;token=361ccdef9f6ce7c6559af3f4ceb8dc0a\"
                 data-item=\"Užsakymai\"
      >Užsakymai</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"194\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog?-DBK4Kr4TjOz3XwV48GM\"
        data-post-link=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminQuickAccesses&token=4aa7150453bf0ddd5d1fca9b54e06b21\"
        data-prompt-text=\"Įveskite pavadinimą šiai santrumpai:\"
        data-link=\" - Sąra&scaron;as\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Pridėti puslapį į greitą prieigą
      </a>
        <a class=\"dropdown-item\" href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminQuickAccesses&token=4aa7150453bf0ddd5d1fca9b54e06b21\">
      <i class=\"material-icons\">settings</i>
      Tvarkyti greitą prieigą
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin794v4mu1q/index.php?controller=AdminSearch&amp;token=01d47fe2251d1b72afd6eb3a18b7e71e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Paieška (pvz.: prekės kodas, kliento vardas...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Visur
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Visur\" href=\"#\" data-value=\"0\" data-placeholder=\"Ko jūs ieškote?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Visur</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalogas\" href=\"#\" data-value=\"1\" data-placeholder=\"Prekės pavadinimas, SKU, kodas...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalogas
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Klientai pagal vardą\" href=\"#\" data-value=\"2\" data-placeholder=\"El. paštas, vardas...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Klientai pagal vardą
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Klientai pagal IP adresą\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.80\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Klientai pagal IP adresą</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Užsakymai\" href=\"#\" data-value=\"3\" data-placeholder=\"Užsakymo ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Užsakymai
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Sąskaitos\" href=\"#\" data-value=\"4\" data-placeholder=\"Sąskaitos numeris\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Sąskaitos
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Krepšeliai\" href=\"#\" data-value=\"5\" data-placeholder=\"Krepšelio ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Krepšeliai
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Moduliai\" href=\"#\" data-value=\"7\" data-placeholder=\"Modulio pavadinimas\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Moduliai
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">PAIEŠKA<i class=\"material-icons\">search</i></button>
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
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/info%40anyideas.lt.jpg\" /><br>
      <span>Marius Šilenskis</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminEmployees&amp;token=c9d1636e006218c5b4236c6b911294d7&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Jūsų profilis
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminLogin&amp;token=1109c5d4bb640807dffe5bfdd3e453f9&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Atsijungti
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
              Užsakymai<span id=\"_nb_new_orders_\"></span>
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
              Klientai<span id=\"_nb_new_customers_\"></span>
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
              Pranešimas<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Šiuo metu naujų užsakymų nėra :(<br>
              Kaip apie kai kurias sezonines nuolaidas?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Šiuo metu naujų klientų nėra :(<br>
              Ar jūs svarstote prekiauti prekyvietėse?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Šiuo metu naujų žinučių nėra.<br>
              Atrodo, kad jūsų klientai yra laimingi :)
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
      nuo <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registruotas <strong>_date_add_</strong>
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
    <a class=\"link\" href=\"http://sidonas.dev/\" target= \"_blank\">Sidonas</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminDashboard&amp;token=4e7f96f04078c6b7ad875bb499ef76b8\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Skydelis</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Pardavimai</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminOrders&amp;token=361ccdef9f6ce7c6559af3f4ceb8dc0a\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Užsakymai
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminOrders&amp;token=361ccdef9f6ce7c6559af3f4ceb8dc0a\" class=\"link\"> Užsakymai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminInvoices&amp;token=a94932df75373ed2f39d4bddb0f9587d\" class=\"link\"> Sąskaitos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminSlip&amp;token=db77af79d91ef5ad2bd0586ee2d77961\" class=\"link\"> Grąžinimo kuponai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminDeliverySlip&amp;token=ae441b50531caeab7918a78111194950\" class=\"link\"> Pristatymo kvitai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCarts&amp;token=745f5a6b7f4e0d027deead4c76327184\" class=\"link\"> Prekių krepšeliai
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin794v4mu1q/index.php/product/catalog?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Katalogas
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin794v4mu1q/index.php/product/catalog?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\" class=\"link\"> Prekės
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCategories&amp;token=48aed1fb5b026e46d24e73778411849d\" class=\"link\"> Kategorijos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminTracking&amp;token=62a70871accea793ba3f6e5d6bea79cb\" class=\"link\"> Kontrolė
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminAttributesGroups&amp;token=0f0b7990259e5b3026349af478f3b30b\" class=\"link\"> Savybės ir ypatybės
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminManufacturers&amp;token=13d96136c01346b21ba52e80b8c1c934\" class=\"link\"> Prekių ženklai ir tiekėjai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminAttachments&amp;token=f3618b299d98532020e3742063bc1be0\" class=\"link\"> Failai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCartRules&amp;token=9c701d5849aa327c8361e64a54d02bdf\" class=\"link\"> Nuolaidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin794v4mu1q/index.php/stock/?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCustomers&amp;token=bdaf6276afea203677961893c97dea2b\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Klientai
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCustomers&amp;token=bdaf6276afea203677961893c97dea2b\" class=\"link\"> Klientai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminAddresses&amp;token=cbf199a608ae6e06808289d257c8e406\" class=\"link\"> Adresai
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCustomerThreads&amp;token=97cc2465d0a8c2f42768d5122e314c05\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Klientų aptarnavimas
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCustomerThreads&amp;token=97cc2465d0a8c2f42768d5122e314c05\" class=\"link\"> Klientų aptarnavimas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminOrderMessage&amp;token=2f66c1a923282792f626ea3384017cbd\" class=\"link\"> Užsakymo pranešimai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminReturn&amp;token=093cf30c33f252d4971f0753871636b1\" class=\"link\"> Prekių grąžinimai
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminStats&amp;token=ea0de3b9d9ef1ed00c70f50be95f3918\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistika
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Pritaikymai</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/admin794v4mu1q/index.php/module/catalog?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Moduliai
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin794v4mu1q/index.php/module/catalog?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\" class=\"link\"> Moduliai ir paslaugos
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminAddonsCatalog&amp;token=2e37b907c98f0bf45de87eed8a931880\" class=\"link\"> Modulių katalogas
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminThemes&amp;token=8c58ea0daacda729e37c3aea0c113508\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Išvaizda
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminThemes&amp;token=8c58ea0daacda729e37c3aea0c113508\" class=\"link\"> Tema ir logotipas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminThemesCatalog&amp;token=e21dc12f9e84453f2a9302dd58384385\" class=\"link\"> Temos katalogas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCmsContent&amp;token=6d4494451a04b0997b49bd4bc497d824\" class=\"link\"> Puslapiai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminModulesPositions&amp;token=ebb005699c00c9e75f94bd3ad2f25f1f\" class=\"link\"> Pozicijos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminImages&amp;token=61b5acbdd7ce5e3c604e572d8d611b58\" class=\"link\"> Paveiksliukų nustatymai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminLinkWidget&amp;token=d4e963a91f4f1134d23ac57d166f88bb\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCarriers&amp;token=e72cf470c2531f81f038f45a6d718001\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Pristatymas
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCarriers&amp;token=e72cf470c2531f81f038f45a6d718001\" class=\"link\"> Kurjeriai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminShipping&amp;token=b1db5196436129d89dfe422070fd7dfe\" class=\"link\"> Nustatymai
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPayment&amp;token=50c23bd213f4ad03375f2654c748198a\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Mokėjimas
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPayment&amp;token=50c23bd213f4ad03375f2654c748198a\" class=\"link\"> Mokėjimo būdai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPaymentPreferences&amp;token=346302f8e9d4b857465080728143e972\" class=\"link\"> Nustatymai
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminLocalization&amp;token=eb20be8ffd36d771c31512d4f7000e19\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Tarptautinis
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminLocalization&amp;token=eb20be8ffd36d771c31512d4f7000e19\" class=\"link\"> Lokalizacija
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCountries&amp;token=335e195fbe9868a5ca0e094a01375256\" class=\"link\"> Vietovės
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminTaxes&amp;token=b575bbc5918d99c3085c55b16c65a70f\" class=\"link\"> Mokesčiai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminTranslations&amp;token=d06240ebad22edf1bb5efd066e9f2f7d\" class=\"link\"> Vertimai
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Konfigūravimas</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPreferences&amp;token=bcad6b529547cbb0c5ac85f635618719\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parduotuvės nustatymai
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPreferences&amp;token=bcad6b529547cbb0c5ac85f635618719\" class=\"link\"> Pagrindiniai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminOrderPreferences&amp;token=43d7f0cf7335f64dc352939556cdda4e\" class=\"link\"> Užsakymų nustatymai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPPreferences&amp;token=e09c9b48142860b58aa35962265c3074\" class=\"link\"> Prekės
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminCustomerPreferences&amp;token=a1b9f9be7b9e1b98f3c3a19f61b50c89\" class=\"link\"> Klientų nustatymai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminContacts&amp;token=a6dfed45a4d52b086843c36e1001ff0b\" class=\"link\"> Kontaktai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminMeta&amp;token=271afa7f066bff8cd178b1d91b6d67bb\" class=\"link\"> Duomenų srautas ir SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminSearchConf&amp;token=b73b81a6ef1aa77e4e7a3c07147f25f6\" class=\"link\"> Paieška
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminGamification&amp;token=d11f220b5c22514ea4e404b77b985dca\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminInformation&amp;token=587cfd651d18aaf5c8a05be036be26ce\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Išplėstiniai parametrai
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminInformation&amp;token=587cfd651d18aaf5c8a05be036be26ce\" class=\"link\"> Informacija
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminPerformance&amp;token=169589e4e566d213ee990bd8bb66c952\" class=\"link\"> Našumas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminAdminPreferences&amp;token=f3a50d4bf03a924b483db693a2b165a7\" class=\"link\"> Administracija
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminEmails&amp;token=8d185271c94655ca0e467d75d3555549\" class=\"link\"> El. paštas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminImport&amp;token=d68567609f299dcebb45642987a3bbe4\" class=\"link\"> Importuoti
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminEmployees&amp;token=c9d1636e006218c5b4236c6b911294d7\" class=\"link\"> Darbuotojai
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminRequestSql&amp;token=496a98cfc46b9e6add259a5d38066389\" class=\"link\"> Duomenų bazė
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminLogs&amp;token=eb9f33c6888bd554dfcac57c239e21b2\" class=\"link\"> Įvykių žurnalas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminWebservice&amp;token=8fe2669206dc31e4cbcc9c20f12d3ff3\" class=\"link\"> Webservice&#039;as
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
      Pradėkite savo parduotuvę!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Tęsti</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Sustabdyti OnBoarding</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminParentModulesSf&amp;token=cd46ef01a5e260551f5a68bfd63ed530\">Moduliai</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Modulio pasirinkimas    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Įkelti modulį\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Įkelti modulį</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Prisijungti prie Addons prekyvietės\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Prisijungti prie Addons prekyvietės</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Pagalba\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin794v4mu1q/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Flt%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.2%2526country%253Dlt/Pagalba?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Pagalba</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab current\"
   href=\"/admin794v4mu1q/index.php/module/catalog?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\">Pasirinkimas</a>

                <a class=\"tab\"
   href=\"/admin794v4mu1q/index.php/module/manage?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\">Įdiegti moduliai</a>

                <a class=\"tab\"
   href=\"/admin794v4mu1q/index.php/module/notifications?_token=TmNo3LN2_X5CXoSTGfNFVDb-DBK4Kr4TjOz3XwV48GM\">Pranešimai  <div class=\"notification-container\">
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-LT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/lt/login?email=info%40anyideas.lt&amp;firstname=Marius&amp;lastname=%C5%A0ilenskis&amp;website=http%3A%2F%2Fsidonas.dev%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-LT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin794v4mu1q/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Prijunkite savo parduotuvę prie PrestaShop prekyvietės tam, kad galėtumėte automatiškai importuoti visus pirkimus iš Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Neturite paskyros?</h4>
\t\t\t\t\t\t<p class='text-justify'>Atraskite PrestaShop Addons jėgą! Naršykite PrestaShop oficialioje prekyvietėje ir rinkitės tarp 3500 skirtingų modulių. Išsirinkite parduotuvės temą, pagerinkite konversijos santykį, padidinkite srautus, suteikite vartotojams lojalumo apdovanojimus ir pagerinkite produktyvumą</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Prisijungti prie PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/lt/forgot-your-password\">Aš pamiršau savo slaptažodį</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/lt/login?email=info%40anyideas.lt&amp;firstname=Marius&amp;lastname=%C5%A0ilenskis&amp;website=http%3A%2F%2Fsidonas.dev%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-LT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tSukurti paskyrą
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Prisijungti
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
  <button class=\"btn btn-primary onboarding-button-next\">Tęsti</button>
  <a class=\"onboarding-button-shut-down\">Praleisti šį vadovą</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Sveiki atvyk\\u0119 \\u012f savo parudotuv\\u0119!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Sveiki! Mano vardas Prestonas ir a\\u0161 esu \\u010dia, kad jums parodyti aplink\\u0105.<\\/p>\\n    <p>\\u012evykdykite kelis b\\u016btunis \\u017eingsnius prie\\u0161 prad\\u0117dami kurti parduotuv\\u0119:\\n    Sukurkite pirm\\u0105j\\u0105 prek\\u0119, personalizuokite parduotuv\\u0119, konfig\\u016bruokite pristatym\\u0105 ir mok\\u0117jimus...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Prad\\u0117kime!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">V\\u0117liau<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Prad\\u0117ti<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Sukurkime pirm\\u0105sias j\\u016bs\\u0173 prekes\",\"subtitle\":{\"1\":\"K\\u0105 norite apie tai pasakyti? Pagalvokite, k\\u0105 klientai nor\\u0117t\\u0173 \\u017einoti.\",\"2\":\"Prid\\u0117ti ai\\u0161ki\\u0105 ir patraukli\\u0105 informacij\\u0105. Nesijaudinkite, j\\u016bs gal\\u0117site j\\u0105 redaguoti v\\u0117liau :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Suteikite prekei ry\\u0161k\\u0173 pavadinim\\u0105.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"U\\u017epildykite privalom\\u0105 informacij\\u0105 \\u0161iame skirtukyje. Kiti skirtukai yra skirti papildomai informacijai.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Prid\\u0117kite vien\\u0105 ar daugiau nuotrauk\\u0173, kad j\\u016bs\\u0173 prek\\u0117 atrodyt\\u0173 vilojan\\u010diai!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"U\\u017e kiek planuoji tai parduoti?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! J\\u016bs k\\u0105tik suk\\u016br\\u0117te pirm\\u0105j\\u0105 prek\\u0119. Atrodo gerai, ar ne?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Suteikite savo parduotuvei tapatumo\",\"subtitle\":{\"1\":\"Kaip norite, kad j\\u016bs\\u0173 parduotuv\\u0117 atrodyt\\u0173? Kas j\\u0105 daro toki\\u0105 ypating\\u0105?\",\"2\":\"Personalizuokite savo tem\\u0105 ar pasirinkite geriausi\\u0105 dizain\\u0105 i\\u0161 tem\\u0173 katalogo.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Geriausias kelias prad\\u0117ti yra prid\\u0117ti savo parduotuv\\u0117s logotip\\u0105 \\u010dia!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jei norite ka\\u017eko tikrai i\\u0161skirtinio, per\\u017ei\\u016br\\u0117kite tem\\u0173 katalog\\u0105!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Paruo\\u0161kite savo parduotuv\\u0119 mok\\u0117jimams\",\"subtitle\":{\"1\":\"Kaip norite, kad klientai jums mok\\u0117t\\u0173?\",\"2\":\"Pritaikykite savo pasi\\u016blymus savo rinkai: prid\\u0117kite populiariausius mok\\u0117jimo metodus klientams!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0160ios apmok\\u0117jimo galimyb\\u0117s jau yra pasiekiamos j\\u016bs\\u0173 klientams.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ir \\u010dia galite pasirinkti, kokius kitus mok\\u0117jimo b\\u016bdus prid\\u0117ti!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pasirinkite pristatymo b\\u016bdus\",\"subtitle\":{\"1\":\"Kaip norite pristatyti savo prekes?\",\"2\":\"Pasirinkite j\\u016bs\\u0173 klientams tinkamiausius pristatymo b\\u016bdus! Sukurkite savo kurjer\\u012f arba prid\\u0117kite modul\\u012f.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u010cia pateikti \\u0161iuo metu j\\u016bs\\u0173 parduotuv\\u0117je naudojami pristatymo b\\u016bdai.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Galite pasi\\u016blyti daugiau pristatymo b\\u016bd\\u0173 sukurdami papildomus kurjerius\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Papildykite savo parduotuv\\u0119 moduliais\",\"subtitle\":{\"1\":\"Prid\\u0117kite nauj\\u0173 funkcij\\u0173 arba tvarkykite jau esan\\u010dius modulius.\",\"2\":\"Kai kurie moduliai jau yra \\u012fdiegti, kiti mobuliai gali b\\u016bti nemokami arba mokami - nar\\u0161ykite ir su\\u017einokite, kas pasiekiama!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Atraskite m\\u016bs\\u0173 moduli\\u0173 pasirinkimus pirmame skirtukyje. Valdykite savo modulius antrame ir per\\u017ei\\u016br\\u0117kite prane\\u0161imus tre\\u010diame skirtukyje.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">Tau!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    J\\u016bs per\\u017ei\\u016br\\u0117jote pagrindus, bet yra dar daug daugiau k\\u0105 i\\u0161bandyti.<br \\/>\\n    Kai kurie i\\u0161tekliai gali jums pad\\u0117ti eiti toliau:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Pradedan\\u010diojo gidas<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forumas<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Mokymai<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Video vadovas<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">A\\u0161 pasiruo\\u0161\\u0119s<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminWelcome&token=cd389073d434c6148fd410c72d800505\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Ar pasiklydai?</p>    <p>Norėdami tęsti, paspauskite čia:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Tęsti</button>    </div>    <p>Jei norite sustabdyti mokymosi vadovą, paspauskite čia:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Baigti mokymosi vadovą</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">žingsnis <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Tęsti</button></div>');
    
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
  <h1>O ne!</h1>
  <p class=\"m-t-3\">
    Šio puslapio mobili versija šiuo metu negalima.
  </p>
  <p class=\"m-t-2\">
    Norėdami matyti šį puslapį naudokite kompiuterį tol, kol jis bus pritaikytas mobiliems įrenginiams.
  </p>
  <p class=\"m-t-2\">
    Ačiū.
  </p>
  <a href=\"http://sidonas.dev/admin794v4mu1q/index.php?controller=AdminDashboard&amp;token=4e7f96f04078c6b7ad875bb499ef76b8\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atgal
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Užkrovimo laikas: \"></i> 5.167s</span>
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
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-LT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontaktai
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-LT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Klaidų sekimas
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-LT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forumas
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-LT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Priedai
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-LT&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Mokymai
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-LT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/lt/login?email=info%40anyideas.lt&amp;firstname=Marius&amp;lastname=%C5%A0ilenskis&amp;website=http%3A%2F%2Fsidonas.dev%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-LT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin794v4mu1q/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Prijunkite savo parduotuvę prie PrestaShop prekyvietės tam, kad galėtumėte automatiškai importuoti visus pirkimus iš Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Neturite paskyros?</h4>
\t\t\t\t\t\t<p class='text-justify'>Atraskite PrestaShop Addons jėgą! Naršykite PrestaShop oficialioje prekyvietėje ir rinkitės tarp 3500 skirtingų modulių. Išsirinkite parduotuvės temą, pagerinkite konversijos santykį, padidinkite srautus, suteikite vartotojams lojalumo apdovanojimus ir pagerinkite produktyvumą</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Prisijungti prie PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/lt/forgot-your-password\">Aš pamiršau savo slaptažodį</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/lt/login?email=info%40anyideas.lt&amp;firstname=Marius&amp;lastname=%C5%A0ilenskis&amp;website=http%3A%2F%2Fsidonas.dev%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-LT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tSukurti paskyrą
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Prisijungti
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
        return "__string_template__7d941554b4bf42e756d417d7cdc72e5d6ec3bac0808570bdf03632952b6fdcb3";
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
        return new Twig_Source("", "__string_template__7d941554b4bf42e756d417d7cdc72e5d6ec3bac0808570bdf03632952b6fdcb3", "");
    }
}
