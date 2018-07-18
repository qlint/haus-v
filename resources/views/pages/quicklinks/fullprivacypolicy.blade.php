@extends('main')
@section('title','Full Privacy Policy')
@section('class','cms-page-view cms-polityka-prywatnosci-pelen-tekst')
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
                     <span title="Full Privacy Policy Text">Full Privacy Policy Text</span>
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
         <div class="std">
            <p align="center"><strong>Privacy Policy</strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>Introduction</strong></p>
            <p>Protecting the privacy of our users is of utmost importance to us, so we make every effort to ensure that you are safe by browsing our websites.</p>
            <p>The privacy policy applies to all types of personal information and personal data collected through the web sites for the purposes for which they are collected and processed.</p>
            <p>&nbsp;</p>
            <p><strong>Processing of personal data.</strong></p>
            <p>In order to properly secure data, we only processes the personal data of Clients, including: name, gender, address, date of birth. No bank account, email address, phone number.</p>
            <p>Haus Valeriaa processes personal data in accordance with the law on the protection of personal data. Haus Valeriaa applies the technical and organizational measures required by law to protect personal data processed and personal data before making it available to unauthorized persons, unauthorized persons being taken over, processed in violation of the law, and alteration, loss or destruction. Authorization for Haus Valeriaa processing of personal data within the meaning of the law on the protection of personal data is voluntary, however, the lack of consent to the processing of personal data, prevent transaction, order delivery and any communication. You have the right to inspect your data, correct them and change them, and to request discontinuance of processing and the right to object to data processing for marketing purposes.</p>
            <p>The administrator of the personal data is Haus Valeriaa. Haus Valeriaa processes data for transaction processing, and for those who agree to process personal data for marketing purposes. Haus Valeriaa may entrust the processing of personal data to Haus Valeriaa collaborators, to the extent necessary for the execution of the transaction, eg for delivery of parcels or marketing information relating to Haus Valeriaa, to customers who agree to the processing of personal data for marketing purposes. Customer personal information will not be sold to third parties, including, in particular, will not be transferred to other entities for the purpose of sending marketing materials to third parties.</p>
            <p>&nbsp;</p>
            <p><strong>Newsletter</strong></p>
            <p>Customers have the possibility to subscribe to our newsletter, by providing an email address and consent to the processing of personal data for marketing purposes and sending business information. By the newsletter we inform you about our latest offers. You can unsubscribe at any time by clicking the link in the newsletter.<strong></strong></p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>Customer Account</strong></p>
            <p>When setting up your account please provide the following customer details: name, email address, telephone number, date of birth, address. The fields required for registration of the Client's account are: name and email address.</p>
            <p>&nbsp;</p>
            <p><strong>Notification of product availability</strong></p>
            <p>At your request Haus Valeriaa electronically sends information about the availability of products. The condition of sending such information is the consent to receive the e-mail information on the products of the online store and the processing of personal data by Haus Valeriaa. Data submission is voluntary, however, the lack of consent to the processing of personal data prevents the submission of product availability information. You have the right to access and correct your data.</p>
            <p><strong>Cookies </strong></p>
            <p>The website of the online store uses "cookies." Cookies are small files that allow the device used to view the Internet (such as a computer, smartphone, etc.) to store specific information about the device being used. Cookies settings may be changed in your web browser.</p>
            <p><strong>&nbsp;</strong></p>
            <p><strong>Right to information and revocation of consent to data processing</strong></p>
            <p>You can contact us in writing or by e-mail for free information regarding personal data collected and processed by Haus Valeriaa. You may also withdraw your prior consent to processing your personal data and request that your personal data be discontinued. We will take steps to ensure that your personal data is processed and removed from our databases without delay. In that case, please contact us at customer@hausvaleriaa.com</p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection