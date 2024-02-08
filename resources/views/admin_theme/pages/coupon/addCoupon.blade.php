<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gutschein hinzufügen</title>
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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

  .customer-img {
   width: 200px;
   height: 200px;
   background-color: #ffff;
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
  }

  .customer-img img {
   width: 180px;
   height: 180px;
  }

  .btn {
   /* background-color: #54606c; */
   border: 1px solid #404040;
   color: #404040;
   padding: 10px 14px;
   text-decoration: none;
   border-radius: 5px;
  }

  .btn:hover {
   background-color: #404040;
   color: #fff;
  }

  .close {
   color: #404040;
  }

  .stretch-card {
   font-size: 13px;
  }

  .table thead tr th {
   width: 200px;
   background-color: #404040;
   color: #fff;
   border: none;
   padding: 2px;
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
   color: #404040;
  }

  .dynamic-field {
   width: 100%;
   background: transparent;
   border: 1px solid #8F8C8C;
   border-radius: 5px;
  }

  a {
   color: #54606c;
  }

  .table th,
  .table td {
   font-size: 0.85rem;
   padding: -0.0625rem;
  }

  .table td select {
   border: none;
   height: 30px;
   border-radius: 5px;
  }

  .details {
   display: flex;
   width: 100%;
   justify-content: space-between;
  }

  .details input {
   width: 250px;
  }

  .customer-details tbody tr th {
   width: 80px;
  }

  .customer-details tbody tr td:nth-child(2) {
   width: 50px !important;
  }

  .customer-details tbody tr th h4 {
   color: #44e1d5;
   font-size: 20px;
   padding-top: 20px;
   font-weight: 600;
   border-bottom: 1px solid #000;
  }

  .customer-details tbody tr td .password {
   width: 300px;
   height: 30px;
   border: 1px solid #44e1d5;
   background-color: #fff;
   border-radius: 5px;
  }

  @media (min-width: 481px) and (max-width: 767px) {
   .details input {
    width: 170px;
   }
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
     <div class="" style="border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">
      <h2>Admin Dashboard</h2>
      <p>Monday, January 12, 2024</p>

      <button class="navbar-toggler" type="button" data-toggle="offcanvas">
       <span class="mdi mdi-menu"></span>
      </button>
     </div>
     <form id="saveCouponForm">
      <div class="row pt-3">

       <div class="col-md-2 stretch-card grid-margin">
        <button class="btn saveCouponButton" type="button" name="saveFormType" value="saveAll">Save</button>
       </div>

      </div>
      <span class="hideErrors" id="success_msg" style="color:Green"></span>
      <div class="row pt-3">

       <div class="col-md-4">
        <div class="customer-img"><img src="{{url('assets/frontEnd/web/images/Gutscheincodes.png')}}" alt="" srcset=""
          id="profileImage">
        </div>

       </div>
       <div class="col-md-2"></div>


       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Gutscheincode</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" value="{{$couponCode}}"  placeholder='#' id="Gutscheincode" name="Gutscheincode" value="" readonly/></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Gültig ab</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Gültig_ab" name="Gültig_ab" value="" />
           <br>
           <span class="hideErrors" id="Gültig_ab_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>


       <div class="details">
         <div class="field">
          <p>Bis gültig</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Bis_gültig" name="Bis_gültig" value="" />
           <br>
           <span class="hideErrors" id="Bis_gültig_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>
       </div>
      </div>

      <div class="row pt-3">

       <div class="col-md-4">
        <!-- <h4>Lieferschein-Nr. <a href="#"></a></h4> -->
       </div>
       <div class="col-md-3 stretch-card grid-margin">
        <a href="#" class="btn">Kopfzeile Standard</a>
       </div>
       <div class="col-md-2 stretch-card grid-margin">
        <a href="#" class="btn">Kopfzeile neu</a>
       </div>
       <!-- <div class="col-md-2 " > </div> -->
       <div class="col-md-2 "> </div>

      </div>




      <div class="form-group col-lg-3" style="display:none">
       <input type="text" name="jobRequestNo" class="form-control" id="firstname" value="">
       <label for="firstname">Job Request No</label>
      </div>



      <div class="">
       <div class="table-responsive">
        <table class="table" id="table">
         <thead>
          <tr>
           <th>
           Gutscheincode
           </th>
           <th>
           Typ (€ / %)
           </th>
           <th>
           Rate
           </th>
           <th>
           Mindestbetrag
           </th>

           <th>Gutscheinstatus</th>

          </tr>


         </thead>
         <tbody>




          <tr class="hidden">
           <td>
            <input type="text" placeholder="#" name='Gutscheincode' value="{{$couponCode}}" readonly/><br>
           </td>

           <td>
           <select name="Typ" id="Typ">
             <option value="€">€</option>
             <option value="%">%</option>
            </select>
           </td>


           <td>
            <input type="text" placeholder="#" name='Rate' value="" />
            <br><span class="hideErrors" id="Rate_err" style="color:red;  font-size:13px;"></span>
           </td>

           <td>
            <input type="text" placeholder="#" name='Mindestbetrag' value="" />
            <br><span class="hideErrors" id="Mindestbetrag_err" style="color:red; font-size:13px;"></span>
           </td>

           <td>
              <select name="Gutscheinstatus" id="Gutscheinstatus">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
              </select>

              <br><span class="hideErrors" id="Gutscheinstatus_err" style="color:red;  font-size:13px;"></span>
           </td>
         </tbody>
        </table>


       </div>
      </div>

      <!-- <button type="submit" class="btn btn-common">Submit</button> -->



      <hr style="border: 1px solid #54606c;" />


     
      <div class="row pt-3">

       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">

       </div>
       <!-- <div class="col stretch-card ">
        <a href="#" class="btn">Fußzeile Standard</a>
       </div> -->

       <!-- <div class="col stretch-card">
        <a href="#" class="btn">Fußzeile neu</a>
       </div> -->
       <div class="col stretch-card">

       </div>
      </div>
     </form>

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



  <!-- Dynamic table update ends-->

  <script>
  $('.saveCouponButton').click(function(e) {
    e.preventDefault(); // Prevent the form from submitting normally
    $('.hideErrors').text('');

    var formData = new FormData(document.getElementById('saveCouponForm'));
    console.log(formData);

    // Make AJAX request
    $.ajax({
    type: 'POST',
    url: '/api/addcouponApi',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function(response) {
      // Handle success response
      if (response.success) {
        console.log(response.success);
        $('#success_msg').text(response.success);
        
        // Delay the page reload for 2 seconds (2000 milliseconds)
        setTimeout(function() {
          location.reload(true);
        }, 2000);
      } else if (response.ValidationError) {
        // Display validation errors in the console
        console.log(response.ValidationError);
        displayValidationErrors(response.ValidationError);
      }
    },
    error: function(xhr, status, error) {
      console.log(response.error);
    }
   });

   function displayValidationErrors(errors) {
    // Display errors in your frontend
      // For example, you can loop through errors and append them to a specific element
      $.each(errors, function(field, messages) {
       // Append error messages to your HTML
       $('#' + field + '_err').text(messages[0]);
      });
    }
  });
  </script>



  <script>
    $(document).ready(function() {
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        return; // Stop further execution if the token is missing
      }
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
  </script>
 </body>

</html>