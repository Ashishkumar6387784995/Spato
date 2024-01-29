<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
  .checkout-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;
   clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
  }

  .checkout-container nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
   font-weight: 600;
  }

  .checkout-container nav ol li:nth-child(2) {
   color: var(--blue) !important;
   font-weight: 600;
  }


  .checkout-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .checkout-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }



  .checkout-container .content h6 {
   font-weight: 600;
   font-size: 18px;
   color: black;
  }

  .checkout-container .content .details {
   text-align: justify;
   font-size: 14px;
  }

  .contact-details {
   background-color: #ffffff;
   border-radius: 5px;
  }

  .contact-details .price-container {
   font-weight: 600;
   font-size: 15px;
  }

  /* .checkout-container .btn {
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

  .checkout-container .btn:hover {
   border: 1px solid #44e1d5;
   color: var(--blue);
  } */


  .icon i {

   padding: 2px;
   border-radius: 100%;
   background-color: var(--white);
   transition: 0.5s ease-in-out;
   cursor: pointer;
  }

  .icon i:hover {
   background-color: red;
   color: var(--white);
  }

  .checkout-container .details p {
   margin: 0;
   padding: 0;
  }

  .input-field {
   font-weight: 700;
  }

  .checkout-container .content .address-container {
   background-color: #fff;
   padding: 30px 2px;
   margin: 1.5rem 0rem;
   border-radius: 5px;
   /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
  }

  /* .checkout-container .content .address-container input {
   width: 100%;
   border: none;
   text-wrap: wrap;
   height: 60px;
  }

  .checkout-container .content .address-container input:focus {
   border: none;
   outline: none;
  } */
  .checkout-container .content .address-container .name {
   font-weight: 600;
  }

  .checkout-container .content .address-container .address {
   font-weight: 700;
  }

  .change-btn {
   background-color: var(--blue);
   border: 1px solid var(--blue);
   border-radius: 5px;
   color: var(--white);
   padding: 10px 15px;
   font-weight: 700;
   transition: .5s ease-in-out;
   margin-top: 1.5rem;

  }

  .change-btn i {
   color: var(--white);
   font-size: 25px;
   transition: .5s ease-in-out;
  }

  .change-btn:hover {
   background-color: var(--white);
   border: 1px solid var(--blue);
   color: var(--blue);
  }

  .change-btn:hover i {
   color: var(--blue);
  }

  .total {
   font-size: 20px;
  }

  .item-img {
   width: 15%;
  }

  .item-img .img {
   width: 100%;
   height: 100%;
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


  .counter {
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
  }

  .counter {
   display: flex;
  }

  .counter .quantity-btn {
   width: 30px;
   height: 30px;
   padding: 0px 10px;
   border: 0.5px solid var(--black);
   background-color: var(--white);
   border-radius: 3px;
   text-align: center;
   font-weight: 800;
  }

  .counter input {
   width: 30px;
   height: 30px;
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

  /* .modal-content {
   width: 100% !important;
  } */

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .checkout-container {
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

   .modal {
    width: 100%;
   }
  }

  .mt-0 {
   margin-top: 0rem;
  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header')
  <section class="checkout-container">
   <form id="orderForm">
    <div class="container">
     <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
       <li class="breadcrumb-item active" aria-current="page">Checkout</li>
      </ol>
     </nav>

     <h1 class="text-start" style="font-size: 30px; font-weight: 600; color: black;">Checkout
     </h1>




     <div class="row content">
      <div class="col-8 form">

       <div class="row address-container">
        <div class="col-8 add">
         <p class="name" id="develivery_person"></p>
         <p class="address" id="develivery_address"></p>
        </div>
        <div class="col-4 address-btn" style="display:flex; justify-content:flex-end;"><button class="change-btn"
          data-bs-toggle="modal" data-bs-target="#caddress" id="changeAdressButton">Change Address</button></div>
       </div>
       <div class="table-responsive">
        <table class="table">
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
      </div>
      <div class="col-4 mt-5 mb-5 address">
       <div class="contact-details container">
        <h3 class="pt-3">Summary</h3>
        <div class="row">
         <div class="col">
          <div class="accordion" id="accordionExample">


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
            <div class="price-container"><input type="text" class="input-field" name="" id="subtotal" value="13,047.00"
              style="width:150px; border:none; outline:none; text-align:right;" readonly="readonly">€</div>
           </div>

           <div class="details d-flex justify-content-between">
            <p class="input-field">Shipping </p>
            <div class="price-container"><input type="number" id="shipping" value="21.00" step="0.01"
              style="width:150px; border:none; outline:none; text-align:right;" readonly="readonly"
              oninput="calculateTotal()">€</div>
           </div>

           <div class="details d-flex justify-content-between">
            <p class="input-field">Tax</p>
            <div class="price-container"><input type="text" class="input-field" name="" id="tax" value="1.91"
              style="width:150px; border:none; outline:none; text-align:right;" readonly="readonly">€</div>
           </div>

           <div class="details d-flex justify-content-between">
            <p class="input-field">Order Total</p>
            <div class="price-container"><input type="text" class="input-field total" name="" id="grandTotal"
              value="13,068.00" style="width:150px; border:none; outline:none; text-align:right;" readonly="readonly">€
            </div>
           </div>


          </div>
         </div>
        </div>
        <div class="row">
         <div class="col">
          <button type="submit" style="width:100%;" class="change-btn mb-3" id="orderButton">Proceed to Pay via <i
            class="fa-brands fa-paypal"></i></button>
         </div>
        </div>
       </div>
      </div>

     </div>
   </form>
  </section>


  <!-- Change Address Modal Starts-->
  <!-- Modal -->
  <div class="modal fade" id="caddress" tabindex="-1" aria-labelledby="caddressLabel" aria-hidden="true">
   <div class="modal-dialog  modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <h1 class="modal-title fs-5" id="caddressLabel">Change Address</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body" id="tempAddressShow">

      <!-- 
        <div class="row mt-2" >
       <div class="col">
        <p class="address" id="tempAddress">159, Park Avenue, Schmalkalden, Germany</p>
       </div>
       <div class="col" style="display:flex; justify-content:flex-end;"><button style="height:50px;"
         class="mt-0 change-btn" type="submit">Add +</button></div>
      </div> 
    -->




     </div>

     <div class="modal-footer justify-content-start">
      <a href="{{ url('/api/accountSetting') }}"><button type="button" class="change-btn">Add address +</button></a>
      <!-- <button type="button" class="mt-0 change-btn">Save changes</button> -->
     </div>
    </div>
   </div>
  </div>
  <!-- Change Address Modal Ends-->

  @include('frontEnd/partial/footer')


  <script>
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
  </script>


  <!--  -->

  <script>
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
  </script>
  <!--  -->


  <script>
  $(document).ready(function() {

   var authToken = localStorage.getItem('authToken');
   console.log('c' + authToken);
   if (!authToken) {

    window.location.href = '/api/home';

   }
   $.ajax({
    type: 'GET',
    url: '/api/cart/checkoutItemsApiAuthentic',
    headers: {

     'Authorization': 'Bearer ' + authToken,
     'guest-token': getGuestToken(),
    },
    success: function(response) {
     // console.log(response.cartItems);
     displayCartItems(response.cartItems);

    },
    error: function(error) {
     console.error('Error retrieving cart items', error);
    }
   });

   $.ajax({
    type: 'GET',
    url: '/api/cart/userAddress',
    headers: {

     'Authorization': 'Bearer ' + authToken,
     'guest-token': getGuestToken(),
    },
    success: function(response) {
     // console.log(response.cartItems);

     displayAddress(response.Permanent_address);
    },
    error: function(error) {
     console.error('Error retrieving cart items', error);
    }
   });



  });



  function displayCartItems(cartItems) {
   console.log(cartItems);
   var cartItemsTableBody = $('#cart-items-table-body');
   // Display Cart Items in the right sidebar
   cartItemsTableBody.empty();

   cartItems.forEach(function(item, index) {
    // Create a new table row for each cart item
    var tableRow = $('<tr>');

    // Item Image
    var itemImgCell = $('<td class="item-img">');
    itemImgCell.append('<img src="{{ asset("storage/") }}' + '/' + item.product_image + '" class="img" alt="..." />');
    tableRow.append(itemImgCell);

    // Product Description
    var productDescCell = $('<td class="product-desc">');
    productDescCell.append('<p>' + item.product_name + '</p>');
    tableRow.append(productDescCell);

    // Price
    var priceCell = $('<td><input type="number" id="price' + index + '" value="' + item.total_price +
     '" step="0.01" style="width:80px; border:none; outline:none; text-align:right; background:transp`arent;" readonly="readonly">€</td>'
    );
    tableRow.append(priceCell);

    // Quantity
    var quantityCell = $('<td>');
    quantityCell.append('<div class="counter"><button class="quantity-btn" onclick="decreaseQuantity(' + item
     .product_id + ')"><i class="fa-solid fa-minus"></i></button> <input type="text" id="quantity' + item
     .product_id + '" value="' + item.quantity +
     '" min="1" readonly /> <button class="quantity-btn" onclick="increaseQuantity(' + item.product_id +
     ')"><i class="fa-solid fa-plus"></i></button></div>');

    quantityCell.append('');
    quantityCell.append('');

    tableRow.append(quantityCell);

    // Subtotal
    var subtotalCell = $('<td><input type="text" class="input-field" id="subtotal' + index + '" value="' + (item
      .total_price * item.quantity) +
     '" style="width:80px; border:none; outline:none; text-align:right; background:transparent;" readonly="readonly">€</td>'
    );
    tableRow.append(subtotalCell);

    // Remove and Edit Icons
    var iconCell = $('<td>');
    iconCell.append(
     '<div class="icon" style="cursor:pointer; font-size:18px;"><i class="fa-regular fa-circle-xmark" onclick="removeCartItem(' +
     item.product_id + ')"></i></div>');
    tableRow.append(iconCell);

    // Append the row to the table
    cartItemsTableBody.append(tableRow);
   });

  }

  function displayAddress(Permanent_address) {
   console.log(Permanent_address);

   $('#develivery_person').text(Permanent_address[0].name);
   $('#develivery_address').text(Permanent_address[0].permanent_address + ',' + Permanent_address[0].zipCode + ',' +
    Permanent_address[0].country);

  }


  // Example function to increase quantity
  function increaseQuantity(productId) {
   var quantityInput = $('#quantity' + productId);
   var currentQuantity = parseInt(quantityInput.val(), 10);
   console.log(quantityInput);

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

   // Decrease the quantity by 1
   var newQuantity = currentQuantity - 1;
   if (newQuantity < 1) {
    newQuantity = 1; // Ensure quantity doesn't go below 1
   }

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









  // // Function to get or generate guest token
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

  // // Initial update of cart items list
  // updateCartItemsList();
  </script>

  <script>
  $('#changeAdressButton').click(function() {

   var authToken = localStorage.getItem('authToken');
   $.ajax({
    type: 'GET',
    url: '/api/cart/userAddress',
    headers: {

     'Authorization': 'Bearer ' + authToken,
     'guest-token': getGuestToken(),
    },
    success: function(response) {
     // console.log(response.cartItems);

     displayTempAddress(response.userTempAddsress);
    },
    error: function(error) {
     console.error('Error retrieving cart items', error);
    }
   });

   function displayTempAddress(userTempAddsress) {
    console.log(userTempAddsress);

    // Assuming you have an element with id 'tempAddressShow' where you want to display the temporary addresses
    var addressModalBody = $('#tempAddressShow');

    // Clear the existing content in case you're appending to the existing content
    addressModalBody.empty();

    // Display addresses in the modal body
    userTempAddsress.forEach(function(item, index) {
     // Build the address string for each item in the loop
     var addressString = `${item.permanent_address}, ${item.zipCode}, ${item.country}`;

     // Log the address string to the console
     console.log(addressString);

     // Use jQuery to append the address and a button to the container
     addressModalBody.append('<div class="row mt-2"><div class="col"><p class="address">' + addressString +
      '</p></div> <div class="col" style="display:flex; justify-content:flex-end;">' +
      '<button style="height:50px;" class="mt-0 change-btn" type="submit" data-bs-dismiss="modal" data-address="' +
      addressString + '">Add +</button></div></div>');
     //  addressModalBody.append('');
    });

    // Click event handler for the "Add +" button
    $('.change-btn').on('click', function() {
     // Get the address data from the data-address attribute
     var selectedAddress = $(this).data('address');

     // Update the #develivery_address element with the selected address
     $('#develivery_address').text(selectedAddress);
    });
   }

  });
  </script>

  <script>
  $('#orderButton').click(function() {


   // Create a FormData object and append form data to it
   var formData = new FormData(document.getElementById('orderForm'));

   // Log FormData object to the console (for debugging purposes)
   // console.log("FormData:", formData);



   var token = localStorage.getItem('authToken');
   console.log(token);

   // Check if the token exists
   if (!token) {
    console.error('Token not found in localStorage');
    window.location.href = '/api/home';
    // return;
   }


   var authToken = localStorage.getItem('authToken');
   $.ajax({
    type: 'GET',
    url: '/api/cart/addOrder',
    headers: {

     'Authorization': 'Bearer ' + authToken,
     'guest-token': getGuestToken(),
    },
    success: function(response) {
     // console.log(response.cartItems);

     displayTempAddress(response.userTempAddsress);
    },
    error: function(error) {
     console.error('Error retrieving cart items', error);
    }
   });


  });
  </script>

 </body>

</html>