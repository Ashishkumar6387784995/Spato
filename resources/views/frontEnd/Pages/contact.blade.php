<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <style>
  :root {
   --blue: #44e1d5;
   --black: #54606c;
   --white: #ffffff;
  }

  .contact-us {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }

  .contact-us nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
   font-weight: 600;
  }

  .contact-us nav ol li:nth-child(2) {
   color: var(--blue) !important;
   font-weight: 600;
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

  .contact-details {
   background-color: #ffffff;
   border-radius: 5px;
  }

  .contact-us .btn {
   background-color: #44e1d5;
   border: 1px solid #44e1d5;
   width: 100%;
   font-weight: 600;
   color: var(--white);
  }

  .contact-us .btn:hover {
   border: 1px solid #44e1d5;
   color: var(--blue);
  }



  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .contact-us {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
    padding-top: 2rem;
   }

   .contact-us .content {
    display: block;
   }

   .contact-us .address {
    width: 100% !important;
    margin: 2rem 0rem;
   }

   .contact-us .form {
    width: 100% !important;
   }


   /* footer .footer-container {
    width: 96%;
  } */
  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">
  <!-- Header -->
  @include('frontEnd/partial/header')
  <!-- Header -->
  <section class="contact-us">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">
       Contact us
      </li>
     </ol>
    </nav>




    <h1 class="text-start" style="font-size: 25px; font-weight: 600; color: black;">Contact Us</h1>
    <p class="details mb-2">
     We love hearing from you, our Shop customers.
     <br />
     Please contact us and we will make sure to get back to you as soon as we possibly can.
    </p>
    <form id="enquiryForm">
     <div class="row content">
      <div class="col-8 form">
       <div class="row g-3 mb-5">
        <span id="success_msg" style="color:#44e1d5; font-size:25px; font-weight:700;"></span>
        <div class="col">

         <label for="exampleFormControlInput1" class="form-label">Your Name <span style="color:red;">*</span></label>
         <input type="text" class="form-control" name="enquiry_name" id="enquiry_name" placeholder="First name"
          aria-label="First name">
         <span id="enquiry_name_err" style="color:red; "></span>
        </div>
        <div class="col">
         <label for="exampleFormControlInput1" class="form-label">Your Email <span style="color:red;">*</span></label>
         <input type="text" class="form-control" me="enquiry_email" id="enquiry_email" placeholder="Your Email"
          aria-label="Your Email">
         <span id="enquiry_email_err" style="color:red; "></span>
        </div>
       </div>
       <div class="row g-3 mb-5">
        <div class="col">
         <label for="exampleFormControlInput1" class="form-label">Your Phone Number <span
           style="color:red;">*</span></label>
         <input type="text" class="form-control" me="enquiry_phone" id="enquiry_phone" placeholder="Your Phone"
          aria-label="Your Phone">
         <span id="enquiry_phone_err" style="color:red; "></span>
        </div>
        <div class="col">
        </div>
       </div>
       <div class="row g-3">
        <div class="col">
         <label for="exampleFormControlTextarea1" class="form-label">What's on your mind? <span
           style="color:red;">*</span></label>
         <textarea class="form-control" id="textarea" name="textarea" rows="8"></textarea>
         <span id="textarea_err" style="color:red; "></span>
        </div>
       </div>
       <div class="row g-3">
        <div class="col">
         <button type="submit" class="btn mt-5">Submit</button>
        </div>
       </div>
    </form>
   </div>
   <div class="col-4 ps-3 address">
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
       <p class="details">Monday - Thursday: 9:00 AM - 5:30 PM <br />

        Friday 9:00 AM - 6:00 PM <br />

        Saturday: 11:00 AM - 5:00 PM</p>
      </div>
     </div>
     <div class="row">
      <div class="col-2"></div>
      <div class="col-10">
       <h6>E-mail:</h6>
       <p class="details"> <a href="#" style="text-decoration: none; color:#000;">shop@email.com</a></p>
      </div>
     </div>
    </div>
   </div>
   </div>
  </section>
  <!-- Footer -->
  @include('frontEnd/partial/footer')
  <!-- Footer -->




  <script>
  $(document).ready(function() {
   $("#enquiryForm").submit(function(e) {
    e.preventDefault();

    $('#success_msg').text('');
    $('#enquiry_name_err').text('');
    $('#enquiry_email_err').text('');

    $('#enquiry_phone_err').text('');
    $('#textarea_err').text('');



    // Create a FormData object
    var formData = new FormData();

    // Append data to FormData object
    formData.append('enquiry_name', $('#enquiry_name').val());
    formData.append('enquiry_email', $('#enquiry_email').val());
    formData.append('enquiry_phone', $('#enquiry_phone').val());
    formData.append('textarea', $('#textarea').val());


    console.log(formData);

    $.ajax({
     url: '/api/contactSubmit',
     type: 'POST',
     data: formData,
     contentType: false,
     processData: false,

     success: function(response) {
      if (response.message) {
       $('html, body').animate({
        scrollTop: 0
       }, 'fast');
       console.log(response.message);
       $('#success_msg').text(response.message);
       $('#enquiryForm')[0].reset();
      }

      if (response.errors) {
       $('html, body').animate({
        scrollTop: 0
       }, 'fast');
       console.log(response.errors);
       if (response.errors['enquiry_name']) {

        $('#enquiry_name_err').text(response.errors['enquiry_name']);
       }

       if (response.errors['enquiry_name']) {

        $('#enquiry_email_err').text(response.errors['enquiry_email']);
       }

       if (response.errors['enquiry_phone']) {

        $('#enquiry_phone_err').text(response.errors['enquiry_phone']);
       }

       if (response.errors['textarea']) {

        $('#textarea_err').text(response.errors['textarea']);
       }


      }



     },
     // error: function(xhr, status, error) {
     //   // Handle error, for example, show an error message
     //   console.error(xhr.responseText);
     //   alert('Error submitting quote. Please try again.');
     // }
    });
   });
  });
  </script>










 </body>

</html>