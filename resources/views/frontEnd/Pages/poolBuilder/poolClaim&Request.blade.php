<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Pool Builder Claim & Request</title>

 <style>

  .claims-request{
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



.connect{
 background-color: var(--blue);
 padding: .5rem 7rem;
 border:1px solid var(--blue);
 border-radius:5px;
 font-weight:600;
 transition:1s;
}
.connect:hover{
 border:1px solid var(--blue);
 background-color:transparent;
 color:var(--blue);
}

.pool-claim{
 margin: auto;
  display: block;
  border: 3px solid var(--blue);
}

.accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: white !important;
    box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}


 </style>
</head>
<body>
 
 <!-- Header -->
 @include('frontEnd/partial/header')
 <!-- Header -->

<section class="claims-request">

<div class="pool-hero-section" style="background:url({{ asset('assets/frontEnd/web/images/pool-banner.png')}}); background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
<h1  class="text-center" style="font-weight:900; font-size:55px;   margin: auto;
  width: 50%;
  padding-top:10rem;">Pool builders</h1>
</div>
 <div class="container">
<h4 class="mb-5 pt-4">Profile Setting</h4>

<p  style="font-weight:600;">All Claims requests</p>
 <div class="container">  

 <div class="row">
 <div class="col-2">Months</div>
         <div class="col-2"></div>
         <div class="col-2"></div>
         <div class="col-2">ORDER NUMBER</div>
         <div class="col-2">COST</div>
         <div class="col-2">DATE</div>
 </div>
 <div class="months">
  <p style="font-weight:600;">FEBRUARY</p>
 </div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div class="row">
         <div class="col-2"><i class="fa-regular fa-square-check" style="font-size:25px;"></i></div>
         <div class="col-2">Alex Driver</div>
         <div class="col-2"></div>
         <div class="col-2">#2344</div>
         <div class="col-2">€988.5</div>
         <div class="col-2">23/12/2023</div>
        </div>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
         <div class="col">
          <p class="details">
          Sette anni fa, abbiamo deciso di creare un modo davvero rivoluzionario per
prenderci cura delle nostre piscine senza spendere una fortuna, e sai una cosa?
Alla fine abbiamo decifrato il codice con il nostro marchio locale di forniture per
piscine, Water TechniX, realizzato e di proprietà esclusiva di Mr Pool Man.

Abbiamo preso anni di feedback dai clienti, il buono, il brutto e il cattivo, e
abbiamo combinato tutto questo in un piccolo pacchetto ordinato. Eliminare
tutto ciò che non è essenziale e lasciare solo ciò che i proprietari di piscine
stanno cercando: attrezzature e prodotti chimici per piscine efficienti e
convenienti! Scopri di più qui.
          </p>


          <button type="submit" class="connect" id="connectBtn"registerBtn>Connect</button>
         </div>
         <div class="col">
          <img class="pool-claim" src="{{ asset('assets/frontEnd/web/images/pool.png')}}" alt="" srcset="">
         </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <div class="row">
         <div class="col-2"><i class="fa-regular fa-square-check" style="font-size:25px;"></i></div>
         <div class="col-2">Alex Driver</div>
         <div class="col-2"></div>
         <div class="col-2">#2344</div>
         <div class="col-2">€988.5</div>
         <div class="col-2">23/12/2023</div>
        </div>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
         <div class="col">
          <p class="details">
          Sette anni fa, abbiamo deciso di creare un modo davvero rivoluzionario per
prenderci cura delle nostre piscine senza spendere una fortuna, e sai una cosa?
Alla fine abbiamo decifrato il codice con il nostro marchio locale di forniture per
piscine, Water TechniX, realizzato e di proprietà esclusiva di Mr Pool Man.

Abbiamo preso anni di feedback dai clienti, il buono, il brutto e il cattivo, e
abbiamo combinato tutto questo in un piccolo pacchetto ordinato. Eliminare
tutto ciò che non è essenziale e lasciare solo ciò che i proprietari di piscine
stanno cercando: attrezzature e prodotti chimici per piscine efficienti e
convenienti! Scopri di più qui.
          </p>


          <button type="submit" class="connect" id="connectBtn"registerBtn>Connect</button>
         </div>
         <div class="col">
          <img class="pool-claim" src="{{ asset('assets/frontEnd/web/images/pool.png')}}" alt="" srcset="">
         </div>
        </div>
      </div>
    </div>
  </div>
  


</div>
 </div>
 </div>
</section>

<!-- Footer -->
@include('frontEnd/partial/footer')
<!-- Footer -->
</body>
</html>