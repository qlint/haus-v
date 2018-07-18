@extends('main')
@section('title','Privacy Policy')
@section('class','cms-page-view cms-polityka-prywatnosci')
@section('content')

<div class="wrapper">
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
   <div class="main-container">
      <div class="header-controls" id="headerControls">
         <span class="controls-container">
            <div class="breadcrumbs">
               <ul class="clearfix">
                  <li class="home">
                     <a href="{{ url('/') }}" title="Haus Valeriaa">Home</a>
                  </li>
                  <li class="cms_page">
                     <span title="Haus Valeriaa Privacy Policy">Privacy Policy</span>
                  </li>
                  <li class="products-quantity hidden">
                     <span>Number of products:</span>
                     <span id="productsQuantity"></span>
                  </li>
               </ul>
            </div>
         </span>
      </div>

      @include('sidebar')

      <div class="content">
         <div class="page-title">
            <h1>PRIVACY POLICY</h1>
         </div>
         <div class="std">
            <p>This site uses cookies. We use the information contained in the "cookies" files for advertising and statistical purposes and to customize our services to the individual needs of our users.</p>
            <p>You can change the settings for cookies in your web browser. If you leave these settings unchanged, the cookies will be stored in the device memory.</p>
            <p>Changing cookies settings may limit the functionality of your site.</p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection
