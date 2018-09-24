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
                                <span title="Collections in all categories">ALL</span>
                            </li>
            			</ul>
        			</div>
            	</span>
			</div>
			<div class="page-title category-title">
        		<h1>TREND</h1>
			</div>

			<div id="banner-category-2695-cc151" class="category-banner hidden">
			    <span class="close-button"></span>
			    <span class="baner-img"><p><img alt="" src="{{ URL::asset('img/lwrsect/banneer2.gif') }}" /></p></span>
			</div>

            <!-- Products -->
            <div id="products" class="products-grid clearfix">
               <div class="products-grid clearfix">
                 @foreach($newitems as $item)
                   <div class="item">
                      <div class="inner">
                         <div class="product-content product-active">
                            <div class="product-presentation">
                               <div class="product-image" style="background-color:#000000;">
                                 <img class="img-responsive" style="" data-image-front="{{ $item->img1920 }}" data-image-back="{{ $item->img1280 }}" alt="{{ $item->description }}" src="{{ $item->img1024 }}">
                               </div>
                               <a href="/new/{{ $item->id }}" class="product-link"></a>
                            </div>
                            <div class="product-caption">
                               <h3>{{ $item->name }}</h3>
                               <div class="price-box">
                                  <span class="price">
                                     {{ $item->price }} KES
                                  </span>
                               </div>
                            </div>
                            <button class="fancy-btn btn-open-quickshop"></button>
                         </div>
                      </div>
                   </div>
  							 @endforeach
                  {{-- <div class="item">
                     <div class="inner">
                        <div class="product-content product-active">
                           <div class="product-presentation">
                              <div class="product-image">
                                <img data-image-front="{{ URL::asset('img/2pc.png') }}" data-image-back="{{ URL::asset('img/3pc.png') }}" alt="" src="{{ URL::asset('img/2pc.png') }}">
                              </div>
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
                  </div> --}}

               </div>
            </div>
            <!-- End of Products -->

        </div>

        @include('mainsidebar')
	</div>


	@include('customercare')

@endsection
