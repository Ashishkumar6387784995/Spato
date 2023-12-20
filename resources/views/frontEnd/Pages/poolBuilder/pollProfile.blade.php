<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <style>
  :root {
    --blue: #44e1d5;
    --black: #54606c;
    --white: #ffffff;
}

.profile{
  background-color: #eaebef;
  margin-top: -1rem;
  padding-top: -10rem !important;
  margin-bottom: -10rem;
  padding-bottom: 10rem;
  clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
}

.pool-hero-section{
   width: 100%; 
   height:350px;     
  }


.registeren{
 background-color: var(--blue);
 padding: .5rem 6rem;
 border:1px solid var(--blue);
 border-radius:5px;
 font-weight:600;
 transition:1s;
 color:var(--white);
}
.registeren:hover{
 border:1px solid var(--blue);
 background-color:transparent;
 color:var(--blue);
}

.form-control:focus{
 border:none !important;
}

@media screen and (max-device-width: 480px) and (orientation: portrait) {
 .registration{
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
  }
  /* footer .footer-container {
    width: 96%;
  } */
}


#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border:1px solid black;
    border-radius: 50%;
    background-color:var(--white);
}

#profile-container img {
    width: 150px;
    height: 150px;
}

 </style>
</head>
<body>
 <!-- Header -->
 @include('frontEnd/partial/header')
 <!-- Header -->
 <section class="profile">
 <div class="pool-hero-section" style="background:url({{ asset('assets/frontEnd/web/images/pool-banner.png')}}); background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
<h1  class="text-center" style="font-weight:900; font-size:55px;   margin: auto;
  width: 50%;
  padding-top:10rem;">Pool builders</h1>
</div>
    <div class="container ">
      <h4 class="mb-5 pt-4">Profile Setting</h4>
      <div class="row">
         <div class="col-2">
        <form action="#" method="post">
<div id="profile-container">
   <image id="profileImage" src="http://lorempixel.com/100/100" />
   Edit
</div>
<input id="imageUpload" type="file" 
       name="profile_photo" placeholder="Photo" required="" capture>
        </form>
        </div>
        <div class="col-4 mt-5">
        <p>Alex Driver</p>
        <p>Example@mail.com</p>
        </div>
        </div>
        <div class="row">
         <div class="col-6">
         <div class="mt-5 mb-4">
    <label for="exampleInputName" class="form-label">Refrence</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>
         </div>
        </div>
        <div class="row">
         <div class="col-6">
         <div class="mt-3 mb-3">
    <label for="exampleInputName" class="form-label">Skills</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>
         </div>
        </div>
        <div class="row">
         <div class="col-6">
         <div class="mt-5 mb-4">
    <label for="exampleInputName" class="form-label">Upload Previous work image</label>
    <input type="file" class="form-control" id="exampleInputfile" aria-describedby="fileHelp" multiple style="transparent">
  </div>
         </div>
        </div>
        <div class="row">
         <div class="col-2">
         <div class="mt-5 mb-4">
         <label class="form-check-label" for="flexRadioDefault1">Activate</label>
                <input class="form-check-input" type="radio" name="type" id="type" value="activate">
  </div>
         </div>
         <div class="col-2">
         <div class="mt-5 mb-4">
         <label class="form-check-label" for="flexRadioDefault1">Deactivate</label>
                <input class="form-check-input" type="radio" name="type" id="type" value="deactivate">
  </div>
         </div>
        </div>
    </div>
 </section>
<!-- Footer -->
@include('frontEnd/partial/footer')
<!-- Footer -->

<script>
   $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
</body>
</html>