<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Imports */


  .sidebar {
   width: 300px;
   height: 240px;
   background-color: #fff;
   padding: 10px 20px;
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
  .page * {
   margin: 10px;
  }

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

  .address table tr {
   background-color: #fff;
  }

  .address table tr td:nth-child(1) {
   width: 200px;
  }

  .address table tr td:nth-child(2) {
   width: 350px;
  }

  .address table tr td:nth-child(3) {
   width: 200px;
  }

  .address td img {
   width: 100px;
   height: 100px;
  }

  .address td ul li {
   font-size: 12px;
  }

  .address td p {
   font-size: 12px;
  }

  .address table tr td:nth-child(2) p {
   margin-left: 2rem;
  }

  .address table tr td:nth-child(2) p .old-price {
   text-decoration: line-through;

  }

  .address table tr td:nth-child(2) p .newprice {
   font-size: 18px;
   color: #5ce1d5;
   font-weight: 800;
  }

  .add-address {
   font-size: 15px;
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
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')


  <section class="agb-container">
   <div class="container">

    <div class="allpage">
     <div id="sidebar" class="sidebar">
      <h6 class="title">Account Settings</h6>
     </div>

     <div id="profile" class="page">

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
        <div class="mt-5">
         <p>Alex Driver</p>
         <p>Example@mail.com</p>
         <div class="links">
          <a href="#" class="m-0 pr-5">Edit</a>
          <a href="#" class="m-0">Change Password</a>
         </div>
        </div>
       </div>
       <hr>

       <div class="other-inforation">
        <p class="other-information">Other Information</p>
        <table>
         <tbody>
          <tr>
           <td>Time Zone</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Backoffice Language</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Mobile Number</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Website</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Client Category</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Manufacturer Category</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Staff Category</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
          <tr>
           <td>Seller Category</td>
           <td> <input type="text" class="form-control" id="floatingInputValue"></td>
          </tr>
         </tbody>
        </table>
       </div>
      </form>
     </div>

     <div id="address" onclick="toggleActive(this)" class="page">
      <h6>Manage Address</h6>

      <div class="address">
       <table>
        <tbody>
         <tr>
          <td><img src="{{ asset('assets/frontEnd/web/images/product-2.png')}}" alt="" srcset=""></td>
          <td>
           <ul>
            <li>Merkmal 1 lauft fllugig</li>
            <li>Merkmal 1 lauft fllugig ...lorem ipasum</li>
           </ul>
           <p>
            <span class="old-price">start $499.00</span> <span class="newprice">$499.00</span>
           </p>
          </td>
          <td>
           <p>East Streets 14, Word No. 04, Road
            No. 13/x, House no. 1320/C, Flat No.
            5D, Berlin - 1200, Germany</p>
          </td>
         </tr>
        </tbody>
       </table>

       <a class="add-address" href="#">Add address +</a>
      </div>
     </div>

     <div id="order" onclick="toggleActive(this)" class="page">
      <h6>Order History</h6>
      <table>
       <tbody>
        <tr>
         <td>MONTH</td>
         <td></td>
         <td>ORDER NUMBER</td>
         <td>COST</td>
         <td>DATE</td>
        </tr>
       </tbody>
      </table>

      <p>February 2024</p>
      <div class="order-history">
       <div class="accordion" id="accordionExample">
        <div class="accordion-item">
         <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
           aria-expanded="true" aria-controls="collapseOne">
           Accordion Item #1
          </button>
         </h2>
         <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
           <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin
           adds the appropriate classes that we use to style each element. These classes control the overall appearance,
           as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
           overriding our default variables. It's also worth noting that just about any HTML can go within the
           <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
         </div>
        </div>
        <div class="accordion-item">
         <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
           data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           Accordion Item #2
          </button>
         </h2>
         <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
           <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin
           adds the appropriate classes that we use to style each element. These classes control the overall appearance,
           as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
           overriding our default variables. It's also worth noting that just about any HTML can go within the
           <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
         </div>
        </div>
        <div class="accordion-item">
         <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
           data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
           Accordion Item #3
          </button>
         </h2>
         <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
           <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
           adds the appropriate classes that we use to style each element. These classes control the overall appearance,
           as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
           overriding our default variables. It's also worth noting that just about any HTML can go within the
           <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>


     <div id="claim" onclick="toggleActive(this)" class="page">
      <h1>Claim Issue</h1>
     </div>
    </div>
   </div>
  </section>
  @include('frontEnd/partial/footer')



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
   menus.push(new Menu("Claim Issues", "/info/claim"));

   pages.push(document.getElementById("profile"));
   pages.push(document.getElementById("address"));
   pages.push(document.getElementById("order"));
   pages.push(document.getElementById("claim"));
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
 </body>

</html>