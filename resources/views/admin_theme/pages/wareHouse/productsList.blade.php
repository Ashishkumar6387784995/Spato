<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lagerverwaltung</title>
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

  .danger{
    color:#DE3163;
    font-weight:600;
  }

  .moderate{
    color:#F39C12;
    font-weight:600;
  }
  .full{
    color:#52BE80;
    font-weight:600;
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
       Alle Produkte
      </div>
     </div>


     <table id="dataTable">
      <tr>
       <th>Produkt-ID</th>
       <th>Produktname</th>
       <th>Kategorie</th>
       <th>Status</th>
       <th>Datum</th>
       <th>Menge</th>
       <th></th>
      </tr>

      <tr>
       <td>PD-74S7</td>
       <td>Badu Alpha 1</td>
       <td>Pools</td>
       <td><span class="danger">Advanced Notification</span></td>
       <td>02/2/2024</td>
       <td><span class="danger">30/100</span></td>
       <td></td>
      </tr>
      <tr>
       <td>PD-97A5</td>
       <td>Badu Megna 1</td>
       <td>Technik</td>
       <td><span class="moderate">In Progress</span></td>
       <td>02/4/2024</td>
       <td><span class="moderate">40/100</span></td>
       <td></td>
      </tr>

      <tr>
       <td>PD-781A</td>
       <td>Badu Robot 1</td>
       <td>Wasserpflege</td>
       <td><span class="full">Completed</span></td>
       <td>02/4/2024</td>
       <td><span class="full">80/100</span></td>
       <td></td>
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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
  // Execute the code when the document is ready
  $(document).ready(function() {
   // Make a GET request using AJAX
   $.ajax({
    url: '/api/customerListingApi', // Replace with the actual endpoint URL
    method: 'GET',
    success: function(data) {
     // Handle the successful response
     if (data.usersList) {
      console.log('Data received:', data.usersList);


      function populateTable(data) {
       var tableBody = $('#dataTable');

       // Clear existing table rows
       // tableBody.empty();

       // Iterate through the data and add rows to the table
       $.each(data, function(index, item) {
        var row = $('<tr>');

        // check if role is not Normal or b2c
        if (item.role != 'Normal') {
          var roleAction = '<a href="#"  class="edit btn" onclick="deleteOperation(' + item.id +
         ')">Löschen</a>';
        }else{
          var roleAction = '';
        }


        // row.append('<td>' + item.id + '</td>');
        // row.append('<td>' + item.name + '</td>');
        // row.append('<td  id="deleteProductTD-' + item.id +'">' + item.role + '</td>');
        // row.append('<td><a href="/api/editcustomer/{{$role}}/' + item.id +
        //  '" class="edit btn" id="editProductBtn">bearbeiten</a></td>');
        // row.append('<td id="deleteProductBtn-' + item.id +'">' + roleAction +'</td>');


        // Add more columns as needed

        // Append the row to the table body
        tableBody.append(row);
       });
      }

      // Call the function to populate the table with the initial data
      populateTable(data.usersList);



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


  function deleteOperation(customerId) {
    // Make a DELETE request using AJAX
    console.log(customerId);
    $.ajax({
      url: '/api/deletecustomer/' + customerId,
      method: 'get',
      success: function(data) {
        if (data.success) {
          $('#success_msg').text(data.success);
          $('#deleteProductTD-'+customerId).text("Normal");
          $('#deleteProductBtn-'+customerId).html('<span style="color: red;font-size: 14px;">' + data.success + '</span>');
          // Delay the page reload for 2 seconds (2000 milliseconds)
          setTimeout(function() {
            $('#deleteProductBtn-'+customerId).text('');
          }, 3000);
          console.log('Customer deleted successfully:', data.success);
          // Perform any additional actions after deletion
        } else {
          console.log('Customer not deleted successfully:', data.message);
        }
      },
      error: function(error) {
      console.error('Error deleting Customer:', error.responseJSON.error);
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