<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rechnungen</title>
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
            padding: 8px 14px;
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
        }

        table tr td a {
            color: #54606c;
        }

        .rechnungen-page a{
            color: #44e1d5 !important;
  border: 1px solid #fcfcfc !important;
  border-radius:5px;
  margin-top:10px;
  text-align:center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

                <div class="" style="padding-bottom:10px;">
                @include('admin_theme/Partial/admin_header')
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>

                </div>

                @if($role=="admin")
                <div class="row pt-3">
                    <div class="col-md-4 stretch-card grid-margin">
                        <a href="{{url('/api/addbills/' .$role)}}" class="btn">+ neue Rechnung</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <a href="#" class="btn">Filter</a>
                    </div>
                </div>
                @endif
                <div class="row pt-3">
                    <div class="col-md-4 stretch-card grid-margin">
                        Alle Rechnungen
                    </div>
                </div>

                <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>

                <div class="row pt-3 container">
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
                url: '/api/billsListingApi', // Replace with the actual endpoint URL
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                success: function(data) {
                    // Handle the successful response
                    jQuery('#userName').html(data.user.name);
                    if (data.billsNo) {
                        console.log('Data received:', data.billsNo);
                        console.log('User received:', data.user);

                        function populateTable(dataList) {
                            var tableBody = $('#dataTable');

                            // Clear existing table rows
                            // tableBody.empty();

                            // Iterate through the dataList and add rows to the table
                            $.each(dataList, function(index, item) {
                                var row = $('<tr>');
                                row.append('<td id="status_'+item.Rechnungs_Nr+'">' + item.status + '</td>');
                                row.append('<td>' + item.Rechnungs_Nr + '</td>');
                                row.append('<td>' + item.Ihre_Kundennummer + '</td>');
                                row.append('<td>' + item.Rechnungsdatum + '</td>');
                                // row.append('<td>' + item.Kategorie + '</td>');
                                row.append('<td>' + item.gesamt_netto + '</td>');

                                if (data.user.role === 'Admin') {
                                    row.append('<td><a href="/api/editBills/' + item.id + '" class="edit">bearbeiten<a></td>');
                                    if (item.status=='Offen') {
                                        row.append('<td><button type="button" class="edit  changeBillStatus" bill-code="'+item.Rechnungs_Nr+'">buchen</button></td>');
                                    }
                                }

                                // Add more columns as needed
                                // Append the row to the table body
                                tableBody.append(row);
                            });
                        }

                        // Call the function to populate the table with the initial data
                        populateTable(data.billsNo);
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

    <script>
        // function for update bill status by bill code
        jQuery(document).on('click', '.changeBillStatus', function () {
        var btn = $(this);
        var bill_code = btn.attr('bill-code');
        jQuery('#success_msg').html('');
        // alert(bill_code);

        // Make a GET request using AJAX
        $.ajax({
            url: '/api/updateBillStatusApi', // Replace with the actual endpoint URL
            method: 'GET',
            data: { bill_code: bill_code,  status:status},
            success: function(data) {
            // Handle the successful response
            console.log('Response :', data);
            if (data.message) {
                // change final status of
                jQuery('#success_msg').html('Rechnung Nr - '+ bill_code+' Bezahlt Successfully');
                jQuery('#status_'+bill_code).html('Bezahlt');
                btn.closest('td').html('');
                // Delay the page reload for 2 seconds (2000 milliseconds)
                setTimeout(function() {
                jQuery('#success_msg').html('');
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