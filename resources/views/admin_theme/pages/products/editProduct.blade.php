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
        .btn{
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

.add-products-field input{
    /* height:5px; */
    padding:5px;
}
.border{
    border-right: 1px solid #44e1d5 !important;
}
.row .col .row{
    padding:5px 0px;
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


    @include('admin_theme/Partial/navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


        @include('admin_theme/Partial/sidebar')



        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="" style="border-bottom: 2px solid #44e1d5;">
                    <h2>Admin Dashboard</h2>
                    <p>Monday, January 12, 2024</p>
                </div>
                <div class="row pt-3">

                    <div class="col-md-4 stretch-card grid-margin">
                    <a href="#" class="btn">Save</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin">
                    <a href="#" class="btn">Import CSV</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin">
                    <a href="#" class="btn">Export CSV</a>
                    </div>
                    <div class="col-md-2 stretch-card grid-margin">
                    <a href="#" class="btn">Price Updater</a>
                    </div>
                </div>
                <div class="row pt-3 add-products-field">

                  
                    <div class="col border">
                        <div class="row mb-2">
                            <div class="col-4">m3/h</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Stichmass (mm)</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">kW</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Volt</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Kelvin</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">lm (lumen)</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Druckstufe PN</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Material</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Körnung</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Durchmesser (mm)</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Radius mm</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                    </div>

                    <div class="col border">
                        <div class="row mb-2">
                            <div class="col-4">Gewicht Kg</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Länge (mm)</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Breite (mm)</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Höhe (mm)</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        
                    </div>


                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-4">Bild JPG1</div>
                            <div class="col-8"><input type="text" class="form-control" ></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Bild JPG2</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Bild JPG3</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Bild JPG4</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Anleitung / Tech Info 1 PDF</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Anleitung / Tech Info 2 PDF</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">Anleitung / Tech Info 3 PDF</div>
                            <div class="col-8"><input type="text" class="form-control"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                bootstrapdash.com 2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                    admin template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
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



</body>

</html>