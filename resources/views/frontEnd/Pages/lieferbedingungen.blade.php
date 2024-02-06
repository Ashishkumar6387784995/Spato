<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lieferbedingungen</title>
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
  <style>
  .agb-container {
   background-color: #eaebef;
   /* margin-top: -10rem; */
   padding-top: 5rem;
   margin-bottom: -10rem;
   padding-bottom: 10rem;

   clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
  }

  .agb-container nav ol li a {
   color: var(--black) !important;
   text-decoration: none !important;
   font-weight: 600;
  }

  .agb-container nav ol li:nth-child(2) {
   color: var(--blue) !important;
   font-weight: 600;
  }


  .agb-container .content h6 {
   font-weight: 600;
   margin-top: 2rem;
   margin-bottom: 2rem;
   font-size: 22px;
  }

  .agb-container .content .details {
   margin: 2rem 0rem;
   text-align: justify;
  }

  @media screen and (max-device-width: 480px) and (orientation: portrait) {
   .agb-container {
    clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
   }

   /* footer .footer-container {
    width: 96%;
  } */
  }
  </style>
 </head>

 <body oncontextmenu="return false" class="snippet-body">

  @include('frontEnd/partial/header');
  <section class="agb-container">
   <div class="container">
    <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="home" href="{{url('api/home')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Lieferbedingungen</li>
     </ol>
    </nav>

    <h1 class="text-center">Allgemeine Lieferbedingungen der SPATO GmbH</h1>

    <div class="content">
     <h6>Lieferung innerhalb Deutschland (Festland)</h6>
     <p class="details">
      <b>Paketware</b> (je Paket bis 30 kg)
      bis 350,00 EURO je Paket 22,50 €
      Zuschlag bei garantierter Zustellung am Folgetag = 12,00 EURO
      Bei nicht sortierfähigen Güter (Rollen, 2-Meter Rohre usw.): je 22,50 EURO
     </p>
     <p class="details">
      <b>Paketware</b> Palettenware für Rohrbunde (je Palette bis 200 kg)
      Maximal 2.000 kg Gesamtsendungsgewicht
      bis 1.500 EURO pauschal 210,00 EURO
      Langgutzuschlag (> 2,40 mtr.): 60,00 EURO
      Halbpalette bis 100 kg ab 900,00 EURO frachtfrei
      Halbpalette bis 100 kg bis 900,00 EURO pauschal 65,00 EURO.
     </p>
     <p class="details">
      <b>Gefahrgut</b> (z. B. Wasserpflege):
      Ab 2.200 EUR frei Haus
      bis 2.200 EUR per Spedition nach Aufwand Gefahrgutzuschlag 20,00 EURO
     </p>
    </div>
    <div class="content">
     <h6>Frachtintensive Güter </h6>
     <p class="details">
      wie z. B. PVC-Rohre (Langpaletten), Alustangen (ab 2,4 m), Rollen, Behälter, Filtersand, Glas usw. Preise werden
      nach Aufwand/Tagespreisen der Speditionen abgerechnet.
     </p>
    </div>
    <div class="content">
     <h6>Palettenware und frachtintensive Güter wie z.B. Wärmepumpen, Filtermedium etc.</h6>
     <p class="details">
      Bis 200 kg 135,00 € pro Palette
      Filtermedium auf Anfrage
     </p>
    </div>
    <div class="content">
     <h6>Expresszuschlag bei Speditionsware:</h6>
     <p class="details">
      Garantie am Folgetag bis 16.00 Uhr deutschlandweit (ohne Inseln) = 25,00 EURO Garantie am Folgetag bis 12.00 Uhr
      deutschlandweit (ohne Inseln) = 40,00 EURO
     </p>
    </div>

    <div class="content">
     <h6>Expresslieferungen</h6>
     <p class="details">
      nach Aufwand. Bei Expressbestellungen gehen die Versandkosten grundsätzlich zu Lasten des Empfängers.
      Ausgenommen
      Ersatzteil- und Nachlieferung.
     </p>
    </div>
    <div class="content">
     <h6>Preise</h6>
     <p class="details">
      Pro Stück bzw. Meter in EURO zzgl. MwSt., freibleibend.
      Sollte es nach Fertigstellung dieses Katalogs zu Preissteigerungen z. B. im Rohmaterialbereich kommen, behalten
      wir
      uns eine Preisanpassung vor.
     </p>
    </div>

    <div class="content">
     <h6>Warenrücklieferungen </h6>
     <p class="details">
      Warenrücklieferungen werden nur nach vorheriger Absprache mit unseren Mitarbeitern akzeptiert.
      Der Warenrücklieferung ist eine Rechnungskopie, nicht älter als 6 Wochen, beizufügen.
      Die Ware muss sich in einwandfreiem Zustand befinden. Der Rückversand muss „frei Haus“ erfolgen. Es wird eine
      Wiedereinlagerungsgebühr in Höhe von mindestens 15 % des Warenwertes erhoben.
      Von der Rücknahme ausgeschlossen sind Sonderanfertigungen, Sonderbestellungen, Abverkaufsware, Abschnitte
      (Schlauch, Rohr) sowie bereits eingebaute und verschmutzte Produktwaren und Materialien.

     </p>
    </div>
    <div class="content">
     <h6>Transportbeschädigungen sind in Anwesenheit des Zustellers schriftlich auf der Empfangsbescheinigung
      festzuhalten. Spätere Reklamationen können wir leider nicht anerkennen. </h6>
     <p class="details">
      Technische Änderungen und Druckfehler vorbehalten
      Sämtliche Abbildungen sind Symbolbilder.
     </p>
    </div>

   </div>
  </section>


  @include('frontEnd/partial/footer')
 </body>

</html>