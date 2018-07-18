@extends('main')
@section('title','Complaints')
@section('class','cms-page-view cms-reklamacje')
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
                     <a href="{{ url('/') }}" title="Go to Home Page">Home</a>
                  </li>
                  <li class="cms_page">
                     <span title="Complaints - Haus Valeriaa">Complaints</span>
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
            <h1>Complaints</h1>
         </div>
         <div class="std">
            <p>A defect complaint can be filed within two years from the date of purchase. You can advertise your products online in two ways:</p>
            <p>Prepare only the product for the complaint and information that will allow us to confirm the purchase - such as receipt, invoice (can be photocopy).</p>
            <p>You can also submit your products to our store by following the instructions:</p>
            <p>fill out the complaint form available in your customer profile;<br /> Pack the product and send it by post to the following address:</p>
            <p>Location<br /> Street<br /> Building<br /> Address</p>
            <p>If you do not have a receipt or invoice attached, you will need to receive an email confirmation of your order - this will help us to identify and process your complaint.</p>
            <p>Within 14 days after receiving the package we will process your complaint and we will send you the feedback. If your claim is accepted, you will receive a refund of the product to your bank account or card.</p>
            <p class="headline"><span style="font-size: small; color: #888888;"><a class="btn btn-default decorator-visible" href="#" data-action="SearchOrder">Find Order</a></span></p>
            <p class="headline"><span style="font-size: small; color: #888888;">&nbsp;</span></p>
            <p class="headline">&nbsp;</p>
            <p>Consumer customers may use extrajudicial means of handling claims and redress.</p>
            <p class="headline"><span style="font-size: small; color: #888888;">&nbsp;</span></p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection