<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  .mailer {
   background-color: white;
   border-radius: 10px;
  }

  .logo {
   display: flex;
   justify-content: center;
   align-items: center;
   margin: 1rem 0rem;
  }

  .logo img {
   margin: auto;
   width: 20%;
  }

  .details {
   font-size: 15px;
  }

  .details .mail {
   font-weight: 700;
  }

  .footer p {
   text-align: center;
  }
  </style>
 </head>

 <body>
  <div class="mailer">
   <div class="logo">
    <img src="cid:logo.png" alt="Spato" srcset="">
   </div>
   <div class="details">
    <span class="mail">Name: </span><span>{{$name}}</span><br /><br />
    <span class="mail">Email: </span><span>{{$email}}</span><br /><br />
    <span class="mail">Phone: </span><span>{{$phone}}</span><br /><br />
    <span class="mail">Message: </span><span>{{$textarea}}</span><br /><br />
   </div>

   <div class="footer">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br /> Fugit culpa, consequatur placeat maiores corrupti
     maxime
     consectetur neque ut beatae incidunt.</p>
   </div>
  </div>
 </body>

</html>