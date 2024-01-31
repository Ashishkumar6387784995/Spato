
$(document).ready(function() {
    updateCartItemsList();
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
            // alert(response.cartItems.length);
            jQuery('.nav-item .cart-count').text(response.cartItems.length);
        },
        error: function(error) {
            console.error('Error retrieving cart items', error);
        }
    });
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


// Display Cart Items in the right sidebar
function displayCartItems(cartItems) {
    console.log(cartItems);
    var cartItemsList = $('#cart-items-list');
    cartItemsList.empty();

    cartItems.forEach(function(item, index) {
        // Create a new product element for each cart item
        var productElement = $(' <div class="products row">');

        // <img src="{{ asset("storage/") }}' + '/' + item.imageFile + '" alt="Image" style="height:80px;">

        // Product image (replace 'item.product_image_url' with the actual property in your response)
        productElement.append('<img src="{{ asset("storage/") }}' + '/' + item.product_image + '" alt="" srcset="">');

        // Product details
        var productDetails = $('<div class="col">');
        productDetails.append('<a href="#" class="product-name"><p>' + item.product_name + '</p></a> ');

        // Price display (replace 'item.total_price' with the actual property in your response)
        productDetails.append('<p class="price"><span id="totalPriceDisplay' + index + '">' + item.total_price +
            '</span>€</p> ');

        // Quantity controls
        var quantityControls = $('<div class="sidebar-quantity">');
        quantityControls.append('<button class="quantity-btn" onclick="decreaseQuantity(' + item.product_id +
            ')"><i class="fa-solid fa-minus"></i></button>');
        quantityControls.append('<input type="text" id="quantity' + item.product_id + '" value="' + item.quantity +
            '" min="1" readonly />');
        quantityControls.append('<button class="quantity-btn" onclick="increaseQuantity(' + item.product_id +
            ')"><i class="fa-solid fa-plus"></i></button></div></div></div>'
        );

        quantityControls.append('<i style="margin-left:2.5rem; font-size:23px;" class="fa-solid fa-circle-xmark" onclick="removeCartItem(' +
            item.product_id + ')"></i></div></div></div>');


        productDetails.append(quantityControls);
        productElement.append(productDetails);

        cartItemsList.append(productElement);
    });
}