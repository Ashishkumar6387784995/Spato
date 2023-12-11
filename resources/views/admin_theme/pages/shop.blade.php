<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
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
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        @include('/Partial/navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            @include('/Partial/sidebar')



            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="">
                        <h3 class="">
                            {{-- <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-note"></i> --}}
                            <marquee> School Website - Authentication Module.</marquee>
                            {{-- </h3>          --}}
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">

                                </ul>
                            </nav>
                    </div>


                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="">Our Services</h3>

                                    <div class="row mt-4">
                                        <div class="col-md-2 col-sm-5 pe-1">
                                            <img src="{{ asset('images/image1.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover; " alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                            <img src="{{ asset('images/image2.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>

                                        </div>
                                        <div class="col-md-2 col-sm-5 pe-1">
                                            <img src="{{ asset('images/image3.PNG') }}" class="transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>


                                            </div>
                                            <img src="{{ asset('images/image4.PNG') }}" class="transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                        </div>
                                        <div class="col-md-2  col-sm-5 pe-1">
                                            <img src="{{ asset('images/image5.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                            <img src="{{ asset('images/image6.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                        </div>
                                        <div class="col-md-2   col-sm-5 pe-1">
                                            <img src="{{ asset('images/image7.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                            <img src="{{ asset('images/image8.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                        </div>
                                        <div class="col-md-2   col-sm-5 pe-1">
                                            <img src="{{ asset('images/image9.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                            <img src="{{ asset('images/image10.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                        </div>
                                        <div class="col-md-2  col-sm-5 pe-1">
                                            <img src="{{ asset('images/image11.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                            <img src="{{ asset('images/image12.PNG') }}" class=" transform-hover"
                                                style="height: 130px; object-fit: cover;" alt="image">
                                            <div class="mb-4 mt-2 mx-3">
                                                <div class="" style="color: red">AirPod AirPod </div>
                                                <div class="mb-1">UCN - 1200</div>
                                                {{-- <button class="btn  mb-3">Link</button> --}}
                                                <button type="button" class="btn btn-primary btn-sm  mb-3">Buy
                                                    Now</button>

                                            </div>
                                        </div>
                                    </div>


                                    {{-- <div class="d-flex mt-5 align-items-top">
                      <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image">
                      <div class="mb-0 flex-grow">
                        <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                        <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                      </div>
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Project Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Due Date </th>
                            <th> Progress </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Messsy Adam </td>
                            <td> Jul 01, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> John Richards </td>
                            <td> Apr 12, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Peter Meggik </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Edward </td>
                            <td> May 03, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Ronald </td>
                            <td> Jun 05, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> --}}
                    {{-- <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-white">Todo</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                      <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Meeting with Alisa </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Call John </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Create invoice </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Print Statements </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                          </div>
                          <i class="remove mdi mdi-close-circle-outline"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    {{-- <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> --}}

                    @include('/Partial/footer')

                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/chart.js/Chart.min.js"></script>
        <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- End custom js for this page -->
</body>

</html>
