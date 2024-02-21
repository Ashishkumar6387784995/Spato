<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Get Clicked Number</title>
<style>
  #image-container {
    position: relative;
    display: inline-block;
  }
  #image-container img {
    max-width: 100%;
  }
  .number-marker {
    position: absolute;
    background-color: rgba(255, 0, 0, 0.5);
    border-radius: 50%;
    width: 20px;
    height: 20px;
    pointer-events: none; /* To make sure the click goes through the marker to the image */
  }
</style>
</head>
<body>

<div id="image-container">
<img src="{{asset('assets/125.png')}}" >
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var image = document.getElementById("image");
  var container = document.getElementById("image-container");

  // Listen for clicks on the image
  container.addEventListener("click", function(event) {
    var rect = image.getBoundingClientRect(); // Get the position of the image relative to the viewport
    var x = event.clientX - rect.left; // Calculate the x-coordinate relative to the image
    var y = event.clientY - rect.top; // Calculate the y-coordinate relative to the image

    // Display the clicked coordinates (for demonstration purposes)
    console.log("Clicked at:", x, y);

    // Here you would map the clicked coordinates to the number on the image
    // and perform any necessary logic based on that mapping
    // For example, you might divide the image into regions and determine
    // which number corresponds to the clicked region.
  });
});
</script>

</body>
</html>
