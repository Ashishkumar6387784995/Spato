<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script> -->

  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
  .page-not-found {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   /* clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%); */
  }

  .image {
   width: 100%;
   height: 450px;
  }

  .image img {
   margin-top: -5rem;
   width: 100%;
   height: 700px;
  }

  .error-text {
   position: absolute;
   /* top: 0; */
   left: 40%;
   margin: auto;
   text-align: center;
  }

  .error-text h1 {
   font-size: 100px;
   font-weight: 800;
  }

  .error-text p {
   font-size: 50px;
   font-weight: 600;
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .page-not-found {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }



   .image {
    height: 450px;
    margin-bottom: -7rem;
   }

   .image img {
    margin-top: -5rem;
    height: 500px;
   }

   .error-text {
    left: 15%;
   }

   .error-text h1 {
    font-size: 50px;
   }

   .error-text p {
    font-size: 35px;
   }
  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header');
  <section class="page-not-found">
   <div class="image">
    <div class="error-text">
     <h1>404</h1>
     <p>Page Not Found</p>
    </div>
    <img src="{{ asset('assets/frontEnd/web/images/not-found.gif')}}" alt="" srcset="">

   </div>
  </section>


  @include('frontEnd/partial/footer')
 </body>

</html>