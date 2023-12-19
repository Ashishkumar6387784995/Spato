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

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> <!-- Fonts -->

  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/assets/images/favicon.ico') }}">

          
  <link href="{{ asset('theme/multiSelector/css/mobiscroll.javascript.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('theme/multiSelector/js/mobiscroll.javascript.min.js') }}"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->


  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
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



    button {
      display: inline-block;
      margin: 5px 5px 0 0;
      padding: 10px 30px;
      outline: 0;
      border: 0;
      cursor: pointer;
      background: #5185a8;
      color: #fff;
      text-decoration: none;
      font-family: arial, verdana, sans-serif;
      font-size: 14px;
      font-weight: 100;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
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
        <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
          <h2>Admin Dashboard</h2>
          <p>Monday, January 12, 2024</p>
        </div>

        <form id="addProductform" enctype="multipart/form-data">
          <div class="row pt-1">

            <div class="col-md-4 stretch-card grid-margin">
              <button class="btn" type="button" id="saveBtn">Save</button>
            </div>
            <div class="col-md-2 stretch-card grid-margin">
              <button class="btn" id="importBtn">Import CSV</button>
            </div>
            <div class="col-md-2 stretch-card grid-margin">
              <button class="btn" id="exportBtn">Export CSV</button>
            </div>
            <div class="col-md-2 stretch-card grid-margin">
              <button class="btn" id="priceUpdaterBtn">Price Updater</button>
            </div>
          </div>
          <div class="row ">

            <div class="form-check">
              <div class="col stretch-card grid-margin">

                <label class="form-check-label" for="flexRadioDefault1">Shop Produkt</label>
                <input class="form-check-input" type="radio" name="type" id="type" value="Shop Produkt">
                <span id="Shop_Produkt_err"></span>

                <label class="form-check-label" for="flexRadioDefault1">APP Produkt</label>
                <input class="form-check-input" type="radio" name="type" id="type" value="APP Produkt">


                <label class="form-check-label" for="flexRadioDefault1">Produkt intern</label>
                <input class="form-check-input" type="radio" name="type" id="type" value="Produkt intern">
              </div>
              <span id="type_err"></span>
            </div>
          </div>
          <span id="success_message" style="color:green"></span>
          <h4>Produkt Details</h4>
          <div class="row pt-3 add-products-field">




            <div class="col border">
              <div class="row mb-2">
                <div class="col-4">Hersteller</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Hersteller" id="Hersteller">
                  <span id="Hersteller_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Herst. Nr.</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Herst_Nr" id="Herst_Nr">
                  <span id="Herst_Nr_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Lief. Art. Nr</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Lief_Art_Nr" id="Lief_Art_Nr">
                  <span id="Lief_Art_Nr_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Hersteller Artikelnummer</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Hersteller_Artikelnummer" id="Hersteller_Artikelnummer">
                  <span id="Hersteller_Artikelnummer_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Katalog Art. Nummer</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Katalog_Art_Nummer" id="Katalog_Art_Nummer">
                  <span id="Katalog_Art_Nummer_err" style="color:red"></span>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-4">Kategorie </div>
                <!-- <div class="container">
                  <section>
                    <select multiple="multiple" name="myMulti" id="myMulti">
                      <option value="Item 1">Item 1</option>
                      <option value="Item 2">item 2</option>
                      <option value="Item 3">item 3</option>
                      <option value="Item 4">item 4</option>
                      <option value="Item 5">item 5</option>
                      <option value="Item 6">item 6</option>

                    </select>
                  </section>
                </div> -->


                <div style="height:100%" style="padding:0">
                  <label>
                    Select Master Equipment
                    <input mbsc-input id="demo-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                  </label>
                  <select id="demo-multiple-select" name="standardUsed[]" multiple>
                  
                    <option style="heigh:50px; width:300px;">
                     kjsfhdfdglksdf
                    </option>
                    <option style="heigh:50px; width:300px;">
                     kjsfdfgdfghlksdf
                    </option>
                    <option style="heigh:50px; width:300px;">
                     kjsfhdfgdfglksdf
                    </option>
            
                  </select>
                </div>




              </div>
            </div>

            <div class="col border">
              <div class="row mb-2">
                <div class="col-4">VE / VPE</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="VE_VPE" id="VE_VPE">
                  <span id="VE_VPE_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Einheit</div>
                <div class="col-8">
                  <input type="text" class="form-control" name="Einheit" id="Einheit">
                  <span id="VE_VPE_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Rabattcode 1</div>
                <div class="col-8"><input type="text" class="form-control" name="Rabattcode_1" id="Rabattcode_1">
                  <span id="Rabattcode_1_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Rabattcode 2</div>
                <div class="col-8"><input type="text" class="form-control" name="Rabattcode_2" id="Rabattcode_2">
                  <span id="Rabattcode_2_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Rabattcode 3</div>
                <div class="col-8"><input type="text" class="form-control" name="Rabattcode_3" id="Rabattcode_3">
                  <span id="Rabattcode_3_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Preis zzgl. MwSt</div>
                <div class="col-8"><input type="text" class="form-control" name="Preis_zzgl_MwSt" id="Preis_zzgl_MwSt">
                  <span id="Preis_zzgl_MwSt_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Preis inkl. MwSt</div>
                <div class="col-8"><input type="text" class="form-control" name="Preis_inkl_MwSt" id="Preis_inkl_MwSt">
                  <span id="Preis_inkl_MwSt_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Einkausfpreis zzgl. MwSt</div>
                <div class="col-8"><input type="text" class="form-control" name="Einkausfpreis_zzgl_MwSt" id="Einkausfpreis_zzgl_MwSt">
                  <span id="Einkausfpreis_zzgl_MwSt_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Einkaufsrabatt %</div>
                <div class="col-8"><input type="text" class="form-control" name="Einkaufsrabatt" id="Einkaufsrabatt">
                  <span id="Einkaufsrabatt_err" style="color:red"></span>
                </div>
              </div>
            </div>


            <div class="col">
              <div class="row mb-2">
                <div class="col-4">Artikelname</div>
                <div class="col-8"><input type="text" class="form-control" name="Artikelname" id="Artikelname">
                  <span id="Artikelname_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Beschreibung kurz</div>
                <div class="col-8"><input type="text" class="form-control" name="Beschreibung_kurz" id="Beschreibung_kurz">
                  <span id="Beschreibung_kurz_err" style="color:red"></span>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Beschreibung lang</div>
                <div class="col-8"><textarea class="form-control" rows="20" name="Beschreibung_lang" id="Beschreibung_lang"></textarea>
                  <span id="Beschreibung_lang_err" style="color:red"></span>
                </div>

              </div>



            </div>

          </div>
          <div class="row pt-3 add-products-field">
            <h4 class="pb-3">Produkt Spezifikation</h4>
            <div class="col border">
              <div class="row mb-2">
                <div class="col-4">m3/h</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Stichmass (mm)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">kW</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Volt</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Kelvin</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">lm (lumen)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Druckstufe PN</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Material</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Körnung</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Durchmesser (mm)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Radius mm</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
            </div>

            <div class="col border">
              <div class="row mb-2">
                <div class="col-4">Gewicht Kg</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Länge (mm)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Breite (mm)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Höhe (mm)</div>
                <div class="col-8"><input type="text" class="form-control"></div>
              </div>

            </div>


            <div class="col">
              <div class="row mb-2">
                <div class="col-4">Bild JPG1</div>
                <div class="col-8"><input type="text" class="form-control"></div>
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
        </form>


        <!-- Specification starts -->

        <!-- Specification ends -->



      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>

  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->


  <!-- Include jQuery -->


  <!-- Your HTML form -->


  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

  <script>
        mobiscroll.setOptions({
            locale: mobiscroll
            .localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
            theme: 'ios', // Specify theme like: theme: 'ios' or omit setting to use default
            themeVariant: 'light' // More info about themeVariant: https://docs.mobiscroll.com/5-27-0/javascript/select#opt-themeVariant
        });

        mobiscroll.select('#demo-multiple-select', {
            inputElement: document.getElementById(
                'demo-multiple-select-input') // More info about inputElement: https://docs.mobiscroll.com/5-27-0/javascript/select#opt-inputElement
        });
    </script>



  <script>
  



    $(document).ready(function() {
      // Event listener for Save button
      $('#saveBtn').on('click', function() {
        // Collect form data

        $('#Hersteller_err').text('');
        $('#Herst_Nr_err').text('');
        $('#Lief_Art_Nr_err').text('');
        $('#Hersteller_Artikelnummer_err').text('');
        $('#Katalog_Art_Nummer_err').text('');
        $('#Kategorie_err').text('');
        $('#VE_ VPE_err').text('');
        $('#Einheit_err').text('');

        $('#Rabattcode_1_err').text('');
        $('#Rabattcode_2_err').text('');
        $('#Rabattcode_3_err').text('');
        $('#Preis_zzgl_MwSt_err').text('');
        $('#Preis_inkl_MwSt_err').text('');
        $('#Einkausfpreis_zzgl_MwSt_err').text('');
        $('#Einkaufsrabatt_err').text('');
        $('#Artikelname_err').text('');
        $('#Beschreibung_kurz_err').text('');
        $('#Beschreibung_lang_err').text('');


        if (!$('#type').val()) {
          $('#type_err').text('Please select type.');
          return;
        }


        if (!$('#Hersteller').val()) {
          $('#Hersteller_err').text('Please enter Hersteller.');
          return;
        }

        if (!$('#Artikelname').val()) {
          $('#Artikelname_err').text('Please enter Artikelname.');
          return;
        }

        if (!$('#images').val()) {
          $('#images_err').text('Please add Some Images.');
          return;
        }




        var formData = collectFormData();


        // Log form data to the console (for testing)
        console.log('Form Data:', formData);

        // Send the formData to the server using AJAX
        sendDataToServer(formData);
      });

      // Function to collect form data
      function collectFormData() {
        var formData = new FormData($('#addProductform')[0]);

        return formData;
      }

      // Function to send data to the server using AJAX
      function sendDataToServer(formData) {


        $.ajax({
          type: 'POST', // Use POST or GET depending on your server-side implementation
          url: 'addProduct', // Replace with your server endpoint
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            // Handle the success response from the server

            if (response.success) {

              $('#success_message').text(response.success);
              console.log('Server Response:', response);
            }

            if (response.ValidationError) {
              // Display validation errors next to the respective form fields
              console.log(response.ValidationError);
              displayValidationErrors(response.ValidationError);
            }



          },
          error: function(error) {
            // Handle the error response from the server
            console.error('Error:', error);
          }
        });

        function displayValidationErrors(errors) {
          // Display validation errors next to the respective form fields
          if (errors.Hersteller) {
            $('#Hersteller_err').text(errors.Hersteller[0]);
          }
          if (errors.Herst_Nr) {
            $('#Herst_Nr_err').text(errors.Herst_Nr[0]);
          }
          if (errors.Hersteller_Artikelnummer) {
            $('#Hersteller_Artikelnummer_err').text(errors.Hersteller_Artikelnummer[0]);
          }
          if (errors.email) {
            $('#signup_email_err').text(errors.email[0]);
          }
          if (errors.password) {
            $('#signup_password_err').text(errors.password[0]);
          }
          if (errors.password_confirmation) {
            $('#signup_Confirm_password_err').text(errors.password_confirmation[0]);
          }
          if (errors.captcha) {
            $('#signup_captcha_err').text(errors.captcha[0]);
          }
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