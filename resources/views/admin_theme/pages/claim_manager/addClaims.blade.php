<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Claims</title>
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

        
        .contact-show {
            width: 100%;
            height: 100%;
            background-color: #fff;
            border: 0.5px solid #000;
            padding: 10px 10px;
        }

        
        .showButton {
            width: 250px;
            background: transparent;
            border: 1px solid #8F8C8C;
            border-radius: 5px;
        }

        
        .dynamic-field {
            width: 100%;
            background: transparent;
            border: 1px solid #8F8C8C;
            border-radius: 5px;
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
        }
        .product-image{
            width:250px;
            padding:15px;
            background-color:#fff;
            border:1px solid #000;
        }





        .profile {
   background-color: #eaebef;
   margin-top: -1rem;
   padding-top: -10rem !important;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }



  #imageUpload {
   display: none;
  }

  #profileImage {
   cursor: pointer;
  }

  #profile-container {
   width: 250px;
   height: 200px;
   overflow: hidden;
   border: 1px solid black;
   background-color: #ffffff;
  }

  #profile-container img {
   width: 250px;
   height: 200px;
   margin: auto;
  }

  .upmsg{
    color: cyan;
    position:absolute;
    /* top:10px; */
    margin-top:80px;
    margin-left:65px;
    font-weight:900;
  }

  .claimmanager-page a{
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
                    
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <a href="#"   class="btn">An Lieferanten senden</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <a href="#"   class="btn">An den Kunden senden</a>
                    </div>
                </div>
                
                <div class="row pt-3">
                    
                    <div class="col-md-4" >
                        <div class="contact-show">
                            <p><b>Name</b> -> <span class="customer_dtl" id="customer_Name"><span></p>
                            <p><b>Conatact</b> -> <span class="customer_dtl" id="customer_Contact"><span></p>
                            <p><b>Email</b> -> <span class="customer_dtl" id="customer_Email"><span></p>
                        </div>
                    </div>
                    <div class="col-md-2 " >
                    </div>
                    <div class="col-md-3" >
                   <p>Claim-Nr.</p>
                   <p>Claimdatum</p>
                   <p>Referenz</p>
                   <p>Ihre Kundennummer</p> 
                   <p>Ihre Ust. ID</p> 
                    </div>
                    
                    <div class="col-md-3" >
                    <div class="inputs">
                        <p>
                            <input class="dynamic-field" type="text" placeholder='#' id="Claim_Nr" name="Claim_Nr" value="{{$newAssignmentNo}}" readonly /> 
                            <br>
                            <span class="msg_err" id="Claim_Nr_err" style="color:red;  font-size:13px;"></span>
                        </p>
                    </div>

                    <div class="inputs">
                        <p><input class="dynamic-field" type="date" placeholder='#' id="Claimdatum" name="Claimdatum"
                            value="{{ now()->format('d-m-Y') }}" /> <br>
                        <span class="msg_err" id="Claimdatum_err" style="color:red;  font-size:13px;"></span>
                        </p>
                    </div>
                    
                    <div class="inputs">
                        <p><input class="dynamic-field" type="text" placeholder='#' id="Referenz" name="Referenz" /></p>
                    </div>

                    <div class="inputs">
                        <select id="Ihre_Kundennummer" name="Ihre_Kundennummer" class="showButton dynamic-field" role-filter="Assignments" required>
                        </select>
                        <br>
                        <span class="msg_err" id="Ihre_Kundennummer_err" style="color:red;  font-size:13px;"></span>
                    </div><br>

                    <div class="inputs">
                        <p><input class="dynamic-field" type="text" placeholder='#' id="Ihre_Ust_ID" name="Ihre_Ust_ID" /><br>
                        <span class="msg_err" id="Ihre_Ust_ID_err" style="color:red;  font-size:13px;"></span>
                        </p>
                    </div>

                    <div class="details">
                        <div class="field">
                            <p style="display:none">Email</p>
                        </div>
                        <div class="inputs">
                            <p><input class="dynamic-field" type="text" placeholder='#' class="customer_dtl" id="customer_email" name="customer_email"
                                style="display:none" />
                            </p>
                        </div>
                    </div>
                </div>
                

                <div class="row pt-3">
                    
                    <div class="col-md-2" >
                   <p>Suche aus </p>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                     <a href="#"   class="btn">RE Nummer</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                     <a href="#"   class="btn">Referenz</a>
                    </div>
                    <!-- <div class="col-md-2 " > </div> -->
                    <div class="col-md-2 " ><a href="#"   class="btn">Artikelnr.</a></div>
                    <div class="col-md-2 " ><a href="#"   class="btn">Zeitraum</a></div>
                    <div class="col-md-2 " ><a href="#"   class="btn">Freitext suche</a></div>
                
                </div>
                <div class="mb-3">
                aus <a href="#">RE-12345</a> erstellt aus <a href="">AB-12345</a> erstellt aus <a href=""> LI-12345 erstellt</a>
                </div>
                <table>
                    <tr>
                        <th>Auswählen</th>
                        <th>POS.</th>
                        <th>Produkt</th>
                        <th>Beschreibung</th>
                        <th>Menge</th>
                        <th>Einheit</th>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        </td>
                        <td><input placeholder="#" type="text" name="POS" id="POS" value=""></td>
                        <td><input placeholder="#" type="text" name="" id="" value=""></td>
                        <td><input placeholder="#" type="text" name="" id="" value=""></td>
                        <td><input placeholder="#" type="text" name="" id="" value=""></td>
                        <td><input placeholder="#" type="text" name="" id="" value=""></td>
                    </tr>
                </table>

              
                <div class="row pt-3">
                    
                    <div class="col stretch-card" >
                        <p>Claim-Bild upload</p>
                    </div>
                    
                    <div class="col stretch-card text-right"  >
                    <p>Seriennummer: </p>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:5px;">
                    </div>
                    <div class="col stretch-card"  >
                        
                    </div>
                </div>
                
                <div class="row pt-3">
                    
                    <div class="col-3" >
                    <div id="profile-container">
                       <p class="upmsg"> Upload Image</p>
          <img id="profileImage">
        </div>
         <input id="imageUpload" name="imageUpload" type="file" name="profile_photo" placeholder="Photo" required=""
         class="product-image"
          capture>

        </div> 
                    
                    <div class="col-9"  >
                    <p>Fehlerbeschreibung: </p>
  <textarea class="form-control"  placeholder="" id="floatingTextarea" style="height:6rem; border:1px solid #000; background-color:transparent;"></textarea>
                    <div class="row pt-2">
                    <div class="col">Bearbeitungsstand </div>
                    <div class="col">fertig <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></div>
                    <div class="col">offen <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"></div>
                    </div>
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


<script>
    $("#profile-container").click(function(e) {
       $("#imageUpload").click();
      });

      function fasterPreview(uploader) {
       if (uploader.files && uploader.files[0]) {
        $('#profileImage').attr('src', window.URL.createObjectURL(uploader.files[0]));
       }
      }

      $("#imageUpload").change(function() {
       fasterPreview(this);
      });

      document.getElementById('imageUpload').addEventListener('click', function() {
    document.querySelector('.upmsg').style.display = 'none';
});
</script>
    <script type="text/javascript" src="{{ asset('js/admin/common.js') }}"></script>
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