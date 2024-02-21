<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spato</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}"> -->

  <!-- Fonts -->
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/e1528f4468.js" crossorigin="anonymous"></script> -->
  <!-- Fonts -->

  <!-- Crausel start -->

  <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

  <!-- Crausel ends -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

  <style>
  /* Import Google font - Poppins */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

  .wrapper {
   max-width: 90%;
   width: 100%;
   position: relative;
  }

  .wrapper i {
   top: 50%;
   height: 50px;
   width: 50px;
   cursor: pointer;
   font-size: 1.25rem;
   position: absolute;
   text-align: center;
   line-height: 50px;
   background: #fff;
   border-radius: 50%;
   box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
   transform: translateY(-50%);
   transition: transform 0.1s linear;
  }

  .wrapper i:active {
   transform: translateY(-50%) scale(0.85);
  }

  .wrapper i:first-child {
   left: -22px;
   top: 2rem;
   position: relative;
   display: none;
  }

  .wrapper i:last-child {
   right: -22px;
   background-color: var(--blue);
   color: var(--white);
  }

  .wrapper .carousel {
   display: grid;
   grid-auto-flow: column;
   grid-auto-columns: calc((102% / 3) - 12px);
   overflow-x: auto;
   scroll-snap-type: x mandatory;
   gap: 16px;
   border-radius: 8px;
   scroll-behavior: smooth;
   scrollbar-width: none;
   height: 80vh;
   margin: 1rem 0rem;
  }

  .carousel::-webkit-scrollbar {
   display: none;
  }

  .carousel.no-transition {
   scroll-behavior: auto;
  }

  .carousel.dragging {
   scroll-snap-type: none;
   scroll-behavior: auto;
  }

  .carousel.dragging .card {
   cursor: grab;
   user-select: none;
  }

  .carousel :where(.card, .img) {
   display: flex;
   justify-content: center;
   align-items: center;
  }

  .carousel .card {
   scroll-snap-align: start;
   height: 442px;
   list-style: none;
   background: #fff;
   cursor: pointer;
   padding-bottom: 15px;
   flex-direction: column;
   border-radius: 8px;
  }

  .carousel .card .img {
   height: 200px;
   width: 200px;
   margin-top: 2rem;
  }

  .card .img img {
   width: 200px;
   height: 200px;
  }

  .carousel .card h2 {
   font-weight: 500;
   font-size: 1.56rem;
   margin: 30px 0 5px;
  }

  .carousel .card span {
   color: #6A6D78;
   font-size: 1.31rem;
  }

  li .btn {
   text-align: center;
   width: 100%;
   background-color: var(--blue) !important;
   color: var(--white) !important;
   font-weight: 700 !important;
   text-decoration: none !important;
   padding: 8px 0px !important;
   border: 1px solid var(--blue);
   border-radius: 0px 0px 5px 5px !important;
   transition: 0.5s ease-in-out;
  }

  li .btn:hover {
   background-color: var(--white) !important;
   color: var(--blue) !important;
   border: 1px solid var(--blue);
  }

  @media screen and (max-width: 900px) {
   .wrapper .carousel {
    grid-auto-columns: calc((110% / 2) - 9px);
   }
  }

  @media screen and (max-width: 600px) {
   .wrapper .carousel {
    grid-auto-columns: 110%;
   }
  }
  </style>
 </head>

 <body>

  @include('frontEnd/partial/header')





  <!-- @if(auth()->check())

{{auth()->user()->id}}

@endif -->


  <div class="bg-image myDiv" id="hero" style="clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0% 100%);">

   <img id="myImage" src="{{ asset('assets/frontEnd/web/images/light-background.png')}} "
    style="width:100%; height:100%;" alt="" srcset="">
   <img class="product" src="{{ asset('assets/frontEnd/web/images/robot-2.png')}} " alt="" srcset="">
   <div class="hero-heading-container dark-mode-text">
    <h1 class="hero-heading">Specialist</h1>
    <p class="hero-details">Wholesaller for</p>
    <h1 class="hero-heading">Pools</h1>
    <p class="hero-details">& Equipments</p>
   </div>

   <img class="exclusive" src="{{ asset('assets/frontEnd/web/images/exclusive-tag.png')}} " alt="" srcset="">

  </div>

  <section class="services dark-mode-section1" id="view">
   <div class="container">
    <div class="row text-center p-4">
     <div class="col d-flex m-auto">
      <span class="icon"><i class="fa fa-truck" aria-hidden="true"></i></span>
      <p class="view-desc ps-3">Fast, Free Shipping On Order Over 350€</p>
     </div>
     <div class="col d-flex m-auto">
      <span class="icon"><i class="fa-solid fa-water-ladder"></i></span>
      <p class="view-desc ps-3">
       Your Trade Partener in Water Technology
      </p>
     </div>
     <div class="col d-flex m-auto">
      <span class="icon"><i class="fa-solid fa-star"></i></span>
      <p class="view-desc ps-3">8.3/10 Customer Rating</p>
     </div>
    </div>
   </div>
  </section>
  <section class="dark-mode-section2">
   <div class="container pt-5 ">
    <!-- <h5 class="text-center">Subtitle</h5> -->
    <h3 class="text-center">Our Products Categories</h3>
    <div class="categories text-center p-4 m-auto">

    @foreach($productCategories as $category)



     <div class="dark-mode-section1 categories-card">
      <a href="{{url('/api/ProductsByCategories/' . $category->categorie_1)}}"> <span class="icon"
        style="padding-top:10px;"><img src="{{asset($category->imageFile)}}"></span>
       <p class="view-desc">{{ $category->categorie_1 }}</p>
      </a>

     </div>
     @endforeach

 


</div>


   </div>

  </section>


  <!--  -->
  <section class="latest-products pt-5 dark-mode-section2">

  </section>
  <!--  -->


  <!-- Latest Products starts -->
  <section class="latest-products pt-5 dark-mode-section2">
   <!-- <h5 class="text-center ">Subtitle</h5> -->
   <h3 class="text-center ">Latest Products</h3>
   <div style="display: flex;
  padding: 0 35px;
  align-items: center;
  justify-content: center;">
    <div class="wrapper">
     <i id="left" class="fa-solid fa-angle-left"></i>
     <ul class="carousel">


      @foreach ($latestProduct as $product)
      <li class="card">
       <a href="{{ url('api/ProductdetailPage/' . $product->id . '/' . $product->Kategorie_1) }}">
        <div class="img">
         <img src="{{ asset('storage/' . $product->Bild_1) }}" alt="Product Image">
        </div>
       </a>
       <div class="card-body">
        <h5 class="card-title">{{ $product->Artikelname }}</h5>
        <p class="card-text">
          <p title="{{ $product->Beschreibung_lang }}">Merkamal - {{ substr($product->Beschreibung_lang, 0,  35) }} @if(strlen($product->Beschreibung_lang)>35) .... @endif</p>
        </p>
        <p class="product-price">
         statt - <span class="price">{{ $product->Preis_zzgl_MwSt }}€</span>
        </p>
       </div>


       <a href="#" class="btn addToCartButton" data-product-id="{{ $product->id }}" data-quantity="1"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        IN DEN WARENKORB
       </a>
      </li>
      @endforeach


     </ul>
     <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
   </div>
  </section>
  <!-- Latest Products ends -->
  <section class="featured-products dark-mode-section1">
   <h5 class="text-center text-light">Subtitle</h5>
   <h3 class="text-center text-light">Our Products Categories</h3>
   <div style="display: flex;
  padding: 0 35px;
  align-items: center;
  justify-content: center;">
    <div class="wrapper">
     <i id="left" class="fa-solid fa-angle-left"></i>
     <ul class="carousel">
      @foreach ($allProduct as $product)
        <li class="card">
          <a href="{{ url('api/ProductdetailPage/' . $product->id . '/' . $product->Kategorie_1) }}">
            <div class="img">
            <img src="{{ asset('storage/' . $product->Bild_1) }}" alt="Product Image">
            </div>
          </a>

          <div class="card-body">
            <h5 class="card-title">{{ $product->Artikelname }}</h5>
            <p class="card-text">
              <p title="{{ $product->Beschreibung_lang }}">Merkamal - {{ substr($product->Beschreibung_lang, 0,  35) }} @if(strlen($product->Beschreibung_lang)>35) .... @endif</p>
            </p>
            <p class="product-price">
            statt - <span class="price">{{ $product->Preis_zzgl_MwSt }}€</span>
            </p>
          </div>

          <a href="#" class="btn addToCartButton" data-product-id="{{ $product->id }}" data-quantity="1"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            IN DEN WARENKORB
          </a>
        </li>
        @endforeach
     </ul>
     <i id="right-2" class="fa-solid fa-angle-right"></i>
    </div>
   </div>
  </section>

  <section></section>

  <script>
  const wrapper = document.querySelector(".wrapper");
  const carousel = document.querySelector(".carousel");
  const firstCardWidth = carousel.querySelector(".card").offsetWidth;
  const arrowBtns = document.querySelectorAll(".wrapper i");
  const carouselChildrens = [...carousel.children];

  let isDragging = false,
   isAutoPlay = true,
   startX, startScrollLeft, timeoutId;

  // Get the number of cards that can fit in the carousel at once
  let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

  // Insert copies of the last few cards to beginning of carousel for infinite scrolling
  carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
   carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
  });

  // Insert copies of the first few cards to end of carousel for infinite scrolling
  carouselChildrens.slice(0, cardPerView).forEach(card => {
   carousel.insertAdjacentHTML("beforeend", card.outerHTML);
  });

  // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
  carousel.classList.add("no-transition");
  carousel.scrollLeft = carousel.offsetWidth;
  carousel.classList.remove("no-transition");

  // Add event listeners for the arrow buttons to scroll the carousel left and right
  arrowBtns.forEach(btn => {
   btn.addEventListener("click", () => {
    carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
   });
  });

  const dragStart = (e) => {
   isDragging = true;
   carousel.classList.add("dragging");
   // Records the initial cursor and scroll position of the carousel
   startX = e.pageX;
   startScrollLeft = carousel.scrollLeft;
  }

  const dragging = (e) => {
   if (!isDragging) return; // if isDragging is false return from here
   // Updates the scroll position of the carousel based on the cursor movement
   carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  }

  const dragStop = () => {
   isDragging = false;
   carousel.classList.remove("dragging");
  }

  const infiniteScroll = () => {
   // If the carousel is at the beginning, scroll to the end
   if (carousel.scrollLeft === 0) {
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
    carousel.classList.remove("no-transition");
   }
   // If the carousel is at the end, scroll to the beginning
   else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");
   }

   // Clear existing timeout & start autoplay if mouse is not hovering over carousel
   clearTimeout(timeoutId);
   if (!wrapper.matches(":hover")) autoPlay();
  }

  const autoPlay = () => {
   if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
   // Autoplay the carousel after every 2500 ms
   timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
  }
  autoPlay();

  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("mousemove", dragging);
  document.addEventListener("mouseup", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);
  </script>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
   const categoriesContainer = document.querySelector('.categories');
   const categoriesCards = document.querySelectorAll('.categories-card');

   if (categoriesCards.length < 6) {
    categoriesContainer.style.justifyContent = 'center';
   }
  });
  </script>
  



  @include('frontEnd/partial/rightSidebar')



  @include('frontEnd/partial/footer')

 </body>

</html>