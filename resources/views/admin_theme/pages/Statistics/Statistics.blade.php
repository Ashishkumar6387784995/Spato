<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Statistics</title>
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

        .btn-dark{
            background-color:#54606c;
            border:1px solid #54606c;
            color:#ffff;
            padding: 5px 14px;
            height: 35px;
            text-decoration:none;
            border-radius:5px;
            transition:0.5s ease;
            width:100%;
        }
        .btn-dark:hover{
            background-color:transparent;
            border:1px solid #54606c;
            color: #54606c !important;
            border-radius:5px;
        }
        
        .btn{
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
            width:100%;
        }
        .btn:hover{
            /* background-color: #54606c; */
            background-color:#54606c;
            color: #fff;
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
                <div class="" style="border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">
                  <h2>Admin Dashboard</h2>
                  <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">
                    
                    <div class="col-2" >
                        <button type="button"  class="btn">Produkte</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Kunden</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Lieferanten</button>
                     </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Umsatz</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Claim‘s</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Rechnung</button>
                </div>
            </div>

            <div class="row pt-3">
                   <div class="col"><button type="button"  class="btn-dark">Filter</button></div>
            </div>
                
            <div class="row pt-3">
                    
                    <div class="col-2" >
                        <button type="button"  class="btn">Zeitraum</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Zeitraum</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Zeitraum</button>
                     </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Zeitraum</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Zeitraum</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Zeitraum</button>
                </div>
            </div>
            <div class="row pt-3">
                    
                    <div class="col-2" >
                        <button type="button"  class="btn">Kunden</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Produkte</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Produkte</button>
                     </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Produkte</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Produkte</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Kunden</button>
                </div>
            </div>
            <div class="row pt-3">
                    
                    <div class="col-2" >
                        <button type="button"  class="btn">Lieferanten</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Lieferanten</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Umsatz</button>
                     </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Kunden</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Kunden</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Lieferanten</button>
                </div>
            </div>
            <div class="row pt-3">
                    
                    <div class="col-2" >
                        <button type="button"  class="btn">Umsatz</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Umsatz</button>
                    </div>
                    <div class="col-2" >
                     <button type="button"  class="btn">Claim‘s</button>
                     </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Lieferanten</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Lieferanten</button>
                    </div>
                    <div class="col-2" >
                    <button type="button"  class="btn">Offen</button>
                </div>
            </div>



                <div class="row pt-3">
                    
                    <div class="col-md-2" >
                    <button type="button"  class="btn">Claim‘s</button>
                    </div>
                    
                    <div class="col-md-2 " >
                    <button type="button"  class="btn">Claim‘s</button>
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                </div>
                <div class="row pt-3">
                    
                    <div class="col-md-2" >
                    </div>                    
                    <div class="col-md-2 " >
                    <button type="button"  class="btn">Rechnung</button>
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                    <div class="col-md-2" >
                    </div>
                </div>
                
                <div class="row pt-3">
                   <div class="col"><button type="button"  class="btn-dark">Show PDF or Excel</button></div>
            </div>

                </div>



                </div>
                
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