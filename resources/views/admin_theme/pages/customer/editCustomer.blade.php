<!DOCTYPE html>
<html lang="en">

 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Offers</title>
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
   width: 130px;
   height: 130px;
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
     <form id="updateCustomerForm">
      <div class="row pt-3">

       <div class="col-md-2 stretch-card grid-margin">
        <button class="btn updateCustomerButton" type="button" name="saveFormType" value="saveAll">Save</button>
       </div>

      </div>
      <span id="success_msg" style="color:Green"></span>
      <div class="row pt-3">

        <div class="col-md-4">
          <div class="customer-img"><img src="{{url('assets/frontEnd/web/images/profile.png')}}" alt="" srcset="" id="profileImage">
        </div>

       </div>
       <div class="col-md-2"></div>


       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Kundennummer</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" placeholder='#' id="Lieferschein_Nr" name="Lieferschein_Nr"
           value="" /></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Beitrittsdatum</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Lieferdatum" name="Lieferdatum"
            value="" /> <br>
           <span id="Lieferdatum_err" style="color:red;  font-size:13px;"></span>
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
            Kundennummer
           </th>
           <th>

            Kundenname
           </th>
           <th>
            Gesamtbestellungen
           </th>
           <th>
            Kundenrolle
           </th>

           <th></th>

          </tr>


         </thead>
         <tbody>




          <tr class="hidden">
           <td>

            <input type="text" name='inputs[0][POS]' value="" id="customer_sno" /><br>

           </td>
           <td>
            <input type="text" name='inputs[0][Produkt]' value="" id="customer_name"/>
            <br><span id="Produkt_err" style="color:red; font-size:13px;"></span>

           </td>


           <td>

            <input type="text" name='inputs[0][Beschreibung]' value="" id="order_id"/>
            <br><span id="Beschreibung_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>
            <select name="customerRole" id="customerRole">
              <option value="Normal">B2C</option>
              <option value="b2b">B2B</option>
              <option value="supplier">Vendor/Supplier</option>
              <option value="Admin">Admin</option>
            </select>
            <br>
           </td>

           <td>
            <button class="btn updateCustomerButton" type="button" name="saveFormType" value="saveRole">Speichern</button>
           </td>
         </tbody>
        </table>


       </div>
      </div>

      <!-- <button type="submit" class="btn btn-common">Submit</button> -->



      <hr style="border: 1px solid #54606c;" />


      <h3>Andere Informationen</h3>
      <div class="row p-2 m-3">
       <table class="customer-details">
        <tbody>
         <tr>
          <th>Kundenname </th>
          <td>-</td>
          <td>
           <input type="text" value="" name="Kundenname" id="userName" readonly />
          </td>
         </tr>
         <tr>
          <th>Handynummer</th>
          <td>-</td>
          <td>
           <input type="text" value="" name="Handynummer" id="userMobile" readonly />
          </td>
         </tr>
         <tr>
          <th>fester Wohnsitz</th>
          <td>-</td>
          <td>
           <input type="text" value="" name="fester-Wohnsitz" id="delv_address" readonly />
          </td>
         </tr>
         <tr>
          <th>
           Kunden-eMail</th>
          <td>-</td>
          <td>
           <input type="text" value="" name="Kunden-eMail" id="userMail" readonly />
          </td>
         </tr>
         <tr>
          <th>
           <h4> Passwort </h4>
          </th>
         </tr>
         <tr>
          <th>Neues Kennwort </th>
          <td>- <input type="hidden" name="saveLieferschein_Nr" id="saveLieferschein_Nr"></td>
          <td>
            <input class="password" type="password" name="password" value="">
            <span id="password_err" style="color:red;"></span>
          </td>
         </tr>
         <tr>
          <th>Bestätige das Passwort </th>
          <td>-</td>
          <td><input class="password" type="password" name="confirm_password" value=""></td>
         </tr>
        </tbody>
       </table>
      </div>

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
  $('.updateCustomerButton').click(function(e) {
    e.preventDefault(); // Prevent the form from submitting normally
    $('#success_msg').text('');
    $('#password_err').text('');

    var formData = {
      saveLieferschein_Nr: $('#updateCustomerForm input[name="saveLieferschein_Nr"]').val(),
      customerRole: $('#updateCustomerForm select[name="customerRole"]').val(),
      password: $('#updateCustomerForm input[name="password"]').val(),
      password_confirmation: $('#updateCustomerForm input[name="confirm_password"]').val(),
      saveFormType: jQuery(this).val(),
      inputs: []
    };

    console.log(formData);

    // Make AJAX request
    $.ajax({
      type: 'POST',
      url: '/api/updatecustomer',
      data: formData,
      dataType: 'json',
      success: function(response) {
      // Handle success response
      if (response.success) {
        console.log(response.success);
        // $('#updateCustomerForm input[name="password"], #updateCustomerForm input[name="confirm_password').val(''),
        $('#success_msg').text(response.success);
      } else if (response.errors) {
        // Display validation errors in the console
        console.log(response.errors);
        displayValidationErrors(response.errors);

        // $('#error_msg').text('Error: ' + JSON.stringify(response.errors)).css('color', 'red');

        // You can also update your HTML to show errors in a specific element
        // $('#error_msg').text('Error: ' + response.errors).css('color', 'red');
      }
    },
    error: function(xhr, status, error) {
     // Handle error response
     var errors = xhr.responseJSON.errors;
     if (errors) {
      // Display errors in your frontend
      // For example, you can loop through errors and append them to a specific element
      $.each(errors, function(field, messages) {
       // Append error messages to your HTML
       $('#' + field + '_error').text(messages[0]);
      });
     }
    }
   });

   function displayValidationErrors(errors) {
    // Display validation errors next to the respective form fields
    if (errors.password) {
     $('#password_err').text(errors.password[0]);
    }
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

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/profileViewByIdApi/{{$id}}', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
        'Authorization': 'Bearer ' + token,
        },
        success: function(data) {
          // Handle the successful response
          if (data.status) {
            // var join_date = new Date(data.user.created_at);
            // alert(join_date.getTime());
            // alert(data.user.created_at);
            console.log('Data received:', data.user);

            // Update DOM elements with user data
            $('#Lieferschein_Nr, #customer_sno, #saveLieferschein_Nr').val(data.user.id);      // customer ID
            $('#userName, #customer_name').val(data.user.name);
            $('#customerRole').trigger('change');
            $('#updateCustomerForm option[value='+ data.user.role +']').attr('selected','selected'); // for customer role
            $('#userMobile').val(data.user.mobile);
            $('#delv_address').val(data.user.permanent_address ?? '' + ',' + data.user.zipCode ?? '' + ',' + data.user.country ?? '');
            $('#userMail').val(data.user.email);
            $('#order_id').val('Order id : 201, 350');
            
            // Assuming 'profile_picture' is the path to the image file
            var imagePath = data.user.profile_picture;

            if (data.user.profile_picture !='') {
              $('#profileImage').attr('src', imagePath ? '{{ asset("storage/") }}' + '/' +
              imagePath : '{{ asset("assets/frontEnd/web/images/profile.png") }}');
            }

            // for date of joining
            var dateFormat = new Date(data.user.created_at);
            $('#Lieferdatum').val(dateFormat.getFullYear() +'-0'+ dateFormat.getMonth() + '-0'+ dateFormat.getDate());  // Date Of Joining
          }
          else {
            console.log('Data received:', data.errors);
          }
        },

        error: function(xhr, status, error) {
          // Handle specific errors
          if (xhr.status === 401) {
            console.error('Unauthorized: Please check your authentication token.');
          } else {
            console.error('Error:', error);
          }
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
  </script>
 </body>

</html>