@extends('main')
@section('title','Site Administration')
@section('class','cms-trends-page')
@section('content')

	  <div class="wrapper">
        <div class="main-container col1-layout">
            <div class="header-controls" id="headerControls">
               <span class="controls-container">
               </span>
            </div>
            <div class="std">
               <p>
	                <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/royalslider.css') }}">
	                <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/rs-minimal-white.css') }}">
	                <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main-home.css') }}" />
               		<div class="preloader"></div>
	               	<div class="main-site-cropp" id="mainSiteCropp">
	                  	<div class="container-fluid margin-auto">
		                    <!-- slider row -->
		                    <div class="row">
		                        <!-- Main 1 col -->
		                        <div class="col-md-8">
		                           <div class="row">
		                              <div class="section-header anim1">SITE DATA</div>
		                              <div class="col-md-12" style="background-color: #00ffcc;">
		                                 <div class="box-md relative slider anim1" style="height: auto;">
                                       <form class="form" style="background-color: #00ffcc;">
                                         <div class="form-group ">
                                            <label class="control-label" for="description">Brief website description*</label>
                                            <div class="input-icon ">
                                               <textarea class="form-control"
                                                  cols="5" rows="2"
                                                  name="description"
                                                  title="Description"
                                                  placeholder="A brief website description."
                                                  value=""
                                                  data-error="You must enter a description"
                                                  data-valid='{"type":"description"}'
                                                  data-helper="Enter your a description"></textarea>
                                            </div>
                                         </div>
                                         <div class="form-group ">
                                            <label class="control-label" for="keywords">Keywords for the website*</label>
                                            <div class="input-icon ">
                                               <textarea class="form-control"
                                                  cols="5" rows="2"
                                                  name="keywords"
                                                  title="Keywords"
                                                  placeholder="Separate Keywords with a comma."
                                                  value=""
                                                  data-error="You must enter some keywords"
                                                  data-valid='{"type":"keywords"}'
                                                  data-helper="Enter your keywords"></textarea>
                                            </div>
                                         </div>
                                         <div class="form-group ">
                                            <label class="control-label" for="instagram">Instagram URL*</label>
                                            <div class="input-icon ">
                                               <input class="form-control"
                                                  type="text"
                                                  maxlength="60"
                                                  name="instagram"
                                                  id="instagram"
                                                  title="Instagram URL"
                                                  placeholder="Instagram URL"
                                                  value=""
                                                  data-error="You must enter your instagram URL"
                                                  data-valid='{"type":"instagram"}'
                                                  data-helper="Enter your instagram URL">
                                            </div>
                                         </div>
                                         <div class="form-group ">
                                            <label class="control-label" for="facebook">Facebook Page URL*</label>
                                            <div class="input-icon ">
                                               <input class="form-control"
                                                  type="text"
                                                  maxlength="60"
                                                  name="facebook"
                                                  id="facebook"
                                                  title="Facebook URL"
                                                  placeholder="Facebook URL"
                                                  value=""
                                                  data-error="You must enter your Facebook URL"
                                                  data-valid='{"type":"facebook"}'
                                                  data-helper="Enter your facebook URL">
                                            </div>
                                         </div>
                                         <div class="form-group ">
                                            <label class="control-label" for="facebook">Twitter URL*</label>
                                            <div class="input-icon ">
                                               <input class="form-control"
                                                  type="text"
                                                  maxlength="60"
                                                  name="twitter"
                                                  id="twitter"
                                                  title="Twitter URL"
                                                  placeholder="Twitter URL"
                                                  value=""
                                                  data-error="You must enter your Twitter URL"
                                                  data-valid='{"type":"twitter"}'
                                                  data-helper="Enter your twitter URL">
                                            </div>
                                         </div>
                                         <div class="form-group ">
                                            <label class="control-label" for="youtube">Youtube URL*</label>
                                            <div class="input-icon ">
                                               <input class="form-control"
                                                  type="text"
                                                  maxlength="60"
                                                  name="youtube"
                                                  id="youtube"
                                                  title="Youtube URL"
                                                  placeholder="Youtube URL"
                                                  value=""
                                                  data-error="You must enter your Youtube URL"
                                                  data-valid='{"type":"youtube"}'
                                                  data-helper="Enter your youtube URL">
                                            </div>
                                         </div>
                                         <div class="form-group action-buttons">
                                            <button class="btn fancy-btn" type="button">Submit Changes</button>
                                         </div>
                                       </form>
                                     </div>
		                              </div>
		                              <!-- Header -->
		                              <div class="section-header anim1">LOOKBOOK</div>
		                              <!-- Lookbook -->
		                              <div class="col-xs-6" style="background-color: #c9c9c9;opacity: 0.6;">
		                                 <div class="box-md relative bg-image anim1">

		                                 </div>
		                              </div>
		                              <div class="col-xs-6" style="background-color: #c9c9c9;opacity: 0.6;">

		                              </div>
		                           </div>
		                        </div>
		                        <!-- Main 2 col -->
		                        <div class="col-md-4">
		                           <div class="row" style="background-color: #fc6600;">
		                              <div class="section-header anim1">CATEGORIES</div>
		                              <div class="col-xs-6 col-sm-6 col-md-12" style="height:auto;">
                                     <form style="background-color: #fc6600;">
                                       <div class="form-group ">
                                          <label class="control-label" for="newsubcat">Create A New Item Type*</label>
                                          <div class="input-icon ">
                                             <input class="form-control"
                                                type="text"
                                                maxlength="30"
                                                name="newsubcat"
                                                id="newsubcat"
                                                title="New Sub-Category"
                                                placeholder="Create A New Sub-Category"
                                                value=""
                                                data-error="You must enter your first name"
                                                data-valid='{"type":"newsubcat"}'
                                                data-helper="Enter your newsubcat">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="control-label">View Existing Item Types*</label>
                                          <div class="select">
                                             <p>One</p>
                                             <p>Two</p>
                                             <p>Three</p>
                                             <p>Four</p>
                                             <p>Five</p>
                                          </div>
                                       </div>
                                       <div class="form-group action-buttons">
                                          <button class="btn fancy-btn" type="button">Save Changes</button>
                                       </div>
                                     </form>
                                  </div>
		                           </div>
		                              <!-- Header -->
		                              <div class="section-header hidden-xs hidden-sm anim1">ACCESSORIES</div>
		                              <div class="col-xs-6 col-sm-6 col-md-12" style="background-color: #c9c9c9;opacity: 0.6;">

		                              </div>
		                           </div>
		                        </div>
		                    </div>
		                    <!-- Store Locator-->
		                     <div class="row">
		                        <div class="col-xs-12" style="background-color: #c9c9c9;opacity: 0.6;">
		                           <div class="box-lg anim3">

		                           </div>
		                        </div>
		                     </div>
	                  	</div>
	               	</div>
	               <!-- JS -->
	               <script src="{{ URL::asset('js/SmoothScroll_v0.9.9.js') }}" type="text/javascript"></script>
	               <script src="{{ URL::asset('js/jquery.royalslider.min.js') }}"></script>
	               <script src="{{ URL::asset('js/TweenMax.min.js') }}"></script>
	               <script src="{{ URL::asset('js/main.js') }}" type="text/javascript"></script>
               </p>
            </div>
        </div>
    </div>
    <!-- End of slider -->

    <div class="customer-care-modal-wrapper">
        <div class="customer-service" data-modal-id="customer-care">
            <button data-remodal-action="close" class="close-button"></button>
            <h4 class="modal-title">Customer service</h4>
            <aside>
               	<h4 class="section-title">Helpline</h4>
               	<div class="helpline-section">
                  	<div class="helpline-hours">
                     PN-PT 9:00-19:00,<BR>SB 11:00-15:00<BR><BR><BR>
                  	</div>
                  	<div class="helpline-phone">
                     800 802 020
                  	</div>
               	</div>
               	<div class="helpline-section">
                  	<div class="helpline-address">
                     LPP S.A.<BR>ul. Łąkowa 39/44<BR>80-769 Gdańsk<BR>Sąd Rejonowy Gdańsk-Północ w Gdańsku VII Wydział Gospodarczy<BR>Kapitał zakładowy 3 662 246 PLN (zapłacony w całości)<BR>REGON: 190852164
                  	</div>
               	</div>
            </aside>
            <section>
               <h4 class="section-title">Contact Us</h4>
               <form data-action="#" id="contactForm" method="post" class="form">
                  <div class="form-group ">
                     <label class="control-label" for="firstname">Imię*</label>
                     <div class="input-icon ">
                        <input class="form-control"
                           type="text"
                           maxlength="30"
                           name="firstname"
                           id="firstname"
                           title="Imię"
                           placeholder="Imię"
                           value=""
                           data-error="Musisz wpisać swoje imię"
                           data-valid='{"type":"name"}'
                           data-helper="Wpisz swoje imię">
                     </div>
                  </div>
                  <div class="form-group ">
                     <label class="control-label" for="lastname">Nazwisko*</label>
                     <div class="input-icon ">
                        <input class="form-control"
                           type="text"
                           maxlength="30"
                           name="lastname"
                           id="lastname"
                           title="Nazwisko"
                           placeholder="Nazwisko"
                           value=""
                           data-error="Musisz wpisać swoje nazwisko"
                           data-valid='{"type":"name"}'
                           data-helper="Wprowadź swoje nazwisko">
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
                     <label class="control-label" for="email">Wybierz dział*</label>
                     <div class="select">
                        <select name="departaments">
                           <option selected="selected" disabled value="0">Wybierz dział</option>
                        </select>
                        <div class="select-arrow"></div>
                     </div>
                  </div>
                  <div class="form-group select-group">
                     <label class="control-label" for="email">Wybierz temat*</label>
                     <div class="select">
                        <select name="subjects"></select>
                        <div class="select-arrow"></div>
                     </div>
                  </div>
                  <div class="form-group textarea-group">
                     <label class="control-label">Komentarz*</label>
                     <textarea class="form-control"
                        name="comment"
                        title="Komentarz"
                        cols="5" rows="3"
                        data-valid='{"type":"text", "required": 1}'
                        data-error="Musisz wpisać swoją wiadomość"
                        data-helper="Wpisz wiadomość"></textarea>
                  </div>
                  <div class="form-group required-fields-info">
                     <h5>* Pola Wymagane</h5>
                  </div>
                  <div class="form-group checkbox-list checkbox-agree">
                     <label class="control control-checkbox">
                        <input type="checkbox" name="agree" id="checkboxAgree">
                        <div class="control-indicator"></div>
                        * Wyrażam zgodę na przetwarzanie moich danych osobowych przez LPP S.A. z siedzibą w Gdańsku ul. Łąkowa 39/44. <BR></ br><BR></ br><BR>Podanie danych jest dobrowolne, jednakże brak zgody na przetwarzanie danych osobowych uniemożliwia udzielenie odpowiedzi na pytanie. Klientowi przysługuje prawo dostępu do swoich danych i ich poprawiania.<BR></ br><BR></ br><BR><a href='{{ route('full-privacy-policy') }}' target='_blank'>Przejdź do regulaminu</a>                
                     </label>
                  </div>
                  <div class="form-group action-buttons">
                     <button class="btn fancy-btn" type="button">Wyślij</button>
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
