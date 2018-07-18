@extends('main')
@section('title','Frequently Asked Questions')
@section('class','cms-page-view cms-faq')
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
                     <span title="Frequently asked questions">Frequently asked questions</span>
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
            <h1>FAQ</h1>
            <h3>How long does it take and how much does it cost?</h3>
            <p>Delivery cost and time depend on the selected option:<br />- Reception in the store: up to 2-3 working days. KES 0,00&nbsp;<br />- Standard delivery online payment: up to 2-3 working days. KES 200</p>
            <p>- Standard delivery payment for pick up: up to 2-3 working days. KES 250</p>
            <p>- Express delivery: 1-2 business days. KES 550&nbsp;</p>

            <h3>How can I get a refund?</h3>
            <div class="WordSection1">
               <p>Within 365 days of receipt of your shipment in any Haus Valeriaa store or partner store.</p>
            </div>

            <h3>How do I sign up for Haus Valeriaa online store?</h3>
            <p>To sign up for an online store click on the "Login" icon in the upper right corner of the site and then enter your email, name, phone number and password. The registration can be done the same way through the next steps of order fulfillment.</p>

            <h3>What are the benefits of setting up an online merchant account?</h3>
            <p>First of all, you can keep your shipping addresses and the data you need to issue invoices, track your order, submit return and claim forms, and get in touch with your Customer Service orders.</p>

            <h3>Do I need additional software to use the online store?</h3>
            <p>The service is tailored to the browsers: Google Chrome 23 and later browser versions, Mozilla Firefox 16 and later browser versions, additional software is not needed.</p>

            <h3>Are the prices in the stores and online store the same?</h3>
            <p>Yes, the basic offer of the online store and stationary is no different. Online stores and stationary stores, however, can periodically offer a variety of promotions.</p>

            <h3>How can I subscribe to the newsletter?</h3>
            <p>You can subscribe to the newsletter by clicking on the "Newsletter" from the bottom menu (available on each page) or by ticking the "Save me to newsletter" box when you finish your order.</p>

            <h3>How can I unsubscribe?</h3>
            <p>The link to unsubscribe from the newsletter is provided in the footer of each newsletter.</p>

            <h3>What if I do not remember my password for my account?</h3>
            <p>In the login / registration screen, click on the "I forgot my password" link and then enter the email address you used when registering. At this address we will send you a link to the page where you will enter and confirm the new password.</p>

            <h3>How can I contact Customer Service?</h3>
            <p>There are two ways to contact Customer Service: by phone and by filling in the contact form available after clicking "Contacts" in the bottom menu. A similar form, but only for a specific order, is available in the Customer panel under each order.</p>

            <h3>How can I make a purchase?</h3>
            <p>For detailed information on how to proceed through the purchase process, see the "How to Buy" tab.</p>

            <h3>Can I book a product without buying it?</h3>
            <p>Products that you add to your cart or to the list are not reserved. They are only available at the time of payment for online payments or at the time of placing an order for payment.</p>

            <h3>How can I make sure the shopping process is done correctly?</h3>
            <p>Once you have completed your purchase, you will receive a confirmation of your order.</p>

            <h3>Can I see what happens to my order?</h3>
            <p>The basic order information is assigned to the status that you can see when you sign in to your account. In addition, for registered users, we provide you with a tracking option in your account that redirects to the courier service directly to the shipping information screen.</p>

            <h3>What are the order statuses displayed for my orders in the Customer panel?</h3>
            <p>"New" - means that your order has been accepted.<br />"Canceled" means that the entire order has been canceled. If the order was paid in advance, after cancellation, money will be returned within a few days of cancellation.<br />"In execution" - means that the order has been handed over for completion.<br />"Sent" - means that the ordered products were packed and shipped from the warehouse to the address you indicated.<br />"Waiting for reception in the salon" - means that the ordered products are in the salon you are ready to receive.<br />"Inbox" means that the ordered products have been received.</p>

            <h3>What is "order tracking" in my orders?</h3>
            <p>This option allows you to check the delivery status of your order. Shipping information on the courier page can only be checked after the parcel has been shipped. Before this moment, after clicking "tracking the shipment" you will receive on the courier the information that the shipment with the given number of the consignment note has not been found. The "order tracking" option is not available for items received in the House showrooms.</p>

            <h3>Can I modify or cancel my order?</h3>
            <p>Yes, you can cancel your order by calling Customer Service or filling out an online form. Self-change or cancellation of an order is available to individuals logged in for 15 minutes after ordering.</p>

            <h3>What should I do if I receive a defective or incorrect product?</h3>
            <p>Contact Customer Service. You can do this via the contact form available after clicking on "Contacts" in the bottom menu of your site or in your Customer panel at each order.</p>
            
            <h3>At what point does the amount for the order get from my bank account?</h3>
            <p>The amount you pay for your order is charged to your account at the time of placing your order, but it is only paid when your order is packed and ready for shipping.</p>
         </div>
      </div>
   </div>
</div>

@include('customercare')

@endsection