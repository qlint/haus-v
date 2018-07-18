<!doctype html>
<html class="no-js" lang="pl">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="*" />
      <title>Prototype</title>
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
  <body class="cms-trends-page">
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
      <header class="navbar">
         <div id="cookieNotice" class="cookie-notice hidden">
            <div class="cookie-container">
               <div class="cookie-message">
                  <p>
                     Ta strona używa plików „cookies". Informacji zarejestrowanych w plikach "cookies" używamy m.in.
                     w celach reklamowych i statystycznych oraz w celu dostosowania naszych serwisów do indywidualnych
                     potrzeb Użytkowników. Możesz zmienić ustawienia dotyczące "cookies" w swojej przeglądarce internetowej.
                     Jeżeli pozostawisz te ustawienia bez zmian pliki cookies zostaną zapisane w pamięci urządzenia.
                     Zmiana ustawień plików "cookies" może ograniczyć funkcjonalność serwisu.
                  </p>
               </div>
               <div class="cookie-image"></div>
               <button type="button" class="cookie-close" name="cookie_confirm">&times;</button>
            </div>
         </div>
         <div>
            <a href="https://www.cropp.com/pl/pl/" class="logo">
               <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="82" height="18" viewBox="0 0 642 141" version="1.1">
                  <g transform="translate(-67.271404,-314.63049)">
                     <path d="m265.9 434.9-20.7-20.7-8.3 0-8.3 0 0 16.2 0 16.2-14.7 0-14.7 0 0-65.7 0-65.7 39.1 0 39.1 0 12.2 12.2 12.2 12.2 0 25.2 0 25.2-10.2 10.2-10.2 10.2 12.6 12.6 12.6 12.6-10.1 10-10.1 10-20.7-20.7zm2.5-51.7 3.5-3.4 0-14.7 0-14.7-3.7-3.8-3.7-3.8-17.9 0-17.9 0 0 21.9 0 21.9 18.1 0 18.1 0 3.5-3.4zm-189 51.3-12.1-12.2 0-41.4 0-41.4 12.2-12.2 12.2-12.2 27.2 0 27.2 0 11.9 11.8 11.9 11.8 0 14.9 0 14.9-14.7 0-14.7 0 0-9.2 0-9.2-3.8-3.7-3.8-3.7-14.4 0-14.4 0-3.4 3.5-3.4 3.5 0 31.2 0 31.2 3.5 3.4 3.5 3.4 14.7 0 14.7 0 3.5-3.4 3.5-3.4 0-8.3 0-8.3 14.7 0 14.7 0 0 13.7 0 13.7-11.9 11.8-11.9 11.8-27.3 0-27.3 0-12.1-12.2zm263.7-6.9-19-19.1 0-17.1 0-17.1 29.6-29.5 29.6-29.5 16.5 0 16.5 0 19.3 19.4 19.3 19.4 0 17.1 0 17.1-29.3 29.2-29.3 29.2-17.1 0-17.1 0-19-19.1zm62.1-31.2 21.4-21.5 0-5.1 0-5.1-10.3-10.4-10.3-10.4-5.1 0-5.1 0-21.8 21.7-21.8 21.7 0 4.8 0 4.8 10.3 10.4 10.3 10.4 5.4 0 5.4 0 21.4-21.5zm71.8-15.4 0-65.7 39.1 0 39.1 0 11.9 11.8 11.9 11.8 0 27.3 0 27.3-11.9 11.8-11.9 11.8-24.4 0-24.4 0 0 14.7 0 14.7-14.7 0-14.7 0 0-65.7zm69.1 5.3 3.5-3.4 0-16.2 0-16.2-3.7-3.8-3.7-3.8-17.9 0-17.9 0 0 23.4 0 23.4 18.1 0 18.1 0 3.5-3.4zm60.6-5.1 0.2-65.5 39-0.2 39-0.2 12.2 12.1 12.2 12.1 0 27 0 27-11.9 11.8-11.9 11.8-24.4 0-24.4 0 0 14.7 0 14.7-15 0-15 0 0.2-65.5zm69.6 5.1 3.5-3.4 0-16.2 0-16.2-3.7-3.8-3.7-3.8-17.9 0-17.9 0 0 23.4 0 23.4 18.1 0 18.1 0 3.5-3.4z" fill="#fff"/>
                  </g>
               </svg>
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
               <li  class="level0 nav-1 first active level-top parent">
                  <a href="#"  class="level-top" ><span>MAN</span></a>
               <li  class="level0 nav-2 level-top parent">
                  <a href="#"  class="level-top" ><span>WOMAN</span></a>
               </li>
               <li  class="level0 nav-3 level-top">
                  <a href="#"  class="level-top" ><span>KIDS</span></a>
               </li>
               <li  class="level0 nav-4 last level-top">
                  <a href="#"  class="level-top" ><span>ACCESSORIES</span></a>
               </li>
            </ul>
            <div class="account-menu">
               <ul>
                  <li class="language" id="showStoreSwitcherBoxButton">
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
                                    <label>
                                    Kraj                </label>
                                    <div class="select-wrapper">
                                       <select id="countrySelect" class='form-control dropdown country commercialSite' >
                                          <option  selected="selected"                                value="45"
                                             class='commercialSite'>
                                             Polska
                                          </option>
                                          <option                                 value="49"
                                             class='commercialSite'>
                                             Česká republika
                                          </option>
                                          <option                                 value="47"
                                             class=''>
                                             Россия
                                          </option>
                                          <option                                 value="51"
                                             class=''>
                                             Other Countries
                                          </option>
                                          <option                                 value="113"
                                             class='commercialSite'>
                                             Slovensko
                                          </option>
                                          <option                                 value="115"
                                             class='commercialSite'>
                                             România
                                          </option>
                                          <option                                 value="117"
                                             class='commercialSite'>
                                             Magyarország
                                          </option>
                                          <option                                 value="119"
                                             class='commercialSite'>
                                             Deutschland
                                          </option>
                                          <option                                 value="999"
                                             class='commercialSite'>
                                             Latvija
                                          </option>
                                          <option                                 value="1001"
                                             class='commercialSite'>
                                             Lietuva
                                          </option>
                                          <option                                 value="1003"
                                             class='commercialSite'>
                                             Eesti
                                          </option>
                                       </select>
                                    </div>
                                 </fieldset>
                                 <fieldset class="language-switcher-group">
                                    <label>
                                    Język                </label>
                                    <div data-country="country-45" class="language-item">
                                       <div class="select-wrapper">
                                          <select id="langSelect-45" class="form-control dropdown language">
                                             <option value="75" >
                                                English
                                             </option>
                                             <option value="73"  selected="selected">
                                                polski
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-49" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-49" class="form-control dropdown language">
                                             <option value="81" >
                                                čeština
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-47" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-47" class="form-control dropdown language">
                                             <option value="79" >
                                                English
                                             </option>
                                             <option value="77" >
                                                русский
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-51" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-51" class="form-control dropdown language">
                                             <option value="85" >
                                                English
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-113" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-113" class="form-control dropdown language">
                                             <option value="169" >
                                                slovenčina
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-115" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-115" class="form-control dropdown language">
                                             <option value="171" >
                                                română
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-117" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-117" class="form-control dropdown language">
                                             <option value="173" >
                                                magyar
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-119" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-119" class="form-control dropdown language">
                                             <option value="175" >
                                                Deutsch
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-999" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-999" class="form-control dropdown language">
                                             <option value="1001" >
                                                latviešu
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-1001" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-1001" class="form-control dropdown language">
                                             <option value="1003" >
                                                lietuvių
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div data-country="country-1003" class="language-item hidden">
                                       <div class="select-wrapper">
                                          <select id="langSelect-1003" class="form-control dropdown language">
                                             <option value="1005" >
                                                eesti
                                             </option>
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
                  <li class="search" id="showSearchForm"></li>
                  <li class="my-account" id="myAccountButton">
                  </li>
                  <li class="cart" id="quickCart">
                     <a href="https://www.cropp.com/pl/pl/checkout/cart/"></a>
                     <div class="arrow-shaped-bottom"></div>
                  </li>
               </ul>
            </div>
         </div>
         <section class="search-container" id="searchBar">
            <form action="https://www.cropp.com/pl/pl/catalogsearch/result/" method="get" autocomplete="off">
               <div class="form-search">
                  <label for="search">Wpisz szukaną frazę</label>
                  <input type="text"
                     name="q"
                     value=""
                     class="input-text"
                     maxlength="128"
                     placeholder="szukana fraza..."
                     >
                  <div class="buttons">
                     <button type="submit" title="Szukaj" class="btn btn-search"></button>
                     <button type="button" class="btn btn-close">&times;</button>
                  </div>
               </div>
            </form>
         </section>
      </header>
      <div class="wrapper">
         <div class="main-container col1-layout">
            <div class="header-controls" id="headerControls">
               <span class="controls-container">
               </span>
            </div>
            <div class="std">
               <p>
                  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/royalslider.css') }}">
                  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/rs-minimal-white.css') }}">
                  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main-home.css') }}" />
               <div class="preloader"></div>
               <div class="main-site-cropp" id="mainSiteCropp">
                  <div class="container-fluid margin-auto">
                     <!-- slider row -->
                     <div class="row">
                        <!-- Main 1 col -->
                        <div class="col-md-8">
                           <div class="row">
                              <!-- Main Slider -->
                              <div class="col-md-12">
                                 <div class="box-md relative slider anim1">
                                    <div id="main-slider" class="royalSlider heroSlider rsMinW">
                                       <div class="rsContent">
                                          <a class="rsImg" href="/media/SHARED/stronywizerunkowe/cropp/home-page/assets/img/carousel/MSSAW17_GIRL_TLO.png" alt=""></a>
                                          <a class="rsLink" href="/pl/pl/dziewczyna/mid-season-sale/view-all?baner=mss_girl&place=home"></a>
                                          <img src="/media/SHARED/stronywizerunkowe/cropp/home-page/assets/img/carousel/MSS-header-GIRL-PL.png" class="rsABlock"
                                             style="position:absolute; top:0%; left:0%;width:100%">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- JS -->
               <script src="{{ URL::asset('js/SmoothScroll_v0.9.9.js') }}" type="text/javascript"></script>
               <script src="{{ URL::asset('js/jquery.royalslider.min.js') }}"></script>
               <script src="{{ URL::asset('js/TweenMax.min.js') }}"></script>
               <script src="{{ URL::asset('js/main.js') }}" type="text/javascript"></script>
               </p>
            </div>
         </div>
      </div>
      <div class="customer-care-modal-wrapper">
         <div class="customer-service" data-modal-id="customer-care">
            <button data-remodal-action="close" class="close-button"></button>
            <h4 class="modal-title">Obsługa klienta</h4>
            <aside>
               <h4 class="section-title">Infolinia</h4>
               <div class="helpline-section">
                  <div class="helpline-hours">
                     PN-PT 9:00-19:00,<BR>SB 11:00-15:00<BR><BR><BR>
                  </div>
                  <div class="helpline-phone">
                     800 802 020
                  </div>
               </div>
               <div class="helpline-section">
                  <div class="helpline-address">
                     LPP S.A.<BR>ul. Łąkowa 39/44<BR>80-769 Gdańsk<BR>Sąd Rejonowy Gdańsk-Północ w Gdańsku VII Wydział Gospodarczy<BR>Kapitał zakładowy 3 662 246 PLN (zapłacony w całości)<BR>REGON: 190852164
                  </div>
               </div>
            </aside>
            <section>
               <h4 class="section-title">Skontaktuj się z nami</h4>
               <form data-action="https://www.cropp.com/pl/pl/contacts/index/post/" id="contactForm" method="post" class="form">
                  <div class="form-group ">
                     <label class="control-label" for="firstname">Imię*</label>
                     <div class="input-icon ">
                        <input class="form-control"
                           type="text"
                           maxlength="30"
                           name="firstname"
                           id="firstname"
                           title="Imię"
                           placeholder="Imię"
                           value=""
                           data-error="Musisz wpisać swoje imię"
                           data-valid='{"type":"name"}'
                           data-helper="Wpisz swoje imię">
                     </div>
                  </div>
                  <div class="form-group ">
                     <label class="control-label" for="lastname">Nazwisko*</label>
                     <div class="input-icon ">
                        <input class="form-control"
                           type="text"
                           maxlength="30"
                           name="lastname"
                           id="lastname"
                           title="Nazwisko"
                           placeholder="Nazwisko"
                           value=""
                           data-error="Musisz wpisać swoje nazwisko"
                           data-valid='{"type":"name"}'
                           data-helper="Wprowadź swoje nazwisko">
                     </div>
                  </div>
                  <div class="form-group ">
                     <label class="control-label" for="email">E-Mail*</label>
                     <div class="input-icon">
                        <input class="form-control"
                           type="text"
                           name="customer_email"
                           id="customer_email"
                           title="E-Mail"
                           placeholder="E-Mail"
                           value=""
                           data-error="Musisz wpisać swój email"
                           data-valid='{"type":"email"}'
                           data-helper="Wprowadź adres e-mail">
                     </div>
                  </div>
                  <div class="form-group select-group">
                     <label class="control-label" for="email">Wybierz dział*</label>
                     <div class="select">
                        <select name="departaments">
                           <option selected="selected" disabled value="0">Wybierz dział</option>
                        </select>
                        <div class="select-arrow"></div>
                     </div>
                  </div>
                  <div class="form-group select-group">
                     <label class="control-label" for="email">Wybierz temat*</label>
                     <div class="select">
                        <select name="subjects"></select>
                        <div class="select-arrow"></div>
                     </div>
                  </div>
                  <div class="form-group textarea-group">
                     <label class="control-label">Komentarz*</label>
                     <textarea class="form-control"
                        name="comment"
                        title="Komentarz"
                        cols="5" rows="3"
                        data-valid='{"type":"text", "required": 1}'
                        data-error="Musisz wpisać swoją wiadomość"
                        data-helper="Wpisz wiadomość"></textarea>
                  </div>
                  <div class="form-group required-fields-info">
                     <h5>* Pola Wymagane</h5>
                  </div>
                  <div class="form-group checkbox-list checkbox-agree">
                     <label class="control control-checkbox">
                        <input type="checkbox" name="agree" id="checkboxAgree">
                        <div class="control-indicator"></div>
                        * Wyrażam zgodę na przetwarzanie moich danych osobowych przez LPP S.A. z siedzibą w Gdańsku ul. Łąkowa 39/44. <BR></ br><BR></ br><BR>Podanie danych jest dobrowolne, jednakże brak zgody na przetwarzanie danych osobowych uniemożliwia udzielenie odpowiedzi na pytanie. Klientowi przysługuje prawo dostępu do swoich danych i ich poprawiania.<BR></ br><BR></ br><BR><a href='{{ route('full-privacy-policy') }}' target='_blank'>Przejdź do regulaminu</a>
                     </label>
                  </div>
                  <div class="form-group action-buttons">
                     <button class="btn fancy-btn" type="button">Wyślij</button>
                  </div>
               </form>
            </section>
         </div>
         <script type="text/javascript">
            (function() {
                if(!window.getDepartaments) {
                    window.getDepartaments = function() {
                        return {"185":{"label":"Sklep ONLINE","topics":{"0":"Wybierz temat","1":"Uwagi dotyczące strony Sklepu Online","3":"Zwroty lub reklamacje","5":"Zamówienia","7":"Pomoc przy zakupach","9":"Informacje dotyczące artykułów"}},"187":{"label":"Sklepy stacjonarne - Obsługa Klienta","topics":{"0":"Wybierz temat","11":"Obsługa w salonach Cropp"}}};
                    }
                }
            })();
         </script>
      </div>
      <footer class="footer footer-collapsed" id="footer">
         <div class="footer-container">
            <div class="footer-bar" id="footerBar" data-static="cropp_footer_bar">
               <div class="toggle-button-container">
                  <div class="toggle-button" id="footerToggleButton"><span class="collapse-label">Zwiń</span> <span class="expand-label">Rozwiń</span> <i class="toggle-icon">&nbsp;</i></div>
               </div>
               <div class="social-box">
                  <ul class="social-list">
                     <li><a href="https://www.facebook.com/Cropp" target="_blank"> <i class="svg-icon svg-icon-facebook jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.pinterest.com/croppclothing/" target="_blank"> <i class="svg-icon svg-icon-pinterest jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://instagram.com/cropp_clothing" target="_blank"> <i class="svg-icon svg-icon-instagram jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://blog.cropp.com/" target="_blank"> <i class="svg-icon svg-icon-tumblr jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="https://vk.com/mycropp" target="_blank"> <i class="svg-icon svg-icon-vk jrumble-shake">&nbsp;</i> </a></li>
                     <li><a href="http://www.youtube.com/user/CroppTV" target="_blank"> <i class="svg-icon svg-icon-youtube jrumble-shake">&nbsp;</i> </a></li>
                  </ul>
               </div>
               <div class="contact-box"><a href="https://www.cropp.com/pl/pl/contacts"> Bezpłatna infolinia </a> <i class="contact-icon">&nbsp;</i> <strong>800 802 020</strong></div>
            </div>
            <div class="footer-content" id="footerContent" data-static="cropp_footer_content">
               <div class="links-list">
                  <h3><a href="https://www.cropp.com/pl/pl/jak-kupowac-2">Przewodnik po zakupach</a></h3>
                  <ul>
                     <li><a href="https://www.cropp.com/pl/pl/jak-kupowac-2">Jak kupować - krok po kroku</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/faq">Często zadawane pytania</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/tabele-rozmiarowe">Tabele rozmiarowe</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/formy-platnosci">Formy płatności</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/dostawa">Wysyłka, koszt i czas dostawy</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/zwroty">Zwrot i wymiana</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/zwroty-salony">Zwrot i wymiana - salony</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/regulamin">Regulamin</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/regulamin-promocji-play">Regulamin promocji PLAY</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/reklamacje">Reklamacje</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/ceny-w-salonach">Ceny w salonach</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/polityka-prywatnosci">Polityka prywatności</a></li>
                  </ul>
               </div>
               <div class="links-list">
                  <h3 class="newsletter-link"><a href="https://www.cropp.com/pl/pl/newsletter">Newsletter</a></h3>
                  <ul>
                     <li><a href="https://www.cropp.com/pl/pl/storelocator/">Sklepy</a></li>
                     <li><a href="https://www.cropp.com/pl/pl/contacts/">Kontakt</a></li>
                  </ul>
               </div>
               <div class="company-address" data-static="footer-address">
                  <p>LPP S.A., ul. Łąkowa 39/44, 80‑769 Gdańsk, Polska, zarejestrowana przez Sąd Rejonowy Gdańsk-P&oacute;łnoc w&nbsp;Gdańsku, KRS:&nbsp;0000000778, kapitał zakładowy 3.662.246&nbsp;PLN (zapłacony w&nbsp;całości), NIP:&nbsp;583‑10‑14‑898, REGON:&nbsp;190852164</p>
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
  </body>
</html>
