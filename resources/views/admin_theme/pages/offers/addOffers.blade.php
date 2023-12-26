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
      <div class="row pt-3">

       <div class="col-md-4">


        <textarea name="text" id="" cols="35" rows="10"></textarea>

       </div>
       <div class="col-md-2 ">
       </div>
       <div class="col-md-1 ">
       </div>
       <div class="col-md-2 ps-2">
        <p>Angebots-Nr.</p><br>
        <p>Angebotsdatum</p><br>
        <p>Referenz</p><br>
        <p>Ihre Kundennummer</p> <br>
       </div>
       <div class="col-md-2" style="margin-top: -5px;">
        <p><input class="dynamic-field" type="text" placeholder='#' id="Angebots_Nr" name="Angebots_Nr"
          value="{{$newOfferNo}}" /></p><br>
        <p><input class="dynamic-field" type="date" placeholder='#' id="Angebotsdatum" name="Angebotsdatum"
          value="{{ now()->format('d-m-Y') }}" /></p><br>

        <p><input class="dynamic-field" type="text" placeholder='#' id="Referenz" name="Referenz" /></p>

        <br>


        <p><input class="dynamic-field" type="text" placeholder='#' id="Ihre_Kundennummer" name="Ihre_Kundennummer" />
        </p>

        <br>
       </div>
      </div>

      <div class="row pt-3">

       <div class="col-md-4">
        <h4>Angebot-Nr. <a href="#">{{$newOfferNo}}</a></h4>
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
           <th>Beschreibung</th>
           <th>
            Menge
           </th>
           <th>
            Einheit
           </th>
           <th>
            Einzelpreis
           </th>
           <th>
            Rabatt
           </th>
           <th>
            Gesamtpreis
           </th>
           <th></th>
          </tr>



         </thead>
         <tbody>




          <tr class="hidden">
           <td>
            <input type="text" name='inputs[0][SNo]' value="1" id="sno" placeholder='#' />
           </td>
           <td><input type="text" laceholder='#' placeholder="80.2103281138" /></td>
           <td>
            <input type="text" laceholder='#' placeholder="BADU® Delta Eco VS" />
           </td>
           <td>
            <input type="text" laceholder='#' placeholder="Stück" />

           </td>
           <td>
            <input type="text" name='inputs[0][Quantity]' id="Quantity_0" placeholder='#' />
           </td>
           <td>
            <input type="text" name='inputs[0][Rate]' id="Rate_0" placeholder='#' />
           </td>
           <td>
            <input type="text" name='inputs[0][Discound]' id="Discount_0" placeholder='#' style="width:30px;" /><span>%
             C2</span>
           </td>

           <td>
            <input type="text" name='inputs[0][Amount]' id="Amount_0" placeholder='#' />
           </td>

           <td>
            <button class="btn">Delete</button>
           </td>



          </tr>







         </tbody>
        </table>


       </div>
      </div><br>
      <!-- <button id="add" type="button" name="add" class="btn btn-sm btn-gradient-primary  float-right">Add
    Row</button> -->
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
      <!--  -->
      <div class="row pt-3">

       <div class="col-6 stretch-card">
        Lieferbedingungen: zzgl. Frachtkosten
       </div>

       <div class="col-3 stretch-card ">
        Gesamt netto
       </div>
       <div class="col-2 stretch-card ">
        <input type="text" name='SubTotal' id="SubTotal" placeholder='#' style="background:transparent; border:none;" />
       </div>

      </div>
      <div class="row pt-3">

       <div class="col-6 stretch-card">
        Zahlungsbedingungen: nach Vereinbarung
       </div>

       <div class="col-3 stretch-card ">
        zzgl. Umsatzsteuer 19 %
       </div>
       <div class="col-2 stretch-card ">
        <!-- <input type="text" name='IGSTShow' id="IGSTShow" placeholder='#' style="background:transparent; border:none;" /> -->
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
        <input type="text" name='TotalDue' id="Total" placeholder='#' style="background:transparent; border:none;" />
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




  <!-- <script>
  var i = 0;
  var No = 1;
  console.log(i);
  $('#add').click(function() {
   ++i;

   ++No;
   console.log(i);

   $('#table').append(
    `<tr>
          
                     <td >
                                                   <input type="text" value='` + No + `' name='inputs[` + i + `][POS]'  placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[` + i + `][Produkt]' placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[` + i + `][Beschreibung]' placeholder='#'/>
                                                 </td>
                                                 <td >
                                                     <input type="text" name='inputs[` + i + `][Menge]' placeholder='#'/>
                                                 </td>
                                                 <td>
                        <input type="text" name='inputs[${i}][Quantity]' id="Quantity_${i}" placeholder='#' class="form-control" onclick="handleClick('Quantity_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Rate]' id="Rate_${i}" placeholder='#' class="form-control" onclick="handleClick('Rate_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Discound]' id="Discount_${i}" placeholder='#' class="form-control" onclick="handleClick('Discount_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Amount]' id="Amount_${i}" placeholder='#' class="form-control"/>
                    </td>
                                                
                                                 <td>
                                                     <button class="delete-row">delete</button>
                                                 </td>
                         </tr>
                         `

   );
  });
  $('#table').on('click', '.delete-row', function() {
   $(this).closest('tr').remove();
  });
  </script> -->



  <!-- Dynamic table starts -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
   setupInputListeners1();

   function setupInputListeners1() {
    document.querySelectorAll(
     'input[id^="Quantity_"], input[id^="Rate_"], input[id^="Discount_"], input[id^="Amount_"]').forEach(function(
     input) {
     input.addEventListener('input', function() {
      var idParts = this.id.split('_');
      var index = idParts[1];

      var quantity = parseFloat(document.getElementById('Quantity_' + index).value) || 0;
      var rate = parseFloat(document.getElementById('Rate_' + index).value) || 0;
      var discountPercentage = parseFloat(document.getElementById('Discount_' + index).value) || 0;

      var discountAmount = (rate * discountPercentage) / 100;
      var discountedRate = rate - discountAmount;

      var amount = quantity * discountedRate;
      document.getElementById('Amount_' + index).value = amount.toFixed(2);

      // Recalculate subtotal after each input change
      calculateSubTotal();
     });
    });

    // Add event listeners for Adjustment, SGST, and CGST fields
    document.getElementById('Adjustment').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('SGST').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('CGST').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('IGST').addEventListener('input', function() {
     calculateSubTotal();
    });
   }

   var i = 0;
   var No = 1;

   document.getElementById('add').addEventListener('click', function() {
    ++i;
    ++No;

    var table = document.getElementById('table');
    var newRow = table.insertRow(table.rows.length);

    newRow.innerHTML = `
                    <td>
                        <input type="text" value='${No}' name='inputs[${i}][SNo]' placeholder='#' />
                    </td>
                    <td>
                        <input type="text"" placeholder="#"/>
                    </td>
                    <td>
                        <input type="text" placeholder="#"/>
                    </td>
                    <td>
                    <input type="text" placeholder="#"/>
                       
                    </td>
                    <td>
                    <input type="text" name='inputs[${i}][Quantity]' id="Quantity_${i}" placeholder='#'  onclick="handleClick('Quantity_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Rate]' id="Rate_${i}" placeholder='#'  onclick="handleClick('Rate_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Discound]' id="Discount_${i}" placeholder='#'  onclick="handleClick('Discount_${i}')" style="width:30px;"/><span>% C2</span>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Amount]' id="Amount_${i}" placeholder='#' />
                    </td>
                    <td>
                        <button class="remove-table-row  btn btn-sm">Delete</button>
                    </td>`;

    // Call the setupInputListeners function after adding a new row
    setupInputListeners();

    // Recalculate subtotal after adding a new row
    calculateSubTotal();
   });

   document.addEventListener('click', function(event) {
    if (event.target.classList.contains('remove-table-row')) {
     event.target.closest('tr').remove();
     // Recalculate subtotal after removing a row
     calculateSubTotal();
    }
   });

   // Function to set up input event listeners
   function setupInputListeners() {
    document.querySelectorAll(
     'input[id^="Quantity_"], input[id^="Rate_"], input[id^="Discount_"], input[id^="Amount_"]').forEach(function(
     input) {
     input.addEventListener('input', function() {
      var idParts = this.id.split('_');
      var index = idParts[1];

      var quantity = parseFloat(document.getElementById('Quantity_' + index).value) || 0;
      var rate = parseFloat(document.getElementById('Rate_' + index).value) || 0;
      var discountPercentage = parseFloat(document.getElementById('Discount_' + index).value) || 0;

      var discountAmount = (rate * discountPercentage) / 100;
      var discountedRate = rate - discountAmount;

      var amount = quantity * discountedRate;
      document.getElementById('Amount_' + index).value = amount.toFixed(2);

      // Recalculate subtotal after each input change
      calculateSubTotal();
     });
    });
   }

   // Function to calculate and update the subtotal
   function calculateSubTotal() {
    var subtotal = 0;
    document.querySelectorAll('input[id^="Amount_"]').forEach(function(amountInput) {
     subtotal += parseFloat(amountInput.value) || 0;
    });

    // Update the SubTotal input field
    document.getElementById('SubTotal').value = subtotal.toFixed(2);

    // Subtract the value of Adjustment
    var adjustment = parseFloat(document.getElementById('Adjustment').value) || 0;
    var sgstPercentage = parseFloat(document.getElementById('SGST').value) || 0;
    var cgstPercentage = parseFloat(document.getElementById('CGST').value) || 0;
    var igstPercentage = (subtotal * 19) / 100;
    console.log(igstPercentage);

    var sgstAmount = (subtotal * sgstPercentage) / 100;
    var cgstAmount = (subtotal * cgstPercentage) / 100;
    var igstAmount = (subtotal * 19) / 100;

    var adjustedTotal = subtotal - adjustment + sgstAmount + cgstAmount + igstAmount;

    // Update the AdjustmentShow, SGSTShow, CGSTShow, and Total input fields
    document.getElementById('AdjustmentShow').value = adjustment.toFixed(2);
    document.getElementById('SGSTShow').value = sgstAmount.toFixed(2);
    document.getElementById('CGSTShow').value = cgstAmount.toFixed(2);
    document.getElementById('IGSTShow').value = igstAmount.toFixed(2);
    document.getElementById('Total').value = adjustedTotal.toFixed(2);
    document.getElementById("tax").innerHTML = igstAmount.toFixed(2);
   }
  });
  </script>

  <!-- Dynamic table update ends-->


  <script>
  $('#saveButton').click(function(e) {
   e.preventDefault(); // Prevent the form from submitting normally


   var formData = {};

   // Collect data from the main form

   formData.Angebots_Nr = $('#AddOffersForm input[name="Angebots_Nr"]').val();
   formData.Angebotsdatum = $('#AddOffersForm input[name="Angebotsdatum"]').val();
   formData.Referenz = $('#AddOffersForm input[name="Referenz"]').val();
   formData.Ihre_Kundennummer = $('#AddOffersForm input[name="Ihre_Kundennummer"]').val();

   formData.gesamt_netto = $('#AddOffersForm input[name="gesamt_netto"]').val();
   formData.zzgl_Umsatzsteuer = $('#AddOffersForm input[name="zzgl_Umsatzsteuer"]').val();
   formData.Gesamtbetrag_brutto = $('#AddOffersForm input[name="Gesamtbetrag_brutto"]').val();

   // Collect data from the dynamic table
   formData.inputs = [];

   $('#table tbody tr').each(function(index) {
    var inputRow = {
     POS: $(this).find('input[name^="inputs[' + index + '][POS]"]').val(),
     Produkt: $(this).find('input[name^="inputs[' + index + '][Produkt]"]').val(),
     Beschreibung: $(this).find('input[name^="inputs[' + index + '][Beschreibung]"]').val(),
     Menge: $(this).find('input[name^="inputs[' + index + '][Menge]"]').val(),
     Einheit: $(this).find('input[name^="inputs[' + index + '][Einheit]"]').val(),
     Einzelpreis: $(this).find('input[name^="inputs[' + index + '][Einzelpreis]"]').val(),
     Rabatt: $(this).find('input[name^="inputs[' + index + '][Rabatt]"]').val(),
     Gesamtpreis: $(this).find('input[name^="inputs[' + index + '][Gesamtpreis]"]').val(),
    };
    formData.inputs.push(inputRow);
   });



   console.log(formData);
   // Get form data
   var formData = $(this).serialize();
   console.log("formdata".formData);


   // Make AJAX request
   $.ajax({
    type: 'POST',
    url: '/api/addOfferApi',
    data: formData,
    dataType: 'json',
    success: function(response) {
     // Handle success response
     // console.log(response.errors);
     if (response.success) {

      // console.log('hello');
     }

     if (response.errors) {

      console.log(response.errors);
     }
    },
    // error: function(xhr, status, error) {
    //     // Handle error response
    //     var errors = xhr.responseJSON.errors;
    //     if (errors) {
    //         // Display errors in your frontend
    //         // For example, you can loop through errors and append them to a specific element
    //         $.each(errors, function(field, messages) {
    //             // Append error messages to your HTML
    //             $('#' + field + '-error').text(messages[0]);
    //         });
    //     }
    // }
   });
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