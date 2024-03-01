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
  <style>
  /* Imports */

 /* Container for single page */
  .page {
   width: 100%;
   /* padding: 50px; */
   animation: fadein 0.3s 1 ease-out;
  }

  /* Style for permalinks */
  
  .card img {
   margin: auto;
   justify-content: center;
   max-width: 70%;
   max-height: 100%;
  }

  .card {
   width: 250px;
   margin: 1em;
   box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
   border: none;
   border-radius: 0;
  }

  .card .card-body .product-price {
   text-align: right !important;
   color: #050811;
   font-weight: 600;
  }

  .card .card-body li {
   color: #050811;
   font-weight: 600;
  }

  .card .card-body .product-price .price {
   font-size: 25px;
   color: var(--blue);
   font-weight: 800;
  }

  .cart-btn {
   text-align: center;
   /* width: 100%; */
   background-color: #44e1d5;
   color: #050811;
   font-weight: 600;
   text-decoration: none;
   padding: 8px 0px;
   border-radius: 5px 5px 4px 5px;
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }

  .cart-btn:hover {
   color: #050811;
  }



  .agb-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }

  .agb-container nav .home {
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
  }



  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .agb-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   .p-box {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
   }

   /* footer .footer-container {
    width: 96%;
  } */
  }

  /* Css for product page */

  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800&display=swap");

  * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "Poppins", sans-serif;
  }

  .container {
   background-color: transparent;
   width: 95%;
   margin: 0 auto;
   min-height: 1000px;
   display: flex;
  }
  .sidebar {
        width: 25%;
        background-color: #f4f4f4;
        padding: 20px;
      }

      .sidebar h6{
        font-weight:600;
      }

      .sidebar select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
      .sidebar ul {
        list-style-type: none;
        padding: 0;
      }
      .sidebar li {
        margin-bottom: 10px;
      }
      .sidebar a {
        text-decoration: none;
        color: #333;
        cursor: pointer;
      }
      .content {
        width: 70%;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }
      .product-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: calc(33.33% - 20px);
      }
      .product-card img {
        width: 100%;
        border-radius: 5px;
      }
      .product-card h2 {
        margin-top: 10px;
        font-size: 18px;
      }
      .product-card p {
        color: #666;
      }
  .content {
   flex: 4;
  }

  .products {
   width: 100%;
   display: flex;
   flex-wrap: wrap;
   padding: 10px;
   gap: 10px;
   cursor: pointer;
  }

  .product {
   width: 275px;
   background-color: #fff;
   display: flex;
   flex-direction: column;
   box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
   overflow: hidden;
  }

  .product .img {
   height: 200px;
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

  /* Css for product page */
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">
  @include('frontEnd/partial/header')


  <section class="agb-container">
   <div class="container p-box">
      <div class="sidebar">
        <h6 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Pools</h6>
        <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
        <h6>Technik</h6>
        <h6>Attraktionen</h6>
        <h6>Verrohrung</h6>
        <h6>Wasserpflege</h6>
        <h2>Product Categories</h2>
        <ul id="categoryList">
          <li><a href="#" onclick="filterProducts('All')">All</a></li>
          <li>
            <a href="#" onclick="filterProducts('Category 1')">Category 1</a>
          </li>
          <li>
            <a href="#" onclick="filterProducts('Category 2')">Category 2</a>
          </li>
          <li>
            <a href="#" onclick="filterProducts('Category 3')">Category 3</a>
          </li>
          <li>
            <a href="#" onclick="filterProducts('Category 4')">Category 4</a>
          </li>
        </ul>
      </div>
      <div class="content" id="productContainer">
        <div class="product-card" data-category="Category 1">
          <img src="product1.jpg" alt="Product 1" />
          <h2>Product 1</h2>
          <p>Description of Product 1</p>
        </div>
        <div class="product-card" data-category="Category 2">
          <img src="product2.jpg" alt="Product 2" />
          <h2>Product 2</h2>
          <p>Description of Product 2</p>
        </div>
        <div class="product-card" data-category="Category 3">
          <img src="product3.jpg" alt="Product 3" />
          <h2>Product 3</h2>
          <p>Description of Product 3</p>
        </div>
        <!-- More product cards go here -->
      </div>
   </div>
  </section>
  @include('frontEnd/partial/footer')



  <script>
      function filterProducts(category) {
        const productCards = document.querySelectorAll(".product-card");

        productCards.forEach((card) => {
          const cardCategory = card.getAttribute("data-category");
          if (category === "All" || category === cardCategory) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      }
    </script>
 </body>

</html>