<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
  :root {
    --blue: #44e1d5;
    --black: #54606c;
    --white: #ffffff;
}

.registration{
  background-color: #eaebef;
  /* margin-top: -10rem; */
  padding-top: 5rem;
  margin-bottom: -10rem;
  padding-bottom: 10rem;

  clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
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

 </style>
</head>
<body>
 <!-- Header -->
 @include('frontEnd/partial/header')
 <!-- Header -->



 <section class="registration">
  <div class="container">
   <h4 class="mb-5">Registeren</h4>
  <form id="poolRegistrationForm">
   
  <span id="success_msg" style="color:#44e1d5"></span>

  <div class="row">
    <div class="col-8">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
  </div>
</div>
</div>
   <div class="row">
    <div class="col-8">
    <label for="exampleInputAddress" class="form-label">Full Address</label>
    <input type="text" class="form-control" id="address" name="address"  aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
    <div class="col-4">
    <label for="exampleInputZipcode" class="form-label">Zip code</label>
    <input type="text" class="form-control" id="zipCode" name="zipCode" aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
   </div>
   <div class="row">
    <div class="col-8">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
    <div class="col-4">
    <label for="exampleInputContact" class="form-label">Contact No.</label>
    <input type="text" class="form-control" id="contact" name="contact"  aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
   </div>
   <div class="row">
    <div class="col-8">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password"  aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
    <div class="col-4">
    <label for="exampleInputVat" class="form-label">VAT No.</label>
    <input type="text" class="form-control" id="vatNo" name="vatNo"  aria-describedby="emailHelp">
    <span id="name_err" style="color:red"></span>
    </div>
   </div>

  <div class="mt-4 mb-4 form-check">
    <input type="checkbox" class="form-check-input" id="condition" name="condition" value="yes">
    <label class="form-check-label" for="exampleCheck1">I aggred to all the <a href="#">Term</a> & <a href="#">Conditions</a></label>
    <span id="name_err" style="color:red"></span>
  </div>

  <button type="submit" class="registeren" id="registerBtn"registerBtn>Registeren</button>
</form>
  </div>
 </section>
<!-- Footer -->
@include('frontEnd/partial/footer')
<!-- Footer -->
</body>
</html>