<!doctype html>
<html class="no-js" lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="robots" content="*" />
     <title>@yield('title') | Haus Valeriaa</title>
     <!-- og meta start -->
     @yield('og_metas')
     <!-- og meta end -->
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
      <script type="text/javascript" src="{{ URL::asset('js/polyfills89dd.js') }}"></script>
      <script>
         (function(global) {
             if (!global.getStage) {
                 global.getStage = function () {
                     return "PROD";
                 }
             }
         })(window);
      </script>

      <div id="pageLoaderContainer" class="loader-container hidden">
         <div class="column-1"></div>
         <div class="column-2"></div>
         <div class="column-3"></div>
      </div>
      <script type="text/javascript" src="{{ URL::asset('js/object_1.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/vendor89dd.css') }}" media="all" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cropp89dd.css') }}" media="all" />
      <script type="text/javascript" src="{{ URL::asset('js/vendor89dd.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/cmspage89dd.js') }}"></script>
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
                     We use information saved in the "cookie" files for advertising and statistics as well as for the website's better adopting to the individual needs of Users.
                     You can change "cookies" settings in Your web browser. If You leave these settings unchanged "cookies" will be stored in memory of the device You are using.
                     "Cookies" settings change may limit the functionality of the website.
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
                  <li class="language" style="background-color: #00004d;">
                     <a href="#" class="language">EN</a>
                  </li>
                  <li class="search" id="showSearchForm" style="background-color: #00004d;"></li>
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
                     placeholder="search phrase"
                     >
                  <div class="buttons">
                     <button type="submit" title="Search" class="btn btn-search"></button>
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
                  <div class="toggle-button" id="footerToggleButton"><span class="collapse-label">Collapse</span> <span class="expand-label">Expand</span> <i class="toggle-icon">&nbsp;</i></div>
               </div>
               <div class="social-box">
                  <ul class="social-list">
                     <li><a href="https://www.facebook.com/" target="_blank"> <i class="svg-icon svg-icon-facebook jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.pinterest.com/" target="_blank"> <i class="svg-icon svg-icon-pinterest jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://instagram.com/" target="_blank"> <i class="svg-icon svg-icon-instagram jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://blog.hausvaleriaa.co.ke/" target="_blank"> <i class="svg-icon svg-icon-tumblr jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="https://vk.com/" target="_blank"> <i class="svg-icon svg-icon-vk jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.youtube.com/" target="_blank"> <i class="svg-icon svg-icon-youtube jrumble-shake">&nbsp;</i> </a></li>
                  </ul>
               </div>
               <div class="contact-box"><a href="{{ url('contact-us') }}"> Customer Service <i class="contact-icon">&nbsp;</i> </a></div>
            </div>
            <div class="footer-content" id="footerContent" data-static="cropp_footer_content">
               <div class="links-list">
                  <h3><a href="#">Shopping guide</a></h3>
                  <ul>
                    <li><a href="{{ url('faq') }}">Frequently asked questions</a></li>
                    <li><a href="{{ url('size-table') }}">Size tables</a></li>
                    <li><a href="{{ url('forms-of-payment') }}">Forms of payment</a></li>
                    <li><a href="{{ url('shipping-cost-delivery') }}">Shipping, cost and delivery time</a></li>
                  </ul>
               </div>
               <div class="links-list">
                  <h3 class="footer-newsletter"><a href="#">Legal</a></h3>
                  <ul>
                    <li><a href="{{ url('contact-us') }}">contact Us</a></li>
                    <li><a href="{{ url('return-and-exchange') }}">Return and exchange</a></li>
                    <li><a href="{{ url('complaints') }}">Complaints</a></li>
                    <li><a href="{{ url('privacy') }}">Privacy policy</a></li>
                  </ul>
               </div>
               <div class="company-address" data-static="footer-address">
                 <p style="font-weight: bold;text-align: center;color: #000000;">Haus Valeriaa &reg;&trade; 2016-<script type="text/javascript">document.write(new Date().getFullYear())</script> &copy; Registered in Kenya.</p>
               </div>
            </div>
         </div>
      </footer>
      <div class="newsletter-popup" id="newsletterPopup" data-static="cropp-newsletter-popup" style="display: none;">
         <p>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="{{ URL::asset('newsletter/css/styles4cd3.css') }}" rel="stylesheet">
         <div class="newsletter-wrapper">
            <div class="newsletter-outer">
               <div class="newsletter-inner">
                  <div class="image"></div>
                  <div class="newsletter-content">
                     <h2>Stay Updated. Sign up for our  <strong>newsletter</strong></h2>
                     <form id="newsletterCmsPage" action="#" method="post" data-redirect="#">
                        <div class="">
                           <div class="input-wrapper">
                              <input id="newsletterMail" class="email error" type="text" name="email" placeholder="e-mail">
                              <button type="submit" class="newsletter-submit"></button>
                           </div>
                           <div class="checkbox-wrapper">
                              <input class="newsletter-terms error" id="newsletterTerms" type="checkbox"
                                 name="newsletterTerms">
                              <label for="newsletterTerms" class="checkbox-label">
                              I accept  <a href="{{ url('privacy') }}" target="_blank">the terms of newsletter</a>
                              <span class="validation-icon"></span>
                              </label>
                           </div>
                        </div>
                        <input class="ai-subscription-place" id="aiSubscriptionPlace" type="hidden" name="subscriptionPlace" value="site_newsletter">
                     </form>
                  </div>
                  <div class="close close-button" id="closeNewsletterPopupButton"></div>
               </div>
               <div class="lines">
                  <div class="line top"></div>
                  <div class="line right"></div>
                  <div class="line bottom"></div>
                  <div class="line left"></div>
               </div>
            </div>
         </div>
         <script src="{{ URL::asset('newsletter/js/scripts.js') }}"></script>
         </p>
      </div>
      <script>
         window.isNewsletterPopupTriggered = false;
      </script>
      <div class="rodo-popup-bg" id="rodoPopupOverlay">
         <div class="rodo-popup" id="rodoPopup">
            <div class="rodo-popup-close close-button"></div>
            <div class="rodo-img"></div>
            <div class="rodo-header">
               <div class="rodo-header-items">
                  <span> Your personal data</span>
                  <span class="colour-txt"> is safe with us</span>
               </div>
            </div>
            <div class="rodo-information">
               <div class="rodo-scrollable-box" id="rodoPolicyContent">
                  <div class="rodo-info-cms" data-static="rodo_policy_content">
                  </div>
               </div>
            </div>
            <div class="rodo-btn">
               <div class="button">
                  <button class="btn fancy-btn"
                     id="rodoSubmit"
                     type="button">I have read the above                </button>
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript" src="{{ URL::asset('js/cropp89dd.js') }}"></script>
      <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
      <script>
         (function(){
             if (window.App) {
                 window.App.run();
             }
         })();
      </script>
   </body>

</html>
