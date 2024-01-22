<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script>

  <style>
  /* Imports */


  .sidebar {
   width: 300px;
   height: 200px;
   background-color: #fff;
   padding: 10px 20px;
   border-radius: 5px;
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .sidebar h6 {
   font-weight: 700;
   color: #000;
   margin: 20px 0px;
  }

  .menu {
   user-select: none;
   width: 100%;
   display: flex;
   transition-duration: 0.3s;
  }

  .menu:nth-child(5) {
   margin-top: 10px;
   padding-top: 15px;
   border-top: 1px solid #000;
  }

  /* Container for all Pages */
  .allpage {
   display: flex;
  }

  /* Container for single page */
  .page {
   width: 100%;
   /* padding: 50px; */
   animation: fadein 0.3s 1 ease-out;
  }

  /* Style for permalinks */
  a {
   color: var(--main-col);
  }

  .profile-btn {
   background-color: var(--blue);
   border: 1px solid var(--blue);
   width: 30%;
   font-weight: 600;
   color: var(--white);
   padding: 5px 3px;
   font-size: 18px;
   border-radius: 5px;
   transition: 0.5s;
   margin-top: 2rem;
  }

  .profile-btn:hover {
   background-color: var(--white);
   border: 1px solid #44e1d5;
   color: var(--blue);
  }

  /* Fade in animation */
  @keyframes fadein {
   from {
    transform: translateY(20px);
    opacity: 0;
   }

   to {
    transform: translateY(0px);
   }
  }

  /* Add margin to every element in a page */
  /* .page * {
   margin: 10px;
  } */

  .menu * {
   transform: translateX(0px);
   transition-duration: 0.3s;
  }

  /* Translate the menu text to the right on hover */
  .menu:hover>* {
   cursor: pointer;
  }

  /* Disable and enable arrow on hover */


  /* Translate the arrow logo right on click */
  /* .menu:active>* {
   color: #44e1d5 !important;
  } */




  .agb-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }

  /* .agb-container nav .home {
   color: var(--black) !important;
   text-decoration: none !important;
  }

  .agb-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .agb-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  } */

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .agb-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   /* footer .footer-container {
    width: 96%;
  } */
  }

  .profile {
   background-color: #eaebef;
   margin-top: -1rem;
   padding-top: -10rem !important;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }



  #imageUpload {
   display: none;
  }

  #profileImage {
   cursor: pointer;
  }

  #profile-container {
   width: 150px;
   height: 150px;
   overflow: hidden;
   -webkit-border-radius: 50%;
   -moz-border-radius: 50%;
   -ms-border-radius: 50%;
   -o-border-radius: 50%;
   border: 1px solid black;
   border-radius: 50%;
   background-color: var(--white);
  }

  #profile-container img {
   width: 150px;
   height: 150px;
   margin: auto;
  }

  table tbody tr td input {
   width: 100% !important;
   border-radius: 2px;
   border: 1px solid #000;
  }

  /* Manage Address starts */


  .address table tr td i {
   margin: 0px 20px;
   padding: 10px;
   border-radius: 100%;
   background-color: var(--white);
   transition: 0.5s ease-in-out;
   cursor: pointer;
  }

  .address table tr td i:hover {
   background-color: red;
   color: var(--white);
  }

  .address td p {
   font-size: 12px;
   background-color: #fff;
   padding: 15px 10px;
  }

  .add-address {
   font-size: 15px;
  }


  #addaddressModal label {
   width: 100px;
  }

  #addaddressModal input {
   width: 300px;
  }

  /* Manage Address ends */

  /* For mobile */

  @media screen and (min-device-width: 768px) and (max-device-width: 1024px) {
   .allpage {
    display: block;
   }
  }

  /* For Mobile Portrait View */
  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .allpage {
    display: block;
   }
  }

  /* Accordion */

  .order-history tbody tr td {
   width: 300px;
  }

  .accordion {
   border-radius: 5px;
   margin-bottom: 10px;
   margin-left: auto;
   margin-right: auto;
   background-color: var(--white);
  }

  .accordion-heading {
   cursor: pointer;
   padding: 10px;
   background-color: var(--white);
   border-radius: 5px;
   display: flex;
   align-items: center;
   justify-content: space-between;
  }

  .accordion-content {
   display: none;
   padding: 10px;
  }

  table {
   border-collapse: collapse;
   width: 100%;
  }

  th,
  td {
   width: 300px;
   border: 1px solid #ddd;
   padding: 8px;
   text-align: left;
  }

  .order-history .t-price .pdf {
   font-size: 15px;
  }

  .order-history .t-price .pdf i {
   color: red;
  }

  .order-history .t-price .total-price {
   font-size: 18px;
   font-weight: 700;
   text-align: right;
  }

  .order-product-img {
   width: 100px;
   height: 100px;
  }

  /* .accordion {
   /* max-width: 33rem; 
   width: 100%;
   background: #FFF;
   margin: 1rem 0;
   padding: 1.5rem;
  }

  .accordion .accordion-content {
   margin: 10px 0;
   border-radius: 5px;
   background-color: #e8ffdc;
   border-color: #bbffaa;
   overflow: hidden;

  }

  .accordion-content.is-open {
   padding-bottom: 10px;
  }

  .accordion-content header {
   display: flex;
   min-height: 50px;
   padding: 0 15px;
   cursor: pointer;
   align-items: center;
   justify-content: space-between;
   transition: all 0.2s linear;
  }

  .accordion-content.is-open header {
   min-height: 25px;
  }

  .accordion-content-title {
   font-size: 1rem;
   font-weight: 600;
   color: #000000;
  }

  .accordion-content-description {
   height: 0;
   font-size: 13px;
   color: #000000;
   font-weight: 400;
   padding: 0 15px;
  } */
  </style>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
 </head>

 <body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')


  <section class="agb-container">
   <div class="container">

    <div class="allpage">
     <div id="sidebar" class="sidebar">
      <h6 class="title">Account Settings</h6>
     </div>

     <div id="profile" class="page container">

      <form action="">
       <p class="account">Account Information</p>
       <hr>
       <div class="d-flex">
        <div class="">
         <form action="#" method="post">
          <div id="profile-container">
           <image id="profileImage" src="http://lorempixel.com/100/100" />
           Edit
          </div>
          <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture>
         </form>
        </div>
        <div class="mt-5 ml-3">
         <p>Alex Driver</p>
         <p>Example@mail.com</p>
         <div class="links">
          <!-- <a href="#" class="m-0 pr-5">Edit</a> -->
          <a href="#" class="m-0" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cpassword">Change
           Password</a>
         </div>
        </div>
       </div>
       <hr>

       <div class="other-inforation">
        <p class="other-information">Other Information</p>
        <table>
         <tbody>
          <tr>
           <td>Name</td>
           <td> <input type="text" class="form-control" value="Alex Driver" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Mobile Number</td>
           <td> <input type="text" class="form-control" id="floatingInputValue" readonly></td>
          </tr>
          <tr>
          <tr>
           <td><b>Permanent Address</b></td>
           <td></td>
          </tr>
          <tr>
           <td>Address(Street name and House number)</td>
           <td> <textarea class="form-control"
             id="floatingInputValue">East Streets 14, Word No. 04, Road No. 13/x, House no. 1320/C, Flat No. 5D,</textarea>
           </td>
          </tr>
          <tr>
           <td>City</td>
           <td> <input type="text" value="Berlin" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Zip code</td>
           <td> <input type="text" value="1200" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Country</td>
           <td> <input type="text" value="Germany" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td><button type="submit" class="profile-btn">Submit</button></td>
           <td></td>
          </tr>
         </tbody>
        </table>
       </div>
      </form>
     </div>

     <div id="address" onclick="toggleActive(this)" class="page container">
      <h5>Manage Address</h5>

      <div class="address">
       <h6>Permanent Address</h6>
       <table>
        <tbody>
         <tr>
          <td>
           <p>East Streets 14, Word No. 04, Road
            No. 13/x, House no. 1320/C, Flat No.
            5D, Berlin - 1200, Germany</p>
          </td>
         </tr>
        </tbody>
       </table>
       <hr />
       <h6>Temprorary Address</h6>
       <table>
        <tbody>
         <tr>
          <td>
           <p>East Streets 14, Word No. 04, Road
            No. 13/x, House no. 1320/C, Flat No.
            5D, Berlin - 1200, Germany</p>
          </td>
          <td>
           <i class="fa-solid fa-trash"></i>
          </td>
         </tr>
         <tr>
          <td>
           <p>East Streets 14, Word No. 04, Road
            No. 13/x, House no. 1320/C, Flat No.
            5D, Berlin - 1200, Germany</p>
          </td>
          <td>
           <i class="fa-solid fa-trash"></i>
          </td>
         </tr>
        </tbody>
       </table>

       <a class="add-address" href="#" data-bs-toggle="modal" data-bs-target="#addaddressModal">Add address +</a>
      </div>
     </div>

     <div id="order" onclick="toggleActive(this)" class="page container">
      <h6>Order History</h6>
      <table class="order-history">
       <thead>
        <tr>
         <th>MONTH</th>
         <th></th>
         <th>ORDER NUMBER</th>
         <th>COST</th>
         <th>DATE</th>
        </tr>
       </thead>
      </table>

      <p>February 2024</p>
      <div class="order-history">
       <div class="accordion">
        <div class="accordion-heading" onclick="toggleAccordion('accordion1')">
         <table>
          <tbody>
           <tr>
            <td>Alex</td>
            <td></td>
            <td>#2564</td>
            <td>$452</td>
            <td>23/04/2024</td>
           </tr>
          </tbody>
         </table>
         <!-- <span>&#9660;</span> -->
        </div>
        <div class="accordion-content" id="accordion1">
         <table>
          <tbody>
           <tr>
            <td><img class="order-product-img" src="{{ asset('assets/frontEnd/web/images/p-1.png') }}" alt="" srcset="">
            </td>

            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi quos ipsam facilis quas quidem
             dicta ea reiciendis et dignissimos.</td>
            <td>
             <p>East Streets 14, Word No. 04, Road
              No. 13/x, House no. 1320/C, Flat No.
              5D, Berlin - 1200, Germany</p>
            </td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>

       <div class="accordion">
        <div class="accordion-heading" onclick="toggleAccordion('accordion2')">
         <table>
          <tbody>
           <tr>
            <td>Alex</td>
            <td></td>
            <td>#2564</td>
            <td>$452</td>
            <td>23/04/2024</td>
           </tr>
          </tbody>
         </table>
         <!-- <span>&#9660;</span> -->
        </div>
        <div class="accordion-content" id="accordion2">
         <table>
          <tbody>
           <tr>
            <td><img class="order-product-img" src="{{ asset('assets/frontEnd/web/images/p-1.png') }}" alt="" srcset="">
            </td>

            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi quos ipsam facilis quas quidem
             dicta ea reiciendis et dignissimos.</td>
            <td>
             <p>East Streets 14, Word No. 04, Road
              No. 13/x, House no. 1320/C, Flat No.
              5D, Berlin - 1200, Germany</p>
            </td>
           </tr>
          </tbody>
         </table>
        </div>

       </div>
       <div class="t-price row">
        <div class="pdf col"><a href="#"><i class="fa-solid fa-file-pdf"></i> Download The
          Invoice</a></div>
        <div class="total-price col">Total Amount : 2543.00 €</div>
       </div>
      </div>


      <!-- <div id="claim" onclick="toggleActive(this)" class="page">
       <h1>Claim Issue</h1>

      </div> -->
     </div>
    </div>
  </section>
  @include('frontEnd/partial/footer')


  <!-- Change Password trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="cpassword" tabindex="-1" aria-labelledby="cpasswordLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="ecpasswordLabel">Change Password</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <label for="basic-url" class="form-label">Old Password</label>
      <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="old password" aria-label="old-password"
        aria-describedby="basic-addon1">
      </div>
      <label for="basic-url" class="form-label">New Password</label>
      <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="new password" aria-label="new-password"
        aria-describedby="basic-addon1">
      </div>
      <label for="basic-url" class="form-label">Confirm Password</label>
      <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="confirm password" aria-label="confirm-password"
        aria-describedby="basic-addon1">
      </div>
     </div>
     <button type="button" class="m-1 profile-btn" data-bs-dismiss="modal">Update Password</button>

    </div>
   </div>
  </div>



  <!-- Button trigger modal -->
  <!-- Modal start for add address -->
  <div class="modal fade" id="addaddressModal" tabindex="-1" aria-labelledby="addaddressLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="addaddressLabel">Add Address</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <div class="input-group mb-3">
       <label for="Address">Address</label>
       <input type="text" class="form-control" placeholder="Address" aria-label="Address"
        aria-describedby="basic-addon1" />
      </div>
      <div class="input-group mb-3">
       <label for="city">City</label>
       <input type="text" class="form-control" placeholder="City" aria-label="City" aria-describedby="basic-addon1" />
      </div>


      <div class="input-group mb-3">
       <label for="Zip code">Zip code</label>
       <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip code"
        aria-describedby="basic-addon1" />
      </div>

      <div class="input-group mb-3">
       <label for="country">Country</label>
       <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Select Country</option>
        <option value="Denmark">Denmark</option>
        <option value="Poland">Poland</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Austria">Austria</option>
        <option value="Switzerland">Switzerland</option>
        <option value="France">France</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Belgium">Belgium</option>
        <option value="Netherlands">Netherlands</option>
       </select>
      </div>


     </div>
     <button type="button" class="m-3 profile-btn" data-bs-dismiss="modal">Save Address</button>
    </div>
   </div>
  </div>
  <!-- Modal end for add Address -->

  <script>
  /*
   *   SIDEBAR V2
   *   Written by Vardan Petrosyan
   *   https://github.com/Vardan2009
   */

  // Create Menu Class
  class Menu {
   //Constructor for Menu class
   constructor(_name, _activateID, _fa) {
    this.name = _name;
    this.activateID = _activateID;
    this.fa = _fa;
   }
   //Return an HTML element representation of the Menu
   GetHTMLElement = function() {
    var element = document.createElement("div");
    element.className = "menu";
    var p = document.createElement("p");

    var iT = document.createElement("i");
    iT.className = this.fa;
    p.appendChild(iT);

    p.innerHTML += " " + this.name;
    var i = document.createElement("i");
    i.className = "";
    element.appendChild(p);
    element.appendChild(i);
    return element;
   };
  }

  //Define arrays for menus and pages
  var menus = [];
  var pages = [];

  //function for initializing, populating menu and page arrays
  function populateMenus() {
   menus.push(new Menu("Manage Profile Settings", "/"));
   menus.push(new Menu("Manage Addresses", "/address"));
   menus.push(new Menu("Orders History", "/info/order"));
   //  menus.push(new Menu("Claim Issues", "/info/claim"));

   pages.push(document.getElementById("profile"));
   pages.push(document.getElementById("address"));
   pages.push(document.getElementById("order"));
   //  pages.push(document.getElementById("claim"));
  }

  //Call functions and open first page
  populateMenus();
  displayUpdatedMenus();
  open(0);

  //update and render menus
  function displayUpdatedMenus() {
   var sidebarElement = document.getElementById("sidebar");
   var sidebarMenus = sidebarElement.querySelectorAll(":scope > .menu");
   for (let i = 0; i < sidebarMenus.length; i++) {
    sidebarMenus[i].remove();
   }
   for (let i = 0; i < menus.length; i++) {
    var element = menus[i].GetHTMLElement();
    sidebarElement.appendChild(element);
    element.addEventListener("click", function() {
     open(i);
    });
   }
  }

  //function for opening page on menu click
  function open(index) {
   for (let i = 0; i < pages.length; i++) {
    pages[i].style.display = "none";
   }
   pages[index].style.display = "block";
  }
  </script>

  <script>
  function toggleActive(element) {
   element.classList.toggle('active');
  }
  </script>
  <script>
  $("#profileImage").click(function(e) {
   $("#imageUpload").click();
  });

  function fasterPreview(uploader) {
   if (uploader.files && uploader.files[0]) {
    $('#profileImage').attr('src',
     window.URL.createObjectURL(uploader.files[0]));
   }
  }

  $("#imageUpload").change(function() {
   fasterPreview(this);
  });
  </script>

  <script>
  function toggleAccordion(accordionId) {
   var accordionContent = document.getElementById(accordionId);
   var accordions = document.querySelectorAll(".accordion-content");

   for (var i = 0; i < accordions.length; i++) {
    if (accordions[i].id !== accordionId) {
     accordions[i].style.display = "none";
    }
   }

   accordionContent.style.display =
    accordionContent.style.display === "block" ? "none" : "block";
  }
  </script>


  <!-- Countries name -->
  <script>
  var select = document.getElementById("countries");

  // Fetch countries from the REST Countries API
  fetch("https://restcountries.com/v3.1/all")
   .then(response => response.json())
   .then(data => {
    // Loop through the data and create options
    data.forEach(country => {
     var option = document.createElement("option");
     option.value = country.name.common.toLowerCase();
     option.text = country.name.common;
     select.appendChild(option);
    });
   })
   .catch(error => console.error("Error fetching countries:", error));
  </script>
  <!-- Countries name -->
 </body>

</html>