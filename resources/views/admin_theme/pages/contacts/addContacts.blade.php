<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Contact</title>
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
            font-weight: 600;
            transition: 0.5s ease;
        }

        .edit:hover {
            background-color: transparent;
            border: 1px solid #54606c;
            color: #54606c;
            border-radius: 5px;
        }

        .btn {
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
        }

        .close {
            color: #54606c;
        }

        .stretch-card {
            font-size: 13px;
        }

        table tr th {
            width: 200px;
            background-color: #54606c;
            color: #fff;
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
            color: #54606c;
        }

        a {
            color: #54606c;
            font-size: 15px;
            /* font-weight:600; */
        }

        .kontakte-page a {
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
            <form>
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

                @include('admin_theme/partial/admin_header')

                <div class="row pt-3">

                    <div class="col-md-2 stretch-card grid-margin">
                        <button type="button" id="contactSaveButton" class="btn">Save</button>
                    </div>

                    <div class="col-md-2 stretch-card grid-margin">

                        <a href="#" class="mt-2">Umsatz 25.067,90 €</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin">
                        <a href="#" class="mt-2">offene Rechnungen 5.007,90 € l</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin">
                        <a href="#" class="mt-2">laufende Aufträge 18.054,09 €</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <button class="edit" type="button" data-bs-toggle="modal" data-bs-target="#customerModal">Import customer's CSV</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-2">typ</div>
                            <div class="col-4" style="width:80%; display:flex;">
                                B2B <input class="form-check-input" type="radio" name="typ" value="b2b" style="margin-right:15px;">
                                B2C <input class="form-check-input" type="radio" name="typ" value="Normal">
                            </div>
                            <span class="msg_err" id="typ_err" style="color:red;  font-size:13px;"></span>
                            <br>
                            <div class="col-6 stretch-card">
                                Kundennummer <input type="text" class="form-control" name="kunden_no" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:5px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col stretch-card pt-3">
                                Firmenname <input type="text" class="form-control" name="firm_name" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                            </div>
                            <span class="msg_err" id="firm_name_err" style="color:red;  font-size:13px;"></span>
                        </div>
                        <div class="row">
                            <div class="col stretch-card pt-3">
                                Ansprechpartner <input class="form-check-input" type="radio" name="name_title" style="margin:0px 10px;" value="Frau"> Frau <input class="form-check-input" type="radio" name="name_title" style="margin:0px 10px;" value="Herr"> Herr <input type="text" class="form-control" name="Ansprechpartner" style="background-color:transparent; height:5px; border:1px solid black; width:300px;">
                            </div>

                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                Adresse
                            </div>
                            <div class="col">
                                Lieferadresse
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Straße
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="Straße" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                    <span class="msg_err" id="Straße_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Straße
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="d_Straße" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Ort
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="Ort" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                    <span class="msg_err" id="Ort_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Ort
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="d_Ort" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        PLZ
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="PLZ" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                    <span class="msg_err" id="PLZ_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        PLZ
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="d_PLZ" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Land
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="Land" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                    <span class="msg_err" id="Land_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Land
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="d_Land" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        VAT ID
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="vat_id">
                                    </div>
                                    <span class="msg_err" id="vat_id_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Mobile
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="mobile">
                                    </div>
                                    <span class="msg_err" id="mobile_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Telefon
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="Telefon">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Password
                                    </div>
                                    <div class="col-8">
                                        <input type="password" name="password" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
                                    </div>
                                    <span class="msg_err" id="password_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Mail
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="email">
                                    </div>
                                    <span class="msg_err" id="email_err" style="color:red;  font-size:13px;"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        Mail RE

                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="r_mail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        WWW
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="www">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-4">
                                        <!-- Straße -->
                                    </div>
                                    <div class="col-8">
                                        <!-- <input type="text" class="form-control"  aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row">
                            <div class="col stretch-card pt-3">
                                Newsletter <input class="form-check-input" type="radio" name="Newsletter" style="margin:0px 10px;" value="Yes"> Ja <input class="form-check-input" type="radio" name="Newsletter" style="margin:0px 10px;" value="No"> Nein <span style="padding:0 15px;">Mail Newsletter</span> <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:30px; border:1px solid black; width:200px;" name="Mail_Newsletter">
                            </div>
                            <span class="msg_err" id="Newsletter_err" style="color:red;  font-size:13px;"></span>
                        </div>

                    </div>

                    <div class="col">
                        Maps <br><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3952458803487!2d77.38694107550029!3d28.617913975672646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5041555554f%3A0x6c59d83bd08b7d6f!2sNettechnocrats%20-%20SEO%20Company%20in%20Noida!5e0!3m2!1sen!2sin!4v1703071892370!5m2!1sen!2sin" width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="buttons pt-4">
                            <a href="#"> Kundenadressbuch</a><br><br>
                            <a href="#" class="btn">+ neuer Kontakt</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <span>Rabatt-Gruppe</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;"> <span>No</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="no"> <span>1</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="1"> <span>2</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" value="2" style="margin:0px 10px;"> <span>3</span>
                    </div>
                    <span class="msg_err" id="rabatt_Gruppe_err" style="color:red;  font-size:13px;"></span>
                </div>
                <div class="row">
                    <div class="col mt-3 d-flex">

                        <span>Zahlung</span> <input class="form-check-input" type="radio" name="Zahlung" style="margin:0px 10px;" value="3"> <span>Vorkasse</span> <input class="form-check-input" type="radio" name="Zahlung" style="margin:0px 10px;"> <span>14</span> <span>Tage netto n. Erhalt der RE</span> <input class="form-check-input" type="radio" name="Zahlung" style="margin:0px 10px;" value="14 Tage netto n. Erhalt der RE"> <span>PayPal </span>
                        <p style="display:flex; margin:0px 30px;"><span> MwSt. Satz</span> <input type="text" class="form-control" name="MwSt_Satz" style="background-color:transparent; width:30px; padding:5px; margin-left:10px; border:1px solid #000;" name="" id=""><span>%</span></p>



                    </div>
                    <span class="msg_err" id="Zahlung_err" style="color:red;  font-size:13px;"></span>
                </div>
                <div class="row">
                    <div class="col">
                        <span>Shop / APP sperren</span> <input class="form-check-input" type="radio" name="Shop_APP" value="ja" style="margin:0px 10px;"> <span>ja</span> <input class="form-check-input" type="radio" name="Shop_APP" style="margin:0px 10px;" value="Zugangsdaten_Shop"> <span>Nein</span> <span>Zugangsdaten Shop / APP ändern</span>
                    </div>
                    <span class="msg_err" id="Shop_APP_err" style="color:red;  font-size:13px;"></span>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <span>Premium B2B – B2C connection</span> <input class="form-check-input" type="radio" name="Premium_connection" value="ja" style="margin:0px 10px;"> <span>ja</span> <input class="form-check-input" type="radio" name="Premium_connection" style="margin:0px 10px;" value="Nein"> <span>Nein</span>
                    </div>
                    <span class="msg_err" id="Premium_connection_err" style="color:red;  font-size:13px;"></span>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Import Bulk Customer starts -->
    <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
        <div class="modal-dialog">


            <form id="contactsImportForm" method="post" enctype="multipart/form-data">
                <div class="modal-content">

                    <div class="modal-header" style="border-bottom: 2px solid #44e1d5;">
                        <h1 class="modal-title fs-5" id="customerModalLabel">Import Files file</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="m-1 pb-2" id="import_success_message" style="color:#44e1d5; font-size:18px; font-weight:600;"></p>

                        <label for="formFile" class="form-label text-center">Import CSV/XLSX file</label>
                        <p> <span class="d-flex"><input style="width:100%; height:50px;" class="form-control" type="file" name="contactsImportFile" id="contactsImportFile" accept=".csv, .xlsx"><i style="font-size:20px; position: relative; left: -40px; top: 15px;" class="fa-solid fa-file-excel"></i></span></p>
                        <p id="ProductsImportFile-err" style="margin-top:1rem; color:red"></p>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn" id="contactsImportButton">Import</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Import Bulk Customer ends -->
    <script>
        $(document).ready(function() {
            // Function to handle form submission

            $('#contactSaveButton').click(function(e) {
                e.preventDefault(); // Prevent the default form submission


                $('#typ_err').text('');
                $('#firm_name_err').text('');
                $('#Straße_err').text('');
                $('#Ort_err').text('');
                $('#PLZ_err').text('');
                $('#Land_err').text('');
                $('#vat_id_err').text('');
                $('#mobile_err').text('');
                $('#password_err').text('');
                $('#email_err').text('');
                $('#Newsletter_err').text('');
                $('#rabatt_Gruppe_err').text('');
                $('#Shop_APP_err').text('');
                $('#Premium_connection_err').text('');

                // Serialize the form data
                var formData = $('form').serialize();

                var token = localStorage.getItem('authToken');
                console.log(token);

                // Check if the token exists
                if (!token) {
                    console.error('Token not found in localStorage');
                    window.location.href = '/api/home';
                    // return;
                }

                // Send AJAX request
                $.ajax({
                    url: '/api/addContactsApi', // Replace with your endpoint URL
                    method: 'POST',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                    },
                    success: function(response) {
                        // Handle success response
                        if (response.success) {
                            console.log(response.success);

                            // $('#AddOffersForm')[0].reset();
                            $('#success_msg').text(response.success);
                        } else if (response.ValidationError) {
                            // Display validation errors in the console
                            console.log(response.ValidationError);

                            displayValidationErrors(response.ValidationError);

                            // $('#error_msg').text('Error: ' + JSON.stringify(response.errors)).css('color', 'red');

                            // You can also update your HTML to show errors in a specific element
                            // $('#error_msg').text('Error: ' + response.errors).css('color', 'red');
                        } else if (response.error) {
                            window.location.href = '/api/home';
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Error saving data:', error);
                        // Optionally, show an error message to the user
                    }
                });

                function displayValidationErrors(errors) {
                    // Display validation errors next to the respective form fields
                    if (errors.typ) {
                        $('#typ_err').text(errors.typ[0]);
                    }
                    if (errors.firm_name) {
                        $('#firm_name_err').text(errors.firm_name[0]);
                    }
                    if (errors.Straße) {
                        $('#Straße_err').text(errors.Straße[0]);
                    }
                    if (errors.Ort) {
                        $('#Ort_err').text(errors.Ort[0]);
                    }
                    if (errors.PLZ) {
                        $('#PLZ_err').text(errors.PLZ[0]);
                    }
                    if (errors.Land) {
                        $('#Land_err').text(errors.Land[0]);
                    }
                    if (errors.vat_id) {
                        $('#vat_id_err').text(errors.vat_id[0]);
                    }
                    if (errors.mobile) {
                        $('#mobile_err').text(errors.mobile[0]);
                    }
                    if (errors.password) {
                        $('#password_err').text(errors.password[0]);
                    }
                    if (errors.email) {
                        $('#email_err').text(errors.email[0]);
                    }
                    if (errors.Newsletter) {
                        $('#Newsletter_err').text('Newsletter is Required');
                    }
                    if (errors.rabatt_Gruppe) {
                        $('#rabatt_Gruppe_err').text('rabatt_Gruppe is Required');
                    }
                    if (errors.Shop_APP) {
                        $('#Shop_APP_err').text('Shop_APP Is Required');
                    }
                    if (errors.Premium_connection) {
                        $('#Premium_connection_err').text('Premium_connection is Required');
                    }
                }
            });


            // getProductCategory ();
            $('#contactsImportButton').on('click', function() {
                $('#import_success_message').text('');
                $('#contactImportFile-err').text('');
                // $('#ProductsImageFile-err').text('');
                // $('#ProductsPdfFile-err').text('');

                var formData = collectFormData();

                // Log form data to the console (for testing)
                console.log('Form Data:', formData);

                // Send the formData to the server using AJAX
                sendDataToServer(formData);
            });

            // Function to collect form data




            function collectFormData() {
                var formData = new FormData($('#contactsImportForm')[0]);
                return formData;
            }

            // Function to display validation errors
            function displayValidationErrors(errors) {
                if (errors.ProductsImportFile) {
                    $('#ProductsImportFile-err').text(errors.contactsImportFile[0]);
                }

            }

            function sendDataToServer(formData) {
                var token = localStorage.getItem('authToken');
                console.log(token);
                console.log('hello');

                // Check if the token exists
                if (!token) {
                    console.error('Token not found in localStorage');
                    window.location.href = '/api/home';
                    return; // exit the function if token is not present
                }



                // $('#import_success_message').text("Please Wait While We are Importing Your Data");

                $.ajax({
                    type: 'POST',
                    url: '/api/contactsImportApi',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'Authorization': 'Bearer ' + token, // include the token in the headers
                    },
                    success: function(response) {
                        // Handle the success response from the server
                        if (response.success) {
                            $('#import_success_message').text(response.success);
                            console.log('Server Response:', response);
                            $('#productsImportForm')[0].reset();
                        }

                        if (response.error) {
                            // Display validation errors next to the respective form fields
                            console.log(response.error);
                        }

                        if (response.ValidationError) {
                            // Display validation errors next to the respective form fields
                            console.log(response.ValidationError);

                            displayValidationErrors(response.ValidationError);
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        try {
                            var errors = JSON.parse(xhr.responseText);
                            $('#import_success_message').text("Not Imported ! Email Address already Taken").css("color", "red");
                            console.error('Validation Errors:', errors);
                        } catch (e) {
                            console.error('Non-JSON response:', xhr.responseText);
                            $('#import_success_message').text("File Size is Too Large.");
                        }
                    }
                });
            }


        });
    </script>





    <!-- plugins:js -->
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