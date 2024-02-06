<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Impressum</title>
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
      <li class="breadcrumb-item active" aria-current="page">Impressum</li>
     </ol>
    </nav>

    <h1 class="text-center">Impressum</h1>

    <div class="content">
     <h6>Angaben gemäß § 5 TMG</h6>
     <p class="details">
      SPATO GmbH <br>
      Schellberger Weg 34 <br>
      42659 Solingen <br>
     </p>
    </div>
    <div class="content">
     <h6>Vertreten durch</h6>
     <p class="details">
      Oliver Laug
     </p>
    </div>
    <div class="content">
     <h6>Kontakt</h6>
     <p class="details">
      E-Mail: info@spato.de
     </p>
    </div>
    <div class="content">
     <h6>Registernummer</h6>
     <p class="details">
      HRB 32131
     </p>
    </div>

    <div class="content">
     <h6>Registergericht</h6>
     <p class="details">
      Handelsregister Wuppertal
     </p>
    </div>
    <div class="content">
     <h6>Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz</h6>
     <p class="details">
      DE346441844
     </p>
    </div>

    <div class="content">
     <h6>EU-Streitschlichtung</h6>
     <p class="details">
      Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:
      https://ec.europa.eu/consumers/odr.
      Unsere E-Mail-Adresse finden Sie oben im Impressum.
     </p>
    </div>
    <div class="content">
     <h6>Verbraucher streit beilegung / Universal schlichtungs stelle</h6>
     <p class="details">
      Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle
      teilzunehmen.
     </p>
    </div>
    <div class="content">
     <h6>Haftung für Inhalte</h6>
     <p class="details">
      Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen
      Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte
      oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige
      Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den
      allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der
      Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden
      wir diese Inhalte umgehend entfernen.
     </p>
    </div>
    <div class="content">
     <h6>Haftung für Links</h6>
     <p class="details">
      Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb
      können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets
      der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der
      Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht
      erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte
      einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links
      umgehend entfernen.
     </p>
    </div>
    <div class="content">
     <h6>Urheberrecht</h6>
     <p class="details">
      Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen
      Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des
      Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien
      dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser
      Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte
      Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten
      wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte
      umgehend entfernen.
     </p>
    </div>
   </div>
  </section>


  @include('frontEnd/partial/footer')
 </body>

</html>