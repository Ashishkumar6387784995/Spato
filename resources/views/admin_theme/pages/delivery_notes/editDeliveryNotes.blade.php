<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Delivery </title>
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

        .edit{
            background-color:#54606c;
            border:1px solid #54606c;
            color:#ffff;
            padding: 10px 14px;
            height: 42px;
            text-decoration:none;
            border-radius:5px;
            transition:0.5s ease;
        }
        .edit:hover{
            background-color:transparent;
            border:1px solid #54606c;
            color:#54606c;
            border-radius:5px;
        }
        
        .btn{
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
        }
        .close{
            color:#54606c;
        }
        .stretch-card{
            font-size:13px;
        }
        table tr th {
            width: 200px;
            background-color:#54606c;
            color:#fff;
        }

        table tr td {
            padding: 10px 2px;
            width: 200px;
            font-size:14px;
        }
        table tr td a{
            color:#54606c;
        }
        a{
            color:#54606c;
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
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                   <a href="#"  class="btn">Save</a>
                    </div>
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                    
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Auftrag</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Lieferschein</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Rechnung</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">senden</a>
                    </div>
                </div>
                <div class="row pt-3">
                    
                    <div class="col-md-4" >
                   
                    <form action="">
                     <textarea name="text" id="" cols="35" rows="10"></textarea>
                    </form>
                    </div>
                    <div class="col-md-2 " >
                    </div>
                    <div class="col-md-1 " >
                    </div>
                    <div class="col-md-3" >
                   <p>Angebots-Nr.</p><br>
                   <p>Angebotsdatum</p><br>
                   <p>Referenz</p><br>
                   <p>Ihre Kundennummer</p> <br>
                    </div>
                    <div class="col-md-2" >
                    <p><a href="#">AN-12345</a></p><br>
                    <p><a href="#">15.01.2024</a></p><br>
                    <p><a href="#">Mrs. Perfect</a></p><br>
                    <p><a href="#">123456</a></p><br>
                    </div>
                </div>

                <div class="row pt-3">
                    
                    <div class="col-md-4" >
                   <h4>Angebot-Nr. <a href="#">AN-12345</a></h4>
                    </div>
                    <div class="col-md-3 stretch-card grid-margin" >
                     <a href="#"   class="btn">Kopfzeile Standard</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                     <a href="#"   class="btn">Kopfzeile neu</a>
                    </div>
                    <!-- <div class="col-md-2 " > </div> -->
                    <div class="col-md-2 " > </div>
                    
                </div>
                
                <table id="dataTable">
                    <tr>
                        <th>POS.</th>
                        <th>Produkt</th>
                        <th>Beschreibung</th>
                        <th>Menge</th>
                        <th>Gesamtpreis</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>80.2103281138</td>
                        <td>BADU® Delta Eco VS</td>
                        <td>1</td>
                        <td>1.000,08€</td>
                        <td><a href="">delete</a></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>80.2103281138</td>
                        <td>BADU® Delta Eco VS</td>
                        <td>1</td>
                        <td>1.000,08€</td>
                        <td><a href="">delete</a></td>
                    </tr><tr>
                        <td>3.</td>
                        <td> <a href="#"   class="btn">+ neuer Artikel</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </table>
                <hr style="border: 1px solid #54606c;" />
                <div class="row pt-3">
                    
                    <div class="col-6 stretch-card" >
                    Lieferbedingungen: zzgl. Frachtkosten
                    </div>
                   
                    <div class="col-4 stretch-card "  >
                  
                    </div>
                    <div class="col-2 stretch-card "  >
                   
                    </div>
                    
                </div>
                <div class="row pt-3">
                    
                    <div class="col-6 stretch-card" >
                    Zahlungsbedingungen: nach Vereinbarung
                    </div>
                   
                    <div class="col-4 stretch-card "  >
                  
                    </div>
                    <div class="col-2 stretch-card "  >
               
                    </div>
                    
                </div>
                <div class="row pt-3">
                    
                    <div class="col stretch-card" >
                        
                    </div>
                    <div class="col stretch-card"  >
                        
                    </div>
                    <div class="col stretch-card "  >
                    <a href="#" class="edit">Fußzeile Standard</a>
                    </div>
                    
                    <div class="col stretch-card" >
                        <a href="#" class="edit">Fußzeile neu</a>
                    </div>
                    <div class="col stretch-card"  >
                        
                    </div>
                </div>
           
              
                </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                bootstrapdash.com 2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                    admin template</a> from Bootstrapdash.com</span>
        </div>
    </footer> -->
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