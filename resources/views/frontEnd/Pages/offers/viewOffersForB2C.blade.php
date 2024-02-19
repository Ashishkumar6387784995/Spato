<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Offers Listing</title>
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
    .offer-lists{
      background-color: #eaebef;
      /* margin-top: -10rem;*/
      padding-top: 5rem;
      margin-bottom: -10rem;
      padding-bottom: 10rem;

      clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
    }

    

  .offer-lists .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
   text-align:center;
  }

  .offer-lists .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  } 


    /* .sidebar {
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

    .title {
      font-weight: 700;
      margin: 20px 0px;
    }

    .menu:nth-child(5) {
      margin-top: 10px;
      padding-top: 15px;
      border-top: 1px solid #000;
    }

    .allpage {
      display: flex;
    }

    .page {
      width: 100%;
      animation: fadein 0.3s 1 ease-out;
    }

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

    @keyframes fadein {
      from {
        transform: translateY(20px);
        opacity: 0;
      }

      to {
        transform: translateY(0px);
      }
    }

    /* .page * {
   margin: 10px;
  } 

    .menu * {
      transform: translateX(0px);
      transition-duration: 0.3s;
    }

    /* Translate the menu text to the right on hover 
    .menu:hover>* {
      cursor: pointer;
    }

    /* Disable and enable arrow on hover */


    /* Translate the arrow logo right on click */
    /* .menu:active>* {
   color: #44e1d5 !important;
  } 




    
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .agb-container {
        clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
      }

      /* footer .footer-container {
    width: 96%;
  } 
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

    /* Manage Address starts


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
      text-decoration: none;
      color: var(--blue);
      font-weight: 700;
      border: 2px solid var(--blue);
      padding: 5px 10px;
      margin-left: 0.5rem;
      border-radius: 5px;
      transition: 0.5s ease-in-out;
    }

    .add-address:hover {
      background-color: var(--blue);
      color: var(--white);
    }


    #addaddressModal label {
      width: 100px;
    }

    #addaddressModal input {
      width: 300px;
    }

    /* Manage Address ends */

    /* For mobile

    @media screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      .allpage {
        display: block;
      }


    }

    /* For Mobile Portrait View 
    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .allpage {
        display: block;
      }

      .sidebar {
        margin-left: 1.5rem;
        margin-bottom: 2rem;
      }

      .profile-btn {
        width: 90%;
      }

      #tempAddressShow tbody tr td:nth-child(2) {
        width: 10%;
      }

      #tempAddressShow tbody tr td i {
        margin-top: -1rem;
      }
    }

    /* Products Card start
    .products {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      padding: 5px;
      gap: 10px;
      justify-content: flex-start;
    }

    .product {
      width: 200px;
      height: 250px;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      overflow: hidden;
      margin: 2rem 2rem;
      border-radius: 5px;
    }

    .product .img {
      height: 100px;
    }

    .product .img img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      transition: 0.5s;
      transform: scale(0.75);
    }

    .product-price {
      text-align: right;
      font-size: 15px;
      font-weight: 600;
    }

    .product-price .price {
      color: #44e1d5;
      font-size: 20px;
      font-weight: 600;
    }

    .product .product-details {
      padding: 10px;
      display: flex;
      flex-direction: column;

    }

    .card-text li {
      font-weight: 600;
    }

    .card-title {
      font-weight: 600;
    }


    @media screen and (max-device-width: 480px) and (orientation: portrait) {
      .product-category {
        clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
      }

      /* footer .footer-container {
    width: 96%;
  } 
      .products {
        justify-content: center;
      }

      .agb-container .container {
        display: block !important;
      }

    } */

    /* Products Card ends*/
  </style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')

  <section class="offer-lists">
    <div class="container content">
              <h6 class="text-center">Offers Lists</h6>
      
        <div class="details">
          <div class="offer">
            <h5></h5>
          </div>
        </div>
      </div>
  </section>
  @include('frontEnd/partial/footer')


  <!-- <script>
    // Execute the code when the document is ready
    $(document).ready(function() {
      // Get the token from localStorage
      var token = localStorage.getItem('authToken');
      // console.log(token);

      // Check if the token exists
      if (!token) {
        console.error('Token not found in localStorage');
        window.location.href = '/api/home';
        // return;
      }

      // Make a GET request using AJAX
      $.ajax({
        url: '/api/offerListingApi', // Replace with the actual endpoint URL
        method: 'GET',
        headers: {
          'Authorization': 'Bearer ' + token,
        },

        success: function(response) {
          if (response.offersGroupBy) {

            // console.log(response.offersList);

            var angebotsList = document.getElementById('angebotsList');

            response.offersGroupBy.forEach(function(offer) {

              var li = document.createElement('li');
              li.setAttribute('class', 'menu');
              li.setAttribute('data-content', offer.Angebots_Nr);
              li.className = 'menu';
              li.dataset.content = offer.Angebots_Nr;
              li.textContent = offer.Angebots_Nr; // Adjust text content as needed
              angebotsList.appendChild(li);

              function updateContent(page) {
                var contentDiv = document.getElementById("content");
                // Clear existing content
                contentDiv.innerHTML = "";

                // Update content based on selected page
                if (page === li.dataset.content) {
                  if (li.dataset.content === li.dataset.content ) {
                    contentDiv.innerHTML =
                    `<h2>Welcome to Page 1</h2>
            <div class="products">
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>


      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>



     </div>           
            `;
                  }


                } else if (page === li.dataset.content ) {
                  contentDiv.innerHTML =
                    `<h2>Welcome to Page 2</h2>
            <div class="products">
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>


     </div>           
            `;
                } else if (page === "page3") {
                  contentDiv.innerHTML =
                    `<h2>Welcome to Page 3</h2>
            <div class="products">
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>
      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>

      <div class="product">
       <div class="img">
        <img src="{{ asset('assets/frontEnd/web/images/robot-2.png') }}" alt="Image">
       </div>
       <div class="product-details">
        <h5 class="card-title">Robot Alpha 1</h5>
        <p class="card-text">
         <li>Merkamal 1 - lauft fluffig</li>
        </p>
        <p class="product-price">
         statt - 42,50€ <span class="price">25,30€</span>
        </p>
       </div>
      </div>





     </div>           
            `;
                }
              }

              // Add click event listeners to menu links
              var menuLinks = document.querySelectorAll(".menu");
              menuLinks.forEach(function(link) {
                link.addEventListener("click", function() {
                  // Get the data-content attribute value
                  var page = this.getAttribute("data-content");
                  // Update content based on selected page
                  updateContent(page);
                });
              });
            });





          } else {
            console.log('data errros', data.errors);
            window.location.href = '/api/home';
          }
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }



      });
    });
  </script> -->
  <script>
    // Function to update content based on selected page
  </script>


</body>

</html>