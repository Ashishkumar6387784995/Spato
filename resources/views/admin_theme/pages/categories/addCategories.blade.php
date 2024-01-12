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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <style>
  * {
   margin: 0;
   padding: 0;
  }

  #uploadPreview {
   border: 1px solid #000;
   width: 250px;
   height: 250px;
   overflow: hidden;
   background-color: #fff;
  }

  #uploadPreview img {
   min-width: 200px;
   min-height: 200px;
   margin: auto;
   justify-content: center;
   display: flex;
   align-items: center;
   margin-top: 20px;
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
   padding: 0px 15px;
  }

  .showButton {
   width: 250px;
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

  .details {
   display: flex;
   width: 100%;
   justify-content: space-between;
  }

  .details input {
   width: 250px;
  }

  .details input select {
   width: 250px !important;
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
      <p>{{ now()->format('l, F j, Y') }}</p>
      <button class="navbar-toggler" type="button" data-toggle="offcanvas">
       <span class="mdi mdi-menu"></span>
      </button>
     </div>
     <form id="signupForm" method="post" enctype="multipart/form-data">
      <div class="row pt-3">

       <div class="col-md-6 stretch-card grid-margin">
        <button class="btn" type="button" id="saveButton">Save</button>

       </div>
       <div class="col-md-6 stretch-card grid-margin" style="justify-content: end;">
        <a href="{{url('/api/addCategories/'. $role)}}" class="btn">+ neues Kategorie</a>

       </div>
      </div>
      <div class="row pt-3">
       <span id="success_msg" style="color:#44e1d5; font-size:15px; font-weight:600;"></span>
       <div class="col-md-4">
        <div id="uploadPreview"></div>
        <span id="error" style="font-size:15px; font-weight:600;"></span>
       </div>

       <div class="col-md-2"></div>
       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Kategorie-Nr.</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" placeholder='#' id="Kategorie_Nr" name="Kategorie_Nr"
           value="{{$lastCategory}}" readonly />
          </p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Kategorie datum</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Kategorie_datum" name="Kategorie_datum" />
           <br>
           <span id="Angebotsdatum_err" style="color:red;  font-size:13px;"></span>
          </p>
         </div>
        </div>
       </div>

      </div>
      <!-- <div class="row pt-3">

       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">
        <a href="#" class="btn">Kopfzeile Standard</a>
       </div>

       <div class="col stretch-card">
        <a href="#" class="btn">Kopfzeile neu</a>
       </div>
       <div class="col stretch-card">

       </div>
      </div> -->


      <div class="pt-5">
       <div class="table-responsive">
        <table class="table" id="table">
         <thead>
          <tr>
           <th>
            Kategorie Nr.
           </th>
           <th>
            Kategorie Name
           </th>
           <th>
            Kategorie Beschreibung
           </th>
           <th>
            Kategorie Symbol
           </th>
           <th></th>

          </tr>
         </thead>
         <tbody>




          <tr class="hidden">
           <td>

            <input type="text" name='' value="1" id="" placeholder='#' /><br>

           </td>
           <td>
            <input type="text" name='Kategorie_Name' id="Kategorie_Name" placeholder='#' />
            <br><span id="Kategorie_Name_err" style="color:red; font-size:13px;"></span>

           </td>


           <td>

            <input type="text" accept=".jpg,.jpeg,.png" name='Kategorie_Beschreibung' id="Kategorie_Beschreibung"
             placeholder='#' />
            <br><span id="Kategorie_Beschreibung_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>

            <input type="file" id="file" name="imageFile" onchange="validateFileType()" /><br>
           </td>

           <td>
            <button class="btn" type="button">Zurücksetzen</button>
           </td>
         </tbody>
        </table>


       </div>
      </div><br>
      <!-- <button type="submit" class="btn btn-common">Submit</button> -->



      <hr style="border: 1px solid #54606c;" />


      <div class="row pt-3">

       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">

       </div>
       <div class="col stretch-card">
        <a href="#" class="btn">Fußzeile Standard</a>
       </div>

       <div class="col stretch-card">
        <a href="#" class="btn">Fußzeile neu</a>
       </div>
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



  <script>
  var _URL = window.URL || window.webkitURL;

  $("#file").change(function(e) {
   var image, file;
   if ((file = this.files[0])) {
    image = new Image();
    image.onload = function() {
     src = this.src;
     $("#uploadPreview").html('<img src="' + src + '"></div>');
     e.preventDefault();
    };
   }
   image.src = _URL.createObjectURL(file);
  });
  </script>


  <script type="text/javascript">
  function validateFileType() {
   var fileName = document.getElementById("file").value;
   var idxDot = fileName.lastIndexOf(".") + 1;
   var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
   if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
    //TO DO
   } else {
    document.getElementById("uploadPreview").innerText = 'Only jpg/jpeg and png files are allowed!';
    error.style.color = 'red';
   }
  }

  document.getElementById('file').addEventListener('change', function(event) {
   const file = event.target.files[0];

   if (!file) {
    // User canceled file selection
    return;
   }

   let img = new Image();
   img.src = window.URL.createObjectURL(file);

   img.onload = () => {
    if (img.width <= 200 && img.height <= 200) {

     //  document.getElementById("error").innerText = "Image Upload Succesfully";
     //  error.style.color = '#44e1d5';
     // upload logic here
    } else {
     document.getElementById("error").innerText = "Please upload only 200 X 200 image";
     var form = document.getElementById("signupForm");
     form.reset();
     document.getElementById("uploadPreview").innerText = 'No image is select';
     error.style.color = 'red';
    }

    // Release the object URL resources
    window.URL.revokeObjectURL(img.src);
   };

   img.onerror = () => {
    // Handle image loading error, if any
    document.getElementById("uploadPreview").innerText = 'Only jpg/jpeg and png files are allowed!';
    error.style.color = 'red';
    var form = document.getElementById("signupForm");
    form.reset();
   };
  });
  </script>
  <!-- Dynamic table update ends-->





  <script>
  $('#saveButton').click(function(e) {
   e.preventDefault(); // Prevent the form from submitting normally

   $('#Kategorie_Nr_err').text('');
   $('#Kategorie_datum_err').text('');
   $('#Kategorie_Name_err').text('');
   $('#Kategorie_Beschreibung_err').text('');




   // Create a FormData object and append form data to it
   var formData = new FormData(document.getElementById('signupForm'));

   // Log FormData object to the console (for debugging purposes)
   // console.log("FormData:", formData);



   var token = localStorage.getItem('authToken');
   console.log(token);

   // Check if the token exists
   if (!token) {
    console.error('Token not found in localStorage');
    window.location.href = '/api/home';
    // return;
   }



   // Make AJAX request
   $.ajax({
    type: 'POST',
    url: '/api/addCategoriesApi',
    data: formData,
    contentType: false,
    processData: false,
    headers: {
     'Authorization': 'Bearer ' + token,
    },
    success: function(response) {
     // Handle success response
     if (response.success) {
      console.log(response.success);
      // $('#AddOffersForm')[0].reset();
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
       $('#' + field + '-error').text(messages[0]);
      });
     }
    }
   });

   function displayValidationErrors(errors) {
    // Display validation errors next to the respective form fields
    if (errors.Kategorie_Name) {
     $('#Kategorie_Name_err').text(errors.Kategorie_Name[0]);
    }
    if (errors.Ihre_Kundennummer) {
     $('#Ihre_Kundennummer_err').text(errors.Ihre_Kundennummer[0]);
    }
    if (errors['inputs.0.Produkt']) {
     $('#Produkt_err').text('Produkt is Required');
    }
    if (errors['inputs.0.Beschreibung']) {
     $('#Beschreibung_err').text('Beschreibung is Required');
    }
    if (errors['inputs.0.Einheit']) {
     $('#Einheit_err').text('Einheit Is Required');
    }
    if (errors['inputs.0.Einzelpreis']) {
     $('#Einzelpreis_err').text('Einzelpreis is Required');
    }


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


 </body>

</html>