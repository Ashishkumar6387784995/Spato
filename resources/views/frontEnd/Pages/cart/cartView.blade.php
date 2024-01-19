<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add to cart</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
  .cart-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
  }

  .cart-container nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
  }

  .cart-container nav ol li:nth-child(2) {
   color: var(--blue) !important;
  }

  .cart-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .cart-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }



  .cart-container .content h6 {
   font-weight: 600;
   font-size: 18px;
   color: black;
  }

  .cart-container .content .details {
   text-align: justify;
   font-size: 14px;
  }

  .contact-details {
   background-color: #ffffff;
   border-radius: 5px;
  }

  .cart-container .btn {
   background-color: #44e1d5;
   border: 1px solid #44e1d5;
   width: 90%;
   font-weight: 600;
   color: var(--white);
   margin: auto;
   justify-content: center;
   display: block;
   text-align: center;
  }

  .cart-container .btn:hover {
   border: 1px solid #44e1d5;
   color: var(--blue);
  }

  .cart-container .details p {
   margin: 0;
   padding: 0;
  }

  .input-field {
   font-weight: 700;
   border: none;
   outline: none;
  }

  .total {
   font-size: 20px;
  }

  .item-img {
   width: 15%;
  }

  .item-img .img {
   width: 100%;
   height: 100px;
   background: #fff;
  }

  .product-desc {
   width: 35%;
  }

  .product-desc p {
   /* margin: 0px 5px; */
  }

  table thead tr th {
   text-align: center;
  }

  table tbody tr {
   /* margin: 20px 0px !important; */
  }


  /* .counter {
            width: 50px;
            display: flex;
            height: 50px;
            justify-content: center;
            background-color: #F1F1F1;
            border-radius: 5px;
        }

        .counter-btn {
            background: transparent;
            border: none;
            color: #606060;
        } */
  .counter {
   display: flex;
  }

  .counter .quantity-btn {
   width: 30px;
   /* padding: 2px 10px; */
   border: 0.5px solid var(--black);
   background-color: var(--white);
   border-radius: 3px;
   text-align: center;
   font-weight: 800;
  }

  .counter input {
   width: 30px;
   /* padding: 2px 10px; */
   border: 0.5px solid var(--black);
   background-color: var(--white);
   border-radius: 3px;
   text-align: center;
   margin: 0px 5px;
  }


  #counter-value {
   /* background-color: #F1F1F1; */
   padding: 15px 10px;
   text-align: center;
  }

  .counter i {
   font-size: 10px;
  }


  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .cart-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   .content {
    display: block !important;
   }

   .form {
    width: 100% !important;
   }

   .address {
    width: 100% !important;
   }

   /* footer .footer-container {
    width: 96%;
  } */
   tr {
    display: grid;
   }

   td {
    display: grid;
   }

   th {
    display: none;
   }


  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header')
  <section class="cart-container">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cart</li>
     </ol>
    </nav>

    <h1 class="text-start" style="font-size: 30px; font-weight: 600; color: black;">Shopping Cart
    </h1>

    <div class="row content">
     <div class="col-8 form">

      <table class="table" id="cart-items-table">
       <thead>
        <tr>
         <th scope="col">Item</th>
         <th scope="col"></th>
         <th scope="col">Price</th>
         <th scope="col">Qty</th>
         <th scope="col">Subtotal</th>
         <th scope="col"></th>
        </tr>
       </thead>

       <tbody id="cart-items-table-body">



       </tbody>
      </table>

     </div>
     <div class="col-4  address">
      <div class="contact-details container">
       <h3 class="pt-3">Summary</h3>
       <div class="row">
        <div class="col">
         <div class="accordion" id="accordionExample">
          <div class="accordion-item">
           <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             Estimate Shipping and Tax
            </button>
           </h2>
           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1"
               placeholder="Enter your destination to get a shipping estimate." rows="3"></textarea>
             </div>
            </div>
           </div>
          </div>

          <div class="accordion-item">
           <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             Apply Discount Code
            </button>
           </h2>
           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <div class="mb-3 d-flex">
              <input type="text" class="form-control" id="address" placeholder="Enter your discount coupon">
              <button type="submit" class="btn ms-2" style="width:30%;">Apply</button>
             </div>
            </div>
           </div>
          </div>
          <hr />
          <div class="details d-flex justify-content-between">
           <p class="input-field">Subtotal</p>
           <span><input type="text" class="input-field" name="" id="subto" value="13,047.00"
             style="width:150px; border:none; text-align:right;" readonly="readonly">€</span>
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Shipping </p>
           <span><input type="number" id="shipping" value="21.00" step="0.01"
             style="width:150px; border:none; outline:none; text-align:right;" readonly="readonly"
             oninput="calculateTotal()">€</span>
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Tax</p>
           <span><input type="text" class="input-field" name="" id="tax" value="1.91"
             style="width:150px; border:none; text-align:right;" readonly="readonly">€</span>
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Order Total</p>
           <span><input type="text" class="input-field total" name="" id="grandTotal" value="13,068.00"
             style="width:150px; border:none; text-align:right;" readonly="readonly">€</span>
          </div>


         </div>
        </div>
       </div>
       <div class="row">
        <div class="col">
         <button type="submit" id="checkOutButton" class="btn mb-3">Proceed to Checkout</button>
        </div>
       </div>
      </div>
     </div>

    </div>
  </section>



  <!-- Login Form Modal starts -->



  <div class="modal fade" id="exampleLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <a class="" href="#"><img class="signup-brand-logo" src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}"
        alt="" srcset="" />

      </a>


      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

     </div>
     <p class="form-header-content text-center">
      Wenn Sie ein Konto haben, melden Sie sich mit Ihrer E-Mail-Adresse an
     </p>
     <div class="modal-body">
      <form id="loginForm">
       <span id="erro-message" style="color:red;"></span>
       <div class="mb-3">
        <label for="recipient-name" class="col-form-label">E-mail*</label>
        <input type="text" class="form-control" id="emai" name="email" require>
        <span id="emai-err" style="color:red;"></span>
       </div>
       <div class="mb-3">
        <label for="message-text" class="col-form-label">Password*</label>
        <input type="password" class="form-control" id="passwor" name="password" require>
        <span id="passwor_err" style="color:red;"></span>
       </div>
       <button type="button" class="btn btn-style" id="exampleLogin">Login</button>
      </form>
      <p class="foget-password d-flex"><a style="text-decoration:underline;" type="button" data-bs-toggle="modal"
        data-bs-target="#exampleModal1" class="nav-link" href="#">Passwort vergessen?</a></p>
      <p class="foget-password d-flex">Sie haben kein Konto?<span><a style="text-decoration:underline;" type="button"
         data-bs-toggle="modal" data-bs-target="#exampleModal2" class="nav-link ps-3" href="#"> Hier
         registrieren.</a></span></p>
     </div>
     <div class="modal-footer">

     </div>
    </div>
   </div>
  </div>
  <!--  Login Form Modal ends -->





  @include('frontEnd/partial/footer')

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
   integrity="sha256-oP6HI/tT1HqOQZ8dm37LxlA6C9XvRAISzTREpL4MzkE=" crossorigin="anonymous"></script>

  <script>
  $(document).ready(function() {
   // Initial update of cart items list
   updateCartItemsList();
  });

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

  // Function to display cart items
  function displayCartItems(cartItems) {
   var cartItemsTableBody = $('#cart-items-table-body');
   cartItemsTableBody.empty();

   cartItems.forEach(function(item, index) {
    var tableRow = $('<tr>');

    var itemImgCell = $('<td class="item-img">');
    itemImgCell.append('<img src="{{ asset("storage/") }}' + '/' + item.product_image + '" class="img" alt="..." />');

    tableRow.append(itemImgCell);

    var productDescCell = $('<td class="product-desc">');
    productDescCell.append('<p>' + item.product_name + '</p>');
    tableRow.append(productDescCell);

    var priceCell = $('<td><input type="number" id="price' + index + '" value="' + item.total_price +
     '" step="0.01" style="width:80px; border:none; outline:none; text-align:right; background:transparent;" readonly="readonly">€</td>'
    );
    tableRow.append(priceCell);

    var quantityCell = $('<td>');
    quantityCell.append('<div class="counter"><button class="quantity-btn" onclick="decreaseQuantity(' + item
     .product_id +
     ')"><i class="fa-solid fa-minus"></i></button> <input type="text" class="quantity-input" id="quantity' + item
     .product_id + '" value="' + item.quantity +
     '" min="1" readonly /> <button class="quantity-btn" onclick="increaseQuantity(' + item.product_id +
     ')"><i class="fa-solid fa-plus"></i></button></div>');
    tableRow.append(quantityCell);

    var subtotalCell = $('<td><input type="text" class="input-field" id="subtotal' + index + '" value="' + (item
      .total_price * item.quantity) +
     '" style="width:80px; border:none; outline:none; text-align:right; background:transparent;" readonly="readonly">€</td>'
    );
    tableRow.append(subtotalCell);

    var iconCell = $('<td>');
    iconCell.append(
     '<div class="icon"><i style="font-size:20px; margin-top:5px; cursor:pointer;" class="fa-regular fa-circle-xmark" onclick="removeCartItem(' +
     item
     .product_id + ')"></i></div></td></tr>');
    tableRow.append(iconCell);

    cartItemsTableBody.append(tableRow);
   });
  }

  // Example function to increase quantity
  function increaseQuantity(productId) {
   var quantityInput = $('#quantity' + productId);
   var currentQuantity = parseInt(quantityInput.val(), 10);

   // Increase the quantity by 1
   var newQuantity = currentQuantity + 1;
   quantityInput.val(newQuantity);
   updateQuantityInDatabase(productId, newQuantity);
   // Implement any additional logic you need, such as updating the server or recalculating prices
  }

  // Example function to decrease quantity
  function decreaseQuantity(productId) {
   var quantityInput = $('#quantity' + productId);
   var currentQuantity = parseInt(quantityInput.val(), 10);

   // Decrease the quantity by 1, but ensure it doesn't go below 1
   var newQuantity = Math.max(currentQuantity - 1, 1);

   quantityInput.val(newQuantity);
   updateQuantityInDatabase(productId, newQuantity);
   // Implement any additional logic you need, such as updating the server or recalculating prices
  }

  function updateQuantityInDatabase(productId, newQuantity) {
   $.ajax({
    type: 'POST',
    url: '/api/cart/updateQuanityApi',
    headers: {
     'guest-token': getGuestToken(),
    },
    data: {
     product_id: productId,
     quantity: newQuantity,
    },
    success: function(response) {
     console.log('Quantity updated successfully');
     console.log(response.message);
     // You can handle additional logic or UI updates here if needed
    },
    error: function(error) {
     console.error('Error updating quantity', error);
    }
   });
  }

  function removeCartItem(productId) {
   $.ajax({
    type: 'DELETE',
    url: 'cart/deleteCartProductsApi/' + productId, // Replace with your actual delete endpoint
    headers: {
     'guest-token': getGuestToken(),
    },
    success: function(response) {
     console.log('Item removed successfully');
     // Update the cart display or perform additional actions as needed
     updateCartItemsList();
    },
    error: function(error) {
     console.error('Error removing item', error);
    }
   });
  }

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
  </script>


  <script>
  $('#checkOutButton').on('click', function() {

   var guestToken = localStorage.getItem('guestToken');
   console.log(guestToken);
   if (!guestToken) {
    guestToken = generateGuestToken();
    localStorage.setItem('guestToken', guestToken);
   }



   var authToken = localStorage.getItem('authToken');
   console.log(authToken);
   if (!authToken) {

    $('#exampleLogin').modal('show');
    $('.sidebar').hide();

   } else {
    window.location.href = '/api/checkout';
   }


  });
  </script>


  <script>
  $(document).ready(function() {
   $('#exampleLogin').click(function(event) {
    event.preventDefault(); // Prevent the default form submission behavior

    console.log('hello');
    // Clear previous error messages
    $('#erro-message').text('');
    $('#emai-err').text('');
    $('#passwor-err').text('');

    // Get form data
    var formData = {
     email: $('#emai').val(),
     password: $('#passwor').val()
    };

    // Client-side validation
    if (!formData.email) {
     $('#emai-err').text('Please enter your email.');
     return;
    }

    if (!formData.password) {
     $('#passwor-err').text('Please enter your password.');
     return;
    }

    // Perform AJAX request
    $.ajax({
     type: 'POST',
     url: '/api/login',
     dataType: 'json',
     data: formData,
     success: handleLoginResponse,
     error: handleAjaxError
    });
   });
  });

  // Rest of your code...


  // Common function to handle login response
  function handleLoginResponse(response) {
   if (response.success) {
    console.log(response.token);
    localStorage.setItem('authToken', response.token);

    console.log(response.role);

    if (response.role == "Admin") {
     window.location.href = '/api/admin_dashboard/admin';
    } else if (response.role == "b2b") {
     window.location.href = '/api/admin_dashboard/b2b';
    } else {
     window.location.href = '/api/checkout';
    }
   } else if (response.error) {
    $('#erro-message').text(response.error);
   }
  }

  // Common function to handle AJAX errors
  function handleAjaxError(jqXHR, textStatus, errorThrown) {
   console.error('AJAX Error:', textStatus, errorThrown);
   // Handle the error as needed
  }
  </script>


  <!-- <script>
  let counter = 0;
  const counterValue = document.getElementById('counter-value');
  const incrementBtn = document.getElementById('increment-btn');
  const decrementBtn = document.getElementById('decrement-btn');

  // To increment the value of counter
  incrementBtn.addEventListener('click', () => {
   counter++;
   counterValue.innerHTML = counter;


  });

  // To decrement the value of counter
  decrementBtn.addEventListener('click', () => {
   if (counter > 0) {
    counter--;
    counterValue.innerHTML = counter;
   }
  });
  </script> -->



  <!--  -->

  <!-- <script>
  function calculateTotal() {
   // Get the values from input fields
   var quantity = parseInt(document.getElementById('quantity').value);
   var price = parseFloat(document.getElementById('price').value);
   var shipping = parseFloat(document.getElementById('shipping').value);
   //  var taxRate = parseFloat(document.getElementById('taxRate').value);

   // Calculate subtotal, tax, and grand total based on input values
   var subtotal = quantity * price;
   var tax = (subtotal + shipping) * (19 / 100);
   var grandTotal = subtotal + shipping + tax;

   // Update the input fields with the calculated values
   document.getElementById('subtotal').value = subtotal.toFixed(2);
   document.getElementById('tax').value = tax.toFixed(2);
   document.getElementById('grandTotal').value = grandTotal.toFixed(2);
  }

  // Initial calculation when the page loads
  calculateTotal();
  </script> -->
  <!--  -->

 </body>

</html>