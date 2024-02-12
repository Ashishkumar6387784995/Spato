<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{$Kategorie_Name}}</title>
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
  .product-category {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 0.01%, 100% 0%, 100% 100%, 0% 100%);
  }

  .product-category nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
   font-weight: 600;
  }

  .product-category nav ol li:nth-child(2) {
   color: var(--blue) !important;
   font-weight: 600;
  }


  .product-category .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .product-category .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }


  .products {
   width: 100%;
   display: flex;
   flex-wrap: wrap;
   padding: 10px;
   gap: 10px;
   justify-content: flex-start;
  }

  .product {
   width: 300px;
   background-color: #fff;
   display: flex;
   flex-direction: column;
   box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
   overflow: hidden;
   margin: 2rem 1.7rem;
   border-radius: 5px;
  }

  .product .img {
   height: 200px;
  }

  .product .img img {
   width: 100%;
   height: 100%;
   object-fit: contain;
   transition: 0.5s;
   transform: scale(0.75);
  }

  .product-price {
   text-align: right;
   font-size: 15px;
   font-weight: 600;
  }

  .product-price .price {
   color: #44e1d5;
   font-size: 20px;
   font-weight: 600;
  }

  .product .product-details {
   padding: 10px;
   display: flex;
   flex-direction: column;

  }

  .card-text li {
   font-weight: 600;
  }

  .card-title {
   font-weight: 600;
  }


  .cart-btn {
   text-align: center;
   /* width: 100%; */
   background-color: var(--blue) !important;
   color: var(--white) !important;
   font-weight: 700 !important;
   text-decoration: none !important;
   padding: 8px 0px !important;
   border-radius: 0px 0px 5px 5px !important;
   border: 1px solid var(--blue);
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
   transition: 0.5s ease-in-out;
  }

  .cart-btn:hover {
   background-color: var(--white) !important;
   color: var(--blue) !important;
   border: 1px solid var(--blue);
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .product-category {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   /* footer .footer-container {
    width: 96%;
  } */
   .products {
    justify-content: center;
   }

  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header');
  <section class="product-category">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$Kategorie_Name}}</li>
     </ol>
    </nav>

    <h1 class="text-center">{{$Kategorie_Name}}</h1>
    <div class="content">
     <div class="products">
      @foreach($products as $product)

      <div class="product">
       <div class="img">
        <img src="{{ asset('storage/' . $product->Bild_1) }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">{{ $product->Artikelname }}</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
         <li>Merkamal 2 - fahurt urail... lorem</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
       <a href="#" class="addToCartButton cart-btn" data-product-id="{{ $product->id }}" data-quantity="1"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">IN DEN WARENKORB</a>
      </div>

      @endforeach
     </div>
    </div>


  </section>

  @include('frontEnd/partial/rightSidebar')
  @include('frontEnd/partial/footer')
 </body>

</html>