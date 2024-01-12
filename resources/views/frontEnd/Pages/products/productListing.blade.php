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
  <style>
  /* Imports */


  .sidebar {
   height: 100vh;
   width: 200px;
   /* background-color:#252627; */
  }

  .menu {
   user-select: none;
   display: flex;
   justify-content: space-around;
   width: 100%;
   /* height: 50px; */
   display: flex;
   align-items: center;
   color: white;
   transition-duration: 0.3s;
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
   transition-duration: 0.3s;
   transform: translateX(20px);
  }

  /* Disable and enable arrow on hover */
  .menu>i {
   opacity: 0;
  }

  .menu:hover>i {
   opacity: 1;
  }

  /* Translate the arrow logo right on click */
  .menu:active>i {
   margin-left: 10px;
  }




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
   flex: 1;
   background-color: #f5f6fa;
   padding: 10px;
   height: 400px;
  }

  .logo {
   font-weight: 800;
   font-size: 20px;
   text-transform: uppercase;
   color: #e74c3c;
   margin-bottom: 10px;
  }

  .sidebar input[type="text"] {
   padding: 5px 5px;
   outline: none;
   width: 100%;
   margin-bottom: 15px;
  }

  .sidebar h3 {
   font-weight: 600;
   margin-bottom: 10px;
  }

  .sidebar ul {
   list-style: none;
  }

  .sidebar ul li {
   margin: 5px 0;
   padding-left: 5px;
   cursor: pointer;
  }

  .sidebar ul li:hover {
   background-color: #dcdde1;
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
     <input type="text" id="txtSearch" placeholder="Search Product..." />
     <ul class="category-list"></ul>
     <!-- <div class="price">
      <input type="range" id="priceRange" />
      <span class="priceValue">500</span>
     </div> -->
    </div>
    <div class="content">
     <div class="products">

     </div>
    </div>


    <!-- <div class="card d-none d-md-block">
     <img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="card-img-top" alt="..." />
     <div class="card-body">
      
      <p class="card-text">
       <li>Merkamal 1 - lauft fluffig</li>
       <li>Merkamal 2 - fahurt urail... lorem</li>
      </p>
      

     </div>
     <a href="#" class="btn">IN DEN WARENKORB</a>
    </div> -->
   </div>
   </div>
  </section>
  @include('frontEnd/partial/footer')



  <script>
  const data = [{
    id: 1,
    name: "Fire Boltt Ninja 2",
    img: "{{ asset('assets/frontEnd/web/images/product 1.png')}}",
    amt: 1599,
    seller: "Boltt Store",
    catagory: "Watch",
   },

   {
    id: 2,
    name: "Noise Pulse Go",
    img: "{{ asset('assets/frontEnd/web/images/product-2.png')}}",
    amt: 1300,
    seller: "Noise Store",
    catagory: "Watch",
   },

   {
    id: 3,
    name: "boAt Xtend Pro",
    img: "{{ asset('assets/frontEnd/web/images/product-2.png')}}",
    amt: 2799,
    seller: "Rajesh Watchs",
    catagory: "Watch",
   },
   {
    id: 4,
    name: "Lenovo Tab M8",
    img: "{{ asset('assets/frontEnd/web/images/product-2.png')}}",
    amt: 9270,
    seller: "Stonehenge Retail",
    catagory: "Tablets",
   },
   {
    id: 5,
    name: "Honor PAD X8",
    img: "{{ asset('assets/frontEnd/web/images/product 1.png')}}",
    amt: 12999,
    seller: "Honor india",
    catagory: "Tablets",
   },

   {
    id: 6,
    name: "IKALL N9 ",
    img: "{{ asset('assets/frontEnd/web/images/product 1.png')}}",
    amt: 3999,
    seller: "IKALL Store",
    catagory: "Tablets",
   },

   {
    id: 7,
    name: "Oppo Pad Air",
    img: "{{ asset('assets/frontEnd/web/images/product-2.png')}}",
    amt: 15999,
    seller: "Oppo Store",
    catagory: "Tablets",
   },
   {
    id: 8,
    name: "Acer EK220Q",
    img: "{{ asset('assets/frontEnd/web/images/product-2.png')}}",
    amt: 6249,
    seller: "Accer Store",
    catagory: "Monitors",
   },
   {
    id: 9,
    name: "Samsung 24",
    img: "{{ asset('assets/frontEnd/web/images/product 1.png')}}",
    amt: 9799,
    seller: "Samsung Store",
    catagory: "Monitors",
   },

   {
    id: 10,
    name: "ZEBRONICS AC32FHD ",
    img: "{{ asset('assets/frontEnd/web/images/product 1.png')}}",
    amt: 12799,
    seller: "ZEBRONICS Store",
    catagory: "Monitors",
   },
  ];

  const productsContainer = document.querySelector(".products");
  const categoryList = document.querySelector(".category-list");

  function displayProducts(products) {
   if (products.length > 0) {
    const product_details = products
     .map(
      (product) => `
 <div class="product">
 <div class="img">
   <img src="${product.img}" alt="${product.name}" />
 </div>
 <div class="product-details">
 <h5 class="card-title">Saugrobroter</h5>
 <p class="card-text">
       <li>Merkamal 1 - lauft fluffig</li>
       <li>Merkamal 2 - fahurt urail... lorem</li>
      </p>
      <p class="product-price">
       statt - 42,50€ <span class="price">25,30€</span>
      </p>
 </div>
 <a href="#" class="cart-btn">IN DEN WARENKORB</a>
</div>`
     )
     .join("");

    productsContainer.innerHTML = product_details;
   } else {
    productsContainer.innerHTML = "<h3>No Products Available</h3>";
   }
  }

  function setCategories() {
   const allCategories = data.map((product) => product.catagory);
   //console.log(allCategories);
   const catagories = [
    "All",
    ...allCategories.filter((product, index) => {
     return allCategories.indexOf(product) === index;
    }),
   ];
   //console.log(catagories);
   categoryList.innerHTML = catagories
    .map((catagory) => `<li>${catagory}</li>`)
    .join("");

   categoryList.addEventListener("click", (e) => {
    const selectedCatagory = e.target.textContent;
    selectedCatagory === "All" ?
     displayProducts(data) :
     displayProducts(
      data.filter((product) => product.catagory == selectedCatagory)
     );
   });
  }
  const priceRange = document.querySelector("#priceRange");
  const priceValue = document.querySelector(".priceValue");

  function setPrices() {
   const priceList = data.map((product) => product.amt);
   const minPrice = Math.min(...priceList);
   const maxPrice = Math.max(...priceList);
   priceRange.min = minPrice;
   priceRange.max = maxPrice;
   priceValue.textContent = "Rs." + maxPrice;

   priceRange.addEventListener("input", (e) => {
    priceValue.textContent = "Rs." + e.target.value;
    displayProducts(data.filter((product) => product.amt <= e.target.value));
   });
  }

  const txtSearch = document.querySelector("#txtSearch");
  txtSearch.addEventListener("keyup", (e) => {
   const value = e.target.value.toLowerCase().trim();
   if (value) {
    displayProducts(
     data.filter((product) => product.name.toLowerCase().indexOf(value) !== -1)
    );
   } else {
    displayProducts(data);
   }
  });

  displayProducts(data);
  setCategories();
  setPrices();
  </script>
 </body>

</html>