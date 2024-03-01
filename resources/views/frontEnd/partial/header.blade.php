<?php
    use Illuminate\Support\Facades\Crypt;
?>
<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-proxima-nova@1/style.min.css">
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


  #logout:hover,
  #logout:hover i {
   color: red !important;
  }


  .dropdown-item.active,
  .dropdown-item:active {
   color: var(--black);
   text-decoration: none;
   background-color: var(--white);
  }

  .dashboard a{
    font-size:15px !important;
    text-align:center;
    font-weight:700 !important;
    color:var(--blue) !important;
  }
  .dashboard{
    padding-top:5px;
    /* background-color:var(--white); */
  }
  </style>
 </head>

 <input type="hidden" id="baseUrl" value="{{url('/')}}">


 <nav class="navbar navbar-expand-lg ps-4 pe-4">
  <div class="container-fluid">

   <!-- <a class="navbar-brand" href="#"
          ><img src="assets/images/spato-logo.png" alt="" srcset=""
        /> -->



   <a class="navbar-brand" href="{{url('api/home')}}"><img
     src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
    <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
     <li class="nav-item">
      <a class="nav-link" aria-current="page" href="{{url('api/home')}}">Home</a>
     </li>
     <!-- <li class="nav-item">
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
          <a class="dropdown-item" href="#">EPS Stein P40</a>
          <a class="dropdown-item" href="#">EPS Stein P80</a>
          <a class="dropdown-item" href="#">EPS Stein P40 Gigant
</a>
          <a class="dropdown-item" href="#">EPS stone P40 Giant</a>
          <a class="dropdown-item" href="#">EPS Stein Rundbogen Gigant
</a>
          <a class="dropdown-item" href="#">EPS Stein Überlaufrinne P100
</a>
          <a class="dropdown-item" href="#">EPS Treppen
</a>
          <a class="dropdown-item" href="#">Zubehör
</a>
          <h6 class="ml-3">Überlaufrinnen
</h6>
          <a class="dropdown-item" href="#">Beton Überlaufrinne
</a>
          <a class="dropdown-item" href="#">EPS Stein Überlaufrinne P100
</a>
          <a class="dropdown-item" href="#">Überlaufrinnen Roste
</a>
          <a class="dropdown-item" href="#">Zubehör
</a>

         </div>
         <div class="col">
          <h6 class="ml-3">Einbauteile
</h6>
          <a class="dropdown-item" href="#">Edelstahl BEHNCKE</a>
          <a class="dropdown-item" href="#">Edelstahl HUGO LAHME</a>
          <a class="dropdown-item" href="#">Rotguss HUGO LAHME
</a>
          <a class="dropdown-item" href="#">ABS Kunststoff</a>
          <a class="dropdown-item" href="#">ASTRAL/FLUIDRA/ACSI/BWT</a>
          <h6 class="ml-3">Folien</h6>
          <a class="dropdown-item" href="#">RENOLIT Alkorplan</a>
          <h6 class="ml-3">Handläufe</h6>
          <a class="dropdown-item" href="#">Haltestangen
</a>
          <a class="dropdown-item" href="#">Handläufe
</a>
          <a class="dropdown-item" href="#">Zubehör
</a>
          
         </div>

         <div class="col">
          <h6 class="ml-3">Leitern</h6>
          <a class="dropdown-item" href="#">Leiter Marina für öffentliche Pools</a>
          <a class="dropdown-item" href="#">Leiter Edelstahl Standard</a>
          <a class="dropdown-item" href="#">Leiter Edelstahl Muro Slim
</a>
          <a class="dropdown-item" href="#">Leiter Edlelstahl Mixta
</a>
          <a class="dropdown-item" href="#">Leiter 2-teilig</a>
          <a class="dropdown-item" href="#">Zubehör
</a>
         </div>
        </div>
       </li>

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
          <h6 class="ml-3 ">Filter
</h6>
          <a class="dropdown-item" href="#">Sandfilter</a>
          <a class="dropdown-item" href="#">Kartuschenfilter</a>
          <h6 class="ml-3">Filter</h6>
          <a class="dropdown-item" href="#">Sand filter</a>
          <a class="dropdown-item" href="#">Skimfilter</a>
          <a class="dropdown-item" href="#">Filtermaterial</a>

          <h6 class="ml-3">Filter</h6>
          <a class="dropdown-item" href="#">Zubehör
</a>


<h6 class="ml-3">Steuerungen</h6>
          <a class="dropdown-item" href="#">Filtersteuerungen</a>
          <a class="dropdown-item" href="#">Heizfiltersteuerungen
</a>
          <a class="dropdown-item" href="#">Niveausteuerungen
</a>
          <a class="dropdown-item" href="#">Überlauf-Sammelbehälter Steuerungen
</a>
          <a class="dropdown-item" href="#">Temperatursteuerungen
</a>
          <a class="dropdown-item" href="#">PN Steuerungen
</a>
          <a class="dropdown-item" href="#">Piezo Steuerungen
</a>
          <a class="dropdown-item" href="#">Rückspülsteuerungen</a>
          <a class="dropdown-item" href="#">Frequenz-Umformer
</a>
          <a class="dropdown-item" href="#">Zubehör
</a>
          <a class="dropdown-item" href="#">Stellantriebe
</a>


         </div>
         <div class="col">
          <h6 class="ml-3">Zubehör öffentliche Filtertechnik
</h6>
          <a class="dropdown-item" href="#">Sandfilter öffentlich</a>
          <a class="dropdown-item" href="#">Überlauf-Sammelbehälter
</a>
          <a class="dropdown-item" href="#">Zubehör und Technik</a>
          <h6 class="ml-3">Ventile</h6>
          <a class="dropdown-item" href="#">Stangenventile
</a>
          <a class="dropdown-item" href="#">Mehrwege Ventile</a>
         </div>

         <div class="col">
          <h6 class="ml-3">Pumpen</h6>
          <a class="dropdown-item" href="#">Umwälzpumpen Schwimmbad</a>
          <a class="dropdown-item" href="#">Jet-Pumpen Attraktionen</a>
          <!-- <a class="dropdown-item" href="#">Level controls ></a>
          <a class="dropdown-item" href="#">Overflow collection container controls</a>
          <a class="dropdown-item" href="#">Temperature controls</a>
          <a class="dropdown-item" href="#">PN controls</a>
          <a class="dropdown-item" href="#">Piezo controls</a>
          <a class="dropdown-item" href="#">Backwash controls ></a>
          <a class="dropdown-item" href="#">Frequency converter ></a>
          <a class="dropdown-item" href="#">Accesories</a> -->

          <h6 class="ml-3">Filteranlagen</h6>
          <h6 class="ml-3">Heizsysteme</h6>
          <a class="dropdown-item" href="#">Wärmepumpen</a>
          <a class="dropdown-item" href="#">Wärmetauscher</a>
          <a class="dropdown-item" href="#">Elektro Wärmetauscher</a>
          <a class="dropdown-item" href="#">Solarabsorber</a>
         
<h6 class="ml-3">Luftentfeuchter
</h6>
          <a class="dropdown-item" href="#">Full Inverter Luftentfeuchter
</a>
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
       Attraktionen
      </a>
      <ul class="dropdown-menu dropdown-element attraktionen-position">
       <li>
        <div class="row">
         <div class="col">
          <h6 class="ml-3 ">Gegenstromanlagen</h6>
          <a class="dropdown-item" href="#">Edelstahl/Rotguss HUGO LAHME FITSTAR</a>
          <a class="dropdown-item" href="#">ABS Kunsstoff</a>
          <a class="dropdown-item" href="#">ABS Kunsstoff SPECK BADU JET
</a>
          <h6 class="ml-3">Massageanlagen</h6>
          <a class="dropdown-item" href="#">Edelstahl/Rotguss HUGO LAHME FITSTAR</a>
          <a class="dropdown-item" href="#">ABS Kunststoff/Edelstahl</a>
          <a class="dropdown-item" href="#">Bedufter Modul speziell für Whirlpools
</a>
          <a class="dropdown-item" href="#">Lufterwärmung
</a>
          <a class="dropdown-item" href="#">Luftgebläse
</a>

          <h6 class="ml-3">Schwallduschen</h6>
          <a class="dropdown-item" href="#">Edelstahl/Rotguss HUGO LAHME FITSTAR
</a>
          <a class="dropdown-item" href="#">Edelstahl/PVC</a>

         </div>
         <div class="col">
          <h6 class="ml-3">Wasserkanonen</h6>
          <a class="dropdown-item" href="#">Edelstahl/Rotguss HUGO LAHME FITSTAR</a>
          <h6 class="ml-3">Luftsprudelsitz</h6>
          <h6 class="ml-3">Wasserfall</h6>
          <a class="dropdown-item" href="#">Edelstahl/Rotguss HUGO LAHME FITSTAR</a>
         </div>

         <div class="col">
          <h6 class="ml-3">Gartenduschen</h6>
          <a class="dropdown-item" href="#">Solardusche
</a>
          <a class="dropdown-item" href="#">Gartendusche
</a>
          <a class="dropdown-item" href="#">Pool Liege
</a>
          
          <!-- <h6 class="ml-3">Dehumidifier</h6>
          <a class="dropdown-item" href="#">Full inverter dehumidifier</a>
          <h6 class="ml-3">Heating Systems</h6>
          <a class="dropdown-item" href="#">Heat pumps ></a> -->
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
          <h6 class="ml-3 ">Rohre und Flexrohre</h6>
          <a class="dropdown-item" href="#">PVC Druckrohr
</a>
          <a class="dropdown-item" href="#">PVC Flexrohr
</a>
          <a class="dropdown-item" href="#">HDPE Schutzrohr
</a>
          <a class="dropdown-item" href="#">PE 100 Druckrohre, SDR 11, PN 16
</a>
          <a class="dropdown-item" href="#">PE 100 Druckrohre, SDR 11, PN 10
</a>
 <h6 class="ml-3">Fittings und Armaturen
</h6>
          <a class="dropdown-item" href="#">PVC Flexrohr Klemmfittings
</a>
          <a class="dropdown-item" href="#">PVC Fittings
</a>
          <a class="dropdown-item" href="#">PVC Behälterdurchführungen
</a>
          <a class="dropdown-item" href="#">PVC Rückschlagventile
</a>
          <a class="dropdown-item" href="#">PVC Rohrschellen
</a>
          <a class="dropdown-item" href="#">PVC Kugelhähne und Ventile
</a>
          <a class="dropdown-item" href="#">PVC Absperrschieber
</a>
          <a class="dropdown-item" href="#">PVC 3-Wege Kugelhähne
</a>
          <a class="dropdown-item" href="#">PVC Einlegeteile für Kugelhähne und Ventile
</a>
          <a class="dropdown-item" href="#">PVC Klappen
</a>
          <a class="dropdown-item" href="#">PVC Schaugläser und Sondenhalter
</a>
          <a class="dropdown-item" href="#">Durchflußmesser
</a>

          <h6 class="ml-3">PVC Klebefittings schwarz
</h6>
          <h6 class="ml-3">PVC Klebefittings weiß
</h6>
          <h6 class="ml-3">PVC Flexfit weiß
</h6>
         </div>
         <div class="col">
          <h6 class="ml-3">
          PP Klemmfittings
</h6>
          <a class="dropdown-item" href="#">PP Kupplung, Klemm x Klemm 
</a>
          <a class="dropdown-item" href="#">PP Reduzierkupplung, Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP Endkappe, Klemm
</a>
          <a class="dropdown-item" href="#">PP Winkel 90° mit Wandscheibe, Klemm x IG
</a>
          <a class="dropdown-item" href="#">PP Kupplung, Klemm x IG
</a>
          <a class="dropdown-item" href="#">PP Kupplung, Klemm x AG
</a>
          <a class="dropdown-item" href="#">PP Kupplung mit Flansch, Komplett-Set, Klemm x Flansch</a>
          <a class="dropdown-item" href="#">PP Universalkupplung, Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP Globalkupplung, Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP Winkel 90°, Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP Winkel 90°, Klemm x AG
</a>
          <a class="dropdown-item" href="#">PP Winkel 90°, Klemm x IG
</a>
          <a class="dropdown-item" href="#">PP T-Stück, Klemm x Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP T-Stück, Klemm x AG x Klemm
</a>
          <a class="dropdown-item" href="#">PP Reduzier T-Stück, Klemm x Klemm x Klemm
</a>
          <a class="dropdown-item" href="#">PP T-Stück, Klemm x IG x Klemm
</a>
         </div>

         <div class="col">
          <h6 class="ml-3">PP Anbohrschellen
</h6>
          <a class="dropdown-item" href="#">PP Anbohrschelle, 2 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG
</a>
          <a class="dropdown-item" href="#">PP Anbohrschelle, 4 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG
</a>
          <a class="dropdown-item" href="#">PP Anbohrschelle, 6 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG
</a>

          <h6 class="ml-3">Magnetventile 
</h6>
          <a class="dropdown-item" href="#">Magnetventile WKB
</a>
          <a class="dropdown-item" href="#">Magnetventile Bürkert
</a>
          <h6 class="ml-3">Kleber
</h6>
          <h6 class="ml-3">Reiniger
</h6>
          <h6 class="ml-3">Teflon
</h6>
          <h6 class="ml-3">Zubehör
</h6>
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
          <h6 class="ml-3 ">Mess und Regelanlagen
</h6>
          <a class="dropdown-item" href="#">Filtersteuerung inkl. pH und Redox
</a>
          <a class="dropdown-item" href="#">Dosieranlage pH
</a>
          <a class="dropdown-item" href="#">Dosieranlage Chlor/Redox</a>
          <a class="dropdown-item" href="#">Zubehör für Mess und Regelanlagen, Elektrolyse
</a>

          <h6 class="ml-3">Elektrolyse
</h6>
          <a class="dropdown-item" href="#">Filtersteuerung inkl. Elektrolyse, pH und Redox
</a>
          <a class="dropdown-item" href="#">Elektrolyse
</a>
          <a class="dropdown-item" href="#">BWT Perlwasser</a>
          <a class="dropdown-item" href="#">Ersatz-Elektrolysezellen
</a>

<h6 class="ml-3">
          UV Anlagen
</h6>
          <a class="dropdown-item" href="#">UV-C Ionisator
</a>
          <a class="dropdown-item" href="#">UV-C Sterilisator
</a>
          <a class="dropdown-item" href="#">UV-C Tech-Sterilisator
</a>
          <a class="dropdown-item" href="#">UV-C Duplex
</a>
          <a class="dropdown-item" href="#">UV-C Niederdruck PE Gehäuse
</a>
          <a class="dropdown-item" href="#">Zubehör für UV-C Anlagen
</a>
         </div>
         <div class="col">
          

          <h6 class="ml-3">Reinigungsroboter
</h6>
          <a class="dropdown-item" href="#">Fairland X Warrior Ultra Clean
</a>
          <a class="dropdown-item" href="#">SMO Robot Tank X11
</a>
          <a class="dropdown-item" href="#">Maytronics Professional Smart Scoop Cleaner
</a>
          <a class="dropdown-item" href="#">Maytronics Professional Line Scoop Comfort Cleaner mit Smartphonenavigation</a>
          <a class="dropdown-item" href="#">Maytronics Professional Line Smart ACTIVE Cleaner</a>
          <a class="dropdown-item" href="#">Maytronics Commercial Line Dolphin WAVE 50
</a>

          <a class="dropdown-item" href="#">Maytronics Commercial Line Dolphin WAVE 100
</a>
          <a class="dropdown-item" href="#">Maytronics Commercial Line Dolphin WAVE 150
</a>
          <a class="dropdown-item" href="#">Maytronics Commercial Line Dolphin WAVE 200
</a>
          <a class="dropdown-item" href="#">Maytronics Commercial Line Dolphin WAVE 300 XL
</a>
          <a class="dropdown-item" href="#">Aquatron Cosmy
</a>
         </div>

         <div class="col">
          <h6 class="ml-3">Reinigungszubehör
</h6>
          <a class="dropdown-item" href="#">Teleskopstangen
</a>
          <a class="dropdown-item" href="#">Reinigungsbürsten
</a>
          <a class="dropdown-item" href="#">Kescher
</a>
          <a class="dropdown-item" href="#">Dosierschwimmer
</a>
          <a class="dropdown-item" href="#">Saugschläuche
</a>
          <a class="dropdown-item" href="#">Saugerköpfe
</a>
          <a class="dropdown-item" href="#">Reinigungsaccesoires</a>
          <a class="dropdown-item" href="#">Thermometer</a>
          <a class="dropdown-item" href="#">Folien-Reparatursets</a>

          <h6 class="ml-3">Wasserpflegeprodukte</h6>
          <a class="dropdown-item" href="#">Desinfektion
</a>
          <a class="dropdown-item" href="#">pH Wert
</a>
          <a class="dropdown-item" href="#">Algenbekämpfung und Überwinterung
</a>
          <a class="dropdown-item" href="#">Pflege und Reinigung
</a>

<h6 class="ml-3">Messung</h6>
          <a class="dropdown-item" href="#">elektronisches Salz Analysegerät

</a>
          <a class="dropdown-item" href="#">elektronisches pH Analysegerät
</a>
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
      <a class="cart-count" href="{{url('api/viewCart')}}"></a>
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
       <input class="form-check-input m-auto" onclick="toggleDarkMode()" type="checkbox" role="switch"
        id="darkModeToggle">
      </div>
     </li>
     <li class="nav-item border-0 list-unstyled ">
      <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
     </li>


     <div id="validUser" style="display:flex;"></div>



     <div id="invalidUser">
      <li class="nav-item border-0 list-unstyled pe-3 ps-3">
       <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"><i
         class="fa-solid fa-user"></i></a>
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
         <a class="" href="{{url('api/home')}}"><img class="signup-brand-logo"
           src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />

         </a>


         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <p class="form-header-content text-center">
         Bitte melden Sie sich mit den angegebenen Daten an.
        </p>

        <div class="modal-body">
         <form id="signupForm" method="post">
          <div class="text-center"><span id="common_err"
            style="color:var(--blue); font-size:18px; font-weight:600; text-align:center;"></span></div>
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
             <input type="password" class="form-control" id="signup_confirmpassword" name="signup_confirmpassword"
              require>
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
             <input id="signup_captcha" type="text" class="form-control" placeholder="Enter Captcha"
              name="signup_captcha">
             <span id="signup_captcha_err" style="color:red"></span>
            </div>
           </div>
          </div>

          <button type="button" class="btn btn-style" id="signupBtn">Sign up</button>
         </form>
         <p class="foget-password mt-3 d-flex">Schon Kunde ? <a style="color:var(--blue);" type="button"
           data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link" href="#"> Anmeldung </a></p>
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
         <a class="" href="{{url('api/home')}}"><img class="signup-brand-logo"
           src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />

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
         <p class="foget-password d-flex"><a style="text-decoration:underline;" type="button" data-bs-toggle="modal"
           data-bs-target="#exampleModal1" class="nav-link" href="#">Passwort vergessen?</a></p>
         <p class="foget-password d-flex">Sie haben kein Konto?<span><a style="text-decoration:underline;" type="button"
            data-bs-toggle="modal" data-bs-target="#exampleModal2" class="nav-link ps-3" href="#"> Hier
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
         <h1 class="modal-title fs-5" id="exampleModalLabel"><a class="navbar-brand" href="{{url('api/home')}}"><img
            src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" />


          </a></h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form id="forgetForm">
          <span id="forget_error_message" style="color:red;"></span>
          <div class="mb-3">
           <!-- <label for="recipient-name" class="col-form-label">E-mail*</label> -->
           <input type="text" class="form-control" name="forget_email" id="forget_email" placeholder="name@xyz.com"
            require>

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
      window.location.href = '/api/admin_dashboard/{{ encrypt('admin') }}';
    } else if (response.role == "b2b") {
     window.location.href = '/api/admin_dashboard/{{ encrypt('b2b') }}';
    } else if (response.role == "supplier") {
     window.location.href = '/api/admin_dashboard/{{ encrypt('supplier') }}';
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

      var role = response.success['role'];
             
                console.log(role);


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
            <p style="text-align:center;"><b style="font-size:16px; text-align:center">Welcome, <span id="userName" style="color:var(--blue);">${response.success['name']}</span></b></p>
           <li> <a  class="dropdown-item" href="{{url('api/accountSetting')}}"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a  class="dropdown-item" href="{{url('api/viewOffersForB2C')}}"><i class="fa-solid fa-chart-line"></i> Offers</a></li>
            <li class="dropdown-item" id="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</li>
            <li class="dashboard"><a  class=" dropdown-item" href="/api/admin_dashboard/${response.success['role']}">Visit Dashboard</a></li>
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
<script>
  function changeBackgroundColor() {
  var button = document.getElementByClassName('.nav-item');
  button.style.backgroundColor = 'red';
}
</script>

 <!-- Darkmode script starts -->
 <script type="text/javascript" src="{{ asset('/js/web/dark_theme.js') }}"></script>
 <!-- Darkmode script ends -->