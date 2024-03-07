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


    input[type="file"]::file-selector-button {
      /* border-radius: 4px;
   padding: 0 16px;
   height: 40px;
   cursor: pointer;
   background-color: white;
   border: 1px solid rgba(0, 0, 0, 0.16);
   box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
   margin-right: 16px;
   transition: background-color 200ms; */
      display: none;

    }

    input[type="file"] {
      background-color: #fff;
      text-align: center;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
      background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
      background-color: #e5e7eb;
    }

    .produkte-page a {
      color: #44e1d5 !important;
      border: 1px solid #fcfcfc !important;
      border-radius: 5px;
      text-align: center;
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
      <div class="" style="padding-bottom:10px;   margin-top:-1.5rem;">
        @include('admin_theme/Partial/admin_header')
          <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

        <form id="addProductform" enctype="multipart/form-data">
          <div class="row pt-1">

            <div class="col-md-2 stretch-card grid-margin">
              <button class="btn" type="button" id="saveBtn">Save</button>
            </div>
            <div class="col-md-2 stretch-card grid-margin">
              <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#importModal">Import CSV</button>
            </div>
            <div class="col-md-2 stretch-card grid-margin">
              <a href="{{url('api/productExport')}}"><button class="btn" type="button" id="exportBtn">Export CSV</button></a>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <button class="btn" id="priceUpdaterBtn">Price Updater</button>
            </div>

            <div class="col-md-2 stretch-card grid-margin">
              <a class=" btn" href="{{url('/api/addProduct/'.$role)}}">+ neues Produkt</a>
            </div>
          </div>

          <span id="success_message" style="color:#44e1d5; font-size:20px; font-weight:600;"></span>
          <div class="row">

            <div class="form-check">
              <div class="col stretch-card grid-margin">

                <label class="form-check-label" for="flexRadioDefault1">Shop Produkt</label>
                <input class="form-check-input" type="radio" name="type" value="Shop Produkt">
                <span id="Shop_Produkt_err"></span>

                <label class="form-check-label" for="flexRadioDefault1">APP Produkt</label>
                <input class="form-check-input" type="radio" name="type" value="APP Produkt">


                <label class="form-check-label" for="flexRadioDefault1">Produkt intern</label>
                <input class="form-check-input" type="radio" name="type" value="Produkt intern">

              </div>

            </div>
            <span id="type_err" style="color:red; margin-top: -2.5rem;"></span>

          </div>


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
                <div class="col-4">Kategorie 1 </div>
                <div class="col-8">
                  <select name="Kategorie_1" id="Kategorie_1" class="form-control" onchange="getSpecificProductCategory('Kategorie_2', 'Kategorie_2', this.value, 'Kategorie_1', 'htmlBlank_2_3_4_5_6')" ;>

                  </select>
                  <span id="Kategorie_1_err" style="color:red"></span>
                  <!-- <input type="text" class="form-control" name="Kategorie" id="kategorie">
          <span id="kategorie_err" style="color:red"></span> -->

                  <!-- <div style="height:100%; margin-top: -1.5rem !important;  margin-left: -1rem; margin-right:1rem;" style="padding:0">
                  <label style="width:100%;">
                    Select Kategorie
                    <input mbsc-input id="demo-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                  </label>
                  <select id="demo-multiple-select" name="standardUsed[]" multiple>
                  
                    <option style="heigh:50px; width:300px;">
                    Kategorie 1
                    </option>
                    <option style="heigh:50px; width:300px;">
                    Kategorie 2
                    </option>
                    <option style="heigh:50px; width:300px;">
                    Kategorie 3
                    </option>
                    <option style="heigh:50px; width:300px;">
                    Kategorie 4
                    </option>
                    <option style="heigh:50px; width:300px;">
                    Kategorie 5
                    </option>
                    <option style="heigh:50px; width:300px;">
                    Kategorie 6
                    </option>


            
                  </select>
                </div> -->
                </div>
              </div>


              <div class="row mb-2">
                <div class="col-4">Kategorie 2</div>
                <div class="col-8">
                  <select name="Kategorie_2" id="Kategorie_2" class="form-control htmlBlank_2_3_4_5_6" onchange="getSpecificProductCategory('Kategorie_3', 'Kategorie_3', this.value, 'Kategorie_2', 'htmlBlank_3_4_5_6')" ;>

                  </select>
                </div>
              </div>


              <div class="row mb-2">
                <div class="col-4">Kategorie 3</div>
                <div class="col-8">
                  <select name="Kategorie_3" id="Kategorie_3" class="form-control htmlBlank_2_3_4_5_6 htmlBlank_3_4_5_6" onchange="getSpecificProductCategory('Kategorie_4', 'Kategorie_4', this.value, 'Kategorie_3', 'htmlBlank_4_5_6')" ;>

                  </select>
                </div>
              </div>


              <div class="row mb-2">
                <div class="col-4">Kategorie 4</div>
                <div class="col-8">
                  <select name="Kategorie_4" id="Kategorie_4" class="form-control htmlBlank_2_3_4_5_6 htmlBlank_3_4_5_6 htmlBlank_4_5_6" onchange="getSpecificProductCategory('Kategorie_5', 'Kategorie_5', this.value, 'Kategorie_4', 'htmlBlank_5_6')" ;>

                  </select>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-4">Kategorie 5</div>
                <div class="col-8">
                  <select name="Kategorie_5" id="Kategorie_5" class="form-control htmlBlank_2_3_4_5_6 htmlBlank_3_4_5_6 htmlBlank_4_5_6 htmlBlank_5_6" onchange="getSpecificProductCategory('Kategorie_6', 'Kategorie_6', this.value, 'Kategorie_5', 'htmlBlank_6')" ;>

                  </select>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col-4">Kategorie 6</div>
                <div class="col-8">
                  <select name="Kategorie_6" id="Kategorie_6" class="form-control htmlBlank_2_3_4_5_6 htmlBlank_3_4_5_6 htmlBlank_4_5_6 htmlBlank_6">

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
                <div class="col-8"><input type="text" class="form-control" id="m3/h" name="m3/h"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Stichmass (mm)</div>
                <div class="col-8"><input type="text" class="form-control" id="Stichmass" name="Stichmass"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">kW</div>
                <div class="col-8"><input type="text" class="form-control" id="kW" name="kW"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Volt</div>
                <div class="col-8"><input type="text" class="form-control" id="Volt" name="Volt"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Kelvin</div>
                <div class="col-8"><input type="text" class="form-control" id="Kelvin" name="Kelvin"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">lm (lumen)</div>
                <div class="col-8"><input type="text" class="form-control" id="lm" name="lm"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Druckstufe PN</div>
                <div class="col-8"><input type="text" class="form-control" id="Druckstufe_PN" name="Druckstufe_PN"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Material</div>
                <div class="col-8"><input type="text" class="form-control" id="Material" name="Material"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Körnung</div>
                <div class="col-8"><input type="text" class="form-control" id="Körnung" name="Körnung"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Durchmesser (mm)</div>
                <div class="col-8"><input type="text" class="form-control" id="Durchmesser" name="Durchmesser"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Radius mm</div>
                <div class="col-8"><input type="text" class="form-control" id="Radius" name="Radius"></div>
              </div>
            </div>

            <div class="col border">
              <div class="row mb-2">
                <div class="col-4">Gewicht Kg</div>
                <div class="col-8"><input type="text" class="form-control" id="Gewicht" name="Gewicht"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Länge (mm)</div>
                <div class="col-8"><input type="text" class="form-control" id="Länge" name="Länge"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Breite (mm)</div>
                <div class="col-8"><input type="text" class="form-control" id="Breite" name="Breite"></div>
              </div>
              <div class="row mb-2">
                <div class="col-4">Höhe (mm)</div>
                <div class="col-8"><input type="text" class="form-control" id="Höhe" name="Höhe"></div>
              </div>

            </div>

            <form action="" id="signupForm">
              <div class="col">
                <div class="row mb-2">
                  <div class="col-6">Bild JPG1</div>
                  <div class="col-6"><input type="file" class="form-control img imageInput" id="Bild_1" name="Bild_1" accept=".jpg,.jpeg,.png" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Bild JPG2</div>
                  <div class="col-6"><input type="file" class="form-control img imageInput" id="Bild_2" name="Bild_2" accept=".jpg,.jpeg,.png" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Bild JPG3</div>
                  <div class="col-6"><input type="file" class="form-control img imageInput" id="Bild_3" name="Bild_3" accept=".jpg,.jpeg,.png" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Bild JPG4</div>
                  <div class="col-6"><input type="file" class="form-control img imageInput" id="Bild_4" name="Bild_4" accept=".jpg,.jpeg,.png" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Anleitung / Tech Info 1 PDF</div>
                  <div class="col-6">
                    <input type="file" class="form-control img" id="Anleitung_PDF_1" name="Anleitung_PDF_1" accept=".pdf" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Anleitung / Tech Info 2 PDF</div>
                  <div class="col-6">
                    <input type="file" class="form-control img" id="Anleitung_PDF_2" name="Anleitung_PDF_2" accept=".pdf" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-6">Anleitung / Tech Info 3 PDF</div>
                  <div class="col-6">
                    <input type="file" class="form-control img" id="Anleitung_PDF_3" name="Anleitung_PDF_3" accept=".pdf" onchange="validateFileType()">
                    <span class="error" style="font-size:10px; font-weight:600;"></span>
                  </div>
                </div>
              </div>
          </div>
        </form>

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

  <!-- Import CSV Modal -->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog">


      <form id="productsImportForm" method="post" enctype="multipart/form-data">
        <div class="modal-content">

          <div class="modal-header" style="border-bottom: 2px solid #44e1d5;">
            <h1 class="modal-title fs-5" id="importModalLabel">Import Files file</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="m-1 pb-2" id="import_success_message" style="color:#44e1d5; font-size:18px; font-weight:600;"></span>

            <label for="formFile" class="form-label text-center">Import CSV/XLSX file</label>
            <p> <span class="d-flex"><input style="width:100%; height:50px;" class="form-control" type="file" name="ProductsImportFile" id="ProductsImportFile"><i style="font-size:20px; position: relative; left: -40px; top: 15px;" class="fa-solid fa-file-excel"></i></span></p>
            <p id="ProductsImportFile-err" style="margin-top:1rem; color:red"></p>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn" id="productImportButton">Import</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Import CSV Modal  ends-->


  <script>
    $(document).ready(function() {
      jQuery(document).ready(function() {
        getSpecificProductCategory('Kategorie_1', 'Kategorie_1', '%', '%', 'htmlBlank_1');
      });

      // Event listener for Save button
      $('#saveBtn').on('click', function() {
        // Collect form data

        $('#type_err').text('');
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
        $('#Kategorie_1_err').text('');


        // if (!$('#type').val()) {
        //   $('#type_err').text('Please select Product type.');
        //   return;
        // }


        if (!$('#Hersteller').val()) {
          $('#Hersteller_err').text('Please enter Hersteller.');
          return;
        }

        if (!$('#Artikelname').val()) {
          $('#Artikelname_err').text('Please enter Artikelname.');
          return;
        }

        var formData = collectFormData();

        // Log form data to the console (for testing)


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


        var token = localStorage.getItem('authToken');
        console.log(token);

        // Check if the token exists
        if (!token) {
          console.error('Token not found in localStorage');
          window.location.href = '/api/home';
          // return;
        }


        console.log('Form Data:', formData);

        $.ajax({
          type: 'POST', // Use POST or GET depending on your server-side implementation
          url: '/api/addProduct', // Replace with your server endpoint
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            // Handle the success response from the server

            if (response.success) {

              $('#success_message').text(response.success);
              console.log('Server Response:', response);
              $('#addProductform')[0].reset();
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
          if (errors.type) {
            $('#type_err').text(errors.type[0]);
          }
          if (errors.Kategorie_1) {
            $('#Kategorie_1_err').text(errors.Kategorie_1[0]);
          }

        }

      }
    });




    $(document).ready(function() {
      // getProductCategory ();
      $('#productImportButton').on('click', function() {
        $('#import_success_message').text('');
        $('#ProductsImportFile-err').text('');
        // $('#ProductsImageFile-err').text('');
        // $('#ProductsPdfFile-err').text('');

        var formData = collectFormData();

        // Log form data to the console (for testing)
        console.log('Form Data:', formData);

        // Send the formData to the server using AJAX
        sendDataToServer(formData);
      });

      // Function to collect form data
      function collectFormData() {
        var formData = new FormData($('#productsImportForm')[0]);
        return formData;
      }

      // Function to display validation errors
      function displayValidationErrors(errors) {
        if (errors.ProductsImportFile) {
          $('#ProductsImportFile-err').text(errors.ProductsImportFile[0]);
        }
        // if (errors.ProductsImageFile) {
        //  $('#ProductsImageFile-err').text(errors.ProductsImageFile[0]);
        // }
        // if (errors.ProductsPdfFile) {
        //  $('#ProductsPdfFile-err').text(errors.ProductsPdfFile[0]);
        // }
      }

      function sendDataToServer(formData) {
        var token = localStorage.getItem('authToken');
        console.log(token);

        // Check if the token exists
        if (!token) {
          console.error('Token not found in localStorage');
          window.location.href = '/api/home';
          return; // exit the function if token is not present
        }



        // $('#import_success_message').text("Please Wait While We are Importing Your Data");

        $.ajax({
          type: 'POST',
          url: '/api/productImportApi',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'Authorization': 'Bearer ' + token, // include the token in the headers
          },
          success: function(response) {
            // Handle the success response from the server
            if (response.success) {
              $('#import_success_message').text(response.success);
              console.log('Server Response:', response);
              $('#productsImportForm')[0].reset();
            }

            if (response.error) {
              // Display validation errors next to the respective form fields
              console.log(response.error);
            }

            if (response.ValidationError) {
              // Display validation errors next to the respective form fields
              console.log(response.ValidationError);
              displayValidationErrors(response.ValidationError);
            }
          },
          error: function(xhr, textStatus, errorThrown) {
            try {
              var errors = JSON.parse(xhr.responseText);

              console.error('Validation Errors:', errors);
            } catch (e) {
              console.error('Non-JSON response:', xhr.responseText);
              $('#import_success_message').text("File Size is Too Large.");
            }
          }
        });
      }


    });


    // // function for fetch all product category
    // function getProductCategory(){
    //   $.ajax({
    //     type: 'GET',
    //     url: '/api/getProductCategoryAPI',
    //     success: function(response) {
    //     // Handle the success response from the server
    //       console.log('Products Categories:', response.allProductsCat);
    //       $.each(response.allProductsCat, function(index, item) {
    //         var options = '<option value="' + item.Kategorie_Name + '">' + item.Kategorie_Name + '</option>';
    //         jQuery('#Kategorie_1, #Kategorie_2, #Kategorie_3, #Kategorie_4, #Kategorie_5').append(options);
    //       });
    //     },
    //   });
    // }

    // function for fetch Specific Category
    function getSpecificProductCategory(selectColumn, showId, value, matchColumn, htmlBlank) {
      // alert(selectColumn+' '+showId+' '+value+' '+matchColumn);
      jQuery('.' + htmlBlank).html('');
      $.ajax({
        type: 'GET',
        url: '/api/getProductCategoryAPI',
        data: {
          selectColumn: selectColumn,
          value: value,
          matchColumn: matchColumn
        },
        success: function(response) {
          // Handle the success response from the server
          console.log('Products Categories:', response.allProductsCat);
          jQuery('#' + showId).append('<option value="">-- Select Kategory --</option>');
          $.each(response.allProductsCat, function(index, item) {
            if (item[selectColumn]) {
              var options = '<option value="' + item[selectColumn] + '">' + item[selectColumn] + '</option>';
            }
            jQuery('#' + showId).append(options);
          });
        },
      });
    }
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