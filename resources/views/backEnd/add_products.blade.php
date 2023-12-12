<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <form id="addProductForm" enctype="multipart/form-data">

            <h1 style="text-align:center;">Add Products</h1>

            <span id="success_message" style="color:green"></span>

            <div class="form-group">
                <label for="productName">Product Category:</label>
                <!-- <input type="text" class="form-control" id="productCategory" name="productCategory" value="{{old('productCategory')}}" required> -->
                <select>
                    <option>ABC</option>
                    <option>DEF</option>
                    <option>GHI</option>

                </select>
                <span id="productName_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" class="form-control" id="productName" name="productName" value="{{old('productName')}}" required>
                <span id="productName_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Quantity:</label>
                <input type="text" class="form-control" id="productQuantity" name="productQuantity" value="{{old('productQuantity')}}" required>
                <span id="productQuantity_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Rate (Normal Users):</label>
                <input type="text" class="form-control" id="productRateForNormalUsers" name="productRateForNormalUsers" value="{{old('productRateForNormalUsers')}}" required>
                <span id="productRateForNormalUsers_err" style="color:red"></span>

            </div>

            <div class="form-group">
                <label for="productName">Product Rate (B2B):</label>
                <input type="text" class="form-control" id="productRateForB2BUsers" name="productRateForB2BUsers" value="{{old('productRateForB2BUsers')}}" required>
                <span id="productRateForB2BUsers_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productName">Product Rate (B2C):</label>
                <input type="text" class="form-control" id="productRateForB2CUsers" name="productRateForB2CUsers" value="{{old('productRateForB2CUsers')}}" required>
                <span id="productRateForB2CUsers_err" style="color:red"></span>
            </div>

            <div class="form-group">
                <label for="productDescription">Product Description:</label>

                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                   <span id="description_err" style="color:red"></span>

            </div>



            <div class="form-group">
                <label for="productImage">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" value="{{old('productRateForB2CUsers')}}">
                <span id="image_err" style="color:red"></span>
            </div>

            <button type="button" class="btn btn-primary" id="addProductButton">Add Product</button>
        </form>
    </div>



    <script>
        $(document).ready(function() {
            $("#addProductButton").click(function() {

                $('#success_message').text('');
                $('#productName_err').text('');
                $('#productQuantity_err').text('');
                $('#productRateForNormalUsers_err').text('');
                $('#productRateForB2BUsers_err').text('');
                $('#productRateForB2CUsers_err').text('');
                $('#image_err').text('');
                $('#signup_captcha_err').text('');
                // Clear previous error messages
                // $(".text-danger").text("");

                $.ajax({
                    url: "/api/products", // Replace with your backend script URL
                    type: "POST",
                    dataType: 'json',
                    data: new FormData($("#addProductForm")[0]),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response);
                        $('#success_message').text(response.success);

                        // Check if the response has errors
                        if (response.errors) {
                            // Display validation errors next to corresponding form fields
                            $.each(response.errors, function(field, message) {
                                $("#" + field + "_err").text(message);
                            });
                        } 
                        // else {
                        //     // Display success message to the user
                        //     alert(response.message);
                        // }
                    },
                    error: function(error) {
                        console.log(error);
                        // Handle errors here
                        alert("An error occurred while processing the request.");
                    }
                });
            });
        });
    </script>
</body>

</html>