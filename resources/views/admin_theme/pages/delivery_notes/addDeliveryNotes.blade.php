<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Offers</title>
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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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


  .btn {
   /* background-color: #54606c; */
   border: 1px solid #404040;
   color: #404040;
   padding: 10px 14px;
   text-decoration: none;
   border-radius: 5px;
  }

  .btn:hover {
   background-color: #404040;
   color: #fff;
  }

  .close {
   color: #404040;
  }

  .stretch-card {
   font-size: 13px;
  }

  .table thead tr th {
   width: 200px;
   background-color: #404040;
   color: #fff;
   border: none;
   padding: 2px;
  }

  table tr td {
   padding: 10px 2px;
   width: 200px;
   font-size: 14px;
  }

  table tr td input {
   width: 100%;
   border: none;
   background-color: transparent;
  }

  table tr td a {
   color: #404040;
  }

  .dynamic-field {
   width: 100%;
   background: transparent;
   border: 1px solid #8F8C8C;
   border-radius: 5px;
  }

  a {
   color: #54606c;
  }

  .table th,
  .table td {
   font-size: 0.85rem;
   padding: -0.0625rem;
  }

  .details {
   display: flex;
   width: 100%;
   justify-content: space-between;
  }

  .details input {
   width: 250px;
  }

  @media (min-width: 481px) and (max-width: 767px) {
   .details input {
    width: 170px;
   }
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

      <button class="navbar-toggler" type="button" data-toggle="offcanvas">
       <span class="mdi mdi-menu"></span>
      </button>
     </div>
     <form id="AddOffersForm" method="post" action="{{'addOfferApi'}}">
      <div class="row pt-3">

       <div class="col-md-2 stretch-card grid-margin">
        <button class="btn" type="button" id="saveButton">Save</button>
       </div>

       <div class="col-md-2 stretch-card grid-margin">

       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">Auftrag</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">Lieferschein</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">Rechnung</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">senden</a>
       </div>
      </div>
      <span id="success_msg" style="color:Green"></span>
      <div class="row pt-3">

       <div class="col-md-4">


        <textarea name="text" id="" cols="35" rows="10"></textarea>

       </div>
       <div class="col-md-2"></div>


       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Lieferschein-Nr.</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" placeholder='#' id="Lieferschein_Nr" name="Lieferschein_Nr" value="{{$newDeliveryNotesNo}}"/></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Lieferdatum</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Lieferdatum" name="Lieferdatum"
            value="{{ now()->format('d-m-Y') }}" /> <br>
           <span id="Lieferdatum_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Referenz</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="text" placeholder='#' id="Referenz" name="Referenz" /></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Ihre Kundennummer</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="text" placeholder='#' id="Ihre_Kundennummer"
            name="Ihre_Kundennummer" /><br>
           <span id="Ihre_Kundennummer_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Ihre Ust. ID</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="text" placeholder='#' id="Ihre_Ust_ID"
            name="Ihre_Ust_ID" /><br>
           <span id="Ihre_Kundennummer_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>


       </div>




      </div>

      <div class="row pt-3">

       <div class="col-md-4">
        <h4>Lieferschein-Nr. <a href="#">{{$newDeliveryNotesNo}}</a></h4>
       </div>
       <div class="col-md-3 stretch-card grid-margin">
        <a href="#" class="btn">Kopfzeile Standard</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">Kopfzeile neu</a>
       </div>
       <!-- <div class="col-md-2 " > </div> -->
       <div class="col-md-2 "> </div>

      </div>




      <div class="form-group col-lg-3" style="display:none">
       <input type="text" name="jobRequestNo" class="form-control" id="firstname" value="">
       <label for="firstname">Job Request No</label>
      </div>



      <div class="">
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
           <th>
            Menge
           </th>
           <th>
            Einheit
           </th>
           
           <th></th>

          </tr>


         </thead>
         <tbody>




          <tr class="hidden">
           <td>

            <input type="text" name='inputs[0][POS]' value="1" id="sno" placeholder='#' /><br>

           </td>
           <td>
            <input type="text" name='inputs[0][Produkt]' placeholder='#' />
            <br><span id="Produkt_err" style="color:red; font-size:13px;"></span>

           </td>


           <td>

            <input type="text" name='inputs[0][Beschreibung]' placeholder='#' />
            <br><span id="Beschreibung_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>

            <input type="text" name='inputs[0][Menge]' placeholder='#' /><br>
           </td>
           <td>
            <input type="text" name='inputs[0][Einheit]' id="Quantity_0" placeholder='#' />
            <br><span id="Einheit_err" style="color:red;  font-size:13px;"></span>

           </td>
           
           <td>
            <button class="btn">Delete</button>
           </td>
         </tbody>
        </table>


       </div>
      </div><br>
      <button id="add" type="button" name="add" class="btn">+ neuer Artikel</button><br>


      <!-- <button type="submit" class="btn btn-common">Submit</button> -->



      <hr style="border: 1px solid #54606c;" />

      <div class="row pt-3">

       <table class="table">
        <thead>
         <tr>

         </tr>
        </thead>
        <tbody>

         <tr style="display:none;">
          <th scope="row">Adjustment</th>
          <td> <input type="text" name='Adjustment' id="Adjustment" placeholder='#' class="form-control" /></td>
          <td><input type="text" name='AdjustmentShow' id="AdjustmentShow" placeholder='#' class="form-control" />
          </td>
         </tr>


         <tr id="SGSTRow" style="display:none;">
          <th scope="row">SGST (%)</th>

          <td> <input type="text" name='SGST' id="SGST" onclick="" placeholder='#' class="form-control" /></td>
          <td><input type="text" name='SGSTShow' id="SGSTShow" placeholder='#' class="form-control" /></td>
         </tr>



         <tr id="CGSTRow" style="display:none;">
          <th scope="row"> CGST (%)</th>
          <td><input type="text" name='CGST' id="CGST" placeholder='#' class="form-control" /></td>
          <td><input type="text" name='CGSTShow' id="CGSTShow" placeholder='#' class="form-control" /></td>
         </tr>

         <tr id="IGSTRow" style="display:none;">
          <th scope="row" style="display:none;"> IGST (%)</th>
          <td><input type="text" name='IGST' id="IGST" placeholder='#' class="form-control" /></td>
          <td><input type="text" name='IGSTShow' id="IGSTShow" placeholder='#' class="form-control" /></td>
         <tr id="IGSTRow" style="display:none;">
          <th scope="row"> IGST (%)</th>
          <td><input type="text" name='IGST' id="IGST" placeholder='#' class="form-control" /></td>
          <td></td>
         </tr>
         </tr>


        </tbody>
       </table>
      </div>


      <div class="row pt-3">

       <div class="col-6 stretch-card">
        Lieferbedingungen: zzgl. Frachtkosten
       </div>
   

       <div class="col-3 stretch-card ">
        Gesamt netto
       </div>
       <div class="col-2 stretch-card ">
        <input type="text" name="gesamt_netto" id="SubTotal" placeholder='#'
         style="background:transparent; border:none;" />
       </div>

      </div>
      <div class="row pt-3">

      

       <div class="col-3 stretch-card ">
        zzgl. Umsatzsteuer 19 %
       </div>
       <div class="col-2 stretch-card ">
        <p id="tax"></p>
       </div>

      </div>
      <div class="row pt-3">

       <div class="col-6 stretch-card">

       </div>

       <div class="col-3 stretch-card dt">
        Gesamtbetrag brutto
       </div>
       <div class="col-2 stretch-card ">
        <input type="text" name="Gesamtbetrag_brutto" id="Total" placeholder='#'
         style="background:transparent; border:none;" />
       </div>

      </div>
      <div class="row pt-3">

       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">

       </div>
       <div class="col stretch-card ">
        <a href="#" class="btn">Fußzeile Standard</a>
       </div>

       <div class="col stretch-card">
        <a href="#" class="btn">Fußzeile neu</a>
       </div>
       <div class="col stretch-card">

       </div>
      </div>
     </form>

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
     
     var i= 0;
     var No=1;
     console.log(i);
     $('#add').click(function(){
         ++i;
       
         ++No;
         console.log(i);
   
         $('#table').append(
             `<tr>
          
                     <td >
                                                     <input type="text" value='`+No+`' name='inputs[`+i+`][POS]'  placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][Produkt]' placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][Beschreibung]' placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][Menge]' placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[`+i+`][Einheit]' placeholder='#'/>
                                                 </td>
                                                
                                                
                                                 <td >
                                                 <a href="">delete</a>
                                                 </td>
                                              
                                                
                                
                         </tr>
                         `
            
         );
     });
 
     $(document).on('click','.remove-table-row', function(){
         $(this).parents('tr').remove();
 
     });
 
     </script>

  <!-- Dynamic table update ends-->

  <script>
  $('#saveButton').click(function(e) {
   e.preventDefault(); // Prevent the form from submitting normally

   $('#Lieferdatum_err').text('');
   $('#Ihre_Kundennummer_err').text('');
   $('#Produkt_err').text('');
   $('#Beschreibung_err').text('');

   $('#Einheit_err').text('');
 

   var formData = {
    Lieferschein_Nr: $('#AddOffersForm input[name="Lieferschein_Nr"]').val(),
    Lieferdatum: $('#AddOffersForm input[name="Lieferdatum"]').val(),
    Referenz: $('#AddOffersForm input[name="Referenz"]').val(),
    Ihre_Kundennummer: $('#AddOffersForm input[name="Ihre_Kundennummer"]').val(),
    Ihre_Ust_ID: $('#AddOffersForm input[name="Ihre_Ust_ID"]').val(),
 
    inputs: []
   };

   $('#table tbody tr').each(function(index) {
    var inputRow = {
     POS: $(this).find('input[name^="inputs[' + index + '][POS]"]').val(),
     Produkt: $(this).find('input[name^="inputs[' + index + '][Produkt]"]').val(),
     Beschreibung: $(this).find('input[name^="inputs[' + index + '][Beschreibung]"]').val(),
     Menge: $(this).find('input[name^="inputs[' + index + '][Menge]"]').val(),
     Einheit: $(this).find('input[name^="inputs[' + index + '][Einheit]"]').val(),
  
    };
    formData.inputs.push(inputRow);
   });

   console.log(formData);

   // Make AJAX request
   $.ajax({
    type: 'POST',
    url: '/api/addDeliveryNotesApi',
    data: formData,
    dataType: 'json',
    success: function(response) {
     // Handle success response
     if (response.success) {
      console.log(response.success);
      $('#AddOffersForm')[0].reset();
      $('#success_msg').text(response.success);
     } else if (response.errors) {
      // Display validation errors in the console
      console.log(response.errors);
      displayValidationErrors(response.errors);


      // $('#error_msg').text('Error: ' + JSON.stringify(response.errors)).css('color', 'red');

      // You can also update your HTML to show errors in a specific element
      // $('#error_msg').text('Error: ' + response.errors).css('color', 'red');
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
  </script>
 </body>

</html>