<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
    <style>
      .contact-us {
        background-color: #eaebef;
        /* margin-top: -10rem; */
        padding-top: 5rem;
        margin-bottom: -10rem;
        padding-bottom: 10rem;

        clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
      }
      .contact-us nav .home {
        color: var(--black) !important;
        text-decoration: none !important;
      }

      .contact-us .content h6 {
        font-weight: 600;
        font-size: 18px;
        color: black;
      }

      .contact-us .content .details {
        text-align: justify;
        font-size: 14px;
      }
      .contact-details{
       background-color: #ffffff;
       border-radius: 5px;
      }
      @media screen and (max-device-width: 480px) and (orientation: portrait) {
        .contact-us {
          clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
        }
        /* footer .footer-container {
    width: 96%;
  } */
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
 <!-- Header -->
 @include('frontEnd/partial/header');
 <!-- Header -->
    <section class="contact-us">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact us
            </li>
          </ol>
        </nav>




        <h1 class="text-start" style="font-size: 25px; font-weight: 600; color: black;">Contact Us</h1>
        <p class="details mb-5">
         We love hearing from you, our Shop customers.
         <br/>
        Please contact us and we will make sure to get back to you as soon as we possibly can.
       </p>
        <div class="row content">
          <div class="col-8">
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
            <label for="exampleFormControlInput1" class="form-label">Your Phone Number <span style="color:red;">*</span></label>
             <input type="text" class="form-control" placeholder="Your Phone" aria-label="Your Phone">
           </div>
           <div class="col">
           </div>
         </div>
         <div class="row g-3">
          <div class="col">
           <label for="exampleFormControlTextarea1" class="form-label">What's on your mind? <span style="color:red;">*</span></label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
          </div>
        </div>
          </div>
          <div class="col-4 ps-3">
           <div class="contact-details py-4 pe-3">
            <div class="row">
             <div class="col-2"></div>
             <div class="col-10">
              <h6>Address:</h6>
<p class="details"> 1234 Street Adress City Address, 1234</p>
             </div>
            </div>
            <div class="row">
             <div class="col-2"></div>
             <div class="col-10">
              <h6>Phone:</h6>
<p class="details">(00)1234 5678</p>
             </div>
            </div>
            <div class="row">
             <div class="col-2"></div>
             <div class="col-10">
              <h6>We are open:</h6>
<p class="details">Monday - Thursday: 9:00 AM - 5:30 PM <br/>

 Friday 9:00 AM - 6:00 PM <br/>
 
 Saturday: 11:00 AM - 5:00 PM</p>
             </div>
            </div>
            <div class="row">
             <div class="col-2"></div>
             <div class="col-10">
              <h6>E-mail:</h6>
<p class="details"> <a href="#" style="text-decoration: none;">shop@email.com</a></p>
             </div>
            </div>
           </div>
          </div>
      </div>
    </section>
<!-- Footer -->
@include('frontEnd/partial/footer')
<!-- Footer -->
  </body>
</html>
