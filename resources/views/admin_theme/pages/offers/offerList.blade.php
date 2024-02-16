<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Offer Listing</title>
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
      background-color: #404040;
      border: 1px solid #404040;
      color: #ffff;
      padding: 10px 14px;
      height: 42px;
      text-decoration: none;
      border-radius: 5px;
      transition: 0.5s ease;
    }

    .edit:hover {
      background-color: transparent;
      border: 1px solid #404040;
      color: #54606c;
      border-radius: 5px;
    }

    .btn {
      /* background-color: #54606c; */
      border: 1px solid #404040;
      color: #54606c;
      padding: 10px 14px;
      text-decoration: none;
      border-radius: 5px;
    }

    .close {
      color: #404040;
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
      font-size: 14px;
      padding: 15px 0px;
    }

    table tr td a {
      color: #54606c;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

        <div class="" style="padding-bottom:10px; border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">
          <h2>Admin Dashboard</h2>
          <p>{{ now()->format('l, F j, Y') }}</p>



          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>

        </div>

        @if($role=="admin")
        <div class="row pt-3">
          <div class="col-md-4 stretch-card grid-margin">
            <a href="{{url('/api/addOffer/'. $role)}}" class="btn">+ neues Angebot</a>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <a href="#" class="btn">Filter</a>
          </div>
        </div>
        @endif
        <div class="row pt-3">

          <div class="col-md-4 stretch-card grid-margin">
            Alle Angebote
          </div>
        </div>
        <div class="row pt-3 container">
          <table id="dataTable">
            <tr id="headings">
              <th>Status</th>
              <th>Nr</th>
              <th>Kunde u. Betreff</th>
              <th>Datum</th>
              <th>Betrag netto</th>
              <th></th>
            </tr>


          </table>
        </div>


      </div>
    </div>
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
    $(document).ready(function() {
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        // return;
      }

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/offerListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.offersList) {
            console.log('Data received:', data.user);


            // Function to populate the table with data
            function populateTable(dataList) {
              var tableBody = $('#dataTable');

              // Clear existing table rows
              tableBody.find("tr:gt(0)").remove();

              // Iterate through the data and add rows to the table
              $.each(dataList, function(index, item) {
                var row = $('<tr>');
                row.append(`<td>Offen</td>`);
                row.append(`<td>${item.Angebots_Nr}</td>`);
                row.append(`<td>${item.Ihre_Kundennummer}</td>`);
                row.append(`<td>${item.Angebotsdatum}</td>`);
                // row.append(`<td>${item.Kategorie}</td>`); // Uncomment if needed
                row.append(`<td>${item.gesamt_netto}</td>`);

                if (data.user.role === 'Admin') {
                  row.append(`<td><a href="/api/editOffer/${item.id}" class="edit" id="editProductBtn">bearbeiten</a></td>`);
                } else if (data.user.role === 'b2b') {
                  row.append(`<td><a href="/api/editOff/${item.id}" class="edit" id="editProductBtn">bestätigen</a></td>`);
                }

                // Add more columns as needed

                // Append the row to the table body
                tableBody.append(row);
              });

            }

            // Call the function to populate the table with the initial data
            populateTable(data.offersList);
          }

          if (data.error) {
            window.location.href = '/api/home';
          }
        },



        error: function(xhr, status, error) {
          // Handle specific errors
          if (xhr.status === 401) {
            console.error('Unauthorized: Please check your authentication token.');
          } else {
            console.error('Error:', error);
          }
        }
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



</body>

</html>