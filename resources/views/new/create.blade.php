@extends('main')
@section('title','Contact Us')
@section('stylesheets')
   <link href="{{ URL::asset('css/parsley.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
@endsection
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
            <h4 class="section-title">Input details for the new item. The system will handle the rest <span style="font-size: 25px;">&#9786;</span></h4>
            <form id="contactForm" method="POST" action="{{ route('new.store') }}" data-parsley-validate enctype="multipart/form-data" class="form">
               {{ csrf_field() }}

               <div class="form-group ">
                  <label class="control-label" for="firstname">Item Name*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="name"
                           id="firstname"
                           title="Item Name"
                           placeholder="Item Name"
                           value="">
                  </div>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="lastname">Item Price*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="6"
                           name="price"
                           id="lastname"
                           title="Item Price"
                           placeholder="Item Price"
                           value="">
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Gender/ Target*</label>
                  <div class="select">
                     <select name="target">
                        <option>Man</option>
                        <option>Woman</option>
                        <option>Kids</option>
                        <option>Unisex</option>
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Size*</label>
                  <div class="select">
                     <select name="size">
                        <option>XXL</option>
                        <option>XL</option>
                        <option>L</option>
                        <option>M</option>
                        <option>S</option>
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Item Type (category)*</label>
                  <div class="select">
                     <select name="category">
                       @foreach($categories as $category)
                         <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                       @endforeach
                        {{-- <option>Suit</option>
                        <option>Blouse</option>
                        <option>Shirt</option>
                        <option>T-Shirt</option>
                        <option>Top</option>
                        <option>Jacket</option>
                        <option>Hoodie</option>
                        <option>Trouser</option>
                        <option>Jeans</option>
                        <option>Short</option>
                        <option>Hat</option>
                        <option>Shoes</option> --}}
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="firstname">Color*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="color"
                           title="Color"
                           placeholder="Item Color"
                           value="">
                  </div>
               </div>
               <div class="form-group textarea-group">
                  <label class="control-label">Description*</label>
                  <textarea class="form-control"
                     name="description"
                     title="Description"
                     cols="5" rows="3"></textarea>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="email">Images*</label>
                  <div class="input-icon">
                     <!-- images -->
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <input type="file" required onchange="document.getElementById('upld1').src = window.URL.createObjectURL(this.files[0])" name="img1920">
                        <img id="upld1" alt="1920px width" style="max-width: 200px;" src="{{ URL::asset('img/basic/1920placehold.jpg') }}" />
                     </div>
                     <div class="col-sm-4">
                        <input type="file" required onchange="document.getElementById('upld2').src = window.URL.createObjectURL(this.files[0])" name="img1280">
                        <img id="upld2" alt="1280px width" style="max-width: 200px;" src="{{ URL::asset('img/basic/1280placehold.jpg') }}" />
                     </div>
                     <div class="col-sm-4">
                        <input type="file" required onchange="document.getElementById('upld3').src = window.URL.createObjectURL(this.files[0])" name="img1024">
                        <img id="upld3" alt="1024px width" style="max-width: 200px;" src="{{ URL::asset('img/basic/1024placehold.jpg') }}" />
                     </div>
                  </div>
               </div>
               <div class="form-group required-fields-info">
                  <h5>* <b>Fill all fields</b></h5>
               </div>
               <div class="form-group action-buttons">
                  <button name="submit" class="btn fancy-btn" type="submit">Create Item</button>
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
         <form id="contactForm" method="POST" action="{{ route('new.store') }}" data-parsley-validate enctype="multipart/form-data" class="form">
               {{ csrf_field() }}

               <div class="form-group ">
                  <label class="control-label" for="firstname">Item Name*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="100"
                           name="item-name"
                           id="firstname"
                           title="Item Name"
                           placeholder="Item Name"
                           value=""
                           data-error="You must enter the item name"
                           data-valid='{"type":"name"}'
                           data-helper="Enter the item name">
                  </div>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="lastname">Item Price*</label>
                  <div class="input-icon ">
                     <input class="form-control"
                           type="text"
                           maxlength="6"
                           name="item-price"
                           id="lastname"
                           title="Item Price"
                           placeholder="Item Price"
                           value=""
                           data-error="You must enter the item price"
                           data-valid='{"type":"name"}'
                           data-helper="Enter the item price">
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Gender/ Target*</label>
                  <div class="select">
                     <select name="gender">
                        <option>Man</option>
                        <option>Woman</option>
                        <option>Kids</option>
                        <option>Unisex</option>
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Size*</label>
                  <div class="select">
                     <select name="size">
                        <option>XXL</option>
                        <option>XL</option>
                        <option>L</option>
                        <option>M</option>
                        <option>S</option>
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group select-group">
                  <label class="control-label" for="email">Item Type*</label>
                  <div class="select">
                     <select name="type">
                        <option>Suit</option>
                        <option>Blouse</option>
                        <option>Shirt</option>
                        <option>T-Shirt</option>
                        <option>Top</option>
                        <option>Jacket</option>
                        <option>Hoodie</option>
                        <option>Trouser</option>
                        <option>Jeans</option>
                        <option>Short</option>
                        <option>Hat</option>
                        <option>Shoes</option>
                     </select>
                     <div class="select-arrow"></div>
                  </div>
               </div>
               <div class="form-group textarea-group">
                  <label class="control-label">Description*</label>
                  <textarea class="form-control"
                     name="description"
                     title="Description"
                     cols="5" rows="3"
                     data-valid='{"type":"text", "required": 1}'
                     data-error="You must type in the description"
                     data-helper="Enter your the description"></textarea>
               </div>
               <div class="form-group ">
                  <label class="control-label" for="email">Images*</label>
                  <div class="input-icon">
                     <!-- images -->
                  </div>
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
                  <button name="submit" class="btn fancy-btn" type="submit">Create Item</button>
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

@section('scripts')
   <script src="{{ URL::asset('js/parsley.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/bak/bootstrap.min.js') }}"></script>
@endsection
