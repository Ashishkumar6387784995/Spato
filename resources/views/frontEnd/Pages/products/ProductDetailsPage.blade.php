<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <!-- 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <style>
  /* Imports */


  /* .sidebar {
   height: 100vh;
   width: 200px;
   /* background-color:#252627;
  } */

  .menu {
   user-select: none;
   display: flex;
   justify-content: space-around;
   width: 100%;
   /* height: 50px; */
   display: flex;
   align-items: center;
   color: white;
   transition-duration: 0.3s;
  }

  /* Container for all Pages */
  .allpage {
   display: flex;
  }

  /* Container for single page */
  .page {
   width: 100%;
   /* padding: 50px; */
   animation: fadein 0.3s 1 ease-out;
  }

  /* Style for permalinks */
  a {
   color: var(--main-col);
  }

  /* Fade in animation */
  @keyframes fadein {
   from {
    transform: translateY(20px);
    opacity: 0;
   }

   to {
    transform: translateY(0px);
   }
  }

  /* Add margin to every element in a page */
  .page * {
   margin: 10px;
  }

  .menu * {
   transform: translateX(0px);
   transition-duration: 0.3s;
  }

  /* Translate the menu text to the right on hover */
  .menu:hover>* {
   transition-duration: 0.3s;
   transform: translateX(20px);
  }

  /* Disable and enable arrow on hover */
  .menu>i {
   opacity: 0;
  }

  .menu:hover>i {
   opacity: 1;
  }

  /* Translate the arrow logo right on click */
  .menu:active>i {
   margin-left: 10px;
  }




  .product-details {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 1.5%, 100% 0%, 100% 100%, 0% 100%);
  }



  .product-details nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
   font-weight: 600;
  }

  .product-details nav ol li:nth-child(3) {
   color: var(--blue) !important;
   font-weight: 600;
  }

  .agb-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .agb-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .product-details {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   /* footer .footer-container {
    width: 96%;
  } */
  }


  .about {
   font-size: 14px
  }

  .color {
   margin-bottom: 10px
  }

  label.radio {
   cursor: pointer
  }

  label.radio input {
   position: absolute;
   top: 0;
   left: 0;
   visibility: hidden;
   pointer-events: none
  }

  label.radio span {
   padding: 2px 9px;
   border: 2px solid #ff0000;
   display: inline-block;
   color: #ff0000;
   border-radius: 3px;
   text-transform: uppercase
  }

  label.radio input:checked+span {
   border-color: #ff0000;
   background-color: #ff0000;
   color: #fff
  }

  #main-image {
   border: 1px solid var(--blue);
   padding: 10px 15px;
   width: 100%;
   background-color: #fff;
  }

  .thumbnail img {
   background-color: #fff;
   border: 1px solid var(--blue);
  }

  .btn:focus {
   box-shadow: none
  }

  .brand-details .list ul {
   padding: 0;
  }

  .brand-details .list ul li {
   list-style-type: none;
   width: 50%;
   display: flex;
   padding: 2px 8px;
   justify-content: space-between;
  }

  .brand-details .list ul li:nth-child(2) {
   background-color: #fff;
  }

  .brand-details .list ul li:nth-child(4) {
   background-color: #fff;
  }

  .brand-details .list .button-counter {
   display: flex;
   width: 90%;
   justify-content: space-between;
  }

  .brand-details .list .button-counter .btn {
   background-color: #656565;
   color: #fff;
   font-weight: 600;
   width: 55%;
  }

  .brand-details h1 {
   font-size: 26px;
   color: #606060;
  }

  .brand-details p {
   font-size: 15px;
  }

  .counter {
   width: 30%;
   display: flex;
   justify-content: center;
  }

  .counter-btn {
   background: transparent;
   border: none;
   font-size: 25px;
   margin-top: -10px;
   color: #606060;
  }

  #counter-value {
   background-color: #fff;
   padding: 5px 15px;
   text-align: center;
   border: 0.5px solid #606060;
  }

  .product-particular-detail .product-size {
   color: #36A902;
   font-weight: 600;
  }

  .availibility .check {
   font-weight: 600;
  }

  .availibility input {
   text-align: center;
   background-color: #fff;
   padding: 2px 35px;
   border: 1px solid #000;
   border-radius: 3px;
   color: #606060;
  }

  .availibility .btn {
   background-color: var(--blue);
   padding: 3px 30px;
   color: #fff;
   font-weight: 600;
   border: 2px solid var(--blue);
   margin: 5px;
  }

  .availibility .btn:hover {
   border: 2px solid var(--blue);
  }

  .cart .btn {
   text-align: center;
   width: 100%;
   background-color: var(--blue);
   color: var(--white);
   border: 1px solid var(--blue);
   font-weight: 600;
   transition: 0.5s;
  }

  .cart .btn:hover {
   background-color: var(--white);
   border: 1px solid var(--blue);
   color: var(--blue);
   box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .product-particular-detail {
   text-align: right;
  }

  .product-price {
   font-weight: 600;
  }

  .product-price .price {
   font-size: 25px;
   color: var(--blue);
   font-weight: 800;
  }

  .product-desc {
   margin-top: 8rem;
   width: 85%;
  }

  .product-desc .product-desc-heading {
   font-size: 25px;
  }

  .review {
   width: 90%;
  }

  .review .ratings {
   background-color: #fff;
   padding: 5px 20px;

  }


  .review .ratings .name {
   display: flex;
   justify-content: space-between;
  }

  .review .ratings p {
   margin: 0;
  }

  .review .ratings img {
   width: 60px;
   height: 15px;
  }

  .related-products .card {
   height: 400px;
   padding: 0;
  }

  .related-products li {
   font-size: 13px;
  }
  </style>

 </head>

 <body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')


  <section class="product-details">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
      <li class="breadcrumb-item">Pool Products</li>
      <li class="breadcrumb-item active" aria-current="page">MSI WS Series</li>
     </ol>
    </nav>
    <div class="mt-5 mb-5">
     <div class="">
      <div class="">
       <div class="product">
        <div class="row">
         <div class="col-md-4">
          <div class="images ">



           <div class="text-center p-4"> <img id="main-image" src="{{ asset('storage/' . $product[0]->Bild_1) }}"
             width="350" height="300" />
           </div>

           <div class="thumbnail text-center">
            <img onclick="change_image(this)" src="{{ asset('storage/' . $product[0]->Bild_1) }}" width="70"
             height="70">
            <img onclick="change_image(this)" src="{{ asset('storage/' . $product[0]->Bild_2) }}" width="70"
             height="70">
            <img onclick="change_image(this)" src="{{ asset('storage/' . $product[0]->Bild_3) }}" width="70"
             height="70">
            <img onclick="change_image(this)" src="{{ asset('storage/' . $product[0]->Bild_4) }}" width="70"
             height="70">
           </div>
          </div>
         </div>
         <div class="brand-details col-md-4">
          <h1>Product name - {{$product[0]->Artikelname}}</h1>
          <p>MSI MPG Trident 3</p>
          <div class="list">
           <ul>
            <li class="item-list"><span>lorem</span> <span>0,56</span></li>
            <li class="item-list"><span>lorem</span> <span>0,56</span></li>
            <li class="item-list"><span>lorem</span> <span>0,56</span></li>
            <li class="item-list"><span>lorem</span> <span>0,56</span></li>
           </ul>
           <div class="button-counter">

            <button class="btn">Estashiboneoe</button>

            <div class="counter">
             <button class="counter-btn" id="decrement-btn">-</button>
             <div id="counter-value">0</div>
             <button class="counter-btn" id="increment-btn">+</button>
            </div>
            <input type="text" name="product_id" id="product_id" value="{{$product[0]->Artikelname}}"
             style="display:none;" />
           </div>
          </div>
         </div>



         <div class="col-md-4">
          <div class="product p-4">

           <div class="product-particular-detail mt-4 mb-3">
            <p class="product-size">Auf Large</p>
            <p class="model-number">Model No.#7389392930</p>
            <p class="product-price">
             <span class="price">25,30€</span> Statt 42,45 €
            </p>
           </div>
           <div class="cart mt-4 align-items-center">
            <a href="#" class="btn addToCartButton" data-product-id="{{$product[0]->id}}" data-quantity="1"
             data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">IN DEN
             WARENKORB</a>
            <button class="btn text-uppercase mt-3" id="quoteButton">Fordern Sie ein Angebot an</button>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <form action="">
     <div class=" container availibility">
      <p class="check">Check Delivery Availability</p>
      <div class="search">
       <input type="text" name="pin-code" id="pin" placeholder="Enter pincode">
       <button class="btn">SEARCH</button>
      </div>
     </div>
    </form>

    <div class="product-desc">
     <h3 class="product-desc-heading">Product Description</h3>
     <p class="desc">Sette anni fa, abbiamo deciso di creare un modo davvero rivoluzionario per prenderci cura delle
      nostre piscine senza spendere una fortuna, e sai una cosa? Alla fine abbiamo decifrato il codice con il nostro
      marchio locale di forniture per piscine, Water TechniX, realizzato e di proprietà esclusiva di Mr Pool Man
      <br><br>
      Abbiamo preso anni di feedback dai clienti, il buono, il brutto e il cattivo, e abbiamo combinato tutto questo in
      un piccolo pacchetto ordinato. Eliminare tutto ciò che non è essenziale e lasciare solo ciò che i proprietari di
      piscine stanno cercando: attrezzature e prodotti chimici per piscine efficienti e convenienti! Scopri di più qui.
     </p>
    </div>

    <div class="specification mt-5">
     <h3 class="specification-heading">Specification</h3>
     <p>Features</p>
     <ul>
      <li> Engineered with stainless steel bearings & mechanical seal</li>
      <li>Industry leading 100% copper wound motor</li>
      <li>High flow ports with unions to suit all pipes- 50mm Inner diameter, 60mm outer diameter</li>
      <li>Ergonomic cam-lock lid with easy to open handles</li>
      <li>Oversized capacitor for consistent, reliable performance</li>
      <li>Hydraulic designed for whisper quiet operation at 60dBa</li>
      <li>Impact resistant, anti-corrosive, UV resistant ABS housing that is built to last</li>
      <li>Sleek elevated design to avoid moisture ingress</li>
      <li>Low maintenance large lint basket for all debris</li>
      <li>Drain plugs to remove all water from the pump</li>
      <li>240 Volts, 50Hz single phase 10amp Australian lead to connect directly into power</li>
      <li>Plumbing inlet height of 190mm then back to centre outlet of 350mm</li>
      <li>Compact design for tight areas - 62cm Long x 19cm Wide</li>
      <li>1.5Hp max flow rate: 286 lpm</li>
     </ul>
    </div>
    <div class="review mt-5">
     <h3 class="review-heading">Review</h3>
     <div class="ratings mt-3">
      <div class="name">
       <p>Lisa Smith</p>
       <img src="{{ asset('assets/frontEnd/web/images/star.png')}}" alt="" srcset="">
      </div>
      <p>The pool cleaner works perfectly. Highly recommended!</p>
     </div>

     <div class="ratings mt-3">
      <div class="name">
       <p>Lisa Smith</p>
       <img src="{{ asset('assets/frontEnd/web/images/star.png')}}" alt="" srcset="">
      </div>
      <p>The pool cleaner works perfectly. Highly recommended!</p>
     </div>

     <div class="ratings mt-3">
      <div class="name">
       <p>Lisa Smith</p>
       <img src="{{ asset('assets/frontEnd/web/images/star.png')}}" alt="" srcset="">
      </div>
      <p>The pool cleaner works perfectly. Highly recommended!</p>
     </div>

     <div class="ratings mt-3">
      <div class="name">
       <p>Lisa Smith</p>
       <img src="{{ asset('assets/frontEnd/web/images/star.png')}}" alt="" srcset="">
      </div>
      <p>The pool cleaner works perfectly. Highly recommended!</p>
     </div>
    </div>




    <!-- Related Product starts -->
    <section class="related-products pt-5 pb-5 container">
     <h3 class="mb-3">Related Products</h3>
     <div class="row">
      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>

      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>

      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>


      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>
     </div>
    </section>
    <!-- Related Product ends -->

    <!-- Featured product starts -->
    <section class="related-products pt-5 pb-5 mb-5 container">
     <h3 class="mb-3">Featured product</h3>
     <div class="row">
      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>

      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>

      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>


      <div class="card col">
       <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." />
       <div class="card-body">
        <h5 class="card-title">Saugrobroter</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="btn">IN DEN WARENKORB</a>
      </div>
     </div>
    </section>
    <!--Featured product ends -->



   </div>
  </section>
  @include('frontEnd/partial/rightSidebar')
  @include('frontEnd/partial/footer')



  <!-- Login Form Modal starts -->



  <div class="modal fade" id="exampleLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <a class="" href="#"><img class="signup-brand-logo" src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}"
        alt="" srcset="" />

      </a>


      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

     </div>
     <p class="form-header-content text-center">
      Wenn Sie ein Konto haben, melden Sie sich mit Ihrer E-Mail-Adresse an
     </p>
     <div class="modal-body">
      <form id="">
       <span id="erro-message" style="color:red;"></span>
       <div class="mb-3">
        <label for="recipient-name" class="col-form-label">E-mail*</label>
        <input type="text" class="form-control" id="emai" name="email" require>
        <span id="emai-err" style="color:red;"></span>
       </div>
       <div class="mb-3">
        <label for="message-text" class="col-form-label">Password*</label>
        <input type="password" class="form-control" id="passwor" name="password" require>
        <span id="passwor_err" style="color:red;"></span>
       </div>
       <button type="button" class="btn btn-style" id="exampleLogin">Login</button>
      </form>
      <p class="foget-password d-flex"><a style="text-decoration:underline;" type="button" data-bs-toggle="modal"
        data-bs-target="#exampleModal1" class="nav-link" href="#">Passwort vergessen?</a></p>
      <p class="foget-password d-flex">Sie haben kein Konto?<span><a style="text-decoration:underline;" type="button"
         data-bs-toggle="modal" data-bs-target="#exampleModal2" class="nav-link ps-3" href="#"> Hier
         registrieren.</a></span></p>
     </div>
     <div class="modal-footer">

     </div>
    </div>
   </div>
  </div>
  <!--  Login Form Modal ends -->








  <script>
  $('#quoteButton').on('click', function() {

   var guestToken = localStorage.getItem('guestToken');
   console.log(guestToken);
   if (!guestToken) {
    guestToken = generateGuestToken();
    localStorage.setItem('guestToken', guestToken);
   }

   var product_id = $('#product_id').val();
   // console.log('p'+product_id);


   var authToken = localStorage.getItem('authToken');
   // console.log('authToken');
   if (!authToken) {

    $('#exampleLogin').modal('show');
    $('.sidebar').hide();

   } else {
    window.location.href = '/api/quotes/' + product_id;
   }


  });
  </script>


  <script>
  $(document).ready(function() {
   $('#exampleLogin').click(function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    console.log('hello');
    // Clear previous error messages
    $('#erro-message').text('');
    $('#emai-err').text('');
    $('#passwor-err').text('');

    // Get form data
    var formData = {
     email: $('#emai').val(),
     password: $('#passwor').val()
    };

    // Client-side validation
    if (!formData.email) {
     $('#emai-err').text('Please enter your email.');
     return;
    }

    if (!formData.password) {
     $('#passwor-err').text('Please enter your password.');
     return;
    }




    // Perform AJAX request
    $.ajax({
     type: 'POST',
     url: '/api/login',
     dataType: 'json',
     data: formData,
     success: handleLoginResponse,
     error: handleAjaxError
    });
   });
  });

  // Rest of your code...


  // Common function to handle login response
  function handleLoginResponse(response) {
   if (response.success) {
    console.log(response.token);
    localStorage.setItem('authToken', response.token);

    console.log(response.role);

    var product_id = $('#product_id').val();
    console.log('p' + product_id);

    if (response.role == "Admin") {
     window.location.href = '/api/admin_dashboard/admin';
    } else if (response.role == "b2b") {
     window.location.href = '/api/admin_dashboard/b2b';
    } else {
     window.location.href = '/api/quotes/' + product_id;
    }
   } else if (response.error) {
    $('#erro-message').text(response.error);
   }
  }

  // Common function to handle AJAX errors
  function handleAjaxError(jqXHR, textStatus, errorThrown) {
   console.error('AJAX Error:', textStatus, errorThrown);
   // Handle the error as needed
  }
  </script>





























































  <script>
  function change_image(image) {

   var container = document.getElementById("main-image");

   container.src = image.src;
  }
  document.addEventListener("DOMContentLoaded", function(event) {});
  </script>

  <script>
  let counter = 0;
  const counterValue = document.getElementById('counter-value');
  const incrementBtn = document.getElementById('increment-btn');
  const decrementBtn = document.getElementById('decrement-btn');

  // To increment the value of counter
  incrementBtn.addEventListener('click', () => {
   counter++;
   counterValue.innerHTML = counter;


  });

  // To decrement the value of counter
  decrementBtn.addEventListener('click', () => {
   if (counter > 0) {
    counter--;
    counterValue.innerHTML = counter;
   }
  });
  </script>



 </body>

</html>