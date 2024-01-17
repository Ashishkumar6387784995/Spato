<section class="sidebar">
 <!-- <button class="btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
  aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
   <h3 id="offcanvasRightLabel">Shopping Cart</h3>
   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <div class="products-list">

    <!--  -->
    <div id="cart-items-list">
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



<script>
// Add to Cart AJAX request
$('.addToCartButton').on('click', function() {
 var productId = $(this).data('product-id');
 var quantity = $(this).data('quantity');
 console.log(quantity);

 $.ajax({
  type: 'POST',
  url: '/api/cart/addApi',
  headers: {
   'guest-token': getGuestToken(),
  },
  data: {
   product_id: productId,
   quantity: quantity,
  },
  success: function(response) {
   //   alert(response.message);
   updateCartItemsList();
  },
  error: function(error) {
   console.error('Error adding to cart', error);
  }
 });
});

// Retrieve Cart Items AJAX request
function updateCartItemsList() {
 $.ajax({
  type: 'GET',
  url: '/api/cart/getCartItemsApi',
  headers: {
   'guest-token': getGuestToken(),
  },
  success: function(response) {
   console.log(response.cartItems);
   displayCartItems(response.cartItems);
  },
  error: function(error) {
   console.error('Error retrieving cart items', error);
  }
 });
}

// Display Cart Items in the right sidebar
function displayCartItems(cartItems) {
 console.log(cartItems);
 var cartItemsList = $('#cart-items-list');
 cartItemsList.empty();

 cartItems.forEach(function(item, index) {
  // Create a new product element for each cart item
  var productElement = $('<div class="col">');

  // <img src="{{ asset("storage/") }}' + '/' + item.imageFile + '" alt="Image" style="height:80px;">

  // Product image (replace 'item.product_image_url' with the actual property in your response)
  productElement.append('<img src="{{ asset("storage/") }}' + '/' + item.product_image + '" alt="" srcset="">');

  // Product details
  var productDetails = $('<div class="col">');
  productDetails.append('<a href="#" class="product-name"><p>' + item.product_name + '</p></a>');

  // Price display (replace 'item.total_price' with the actual property in your response)
  productDetails.append('<p class="price"><span id="totalPriceDisplay' + index + '">' + item.total_price +
   '</span>€</p>');

  // Quantity controls
  var quantityControls = $('<div class="sidebar-quantity">');
  quantityControls.append('<button class="quantity-btn" onclick="decreaseQuantity(' + item.product_id +
   ')"><i class="fa-solid fa-minus"></i></button>');
  quantityControls.append('<input type="text" id="quantity' + item.product_id + '" value="' + item.quantity +
   '" min="1" readonly />');
  quantityControls.append('<button class="quantity-btn" onclick="increaseQuantity(' + item.product_id +
   ')"><i class="fa-solid fa-plus"></i></button>');

  productDetails.append(quantityControls);
  productElement.append(productDetails);

  cartItemsList.append(productElement);
 });
}

 
    // Example function signatures for increasing and decreasing quantity
    function increaseQuantity(productId) {
        // Implement your logic to increase quantity for the specified product
    }

    function decreaseQuantity(productId) {
        // Implement your logic to decrease quantity for the specified product
    }

// Function to get or generate guest token
function getGuestToken() {
 var guestToken = localStorage.getItem('guestToken');
 console.log(guestToken);
 if (!guestToken) {
  guestToken = generateGuestToken();
  localStorage.setItem('guestToken', guestToken);
 }
 return guestToken;
}

// Function to generate a guest token
function generateGuestToken() {
 return Math.random().toString(36).substring(2) + Date.now().toString(36);
}

// Initial update of cart items list
updateCartItemsList();
</script>