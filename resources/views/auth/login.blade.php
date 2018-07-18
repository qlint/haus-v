@extends('main')
@section('title','Login')
@section('class','customer-account-login cms-')
@section('active-header1','active')
@section('content')

      <div class="wrapper">
         <div class="main-container col1-layout">
            <div class="header-controls" id="headerControls">
               <span class="controls-container">
                  <div class="breadcrumbs">
                     <ul class="clearfix">
                        <li class="home">
                           <a href="{{ route('home') }}" title="Haus Valeriaa">Home</a>
                        </li>
                        <li class="cms_page">
                           <span title=""></span>
                        </li>
                        <li class="products-quantity hidden">
                           <span>Number of products:</span>
                           <span id="productsQuantity"></span>
                        </li>
                     </ul>
                  </div>
               </span>
            </div>
            <div class="customer-forms-wrapper" id="customerFormsWrapper" style="margin-top: -4.75px;">
               <form data-ajax-action="#" method="post" id="customerLoginForm" class="form customer-login-form" novalidate="novalidate">
                  {{ csrf_field() }}
                  <div class="form-left">
                     <div class="form-header">
                        <i class="icon icon-account-big"></i>
                        <h2 class="form-title">Log in</h2>
                     </div>
                     <div class="form-group">
                        <input type="hidden" name="form_key" value="tfFuzN0tKpwmPTGu">
                     </div>
                     <div class="form-group text-input">
                        <div class="input-icon">
                           <label>E-Mail Address</label>
                           <input type="email" name="email_address" value="" id="email" title="e-mail address" required aria-required="true">
                        </div>
                     </div>
                     <div class="form-group text-input">
                        <div class="input-icon">
                           <label>Password</label>
                           <input type="password" name="password" id="pass" title="password" required aria-required="true">
                        </div>
                     </div>
                     <div class="form-group">
                     </div>
                     <div class="form-group">
                        <a href="#" id="goToPasswordReminderFormButton" class="btn btn-link">I forgot my password</a>
                     </div>
                     <div class="form-group bottom-section">
                        <div class="form-group">
                           <button type="submit" class="btn fancy-btn" title="Zaloguj" name="send" id="send2">
                           Log in
                           <i class="icon icon-chevron-right icon-white icon-sm"></i>
                           </button>
                        </div>
                        <div class="social-buttons">
                           <div class="login-with-social">or log in via:</div>
                           <button class="btn btn-fb" type="button">Facebook</button>
                        </div>
                     </div>
                     <div>
                        <input type="hidden" name="uenc" value="aHR0cHM6Ly93d3cuY3JvcHAuY29tL3BsL3BsLw,,">
                     </div>
                  </div>
                  <div class="form-right">
                     <div class="form-header">
                        <h2 class="form-title">
                           Don't have an account yet ?
                        </h2>
                     </div>
                     <div class="form-group bottom-section">
                        <a href="{{ route('register') }}" class="btn fancy-btn">
                          continue
                        <i class="icon icon-chevron-right icon-white icon-sm"></i>
                        </a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      @include('customercare')

@endsection
