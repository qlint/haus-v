@extends('main')
@section('title','Register')
@section('class','customer-account-create')
@section('active-header1','active')
@section('content')

      <div class="wrapper">
         <div class="main-container col1-layout">
            <div class="header-controls" id="headerControls">
               <span class="controls-container">
               </span>
            </div>
            <div class="customer-forms-wrapper" id="customerFormsWrapper" style="margin-top: -19.75px;">
               <div id="customerRegisterFormWrapper">
                  <div class="form-group error-message">
                  </div>
                  <form action="#" method="post" id="customerRegisterForm" class="form customer-register-form" novalidate="novalidate">
                      {{ csrf_field() }}
                     <input type="hidden" name="success_url" value="">
                     <input type="hidden" name="error_url" value="">
                     <input type="hidden" name="form_key" value="tfFuzN0tKpwmPTGu">
                     <a href="{{ route('login') }}" class="form-close">×</a>
                     <div class="form-left">
                        <div class="form-header">
                           <h2 class="form-title">Registration</h2>
                        </div>
                        <div class="form-group gender">
                           <label class="control control-radio">
                              <input type="radio" id="gender" name="gender" value="431">
                              Female                                  <em>*</em>
                              <div class="control-indicator"></div>
                           </label>
                           <label class="control control-radio">
                              <input type="radio" id="gender" name="gender" value="429">
                              Male                                   <em>*</em>
                              <div class="control-indicator"></div>
                           </label>
                        </div>
                        <div class="customer-name">
                           <div class="form-group text-input">
                              <label for="firstname">
                              First Name<em>*</em>
                              </label>
                              <input type="text" id="firstname" name="first_name" value="" title="first_name" placeholder="first name" maxlength="30">
                           </div>
                           <div class="form-group text-input">
                              <label for="lastname">
                              Last Name<em>*</em>
                              </label>
                              <input type="text" id="lastname" name="last_name" value="" title="last_name" placeholder="last name" maxlength="30">
                           </div>
                        </div>
                        <div class="form-group date-input">
                           <label>Date of birth</label>
                           <span class="Zebra_DatePicker_Icon_Wrapper" style="display: block; position: relative; float: none; top: auto; right: auto; bottom: auto; left: auto;">
                             <input type="text" id="dob" name="dob" data-value="" value="" class="datepicker" readonly="readonly" style="position: relative; top: auto; right: auto; bottom: auto; left: auto;">
                             <button type="button" class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside_Left" style="top: 5px; left: 0px;">Pick a date</button>
                           </span>
                        </div>
                        <div class="phone-no">
                           <div class="form-group text-input">
                              <label>Phone<em>*</em></label>
                              <input type="text" class="phone-number-prefix" maxlength="4" name="dial_code" value="+254">
                           </div>
                           <div class="form-group text-input">
                              <label>&nbsp;</label>
                              <input type="number" name="phone" id="telephone" value="" title="telephone" class="phone-number" placeholder="Telephone">
                           </div>
                        </div>
                        <div class="form-group toggle-element collapsed">
                           <label for="addAddress" class="control control-checkbox">
                              Add address
                              <input type="checkbox" name="Address" id="addAddress" value="" class="toggle-checkbox">
                              <div class="control-indicator"></div>
                           </label>
                           <div class="content">
                              <input type="hidden" name="create_address" value="0">
                              <input type="hidden" name="is_private" value="1">
                              <input type="hidden" name="default_shipping" value="1">
                              <input type="hidden" name="country_id" value="PL">
                              <div class="form-group text-input">
                                 <label for="street_1" class="required" aria-required="true">Street<em>*</em></label>
                                 <input type="text" name="street[]" value="" title="Ulica" placeholder="Ulica" id="street_1">
                              </div>
                              <div class="form-group text-input">
                                 <label for="street_2">
                                 House / flat number<em>*</em>
                                 </label>
                                 <input type="text" name="street[]" value="" title="Numer domu/mieszkania" placeholder="Numer domu/mieszkania" id="street_2">
                              </div>
                              <div class="form-group text-input">
                                 <label for="zip">
                                 Postal Code<em>*</em>
                                 </label>
                                 <input type="text" name="postcode" value="" title="Kod pocztowy" placeholder="Kod pocztowy" id="zip">
                                 <div data-static="postcode_validate_info" class="postcode-validate-info">
                                 </div>
                              </div>
                              <div class="form-group text-input">
                                 <label for="city" class="required" aria-required="true">
                                 City<em>*</em>
                                 </label>
                                 <input type="text" name="city" value="" title="Miejscowość" placeholder="Miejscowość" id="city">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-right">
                        <div class="form-group text-input">
                           <label>An email address that will be your login<em>*</em></label>
                           <input type="email" name="email_address" id="email_address" value="" title="e-mail address" placeholder="e-mail address">
                        </div>
                        <div class="form-group text-input">
                           <label>Enter the email again<em>*</em></label>
                           <input type="text" name="email_address_confirm" id="email_address_confirm" value="" title="email_address_confirm" placeholder="Confirm e-mail address">
                        </div>
                        <div class="form-group text-input password-toggle">
                           <label>
                           Password<em>*</em>
                           </label>
                           <input type="password" name="password" id="password" title="password" placeholder="password">
                           <span class="show-label">
                             Show
                           </span>
                        </div>
                        <div class="form-group checkbox-input">
                           <label class="control control-checkbox terms-agreement">
                              <input type="checkbox" name="terms-agreement" required="" aria-required="true">
                              *I agree with <a href="{{ route('privacy') }}"> </a>
                              <div class="control-indicator"></div>
                           </label>
                           <div class="toggle-element collapsed">
                              <div class="content">
                                 <p><span>I AGREE TO PROCESSING MY PERSONAL INFORMATION DATA BY LPP SA WITH ITS REGISTERED OFFICE IN GDAŃSK, UL. ŁĄKOWA 39/44 NO. KRS 778 FOR THE REGISTRATION ON WWW.CROPP.COM, MAKE THESE PURCHASES AND SERVICES SUBMITTED BY ME ORDER AND SAFEGUARD MY DATA ENTITIES COOPERATING WITH LPP SA FOR THE ORDER PROCESSING. I AGREE THAT VOLUNTARY AND I KNOW THAT WITHOUT I CAN NOT REGISTER ON THE WEBSITE AND PURCHASE THESE PURCHASES. I KNOW THAT I CAN WITHDRAW FROM ANY TIME WHAT DOES NOT AFFECT THE PREVIOUS ACTIVITIES. DETAILED INFORMATION <a href="{{ route('full-privacy-policy') }}">PRIVACY POLICY</a> I <a href="{{ route('shipping-cost-delivery') }}">SHOP RULES</a>.</span></p>
                              </div>
                              <button type="button" class="toggle-button" data-title-collapsed="więcej" data-title-expanded="Pokaż mniej">
                              ...[more]
                              </button>
                           </div>
                        </div>
                        <div class="form-group checkbox-input">
                           <label class="control control-checkbox">
                              <input type="checkbox" name="processing-data-agreement">
                              INFORM ME ABOUT NEWS AND PROMOTIONS.
                              <div class="control-indicator"></div>
                           </label>
                           <div class="toggle-element collapsed">
                              <div class="content">
                                 <p>I agree to the processing of my personal data for the purpose of sending by S. LP with headquarters in Gdańsk, ul. Łąkowa 39/44 commercial information, including promotions, trends or news to my e-mail address or telephone number. I know that I can withdraw my consent at any time, which does not affect my previous activities. Detailed information&nbsp;<a href="{{ route('full-privacy-policy') }}">here</a>.</p>
                                 <p>To confirm your subscription, go to your mailbox and click the activation link.</p>
                              </div>
                              <button type="button" class="toggle-button" data-title-collapsed="więcej" data-title-expanded="Pokaż mniej">
                              ...[more]
                              </button>
                           </div>
                           <input class="ai-subscription-place" id="aiSubscriptionPlace" type="hidden" name="subscriptionPlace" value="popup">
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group bottom-section">
                           <p class="form-legend">* Required fields</p>
                           <button class="btn fancy-btn" id="registerButton" type="submit" title="Wyślij">
                           continue
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      @include('customercare')

@endsection
