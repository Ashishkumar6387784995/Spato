<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
  </script>

  <!--   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Crausel ends -->
  <style>
    /* #validUser{
      display: flex !important;
      /* flex-direction: row-reverse; 
    } */
  </style>
</head>




<nav class="navbar navbar-expand-lg ps-4 pe-4">
  <div class="container-fluid">

    <!-- <a class="navbar-brand" href="#"
          ><img src="assets/images/spato-logo.png" alt="" srcset=""
        /> -->



    <a class="navbar-brand" href="{{url('api/home')}}"><img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


<<<<<<< HEAD
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('api/home')}}">Home</a>
        </li>
        <!-- <li class="nav-item">
=======
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
    <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
     <li class="nav-item">
      <a class="nav-link active " aria-current="page" href="{{url('api/home')}}">Home</a>
     </li>
     <!-- <li class="nav-item">
>>>>>>> 02d6c7abcaab49cd30d12bd7189ebe3a9b0e20b1
          <a class="nav-link pools" href="#">Pools</a></li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pools
          </a>
          <ul class="dropdown-menu dropdown-element pools-position">
            <li>
              <div class="row">
                <div class="col">
                  <h6 class="ml-3 ">EPS Pools</h6>
                  <a class="dropdown-item" href="#">EPS stone P40</a>
                  <a class="dropdown-item" href="#">EPS stone P80</a>
                  <a class="dropdown-item" href="#">EPS stone round arch</a>
                  <a class="dropdown-item" href="#">EPS stone P40 Giant</a>
                  <a class="dropdown-item" href="#">EPS stone round arch giant</a>
                  <a class="dropdown-item" href="#">EPS stone overflow channel P100</a>
                  <a class="dropdown-item" href="#">EPS stairs</a>
                  <a class="dropdown-item" href="#">Accesories</a>
                  <h6 class="ml-3">Overflow Channels</h6>
                  <a class="dropdown-item" href="#">Concrete overflow channel</a>
                  <a class="dropdown-item" href="#">EPS stone overflow channel P100</a>
                  <a class="dropdown-item" href="#">Overflow gutters grates</a>
                  <a class="dropdown-item" href="#">Accesories</a>

                </div>
                <div class="col">
                  <h6 class="ml-3">Slides</h6>
                  <a class="dropdown-item" href="#">Renolit Alkorplan ></a>
                  <h6 class="ml-3">Handrails</h6>
                  <a class="dropdown-item" href="#">Grab bars</a>
                  <a class="dropdown-item" href="#">Handrails</a>
                  <a class="dropdown-item" href="#">Accesories</a>
                  <h6 class="ml-3">Ladders</h6>
                  <a class="dropdown-item" href="#">Head of Marina for Public Pools</a>
                  <a class="dropdown-item" href="#">Ladders stainless steel standard</a>
                  <a class="dropdown-item" href="#">Ladders stainless steel Muro Slim</a>
                  <a class="dropdown-item" href="#">Head stainless steel Mixta</a>
                  <a class="dropdown-item" href="#">Ladder 2 parts</a>
                  <a class="dropdown-item" href="#">Accesories</a>
                </div>

                <div class="col">
                  <h6 class="ml-3">Built-In Parts</h6>
                  <a class="dropdown-item" href="#">Stainless steel BEHNCKE ></a>
                  <a class="dropdown-item" href="#">Stainless steel HUGO LAHME ></a>
                  <a class="dropdown-item" href="#">Stainless steel FLUIDRA ></a>
                  <a class="dropdown-item" href="#">Gunmetale Hugo LAHME ></a>
                  <a class="dropdown-item" href="#">ABS Plastic ></a>
                </div>
              </div>
            </li>

<<<<<<< HEAD
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Technik
          </a>
          <ul class="dropdown-menu dropdown-element pools-position">
            <li>
              <div class="row">
                <div class="col">
                  <h6 class="ml-3 ">Pump</h6>
                  <a class="dropdown-item" href="#">Swimming pool circulation pumps ></a>
                  <a class="dropdown-item" href="#">Jet pumping attractions ></a>
                  <h6 class="ml-3">Filter</h6>
                  <a class="dropdown-item" href="#">Sand filter ></a>
                  <a class="dropdown-item" href="#">Cartridge filter ></a>
                  <a class="dropdown-item" href="#">Skim filter ></a>
                  <a class="dropdown-item" href="#">Filter material ></a>
                  <a class="dropdown-item" href="#">Accesories ></a>
=======
      </ul>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Technik
      </a>
      <ul class="dropdown-menu dropdown-element technik-position">
       <li>
        <div class="row">
         <div class="col">
          <h6 class="ml-3 ">Pump</h6>
          <a class="dropdown-item" href="#">Swimming pool circulation pumps ></a>
          <a class="dropdown-item" href="#">Jet pumping attractions ></a>
          <h6 class="ml-3">Filter</h6>
          <a class="dropdown-item" href="#">Sand filter ></a>
          <a class="dropdown-item" href="#">Cartridge filter ></a>
          <a class="dropdown-item" href="#">Skim filter ></a>
          <a class="dropdown-item" href="#">Filter material ></a>
          <a class="dropdown-item" href="#">Accesories ></a>
>>>>>>> 02d6c7abcaab49cd30d12bd7189ebe3a9b0e20b1

                  <h6 class="ml-3">Valves</h6>
                  <a class="dropdown-item" href="#">Rod valves ></a>
                  <a class="dropdown-item" href="#">Multi-way valves ></a>

                </div>
                <div class="col">
                  <h6 class="ml-3">Accessories For Public Filter Technology</h6>
                  <a class="dropdown-item" href="#">Sand filter public</a>
                  <a class="dropdown-item" href="#">Overflow collection container</a>
                  <a class="dropdown-item" href="#">Accessories and technology</a>
                  <h6 class="ml-3">Filter Systems</h6>
                </div>

                <div class="col">
                  <h6 class="ml-3">Controls</h6>
                  <a class="dropdown-item" href="#">Filter controls</a>
                  <a class="dropdown-item" href="#">Heating filter controls</a>
                  <a class="dropdown-item" href="#">Level controls ></a>
                  <a class="dropdown-item" href="#">Overflow collection container controls</a>
                  <a class="dropdown-item" href="#">Temperature controls</a>
                  <a class="dropdown-item" href="#">PN controls</a>
                  <a class="dropdown-item" href="#">Piezo controls</a>
                  <a class="dropdown-item" href="#">Backwash controls ></a>
                  <a class="dropdown-item" href="#">Frequency converter ></a>
                  <a class="dropdown-item" href="#">Accesories</a>

                  <h6 class="ml-3">Dehumidifier</h6>
                  <a class="dropdown-item" href="#">Full inverter dehumidifier</a>
                  <h6 class="ml-3">Heating Systems</h6>
                  <a class="dropdown-item" href="#">Heat pumps ></a>
                </div>
              </div>
            </li>

          </ul>
        </li>
        <!-- <li class="nav-item">
      <a class="nav-link" href="#"></a>

     </li> -->
<<<<<<< HEAD
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Attraktionen
          </a>
          <ul class="dropdown-menu dropdown-element pools-position">
            <li>
              <div class="row">
                <div class="col">
                  <h6 class="ml-3 ">Pump</h6>
                  <a class="dropdown-item" href="#">Swimming pool circulation pumps ></a>
                  <a class="dropdown-item" href="#">Jet pumping attractions ></a>
                  <h6 class="ml-3">Filter</h6>
                  <a class="dropdown-item" href="#">Sand filter ></a>
                  <a class="dropdown-item" href="#">Cartridge filter ></a>
                  <a class="dropdown-item" href="#">Skim filter ></a>
                  <a class="dropdown-item" href="#">Filter material ></a>
                  <a class="dropdown-item" href="#">Accesories ></a>
=======
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Attraktionen
      </a>
      <ul class="dropdown-menu dropdown-element attraktionen-position">
       <li>
        <div class="row">
         <div class="col">
          <h6 class="ml-3 ">Pump</h6>
          <a class="dropdown-item" href="#">Swimming pool circulation pumps ></a>
          <a class="dropdown-item" href="#">Jet pumping attractions ></a>
          <h6 class="ml-3">Filter</h6>
          <a class="dropdown-item" href="#">Sand filter ></a>
          <a class="dropdown-item" href="#">Cartridge filter ></a>
          <a class="dropdown-item" href="#">Skim filter ></a>
          <a class="dropdown-item" href="#">Filter material ></a>
          <a class="dropdown-item" href="#">Accesories ></a>
>>>>>>> 02d6c7abcaab49cd30d12bd7189ebe3a9b0e20b1

                  <h6 class="ml-3">Valves</h6>
                  <a class="dropdown-item" href="#">Rod valves ></a>
                  <a class="dropdown-item" href="#">Multi-way valves ></a>

                </div>
                <div class="col">
                  <h6 class="ml-3">Accessories For Public Filter Technology</h6>
                  <a class="dropdown-item" href="#">Sand filter public</a>
                  <a class="dropdown-item" href="#">Overflow collection container</a>
                  <a class="dropdown-item" href="#">Accessories and technology</a>
                  <h6 class="ml-3">Filter Systems</h6>
                </div>

                <div class="col">
                  <h6 class="ml-3">Controls</h6>
                  <a class="dropdown-item" href="#">Filter controls</a>
                  <a class="dropdown-item" href="#">Heating filter controls</a>
                  <a class="dropdown-item" href="#">Level controls ></a>
                  <a class="dropdown-item" href="#">Overflow collection container controls</a>
                  <a class="dropdown-item" href="#">Temperature controls</a>
                  <a class="dropdown-item" href="#">PN controls</a>
                  <a class="dropdown-item" href="#">Piezo controls</a>
                  <a class="dropdown-item" href="#">Backwash controls ></a>
                  <a class="dropdown-item" href="#">Frequency converter ></a>
                  <a class="dropdown-item" href="#">Accesories</a>

                  <h6 class="ml-3">Dehumidifier</h6>
                  <a class="dropdown-item" href="#">Full inverter dehumidifier</a>
                  <h6 class="ml-3">Heating Systems</h6>
                  <a class="dropdown-item" href="#">Heat pumps ></a>
                </div>
              </div>
            </li>

          </ul>
        </li>
        <!-- <li class="nav-item">
      <a class="nav-link" href="#"></a>
     </li> -->


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Verrohrung
          </a>
          <ul class="dropdown-menu dropdown-element verrohrung-position">
            <li>
              <div class="row">
                <div class="col">
                  <h6 class="ml-3 ">Pipes And Flexible Pipes</h6>
                  <a class="dropdown-item" href="#">PVC pressure pipe ></a>
                  <a class="dropdown-item" href="#">PVC flexible pipe ></a>
                  <a class="dropdown-item" href="#">HDPE protective tube</a>
                  <a class="dropdown-item" href="#">PE 100 pressure pipes, SDR 11, PN 16</a>
                  <a class="dropdown-item" href="#">PE 100 pressure pipes, SDR 11, PN 10</a>
                  <a class="dropdown-item" href="#">PE LDPE pressure pipe, SDR 13.6, PN4</a>
                  <h6 class="ml-3">Fittings And Fittings</h6>
                  <a class="dropdown-item" href="#">PVC flex pipe clamp fittings</a>
                  <a class="dropdown-item" href="#">PVC fittings ></a>
                  <a class="dropdown-item" href="#">PVC container bushings</a>
                  <a class="dropdown-item" href="#">PVC check valves ></a>
                  <a class="dropdown-item" href="#">PVC pipe clamps</a>
                  <a class="dropdown-item" href="#">PVC ball valves and valves ></a>
                  <a class="dropdown-item" href="#">PVC gate valve ></a>
                  <a class="dropdown-item" href="#">PVC 3-way ball valves ></a>
                  <a class="dropdown-item" href="#">PVC inserts for ball valves and valves ></a>
                  <a class="dropdown-item" href="#">PVC flaps ></a>
                  <a class="dropdown-item" href="#">PVC sight glasses and probe holders ></a>
                  <a class="dropdown-item" href="#">flow meter ></a>

                  <h6 class="ml-3">PVC Adhesive Fittings Black</h6>
                  <h6 class="ml-3">PVC Adhesive Fittings White</h6>
                  <h6 class="ml-3">PVC Flexfit White</h6>
                </div>
                <div class="col">
                  <h6 class="ml-3">
                    PP Clamp Fittings</h6>
                  <a class="dropdown-item" href="#">PP coupling, clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP reducing coupling, clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP end cap, clamp</a>
                  <a class="dropdown-item" href="#">PP angle 90° with wall washer, clamp x IT</a>
                  <a class="dropdown-item" href="#">PP coupling, clamp x IT</a>
                  <a class="dropdown-item" href="#">PP coupling, clamp x male</a>
                  <a class="dropdown-item" href="#">PP coupling with flange, complete set, clamp x flange</a>
                  <a class="dropdown-item" href="#">PP universal coupling, clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP global coupling, clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP angle 90°, clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP angle 90°, clamp x AG</a>
                  <a class="dropdown-item" href="#">PP angle 90°, clamp x IT</a>
                  <a class="dropdown-item" href="#">PP T-piece, clamp x clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP T-piece, clamp x AG x clamp</a>
                  <a class="dropdown-item" href="#">PP reducing T-piece, clamp x clamp x clamp</a>
                  <a class="dropdown-item" href="#">PP T-piece, clamp x female thread x clamp</a>
                </div>

                <div class="col">
                  <h6 class="ml-3">PP Tapping Clamps</h6>
                  <a class="dropdown-item" href="#">PP tapping clamp, 2 screws, reinforcement ring, O-ring, clamp x IT</a>
                  <a class="dropdown-item" href="#">PP tapping clamp, 4 screws, reinforcement ring, O-ring, clamp x IT</a>
                  <a class="dropdown-item" href="#">PP tapping clamp, 6 screws, reinforcement ring, O-ring, clamp x IT</a>
                  <a class="dropdown-item" href="#">Temperature controls</a>
                  <h6 class="ml-3">Solenoid Valves</h6>
                  <a class="dropdown-item" href="#">Solenoid valves WKB</a>
                  <a class="dropdown-item" href="#">Bürkert solenoid valves</a>
                  <h6 class="ml-3">Glue</h6>
                  <h6 class="ml-3">Cleanser</h6>
                  <h6 class="ml-3">Teflon</h6>
                  <h6 class="ml-3">Accesories</h6>
                </div>
              </div>
            </li>

          </ul>
        </li>
        <!-- <li class="nav-item">
      <a class="nav-link" href="#"></a>
     </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Wasserpflege
          </a>
          <ul class="dropdown-menu dropdown-element wasserpflege-position">
            <li>
              <div class="row">
                <div class="col">
                  <h6 class="ml-3 ">Measuring And Control Systems</h6>
                  <a class="dropdown-item" href="#">Filter control including pH and redox pH dosing system</a>
                  <a class="dropdown-item" href="#">Chlorine/Redox dosing system</a>
                  <a class="dropdown-item" href="#">Accessories for measuring and control systems, electrolysis</a>

                  <h6 class="ml-3">Electrolysis</h6>
                  <a class="dropdown-item" href="#">Filter control including electrolysis, pH and redox electrolysis</a>
                  <a class="dropdown-item" href="#">BWT pearl water</a>
                  <a class="dropdown-item" href="#">Replacement electrolytic cells</a>

                  <h6 class="ml-3">Measurement</h6>
                  <a class="dropdown-item" href="#">electronic salt analyzer</a>
                  <a class="dropdown-item" href="#">electronic pH analyzer</a>

                </div>
                <div class="col">
                  <h6 class="ml-3">
                    UV Systems</h6>
                  <a class="dropdown-item" href="#">UV SystemsUV Systems</a>
                  <a class="dropdown-item" href="#">UV-C sterilizer</a>
                  <a class="dropdown-item" href="#">UV-C Tech sterilizer</a>
                  <a class="dropdown-item" href="#">UV-C duplex</a>
                  <a class="dropdown-item" href="#">UV-C low pressure PE housing</a>
                  <a class="dropdown-item" href="#">Accessories for UV-C systems</a>

                  <h6 class="ml-3">Cleaning Robot</h6>
                  <a class="dropdown-item" href="#">Fairland ></a>
                  <a class="dropdown-item" href="#">Maytronics Dolphin ></a>
                  <a class="dropdown-item" href="#">BWT ></a>
                  <a class="dropdown-item" href="#">SMO Robot ></a>
                </div>

                <div class="col">
                  <h6 class="ml-3">Cleaning Accessories</h6>
                  <a class="dropdown-item" href="#">Telescopic poles</a>
                  <a class="dropdown-item" href="#">Cleaning brushes</a>
                  <a class="dropdown-item" href="#">Landing net</a>
                  <a class="dropdown-item" href="#">Dosing float</a>
                  <a class="dropdown-item" href="#">Suction hoses sucker heads</a>
                  <a class="dropdown-item" href="#">Cleaning accessories thermometer</a>
                  <a class="dropdown-item" href="#">Foil repair kits</a>

                  <h6 class="ml-3">Water Care Products</h6>
                  <a class="dropdown-item" href="#">disinfection ></a>
                  <a class="dropdown-item" href="#">PH value ></a>
                  <a class="dropdown-item" href="#">Algae control and wintering ></a>
                  <a class="dropdown-item" href="#">Care and cleaning ></a>
                </div>
              </div>
            </li>

          </ul>
        </li>
        <!-- <li class="nav-item border-0">
      <a class="nav-link" href="#"></a>
     </li> -->
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

        <li class="nav-item list-unstyled pe-3 ps-5 large-s">
          <a class="nav-link" href="{{url('api/viewCart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
          <a class="cart-count" href="{{url('api/viewCart')}}">0</a>
        </li>
      </ul>
      <form class="d-flex justify-content-end" role="search">
        <!-- <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button> -->
        <li class="nav-item border-0 list-unstyled list" style="list-style-type:none;">
          <div class="form-check form-switch">
            <input class="form-check-input m-auto" onclick="toggleDarkMode()" type="checkbox" role="switch" id="darkModeToggle">
          </div>
        </li>
        <li class="nav-item border-0 list-unstyled ">
          <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
        </li>


        <div id="validUser" style="display:flex;"></div>



        <div id="invalidUser">
          <li class="nav-item border-0 list-unstyled pe-3 ps-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
        </div>
        </li>
        </ul>
        </li>






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
                        <input type="checkbox" id="btncheck3"><span class="text" value="Allow remote shopping assistance"> Allow
                          remote shopping assistance</span>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="form-col">
                    <div class="row">
                      <div class="col">
                        <div class="captcha">
                          <span>{!! captcha_img('math') !!}</span>
                          <button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>
                        </div>
                      </div>
                      <div class="col">
                        <input id="signup_captcha" type="text" class="form-control" placeholder="Enter Captcha" name="signup_captcha">
                        <span id="signup_captcha_err" style="color:red"></span>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-style" id="signupBtn">Sign up</button>
                </form>
                <p class="foget-password mt-3 d-flex">Schon Kunde ? <a style="color:var(--blue);" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"> Anmeldung </a></p>
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
              <!-- <p class="form-header-content text-center">
         Wenn Sie ein Konto haben, melden Sie sich mit Ihrer E-Mail-Adresse an
        </p> -->
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
                <p class="foget-password d-flex">Sie haben kein Konto?<span><a style="text-decoration:underline;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="nav-link ps-3" href="#"> Hier
                      registrieren.</a></span></p>
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
            </div>
          </div>
        </div>
        <!--  Forgot Password Form Modal ends -->





        <!-- <div class="user-info d-flex">
          @if(auth()->check())
            <span>Welcome, {{ auth()->user()->name }}</span>

            <button id="logoutButton">Logout</button>


       
        @else
        <li class="nav-item border-0 list-unstyled pe-3 ps-3">
            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
          </li>
        @endif
    </div> -->


      </form>
    </div>
  </div>


</nav>

<!-- 
<script>
  // public/js/logout.js

  // Function to handle the logout API call
  function logout() {
    // Retrieve the token from local storage
    var token = localStorage.getItem('authToken');
    console.log(token);

    // Check if the token exists
    if (!token) {
      console.error('Token not found in localStorage');
      window.location.href = '/api/home';
      // return;
    }
    // Make a POST request to the logout endpoint using jQuery
    $.ajax({
      url: 'logoutApi',
      type: 'POST',
      headers: {
        'Authorization': 'Bearer ' + token,
      },
      success: function(response) {
        // Clear the authentication token from local storage
        if (response.message) {
          console.log(response.message);
          localStorage.removeItem('authToken');
          // Redirect or perform any other necessary actions after logout
          window.location.href = '/api/home';
        }

      },
      error: function(error) {
        // Handle errors
        console.error('Error:', error);
      }
    });
  }

  // Attach the logout function to the click event of the logout button

  $('#logoutButton').on('click', function() {
    logout();
  });
</script>
 -->



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

        console.log(response.role);
        // if (response.role === 'B2B' || response.role === 'Admin') {

        var baseUrl = window.location.origin;


        // // Append the desired path
        // var newUrl = baseUrl + '/api/admin_dashboard';

        // // Redirect to the new URL
        // window.location.href = newUrl;
        if (response.role == "Admin") {
          window.location.href = '/api/admin_dashboard/admin';
        } else if (response.role == "b2b") {
          window.location.href = '/api/admin_dashboard/b2b';
        } else if (response.role == "supplier") {
          window.location.href = '/api/admin_dashboard/supplier';
        } else {
          window.location.href = '/api/home';
        }


        if (response.error) {

          $('#error-message').text(response.error);
        }
        // }
        //  else {
        //   window.location.href = '/api/home';
        // }



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

<script>
  // Wait for the DOM to be ready
  $(document).ready(function() {
    // Retrieve the user token from localStorage
    var userToken = localStorage.getItem('authToken');
    console.log(userToken);

    // Make sure the token is not null or undefined

    // Perform your AJAX request
    $.ajax({
      url: '/api/home1', // Replace with your API endpoint
      method: 'GET',
      contentType: 'application/json', // Set the content type
      headers: {
        'Authorization': 'Bearer ' + userToken
      },
      success: function(response) {


        if (response.success !== null && response.success !== undefined) {


          // If success is not null or undefined, hide invalidUser and show validUser
          $("#invalidUser").css("display", "none");
          $("#validUser").html(`
    
    <li class="nav-item list-unstyled pe-3 ps-3">
        <a class="nav-link" href="#">0,00€</a>
    </li>

    <li class="nav-item dropdown" style="list-style-type:none;">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/frontEnd/web/images/profile.png') }}" alt="" srcset="" style="width: 30px;" />
        </a>
        <ul class="profile-drop dropdown-menu" aria-labelledby="dropdownMenuLink" >
            <li><a class="dropdown-item">Welcome, <span id="userName" style="color:var(--blue);">${response.success['name']}</span></a></li>
           <li> <a  class="dropdown-item" href="{{url('api/accountSetting')}}"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a  class="dropdown-item" href="#"><i class="fa-solid fa-chart-line"></i> Activity Log</a></li>
            <li class="dropdown-item" id="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</li>
        </ul>
    </li>

    <li class="nav-item list-unstyled pe-3 ps-5 small-s">
      <a class="nav-link" href="{{url('api/viewCart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
      <a class="cart-count">0</a>
     </li>
`);

          // Append the logout button outside of the string
          $("#dropmenu").append(`
   
`);




          // $("#userName").html(response.success['name']);
        } else {

          // If success is null or undefined, hide validUser and show invalidUser
          $("#validUser").css("display", "none");
          console.log(response.success);
          $("#invalidUser").css("display", "block");
        }
      },

      error: function(error) {
        console.error(error);
        // Handle the error here
      }
    });

  });
</script>

<script>
  $(document).ready(function() {
    // Hide invalidUser initially
    $("#invalidUser").css("display", "none");

    // Check if the "Log Out" list item is clicked within #validUser
    $("#validUser").off('click').on('click', 'li:contains("Log out")', function(event) {
      if ($(event.target).is('#logout')) {
        console.log('hello');
        var token = localStorage.getItem('authToken');
        console.log(token);

        // Check if the token exists
        if (!token) {
          console.error('Token not found in localStorage');
          window.location.href = '/api/home';
          // return;
        }
        // Make a POST request to the logout endpoint using jQuery
        $.ajax({
          url: '/api/logoutApi',
          type: 'POST',
          headers: {
            'Authorization': 'Bearer ' + token,
          },
          success: function(response) {
            // Clear the authentication token from local storage
            if (response.message) {
              console.log(response.message);
              localStorage.removeItem('authToken');
              // Redirect or perform any other necessary actions after logout
              window.location.href = '/api/home';
            }

          },
          error: function(error) {
            // Handle errors
            console.error('Error:', error);
          }
        });
      }

    });
  });
</script>


<!-- Darkmode script starts -->
<script type="text/javascript" src="{{ asset('/js/web/dark_theme.js') }}"></script>
<!-- Darkmode script ends -->