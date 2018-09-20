@extends('main')
@section('og_metas')
	<meta name='description' content="Dapper Dame by Haus Valeriaa. Uptown style for tomboys and ladies who'd rather be in a suit than a dress." />
  <meta name='keywords' content='style, fashion, house, haus, valeria, valeriaa, suits, jackets, evening, party, half coat, blazer, formal, casual, kenya, africa, avant garde' />
	<meta property="og:title" content="Dapper style by Haus Valeriaa" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://hausvaleriaa.co.ke" />
	<meta property="og:image" content="{{ URL::asset('img/ogmeta/haus_valeriaa_2.jpg') }}" />
	<meta property="og:image:secure_url" content="{{ URL::asset('img/ogmeta/haus_valeriaa_2.jpg') }}" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:alt" content="Dapper Dame by Haus Valeriaa. Uptown style for tomboys and ladies who'd rather dp a suit than a dress." />
	<meta property="og:description" content="Dapper Dame by Haus Valeriaa. Uptown style for tomboys and ladies who'd rather dp a suit than a dress." />
	<meta property="og:site_name" content="Haus Valeriaa" />
@endsection
@section('title','Home')
@section('class','cms-trends-page')
@section('content')

	<div class="wrapper">
		 <div class="main-container col1-layout">
				<div class="header-controls" id="headerControls">
					 <span class="controls-container">
					 </span>
				</div>
				<div class="std">
					 <p>
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('js/new/js/vendor/royalslider/royalslider.css') }}">
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('js/new/js/vendor/royalslider/skins/minimal-white/rs-minimal-white.css') }}">
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/new/main-home.css') }}"/>
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('js/new/vendors/swiper.css') }}"/>
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/new/new/style.css') }}"/>
							<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/new/main-home-new.css') }}"/>
							<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
					 <div class="preloader"></div>
					 <!-- new layout -->
					 <div class="cropp-home">
							<div id="swiperContainer" class="swiper-container">
								 <div id="croppPreloader" class="cropp-preloader isLoading">
										<div class="swiper-lazy-preloader"></div>
								 </div>
								 <div class="swiper-wrapper main-slider">
										<div class="swiper-slide">
											 <img alt="" src="{{ URL::asset('img/uploads/dapper-1.png') }}">
											 <a class="link-left" href="#"></a>
											 <a class="link-right" href="#"></a>
											 <img class="slider-header" alt=""
													src="{{ URL::asset('img/uploads/dapper-1-overlay.png') }}">
										</div>
										<div class="swiper-slide">
											 <img alt="" src="{{ URL::asset('img/uploads/dapper-2.png') }}">
											 <a class="link-left" href="#"></a>
											 <a class="link-right" href="#"></a>
											 <img class="slider-header" alt=""
													src="{{ URL::asset('img/uploads/dapper-2-overlay.png') }}">
										</div>
										<div class="swiper-slide">
											 <img alt="" src="{{ URL::asset('img/uploads/dapper-3.png') }}">
											 <a class="link-left" href="#"></a>
											 <a class="link-right" href="#"></a>
											 <img class="slider-header" alt=""
													src="{{ URL::asset('img/uploads/dapper-3-overlay.png') }}">
										</div>
										<div class="swiper-slide">
											 <img alt="" src="{{ URL::asset('img/uploads/dapper-4.png') }}">
											 <a class="link-left" href="#"></a>
											 <a class="link-right" href="#"></a>
											 <img class="slider-header" alt=""
													src="{{ URL::asset('img/uploads/dapper-4-overlay.png') }}">
										</div>
								 </div>
								 <!-- Add Pagination -->
								 <div class="swiper-pagination"></div>
								 <!-- Add Arrows -->
								 <div class="swiper-button-next"></div>
								 <div class="swiper-button-prev"></div>
							</div>
					 </div>
					 <!-- old layout -->
					 <div class="main-site-cropp" id="mainSiteCropp">
							<div class="container-fluid margin-auto">
								 <!-- slider row -->
								 <!-- Main 1 col -->
								 <div class="row">
										<!-- Lookbook -->
										<div class="col-md-4 col-sm-4 col-xs-12">
											 <a href="{{ url('woman') }}" class="box-md relative bg-image anim1"
													style="background-image:url({{ URL::asset('img/uploads/woman.jpg') }})">
											 <span class="box-overlay"></span>
											 <span class="box-action-button">WOMAN</span> </a>
											 </a>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											 <a href="{{ url('man') }}" class="box-md relative bg-image anim1"
													style="background-image:url({{ URL::asset('img/lwrsect/LOOKBOOK-TILE-WINTERAW16-BOY.jpg') }})">
											 <span class="box-overlay"></span>
											 <span class="box-action-button">MAN</span> </a>
											 </a>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12 ">
											 <a href="#" target="_blank" class="box-md relative bg-image anim1"
													style="background-image:url({{ URL::asset('img/uploads/aboutus.png') }})">
													<span class="box-overlay" style="width: 0;"></span>
													<span class="box-action-button">ABOUT US</span> </a>
											 </a>
										</div>
								 </div>
								 <div class="cropp-home">
										<div class="newsletter">
											 <span class="nl-header">FURTHER VIEWS OF OUR COLLECTION. FASHION NEWS, SPECIAL OFFERS AND OTHER SURPRISES. SIGN UP!</span>
											 <span class="nl-sigh-up">newsletter</span>
											 <form id="newsletterSubscribeHome" class="home-newsletter-subscribe"
													action="#" method="post">
													<input class="ai-subscription-place" id="aiSubscriptionPlace" type="hidden" name="subscriptionPlace" value="home_page">
													<input name="email" class="mail-input" id="email" type="email" placeholder="e-mail">
													<label class="control control-checkbox" for="newsletterCheckbox" data-checkbox>
														 <span class="terms-text">I accept</span> <a class="terms-link"
																href="{{ url('privacy') }}"
																target="_blank">the terms of newsletter</a>
														 <input type="checkbox" value="1" name="regulations" id="newsletterCheckbox">
														 <div class="control-indicator"></div>
													</label>
													<button class="newsletter-btn" type="submit">subscribe</button>
											 </form>
										</div>
								 </div>
							</div>
					 </div>
					 <script src="{{ URL::asset('js/new/js/vendor/royalslider/jquery.royalslider.min.js') }}"></script>
					 <script src="{{ URL::asset('js/new/js/vendor/TweenMax.min.js') }}"></script>
					 <script src="{{ URL::asset('js/new/vendors/swiper.min.js') }}"></script>
					 <script src="{{ URL::asset('js/new/js/main.js') }}" type="text/javascript"></script>
					 <script src="{{ URL::asset('js/new/js/swiper2.js') }}" type="text/javascript"></script>
					 </p>
				</div>
		 </div>
	</div>

@endsection
