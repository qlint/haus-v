@extends('main')
@section('title','Return and Exchange')
@section('class','cms-page-view cms-zwroty')
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
                     <span title="Zwrot i wymiana - esklep">Zwrot i wymiana - esklep</span>
                  </li>
                  <li class="products-quantity hidden">
                     <span>Liczba produktów:</span>
                     <span id="productsQuantity"></span>
                  </li>
               </ul>
            </div>
         </span>
      </div>

      @include('sidebar')

      <div class="content">
         <div class="page-title">
            <h1>Return and Exchange</h1>
         </div>
         <div class="std">
            <p>If the ordered product does not meet your expectations you can return within 7 days of the date of sale. Returned goods must be unaltered, ie they must have original labels and may not carry any marks of use.</p>
            <p><a class="btn btn-default decorator-visible" style="font-size: small;" href="#" data-action="SearchOrder">Find Order</a></p>
            <p><strong>The easiest way to return your product to Haus Valeriaa. </strong></p>
            <p>Prepare only the returnable product and information that will allow us to confirm your purchase - a receipt or invoice that is shipped to your order.</p>
            <p>You can also send the products to our store by following the instructions:</p>
            <p>- complete the return form available in your customer profile or print out and complete the withdrawal statement available on the store website;</p>
            <p>- Pack the product for return - you can use the packaging in which you received the order. Include a receipt / invoice or a photocopy of it, which will facilitate and speed up the return process.</p>
            <p>- Please return the product to the following address:</p>
            <p>Location<br /> Street<br /> Building<br /> Address</p>
            <p>Within 14 days after receiving the package, you will be reimbursed for the product (s) in the same way as it was paid (to a bank account or card). If you paid for the download you will be asked for the account number for which we will make a refund.</p>
            <p>You can exchange goods at Haus Valeriaa. Exchange of goods via the online store consists of returning the products according to the refund procedure and re-submitting the new order.</p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection
