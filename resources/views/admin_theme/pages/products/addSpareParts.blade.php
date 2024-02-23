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
   .form-control {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.form-control, .form-control:focus {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
}
.form-control {
    display: block;
    width: 100%;
    padding: 20px 5px;
    text-align:center;
    font-size: 0.8125rem;
    font-weight: 400;
    line-height: 1;
    color: #212529;
    background-color: color(white);
}
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

  table tr th {
   width: 200px;
  }

  table tr td {
   padding: 10px 2px;
   width: 200px;
  }

  select {
   background-color: #fff;
   color: #54606c;
   border: none;
   outline: none;
   padding: 2px 20px;
   border-radius: 3px;
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  td i {
   transition: 0.5s ease-in-out;
  }

  td i:hover {
   color: red;
  }


  #uploadInput{
   display:none;
  }
  #imagePreview {
    max-width: 100px;
    max-height: 100px;
  }

  #imagePreview img{
   width:500px;
   height:450px;
  }
  /* select:hover {
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  } */
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
     <div class="" style="border-bottom: 2px solid #44e1d5; margin-top:-1.5rem;">
      <h2>Admin Dashboard</h2>
      <p>Monday, January 12, 2024</p>
     </div>
     <div class="row pt-3">

      <div class="col-md-2 stretch-card grid-margin">
       <a class="edit btn" href="{{url('/api/addSpareParts/'.$role)}}">+ Neue</a>
      </div>
      <div class="col-md-2 stretch-card grid-margin">
       <a class="edit btn" href="">Save All</a>
      </div>
      <div class="col-5 stretch-card grid-margin">
      <input type="text" class="form-control" style="background-color:transparent; height:5px; border:1px solid black; width:200px;"> <span class="pt-2 px-2"><b>Badu Delta Eco 1</b></span>
      </div>
      <div class="col-3 stretch-card grid-margin">
       <a class="edit btn" data-bs-toggle="modal" data-bs-target="#importModal">+ CSV hochladen</a>
      </div>
     </div>
     <div class="row pt-3">

     <div class="col-md-2 stretch-card grid-margin">
       
      </div>
      <div class="col-md-1 stretch-card grid-margin">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; height:5px; border:1px solid black;">
      </div>
      <div class="col-sm-2 stretch-card grid-margin justify-content-center">
      <span class="pt-2 px-1"><b>match with</b></span>
     </div>
      <div class="col-1 stretch-card grid-margin">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:transparent; width:50px; height:5px; border:1px solid black;">
      </div>
      <div class="col-3 stretch-card grid-margin">
       <a class="edit btn" href="">Save</a>
      </div>
     </div>


     <div class="row pt-3">
      <div class="col-6 stretch-card grid-margin upload"  style="display:block;">
      <div>
      <button id="customFileInput" class="edit">Upload Image <i class="fa-solid fa-upload"></i></button> 
      <input type="file" id="uploadInput" accept="image/*"></div><br>
      <div id="imagePreview"></div>
      </div>

      <div class="col-6 stretch-card grid-margin">
      <table id="dataTable">
       <thead>
      <tr>
       <th>Nr.</th>
       <th>Nr. Zeichnung</th>
       <th>Beschreibung</th>
       <th>Artikel Nr</th>
       <th>SPATO Artikel Nr.</th>
      </tr>
      </thead>
      <tbody>
       <tr>
        <td>1</td>
        <td>410</td>
        <td>WechselstromMotor 1,10 kW, 230 V, Eco VS V.03, inklusive Motorelektronik mit FU</td>
        <td>2980110503</td>
        <td>80.2980110503</td>
       </tr>
      </tbody>


     </table>
      </div>
     </div>


    </div>

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
       <span class="m-1 pb-2" id="import_success_message"
        style="color:#44e1d5; font-size:18px; font-weight:600;"></span>
       
         <label for="formFile" class="form-label text-center">Import CSV/XLSX or PDF file</label>
        <p><input style="width:100%; height:50px;" class="form-control" type="file" name=""
           id=""></p>
         <p id="ProductsImportFile-err" style="margin-top:1rem; color:red"></p>
       </div>
      <div class="modal-footer d-flex justify-content-between">
       <button type="button" class="edit" data-bs-dismiss="modal">Close</button>
       <button type="button" class="edit" id="productImportButton">Import</button>
      </div>
     </div>
    </form>
   </div>
  </div>
  <!-- Import CSV Modal  ends-->
  <script>
    document.getElementById('uploadInput').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = function(readerEvent) {
        const imageSrc = readerEvent.target.result;
        const imageElement = document.createElement('img');
        imageElement.src = imageSrc;
        imageElement.onload = function() {
          // Display the image in the div
          const imagePreviewDiv = document.getElementById('imagePreview');
          imagePreviewDiv.innerHTML = '';
          imagePreviewDiv.appendChild(imageElement);
        };
      };
      reader.readAsDataURL(file);
    });
  </script>
  <script>
      // Trigger click event of file input when custom button is clicked
      document
        .getElementById("customFileInput")
        .addEventListener("click", function () {
          document.getElementById("uploadInput").click();
        });

      // Update the label text of the custom button when file is selected
      document
        .getElementById("uploadInput")
        .addEventListener("change", function () {
          const fileName = this.files[0].name;
          document.getElementById("customFileInput").textContent = fileName;
        });
    </script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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