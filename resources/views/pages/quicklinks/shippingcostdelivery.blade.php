@extends('main')
@section('title','Shipping, cost and delivery time')
@section('class','cms-page-view cms-dostawa')
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
                     <span title="Shipping, cost and delivery time - Haus Valeriaa">Shipping, cost and delivery time</span>
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
            <h1>Shipping, cost and delivery time</h1>
         </div>
         <div class="std">
            <p>Delivery time and cost depend on the selected option:</p>
            <p>- Reception in the store: up to 2-3 working days. KES 0,00&nbsp;<br />- Standard delivery online payment: up to 2-3 working days. KES 200<br />- Standard delivery payment for pick up: up to 2-3 working days. KES 250<br />- Express delivery: 1-2 business days. KES 550&nbsp;</p>
            <p><strong>Currently, for orders over 3000 KES the standard courier delivery is free.</strong></p>
            <p>After a failed delivery option at the indicated courier address will try to deliver the order twice. After two failed attempts to deliver the order, it will be sent back to the online store.</p>
            <p>With the option of delivery to the selected store and the order is ready for delivery, we will notify you by mail and via SMS (if you have registered your mobile number). The order will be awaiting receipt for 14 days. After this time, we will contact you to determine whether the order will be received. If we can not find it - the order will be sent back to the online store.</p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection