<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Customer Listing</title>
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


  .order-details tr th {
   width: 150px;
  }

  .order-details tr td:nth-child(2) {
   width: 50px;
  }

  .modal-body input {
   border: none;
   outline: none;
   width: 100px;
  }

  .row {
   --bs-gutter-x: 0px !important;
  }

  .filters {
   background-color: #fff;
   color: #54606c;
   border: none;
   outline: none;
   padding: 2px 8px;
   border-radius: 3px;
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .filters:hover {
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
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
     <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
      <h2>Admin Dashboard</h2>
      <p>Monday, January 12, 2024</p>
     </div>
     <div class="row pt-3">

      <!-- <div class="col-md-4 stretch-card grid-margin">
       <a class="edit btn" href="{{url('/api/addProduct/'.$role)}}">+ neues Produkt</a>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
       Filter
      </div> -->
     </div>

     <div class="row pt-3">

      <div class="col-3 stretch-card grid-margin">
       Alle Bestellungen
      </div>
      <div class="col-1 stretch-card grid-margin">

      </div>
      <div class="col-3 stretch-card grid-margin">
       <p>From :</p>
       <p><input type="date" class="filters mx-2"></p>
      </div>
      <div class="col-3 stretch-card grid-margin">
       <p>To :</p>
       <p><input type="date" class="filters mx-2"></p>
      </div>
      <div class="col-2 stretch-card grid-margin">
       <button class="edit btn" style="padding: -2rem 0px;">Filter</button>
      </div>
     </div>
      <table id="dataTable">
        <tr>
        <th>Auftragsnummer</th>
        <th>Datum</th>
        <th>Kundenname</th>
        <th>Zahlungsstatus</th>
        <th></th>
        <th>Endgültiger Status</th>
        </tr>
      </table>
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



  <!-- View Details in Modal -->

  <!-- Modal -->
  <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="viewModalLabel">Order Details</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <table class="order-details">
       <tbody>
        <tr>
          <th>Auftragsnummer</th>
          <td>-</td>
          <td id="Auftragsnummer"></td>
        </tr>
        <tr>
          <th>Kundennummer</th>
          <td>-</td>
          <td id="Kundennummer"></td>
        </tr>
        <tr>
          <th>Kundenname</th>
          <td>-</td>
          <td id="Kundenname"></td>
        </tr>
        <tr>
          <th>Rechnungsdatum</th>
          <td>-</td>
          <td id="Rechnungsdatum"></td>
        </tr>
        <tr>
          <th>Rechnungsadresse</th>
          <td>-</td>
          <td id="Rechnungsadresse"></td>
        </tr>
        <tr>
          <th>Lieferanschrift</th>
          <td>-</td>
          <td id="Lieferanschrift"></td>
        </tr>
       </tbody>
      </table>
      <h4 class="pt-3 pb-3" style="color:;">Ordered Products</h4>
      <table class="order-products">
        <thead>
          <tr>
          <th>Produkt-ID</th>
          <th>Produktname</th>
          <th>Hersteller</th>
          <th>Preis</th>
          <th>Qty</th>
          </tr>
        </thead> 

        <tbody id="productDetailsTD">
        </tbody>

      </table>
      <hr>
      <div class="row pt-5">
       <div class="col-3"></div>
       <div class="col-4">
        <p>Zwischensumme</p>
        <p>Versand</p>
        <p>Steuer</p>
        <p>Auftragssumme</p>
       </div>
       <div class="col-1">
        <p>-</p>
        <p>-</p>
        <p>-</p>
        <p>-</p>
       </div>
       <div class="col-2">
        <p><input type="text" id="Zwischensumme" readonly /></p>
        <p><input type="text" id="Versand" readonly /></p>
        <p><input type="text" id="Steuer" readonly /></p>
        <p><input type="text" id="Auftragssumme" readonly /></p>
       </div>
      </div>
      <hr>
      <div class="row transection">
       <div class="col-4">Transaktions-ID</div>
       <div class="col-2">-</div>
       <div class="col-6" id="Transaktions-ID"></div>
      </div>
     </div>
     <div class="modal-footer d-flex justify-content-between">
      <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
      <button type="button" class="edit">Mark As Complete</button>
     </div>
    </div>
   </div>
  </div>
  <!-- View Details in Modal -->

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    // Execute the code when the document is ready
    $(document).ready(function() {
      // Make a GET request using AJAX
      $.ajax({
        url: '/api/orderListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        success: function(data) {
          // Handle the successful response
          if (data.ordersList) {
            console.log('Data received:', data.ordersList);

            // Call the function to populate the table with the initial data
            populateTable(data.ordersList);

            function populateTable(data) {
            var tableBody = $('#dataTable');

            // Clear existing table rows
            // tableBody.empty();

            // Iterate through the data and add rows to the table
            $.each(data, function(index, item) {
              var row = $('<tr>');
              
              row.append('<td>' + item.order_id + '</td>');
              row.append('<td>' + item.created_at + '</td>');
              row.append('<td>' + item.name + '</td>');
              row.append('<td>' + item.payment_status + '</td>');
              row.append('<td><a class="edit btn getOrdersDetails" data-order-id="'+item.order_id+'" data-bs-toggle="modal" data-bs-target="#viewModal">Details anzeigen</a></td>');
              
              // check if role is not Normal or b2c
              if (item.final_status == 'Complete') {
                var finalStatus = '<span class="f-status" style="color:#02B222;">Complete </span> <i style="color:#02B222;" class="fa-solid fa-check"></i>';
              }else{
                var finalStatus = '<span class="f-status" style="color:#B20202;">Incomplete </span> <i style="color:#B20202;" class=" fa-solid fa-xmark"></i>';
              }

              row.append('<td><span class="f-status">' + finalStatus + '</td></tr>');

              // Add more columns as needed
              // Append the row to the table body
              tableBody.append(row);
            });
          }
          } else {
            console.log('Data received:', data.errors);
          }
        },
        error: function(error) {
        // Handle errors
        console.error('Error:', error);
        }
      });
    });


    // function for find get orders details by order id
    jQuery(document).on('click', '.getOrdersDetails', function () {
      var order_id = $(this).data('order-id');

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/getOrdersDetailsApi', // Replace with the actual endpoint URL
        method: 'GET',
        data: { order_id: order_id },
        success: function(data) {
          // Handle the successful response
          if (data.ordersDtl) {
            console.log('Orders Details:', data.ordersDtl);

            // Call the function to populate the table with the initial data
            populateOrderDtl(data.ordersDtl);

            function populateOrderDtl(data) {

              // customer details
              jQuery('#Auftragsnummer').text(data[0].order_id);
              jQuery('#Kundennummer').text(data[0].user_id);
              jQuery('#Kundenname').text(data[0].name);
              jQuery('#Rechnungsdatum').text(data[0].created_at);
              jQuery('#Rechnungsadresse').text(data[0].delv_address);
              jQuery('#Lieferanschrift').text(data[0].delv_address);


              // items details
                var tableBody = $('#productDetailsTD');
                // Clear existing table rows
                tableBody.empty();

                // Iterate through the data and add rows to the table
                $.each(data, function(index, item) {
                  var row = $('<tr>');
                  
                  row.append('<td>' + item.product_id + '</td>');
                  row.append('<td>' + item.product_prices + '</td>');
                  row.append('<td>' + item.names + '</td>');
                  row.append('<td>' + item.product_price + '</td>');
                  row.append('<td>' + item.product_quanty + '</td>');

                  // Add more columns as needed
                  // Append the row to the table body
                  tableBody.append(row);
                });

              // price detals
              jQuery('#Zwischensumme').val(data[0].sub_total+'€');
              jQuery('#Versand').val(data[0].shipping_amt+'€');
              jQuery('#Steuer').val(data[0].tax_amt+'€');
              jQuery('#Auftragssumme').val(data[0].order_total+'€');

              // transaction id
              jQuery('#Transaktions-ID').text(data[0].transaction_id);
            }
          } else {
            console.log('Data received:', data.errors);
          }
        },
        error: function(error) {
        // Handle errors
        console.error('Error:', error);
        }
      });
    })
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