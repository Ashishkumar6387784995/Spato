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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tesseract.js@2.3.0/dist/tesseract.min.js"></script>
</head>
<body>

<div id="image-container">
<img src="assets/125.png" id="image">
</div>

<div id="result"></div>

<script>
$(document).ready(function() {
    $('#image').on('click', function() {
        var image = $(this)[0]; // Get the raw DOM element
        Tesseract.recognize(
            image,
            'eng',
            { logger: m => console.log(m) }
        ).then(({ data: { text } }) => {
            $('#result').text(text);
        });
    });
});
</script>

</body>
</html>
