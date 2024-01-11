<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Claim Manager List</title>
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
            width: 300px;
        }

        table tr td {
            padding: 10px 2px;
            width: 300px;
            font-size:14px;
        }
        table tr td a{
            color:#54606c;
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

                    <div class="col-md-4 stretch-card grid-margin">
                        <a class="edit btn" href="{{url('/api/addClaims/' .$role)}}">+ neue Reklamation</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        Filter
                    </div>
                </div>
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                    Alle Claim‘s
                    </div>
                </div>



                <span id="success_msg" style="color:green"></span>
                <br>  <br> 


                <table id="dataTable">
                    <tr>
                        <th>Status</th>
                        <th>Nr</th>
                        <th>Kunde u. Betreff</th>
                        <th>Datum</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Offen</td>
                        <td>AB-2768</td>
                        <td>Pool Bau Profi BV Meier</td>
                        <td>26.11.23</td>
                        <td><a href="">bearbeiten</a></td>
                    </tr>
                    <tr>
                        <td>Berechnet</td>
                        <td>AB-2767</td>
                        <td>Pool Bau Profi BV Meier</td>
                        <td>26.11.23</td>
                        <td><a href="">berechnen</a></td>
                    </tr>
                    <tr>
                        <td>Offen</td>
                        <td>AB-2768</td>
                        <td>Pool Bau Profi BV Meier</td>
                        <td>26.11.23</td>
                        <td><a href="">berechnen</a></td>
                    </tr>
                    <tr>
                        <td>Offen</td>
                        <td>AB-2768</td>
                        <td>Pool Bau Profi BV Meier</td>
                        <td>26.11.23</td>
                        <td><a href="">berechnen</a></td>
                    </tr>
                    <tr>
                        <td>Berechnet</td>
                        <td>AB-2767</td>
                        <td>Pool Bau Profi BV Meier</td>
                        <td>26.11.23</td>
                        <td><a href="">bearbeiten</a></td>
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

    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                                row.append('<td>' + item.Hersteller + '</td>');
                                row.append('<td>' + item.Herst_Nr + '</td>');
                                row.append('<td>' + item.id + '</td>');
                                row.append('<td>' + item.Artikelname + '</td>');
                                row.append('<td>' + item.Kategorie + '</td>');
                                row.append('<td>' + item.Einkausfpreis_zzgl_MwSt + '</td>');
                                row.append('<td><a href="/api/editProduct/' + item.id + '" class="edit btn" id="editProductBtn">bearbeiten</a></td>');
                                row.append('<td><a href="#" onclick="deleteOperation(' + item.id + ')" id="deleteProductBtn"><i class="fa-regular fa-circle-xmark close"></i></a></td>');


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
    </script> -->




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