<section class="sidebar">
 <button class="btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
  aria-controls="offcanvasRight">Toggle right offcanvas</button>

 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
   <h3 id="offcanvasRightLabel">Shopping Cart</h3>
   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <div class="products-list">
    <!--  -->
    <div class="products row">
     <div class="col">
      <img src="{{ asset('assets/frontEnd/web/images/p-1.png')}}" alt="" srcset="">
     </div>
     <div class="col">
      <a href="#" class="product-name">
       <p>Lorem ipsum dolor sit amet.</p>
      </a>
      <p class="price"><span id="totalPriceDisplay1">10</span>€</p>
      <div class="sidebar-quantity">
       <button class="quantity-btn" onclick="decreaseQuantity()"><i class="fa-solid fa-minus"></i></button>
       <input type="text" id="quantity" value="1" min="1" readonly />
       <button class="quantity-btn" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
      </div>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="products row">
     <div class="col">
      <img src="{{ asset('assets/frontEnd/web/images/p-1.png')}}" alt="" srcset="">
     </div>
     <div class="col">
      <a href="#" class="product-name">
       <p>Lorem ipsum dolor sit amet.</p>
      </a>
      <p class="price"><span id="totalPriceDisplay1">10</span>€</p>
      <div class="sidebar-quantity">
       <button class="quantity-btn" onclick="decreaseQuantity()"><i class="fa-solid fa-minus"></i></button>
       <input type="text" id="quantity" value="1" min="1" readonly />
       <button class="quantity-btn" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
      </div>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="products row">
     <div class="col">
      <img src="{{ asset('assets/frontEnd/web/images/p-1.png')}}" alt="" srcset="">
     </div>
     <div class="col">
      <a href="#" class="product-name">
       <p>Lorem ipsum dolor sit amet.</p>
      </a>
      <p class="price"><span id="totalPriceDisplay1">10</span>€</p>
      <div class="sidebar-quantity">
       <button class="quantity-btn" onclick="decreaseQuantity()"><i class="fa-solid fa-minus"></i></button>
       <input type="text" id="quantity" value="1" min="1" readonly />
       <button class="quantity-btn" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
      </div>
     </div>
    </div>
    <!--  -->

   </div>
  </div>
  <div class="total">
   <p>Total</p>
   <p>1452 € /-</p>
  </div>
  <div class="container">
   <a href="#"><button class="btn checkout">Checkout</button></a> <br />
   <a href="#"><button class="btn cart">View Cart</button></a>
  </div>
 </div>
</section>


<script>
// Get the quantity input and total price span
var quantityInput = document.getElementById('quantity');
var totalPriceDisplay = document.getElementById('totalPriceDisplay1');

// Function to decrease quantity and update price
function decreaseQuantity() {
 var currentQuantity = parseInt(quantityInput.value, 10);

 // Ensure quantity is greater than 1
 if (currentQuantity > 1) {
  currentQuantity--;
  quantityInput.value = currentQuantity;
  updateTotalPrice(currentQuantity);
 }
}

// Function to increase quantity and update price
function increaseQuantity() {
 var currentQuantity = parseInt(quantityInput.value, 10);

 // Increase quantity
 currentQuantity++;
 quantityInput.value = currentQuantity;

 // Update total price
 updateTotalPrice(currentQuantity);
}

// Function to update total price based on quantity
function updateTotalPrice(quantity) {
 // Assuming price per item is 10€
 var pricePerItem = 10;
 var totalPrice = quantity * pricePerItem;

 // Update the display
 totalPriceDisplay.textContent = totalPrice;
}
</script>