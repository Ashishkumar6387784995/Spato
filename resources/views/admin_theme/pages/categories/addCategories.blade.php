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
     <form id="signupForm" method="post">
      <div class="row pt-3">

       <div class="col-md-2 stretch-card grid-margin">
        <button class="btn" type="button" id="saveButton">Save</button>

       </div>

      </div>
      <span id="success_msg" style="color:Green; font-size:20px;"></span>
      <div class="row pt-3">

       <div class="col-md-4">
        <div id="uploadPreview"></div>
        <p class="warning" style="color:#404040; font-weight:600;">Upload only in 200 x 200 size image</p>
       </div>

       <div class="col-md-2"></div>
       <div class="col-md-6">
        <div class="details">
         <div class="field">
          <p>Kategorie-Nr.</p>
         </div>
         <div class="inputs">
          <input class="dynamic-field" type="text" placeholder='#' id="Kategorie_Nr" name="Kategorie_Nr"
           value="KA - 1357" /></p>
         </div>
        </div>

        <div class="details">
         <div class="field">
          <p>Kategorie datum</p>
         </div>
         <div class="inputs">
          <p><input class="dynamic-field" type="date" placeholder='#' id="Kategoriedatum" name="Kategoriedatum"
            value="{{ now()->format('d-m-Y') }}" /> <br>
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
            Kategorie Ausweis
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

            <input type="text" name='inputs[0][POS]' value="1" id="sno" placeholder='#' /><br>

           </td>
           <td>
            <input type="text" name='inputs[0][Produkt]' placeholder='#' />
            <br><span id="Produkt_err" style="color:red; font-size:13px;"></span>

           </td>


           <td>

            <input type="text" name='inputs[0][Beschreibung]' placeholder='#' />
            <br><span id="Beschreibung_err" style="color:red;  font-size:13px;"></span>

           </td>
           <td>

            <input type="file" id="file" accept=".jpg,.jpeg,.png" onchange="validateFileType()" /><br>
           </td>

           <td>
            <button class="btn">Zurücksetzen</button>
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
    alert("Only jpg/jpeg and png files are allowed!");
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
     alert(`Nice, image is the right size. It can be uploaded`);
     // upload logic here
    } else {
     alert(
      `Sorry, this image doesn't look like the size we wanted. It's ${img.width} x ${img.height}, but we require a 200 x 200 size image.`
     );

     var form = document.getElementById("signupForm");
     form.reset();
     document.getElementById("uploadPreview").innerText = 'No image is select';
    }

    // Release the object URL resources
    window.URL.revokeObjectURL(img.src);
   };

   img.onerror = () => {
    // Handle image loading error, if any
    alert(`Error loading the image.`);
   };
  });
  </script>
  <!-- Dynamic table update ends-->

  <!-- <script>
  $('#saveButton').click(function(e) {
   e.preventDefault(); // Prevent the form from submitting normally

   $('#Angebotsdatum_err').text('');
   $('#Ihre_Kundennummer_err').text('');
   $('#Produkt_err').text('');
   $('#Beschreibung_err').text('');

   $('#Einheit_err').text('');
   $('#Einzelpreis_err').text('');

   var formData = {
    Angebots_Nr: $('#AddOffersForm input[name="Angebots_Nr"]').val(),
    Angebotsdatum: $('#AddOffersForm input[name="Angebotsdatum"]').val(),
    Referenz: $('#AddOffersForm input[name="Referenz"]').val(),
    Ihre_Kundennummer: $('#AddOffersForm select[name="Ihre_Kundennummer"]').val(),
    gesamt_netto: $('#AddOffersForm input[name="gesamt_netto"]').val(),
    zzgl_Umsatzsteuer: $('#AddOffersForm input[name="zzgl_Umsatzsteuer"]').val(),
    Gesamtbetrag_brutto: $('#AddOffersForm input[name="Gesamtbetrag_brutto"]').val(),
    inputs: []
   };

   $('#table tbody tr').each(function(index) {
    console.log("Processing row " + index);
    var inputRow = {
     POS: $(this).find('input[name^="inputs[' + index + '][POS]"]').val(),
     Produkt: $(this).find('input[name^="inputs[' + index + '][Produkt]"]').val(),
     Beschreibung: $(this).find('input[name^="inputs[' + index + '][Beschreibung]"]').val(),
     Menge: $(this).find('input[name^="inputs[' + index + '][Menge]"]').val(),
     Einheit: $(this).find('input[name^="inputs[' + index + '][Einheit]"]').val(),
     Einzelpreis: $(this).find('input[name^="inputs[' + index + '][Einzelpreis]"]').val(),
     Rabatt: $(this).find('input[name^="inputs[' + index + '][Rabatt]"]').val(),
     Gesamtpreis: $(this).find('input[name^="inputs[' + index + '][Gesamtpreis]"]').val(),
    };
    formData.inputs.push(inputRow);
   });

   console.log(formData);

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
    url: '/api/addOfferApi',
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
    if (errors.Angebotsdatum) {
     $('#Angebotsdatum_err').text(errors.Angebotsdatum[0]);
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



  <script>
  $(document).one('click', '.showButton', function() {
   var baseUrl = window.location.origin;
   $.ajax({
    type: 'get',
    url: baseUrl + '/api/B2CUserDetails',
    dataType: 'json',
    success: function(response) {
     // Handle success response
     if (response.success) {
      var ddl = $("#Ihre_Kundennummer");
      ddl.empty(); // Consider whether you want to keep this line or not
      var dataArray = response.success;

      // Dynamically set the loop limit based on the array length
      for (var i = 0; i < dataArray.length; i++) {
       ddl.append($("<option></option>").val(dataArray[i].id).text(dataArray[i].id));
      }

      // Attach a change event handler to the dropdown
      ddl.on('change', function() {

       var selectedUser = $(this).val();
       // Log the value of the selected item when it changes
       console.log("Selected item value:", selectedUser);




       $.ajax({
        type: 'get',
        url: baseUrl + '/api/selectedB2CUserDetails/' + selectedUser,
        dataType: 'json',
        success: function(response) {
         // Handle success response
         if (response.success) {

          console.log(response.success[0].email);
          $("#customer_email").val(response.success[0].email);
          $("#customer_Email").text(response.success[0].email);
          $("#customer_Contact").text(response.success[0].mobile);
          $("#customer_Name").text(response.success[0].name);



          // Dynamically set the loop limit based on the array length

         }
        },
       });




      });
     }
    },
   });


  });

  // console.log("Selected item value:", $(this).val());
  </script>


  <script>
  $('#emailSend').click(function(e) {
   e.preventDefault();

   // Get the values from the form
   var formData = {
    Angebots_Nr: $('#AddOffersForm input[name="Angebots_Nr"]').val(),

    email: $('#AddOffersForm input[name="customer_email"]').val(),

   }

   console.log(formData);

   const baseUrl = window.location.origin;

   $.ajax({
    type: 'post',
    url: baseUrl + '/api/sendOfferMailsToB2C/',
    data: formData,

    success: function(response) {
     // Handle success response
     if (response.success) {
      console.log(response.success);
      $('#AddOffersForm')[0].reset();
      $('#success_msg').text(response.success);
      // Add any additional success handling here
     }

     if (response.error) {
      console.log(response.error);
      // Add any error handling here
     }
    },
    error: function(xhr, textStatus, errorThrown) {
     console.error('AJAX Request Failed: ', textStatus, errorThrown);
     // Handle AJAX errors here
    },
   });
  });
  </script> -->





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