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

  .cart-container nav .home {
   color: var(--black) !important;
   text-decoration: none !important;
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

   td {
    display: block;

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
      <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cart</li>
     </ol>
    </nav>

    <h1 class="text-start" style="font-size: 30px; font-weight: 600; color: black;">Shopping Cart
    </h1>

    <div class="row content">
     <div class="col-8 form">

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

       <tbody>

        <tr class="border-top">
         <td class="item-img"><img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="img" alt="..." />
         </td>
         <td class="product-desc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae suscipit sequi velit sunt iste
           pariatr error <a href="#">more</a></p>
         </td>
         <td>€<input type="number" id="price" value="4349.00" step="0.01"
           style="width:80px; border:none; text-align:right; background:transparent;" readonly="readonly"
           oninput="calculateTotal()"></td>
         <td>
          <div class="counter">
           <!-- <div id="counter-value" oninput="calculateTotal()">0</div>
           <div>
            <button class="counter-btn" id="increment-btn"><i class="fa-solid fa-angle-up"></i></button><br>
            <button class="counter-btn" id="decrement-btn"><i class="fa-solid fa-chevron-down"></i></button>
           </div> -->
           <input type="number" style="width:80px; border:none; text-align:right; background:transparent;" id="quantity"
            value="1" min="1" oninput="calculateTotal()">

          </div>
         </td>
         <td>€<input type="text" class="input-field" name="" id="subtotal" value="13,047.00"
           style="width:80px; border:none; text-align:right; background:transparent;" readonly="readonly"></td>
         <td>
          <div class="icon">
           <i class="fa-regular fa-circle-xmark"></i><br>
           <i class="fa-regular fa-pen-to-square"></i>
          </div>
         </td>
        </tr>



        <!-- <tr class="border-top">
         <td class="item-img"><img src="{{ asset('assets/frontEnd/web/images/product 1.png')}}" class="img" alt="..." />
         </td>
         <td class="product-desc">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vitae suscipit sequi velit sunt iste
           pariatr error <a href="#">more</a></p>
         </td>
         <td><input type="text" class="input-field" name="" id="" value="€4,047.00"
           style="width:80px; border:none; text-align:right; background:transparent;" readonly="readonly"></td>
         <td>
          <div class="counter">
           <div id="counter-value">0</div>
           <div>
            <button class="counter-btn" id="increment-btn"><i class="fa-solid fa-angle-up"></i></button><br>
            <button class="counter-btn" id="decrement-btn"><i class="fa-solid fa-chevron-down"></i></button>
           </div>
          </div>
         </td>
         <td><input type="text" class="input-field" name="" id="" value="€13,047.00"
           style="width:80px; border:none; text-align:right;  background:transparent;" readonly="readonly"></td>
         <td>
          <div class="icon">
           <i class="fa-regular fa-circle-xmark"></i><br>
           <i class="fa-regular fa-pen-to-square"></i>
          </div>
         </td>
        </tr> -->
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
           €<input type="text" class="input-field" name="" id="subtotal" value="13,047.00"
            style="width:150px; border:none; text-align:right;" readonly="readonly">
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Shipping </p>
           €<input type="number" id="shipping" value="21.00" step="0.01"
            style="width:150px; border:none; text-align:right;" readonly="readonly" oninput="calculateTotal()">
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Tax</p>
           €<input type="text" class="input-field" name="" id="tax" value="1.91"
            style="width:150px; border:none; text-align:right;" readonly="readonly">
          </div>

          <div class="details d-flex justify-content-between">
           <p class="input-field">Order Total</p>
           €<input type="text" class="input-field total" name="" id="grandTotal" value="13,068.00"
            style="width:150px; border:none; text-align:right;" readonly="readonly">
          </div>


         </div>
        </div>
       </div>
       <div class="row">
        <div class="col">
         <button type="submit" class="btn mb-3">Proceed to Checkout</button>
        </div>
       </div>
      </div>
     </div>

    </div>
  </section>


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


  <!-- <script>
  document.addEventListener('DOMContentLoaded', function() {
   setupInputListeners1();

   function setupInputListeners1() {
    document.querySelectorAll(
     'input[id^="Quantity_"], input[id^="Rate_"], input[id^="Discount_"], input[id^="Amount_"]').forEach(function(
     input) {
     input.addEventListener('input', function() {
      var idParts = this.id.split('_');
      var index = idParts[1];

      var quantity = parseFloat(document.getElementById('Quantity_' + index).value) || 0;
      var rate = parseFloat(document.getElementById('Rate_' + index).value) || 0;
      var discountPercentage = parseFloat(document.getElementById('Discount_' + index).value) || 0;

      var discountAmount = (rate * discountPercentage) / 100;
      var discountedRate = rate - discountAmount;

      var amount = quantity * discountedRate;
      document.getElementById('Amount_' + index).value = amount.toFixed(2);

      // Recalculate subtotal after each input change
      calculateSubTotal();
     });
    });

    // Add event listeners for Adjustment, SGST, and CGST fields
    document.getElementById('Adjustment').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('SGST').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('CGST').addEventListener('input', function() {
     calculateSubTotal();
    });

    document.getElementById('IGST').addEventListener('input', function() {
     calculateSubTotal();
    });
   }

   //  var i = 0;
   //  var No = 1;

   //  document.getElementById('add').addEventListener('click', function() {
   //   ++i;
   //   ++No;

   //   var table = document.getElementById('table');
   //   var newRow = table.insertRow(table.rows.length);

   //   newRow.innerHTML = `
   //                   <td>
   //                       <input type="text" value='${No}' name='inputs[${i}][SNo]' placeholder='#' />
   //                   </td>
   //                   <td>
   //                       <input type="text"" placeholder="#"/>
   //                   </td>
   //                   <td>
   //                       <input type="text" placeholder="#"/>
   //                   </td>
   //                   <td>
   //                   <input type="text" placeholder="#"/>

   //                   </td>
   //                   <td>
   //                   <input type="text" name='inputs[${i}][Quantity]' id="Quantity_${i}" placeholder='#'  onclick="handleClick('Quantity_${i}')"/>
   //                   </td>
   //                   <td>
   //                       <input type="text" name='inputs[${i}][Rate]' id="Rate_${i}" placeholder='#'  onclick="handleClick('Rate_${i}')"/>
   //                   </td>
   //                   <td>
   //                       <input type="text" name='inputs[${i}][Discound]' id="Discount_${i}" placeholder='#'  onclick="handleClick('Discount_${i}')" style="width:30px;"/><span>% C2</span>
   //                   </td>
   //                   <td>
   //                       <input type="text" name='inputs[${i}][Amount]' id="Amount_${i}" placeholder='#' />
   //                   </td>
   //                   <td>
   //                       <button class="remove-table-row  btn btn-sm">Delete</button>
   //                   </td>`;

   //   // Call the setupInputListeners function after adding a new row
   //   setupInputListeners();

   //   // Recalculate subtotal after adding a new row
   //   calculateSubTotal();
   //  });

   //  document.addEventListener('click', function(event) {
   //   if (event.target.classList.contains('remove-table-row')) {
   //    event.target.closest('tr').remove();
   //    // Recalculate subtotal after removing a row
   //    calculateSubTotal();
   //   }
   //  });

   // Function to set up input event listeners
   function setupInputListeners() {
    document.querySelectorAll(
     'input[id^="Quantity_"], input[id^="Rate_"], input[id^="Discount_"], input[id^="Amount_"]').forEach(function(
     input) {
     input.addEventListener('input', function() {
      var idParts = this.id.split('_');
      var index = idParts[1];

      var quantity = parseFloat(document.getElementById('Quantity_' + index).value) || 0;
      var rate = parseFloat(document.getElementById('Rate_' + index).value) || 0;
      var discountPercentage = parseFloat(document.getElementById('Discount_' + index).value) || 0;

      var discountAmount = (rate * discountPercentage) / 100;
      var discountedRate = rate - discountAmount;

      var amount = quantity * discountedRate;
      document.getElementById('Amount_' + index).value = amount.toFixed(2);

      // Recalculate subtotal after each input change
      calculateSubTotal();
     });
    });
   }

   // Function to calculate and update the subtotal
   function calculateSubTotal() {
    var subtotal = 0;
    document.querySelectorAll('input[id^="Amount_"]').forEach(function(amountInput) {
     subtotal += parseFloat(amountInput.value) || 0;
    });

    // Update the SubTotal input field
    document.getElementById('SubTotal').value = subtotal.toFixed(2);

    // Subtract the value of Adjustment
    var adjustment = parseFloat(document.getElementById('Adjustment').value) || 0;
    var sgstPercentage = parseFloat(document.getElementById('SGST').value) || 0;
    var cgstPercentage = parseFloat(document.getElementById('CGST').value) || 0;
    var igstPercentage = (subtotal * 19) / 100;
    console.log(igstPercentage);

    var sgstAmount = (subtotal * sgstPercentage) / 100;
    var cgstAmount = (subtotal * cgstPercentage) / 100;
    var igstAmount = (subtotal * 19) / 100;

    var adjustedTotal = subtotal - adjustment + sgstAmount + cgstAmount + igstAmount;

    // Update the AdjustmentShow, SGSTShow, CGSTShow, and Total input fields
    document.getElementById('AdjustmentShow').value = adjustment.toFixed(2);
    document.getElementById('SGSTShow').value = sgstAmount.toFixed(2);
    document.getElementById('CGSTShow').value = cgstAmount.toFixed(2);
    document.getElementById('IGSTShow').value = igstAmount.toFixed(2);
    document.getElementById('Total').value = adjustedTotal.toFixed(2);
    document.getElementById("tax").innerHTML = igstAmount.toFixed(2);
   }
  });
  </script> -->

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

 </body>

</html>