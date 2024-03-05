<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Delivery Notes</title>
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

        table tr td a {
            color: #54606c;
        }

        .lieferscheine-page a {
            color: #44e1d5 !important;
            border: 1px solid #fcfcfc !important;
            border-radius: 5px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
              
            </div>
        </div>
    </div>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


        @include('admin_theme/Partial/sidebar')



        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div>
            @include('admin_theme/Partial/admin_header')
            </div>
                @if($role=="admin")
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                        <a class="edit btn" href="{{url('/api/addDeliveryNotes/'.$role)}}">+ neuer Lieferschein</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        Filter
                    </div>
                </div>
                @endif
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                        Alle Lieferscheine
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    // Define the refreshPage function outside of the document ready function
    function refreshPage() {
        // You can add some delay if needed to ensure the download starts before the page refreshes
        setTimeout(function() {
            location.reload();
        }, 1000); // Refresh after 1 second (adjust as needed)
    }

    // Execute the code when the document is ready
    $(document).ready(function() {
        var token = localStorage.getItem('authToken');
        console.log(token);

        // Check if the token exists
        if (!token) {
            console.error('Token not found in localStorage');
            window.location.href = '/api/home';
            return; // You might want to return here to exit early
        }

        // Make a GET request using AJAX
        $.ajax({
            url: '/api/deliveryNotesListingApi', // Replace with the actual endpoint URL
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            success: function(data) {
                // Handle the successful response
                jQuery('#userName').html(data.user.name);
                if (data.delivery_notes) {
                    console.log('Data received:', data.delivery_notes);

                    // Function to populate the table with data
                    function populateTable(delivery_notes) {
                        var tableBody = $('#dataTable');

                        // Clear existing table rows
                        // tableBody.empty();

                        // Iterate through the data and add rows to the table
                        $.each(delivery_notes, function(index, item) {
                            var row = $('<tr>');
                            if (data.user.role === 'Admin') {
                                row.append('<td>' + item.calculate_status + '</td>');
                            } else if (data.user.role === 'supplier') {
                                row.append('<td>' + item.deliveryStatus + '</td>');
                            }
                            row.append('<td>' + item.Lieferschein_Nr + '</td>');
                            row.append('<td>' + item.Ihre_Kundennummer + '</td>');
                            row.append('<td>' + item.Lieferdatum + '</td>');
                            // row.append('<td>' + item.Kategorie + '</td>');
                            row.append('<td>' + item.gesamt_netto + '</td>');
                            if (data.user.role === 'Admin') {
                                row.append('<td><a href="/api/editDeliveryNotes/admin/' + item.Lieferschein_Nr +
                                    '" class="btn edit" >bearbeiten</a></td>');
                                row.append('<td><a href="/api/downloadDeliveryPdf/' + item.Lieferschein_Nr +
                                    '" class="btn edit" id="editProductBtn" onclick="refreshPage()">berechnen</a></td>');
                            } else if (data.user.role === 'supplier') {
                                row.append('<td><a href="/api/editDeliveryNotesForSuppliers/supplier/' + item.id +
                                    '" class="btn edit" >bearbeiten</a></td>');
                            }

                            // Add more columns as needed

                            // Append the row to the table body
                            tableBody.append(row);
                        });
                    }

                    // Call the function to populate the table with the initial data
                    populateTable(data.delivery_notes);
                } else {
                    console.log('Data received:', data.errors);
                    window.location.href = '/api/home';
                }
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
            }
        });
    });
</script>







    <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script>

    <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>



</body>

</html>