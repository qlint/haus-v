@extends('main')
@section('title','Forms of Payment')
@section('class','cms-page-view cms-formy-platnosci')
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
                     <span title="Forms of Payment - Haus Valeriaa">Forms of Payment</span>
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
            <h1>Forms Of Payment</h1>
         </div>
         <div class="std">
            <p>In the Haus Valeriaa online store you can pay for your order by online payment - by bank transfer, payment card, mobile money or in the case of delivery by courier to the indicated address, select "payment on delivery".</p>
            <p>In order to finalize the order, after selecting the "Online Payment" button, the customer will be redirected to a page, where he or she will be able to choose to pay by credit card or bank transfer. <strong>Haus Valeriaa online shop does not accept traditional transfers, does not send individual data to make a deposit.</strong></p>
            <p><strong>Warning! We will never send you an email informing you that your account has been changed for payment, with a request to make a traditional transfer.</strong></p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection