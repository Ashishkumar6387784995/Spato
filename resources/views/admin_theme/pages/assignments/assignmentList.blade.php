<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add assignments</title>
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
      color: #404040;
      border-radius: 5px;
    }

    .close {
      color: #404040;
    }

    .responsive{
      overflow:auto;
    }

    .responsive table tr th, td{
      padding:0px 10px;
    }
    .responsive table tr th{
      background-color:  #404040;
      padding:5px;
      color:#fff;
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

    table tr td a {
      color: #54606c;
    }
    .aufträge-page a{
      color: #44e1d5 !important;
  border: 1px solid #fcfcfc !important;
  border-radius:5px;
  /* margin-top:10px; */
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
      
      <div class="" style="padding-bottom:10px;   margin-top:-1.5rem;">
        @include('admin_theme/Partial/admin_header')
          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      
        @if($role=="b2b")
        <div class="row pt-3">

          <div class="col-md-4 stretch-card grid-margin">
            <a class="edit btn" href="{{url('/api/addAssignmen/'.$role)}}">+ neuer Auftrag zum Shop</a>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            Filter
          </div>
        </div>
        @endif
        @if($role=="admin")
        <div class="row pt-3">

          <div class="col-md-4 stretch-card grid-margin">
            <a class="edit btn" href="{{url('/api/addAssignment/'.$role)}}">+ neuer Auftrag</a>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            Filter
          </div>
        </div>
        
        @endif
        <div class="row pt-3">

          <div class="col-md-4 stretch-card grid-margin">
            Alle Produkte
          </div>
        </div>



        <span id="success_msg" style="color:green"></span>
        <br> <br>


        <table id="dataTable">
          <tr>
            <th>Status</th>
            <th>Nr</th>
            <th>Kunde u. Betreff</th>
            <th>Datum</th>
            <th>Betrag netto</th>
            <th></th>
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


  <!-- Assignment view page for supplier start -->
<!-- Modal -->
<div class="modal fade" id="supplierAssignment" tabindex="-1" aria-labelledby="supplierAssignmentLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable">
    <div class="modal-content" style="width: 750px;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="supplier-view-assignmentLabel">Zugeordnete Produkte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="supplier-view-assignment" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col"><h4>Auftrags-Nr.</h4></div>
          <div class="col"><p class="onViewHide" id="show-Auftrags-Nr">#</p></div>
        </div>
        <div class="row">
          <div class="col">Angebots-Nr.</div>
          <div class="col"><p class="onViewHide" id="show-Angebots-Nr">#</p></div>
        </div>
        <div class="row">
          <div class="col">Auftragsdatum</div>
          <div class="col"><p class="onViewHide" id="show-Auftragsdatum">#</p></div>
        </div>
        <div class="row">
          <div class="col">Referenz</div>
          <div class="col"><p class="onViewHide" id="show-Referenz">#</p></div>
        </div>

        <div class="row">
          <div class="col">Ihre Kundennummer</div>
          <div class="col"><p class="onViewHide" id="show-Ihre-Kundennummer">#</p></div>
        </div>
        <div class="row">
          <div class="col">Ihre Ust. ID</div>
          <div class="col"><p class="onViewHide" id="show-Ihre-Ust-ID">#</p></div>
        </div>
        <div class="responsive">
          <table>
            <thead>
              <tr>
                <th>Produkt</th>
                <th>Beschreibung</th>
                <th>Menge</th>
                <th>Einheit</th>
                <th>Einzelpreis</th>
                <th>Rabatt</th>
                <th>Gesamtpreis</th>
              </tr>
            </thead>
            <tbody id="show-tbody">
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="calculation" style="border-top:1px solid #44e1d5; padding-top:50px;">
          <div class="row">
            <div class="col">Gesamt netto</div>
            <div class="col"><p class="onViewHide" id="show-Gesamt-netto">#</p></div>
          </div>
          <div class="row">
            <div class="col">zzgl. Umsatzsteuer 19 %</div>
            <div class="col"><p class="onViewHide" id="show-zzgl-Umsatzsteuer">#</p></div>
          </div>
          <div class="row">
            <div class="col">Gesamtbetrag brutto</div>
            <div class="col"><p class="onViewHide" id="show-Gesamtbetrag-brutto">#</p></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
  <!-- Assignment view page for supplier ends -->

  <script>
    // Execute the code when the document is ready
    $(document).ready(function() {

      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        // return;
      }
      $.ajax({
        url: '/api/assignmentListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.assignments) {
            console.log('Data received:', data.assignments);
            jQuery('#userName').html(data.user.name);
            function populateTable(dataList) {
              var tableBody = $('#dataTable');

              // Clear existing table rows
              tableBody.find("tr:gt(0)").remove();

              // Iterate through the data and add rows to the table
              $.each(dataList, function(index, item) {
                var row = $('<tr>');
                row.append('<td>' + 'Offen' + '</td>');
                row.append('<td>' + item.Auftrags_Nr + '</td>');
                row.append('<td>' + item.Ihre_Kundennummer + '</td>');
                row.append('<td>' + item.Auftragsdatum + '</td>');
                // row.append('<td>' + item.Kategorie + '</td>');
                row.append('<td>' + item.gesamt_netto + '</td>');

                if (data.user.role === 'Admin') {
                  row.append('<td><a href="/api/editAssignment/admin/' + item.Auftrags_Nr +
                    '" class="edit btn" id="editProductBtn">bearbeiten</a></td>');
                } else if (data.user.role === 'b2b') {
                  row.append('<td><a href="/api/editAssignments/b2b/' + item.Auftrags_Nr +
                    '" class="edit btn" id="editProductBtn">Änderung anfragen</a></td>');
                } else if (data.user.role === 'supplier') {
                  row.append('<td><a class="edit btn getAssignmentDetails" data-assignment-no="'+item.Auftrags_Nr+'" data-bs-toggle="modal" data-bs-target="#supplierAssignment">ansehen</a></td>');
                }

                // Add more columns as needed

                // Append the row to the table body
                tableBody.append(row);
              });

            }

            // Call the function to populate the table with the initial data
            populateTable(data.assignments);
          }
          if (data.error) {
            window.location.href = '/api/home';
          }
        },


        error: function(error) {
          // Handle errors
          console.error('Error:', error);
        }
      });
    });


    // function for find get Assignment details by order id
    jQuery(document).on('click', '.getAssignmentDetails', function () {
      
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
      }

      var assignment_no = $(this).attr('data-assignment-no');
      jQuery('.onViewHide').text('#');
      jQuery('#show-tbody').html('');

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/getAssignmentDetailsApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },
        data: { assignment_no: assignment_no},
        success: function(data) {
          // Handle the successful response
          if (data.assignmentDtl) {
            console.log('Assignment Details:', data.assignmentDtl);

            // Call the function to populate the table with the initial data
            populateOrderDtl(data.assignmentDtl);

            function populateOrderDtl(data) {

              // customer details
              jQuery('#show-Auftrags-Nr').text(data[0].Auftrags_Nr);
              jQuery('#show-Angebots-Nr').text(data[0].Angebots_Nr);
              jQuery('#show-Auftragsdatum').text(data[0].Auftragsdatum);
              jQuery('#show-Referenz').text(data[0].Referenz);
              jQuery('#show-Ihre-Kundennummer').text(`${data[0].name} (${data[0].Ihre_Kundennummer})`);
              jQuery('#show-Ihre-Ust-ID').text(data[0].Ihre_Ust_ID);

              jQuery('#show-Gesamt-netto').text(data[0].gesamt_netto+'€');
              jQuery('#show-zzgl-Umsatzsteuer').text(data[0].zzgl_Umsatzsteuer+'€');
              jQuery('#show-Gesamtbetrag-brutto').text(data[0].Gesamtbetrag_brutto+'€');


              // items details

                // Iterate through the data and add rows to the table
                $.each(data, function(index, item) {

                  // for big discription length
                    var wordLimit = 8; // Change this to your desired word limit

                    // Convert JSON object to string
                    var Beschreibung = item.Beschreibung;

                    // Split the string by whitespace to count words
                    var words = Beschreibung.split(/\s+/);

                    // If the number of words exceeds the limit, trim the text
                    if (words.length > wordLimit) {
                      var trimmedText = words.slice(0, wordLimit).join(' ');
                      trimmedText = trimmedText + '...';
                    }else{
                      var trimmedText = Beschreibung;
                    }

                  jQuery('#show-tbody').append(`
                    <tr>
                      <td>${item.Produkt}</td>
                      <td><span title="${Beschreibung}">${trimmedText}</span></td>
                      <td>${item.Menge}</td>
                      <td>${item.Einheit}</td>
                      <td>${item.Einzelpreis}</td>
                      <td>${item.Rabatt}</td>
                      <td>${item.Gesamtpreis}</td>
                    </tr>
                  `);
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