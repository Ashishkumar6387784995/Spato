<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Suppliers</title>
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
            font-weight:600;
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
            /* font-weight:600; */
        }

        .lieferanten-page a{
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
        <form>
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
            @include('admin_theme/partial/admin_header')
                <div class="row pt-3">
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                   <button type="button" id="supplierSaveButton" class="btn">Save</button>
                    </div>
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                        
                        <a href="#" class="mt-2">Umsatz 25.067,90 €</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <a href="#"  class="mt-2">laufende Aufträge 18.054,09 €</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin" >
                    <button class="edit" type="button" data-bs-toggle="modal" data-bs-target="#supplierModal">Import supplier's CSV</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        
                        <div class="row">
                        <!-- <div class="col stretch-card pt-3">
                        Herstellernummer <input type="text" class="form-control"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                        </div> -->
                        <div class="col stretch-card pt-3">
                        Lieferantennummer <input type="text" class="form-control"  aria-describedby="emailHelp" name="Lieferantennummer" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                        </div>
                        <span class="msg_err" id="Lieferantennummer_err" style="color:red;  font-size:13px;"></span>
                        
                        </div>
                        <div class="row">
                        <div class="col stretch-card pt-3">
                        Firmenname <input type="text" class="form-control" name="firm_name"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                        </div>
                        <span class="msg_err" id="firm_name_err" style="color:red;  font-size:13px;"></span>
                        </div>
                        <div class="row">
                        <div class="col stretch-card pt-3">
                        Ansprechpartner <input class="form-check-input" name="Ansprechpartner" type="radio" style="margin:0px 10px;"> Frau <input class="form-check-input" type="radio"  style="margin:0px 10px;"> Herr <input type="text" class="form-control mx-2"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; width:300px;">
                        </div>
                        <span class="msg_err" id="Ansprechpartner_err" style="color:red;  font-size:13px;"></span>
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
                       <input type="text" class="form-control" name="Straße"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="Straße_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Straße
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="d_Straße"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
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
                       <input type="text" class="form-control" name="Ort"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="Ort_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Ort
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="d_Ort"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
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
                       <input type="text" class="form-control" name="PLZ"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="PLZ_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       PLZ
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="d_PLZ"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
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
                       <input type="text" class="form-control" name="Land"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="Land_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Land
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="d_Land" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
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
                       <input type="text" class="form-control" name="vat_id" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="vat_id_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Mobile
                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="mobile"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="mobile_err" style="color:red;  font-size:13px;"></span>
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
                       <input type="text" class="form-control" name="telephone"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Password
                        </div>
                        <div class="col-8">
                       <input type="password" class="form-control" name="password"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="password_err" style="color:red;  font-size:13px;"></span>
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
                       <input type="text" class="form-control" name="email"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                        <span class="msg_err" id="email_err" style="color:red;  font-size:13px;"></span>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       Mail RE

                        </div>
                        <div class="col-8">
                       <input type="text" class="form-control" name="re_email"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
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
                       <input type="text" class="form-control" name="www"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                        </div>
                       </div>
                        </div>
                        <div class="col">
                       <div class="row">
                       <div class="col-4">
                       <!-- Straße -->
                        </div>
                        <div class="col-8">
                       <!-- <input type="text" class="form-control"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;"> -->
                        </div>
                       </div>
                        </div>
                        </div>
                        <!--  -->
                        
                        
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
                <div class="row pt-3">
            <div class="col">
            <span>Zahlung</span> <input class="form-check-input" name="Zahlung" type="radio" style="margin:0px 10px;" value="Vorkasse"> <span>Vorkasse</span> <input class="form-check-input" name="Zahlung" type="radio" style="margin:0px 10px;" value="14 Tage netto nach Erhalt der Rechnung"> <span>14 Tage netto nach Erhalt der Rechnung</span> <input class="form-check-input" name="Zahlung" type="radio" style="margin:0px 10px;" value="PayPal"> <span>PayPal</span>
            </div>  
            <span class="msg_err" id="Zahlung_err" style="color:red;  font-size:13px;"></span>
          </div>  
          <div class="row pt-3">
            <div class="col">
            <span>Shop / APP sperren</span> <input class="form-check-input" type="radio" style="margin:0px 10px;" name="Shop_APP" value="ja"> <span>ja</span> <input class="form-check-input" type="radio" name="Shop_APP" style="margin:0px 10px;" value="Nein Zugangsdaten Shop / APP ändern"> <span>Nein</span> <span>Zugangsdaten Shop / APP ändern</span>
            </div>
          </div>  
          <span class="msg_err" id="Shop_APP_err" style="color:red;  font-size:13px;"></span>
    </div>
    </div>  
    </div>
  
  <!-- Import Bulk Suppliers starts -->
  <div class="modal fade" id="supplierModal" tabindex="-1" aria-labelledby="supplierModalLabel" aria-hidden="true">
   <div class="modal-dialog">


    <form id="productsImportForm" method="post" enctype="multipart/form-data">
     <div class="modal-content">

      <div class="modal-header" style="border-bottom: 2px solid #44e1d5;">
       <h1 class="modal-title fs-5" id="supplierModalLabel">Import Files file</h1>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <span class="m-1 pb-2" id="import_success_message"
        style="color:#44e1d5; font-size:18px; font-weight:600;"></span>
       
         <label for="formFile" class="form-label text-center">Import CSV/XLSX file</label>
        <p> <span class="d-flex"><input style="width:100%; height:50px;" class="form-control" type="file" name="ProductsImportFile"
           id="ProductsImportFile" accept=".csv, .xlsx"><i style="font-size:20px; position: relative; left: -40px; top: 15px;"
           class="fa-solid fa-file-excel"></i></span></p>
         <p id="ProductsImportFile-err" style="margin-top:1rem; color:red"></p>
       </div>
      <div class="modal-footer d-flex justify-content-between">
       <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
       <button type="button" class="btn" id="productImportButton">Import</button>
      </div>
     </div>
    </form>
   </div>
  </div>
  <!-- Import Bulk Suppliers ends -->

  <script>
        $(document).ready(function() {
            // Function to handle form submission

            $('#supplierSaveButton').click(function(e) {
                e.preventDefault(); // Prevent the default form submission

                
                $('#Lieferantennummer_err').text('');
            $('#firm_name_err').text('');
            $('#Straße_err').text('');
            $('#Ort_err').text('');
            $('#PLZ_err').text('');
            $('#Land_err').text('');
            $('#vat_id_err').text('');
            $('#mobile_err').text('');
            $('#password_err').text('');
            $('#email_err').text('');
            $('#Newsletter_err').text('');
            $('#Shop_APP_err').text('');
            $('#Zahlung').text('');

                // Serialize the form data
                var formData = $('form').serialize();

                var token = localStorage.getItem('authToken');
                console.log(token);

                // Check if the token exists
                if (!token) {
                    console.error('Token not found in localStorage');
                    window.location.href = '/api/home';
                    // return;
                }

                // Send AJAX request
                $.ajax({
                    url: '/api/addSuppliersApi', // Replace with your endpoint URL
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(response) {
                        // Handle success response
                        if (response.success) {
                            console.log(response.success);

                            // $('#AddOffersForm')[0].reset();
                            $('#success_msg').text(response.success);
                        } else if (response.ValidationError) {
                            // Display validation errors in the console
                            console.log(response.ValidationError);

                            displayValidationErrors(response.ValidationError);

                            // $('#error_msg').text('Error: ' + JSON.stringify(response.errors)).css('color', 'red');

                            // You can also update your HTML to show errors in a specific element
                            // $('#error_msg').text('Error: ' + response.errors).css('color', 'red');
                        } else if (response.error) {
                            window.location.href = '/api/home';
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Error saving data:', error);
                        // Optionally, show an error message to the user
                    }
                });
                function displayValidationErrors(errors) {
                // Display validation errors next to the respective form fields
                if (errors.Lieferantennummer) {
                    $('#Lieferantennummer_err').text(errors.Lieferantennummer[0]);
                }
                if (errors.firm_name) {
                    $('#firm_name_err').text(errors.firm_name[0]);
                }
                if (errors.Straße) {
                    $('#Straße_err').text(errors.Straße[0]);
                }
                if (errors.Ort) {
                    $('#Ort_err').text(errors.Ort[0]);
                }
                if (errors.PLZ) {
                    $('#PLZ_err').text(errors.PLZ[0]);
                }
                if (errors.Land) {
                    $('#Land_err').text(errors.Land[0]);
                }
                if (errors.vat_id) {
                    $('#vat_id_err').text(errors.vat_id[0]);
                }
                if (errors.mobile) {
                    $('#mobile_err').text(errors.mobile[0]);
                }
                if (errors.password) {
                    $('#password_err').text(errors.password[0]);
                }
                if (errors.email) {
                    $('#email_err').text(errors.email[0]);
                }
                if (errors.Newsletter) {
                    $('#Newsletter_err').text('Newsletter is Required');
                }
                if (errors.Shop_APP) {
                    $('#Shop_APP_err').text('Shop_APP Is Required');
                }
                if (errors.Zahlung) {
                    $('#Zahlung_err').text(errors.Zahlung[0]);
                }
            }   
            });

          
        });
    </script>
  
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