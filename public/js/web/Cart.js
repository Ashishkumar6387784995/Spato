$(document).ready(function () {
    updateCartItemsList();
});

// Example function to decrease quantity
function decreaseQuantity(productId) {
    var quantityInput = $("#quantity" + productId);
    var currentQuantity = parseInt(quantityInput.val(), 10);

    if (currentQuantity > 1) {
        // Decrease the quantity by 1
        var newQuantity = currentQuantity - 1;
        quantityInput.val(newQuantity);

        updateQuantityInDatabase(productId, newQuantity);
        updateCartItemsList();
        // Implement any additional  logic you need, such as updating the server or recalculating prices
    }
}

// Example function to increase quantity
function increaseQuantity(productId) {
    var quantityInput = $("#quantity" + productId);
    var currentQuantity = parseInt(quantityInput.val(), 10);

    // Increase the quantity by 1
    var newQuantity = currentQuantity + 1;
    quantityInput.val(newQuantity);
    updateQuantityInDatabase(productId, newQuantity);
    updateCartItemsList();
    // Implement any additional logic you need, such as updating the server or recalculating prices
}

// Retrieve Cart Items AJAX request
function updateCartItemsList() {
    $.ajax({
        type: "GET",
        url: "/api/cart/getCartItemsApi",
        headers: {
            "guest-token": getGuestToken(),
        },
        success: function (response) {
            // console.log(response.cartItems);
            displayCartItems(response.cartItems);
            // alert(response.cartItems.length);
            jQuery(".nav-item .cart-count").text(response.cartItems.length);
        },
        error: function (error) {
            console.error("Error retrieving cart items", error);
        },
    });
}

// Function to get or generate guest token
function getGuestToken() {
    var guestToken = localStorage.getItem("guestToken");
    // console.log(guestToken);
    if (!guestToken) {
        guestToken = generateGuestToken();
        localStorage.setItem("guestToken", guestToken);
    }
    return guestToken;
}

// Function to generate a guest token
function generateGuestToken() {
    return Math.random().toString(36).substring(2) + Date.now().toString(36);
}

// Display Cart Items in the right sidebar
function displayCartItems(cartItems) {
    // console.log(cartItems);
    var baseUrl = jQuery("#baseUrl").val();
    var cartItemsList = $("#cart-items-list");
    cartItemsList.empty();

    cartItems.forEach(function (item, index) {
        // Create a new product element for each cart item
        var productElement = $(' <div class="products row">');

        // <img src="{{ asset("storage/") }}' + '/' + item.imageFile + '" alt="Image" style="height:80px;">

        // Product image (replace 'item.product_image_url' with the actual property in your response)
        productElement.append(
            '<img src="' +
                baseUrl +
                "/storage/" +
                item.product_image +
                '" alt="" srcset="">'
        );

        // Product details
        var productDetails = $('<div class="col">');
        productDetails.append(
            '<a href="#" class="product-name"><p>' +
                item.product_name +
                "</p></a> "
        );

        // Price display (replace 'item.total_price' with the actual property in your response)
        productDetails.append(
            '<p class="price"><span id="totalPriceDisplay' +
                index +
                '">' +
                item.Preis_zzgl_MwSt +
                "</span>€</p> "
        );

        // Quantity controls
        var quantityControls = $('<div class="sidebar-quantity">');
        quantityControls.append(
            '<button class="quantity-btn" onclick="decreaseQuantity(' +
                item.product_id +
                ')"><i class="fa-solid fa-minus"></i></button>'
        );
        quantityControls.append(
            '<input type="text" id="quantity' +
                item.product_id +
                '" value="' +
                item.quantity +
                '" min="1" readonly />'
        );
        quantityControls.append(
            '<button class="quantity-btn" onclick="increaseQuantity(' +
                item.product_id +
                ')"><i class="fa-solid fa-plus"></i></button></div></div></div>'
        );

        quantityControls.append(
            '<i style="margin-left:2.5rem; font-size:23px;" class="fa-solid fa-circle-xmark" onclick="removeCartItem(' +
                item.product_id +
                ')"></i></div></div></div>'
        );

        productDetails.append(quantityControls);
        productElement.append(productDetails);

        cartItemsList.append(productElement);
    });

    // Display grand total
    var grandTotal = calculateGrandTotal(cartItems);
    $("#grandTotalDisplay").text(grandTotal + "€");
}

//  START CALCULATION

// Calculate grand total function
function calculateGrandTotal(cartItems) {
    var grandTotal = 0;
    cartItems.forEach(function (item) {
        grandTotal += item.Preis_zzgl_MwSt * item.quantity;
    });
    return grandTotal.toFixed(2);
}

// Function for Calculate total tax 19%
function calculateTaxTotal(cartItems) {
    var allSubTotal = calculateGrandTotal(cartItems);
    var taxTotal = (allSubTotal * 19) / 100;
    return taxTotal.toFixed(2);
}

// Function for Calculate total summary (Order Total =(Subtotal+Shipping+Tax))
function calculateOrderSummaryTotal(cartItems) {
    var allSubTotal = parseFloat(calculateGrandTotal(cartItems));
    var allTaxTotal = parseFloat(calculateTaxTotal(cartItems));
    var shipping = parseFloat("21");
    var orderSummaryTotal = allSubTotal + shipping + allTaxTotal;
    return orderSummaryTotal.toFixed(2);
}

//  END CALCULATION
