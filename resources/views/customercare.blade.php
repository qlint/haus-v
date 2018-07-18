<div class="customer-care-modal-wrapper">
   <div class="customer-service" data-modal-id="customer-care">
      <button data-remodal-action="close" class="close-button"></button>
      <h4 class="modal-title">Customer service</h4>
      <aside>
         <h4 class="section-title">Helpline</h4>
         <div class="helpline-section">
            <div class="helpline-hours">
               Mon - Fri 9:00am - 5:00pm,<BR>Weekends 10:00am - 5:00pm<BR><BR><BR>
            </div>
            <div class="helpline-phone">
               +254 791 570 317           
            </div>
         </div>
         <div class="helpline-section">
            <div class="helpline-address">
               Haus Valeriaa Nairobi           
            </div>
         </div>
      </aside>
      <section>
         <h4 class="section-title">Contact us</h4>
         <form data-action="#" id="contactForm" method="post" class="form">
            <div class="form-group ">
               <label class="control-label" for="firstname">Name*</label>
               <div class="input-icon ">
                  <input class="form-control"
                     type="text"
                     maxlength="30"
                     name="firstname"
                     id="firstname"
                     title="Name"
                     placeholder="Name"
                     value=""
                     data-error="You must enter your name"
                     data-valid='{"type":"name"}'
                     data-helper="Enter your name">
               </div>
            </div>
            <div class="form-group ">
               <label class="control-label" for="lastname">Last name*</label>
               <div class="input-icon ">
                  <input class="form-control"
                     type="text"
                     maxlength="30"
                     name="lastname"
                     id="lastname"
                     title="Last name"
                     placeholder="Last name"
                     value=""
                     data-error="You must enter your last name"
                     data-valid='{"type":"name"}'
                     data-helper="Enter your name">
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
                     data-error="Musisz wpisać swój email"
                     data-valid='{"type":"email"}'
                     data-helper="Wprowadź adres e-mail">
               </div>
            </div>
            <div class="form-group select-group">
               <label class="control-label" for="email">Select department*</label>
               <div class="select">
                  <select name="departaments">
                     <option selected="selected" disabled value="0">Select department</option>
                  </select>
                  <div class="select-arrow"></div>
               </div>
            </div>
            <div class="form-group select-group">
               <label class="control-label" for="email">Select topic*</label>
               <div class="select">
                  <select name="subjects"></select>
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
                  data-error="You must enter your message"
                  data-helper="Enter the message"></textarea>
            </div>
            <div class="form-group required-fields-info">
               <h5>* Required fields</h5>
            </div>
            <div class="form-group checkbox-list checkbox-agree">
               <label class="control control-checkbox">
                  <input type="checkbox" name="agree" id="checkboxAgree">
                  <div class="control-indicator"></div>
                  * I hereby authorize the processing of my personal data by Haus Valeriaa. <BR></ br><BR></ br><BR>Data submission is voluntary, however, the lack of consent to the processing of personal data makes it impossible to answer the question. Customers have the right to access and correct their data.<BR></ br><BR></ br><BR><a href='#' target='_blank'>Go to the rules</a>                
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