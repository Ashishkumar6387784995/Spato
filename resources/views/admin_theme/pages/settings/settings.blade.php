<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Einstellungen</title>
    <!-- plugins:css -->

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    <!-- Fonts -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>
    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('theme/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/images/favicon.ico') }}">
    <style>
        .transform-hover {
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s ease;
            /* You can adjust the scale value for the desired zoom effect */

        }

        .transform-hover:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .edit {
            background-color: #54606c;
            border: 1px solid #54606c;
            color: #ffff;
            padding: 10px 14px;
            height: 42px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.5s ease;
        }

        .edit:hover {
            background-color: transparent;
            border: 1px solid #54606c;
            color: #54606c;
            border-radius: 5px;
        }

        .close {
            color: #54606c;
        }

        .row .col {
            font-size: 14px;
        }

        table tr th {
            width: 200px;
        }

        table tr td {
            padding: 10px 2px;
            width: 200px;
        }
        table tr td a{
            color:#54606c;
        }
        .btn{
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover{
            /* background-color: #54606c; */
            background-color:#54606c;
            color: #fff;
        } 
        p{
         line-height:10px;
        }
        p a{
         color:#54606c;
         text-decoration:none;
        }

        .einstellungen-page a{
            color: #44e1d5 !important;
  border: 1px solid #fcfcfc !important;
  border-radius:5px;
  text-align:center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                {{-- <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div> --}}
            </div>
        </div>
    </div>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


        @include('admin_theme/Partial/sidebar')



        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="" style="padding-bottom:10px;   margin-top:-1.5rem;">
        @include('admin_theme/Partial/admin_header')
          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                    Shop & APP Texte
                    </div>
                </div>
                <div class="container ps-5">
                 <p class="list"><a href="{{url('/api/agb')}}">AGB</a></p>
                 <p class="list"><a href="#">Datenschutz</a></p>
                 <p class="list"><a href="{{url('/api/lieferbedingungen')}}">Lieferbedingungen</a></p>
                 <p class="list"><a href="#">Hintergrund Bild Startseite Shop</a></p>
                 <p class="list"><a href="#">Text Startseite Shop</a></p>
                 <p class="list"><a href="{{url('/api/Impressum')}}">Impressum</a></p>
                </div>
                <div class="row pt-3">
                    <div class="col-md-4 stretch-card grid-margin">
                    Textvorlagen Kopf und Fußzeile Belege
                    </div>
                </div>
                <div class="container ps-5">
                 <p class="list"><a href="#">Angebote</a></p>
                 <p class="list"><a href="#">Aufträge</a></p>
                 <p class="list"><a href="#">Lieferscheine</a></p>
                 <p class="list"><a href="#">Rechnungen</a></p>
                 <p class="list"><a href="#">Gutschriften</a></p>
                </div>

                <div class="row pt-3">
                    <div class="col-md-4 stretch-card grid-margin">
                    Textvorlagen Automatische Mails
                    </div>
                </div>
                <div class="container ps-5">
                 <p class="list"><a href="#">Bestellung B2B</a></p>
                 <p class="list"><a href="#">Bestellung bei Lieferanten</a></p>
                 <p class="list"><a href="#">Angebot B2B</a></p>
                 <p class="list"><a href="#">Einkaufsvorschlag B2C</a></p>
                 <p class="list"><a href="#">Registrierung B2C</a></p>
                 <p class="list"><a href="#">Registrierung B2B</a></p>
                 <p class="list"><a href="#">Registrierung Lieferant</a></p>
                </div>
              
                <div class="row pt-3">
                    <div class="col-md-4 stretch-card grid-margin">
                    Start-Nummerfolge anpassen
                    </div>
                </div>
                <div class="container ps-5">
                 <p class="list"><a href="#">AN - Angebote</a></p>
                 <p class="list"><a href="#">AB - Aufträge</a></p>
                 <p class="list"><a href="#">LI - Lieferscheine</a></p>
                 <p class="list"><a href="#">RE - Rechnungen</a></p>
                 <p class="list"><a href="#">GS - Gutschriften</a></p>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

    <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>



</body>

</html>