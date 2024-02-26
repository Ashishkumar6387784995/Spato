<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gutscheine Listing</title>
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
  .active{
    background-color: transparent;
   border: 1px solid #54606c;
   color: #54606c;
   border-radius: 5px;
   padding: 10px 14px;
   height: 42px;
   font-weight:600;
   text-decoration: none;
   border-radius: 5px;
   transition: 0.5s ease;
  }
  .active:hover{
    background-color: #54606c;
   border: 1px solid #54606c;
   color: #ffff;
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

  .gutscheine.page a{
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

<div class="col-10 stretch-card grid-margin">
<a class="edit btn" href="{{url('/api/addcoupon/'.$role)}}">Gutschein hinzufügen +</a>
</div>
</div>


     <div class="row pt-3">

      <div class="col-3 stretch-card grid-margin">
      Alle Gutscheine
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
          <th>Gutscheincode</th>
          <th>Gültig ab</th>
          <th>Bis gültig</th>
          <th>Rate(%/€)</th>
          <th>Mindestbetrag</th>
          <th>Gutscheinstatus</th>
          <th></th>
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
        url: '/api/couponListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        success: function(data) {
          // Handle the successful response
          if (data.couponsList) {
            console.log('Data received:', data.couponsList);

            // Call the function to populate the table with the initial data
            populateTable(data.couponsList);

            function populateTable(data) {
            var tableBody = $('#dataTable');

            // Clear existing table rows
            // tableBody.empty();

            // Iterate through the data and add rows to the table
            $.each(data, function(index, item) {
              var row = $('<tr>');
              
              row.append('<td>' + item.Gutscheincode + '</td>');
              row.append('<td>' + item.Gültig_ab + '</td>');
              row.append('<td>' + item.Bis_gültig + '</td>');
              row.append('<td>'+ item.Rate + item.Typ + '</td>');
              row.append('<td>' + item.Mindestbetrag + '</td>');
              
              // check if status is active or inactive
              if (item.Gutscheinstatus == 'Active') {
                var finalStatus = '<span class="f-status" style="color:#02B222; font-weight:600;">Active</span>';
                var actInactBtn  = '<button class="edit btn changeCouponStatus" coupon-code="' + item.Gutscheincode + '" status="Inactive" href="#">Inaktiv</button>';
              }else{
                var finalStatus = '<span class="f-status" style="color:#B20202; font-weight:600;">Inactive</span>';
                var actInactBtn = '<button class="active btn changeCouponStatus" coupon-code="' + item.Gutscheincode + '" status="Active" href="#">aktiv</button>';
              }

              // compaire if till date if passed
              var currntDate = '{{date("Y-m-d")}}';
              if (item.Bis_gültig <= currntDate) {
                var actInactBtn  = '<button class="edit btn changeCouponStatus" coupon-code="' + item.Gutscheincode + '" status="Inactive" href="#">Inaktiv</button>';
              }
              
              row.append('<td id="status_' + item.Gutscheincode + '">' + finalStatus + '</td></tr>');
              row.append('<td>' + actInactBtn + '</td>');

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

   
  </script>

  <script>
    // function for update coupon status by coupon code
    jQuery(document).on('click', '.changeCouponStatus', function () {
      var btn = $(this);
      var coupon_code = btn.attr('coupon-code');
      var status = btn.attr('status');
      // alert(status+'  '+coupon_code);

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/updateCouponStatusApi', // Replace with the actual endpoint URL
        method: 'GET',
        data: { coupon_code: coupon_code,  status:status},
        success: function(data) {
          // Handle the successful response
          console.log('Response :', data);
          if (data.message) {
            // change final status of

            if (data.record.Gutscheinstatus == 'Active') {
              var status = '<span class="f-status" style="color:#02B222; font-weight:600;">Active</span>';
            }else{
              var status = '<span class="f-status" style="color:#B20202; font-weight:600;">Inactive</span>';
            }
            jQuery('#status_'+coupon_code).html(status);
            // Delay the page reload for 2 seconds (2000 milliseconds)
            setTimeout(function() {
              location.reload(true);
            }, 2000);
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