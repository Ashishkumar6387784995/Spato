<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add to cart</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
  .cart-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
  }

  .cart-container nav .home {
   color: var(--black) !important;
   text-decoration: none !important;
  }

  .cart-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .cart-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }



  .cart-container .content h6 {
   font-weight: 600;
   font-size: 18px;
   color: black;
  }

  .cart-container .content .details {
   text-align: justify;
   font-size: 14px;
  }

  .contact-details {
   background-color: #ffffff;
   border-radius: 5px;
  }

  .cart-container .btn {
   background-color: #44e1d5;
   border: 1px solid #44e1d5;
   width: 90%;
   font-weight: 600;
   color: var(--white);
   margin: auto;
   justify-content: center;
   display: block;
   text-align: center;
  }

  .cart-container .btn:hover {
   border: 1px solid #44e1d5;
   color: var(--blue);
  }

  .cart-container .details p {
   margin: 0;
   padding: 0;
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .cart-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   /* footer .footer-container {
    width: 96%;
  } */
  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header')
  <section class="cart-container">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cart</li>
     </ol>
    </nav>





    <h1 class="text-start" style="font-size: 25px; font-weight: 600; color: black;">Contact Us</h1>
    <p class="details mb-5">
     We love hearing from you, our Shop customers.
     <br />
     Please contact us and we will make sure to get back to you as soon as we possibly can.
    </p>
    <div class="row content">
     <div class="col-8 form">
      <div class="row g-3 mb-5">
       <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Your Name <span style="color:red;">*</span></label>
        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
       </div>
       <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Your Email <span style="color:red;">*</span></label>
        <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email">
       </div>
      </div>
      <div class="row g-3 mb-5">
       <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Your Phone Number <span
          style="color:red;">*</span></label>
        <input type="text" class="form-control" placeholder="Your Phone" aria-label="Your Phone">
       </div>
       <div class="col">
       </div>
      </div>
      <div class="row g-3">
       <div class="col">
        <label for="exampleFormControlTextarea1" class="form-label">What's on your mind? <span
          style="color:red;">*</span></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
       </div>
      </div>

     </div>
     <div class="col-4  address">
      <div class="contact-details container">
       <h3 class="pt-3">Summary</h3>
       <div class="row">
        <div class="col">
         <div class="accordion" id="accordionExample">
          <div class="accordion-item">
           <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             Estimate Shipping and Tax
            </button>
           </h2>
           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1"
               placeholder="Enter your destination to get a shipping estimate." rows="3"></textarea>
             </div>
            </div>
           </div>
          </div>

          <div class="accordion-item">
           <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             Apply Discount Code
            </button>
           </h2>
           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <div class="mb-3 d-flex">
              <input type="text" class="form-control" id="address" placeholder="Enter your discount coupon">
              <button type="submit" class="btn ms-2" style="width:30%;">Apply</button>
             </div>
            </div>
           </div>
          </div>
          <hr />
          <div class="details d-flex justify-content-between">
           <p>Subtotal</p>
           <p>$13,047.00</p>
          </div>

          <div class="details d-flex justify-content-between">
           <p>Shipping </p>
           <p>$21.00</p>

          </div>

          <div class="details d-flex justify-content-between">
           <p>Tax</p>
           <p>$1.91</p>
          </div>

          <div class="details d-flex justify-content-between">
           <p>Order Total</p>
           <p>$13,068.00</p>
          </div>


         </div>
        </div>
       </div>
       <div class="row">
        <div class="col">
         <button type="submit" class="btn mt-5 mb-3">Proceed to Checkout</button>
        </div>
       </div>
      </div>
     </div>

    </div>
  </section>


  @include('frontEnd/partial/footer')
 </body>

</html>