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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
  * {
   margin: 0;
   padding: 0;
  }

  .contact-show {
   width: 100%;
   height: 100%;
   background-color: #fff;
   border: 0.5px solid #000;
   padding: 10px 10px;
  }

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

  .showButton {
   width: 250px;
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

  .details input select {
   width: 250px !important;
  }

  @media (min-width: 481px) and (max-width: 767px) {
   .details input {
    width: 170px;
   }
  }
  .slide-in-blurred-top {
	-webkit-animation: slide-in-blurred-top 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) 0.5s both;
	        animation: slide-in-blurred-top 0.6s cubic-bezier(0.230, 1.000, 0.320, 1.000) 0.5s both;
}

  #guessCompanyName{
    max-height: 110px;
    overflow: auto;
    transition:0.6s ease-in-out;
    position:absolute;
    width: 250px;
    /* overflow-x: hidden;
    overflow-y: scroll; */
  }
  #guessCompanyName ul{
    display:contents;
    transition:0.6s ease-in-out;
  }
  #guessCompanyName ul li{
    background-color:#fff;
    list-style-type:none;
    border-radius:3px;
    margin:3px 0px;
    padding:0px 10px;
    cursor:pointer;
    font-weight:600;
    transition:0.6s ease-in-out;
  }
  @-webkit-keyframes slide-in-blurred-top {
  0% {
    -webkit-transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
            transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
    -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
    -webkit-filter: blur(40px);
            filter: blur(40px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) scaleY(1) scaleX(1);
            transform: translateY(0) scaleY(1) scaleX(1);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
    -webkit-filter: blur(0);
            filter: blur(0);
    opacity: 1;
  }
}
@keyframes slide-in-blurred-top {
  0% {
    -webkit-transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
            transform: translateY(-1000px) scaleY(2.5) scaleX(0.2);
    -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
    -webkit-filter: blur(40px);
            filter: blur(40px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) scaleY(1) scaleX(1);
            transform: translateY(0) scaleY(1) scaleX(1);
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
    -webkit-filter: blur(0);
            filter: blur(0);
    opacity: 1;
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
      <p>{{ now()->format('l, F j, Y') }}</p>

      <button class="navbar-toggler" type="button" data-toggle="offcanvas">
       <span class="mdi mdi-menu"></span>
      </button>
     </div>
     <form id="AddOffersForm" method="post">
      <div class="row pt-3">

       <div class="col-md-2 stretch-card grid-margin">
        <button class="btn" type="button" id="saveButton">Save</button>

       </div>


       <div class="col-md-2 stretch-card grid-margin" data-bs-toggle="modal" data-bs-target="#auftrag">
        <a href="#" class="btn">Auftrag</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin" data-bs-toggle="modal" data-bs-target="#lieferschein">
        <a href="#" class="btn">Lieferschein</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="{{url('api/OffersPdfdownload/'.$newOfferNo)}}"><button class="btn" type="button">Rechnung</button></a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">

       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <!-- <a href="#" class="btn">senden</a> -->

        <button id="emailSend" class="btn">senden</button>
       </div>
      </div>
      <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
      <div class="row pt-3">

       <div class="col-md-4">
        <div class="contact-show">
         <p><b>Name</b> -> <span class="customer_dtl" id="customer_Name"><span></p>
         <p><b>Conatact</b> -> <span class="customer_dtl" id="customer_Contact"><span></p>
         <p><b>Email</b> -> <span class="customer_dtl" id="customer_Email"><span></p>

        </div>
       </div>
       <div class="col-md-2"></div>
       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Angebots-Nr.</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" placeholder='#' id="Angebots_Nr" name="Angebots_Nr"
           value="{{$newOfferNo}}" /></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Angebotsdatum</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Angebotsdatum" name="Angebotsdatum"
            value="{{ now()->format('d-m-Y') }}" /> <br>
           <span class="msg_err" id="Angebotsdatum_err" style="color:red;  font-size:13px;"></span>
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
          <select id="Ihre_Kundennummer" name="Ihre_Kundennummer" class="showButton" required>
          </select>
          <br>
          <span class="msg_err" id="Ihre_Kundennummer_err" style="color:red;  font-size:13px;"></span>

         </div>
        </div>
        <div class="details">
         <div class="field">
          <p>Name der Firma</p>
         </div>
         <div class="inputs"> 
          <p><input class="dynamic-field " type="text" placeholder='#' id="companyName" name="companyName" onkeyup="guessCompanyNameFunction()"></p>
          
          <div id="guessCompanyName">
            <ul>

            </ul>
            </div>
          <br>
          <span class="msg_err" id="Ihre_Kundennummer_err" style="color:red;  font-size:13px;"></span>

         </div>
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
           <th>
            Beschreibung
           </th>
           <th>
            Menge
           </th>
           <th>
            Einheit
           </th>
           <th>
            Einzelpreis
           </th>
           <th>Rabatt</th>
           <th>Gesamtpreis</th>
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
            <br><span class="msg_err" id="Produkt_err" style="color:red; font-size:13px;"></span>

           </td>


           <td>

            <input type="text" name='inputs[0][Beschreibung]' placeholder='#' />
            <br><span class="msg_err" id="Beschreibung_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>

            <input type="text" name='inputs[0][Menge]' placeholder='#' /><br>
           </td>
           <td>
            <input type="text" name='inputs[0][Einheit]' id="Quantity_0" placeholder='#' />
            <br><span class="msg_err" id="Einheit_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>

            <input type="text" name='inputs[0][Einzelpreis]' id="Rate_0" placeholder='#' />
            <br><span class="msg_err" id="Einzelpreis_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>
            <p></p>
            <input type="text" name='inputs[0][Rabatt]' id="Discount_0" placeholder='#' style="width:30px;" /><span>%
             C2</span>
           </td>
           <td>
            <p></p>
            <input type="text" name='inputs[0][Gesamtpreis]' id="Amount_0" placeholder='#' />
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

       <div class="col-6 stretch-card">
        Zahlungsbedingungen: nach Vereinbarung
       </div>

       <div class="col-3 stretch-card ">
        zzgl. Umsatzsteuer 19 %
       </div>
       <div class="col-2 stretch-card ">
        <input type="text" name="zzgl_Umsatzsteuer" id="tax" placeholder='#' style="background:transparent; border:none;" />
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
       <div class="col stretch-card">
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
                        <input type="text" value='${No}' name='inputs[${i}][POS]' placeholder='#' />
                    </td>
                    <td>
                        <input type="text"" name='inputs[${i}][Produkt]' placeholder="#"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Beschreibung]' placeholder="#"/>
                    </td>
                    <td>
                    <input type="text" name='inputs[${i}][Menge]' placeholder="#"/>
                       
                    </td>
                    <td>
                    <input type="text" name='inputs[${i}][Einheit]' id="Quantity_${i}" placeholder='#'  onclick="handleClick('Quantity_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Einzelpreis]' id="Rate_${i}" placeholder='#'  onclick="handleClick('Rate_${i}')"/>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Rabatt]' id="Discount_${i}" placeholder='#'  onclick="handleClick('Discount_${i}')" style="width:30px;"/><span>% C2</span>
                    </td>
                    <td>
                        <input type="text" name='inputs[${i}][Gesamtpreis]' id="Amount_${i}" placeholder='#' />
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
    document.getElementById("tax").value = igstAmount.toFixed(2);
   }
  });
  </script>

  <!-- Dynamic table update ends-->

  <script>
  $('#saveButton').click(function(e) {
   e.preventDefault(); // Prevent the form from submitting normally

   $('.msg_err').text('');

   var formData = {
    Angebots_Nr: $('#AddOffersForm input[name="Angebots_Nr"]').val(),
    Angebotsdatum: $('#AddOffersForm input[name="Angebotsdatum"]').val(),
    Referenz: $('#AddOffersForm input[name="Referenz"]').val(),
    Ihre_Kundennummer: $('#AddOffersForm select[name="Ihre_Kundennummer"]').val(),
    gesamt_netto: $('#AddOffersForm input[name="gesamt_netto"]').val(),
    zzgl_Umsatzsteuer: $('#AddOffersForm input[name="zzgl_Umsatzsteuer"]').val(),
    Gesamtbetrag_brutto: $('#AddOffersForm input[name="Gesamtbetrag_brutto"]').val(),
    inputs: []
   };

   $('#table tbody tr').each(function(index) {
    console.log("Processing row " + index);
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

   var token = localStorage.getItem('authToken');
   console.log(token);

   // Check if the token exists
   if (!token) {
    console.error('Token not found in localStorage');
    window.location.href = '/api/home';
    // return;
   }



   // Make AJAX request
   $.ajax({
    type: 'POST',
    url: '/api/addOfferApi',
    data: formData,
    dataType: 'json',
    headers: {
     'Authorization': 'Bearer ' + token,
    },
    success: function(response) {
     // Handle success response
     if (response.success) {
      console.log(response.success);
      console.log(response.dynamicFields);
      // $('#AddOffersForm')[0].reset();
      $('#success_msg').text(response.success);
     } else if (response.errors) {
      // Display validation errors in the console
      console.log(response.errors);
      
      displayValidationErrors(response.errors);
 

      // $('#error_msg').text('Error: ' + JSON.stringify(response.errors)).css('color', 'red');

      // You can also update your HTML to show errors in a specific element
      // $('#error_msg').text('Error: ' + response.errors).css('color', 'red');
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

<script>
  $('#emailSend').click(function(e) {
    e.preventDefault();

    // Get the values from the form
    var formData = {
      Angebots_Nr: $('#AddOffersForm input[name="Angebots_Nr"]').val(),
      email: $('#AddOffersForm input[name="customer_email"]').val(),
    }

    console.log(formData);

    const baseUrl = window.location.origin;

    $.ajax({
      type: 'post',
      url: baseUrl + '/api/sendOfferMailsToB2C',
      data: formData,
      success: function(response) {
        // Handle success response
        if (response.success) {
          console.log(response.success);
          $('#AddOffersForm')[0].reset();
          $('#success_msg').text(response.success);
          // Add any additional success handling here
        }

        if (response.error) {
          console.log(response.error);
          // Add any error handling here
        }
      },
      error: function(xhr, textStatus, errorThrown) {
        console.error('AJAX Request Failed: ', textStatus, errorThrown);
        console.error('Response Text: ', xhr.responseText); // Log the response text for more details
        // Handle AJAX errors here
      },
    });
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
  </script>


  <!-- auftrag Modal -->
  <div class="modal fade" id="auftrag" tabindex="-1" aria-labelledby="auftragLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="auftragLabel">Order </h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <input type="text" id="Auftrag" name="Auftrag" />
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
     </div>
    </div>
   </div>
  </div>
  <!-- Modals -->

  <!-- lieferschein Modal -->
  <div class="modal fade" id="lieferschein" tabindex="-1" aria-labelledby="lieferscheinLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <p class="modal-title fs-5" id="lieferscheinLabel">Write note</p>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <div class="form-floating">
       <textarea class="form-control" placeholder="Write note" id="Lieferschein" name="Lieferschein"></textarea>
      </div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <!-- <button type="button" class="btn btn-primary">Save</button> -->
     </div>
    </div>
   </div>
  </div>
  <!-- Modals -->




 </body>

</html>