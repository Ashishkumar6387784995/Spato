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
          

            <div class="container mt-5">
        <form id="addProductForm" enctype="multipart/form-data">

            <h1 style="text-align:center;">Add Products</h1>

            <span id="success_message" style="color:green"></span>

            <div class="form-group">
                <label for="productName">Product Category:</label>
                <!-- <input type="text" class="form-control" id="productCategory" name="productCategory" value="{{old('productCategory')}}" required> -->
                <select>
                    <option>ABC</option>
                    <option>DEF</option>
                    <option>GHI</option>

                </select>
                <span id="productName_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" class="form-control" id="productName" name="productName" value="{{old('productName')}}" required>
                <span id="productName_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Quantity:</label>
                <input type="text" class="form-control" id="productQuantity" name="productQuantity" value="{{old('productQuantity')}}" required>
                <span id="productQuantity_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Rate (Normal Users):</label>
                <input type="text" class="form-control" id="productRateForNormalUsers" name="productRateForNormalUsers" value="{{old('productRateForNormalUsers')}}" required>
                <span id="productRateForNormalUsers_err" style="color:red"></span>

            </div>

            <div class="form-group">
                <label for="productName">Product Rate (B2B):</label>
                <input type="text" class="form-control" id="productRateForB2BUsers" name="productRateForB2BUsers" value="{{old('productRateForB2BUsers')}}" required>
                <span id="productRateForB2BUsers_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Rate (B2C):</label>
                <input type="text" class="form-control" id="productRateForB2CUsers" name="productRateForB2CUsers" value="{{old('productRateForB2CUsers')}}" required>
                <span id="productRateForB2CUsers_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productDescription">Product Description:</label>

                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                   <span id="description_err" style="color:red"></span>

            </div>



            <div class="form-group">
                <label for="productImage">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" value="{{old('productRateForB2CUsers')}}">
                <span id="image_err" style="color:red"></span>
            </div>

            <button type="button" class="btn btn-primary" id="addProductButton">Add Product</button>
        </form>
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