<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="*" />
      <title>@yield('title') | Haus Valeriaa</title>
      <link rel="icon" href="{{ URL::asset('fav/favicon.ico') }}" />
      <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('fav/apple-touch-icon-57x57.png') }}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('fav/apple-touch-icon-60x60.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('fav/apple-touch-icon-72x72.png') }}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('fav/apple-touch-icon-76x76.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('fav/apple-touch-icon-114x114.png') }}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('fav/apple-touch-icon-120x120.png') }}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('fav/apple-touch-icon-144x144.png') }}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('fav/apple-touch-icon-152x152.png') }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('fav/apple-touch-icon-180x180.png') }}">
      <link rel="icon" type="image/png" href="{{ URL::asset('fav/favicon-32x32.png') }}" sizes="32x32">
      <link rel="icon" type="image/png" href="{{ URL::asset('fav/favicon-194x194.png') }}" sizes="194x194">
      <link rel="icon" type="image/png" href="{{ URL::asset('fav/favicon-96x96.png') }}" sizes="96x96">
      <link rel="icon" type="image/png" href="{{ URL::asset('fav/android-chrome-192x192.png') }}" sizes="192x192">
      <link rel="icon" type="image/png" href="{{ URL::asset('fav/favicon-32x32.png') }}" sizes="16x16">
      <script>
         (function(global) {
             if (!global.getStage) {
                 global.getStage = function () {
                     return "PROD";
                 }
             }
         })(window);
      </script>
      <script type="text/javascript">
         (function (global) {
             var rules = {};
             global['getValidationRules'] = function() { return rules; };
         })(window);
      </script>
      @yield('stylesheets')
      <script type="text/javascript">
         //<![CDATA[
         optionalZipCountries = ["HK","IE","MO","PA"];
         //]]>
      </script>
      <script src="{{ URL::asset('js/numbers1.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/vendor.css') }}" media="all" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cropp.css') }}" media="all" />
      <script type="text/javascript" src="{{ URL::asset('js/vendor.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/cmspage.js') }}"></script>
  </head>
  <body class="@yield('class')">
      <noscript>
         <div class="global-site-notice noscript">
            <div class="notice-inner">
               <p>
                  <strong>JavaScript seems to be disabled in your browser.</strong><br />
                  You must have JavaScript enabled in your browser to utilize the functionality of this website.
               </p>
            </div>
         </div>
      </noscript>
      <header class="navbar" style="background-color: #00004d;">
         <div id="cookieNotice" class="cookie-notice hidden">
            <div class="cookie-container">
               <div class="cookie-message">
                  <p>
                     This site uses cookies for advertising and statistics purposes and for tailoring our services to the individual needs of users. You can change the settings for cookies in your web browser.
                     If you leave these settings unchanged, the cookies will be saved in the device memory.
                     Changing cookies settings may limit the functionality of your site.
                  </p>
               </div>
               <div class="cookie-image"></div>
               <button type="button" class="cookie-close" name="cookie_confirm">&times;</button>
            </div>
         </div>
         <div>
            <a href="{{ route('home') }}" class="logo">
            <img src="{{ URL::asset('img/lwrsect/logo-white22.png') }}" style="margin-top: 6px;">
            </a>
            <button class="menu-switcher" id="menuSwitcher">
               <div class="nav-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </button>
            <ul id="nav" class="nav">
               <li  class="level0 nav-1 first @yield('active-header1') level-top parent">
                  <a href="{{ url('man') }}"  class="level-top" ><span>MAN</span></a>
               <li  class="level0 nav-2 @yield('active-header2') level-top parent">
                  <a href="{{ url('woman') }}"  class="level-top" ><span>WOMAN</span></a>
               </li>
               <li  class="level0 nav-3 @yield('active-header3') level-top">
                  <a href="{{ url('kids') }}"  class="level-top" ><span>KIDS</span></a>
               </li>
               <li  class="level0 nav-4 @yield('active-header4') last level-top">
                  <a href="#"  class="level-top" ><span>BLOG</span></a>
               </li>
            </ul>
            <div class="account-menu">
               <ul>
                  <li class="language" id="showStoreSwitcherBoxButton" style="background-color: #00004d;">
                     <span class="language">
                        EN
                        <div class="store-switcher">
                           <div class="backdrop" id="storeSwitcherBackdrop"></div>
                           <div id="language-selector-content" class="store-switcher-wrapper">
                              <form action="#" method="post" id="language-selector" class="form store-switcher-content">
                                 <div class="arrow"></div>
                                 <input type="hidden" id="countrySetter" name="country" value="45" />
                                 <input type="hidden" name="enp" value="aHR0cHM6Ly93d3cuY3JvcHAuY29tL3BsL3BsL2R6aWV3Y3p5bmEva29sZWtjamEvYmx1emtpL1JWNTcwLTk5WC9sYWRpZXMtYmxvdXNl" />
                                 <input type="hidden" id="langSetter" name="language" value="73" />
                                 <fieldset class="country-switcher-group">
                                    <label>Country</label>
                                    <div class="select-wrapper">
                                       <select id="countrySelect" class='form-control dropdown country commercialSite' >
                                          <option  selected="selected" value="45" class='commercialSite'>
                                             United Kingdom</option>
                                          <option value="49" class=''>
                                             France</option>
                                          <option value="47" class=''>
                                             Germany</option>
                                          <option value="51" class=''>
                                             Spain</option>
                                       </select>
                                    </div>
                                 </fieldset>
                                 <fieldset class="language-switcher-group">
                                    <label>Language</label>
                                    <div data-country="country-45" class="language-item">
                                       <div class="select-wrapper">
                                          <select id="langSelect-45" class="form-control dropdown language">
                                             <option value="75" >
                                                English</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-49" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-49" class="form-control dropdown language">
                                             <option value="81" >
                                                French</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-47" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-47" class="form-control dropdown language">
                                             <option value="79" >
                                                German</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-51" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-51" class="form-control dropdown language">
                                             <option value="85" >
                                                Español</option>
                                          </select>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <div class="action-buttons-group">
                                    <button type="submit" id="sendStoreValuesButton" class="btn fancy-btn">
                                    OK                </button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </span>
                  </li>
                  <li class="search" id="showSearchForm" style="background-color: #00004d;color: #ffcc00;"></li>
                  <li class="{{ Auth::check() ? "my-account" : "my-account-loggedout"}}" id="myAccountButton" style="background-color: #00004d;">
                      <a href="{{ route('login') }}"></a>
                  </li>
                  <li class="cart" id="quickCart" style="background-color: #00004d;">
                     <a href="#"></a>
                  </li>
               </ul>
            </div>
         </div>
         <section class="search-container" id="searchBar">
            <form action="#" method="get" autocomplete="off">
               <div class="form-search">
                  <label for="search">Search Haus Valeriaa</label>
                  <input type="text"
                     name="q"
                     value=""
                     class="input-text"
                     maxlength="128"
                     placeholder="search phrase..."
                     >
                  <div class="buttons">
                     <button type="submit" title="Szukaj" class="btn btn-search"></button>
                     <button type="button" class="btn btn-close">&times;</button>
                  </div>
               </div>
            </form>
         </section>
      </header>

      @yield('content')

      <footer class="footer footer-collapsed" id="footer">
         <div class="footer-container">
            <div class="footer-bar" id="footerBar" data-static="cropp_footer_bar">
               <div class="toggle-button-container">
                  <div class="toggle-button" id="footerToggleButton"><span class="collapse-label">Collapse</span> <span class="expand-label">Expand</span> <i class="toggle-icon" style="color: #000000;">&nbsp;</i></div>
               </div>
               <div class="social-box">
                  <ul class="social-list">
                     <li><a href="https://www.facebook.com/" target="_blank"> <i class="svg-icon svg-icon-facebook jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.pinterest.com/" target="_blank"> <i class="svg-icon svg-icon-pinterest jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://instagram.com/" target="_blank"> <i class="svg-icon svg-icon-instagram jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://blog.-.com/" target="_blank"> <i class="svg-icon svg-icon-tumblr jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="https://vk.com/" target="_blank"> <i class="svg-icon svg-icon-vk jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.youtube.com/" target="_blank"> <i class="svg-icon svg-icon-youtube jrumble-shake">&nbsp;</i> </a></li>
                  </ul>
               </div>
               <div class="contact-box"><a href="#"> Phone </a> <i class="contact-icon">&nbsp;</i> <strong>+254 791 370 517</strong></div>
            </div>
            <div class="footer-content" id="footerContent" data-static="cropp_footer_content">
               <div class="links-list">
                  <h3><a href="#">Shopping guide</a></h3>
                  <ul>
                     <li><a href="#">How to buy - step by step</a></li>
                     <li><a href="{{ url('faq') }}">Frequently asked questions</a></li>
                     <li><a href="{{ url('size-table') }}">Size tables</a></li>
                     <li><a href="{{ url('forms-of-payment') }}">Forms of payment</a></li>
                     <li><a href="{{ url('shipping-cost-delivery') }}">Shipping, cost and delivery time</a></li>
                     <li><a href="{{ url('return-and-exchange') }}">Return and exchange</a></li>
                     <li><a href="{{ url('complaints') }}">Complaints</a></li>
                     <li><a href="{{ url('privacy') }}">Privacy policy</a></li>
                  </ul>
               </div>
               <div class="links-list">
                  <h3 class="newsletter-link"><a href="#">Newsletter</a></h3>
                  <ul>
                     <li><a href="#">Retailing</a></li>
                     <li><a href="{{ url('contact-us') }}">contacts</a></li>
                  </ul>
               </div>
               <div class="company-address" data-static="footer-address">
                  <p style="font-weight: bold;text-align: center;color: #000000;">Haus Valeriaa &reg;&trade; 2016-<script type="text/javascript">document.write(new Date().getFullYear())</script> &copy; Registered in Kenya.</p>
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="{{ URL::asset('js/cropp.js') }}"></script>
      <script>
         (function(){
             if (window.App) {
                 window.App.run();
             }
         })();
      </script>
      @yield('scripts')
  </body>
</html>
