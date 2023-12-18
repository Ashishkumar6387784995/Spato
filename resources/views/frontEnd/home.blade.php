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

<body oncontextmenu="return false" class="snippet-body">
@include('frontEnd/partial/header')

  <div class="bg-image myDiv" id="hero" style="background-image:url({{ asset('assets/frontEnd/web/images/remove.png')}} ); background-position: center center;
    background-size: cover !important;
    background-repeat: no-repeat !important;"></div>

  <section class="dark-view" id="view">
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
  <div class="container">
    <h5 class="text-center">Subtitle</h5>
    <h3 class="text-center">Our Products Categories</h3>
    <div class="row categories text-center p-4 m-auto justify-content-evenly">
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <!-- <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div> -->
    </div>
    <div class="row categories text-center p-4 m-auto justify-content-evenly">
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <div class="col">
        <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
        <p class="view-desc">Pool Installation & Maintanence</p>
      </div>
      <!-- <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div> -->
    </div>
  </div>
  <!-- Latest Products starts -->
  <section class="latest-products">
    <h5 class="text-center ">Subtitle</h5>
    <h3 class="text-center ">Latest Products Categories</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            
              <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
               <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- Latest Products ends -->
  <section class="featured-products">
    <h5 class="text-center text-light">Subtitle</h5>
    <h3 class="text-center text-light">Our Products Categories</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            
              <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
            <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
            <div class="card d-none d-md-block">
               <img
                  src="{{ asset('assets/frontEnd/web/images/product 1.png')}}"
                  class="card-img-top"
                  alt="..."
                />
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
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!-- <span class="sr-only">Previous</span> -->
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  @include('frontEnd/partial/footer');



</body>

</html>