@extends('main')
@section('title','Man')
@section('class','catalog-category-view categorypath-chlopak-kolekcja-kurtki-plaszcze category-kurtki-plaszcze')
@section('active-header1','active')
@section('content')

<div class="wrapper">
        
        <div class="main-container">
            <div class="header-controls" id="headerControls">
    			<span class="controls-container">
                	<div class="breadcrumbs">
            			<ul class="clearfix">
                            <li class="home">
                                <a href="{{ route('home') }}" title="Go to Home Page">Home</a>
                            </li>
                            <li class="category2479">
                                <a href="{{ url('man') }}" title="Men's Designs - Haus Valeriaa">MAN</a>
                            </li>
                            <li class="category2683">
                                <a href="#" title="">COLLECTION</a>
                            </li>
                            <li class="category2695">
                                <span title="JACKETS, VESTS">JACKETS, COATS</span>
                            </li>
            			</ul>
        			</div>
            	</span>
			</div>
			<div class="page-title category-title">
        		<h1>JACKETS, COATS</h1>
			</div>

			<div id="banner-category-2695-cc151" class="category-banner hidden">
			    <span class="close-button"></span>
			    <span class="baner-img"><p><img alt="" src="{{ URL::asset('img/lwrsect/banneer2.gif') }}" /></p></span>
			</div>

            <!-- Products -->
            <div id="products" class="products-grid clearfix">
               <div class="products-grid clearfix">
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product One</h3>
                              <div class="price-box">
                                 <span class="price">
                                    13,000 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Two</h3>
                              <div class="price-box">
                                 <span class="price">
                                    8,000 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1757119"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Three</h3>
                              <div class="price-box">
                                 <span class="price">
                                    10,500 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1760593"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Four</h3>
                              <div class="price-box">
                                 <span class="price">
                                    9,700 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1763347"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Five</h3>
                              <div class="price-box">
                                 <span class="price">
                                    12,100 KES
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1755219"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Six</h3>
                              <div class="price-box">
                                 <span class="price">
                                    10,700 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1764679"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#"></a>
                           </div>
                           <div class="product-caption">
                              <h3>product Seven</h3>
                              <div class="price-box">
                                 <span class="price">
                                    7,200 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1705777"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Eight</h3>
                              <div class="price-box">
                                 <span class="price">
                                    8,300 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1705881"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Nine</h3>
                              <div class="price-box">
                                 <span class="price">
                                    11,400 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1762615"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Ten</h3>
                              <div class="price-box">
                                 <span class="price">
                                    5,000 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1760547"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Eleven</h3>
                              <div class="price-box">
                                 <span class="price">
                                    6,250 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1705893"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Twelve</h3>
                              <div class="price-box">
                                 <span class="price">
                                    4,500 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1692101"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Thirteen</h3>
                              <div class="price-box">
                                 <span class="price">
                                    7,100 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1755233"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Fourteen</h3>
                              <div class="price-box">
                                 <span class="price">
                                    8,750 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1762619"></button>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image"><img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}"></div>
                              <a href="#" class="product-link"></a>
                           </div>
                           <div class="product-caption">
                              <h3>Product Fifteen</h3>
                              <div class="price-box">
                                 <span class="price">
                                    9,900 KES
                                 </span>
                              </div>
                           </div>
                           <button class="fancy-btn btn-open-quickshop" data-action="QuickShop" data-pid="1692123"></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End of Products -->

        </div>

        @include('mainsidebar')
	</div>


	@include('customercare')

@endsection