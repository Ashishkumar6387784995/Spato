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

      <div class="col-md-4 stretch-card grid-margin">
       Alle Bestellungen
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
      <tr>
       <td>AN-1379</td>
       <td>2024-2-10</td>
       <td>Alex</td>
       <td><span class="p-status">Ausstehend</span></td>
       <td><a class="edit btn" id="editProductBtn" data-bs-toggle="modal" data-bs-target="#viewModal">Details
         anzeigen</a></td>
       <td><span class="f-status" style="color:#B20202;">Incomplete </span> <i style="color:#B20202;" class=" fa-solid
         fa-xmark"></i></td>
      </tr>
      <tr>
       <td>AN-1380</td>
       <td>2024-2-10</td>
       <td>Sam</td>
       <td><span class="p-status">Erledigt</span></td>
       <td><a class="edit btn" id="editProductBtn" data-bs-toggle="modal" data-bs-target="#viewModal">Details
         anzeigen</a></td>
       <td><span class="f-status" style="color:#02B222;">Complete </span> <i style="color:#02B222;" class=" fa-solid
         fa-check"></i></td>
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
         <td>AN-1379</td>
        </tr>
        <tr>
         <th>Kundennummer</th>
         <td>-</td>
         <td>UR-503</td>
        </tr>
        <tr>
         <th>Kundenname</th>
         <td>-</td>
         <td>Alex</td>
        </tr>
        <tr>
         <th>Rechnungsdatum</th>
         <td>-</td>
         <td>2024/3/25</td>
        </tr>
        <tr>
         <th>Rechnungsadresse</th>
         <td>-</td>
         <td>UG - 452, New Town, Germany</td>
        </tr>
        <tr>
         <th>Lieferanschrift</th>
         <td>-</td>
         <td>House no. - 87, Toronto, Canada</td>
        </tr>
       </tbody>
      </table>
      <h4 class="pt-3 pb-3" style="color:;">Ordered Products</h4>
      <table class="order-products">
       <tbody>
        <tr>
         <th>Produkt-ID</th>
         <th>Produktname</th>
         <th>Hersteller</th>
         <th>Preis</th>
        </tr>
        <tr>
         <td>PR-451</td>
         <td>Robot1</td>
         <td>Sparto Services</td>
         <td>€8,745</td>
        </tr>
        <tr>
         <td>PR-781</td>
         <td>Robot2</td>
         <td>Sparto Services</td>
         <td>€8,745</td>
        </tr>
        <tr>
         <td>PR-565</td>
         <td>Robot3</td>
         <td>Sparto Services</td>
         <td>€8,745</td>
        </tr>
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
        <p><input type="text" value="€8,745" readonly /></p>
        <p><input type="text" value="€8,745" readonly /></p>
        <p><input type="text" value="€8,745" readonly /></p>
        <p><input type="text" value="€8,745" readonly /></p>
       </div>
      </div>
      <hr>
      <div class="row transection">
       <div class="col-4">Transaktions-ID</div>
       <div class="col-2">-</div>
       <div class="col-6">Td-7458442AS756</div>
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
    url: '/api/productListingApi', // Replace with the actual endpoint URL
    method: 'GET',
    success: function(data) {
     // Handle the successful response
     if (data.productList) {
      console.log('Data received:', data.productList);


      function populateTable(data) {
       var tableBody = $('#dataTable');

       // Clear existing table rows
       // tableBody.empty();

       // Iterate through the data and add rows to the table
       $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append('<td>'
         'AN-1379'
         '</td>');
        row.append('<td>'
         'Alex'
         '</td>');
        row.append('<td>'
         '<span class="p-status">Pending</span>'
         '</td>');
        row.append('<td><a class="edit btn" id="editProductBtn">Details anzeigen</a></td>');
        row.append('<td><span class="f-status">Complete </span> <i class="fa-solid fa-circle-check"></i></td>');


        // Add more columns as needed

        // Append the row to the table body
        tableBody.append(row);
       });
      }

      // Call the function to populate the table with the initial data
      populateTable(data.productList);



     } else {
      console.log('Data received:', data.errors);
     }
    }, // Missing comma here

    error: function(error) {
     // Handle errors
     console.error('Error:', error);
    }
   });




  });


  function deleteOperation(productId) {
   // Make a DELETE request using AJAX
   console.log(productId);
   $.ajax({
    url: '/api/deleteProduct/' + productId,
    method: 'get',
    success: function(data) {

     if (data.success) {



      $('#success_msg').text(data.success);

      // Delay the page reload for 2 seconds (2000 milliseconds)
      setTimeout(function() {
       location.reload(true);
      }, 1000);




      console.log('Product deleted successfully:', data.success);
      // Perform any additional actions after deletion
     } else {
      console.log('Product not deleted successfully:', data.message);
     }

    },
    error: function(error) {
     console.error('Error deleting product:', error.responseJSON.error);
    }
   });
  }
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