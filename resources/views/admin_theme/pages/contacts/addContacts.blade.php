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
                <div class="" style="border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">
                    <h2>Admin Dashboard</h2>
                    <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">

                    <div class="col-md-2 stretch-card grid-margin">
                        <a href="#" id="contactSaveButton" class="btn">Save</a>
                    </div>

                    <div class="col-md-2 stretch-card grid-margin">

                        <a href="#" class="mt-2">Umsatz 25.067,90 €</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <a href="#" class="mt-2">offene Rechnungen 5.007,90 € l</a>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <a href="#" class="mt-2">laufende Aufträge 18.054,09 €</a>
                    </div>
                </div>
                <span class="msg_err" id="success_msg" style="color:#44e1d5; font-size:20px; font-weight: 700;"></span>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-2">typ</div>
                            <div class="col-4" style="width:100px;">
                                B2B <input class="form-check-input" type="radio" name="typ" value="b2b">
                                B2C <input class="form-check-input" type="radio" name="typ" value="Normal">
                            </div>
                            <span class="msg_err" id="typ_err" style="color:red;  font-size:13px;"></span>
                            <div class="col-6 stretch-card">
                                Kundennummer <input type="text" class="form-control" name="kunden_no" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:5px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col stretch-card pt-3">
                                Firmenname <input type="text" class="form-control" name="firm_name" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; margin-left:25px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col stretch-card pt-3">
                                Ansprechpartner <input class="form-check-input" type="radio" name="" style="margin:0px 10px;" value="Frau"> Frau <input class="form-check-input" type="radio" name="" style="margin:0px 10px;" value="Herr"> Herr <input type="text" class="form-control" aria-describedby="emailHelp" name="Ansprechpartner" style="background-color:transparent; height:5px; border:1px solid black; width:300px;">
                            </div>
                            <span class="msg_err" id="Ansprechpartner_err" style="color:red;  font-size:13px;"></span>
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
                                        <input type="password" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="password">
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
                                        <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;" name="mail">
                                    </div>
                                    <span class="msg_err" id="mail_err" style="color:red;  font-size:13px;"></span>
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
                        <span>Rabatt-Gruppe</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;"> <span>No</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="no"> <span>1</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="1"> <span>2</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" value="2" style="margin:0px 10px;"> <span>3</span> <span>Zahlung</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="3"> <span>Vorkasse</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;"> <span>14</span> <span>Tage netto n. Erhalt der RE</span> <input class="form-check-input" type="radio" name="rabatt_Gruppe" style="margin:0px 10px;" value="14 Tage netto n. Erhalt der RE"> <span>PayPal</span> <span>MwSt. Satz</span> <input type="text" class="form-control" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black; width:2px;" value="PayPal_MwSt_Satz">
                    </div>
                    <span class="msg_err" id="rabatt_Gruppe_err" style="color:red;  font-size:13px;"></span>
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

    <script>
    $(document).ready(function() {
        // Function to handle form submission
        $('#contactSaveButton').click(function(e) {
            e.preventDefault(); // Prevent the default form submission

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
                        console.log(response.dynamicFields);
                        // $('#AddOffersForm')[0].reset();
                        $('#success_msg').text(response.success);
                    } else if (response.errors) {
                        // Display validation errors in the console
                        console.log(response.errors);

                        displayValidationErrors(response.errors);

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
        });

        function displayValidationErrors(errors) {
            // Display validation errors next to the respective form fields
            if (errors.typ) {
                $('#typ_err').text(errors.typ[0]);
            }
            if (errors.Ansprechpartner) {
                $('#Ansprechpartner_err').text(errors.Ansprechpartner[0]);
            }
            if (errors.Straße) {
                $('#Straße_err').text(errors.Straße[0]);
            }
            if (errors.Ort) {
                $('#Ort_err').text('Ort is Required');
            }
            if (errors.Land) {
                $('#Land_err').text('Land Is Required');
            }
            if (errors.vat_id) {
                $('#vat_id_err').text('vat_id is Required');
            }
            if (errors.mobile) {
                $('#mobile_err').text(errors.mobile[0]);
            }
            if (errors.password) {
                $('#password_err').text('password is Required');
            }
            if (errors.mail) {
                $('#mail_err').text('mail Is Required');
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