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
  <nav class="navbar navbar-expand-lg ps-4 pe-4">
    <div class="container-fluid">

      <!-- <a class="navbar-brand" href="#"
          ><img src="assets/images/spato-logo.png" alt="" srcset=""
        /> -->



      <a class="navbar-brand" href="#"><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
        <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Technik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Attraktionen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Verrohrung</a>
          </li>

          <li class="nav-item border-0">
            <a class="nav-link" href="#">Wasserpflege</a>
          </li>
          <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Link
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li> -->
          <!-- <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Link</a>
            </li> -->
        </ul>
        <form class="d-flex" role="search">
          <!-- <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button> -->

          <li class="nav-item border-0 list-unstyled ps-lg-5 pe-3">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li class="nav-item list-unstyled pe-3 ps-5">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item list-unstyled pe-3 ps-3">
            <a class="nav-link" href="#">0,00€</a>
          </li>

          <li class="nav-item border-0 list-unstyled pe-3 ps-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
        </form>
      </div>
    </div>
  </nav>

  <div class="bg-image" style="background-image:url({{ asset('assets/frontEnd/web/images/remove.png')}} )  !important"></div>

  <section class="view">
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
  <section class="featured-products">
    <h5 class="text-center text-light">Subtitle</h5>
    <h3 class="text-center text-light">Our Products Categories</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  <li>Merkamal 1 - lauft fluffig</li>
                  <li>Merkamal 2 - fahurt urail... lorem</li>
                </p>
                <p class="product-price">
                  statt - 42,50€ <span class="price">25,30€</span>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card d-none d-md-block">
              <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Saugrobroter</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
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
  <footer class="footer">
    <div class="footer-container">
      <p class="useless">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veniam
        tempora, error ipsa deleniti illum labore est officia minima incidunt
        corporis quibusdam dolore quod. Eaque vel corporis labore
        necessitatibus adipisci amet ea aliquam obcaecati ratione corrupti
        nesciunt excepturi aliquid est voluptatem, unde iste possimus minima
        officiis eius hic sapiente ad eos sint quos. Mollitia enim voluptatem
        harum error nostrum adipisci dolores iusto deleniti! Recusandae?
      </p>
      <p class="useless">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veniam
        tempora, error ipsa deleniti illum labore est officia minima incidunt
        corporis quibusdam dolore quod. Eaque vel corporis labore
        necessitatibus adipisci amet ea aliquam obcaecati ratione corrupti
        nesciunt excepturi aliquid est voluptatem,
      </p>
      <div class="space-for-phone">
        <br />
        <br />
        <br />
        <br />
      </div>
      <div class="row text-center">
        <div class="col">
          <p class="footer-desc"><a href="#">AGB</a></p>
          <p class="footer-desc"><a href="#">Versand & Lieferung</a></p>
          <p class="footer-desc"><a href="#">Zahlungsten</a></p>
          <p class="footer-desc"><a href="#">Widerrufsbelehrung</a></p>
          <p class="footer-desc"><a href="#">Impressum</a></p>
        </div>
        <div class="col">
          <p class="footer-desc"><a href="#">Pools</a></p>
          <p class="footer-desc"><a href="#">Technik</a></p>
          <p class="footer-desc"><a href="#">Attraktionen</a></p>
          <p class="footer-desc"><a href="#">Heizsysteme</a></p>
          <p class="footer-desc"><a href="#">Wasserpflege</a></p>
          <p class="footer-desc"><a href="#">Verrohrung</a></p>
        </div>
        <div class="col">
          <p class="footer-desc"><a href="#">Vendor Login</a></p>
          <p class="footer-desc"><a href="#">Kontakt</a></p>
          <p class="footer-desc"><a href="#">Login</a></p>
        </div>
        <div class="col">
          <p class="footer-desc" style="text-align: center">
            Download Our Mobile App
          </p>
          <p class="footer-desc">
            <a href="#"><img src="{{ asset('assets/frontEnd/web/images/spato-app-store.png')}}" alt="" srcset="" /></a>
          </p>
          <p class="footer-desc">
            <a href="#"><img src="{{ asset('assets/frontEnd/web/images/spato-play-store.webp')}}" alt="" srcset="" /></a>
          </p>
        </div>
        <div class="col">
          <p class="footer-desc">
            <img class="footer-brand" src="{{ asset('assets/frontEnd/web/images/spato-logo.png')}}" alt="" srcset="" />
          </p>
          <p class="footer-desc phone">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
            ad recusandae ratione? Maiores, architecto aliquam veniam ducimus
            esse cum quaerat.
          </p>
        </div>
      </div>
    </div>
  </footer>


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
          window.location.href = 'http://127.0.0.1:8000/api/user';
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

</body>

</html>