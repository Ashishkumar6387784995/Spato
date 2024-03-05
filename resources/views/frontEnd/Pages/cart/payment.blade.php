<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
    .checkout-container {
      background-color: #eaebef;
      /* margin-top: -10rem; */
      padding-top: 5rem;
      margin-bottom: -10rem;
      padding-bottom: 10rem;
    }

    .checkout-container nav ol li a {
      color: var(--black) !important;
      text-decoration: none !important;
      font-weight: 600;
    }

    .checkout-container nav ol li:nth-child(2) {
      color: var(--blue) !important;
      font-weight: 600;
    }


    .checkout-container .content h6 {
      font-weight: 600;
      margin-top: 2rem;
      margin-bottom: 2rem;
      font-size: 22px;
    }

    .checkout-container .content .details {
      margin: 2rem 0rem;
      text-align: justify;
    }



    .checkout-container .content h6 {
      font-weight: 600;
      font-size: 18px;
      color: black;
    }

    .checkout-container .content .details {
      text-align: justify;
      font-size: 14px;
    }

    .contact-details {
      background-color: #ffffff;
      border-radius: 5px;
    }

    .contact-details .price-container {
      font-weight: 600;
      font-size: 15px;
    }

    /* .checkout-container .btn {
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

  .checkout-container .btn:hover {
   border: 1px solid #44e1d5;
   color: var(--blue);
  } */


    .icon i {

      padding: 2px;
      border-radius: 100%;
      background-color: var(--white);
      transition: 0.5s ease-in-out;
      cursor: pointer;
    }

    .icon i:hover {
      background-color: red;
      color: var(--white);
    }

    .checkout-container .details p {
      margin: 0;
      padding: 0;
    }

    .input-field {
      font-weight: 700;
    }

    .checkout-container .content .address-container {
      background-color: #fff;
      padding: 30px 2px;
      margin: 1.5rem 0rem;
      border-radius: 5px;
      /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
    }

    /* .checkout-container .content .address-container input {
   width: 100%;
   border: none;
   text-wrap: wrap;
   height: 60px;
  }

  .checkout-container .content .address-container input:focus {
   border: none;
   outline: none;
  } */
    .checkout-container .content .address-container .name {
      font-weight: 600;
    }

    .checkout-container .content .address-container .address {
      font-weight: 700;
    }

    .change-btn {
      background-color: var(--blue);
      border: 1px solid var(--blue);
      border-radius: 5px;
      color: var(--white);
      padding: 10px 15px;
      font-weight: 700;
      transition: .5s ease-in-out;
      margin-top: 1.5rem;

    }

    .change-btn i {
      color: var(--white);
      font-size: 25px;
      transition: .5s ease-in-out;
    }

    .change-btn:hover {
      background-color: var(--white);
      border: 1px solid var(--blue);
      color: var(--blue);
    }

    .change-btn:hover i {
      color: var(--blue);
    }

    .total {
      font-size: 20px;
    }

    .item-img {
      width: 15%;
    }

    .item-img .img {
      width: 100%;
      height: 100%;
      background: #fff;
    }

    .product-desc {
      width: 35%;
    }

    .product-desc p {
      /* margin: 0px 5px; */
    }

    table thead tr th {
      text-align: center;
    }

    table tbody tr {
      /* margin: 20px 0px !important; */
    }


    .counter {
      width: 50px;
      display: flex;
      height: 50px;
      justify-content: center;
      background-color: #F1F1F1;
      border-radius: 5px;
    }

    .counter-btn {
      background: transparent;
      border: none;
      color: #606060;
    }

    .counter {
      display: flex;
    }

    .counter .quantity-btn {
      width: 30px;
      height: 30px;
      padding: 0px 10px;
      border: 0.5px solid var(--black);
      background-color: var(--white);
      border-radius: 3px;
      text-align: center;
      font-weight: 800;
    }

    .counter input {
      width: 30px;
      height: 30px;
      /* padding: 2px 10px; */
      border: 0.5px solid var(--black);
      background-color: var(--white);
      border-radius: 3px;
      text-align: center;
      margin: 0px 5px;
    }




    #counter-value {
      /* background-color: #F1F1F1; */
      padding: 15px 10px;
      text-align: center;
    }

    .counter i {
      font-size: 10px;
    }

    /* .modal-content {
   width: 100% !important;
  } */

    @media screen and (max-device-width: 480px) and (orientation: portrait) {
     

      .content {
        display: block !important;
      }

      .form {
        width: 100% !important;
      }

      .address {
        width: 100% !important;
      }

      .modal {
        width: 100%;
      }
    }

    .mt-0 {
      margin-top: 0rem;
    }
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header')
  <section class="checkout-container">
    <form id="orderForm">
      <div class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-1"><img src="{{asset('/assets/frontEnd/web/images/checkmark.gif')}}" alt="" srcset="" style="width:100px; height:100px; margin-top:2.5rem;"></div>
          <div class="col-6">
          <h1 class="mt-5 " style="font-size: 30px; font-weight: 600; color: black; margin-left:10px;">
          <b>Thank You</b> for ordering.
        </h1>
        <p style="font-size: 25px; font-weight: 600; color: black; margin-left:20px;">Your order is in processing</p>
       
          </div>
        </div>
        
    </form>
  </section>
  @include('frontEnd/partial/footer')

</body>

</html>