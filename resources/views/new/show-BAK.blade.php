@extends('main')
@section('title','Woman')
@section('class','catalog-product-view catalog-product-view product-men-s-outer-jacket categorypath-chlopak-brand-new-arrivals-for-him category-brand-new-arrivals-for-him')
@section('active-header2','active')
@section('content')

      <div class="wrapper">
         <div class="main-container col1-layout">
            <div class="header-controls" id="headerControls">
               <span class="controls-container">
                  <div class="breadcrumbs">
                     <ul class="clearfix">
                        <li class="home">
                           <a href="{{ route('home') }}" title="Go to Home Page">Home</a>
                        </li>
                        <li class="category2479">
                           <a href="{{ route('woman') }}" title="">WOMAN</a>
                        </li>
                        <li class="category12073">
                           <a href="#" title="">NEWS</a>
                        </li>
                        <li class="product">
                           <span title="">Insulated jacket with hood</span>
                        </li>
                        <li class="products-quantity hidden">
                           <span>Number of products:</span>
                           <span id="productsQuantity"></span>
                        </li>
                     </ul>
                  </div>
               </span>
            </div>
            <div id="messages_product_view" class="messages-product-view"></div>
            <div class="product-view" id="productView">
               <div class="product-paginator">
                  <a href="#" class="go-to-categories">&laquo; Return</a>
                  <div class="product-counter">
                     <span class="product-number">1</span>
                     <span class="separator">/</span>
                     <span class="products-total-number">106</span>
                  </div>
                  <a href="#" class="go-to-next-product">&raquo;</a>
               </div>
               <form action="#" method="post" id="product_addtocart_form">
                  <input name="form_key" type="hidden" value="MdCfJVxIda7xmE5X" />
                  <div class="no-display">
                     <input type="hidden" name="product" value="1760465"/>
                     <input type="hidden" name="related_product" id="related-products-field" value=""/>
                  </div>
                  <div class="product-img-box">
                     <div id="productGalleryNav" class="product-gallery-nav">
                        <img src="http://via.placeholder.com/50x50/ff0000"
                           alt="">
                        <img src="http://via.placeholder.com/50x50/9f33ff"
                           alt="">
                        <img src="http://via.placeholder.com/50x50/55ff33"
                           alt="">
                        <img src="http://via.placeholder.com/50x50/33ffd7"
                           alt="">
                        <img src="http://via.placeholder.com/50x50/ffa533"
                           alt="">
                     </div>
                     <aside>
                        <div id="productGalleryImg" class="product-gallery-img">
                           <a>
                           <img src="http://via.placeholder.com/700x700/ff0000"
                              alt="">
                           <span class="fullscreen-image"></span>
                           </a>
                           <a>
                           <img src="http://via.placeholder.com/700x700/9f33ff"
                              alt="">
                           <span class="fullscreen-image"></span>
                           </a>
                           <a>
                           <img src="http://via.placeholder.com/700x700/55ff33"
                              alt="">
                           <span class="fullscreen-image"></span>
                           </a>
                           <a>
                           <img src="http://via.placeholder.com/700x700/33ffd7"
                              alt="">
                           <span class="fullscreen-image"></span>
                           </a>
                           <a>
                           <img src="http://via.placeholder.com/700x700/ffa533"
                              alt="">
                           <span class="fullscreen-image"></span>
                           </a>
                        </div>
                     </aside>
                     <div id="fullScreenProductGallery"  data-modal-id="fullScreenProductGalleryModal" class="fullscreen-carousel">
                        <div>
                           <img data-lazy="http://via.placeholder.com/1900x1900/ff0000"
                              alt=""
                              class="image-zoom">
                        </div>
                        <div>
                           <img data-lazy="http://via.placeholder.com/1900x1900/9f33ff"
                              alt=""
                              class="image-zoom">
                        </div>
                        <div>
                           <img data-lazy="http://via.placeholder.com/1900x1900/55ff33"
                              alt=""
                              class="image-zoom">
                        </div>
                        <div>
                           <img data-lazy="ttp://via.placeholder.com/1900x1900/33ffd7"
                              alt=""
                              class="image-zoom">
                        </div>
                        <div>
                           <img data-lazy="http://via.placeholder.com/1900x1900/ffa533"
                              alt=""
                              class="image-zoom">
                        </div>
                     </div>
                  </div>
                  <section class="product-info">
                     <div class="price-box">
                        <div class="price">
                           13,000 KES
                        </div>
                        <div class="sku">Online Price</div>
                     </div>
                     <div class="info-links">
                        <ul>
                           <li>
                              <a data-toggle="modal" data-target="delivery">Supply</a>
                              <div class="popup-content remodal" data-modal-id="delivery">
                                 <button data-remodal-action="close" class="close-button"></button>
                                 <h4 class="modal-title">Supply</h4>
                                 <h3></h3>
                                 <h3>Store is always available for free!</h3>
                                 <h3>Free shipping by standard courier for orders over 5000 KES!</h3>
                                 <p></p>
                                 <p><span style="text-decoration: underline;">Shipping costs:</span></p>
                                 <p>Courier Standard Online Payment:<strong> 200 KES</strong> (inc. VAT) <strong>2-3 business days</strong></p>
                                 <p>Courier Standard Payment for Pickup: <strong>250 KES</strong> <strong>PLN</strong> (inc. VAT)&nbsp;<strong>2-3 business days</strong></p>
                                 <p>Express delivery: <strong>550 KES</strong> (inc. VAT)<strong> 1-2 business days</strong></p>
                                 <p></p>
                              </div>
                           </li>
                           <li>
                              <a data-toggle="modal" data-target="returns">Returns</a>
                              <div class="popup-content remodal" data-modal-id="returns">
                                 <button data-remodal-action="close" class="close-button"></button>
                                 <h4 class="modal-title">Returns</h4>
                                 <p>within 30 days:</p>
                                 <p>- in any Haus Valeriaa partner store&nbsp;</p>
                                 <p>- in the store - fill in the online form and send the products</p>
                                 <p><a href="{{ url('return-and-exchange') }}" target="_blank">Learn more</a></p>
                              </div>
                           </li>
                           <li>
                              <a data-toggle="modal" data-target="details">Material composition</a>
                              <div class="popup-content remodal" data-modal-id="details">
                                 <button data-remodal-action="close" class="close-button"></button>
                                 <h4 class="modal-title">Material composition</h4>
                                 100% POLYESTER
                              </div>
                           </li>
                        </ul>
                     </div>
                     <h1 class="product-name">Insulated jacket with hood</h1>
                     <div class="additional-description">
                        Model height: 186 cm <br>Clothing size: M <br> FREE DELIVERY TO STORES
                     </div>
                     <div class="product-options" id="product-options-wrapper">
                        <div id="productColors"></div>
                        <script type="text/javascript">
                           (function() {
                               if(!window.getProductAdditionalData) {
                                   window.getProductAdditionalData = function() {
                                       return {
                                           colors: [{"active":false,"id":"1760455","url":"https:\/\/www.cropp.com\/pl\/pl\/chlopak\/brand-new-arrivals-for-him\/QZ594-99M\/men-s-outer-jacket","sample":"https:\/\/www.cropp.com\/media\/catalog\/product\/cache\/25\/a4e40ebdc3e371adff845072e1c73f37\/Q\/Z\/QZ594-99M-999.jpg","photo":{},"color_name":"czarny","color_css":"BLACK"},{"active":true,"id":"1760465","url":"https:\/\/www.cropp.com\/pl\/pl\/chlopak\/brand-new-arrivals-for-him\/QZ594-59M\/men-s-outer-jacket","sample":"https:\/\/www.cropp.com\/media\/catalog\/product\/cache\/25\/a4e40ebdc3e371adff845072e1c73f37\/Q\/Z\/QZ594-59M-999.jpg","photo":{},"color_name":"granatowy","color_css":"NAVY"},{"active":false,"id":"1760479","url":"https:\/\/www.cropp.com\/pl\/pl\/chlopak\/brand-new-arrivals-for-him\/QZ594-55X\/men-s-outer-jacket","sample":"https:\/\/www.cropp.com\/media\/catalog\/product\/cache\/25\/a4e40ebdc3e371adff845072e1c73f37\/Q\/Z\/QZ594-55X-999.jpg","photo":{},"color_name":"niebieski","color_css":"BLUE"},{"active":false,"id":"1760489","url":"https:\/\/www.cropp.com\/pl\/pl\/chlopak\/brand-new-arrivals-for-him\/QZ594-09M\/men-s-outer-jacket","sample":"https:\/\/www.cropp.com\/media\/catalog\/product\/cache\/25\/a4e40ebdc3e371adff845072e1c73f37\/Q\/Z\/QZ594-09M-999.jpg","photo":{},"color_name":"szary","color_css":"GREY"}]
                                       };
                                   }
                               }
                           })();
                        </script>
                        <div id="productSizes" class="product-sizes" data-size-table="41"></div>
                        <div class="popup-content remodal" data-modal-id="size-table" id="sizeTableModal">
                           <button data-remodal-action="close" class="close-button"></button>
                           <h4 class="modal-title">Size chart</h4>
                           <div class="size-table-window">
                              <div class="left"></div>
                           </div>
                        </div>
                        <script type="text/javascript">
                           (function() {
                               if(!window.getProductConfigurable) {
                                   window.getProductConfigurable = function() {
                                       return {"attributes":{"327":{"id":"327","code":"size_attr","label":"Size","options":[{"id":"51","label":"S","is_in_stock":1,"price":"0","oldPrice":"0","products":["1760469"]},{"id":"53","label":"M","is_in_stock":1,"price":"0","oldPrice":"0","products":["1760471"]},{"id":"55","label":"L","is_in_stock":1,"price":"0","oldPrice":"0","products":["1760473"]},{"id":"57","label":"XL","is_in_stock":1,"price":"0","oldPrice":"0","products":["1760475"]},{"id":"59","label":"XXL","is_in_stock":0,"price":"0","oldPrice":"0","products":["1760463"]}]}},"template":"#{price}\u00a0z\u0142","basePrice":"229.99","oldPrice":"229.99","productId":"1760465","chooseText":"Choose an Option...","taxConfig":{"includeTax":true,"showIncludeTax":true,"showBothPrices":false,"defaultTax":23,"currentTax":23,"inclTaxTitle":"Incl. Tax"}};
                                   }
                               }
                           })();
                        </script>
                     </div>
                     <div class="product-options-bottom">
                        <div class="add-to-cart">
                           <button type="button" title="Do koszyka"
                              id="addToCart"
                              class="button btn-cart fancy-btn show-tooltip"
                              disabled="disabled"
                              data-action="addToCart"
                              data-product-id="1760465"
                              data-uenc="aHR0cHM6Ly93d3cuY3JvcHAuY29tL3BsL3BsL2NobG9wYWsvYnJhbmQtbmV3LWFycml2YWxzLWZvci1oaW0_YmFuZXI9aGVfbmV3JnBsYWNlPWhvbWU,">
                           To shopping cart
                           <span class="bg-black"></span>
                           </button>
                           <div class="tooltip">Please select a size for your shopping cart</div>
                           <button type="button"
                              title="Notify about availability"
                              id="productAvailability"
                              class="button btn-cart-availability fancy-btn hidden"
                              data-product-id="1760465">
                           Notify me of availability
                           </button>
                        </div>
                        <div class="product-availability ">
                           <button type="button"
                              id="openSearchInStockButton"
                              disabled="disabled"
                              class="btn-search-in-stock"
                              data-product-id="1760465">
                           Find in a store
                           </button>
                           <div class="tooltip">Please check availability in store</div>
                        </div>
                        <section class="product-share">
                           <ul>
                              <li><button class="share-print" title="Drukuj" onclick="javascript:window.print(); return false;"></button></li>
                              <li>        <button class="share-twitter" title="twitter"
                                 onClick="window.open('//www.twitter.com/','_blank', 'width=700, height=300'); return false;"></button>
                              </li>
                              <li>    <button class="share-facebook" title="facebook" type="button" onclick="fbFeed(); return false;"></button></li>
                              <li>        <button class="share-pinterest"
                                 onClick="window.open('//www.pinterest.com/','_blank', 'width=700, height=300'); return false;"></button>
                              </li>
                           </ul>
                        </section>
                     </div>
                  </section>
               </form>
               <div class="recommended-products">
                  <h3 class="title">Recommended</h3>
                  <div>
                     <ul>
                        <li>
                           <a href="#" class="product-presentation" data-sku="RP231-00X">
                              <figure>
                                 <img src="http://via.placeholder.com/490x490/b4b1ac"
                                    data-src-front="http://via.placeholder.com/490x490/b4b1ac"
                                    data-src-back="http://via.placeholder.com/490x490/595857">
                                 <figcaption>
                                    <p>Smooth t-shirt</p>
                                    <div class="price">
                                       4,500 <small class="currency">KES</small>
                                    </div>
                                 </figcaption>
                              </figure>
                           </a>
                           <div class="item-controls">
                              <button type="button" data-pid="1664179" class="js-add-to-quickshop fancy-btn btn-gray" data-action="QuickShop" title="Do koszyka">
                              <i class="icon icon-cart icon-md"></i>
                              </button>
                           </div>
                        </li>
                        <li>
                           <a href="#" class="product-presentation" data-sku="RJ492-59X">
                              <figure>
                                 <img src="https://www.cropp.com/media/catalog/product/cache/73/small_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/J/RJ492-59X-020_1.jpg"
                                    data-src-front="https://www.cropp.com/media/catalog/product/cache/73/small_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/J/RJ492-59X-020_1.jpg"
                                    data-src-back="https://www.cropp.com/media/catalog/product/cache/73/back_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/J/RJ492-59X-001_1.jpg"
                                    alt="Buty sportowe">
                                 <figcaption>
                                    <p>Buty sportowe</p>
                                    <div class="price old-price">
                                       119,99                                            <small class="currency">PLN</small>
                                    </div>
                                    <div class="price special-price">
                                       69,99                                            <small class="currency">PLN</small>
                                    </div>
                                 </figcaption>
                              </figure>
                           </a>
                           <div class="item-controls">
                              <button type="button" data-pid="1706921" class="js-add-to-quickshop fancy-btn btn-gray" data-action="QuickShop" title="Do koszyka">
                              <i class="icon icon-cart icon-md"></i>
                              </button>
                           </div>
                        </li>
                        <li>
                           <a href="https://www.cropp.com/pl/pl/chlopak/brand-new-arrivals-for-him/RA782-50J/men-s-jeans-trousers" class="product-presentation" data-sku="RA782-50J">
                              <figure>
                                 <img src="https://www.cropp.com/media/catalog/product/cache/73/small_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/A/RA782-50J-001.jpg"
                                    data-src-front="https://www.cropp.com/media/catalog/product/cache/73/small_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/A/RA782-50J-001.jpg"
                                    data-src-back="https://www.cropp.com/media/catalog/product/cache/73/back_image/490x490/9df78eab33525d08d6e5fb8d27136e95/R/A/RA782-50J-002.jpg"
                                    alt="Jeansy z łatami">
                                 <figcaption>
                                    <p>Jeansy z łatami</p>
                                    <div class="price">
                                       129,99                                            <small class="currency">PLN</small>
                                    </div>
                                 </figcaption>
                              </figure>
                           </a>
                           <div class="item-controls">
                              <button type="button" data-pid="1760981" class="js-add-to-quickshop fancy-btn btn-gray" data-action="QuickShop" title="Do koszyka">
                              <i class="icon icon-cart icon-md"></i>
                              </button>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
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
                     PN-PT 9:00-19:00,<BR>SB 10:00-17:00<BR><BR><BR>
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
                        * I agree to the processing of my personal data by Haus Valeriaa with its registered office in Kenya. <BR></ br><BR></ br><BR>Data submission is voluntary, however, the lack of consent to the processing of personal data makes it impossible to answer the question. The customer has the right to access and correct their data.<BR></ br><BR></ br><BR><a href='{{ route('privacy') }}' target='_blank'>Go to privacy policy</a>                
                     </label>
                  </div>
                  <div class="form-group action-buttons">
                     <button class="btn fancy-btn" type="button">Send</button>
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
      @include('customercare')
@endsection