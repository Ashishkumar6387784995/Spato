<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}"> -->

  <!-- Fonts -->
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script> -->
  <!-- Fonts -->

  <!-- Crausel start -->

  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" /> -->
  <script type="text/javascript" src=""></script>
  <!-- <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    ></script> -->
  <!-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

  <!-- Crausel ends -->
</head>

<body>
  @include('frontEnd/partial/header')





  <!-- @if(auth()->check())

{{auth()->user()->id}}

@endif -->


  <div class="bg-image myDiv" id="hero" style="clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0% 100%);">

    <img id="myImage" src="{{ asset('assets/frontEnd/web/images/light-background.png')}} " style="width:100%; height:100%;" alt="" srcset="">
    <img class="product" src="{{ asset('assets/frontEnd/web/images/product-2.png')}} " alt="" srcset="">
    <div class="hero-heading-container dark-mode-text">
      <h1 class="hero-heading">Specialist</h1>
      <p class="hero-details">Wholesaller for</p>
      <h1 class="hero-heading">Pools</h1>
      <p class="hero-details">& Equipments</p>
    </div>

    <img class="exclusive" src="{{ asset('assets/frontEnd/web/images/exclusive-tag.png')}} " alt="" srcset="">

  </div>

  <section class="services dark-mode-section1" id="view">
    <div class="container">
      <div class="row text-center p-4">
        <div class="col d-flex m-auto justify-content-center">
          <span class="icon"><i class="fa fa-truck" aria-hidden="true"></i></span>
          <p class="view-desc ps-3">Fast, Free Shipping On Order Over 350€</p>
        </div>
        <div class="col d-flex m-auto justify-content-center">
          <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
          <p class="view-desc ps-3">
            Your Trade Partener in Water Technology
          </p>
        </div>
        <div class="col d-flex m-auto justify-content-center">
          <span class="icon"><i class="fa-solid fa-star"></i></span>
          <p class="view-desc ps-3">8.3/10 Customer Rating</p>
        </div>
      </div>
    </div>
  </section>
  <section class="dark-mode-section2">
    <div class="container pt-5 ">
      <h5 class="text-center">Subtitle</h5>
      <h3 class="text-center">Our Products Categories</h3>
      <div class="row categories text-center p-4 m-auto justify-content-evenly">

        @foreach($productCategories as $category)


        <div class="col dark-mode-section1">
          <a href="{{url('/api/ProductsByCategories/' . $category->Kategorie_Nr)}}" <span class="icon" style="padding-top:10px;"><img src="{{asset('storage/' . $category->imageFile )}}" </span>
            <p class="view-desc">{{ $category->Kategorie_Name }}</p>
          </a>
        </div>
        @endforeach


      </div>
      <div class="row categories text-center p-4 m-auto justify-content-evenly">

        <!-- <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div> -->
      </div>
    </div>
  </section>
  <!-- Latest Products starts -->
  <section class="latest-products pt-5 dark-mode-section2">
    <h5 class="text-center ">Subtitle</h5>
    <h3 class="text-center ">Latest Products Categories</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">

              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
      <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- Latest Products ends -->
  <section class="featured-products dark-mode-section1">
    <h5 class="text-center text-light">Subtitle</h5>
    <h3 class="text-center text-light">Our Products Categories</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card ">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card ">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">

              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
            <div class="card">
              <a class="img-cont" href="{{url('api/ProductdetailPage')}}"> <img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" class="card-img-top" alt="..." /></a>
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
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
      <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  @include('frontEnd/partial/footer')
</body>

</html>