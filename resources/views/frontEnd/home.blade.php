<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spato</title>
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

    <!-- Crausel start -->

    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
      rel="stylesheet"
    />
    <script type="text/javascript" src=""></script>
    <!-- <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    ></script> -->
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Crausel ends -->
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <nav class="navbar navbar-expand-lg ps-4 pe-4">
      <div class="container-fluid">

        <!-- <a class="navbar-brand" href="#"
          ><img src="assets/images/spato-logo.png" alt="" srcset=""
        /> -->
    
    

        <a class="navbar-brand" href="#"
          ><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset=""
        />


    </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
          <ul
            class="navbar-nav ms-auto my-2 my-lg-0"
            style="--bs-scroll-height: 100px"
          >
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
              <a class="nav-link" href="#"
                ><img src="{{ asset('assets/frontEnd/web/icons/search.svg') }}" alt="" srcset=""
              /></a>
            </li>
            <li class="nav-item list-unstyled pe-3 ps-5">
              <a class="nav-link" href="#"
                ><img src="{{ asset('assets/frontEnd/web/icons/cart.svg')}}" alt="" srcset=""
              /></a>
            </li>
            <li class="nav-item list-unstyled pe-3 ps-3">
              <a class="nav-link" href="#">0,00€</a>
            </li>

            <li class="nav-item border-0 list-unstyled pe-3 ps-3">
              <a  type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"
                ><img src="{{ asset('assets/frontEnd/web/icons/profile.svg')}}" alt="" srcset=""
              /></a>
            </li>
          </form>
        </div>
      </div>
    </nav>

    <div class="bg-image"></div>

    <section class="view">
      <div class="container">
        <div class="row text-center p-4">
          <div class="col d-flex m-auto justify-content-center">
            <span class="icon"
              ><img src="assets/icons/cart.svg" alt="" srcset=""
            /></span>
            <p class="view-desc ps-3">Fast, Free Shipping On Order Over 350€</p>
          </div>
          <div class="col d-flex m-auto justify-content-center">
            <span class="icon"
              ><img src="assets/icons/cart.svg" alt="" srcset=""
            /></span>
            <p class="view-desc ps-3">
              Your Trade Partener in Water Technology
            </p>
          </div>
          <div class="col d-flex m-auto justify-content-center">
            <span class="icon"
              ><img src="assets/icons/cart.svg" alt="" srcset=""
            /></span>
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
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
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
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
          <p class="view-desc">Pool Installation & Maintanence</p>
        </div>
        <div class="col">
          <span class="icon"
            ><img src="assets/icons/cart.svg" alt="" srcset=""
          /></span>
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
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card">
                <img
                  src="assets/images/product 1.png"
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
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card d-none d-md-block">
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
                <img
                  src="assets/images/product 1.png"
                  class="card-img-top"
                  alt="..."
                />
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
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <!-- <span class="sr-only">Previous</span> -->
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
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
              <a href="#"
                ><img src="assets/images/spato-app-store.png" alt="" srcset=""
              /></a>
            </p>
            <p class="footer-desc">
              <a href="#"
                ><img
                  src="assets/images/spato-play-store.webp"
                  alt=""
                  srcset=""
              /></a>
            </p>
          </div>
          <div class="col">
            <p class="footer-desc">
              <img
                class="footer-brand"
                src="assets/images/spato-logo.png"
                alt=""
                srcset=""
              />
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

    <!-- Login Form starts -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><a class="navbar-brand" href="#"
          ><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset=""
        />

    </a></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">    
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">E-mail*</label>
            <input type="text" class="form-control" id="recipient-name" name="email" require>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password*</label>
            <input type="password" class="form-control" name="password" require>
          </div>
          <button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
        </form>
        <p class="foget-password"><a   type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="nav-link" href="#">Passwort vergessen?</a></p>
        <p class="foget-password">Sie haben kein Konto?<a href="#" > Hier registrieren.</a></p>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
    <!--  Login Form ends -->

    <!-- Forgot Password Form starts -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><a class="navbar-brand" href="#"
          ><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset=""
        />

    </a></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  id="loginForm">    
          <div class="mb-3">
            <!-- <label for="recipient-name" class="col-form-label">E-mail*</label> -->
            <input type="text" class="form-control" id="recipient-name" name="email" placeholder="name@xyz.com" require>
          </div>
          <button type="submit" class="btn btn-primary" id="loginBtn">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
    <!--  Forgot Password Form ends -->


    <script>
        $(document).ready(function () {
            $('#loginBtn').click(function () {
                // console.log('hello');
                var formData = $('#loginForm').serialize();
                console.log(formData);
                 $.ajax({
                    type: 'POST',
                    url: '/api/login', // Adjust the route name
                    data: $('#loginForm').serialize(),
                    success: function (response) {
                        if (response.success) {
                            console.log(response.token);
                            // Save the token to local storage
                            localStorage.setItem('authToken', response.token);

                            // Redirect to a protected page or perform other actions
                            // alert('Login successful. Redirecting...');
                            window.location.href = 'http://127.0.0.1:8000/api/user'; // Change the URL as needed
                            
                        } else {
                            // alert(response.error);
                            window.location.href = 'http://127.0.0.1:8000/api/home';
                        }
                    },
                    error: function (error) {
                        console.error('Error:', response.error);
                       
                        alert('An error occurred. Please try again.');
                        
                    }
                });
            });
        });
    </script>
  </body>

</html>



