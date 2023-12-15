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

    .drop {
      position: relative;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .drop.open {
      z-index: 100;
    }

    .drop.open .drop-screen {
      z-index: 100;
      display: block;
    }

    .drop.open .drop-options {
      z-index: 200;
      max-height: 200px;
    }

    .drop.open .drop-display {
      z-index: 200;
      border-color: #465;
    }

    .drop select {
      display: none;
    }

    .drop .drop-screen {
      position: fixed;
      width: 100%;
      height: 100%;
      background: #000;
      top: 0px;
      left: 0px;
      opacity: 0;
      display: none;
      z-index: 1;
    }

    .link {
      text-align: center;
      margin: 20px 0px;
      color: #8CACD7;
    }


    .drop .drop-display {
      position: relative;
      padding: 0px 20px 5px 5px;
      border: 4px solid #444;
      width: 100%;
      background: #FFF;
      z-index: 1;
      margin: 0px;
      font-size: 16px;
      min-height: 58px;
    }

    .drop .drop-display:hover:after {
      opacity: 0.75;
    }

    .drop .drop-display:after {
      font-family: 'Material Icons';
      content: "\e5c6";
      position: absolute;
      right: 10px;
      top: 12px;
      font-size: 24px;
      color: #444;
    }

    .drop .drop-display .item {
      position: relative;
      display: inline-block;
      border: 2px solid #333;
      margin: 5px 5px -4px 0px;
      padding: 0px 25px 0px 10px;
      overflow: hidden;
      height: 40px;
      line-height: 36px;
    }

    .drop .drop-display .item .btnclose {
      color: #444;
      position: absolute;
      font-size: 16px;
      right: 5px;
      top: 10px;
      cursor: pointer;
    }

    .drop .drop-display .item .btnclose:hover {
      opacity: 0.75;
    }

    .drop .drop-display .item.remove {
      -webkit-animation: removeSelected 0.2s, hide 1s infinite;
      animation: removeSelected 0.2s, hide 1s infinite;
      -webkit-animation-delay: 0s, 0.2s;
      animation-delay: 0s, 0.2s;
    }

    .drop .drop-display .item.add {
      -webkit-animation: addSelected 0.2s;
      animation: addSelected 0.2s;
    }

    .drop .drop-display .item.hide {
      display: none;
    }

    .drop .drop-options {
      background: #444;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
      position: absolute;
      width: 100%;
      max-height: 0px;
      overflow-y: auto;
      transition: all 0.25s linear;
      z-index: 1;
    }

    .drop .drop-options a {
      display: block;
      height: 40px;
      line-height: 40px;
      padding: 0px 20px;
      color: white;
      position: relative;
      max-height: 40px;
      transition: all 1s;
      overflow: hidden;
    }

    .drop .drop-options a:hover {
      background: #465;
      cursor: pointer;
    }

    .drop .drop-options a.remove {
      -webkit-animation: removeOption 0.2s;
      animation: removeOption 0.2s;
      max-height: 0px;
    }

    .drop .drop-options a.add {
      -webkit-animation: addOption 0.2s;
      animation: addOption 0.2s;
    }

    .drop .drop-options a.hide {
      display: none;
    }

    @-webkit-keyframes pop {
      from {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes pop {
      from {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes removeOption {
      from {
        max-height: 40px;
      }

      to {
        max-height: 0px;
      }
    }

    @keyframes removeOption {
      from {
        max-height: 40px;
      }

      to {
        max-height: 0px;
      }
    }

    @-webkit-keyframes addOption {
      from {
        max-height: 0px;
      }

      to {
        max-height: 40px;
      }
    }

    @keyframes addOption {
      from {
        max-height: 0px;
      }

      to {
        max-height: 40px;
      }
    }

    @-webkit-keyframes removeSelected {
      from {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      to {
        -webkit-transform: scale(0);
        transform: scale(0);
      }
    }

    @keyframes removeSelected {
      from {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      to {
        -webkit-transform: scale(0);
        transform: scale(0);
      }
    }

    @-webkit-keyframes addSelected {
      from {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes addSelected {
      from {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes hide {

      from,
      to {
        max-height: 0px;
        max-width: 0px;
        padding: 0px;
        margin: 0px;
        border-width: 0px;
      }
    }

    @keyframes hide {

      from,
      to {
        max-height: 0px;
        max-width: 0px;
        padding: 0px;
        margin: 0px;
        border-width: 0px;
      }
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

        <form id="addProductform" enctype="multipart/form-data">
          <div class="row pt-3">

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
          <div class="row pt-3">
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
                <div class="container">
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
                <div class="col-8"><textarea class="form-control" rows="22" name="Beschreibung_lang" id="Beschreibung_lang"></textarea>
                  <span id="Beschreibung_lang_err" style="color:red"></span>
                </div>

              </div>

              <div class="row mb-2">
                <div class="col-4">Images</div>
                <input type="file" name="images[]" id="images" multiple>
                <span id="images_err" style="color:red"></span>
              </div>

            </div>
          </div>
      </div>
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


  <!-- Include jQuery -->


  <!-- Your HTML form -->


  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
  <script>
  jQuery.noConflict();
  (function($) {
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
  })(jQuery);
</script>


  <script type="text/javascript" src="{{ asset('theme/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/jquery.cookie.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/off-canvas.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/hoverable-collapse.js') }}"></script>
  <!-- <script type="text/javascript" src="{{ asset('theme/assets/js/misc.js') }}"></script> -->

  <script type="text/javascript" src="{{ asset('theme/assets/js/dashboard.js') }}"></script>
  <script type="text/javascript" src="{{ asset('theme/assets/js/todolist.js') }}"></script>





  <script>
    //Varun Dewan 2019
    var $ = {
      get: function(selector) {
        var ele = document.querySelectorAll(selector);
        for (var i = 0; i < ele.length; i++) {
          this.init(ele[i]);
        }
        return ele;
      },
      template: function(html) {
        var template = document.createElement('div');
        template.innerHTML = html.trim();
        return this.init(template.childNodes[0]);
      },
      init: function(ele) {
        ele.on = function(event, func) {
          this.addEventListener(event, func);
        }
        return ele;
      }
    };

    //Build the plugin
    var drop = function(info) {
      var o = {
        options: info.options,
        selected: info.selected || [],
        preselected: info.preselected || [],
        open: false,
        html: {
          select: $.get(info.selector)[0],
          options: $.get(info.selector + ' option'),
          parent: undefined,
        },
        init: function() {
          //Setup Drop HTML
          this.html.parent = $.get(info.selector)[0].parentNode
          this.html.drop = $.template('<div class="drop"></div>')
          this.html.dropDisplay = $.template('<div class="drop-display">Display</div>')
          this.html.dropOptions = $.template('<div class="drop-options">Options</div>')
          this.html.dropScreen = $.template('<div class="drop-screen"></div>')

          this.html.parent.insertBefore(this.html.drop, this.html.select)
          this.html.drop.appendChild(this.html.dropDisplay)
          this.html.drop.appendChild(this.html.dropOptions)
          this.html.drop.appendChild(this.html.dropScreen)
          //Hide old select
          this.html.drop.appendChild(this.html.select);

          //Core Events
          var that = this;
          this.html.dropDisplay.on('click', function() {
            that.toggle()
          });
          this.html.dropScreen.on('click', function() {
            that.toggle()
          });
          //Run Render
          this.load()
          this.preselect()
          this.render();
        },
        toggle: function() {
          this.html.drop.classList.toggle('open');
        },
        addOption: function(e, element) {
          var index = Number(element.dataset.index);
          this.clearStates()
          this.selected.push({
            index: Number(index),
            state: 'add',
            removed: false
          })
          this.options[index].state = 'remove';
          this.render()
        },
        removeOption: function(e, element) {
          e.stopPropagation();
          this.clearStates()
          var index = Number(element.dataset.index);
          this.selected.forEach(function(select) {
            if (select.index == index && !select.removed) {
              select.removed = true
              select.state = 'remove'
            }
          })
          this.options[index].state = 'add'
          this.render();
        },
        load: function() {
          this.options = [];
          for (var i = 0; i < this.html.options.length; i++) {
            var option = this.html.options[i]
            this.options[i] = {
              html: option.innerHTML,
              value: option.value,
              selected: option.selected,
              state: ''
            }
          }
        },
        preselect: function() {
          var that = this;
          this.selected = [];
          this.preselected.forEach(function(pre) {
            that.selected.push({
              index: pre,
              state: 'add',
              removed: false
            })
            that.options[pre].state = 'remove';
          })
        },
        render: function() {
          this.renderDrop()
          this.renderOptions()
        },
        renderDrop: function() {
          var that = this;
          var parentHTML = $.template('<div></div>')
          this.selected.forEach(function(select, index) {
            var option = that.options[select.index];
            var childHTML = $.template('<span class="item ' + select.state + '">' + option.html + '</span>')
            var childCloseHTML = $.template(
              '<i class="material-icons btnclose" data-index="' + select.index + '">&#xe5c9;</i></span>')
            childCloseHTML.on('click', function(e) {
              that.removeOption(e, this)
            })
            childHTML.appendChild(childCloseHTML)
            parentHTML.appendChild(childHTML)
          })
          this.html.dropDisplay.innerHTML = '';
          this.html.dropDisplay.appendChild(parentHTML)
        },
        renderOptions: function() {
          var that = this;
          var parentHTML = $.template('<div></div>')
          this.options.forEach(function(option, index) {
            var childHTML = $.template(
              '<a data-index="' + index + '" class="' + option.state + '">' + option.html + '</a>')
            childHTML.on('click', function(e) {
              that.addOption(e, this)
            })
            parentHTML.appendChild(childHTML)
          })
          this.html.dropOptions.innerHTML = '';
          this.html.dropOptions.appendChild(parentHTML)
        },
        clearStates: function() {
          var that = this;
          this.selected.forEach(function(select, index) {
            select.state = that.changeState(select.state)
          })
          this.options.forEach(function(option) {
            option.state = that.changeState(option.state)
          })
        },
        changeState: function(state) {
          switch (state) {
            case 'remove':
              return 'hide'
            case 'hide':
              return 'hide'
            default:
              return ''
          }
        },
        isSelected: function(index) {
          var check = false
          this.selected.forEach(function(select) {
            if (select.index == index && select.removed == false) check = true
          })
          return check
        }
      };
      o.init();
      return o;
    }


    //Set up some data
    var options = [{
        html: 'cats',
        value: 'cats'
      },
      {
        html: 'fish',
        value: 'fish'
      },
      {
        html: 'squids',
        value: 'squids'
      },
      {
        html: 'cats',
        value: 'whales'
      },
      {
        html: 'cats',
        value: 'bikes'
      },
    ];

    var myDrop = new drop({
      selector: '#myMulti',
      preselected: [0, 2]
    });
    myDrop.toggle();
  </script>

</body>

</html>