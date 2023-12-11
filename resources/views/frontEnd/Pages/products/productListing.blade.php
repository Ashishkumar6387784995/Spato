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
    <style>
      /* Imports */
      

      .sidebar {
        height: 100vh;
        width: 200px;
        /* background-color:#252627; */
      }

      .menu {
        user-select: none;
        display: flex;
        justify-content: space-around;
        width: 100%;
        /* height: 50px; */
        display: flex;
        align-items: center;
        color: white;
        transition-duration: 0.3s;
      }

      /* Container for all Pages */
      .allpage {
        display: flex;
      }

      /* Container for single page */
      .page {
        width: 100%;
        /* padding: 50px; */
        animation: fadein 0.3s 1 ease-out;
      }

      /* Style for permalinks */
      a {
        color: var(--main-col);
      }

      /* Fade in animation */
      @keyframes fadein {
        from {
          transform: translateY(20px);
          opacity: 0;
        }
        to {
          transform: translateY(0px);
        }
      }

      /* Add margin to every element in a page */
      .page * {
        margin: 10px;
      }

      .menu * {
        transform: translateX(0px);
        transition-duration: 0.3s;
      }

      /* Translate the menu text to the right on hover */
      .menu:hover > * {
        transition-duration: 0.3s;
        transform: translateX(20px);
      }

      /* Disable and enable arrow on hover */
      .menu > i {
        opacity: 0;
      }
      .menu:hover > i {
        opacity: 1;
      }
      /* Translate the arrow logo right on click */
      .menu:active > i {
        margin-left: 10px;
      }



      
.card img {
    margin: auto;
    justify-content: center;
    max-width: 70%;
    max-height: 100%;
}
.card {
    width: 250px;
    margin: 1em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    border-radius: 0;
}
.card .card-body .product-price {
    text-align: right !important;
    color: #050811;
    font-weight: 600;
}
.card .card-body li {
    color: #050811;
    font-weight: 600;
}
.card .card-body .product-price .price {
    font-size: 25px;
    color: var(--blue);
    font-weight: 800;
}
.card .btn {
    text-align: center;
    width: 100%;
    background-color: var(--blue);
    color: #050811;
    font-weight: 600;
}



.agb-container {
  background-color: #eaebef;
  /* margin-top: -10rem; */
  padding-top: 5rem;
  margin-bottom: -10rem;
  padding-bottom: 10rem;

  clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
}
.agb-container nav .home {
  color: var(--black) !important;
  text-decoration: none !important;
}

.agb-container .content h6 {
  font-weight: 600;
  margin-top: 2rem;
  margin-bottom: 2rem;
  font-size: 22px;
}

.agb-container .content .details {
  margin: 2rem 0rem;
  text-align: justify;
}

@media screen and (max-device-width: 480px) and (orientation: portrait) {
  .agb-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
  }
  /* footer .footer-container {
    width: 96%;
  } */
}

    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')


    <section class="agb-container">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>

        <div class="allpage">
          <div id="sidebar" class="sidebar">
            <h1 class="title">Sidebar</h1>
          </div>

          <div id="home" class="page">
            <h1>Homepage</h1>
            <ul>
              <li>This</li>
              <li>is</li>
              <li>a</li>
              <li>list</li>
            </ul>
            <p>
              Change these pages in the HTML code and add them through JS to the
              menus array
            </p>
          </div>

          <div id="settings" class="page">
            <h1>Settings</h1>
          </div>

          <div id="about" class="page">
            <div class="d-flex flex-wrap">
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
                  </div> <div class="card d-none d-md-block">
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
                    </div> <div class="card d-none d-md-block">
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
                      </div> <div class="card d-none d-md-block">
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
                        </div> <div class="card d-none d-md-block">
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
                          </div> <div class="card d-none d-md-block">
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
    </section>
 @include('frontEnd/partial/footer')



    <script>
      /*
       *   SIDEBAR V2
       *   Written by Vardan Petrosyan
       *   https://github.com/Vardan2009
       */

      // Create Menu Class
      class Menu {
        //Constructor for Menu class
        constructor(_name, _activateID, _fa) {
          this.name = _name;
          this.activateID = _activateID;
          this.fa = _fa;
        }
        //Return an HTML element representation of the Menu
        GetHTMLElement = function () {
          var element = document.createElement("div");
          element.className = "menu";
          var p = document.createElement("p");

          var iT = document.createElement("i");
          iT.className = this.fa;
          p.appendChild(iT);

          p.innerHTML += " " + this.name;
          var i = document.createElement("i");
          i.className = "fa-solid fa-arrow-right";
          element.appendChild(p);
          element.appendChild(i);
          return element;
        };
      }

      //Define arrays for menus and pages
      var menus = [];
      var pages = [];

      //function for initializing, populating menu and page arrays
      function populateMenus() {
        menus.push(new Menu("Home", "/", "fa-solid fa-house"));
        menus.push(new Menu("Settings", "/settings", "fa-solid fa-gear"));
        menus.push(
          new Menu("About", "/info/about", "fa-solid fa-address-card")
        );

        pages.push(document.getElementById("home"));
        pages.push(document.getElementById("settings"));
        pages.push(document.getElementById("about"));
      }

      //Call functions and open first page
      populateMenus();
      displayUpdatedMenus();
      open(0);

      //update and render menus
      function displayUpdatedMenus() {
        var sidebarElement = document.getElementById("sidebar");
        var sidebarMenus = sidebarElement.querySelectorAll(":scope > .menu");
        for (let i = 0; i < sidebarMenus.length; i++) {
          sidebarMenus[i].remove();
        }
        for (let i = 0; i < menus.length; i++) {
          var element = menus[i].GetHTMLElement();
          sidebarElement.appendChild(element);
          element.addEventListener("click", function () {
            open(i);
          });
        }
      }

      //function for opening page on menu click
      function open(index) {
        for (let i = 0; i < pages.length; i++) {
          pages[i].style.display = "none";
        }
        pages[index].style.display = "block";
      }
    </script>
  </body>
</html>
