<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Contact</title>
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
        table tr td input{
            width:100%;
            border:none;
            background-color:transparent;
        }
        table tr td a{
            color:#54606c;
        }
        a{
            color:#54606c;
            font-size:15px;
            font-weight:600;
        }
        .kontakte-page a{
            color: #44e1d5 !important;
  border: 1px solid #fcfcfc !important;
  border-radius:5px;
  margin-top:10px;
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
                <div class="" style="border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">
                  <h2>Admin Dashboard</h2>
                  <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                   <a href="#"  class="btn">Save</a>
                    </div>
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                        
                        <a href="#" class="mt-2">Umsatz 25.067,90 €</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <a href="#"  class="mt-2">offene Rechnungen 5.007,90 € l</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <a href="#"  class="mt-2">laufende Aufträge 18.054,09 €</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">Typ</div>
                            <div class="col">
                                B2B <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                B2C <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </div>
                            <div class="col stretch-card">
                                Kundennummer <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:5px;">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col stretch-card pt-3">
                                Firmenname <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col stretch-card pt-3">
                        Ansprechpartner <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> Frau <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  style="margin:0px 10px;"> Herr <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; width:300px;">
                        </div>
                        </div>
                        <div class="row pt-3">
                        <div class="col">
                        Adresse
                        </div>
                        <div class="col">
                        Lieferadresse
                        </div>
                        </div>
                        <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Straße
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Straße
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Ort
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Ort
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                        <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       PLZ
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       PLZ
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                           <!--  -->
                           <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Land
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Land
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                           <!--  -->
                           <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       VAT ID
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       <!-- Straße -->
                        </div>
                        <div class="col-8">
                       <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;"> -->
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                           <!--  -->
                           <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Telefon
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Mobile
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                           <!--  -->
                           <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Mail 
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Mail RE

                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                           <!--  -->
                           <div class="row pt-3">
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       WWW
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       <!-- Straße -->
                        </div>
                        <div class="col-8">
                       <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;"> -->
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                        <div class="row">
                        <div class="col stretch-card pt-3">
                        Newsletter <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> Ja <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  style="margin:0px 10px;"> Nein  Mail  <span style="padding:0 15px;">Newsletter</span>  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; width:200px;">
                        </div>
                        </div>
                        
                    </div>

                    <div class="col">
                        Maps <br><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3952458803487!2d77.38694107550029!3d28.617913975672646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5041555554f%3A0x6c59d83bd08b7d6f!2sNettechnocrats%20-%20SEO%20Company%20in%20Noida!5e0!3m2!1sen!2sin!4v1703071892370!5m2!1sen!2sin" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="buttons pt-4">
                        <a href="#"> Kundenadressbuch</a><br><br>
                        <a href="#"  class="btn">+ neuer Kontakt</a>
                        </div>
                    </div>
                    
                </div>
          <div class="row">
            <div class="col">
            <span>Rabatt-Gruppe</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>No</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>1</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>2</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>3</span> <span>Zahlung</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>Vorkasse</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>14</span> <span>Tage netto n. Erhalt der RE</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>PayPal</span> <span>MwSt. Satz</span> <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; width:2px;">
            </div>
          </div>      
          <div class="row">
            <div class="col">
            <span>Shop / APP sperren</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>ja</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>Nein</span> <span>Zugangsdaten Shop / APP ändern</span>
            </div>
          </div>  
          <div class="row pt-3">
            <div class="col">
            <span>Premium B2B – B2C connection</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>ja</span> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="margin:0px 10px;"> <span>Nein</span>
            </div>
          </div>  
    </div>
    </div>  
    </div>
  
  
  
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