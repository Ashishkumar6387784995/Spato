<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Delivery Notes</title>
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

        
        .contact-show {
          width: 100%;
          height: 100%;
          background-color: #fff;
          border: 0.5px solid #000;
          padding: 10px 10px;
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
            height:5px !important;
            background-color:#54606c !important;
            color:#fff;
            padding:0;
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

        .lieferscheine-page a{
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
                <form id="editDeviverynotesForm">
                <div class="row pt-3">
                    <div class="col-md-6 stretch-card grid-margin" >
                   <button type="button" id="editDeviverynotesButton"  class="btn">Save</button>
                    </div>
                    
                    <div class="col-md-2 stretch-card grid-margin" >
                    
                    </div>
                    <!-- <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Auftrag</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Lieferschein</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">Rechnung</a>
                    </div> -->
                    <div class="col-md-2 stretch-card grid-margin" >
                    <a href="#"   class="btn">senden</a>
                    </div>
                </div>
                <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
                <div class="row pt-3">
                <!-- {{$deliveryNotes}}         -->
                  <div class="col-md-4" >
                    <div class="contact-show">
                        <p><b>Name</b> -> <span class="customer_dtl" id="customer_Name">{{$user->name}}<span></p>
                        <p><b>Conatact</b> -> <span class="customer_dtl" id="customer_Contact">{{$user->mobile}}<span></p>
                        <p><b>Email</b> -> <span class="customer_dtl" id="customer_Email">{{$user->email}}<span></p>
                    </div>
                  </div>
                    <div class="col-md-2 " >
                    </div>
                    <div class="col-md-1 " >
                    </div>
                    <div class="col-md-3" >
                   <p>Lieferschein-Nr</p><br>
                   <p>Lieferdatum</p><br>
                   <p>Referenz</p><br>
                   <p>Ihre Kundennummer</p> <br>
                   <p>Ihre Ust. ID</p> <br>
                   <p style="display:none">id</p> <br>
                    </div>
                    <div class="col-md-2" >
                    <p><a href="#">{{$deliveryNotes[0]->Lieferschein_Nr}}</a></p><br>
                    <p><a href="#">{{$deliveryNotes[0]->Lieferdatum}}</a></p><br>
                    <p><a href="#">{{$deliveryNotes[0]->Referenz}}</a></p><br>
                    <p><a href="#">{{$deliveryNotes[0]->Ihre_Kundennummer}}</a></p><br>
                    <p><a href="#">{{$deliveryNotes[0]->Referenz}}</a></p><br>
                    <p style="display:none"><input type="text" value="{{$deliveryNotes[0]->id}}" name="id" id="id"></p><br>
                    </div>
                </div>

                <div class="row pt-3">
                    
                    <div class="col-md-4" >
                   <h4>Lieferschein-Nr <a href="#">LI-12345</a></h4>
                    </div>
                    <!-- <div class="col-md-3 stretch-card grid-margin" >
                     <a href="#"   class="btn">Kopfzeile Standard</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin" >
                     <a href="#"   class="btn">Kopfzeile neu</a>
                    </div> -->
                    <!-- <div class="col-md-2 " > </div> -->
                    <div class="col-md-2 " > </div>
                    
                </div>
                <div class="table-responsive">
          <table class="table" id="table">
            <thead>
              <tr>
                <th>
                  POS.
                </th>
                <th>
                  Produkt
                </th>
                <th>
                  Beschreibung
                </th>
                <th></th>
                <th></th>
                <th>
                  Menge
                </th>
                <th>
                  Einheit
                </th>

              </tr>


            </thead>
            <tbody>
              <tr class="hidden">
                <td>

                  <input type="text" name='inputs[0][POS]' value="1" id="sno" placeholder='#' /><br>

                </td>
                <td>
                  <input type="text" name='inputs[0][Produkt]'  value="{{$deliveryNotes[0]->Produkt}}"  />
                  <br><span id="Produkt_err" style="color:red; font-size:13px;"></span>

                </td>


                <td>

                  <input type="text" name='inputs[0][Beschreibung]' placeholder='#'  value="{{$deliveryNotes[0]->Produkt}}" />
                  <br><span id="Beschreibung_err" style="color:red;  font-size:13px;"  value="{{$deliveryNotes[0]->Beschreibung}}"></span>

                </td>
                <td></td>
                <td></td>
                <td>

                  <input type="text" name='inputs[0][Menge]' placeholder='#'  value="{{$deliveryNotes[0]->Menge}}"/><br>
                </td>
                <td>
                  <input type="text" name='inputs[0][Einheit]' id="Quantity_0" placeholder='#'  value="{{$deliveryNotes[0]->Einheit}}"/>
                  <br><span id="Einheit_err" style="color:red;  font-size:13px;"></span>

                </td>

            </tbody>
          </table>
        </div>
                    <h3 class="mt-5 mb-5">Andere Informationen</h3>
        <div class="row">
            <div class="col-3"><p>Lieferadresse ändern</p></div>
            <div class="col-9"><textarea type="text" name="changedDeliveryAddress" id="changedDeliveryAddress" style="width: 70%; height:70px; background:transparent; border:1px solid #000; outline:none;">{{$deliveryNotes[0]->changedDeliveryAddress}}</textarea></div>
        </div>
        <div class="row mt-3">
            <div class="col-3"><p>Seriennummer hinzufügen</p></div>
            <div class="col-9"><input type="text" name="serialNo" id="serialNo" value="{{$deliveryNotes[0]->serialNo}}"  style="width: 70%; height:40px; background:transparent; border:1px solid #000; outline:none;"></div>
        </div>
        <div class="row mt-3">
            <div class="col-3"><p>Informationen hinzufügen</p></div>
            <div class="col-9"><textarea type="text" name="addInformation" id="addInformation" style="width: 70%; height:70px; background:transparent; border:1px solid #000; outline:none;">{{$deliveryNotes[0]->addInformation}}</textarea></div>
        </div>
        <div class="row mt-3">
            <div class="col-3"><p>Lieferung bestätigen</p></div>
            <div class="col-2">Offen<input class="form-check-input" type="radio" name="deliveryStatus" value="Offen" @if($deliveryNotes[0]->deliveryStatus=='Offen') {{'checked'}} @endif></div>
                    <div class="col-4">geliefert<input class="form-check-input" type="radio" name="deliveryStatus" value="geliefert" @if($deliveryNotes[0]->deliveryStatus=='geliefert') {{'checked'}} @endif></div></div>
        </div>
           
                </div>
        </div>
                </form>
    </div>
  
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script>
    // Execute the code when the document is ready
    $('#editDeviverynotesButton').click(function(e) {
      e.preventDefault(); // 
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        // return;
      }

      var formData = {
        id: $('#id').val(),
        changedDeliveryAddress: $('#changedDeliveryAddress').val(),
        serialNo: $('#serialNo').val(),
        addInformation: $('#addInformation').val(),
        deliveryStatus : $('input[name="deliveryStatus"]:checked').val()
      };

      console.log(formData);

      // Make a GET request using AJAX
      $.ajax({
        type: 'POST',
        url: '/api/editDeliveryNotesForSuppliersApi',
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
      setTimeout(() => {
        window.location.href = '/api/deliveryNotesListing/{{$role}}';
      }, 2000);
     } else if (response.errors) {
      // Display validation errors in the console
      console.log(response.errors);
      
      displayValidationErrors(response.errors);
 

      
     }
     else if (response.error){
      window.location.href = '/api/home';

     }
    },
    error: function(xhr, status, error) {
     // Handle error response
     var errors = xhr.responseJSON.errors;
     if (errors) {
      // Display errors in your frontend
      // For example, you can loop through errors and append them to a specific element
      $.each(errors, function(field, messages) {
       // Append error messages to your HTML
       $('#' + field + '-error').text(messages[0]);
      });
     }
    }
      });
      function displayValidationErrors(errors) {
    // Display validation errors next to the respective form fields
    if (errors.Angebotsdatum) {
     $('#Angebotsdatum_err').text(errors.Angebotsdatum[0]);
    }
    if (errors.Ihre_Kundennummer) {
     $('#Ihre_Kundennummer_err').text(errors.Ihre_Kundennummer[0]);
    }
    if (errors['inputs.0.Produkt']) {
     $('#Produkt_err').text('Produkt is Required');
    }
    if (errors['inputs.0.Beschreibung']) {
     $('#Beschreibung_err').text('Beschreibung is Required');
    }
    if (errors['inputs.0.Einheit']) {
     $('#Einheit_err').text('Einheit Is Required');
    }
    if (errors['inputs.0.Einzelpreis']) {
     $('#Einzelpreis_err').text('Einzelpreis is Required');
    }


   }
    });
  </script>




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