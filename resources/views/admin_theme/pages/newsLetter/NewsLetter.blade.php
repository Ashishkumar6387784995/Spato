<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Newsletter</title>
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
        table tr td a{
            color:#54606c;
        }
        .btn{
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover{
            /* background-color: #54606c; */
            background-color:#54606c;
            color: #fff;
        } 
        p a{
         color:#54606c;
         font-weight:600;
        }
        .newsletter-page a{
            color: #44e1d5 !important;
  border: 1px solid #fcfcfc !important;
  border-radius:5px;
  margin-top:10px;
  text-align:center;
        }
    </style>
</head>

<body>
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

                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                        <a class="btn" href="{{url('api/addNewsLetter/admin')}}">+ neuer Newsletter</a>
                    </div>
                </div>
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                    Produkt auswählen
                    </div>
                </div>
                <span id="success_msg" style="color:green"></span>
                <br>  <br> 


                <table id="dataTable">
                    <tr>
                        <th>Newsletter Nr</th>
                        <th>Newsletterdatum</th>
                        <th>Kunden</th>
                    </tr>
                </table>


{{--
<table id="dataTable">
    <tr>
        <th>Hersteller</th>
        <th>Herst. Nr.</th>
        <th>Artikel Nr.</th>
        <th>Artikel Name</th>
        <th>Kategorie 1</th>
        <th>Preis netto</th>
        <th></th>
    </tr>
    <tr>
        <td>MAITEC</td>
        <td>50</td>
        <td>0020260M</td>
        <td> PE - Schwallwasser Behälter, 1000 ltr.</td>
        <td>Technik</td>
        <td> 1.164,00 €</td>
        <td><a href="">auswählen</a></td>
    </tr>
</table>
<div class="pt-5">
    <p><a class="" href="#">Freitext editieren</a> (Preis, Lieferbedingungen, Transportkosten etc.)ausgewählt AN-2768</p>
    <p><a class="" href="#">PDF hinzufügen</a></p>
    <p>Kundengruppe auswählen</p>
</div>
<div class="row pt-3">

<p>B2C Kunden</p>
<p>B2B Kunden</p>
<p>Lieferanten</p>
<p>Alle</p>
</div>
<div class="pt-5">
    <p><a class="" href="#">Newsletter Vorschau</a></p>
</div>

<div class="row pt-3">
<div class="col-md-4 stretch-card grid-margin">
Newsletter versenden
</div>
</div>

<div class="row pt-3">
<div class="col"><a class="btn" href="#">Produkt</a></div>
<div class="col"><i class="fa-solid fa-arrow-right" style="font-size:50px;"></i></div>
<div class="col"><a class="btn" href="#">Kundengruppe</a></div>
<div class="col"><i class="fa-solid fa-arrow-right" style="font-size:50px;"></i></div>
<div class="col"><a class="btn" href="#">Jetzt versenden</a></div>
</div>



            </div>


        </div>--}}
    </div>
    </div>
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
                url: '/api/newsLetterListingApi', // Replace with the actual endpoint URL
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                success: function(data) {
                    // Handle the successful response
                    if (data.newsLetterNo) {
                        console.log('Data received:', data.newsLetterNo);
                        console.log('User received:', data.user);

                        function populateTable(dataList) {

                            // Iterate through the dataList and add rows to the table
                            $.each(dataList, function(index, item) {
                                var Kunden = '';
                                if (item.Kunden=='All') {
                                    Kunden = 'All';
                                }   else if (item.Kunden=='Normal') {
                                    Kunden = 'B2C';
                                }  else if (item.Kunden=='b2b') {
                                    Kunden = 'B2B';
                                }  else if (item.Kunden=='supplier') {
                                    Kunden = 'Supplier';
                                }
                                $('#dataTable').append(`
                                    <tr>
                                        <td>${item.Newsletter_Nr}</td>
                                        <td>${item.Newsletterdatum}</td>
                                        <td>${Kunden}</td>
                                    </tr>
                                `);
                            });
                        }

                        // Call the function to populate the table with the initial data
                        populateTable(data.newsLetterNo);
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
    <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

    <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>



</body>

</html>