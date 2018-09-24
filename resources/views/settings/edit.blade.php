@extends('main')
@section('title','Contact Us')
@section('class','contacts-index-index')
@section('content')

<form id="contactForm" method="POST" action="{{ route('settings.update', $setting->id) }}" data-parsley-validate enctype="multipart/form-data" class="form">
     {{ csrf_field() }}
     {{ method_field('PUT') }}
<div class="wrapper">
   <div class="main-container col1-layout">
      <div class="header-controls" id="headerControls">
         <span class="controls-container">
         </span>
      </div>
      <div class="customer-service" data-modal-id="customer-care">
         <button data-remodal-action="close" class="close-button"></button>
         <h4 class="modal-title">Customer service</h4>
         <aside>

              <h4 class="section-title">Work Hours</h4>
              <div class="helpline-section">
                 <div class="helpline-hours">
                   <label class="control-label" for="weekday_hours">Weekday Hours</label>
                   <input class="form-control" type="text" maxlength="30" name="weekday_hours" width="50"
                      id="weekday_hours" title="Weekday Hours" placeholder="9:00-5:00" value="{{ $setting->weekday_hours }}"
                      data-error="Please enter the weekday hours" data-valid='{"type":"name"}'
                      data-helper="Enter the weekday hours">
                    <BR><BR>
                    <label class="control-label" for="weekend_hours">Weekend Hours</label>
                    <input class="form-control" type="text" maxlength="30" name="weekend_hours" width="50"
                         id="weekend_hours" title="Weekend Hours" placeholder="10:00-1:00" value="{{ $setting->weekend_hours }}"
                         data-error="Please enter the weekend hours" data-valid='{"type":"name"}'
                         data-helper="Enter the weekend hours">
                    <BR>
                 </div>
              </div>
              <h4 class="section-title">Phone</h4>
              <div class="helpline-section">
                 <div class="helpline-hours">
                   <label class="control-label" for="telephone">Telephone 1</label>
                   <input class="form-control" type="number" maxlength="12" name="telephone" width="50"
                      id="telephone" title="Telephone 1" placeholder="07XXXXXXXX" value="{{ $setting->telephone }}" pattern="[0-9]{12}"
                      data-error="Please enter the telephone" data-valid='{"type":"name"}'
                      data-helper="Enter the telephone">
                    <BR><BR>
                    <label class="control-label" for="telephone_2">Telephone 2</label>
                    <input class="form-control" type="number" maxlength="12" name="telephone_2" width="50"
                         id="telephone_2" title="Telephone 2" placeholder="07XXXXXXXX" value="{{ $setting->telephone_2 }}" pattern="[0-9]{12}"
                         data-error="Please enter the telephone" data-valid='{"type":"name"}'
                         data-helper="Enter the telephone">
                    <BR>
                 </div>
              </div>
              <h4 class="section-title">Address</h4>
              <div class="helpline-section">
                 <div class="helpline-hours">
                   <label class="control-label" for="street">Location</label>
                   <input class="form-control" type="text" maxlength="15" name="street" width="50"
                         id="street" title="Location" placeholder="Area X" value="{{ $setting->street }}"
                         data-error="Please enter the location" data-valid='{"type":"name"}'
                         data-helper="Enter the location">
                   <BR><BR>
                   <label class="control-label" for="city">Road/ Street</label>
                   <input class="form-control" type="text" maxlength="15" name="city" width="50"
                         id="city" title="Road/ Street" placeholder="Y Street Off Z rd." value="{{ $setting->city }}"
                         data-error="Please enter the road or street" data-valid='{"type":"name"}'
                         data-helper="Enter the road or street">
                   <BR><BR>
                   <label class="control-label" for="country">Building</label>
                   <input class="form-control" type="text" maxlength="15" name="country" width="50"
                              id="country" title="Building" placeholder="Building Name" value="{{ $setting->country }}"
                              data-error="Please enter the building" data-valid='{"type":"name"}'
                              data-helper="Enter the building">
                    <BR>
                 </div>
              </div>
              <div class="helpline-section">
                 <div class="helpline-address">
                    Haus Valeriaa Ltd.<BR>Nairobi, Kenya<BR>2016-<script type="text/javascript">document.write(new Date().getFullYear())</script> &copy;
                 </div>
              </div>
              <div class="form-group action-buttons">
                 <button name="submit" class="btn fancy-btn" type="submit">Save</button>
              </div>

         </aside>
         <section>
            <h4 class="section-title">General Settings</h4>

               <div class="form-group ">
                  <label class="control-label" for="company_name">Company Name*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="company_name"
                           id="company_name"
                           title="Company Name"
                           placeholder="Company Name"
                           value="{{ $setting->company_name }}">
                  </div>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="facebook">Facebook Link*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="facebook"
                           id="facebook"
                           title="Facebook Link"
                           placeholder="Facebook Link"
                           value="{{ $setting->facebook }}">
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="instagram">Instagram Link*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="instagram"
                           id="instagram"
                           title="Instagram Link"
                           placeholder="Instagram Link"
                           value="{{ $setting->instagram }}">
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="twitter">Twitter Link*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="twitter"
                           id="twitter"
                           title="Twitter Link"
                           placeholder="Twitter Link"
                           value="{{ $setting->twitter }}">
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="youtube">Youtube Link*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="youtube"
                           id="youtube"
                           title="Youtube Link"
                           placeholder="Youtube Link"
                           value="{{ $setting->youtube }}">
                  </div>
               </div>
               <div class="form-group required-fields-info">
                  <h5>* <b>Fill all fields</b></h5>
               </div>
               <div class="form-group action-buttons">
                  <button name="submit" class="btn fancy-btn" type="submit">Save Settings</button>
               </div>

            {{-- <h4 class="section-title">Categories</h4>
            <form id="contactForm" method="POST" action="{{ route('settings.store') }}" data-parsley-validate enctype="multipart/form-data" class="form">
               {{ csrf_field() }}

               <div class="form-group select-group">
                  <label class="control-label" for="categories">Categories*</label>
                  <div class="input-icon ">
                    @foreach($categories as $category)
                      <label class="control-label" for="{{ $category->category_name }}">{{ $category->id }}</label>
                      <span><input class="form-control" type="text" maxlength="100" name="category"
                            id="category" title="Categories"
                            placeholder="Category name... eg Jackets"
                            value="{{ $category->category_name }}" style="width:70%;margin-left:10px;margin-top:-20px;"></span><br>
                    @endforeach
                  </div>
               </div>
               <div class="form-group action-buttons">
                  <button name="submit" class="btn fancy-btn" type="submit">Save Categories</button>
               </div>
            </form> --}}
         </section>
      </div>
      <script type="text/javascript">
         (function() {
             if(!window.getDepartaments) {
                 window.getDepartaments = function() {
                     return {"185":{"label":"Sklep ONLINE","topics":{"0":"Wybierz temat","1":"Uwagi dotyczące strony Sklepu Online","3":"Zwroty lub reklamacje","5":"Zamówienia","7":"Pomoc przy zakupach","9":"Informacje dotyczące artykułów"}},"187":{"label":"Sklepy stacjonarne - Obsługa Klienta","topics":{"0":"Wybierz temat","11":"Obsługa w salonach Cropp"}}};
                 }
             }
         })();
      </script>
   </div>
</div>
</form>
<div class="customer-care-modal-wrapper">
   <div class="customer-service" data-modal-id="customer-care">
      <button data-remodal-action="close" class="close-button"></button>
      <h4 class="modal-title">Customer service</h4>
      <aside>
         <h4 class="section-title">Helpline</h4>
         <div class="helpline-section">
            <div class="helpline-hours">
               Weekdays 9:00-5:00,<BR>Weekends 10:00-5:00<BR><BR><BR>
            </div>
            <div class="helpline-phone">
               +254 791 370 517
            </div>
         </div>
         <div class="helpline-section">
            <div class="helpline-address">
               Location<BR>Road/ Street<BR>Building<BR>Haus Valeriaa Ltd.<BR>Nairobi, Kenya<BR>2016-<script type="text/javascript">document.write(new Date().getFullYear())</script> &copy;
            </div>
         </div>
      </aside>
      <section>
         <h4 class="section-title">Contact Us</h4>
         <form data-action="#" id="contactForm" method="post" class="form">
            <div class="form-group ">
               <label class="control-label" for="firstname">First Name*</label>
               <div class="input-icon ">
                  <input class="form-control"
                     type="text"
                     maxlength="30"
                     name="firstname"
                     id="firstname"
                     title="First Name"
                     placeholder="First Name"
                     value=""
                     data-error="You must enter your first name"
                     data-valid='{"type":"name"}'
                     data-helper="Wpisz swoje imię">
               </div>
            </div>
            <div class="form-group ">
               <label class="control-label" for="lastname">Last Name*</label>
               <div class="input-icon ">
                  <input class="form-control"
                     type="text"
                     maxlength="30"
                     name="lastname"
                     id="lastname"
                     title="Last Name"
                     placeholder="Last Name"
                     value=""
                     data-error="You must enter your last name"
                     data-valid='{"type":"name"}'
                     data-helper="Enter your last name">
               </div>
            </div>
            <div class="form-group ">
               <label class="control-label" for="email">E-Mail*</label>
               <div class="input-icon">
                  <input class="form-control"
                     type="text"
                     name="customer_email"
                     id="customer_email"
                     title="E-Mail"
                     placeholder="E-Mail"
                     value=""
                     data-error="You must enter your email"
                     data-valid='{"type":"email"}'
                     data-helper="Enter your email address">
               </div>
            </div>
            <div class="form-group select-group">
               <label class="control-label" for="email">Select topic*</label>
               <div class="select">
                  <select name="subjects">
                  		<option>General Inquiry</option>
                     	<option>Order Tracking</option>
                     	<option>Partnering with us</option>
                     	<option>My Information</option>
                     	<option>Complaint</option>
                  </select>
                  <div class="select-arrow"></div>
               </div>
            </div>
            <div class="form-group textarea-group">
               <label class="control-label">Message*</label>
               <textarea class="form-control"
                  name="comment"
                  title="Message"
                  cols="5" rows="3"
                  data-valid='{"type":"text", "required": 1}'
                  data-error="You need to enter your message"
                  data-helper="Type the message"></textarea>
            </div>
            <div class="form-group required-fields-info">
               <h5>* Required fields</h5>
            </div>
            <div class="form-group checkbox-list checkbox-agree">
               <label class="control control-checkbox">
                  <input type="checkbox" name="agree" id="checkboxAgree">
                  <div class="control-indicator"></div>
                  * I agree to have my data processed by Haus Valeriaa <BR></ br><BR></ br><BR><a href='{{ url('full-privacy-policy') }}' target='_blank'>Go to the Privacy Policy</a>
               </label>
            </div>
            <div class="form-group action-buttons">
               <button class="btn fancy-btn" type="button">Create Item</button>
            </div>
         </form>
      </section>
   </div>
   <script type="text/javascript">
      (function() {
          if(!window.getDepartaments) {
              window.getDepartaments = function() {
                  return {"185":{"label":"Sklep ONLINE","topics":{"0":"Wybierz temat","1":"Uwagi dotyczące strony Sklepu Online","3":"Zwroty lub reklamacje","5":"Zamówienia","7":"Pomoc przy zakupach","9":"Informacje dotyczące artykułów"}},"187":{"label":"Sklepy stacjonarne - Obsługa Klienta","topics":{"0":"Wybierz temat","11":"Obsługa w salonach Cropp"}}};
              }
          }
      })();
   </script>
</div>

@endsection
