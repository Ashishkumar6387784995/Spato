<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
  <!-- Fonts -->

  <!-- Crausel start -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <script type="text/javascript" src=""></script>
  <!-- <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    ></script> -->
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Crausel ends -->
</head>

<body oncontextmenu="return false" class="snippet-body">
@include('frontEnd/partial/header')

  <div class="bg-image" id="hero" style="background-image:url({{ asset('assets/frontEnd/web/images/remove.png')}} ); background-position: center; background-repeat: no-repeat !important;"></div>

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


  @include('frontEnd/partial/footer')
  <!-- Sign up Form Modal starts -->



  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header signupform">
          <a class="" href="#"><img class="signup-brand-logo" src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />

          </a>


          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <p class="form-header-content text-center">
          Bitte melden Sie sich mit den angegebenen Daten an.
        </p>

        <div class="modal-body">
          <form id="signupForm" method="post">
            <div class="text-center"><span id="common_err" style="color:var(--blue); font-size:18px; font-weight:600; text-align:center;"></span></div>
            <div class="form-col">
              <div class="row">
                <div class="col">
                  <label for="recipient-name" class="col-form-label">First Name*</label>
                  <input type="text" class="form-control" id="signup_firstname" name="signup_firstname" require>
                  <span id="signup_firstName_err" style="color:red;"></span>
                </div>
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Last Name*</label>
                  <input type="text" class="form-control" id="signup_lastname" name="signup_lastname" require>
                  <span id="signup_lastName_err" style="color:red"></span>
                </div>
              </div>
            </div>
            <div class="form-col">
              <div class="row">
                <div class="col">
                  <label for="recipient-name" class="col-form-label">Phone Number*</label>
                  <input type="text" class="form-control" id="signup_phone" name="signup_phone" require>
                  <span id="signup_phone_err" style="color:red"></span>
                </div>
                <div class="col">
                  <label for="recipient-name" class="col-form-label">E-mail*</label>
                  <input type="text" class="form-control" id="signup_email" name="signup_email" require>
                  <span id="signup_email_err" style="color:red"></span>
                </div>
              </div>
            </div>
            <div class="form-col">
              <div class="row">
                <div class="col">
                  <label for="message-text" class="col-form-label">Password*</label>
                  <input type="password" class="form-control" id="signup_password" name="signup_password" require>
                  <span id="signup_password_err" style="color:red"></span>
                </div>
                <div class="col">
                  <label for="message-text" class="col-form-label">Confirm Password*</label>
                  <input type="password" class="form-control" id="signup_confirmpassword" name="signup_confirmpassword" require>
                  <span id="signup_Confirm_password_err" style="color:red"></span>
                </div>
              </div>
            </div>
            <div class="form-col checkbox">

              <div class="row">
                <div class="col">
                  <input type="checkbox" id="btncheck1" value="Subscribe our newsletter">
                  <p class="text">Subscribe our newsletter</p>
                </div>
                <div class="col">
                  <input type="checkbox" id="btncheck2" value="Want to become reseller">
                  <p class="text"> Want to become reseller</p>
                </div>
              </div>
            </div>
            <div class="form-col">

              <div class="row">
                <div class="col">
                  <input type="checkbox" id="btncheck3"><span class="text" value="Allow remote shopping assistance"> Allow remote shopping assistance</span>
                </div>
              </div>
            </div>
            <br>
            <div class="col-md-6 mb-3">

              <div class="captcha">

                <span>{!! captcha_img('math') !!}</span>


                <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>

              </div><br>

              <input id="signup_captcha" type="text" class="form-control" placeholder="Enter Captcha" name="signup_captcha">
              <span id="signup_captcha_err" style="color:red"></span>




            </div>
            <button type="button" class="btn btn-style" id="signupBtn">Sign up</button>
          </form>
          <p class="foget-password mt-3 d-flex">Schon Kunde ? <a style="color:var(--blue);" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"> Anmeldung </a></p>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <!--  Signup Form Modal ends -->
  <!-- Login Form Modal starts -->



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="" href="#"><img class="signup-brand-logo" src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />

          </a>


          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <p class="form-header-content text-center">
          Wenn Sie ein Konto haben, melden Sie sich mit Ihrer E-Mail-Adresse an
        </p>
        <div class="modal-body">
          <form id="loginForm">
            <span id="error-message" style="color:red;"></span>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">E-mail*</label>
              <input type="text" class="form-control" id="email" name="email" require>
              <span id="email-err" style="color:red;"></span>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password*</label>
              <input type="password" class="form-control" id="password" name="password" require>
              <span id="password_err" style="color:red;"></span>
            </div>
            <button type="button" class="btn btn-style" id="loginBtn">Login</button>
          </form>
          <p class="foget-password d-flex"><a style="text-decoration:underline;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="nav-link" href="#">Passwort vergessen?</a></p>
          <p class="foget-password d-flex">Sie haben kein Konto?<span><a style="text-decoration:underline;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="nav-link ps-3" href="#"> Hier registrieren.</a></span></p>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <!--  Login Form Modal ends -->

  <!-- Forgot Password Form Modal starts -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><a class="navbar-brand" href="#"><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


            </a></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="forgetForm">
            <span id="forget_error_message" style="color:red;"></span>
            <div class="mb-3">
              <!-- <label for="recipient-name" class="col-form-label">E-mail*</label> -->
              <input type="text" class="form-control" name="forget_email" id="forget_email" placeholder="name@xyz.com" require>

              <span id="forget_email_err"></span>
            </div>
            <button type="button" class="btn btn-style" id="forgetBtn">Submit</button>
          </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <!--  Forgot Password Form Modal ends -->

  <script>
    $(document).ready(function() {
      $('#loginBtn').click(function() {
        // Clear previous error messages
        $('#error-message').text('');
        $('#email-err').text('');
        $('#password_err').text('');

        // Get form data
        var formData = {
          email: $('#email').val(),
          password: $('#password').val()
        };

        // Client-side validation
        if (!formData.email) {
          $('#email-err').text('Please enter your email.');
          return;
        }


        if (!formData.password) {
          $('#password_err').text('Please enter your password.');
          return;
        }

        // Perform AJAX request
        $.ajax({
          type: 'POST',
          url: '/api/login',
          dataType: 'json', // Explicitly specify data type
          data: formData,
          success: handleLoginResponse,
          error: handleAjaxError
        });
      });

      $('#forgetBtn').click(function() {
        // Clear previous error messages
        $('#forget_error_message').text('');

        // Get form data
        var forgetformData = {
          email: $('#forget_email').val()
        };
        console.log(forgetformData);

        // Client-side validation
        if (!forgetformData.email) {
          $('#forget_error_message').text('Please enter your email.');
          return;
        }

        // Perform AJAX request
        $.ajax({
          type: 'POST',
          url: '/api/forgetPassword',
          dataType: 'json', // Explicitly specify data type
          data: forgetformData,
          success: handleForgetPasswordResponse,
          error: handleAjaxError
        });
      });

      // Common function to handle login response
      function handleLoginResponse(response) {
        if (response.success) {
          console.log(response.token);
          localStorage.setItem('authToken', response.token);
          window.location.href = 'http://127.0.0.1:8000/api/home';
          fetchUserProfile();
        } else {
          $('#error-message').text(response.error);
        }
      }

      // Common function to handle forget password response
      function handleForgetPasswordResponse(response) {
        if (response.success) {
          $('#forget_error_message').text(response.success);
        } else {
          $('#forget_error_message').text(response.error);
        }
      }

      // Common function to handle AJAX errors
      function handleAjaxError(error) {
        $('#forget_error_message').text('An error occurred. Please try again.');
      }
    });



    $('#signupBtn').click(function() {
      // Clear previous error messages
      $('#common_err').text('');
      $('#signup_firstName_err').text('');
      $('#signup_lastName_err').text('');
      $('#signup_phone_err').text('');
      $('#signup_email_err').text('');
      $('#signup_password_err').text('');
      $('#signup_Confirm_password_err').text('');
      $('#signup_captcha_err').text('');

      // Get form data
      var formData = {
        firstName: $('#signup_firstname').val(),
        lastName: $('#signup_lastname').val(),
        phone: $('#signup_phone').val(),
        email: $('#signup_email').val(),
        password: $('#signup_password').val(),
        password_confirmation: $('#signup_confirmpassword').val(),
        captcha: $('#signup_captcha').val(),

      };

      if ($('#btncheck1').is(':checked')) {
        formData.checkBox1 = $('#btncheck1').val();
      }

      if ($('#btncheck2').is(':checked')) {
        formData.checkBox2 = $('#btncheck2').val();
      }

      if ($('#btncheck3').is(':checked')) {
        formData.checkBox3 = $('#btncheck3').val();
      }


      // Client-side validation
      if (!formData.firstName) {
        $('#signup_firstName_err').text('Please enter your First Name.');
        return;
      }


      if (!formData.lastName) {
        $('#signup_lastName_err').text('Please enter your Last Name.');
        return;
      }

      if (!formData.phone) {
        $('#signup_phone_err').text('Please enter your Phone.');
        return;
      }

      if (!formData.email) {
        $('#signup_email_err').text('Please enter your Email.');
        return;
      }

      if (!formData.password) {
        $('#signup_password_err').text('Please enter your Password.');
        return;
      }

      if (!formData.password_confirmation) {
        $('#signup_Confirm_password_err').text('Please enter Confirm Password.');
        return;
      }

      if (!formData.captcha) {
        $('#signup_captcha_err').text('Please enter Capcha Code.');
        return;
      }

      console.log(formData);


      // Perform AJAX request
      $.ajax({
        type: 'POST',
        url: '/api/register',
        dataType: 'json', // Explicitly specify data type
        data: formData,
        success: function(response) {
          // Handle success
          console.log(response);

          if (response.success) {
            // Do something on successful registration, e.g., redirect to a new page
            // window.location.href = '/success-page';
            console.log(response.token);
            localStorage.setItem('authToken', response.token);
            $('#common_err').text("Registration Successfull...");
            $('#signupForm')[0].reset();
          }


          if (response.ValidationError) {
            // Display validation errors next to the respective form fields
            console.log('eoor');
            displayValidationErrors(response.ValidationError);
          }
        },

      });

      function displayValidationErrors(errors) {
        // Display validation errors next to the respective form fields
        if (errors.firstName) {
          $('#signup_firstName_err').text(errors.firstName[0]);
        }
        if (errors.lastName) {
          $('#signup_lastName_err').text(errors.lastName[0]);
        }
        if (errors.phone) {
          $('#signup_phone_err').text(errors.phone[0]);
        }
        if (errors.email) {
          $('#signup_email_err').text(errors.email[0]);
        }
        if (errors.password) {
          $('#signup_password_err').text(errors.password[0]);
        }
        if (errors.password_confirmation) {
          $('#signup_Confirm_password_err').text(errors.password_confirmation[0]);
        }
        if (errors.captcha) {
          $('#signup_captcha_err').text(errors.captcha[0]);
        }
      }

    });

    function fetchUserProfile() {
        // Retrieve the token from local storage
        var authToken = localStorage.getItem('authToken');

        // Make a GET request to the user profile endpoint
        fetch('http://127.0.0.1:8000/api/home', {
            method: 'GET',
            headers: {
              'Authorization': 'Bearer ' + authToken,
              'Content-Type': 'application/json'
            },
          })
          .then(response => {
            // Check if the response is successful (2xx status code)
            if (response.ok) {
              // You can access headers using response.headers.get('header-name')
              var headers = response.headers;

              // Do something with the headers
              console.log('Response Headers:', headers);

              // Assuming the response is in JSON format, parse it
              return response.json();
            } else {
              // Handle non-successful response
              throw new Error('User profile request failed');
            }
          })
          .then(data => {
            // Handle the response data
            console.log('User Profile Data:', data);
          })
          .catch(error => {
            // Handle errors
            console.error('Error:', error);
          });
      }

    $(".btn-refresh").click(function() {

      $.ajax({

        type: 'GET',

        url: '/api/refresh_captcha',

        success: function(data) {

          $(".captcha span").html(data.captcha);

        }

      });



    });
  </script>
  <!-- Darkmode script starts -->
  <script>
      document.addEventListener('DOMContentLoaded', function () {
        const darkModeToggle = document.getElementById('darkModeToggle');
    
        darkModeToggle.addEventListener('change', function () {
          document.body.classList.toggle('dark-mode', darkModeToggle.checked);
          toggleDarkModeElements(darkModeToggle.checked);
        });
    
        // Function to toggle dark mode for specific elements with different classes and tags
        function toggleDarkModeElements(isDarkMode) {
          const elementsToToggle = document.querySelectorAll('.dark-view');
    
          elementsToToggle.forEach(function (element) {
            element.classList.toggle('dark-mode', isDarkMode);
          });
        }
        
      });
      function myFunction() {
    const myDiv = document.getElementById('hero');

    // Check the current background image
    const currentImage = myDiv.style.backgroundImage;

    // Toggle between two different background images
    if (currentImage.includes('default-image.jpg')) {
      myDiv.style.backgroundImage = "url({{ asset('assets/frontEnd/web/images/dark-bg.png')}} )";
    } else {
      myDiv.style.backgroundImage = "url({{ asset('assets/frontEnd/web/images/dark-bg.png')}} )";
    }
    
  }
    </script>
  <!-- Darkmode script ends -->

</body>

</html>