@extends('main')
@section('title','Contact Us')
@section('class','contacts-index-index')
@section('content')

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
                        data-helper="Enter your first name">
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
                     name="message"
                     title="Message"
                     cols="5" rows="3"
                     data-valid='{"type":"text", "required": 1}'
                     data-error="You need to enter your message"
                     data-helper="Enter the message"></textarea>
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
                  <button class="btn fancy-btn" type="button">Send</button>
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
</div>
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
               <button class="btn fancy-btn" type="button">Send</button>
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