<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spato Admin Panel</title>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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

        .btn {
            /* background-color: #54606c; */
            border: 1px solid #54606c;
            color: #54606c;
            padding: 10px 14px;
            text-decoration: none;
            border-radius: 5px;
        }

        .form-check-input[type="radio"] {
            margin-left: 2rem;
        }

        .add-products-field input {
            /* height:5px; */
            padding: 5px;
        }

        .border {
            border-right: 1px solid #44e1d5 !important;
        }

        .row .col .row {
            padding: 5px 0px;
        }   
        .hide{
            display: none;
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
                <!-- <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p> -->
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


        @if($role=="admin")
        <div class="main-panel " id="adminDashboard">
            <div class="content-wrapper">
                <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
                    <h2>Admin Dashboard</h2>
                    <p>Monday, January 12, 2024</p>
                    {{$role}}
                  
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">12</div>
                            <div class="col-10">Neue Mails</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Neue Kunden</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-10">Neue Lieferanten</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">35</div>
                            <div class="col-10">Neue Aufträge</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">3</div>
                            <div class="col-10">Neue Claim`s</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">1</div>
                            <div class="col-10">Neue B2C B2B Connection Anfragen</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-10">Top 10 Produkte klicks</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col"></div>
                            <div class="col-10">Top 5 Produkte sales</div>
                        </div>


                    </div>
                    <div class="col-6">
                        <div id="chart_div" style="width: 485px; height: 400px; border-radius:5px;"></div>
                    </div>
                </div>



            </div>
        </div>


        @elseif($role="b2b")
        <div class="main-panel " id="b2bDashboard">
            <div class="content-wrapper">
                <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
                    <h2>Herzlich willkommen Firma Pool Bau Profi</h2>
                    <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Ihre Mails</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Neue Produkte</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">0</div>
                            <div class="col-10">Ihre Claim`s</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">3</div>
                            <div class="col-10">Ihre B2C B2B Connection Anfragen</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Top Special Angebote</div>
                        </div>



                    </div>
                    <div class="col-6">
                        <div id="chart_div" style="width: 485px; height: 400px; border-radius:5px;"></div>
                    </div>
                </div>



                <div class="top-products">
                    <p>Top 10 Produkte klicks</p>
                    <div class="row">
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>

                    </div>
                </div>
                <div class="top-products">
                    <p>Top 5 Produkte sales</p>
                    <div class="row">
                    </div>
                </div>
            </div>

            @elseif($role="supplier")
        <div class="main-panel " id="b2bDashboard">
            <div class="content-wrapper">
                <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
                    <h2>Herzlich willkommen Firma Pool Bau Profi</h2>
                    <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Ihre Mails</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Neue Produkte</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">0</div>
                            <div class="col-10">Ihre Claim`s</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">3</div>
                            <div class="col-10">Ihre B2C B2B Connection Anfragen</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col" style="font-weight:600; color:#000; ">2</div>
                            <div class="col-10">Top Special Angebote</div>
                        </div>



                    </div>
                    <div class="col-6">
                        <div id="chart_div" style="width: 485px; height: 400px; border-radius:5px;"></div>
                    </div>
                </div>



                <div class="top-products">
                    <p>Top 10 Produkte klicks</p>
                    <div class="row">
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>
                        <div class="col" style="margin:10px;"><img src="{{ asset('assets/frontEnd/web/images/product-2.png') }}" alt="" srcset="" style="width:50px; height:50px; border:1px solid #000; "></div>

                    </div>
                </div>
                <div class="top-products">
                    <p>Top 5 Produkte sales</p>
                    <div class="row">
                    </div>
                </div>
            </div>

            @endif
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



    <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

    <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>


    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Age', 'Weight'],
                [8, 12],
                [4, 5.5],
                [11, 14],
                [4, 5],
                [3, 3.5],
                [6.5, 7]
            ]);

            var options = {
                title: 'Age vs. Weight comparison',
                legend: 'none',
                crosshair: {
                    trigger: 'both',
                    orientation: 'both'
                },
                trendlines: {
                    0: {
                        type: 'polynomial',
                        degree: 3,
                        visibleInLegend: true,
                    }
                }
            };

            var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Retrieve the authentication token from local storage
            var storedToken = localStorage.getItem('authToken');

            // Check if the token is present
            if (storedToken) {
                console.log('Token found:', storedToken);

                // Make an AJAX request to obtain the user's role
                // Replace the URL with the actual endpoint you want to use
                // Adjust headers or other parameters as needed
                $.ajax({
                    url: '/api/userDetails', // Replace with your actual API endpoint
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + storedToken,
                        // Add other headers as needed
                    },
                    success: function(response) {
                        // Handle the response, which may contain the user's role
                        console.log('User Details:', response.user['role']);

                        if(response.user['role'] === 'Admin'){
                            document.querySelector('#b2bSidebar').style.display = 'none';
                            document.querySelector('#b2bDashboard').classList.add('hide');

                        }
                        else{
                            document.querySelector('#adminSidebar').style.display = 'none';
                            document.querySelector('#adminDashboard').classList.add('hide');
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching user role:', error);
                    }
                });
            } else {
                console.log('Token not found');
            }
        });
    </script>

</body>

</html>