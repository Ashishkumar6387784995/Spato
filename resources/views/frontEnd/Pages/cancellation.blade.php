<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cancellation Policy</title>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script> -->
    <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
    <style>
      .cancellation-page {
        background-color: #eaebef;
        /* margin-top: -10rem; */
        padding-top: 5rem;
        margin-bottom: -10rem;
        padding-bottom: 10rem;

        clip-path: polygon(0% 3%, 100% 0%, 100% 100%, 0% 100%);
      }
      .cancellation-page nav .home {
        color: var(--black) !important;
        text-decoration: none !important;
      }

      .cancellation-page .content h6 {
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 2rem;
        font-size: 22px;
      }

      .cancellation-page .content .details {
        margin: 2rem 0rem;
        text-align: justify;
      }

      @media screen and (max-device-width: 480px) and (orientation: portrait) {
        .cancellation-page {
          clip-path: polygon(0% 1%, 100% 0%, 100% 100%, 0% 100%);
        }
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <!-- Header -->
    @include('frontEnd/partial/header')
    <!-- Header -->
    <section class="cancellation-page">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="home" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Cancellation
            </li>
          </ol>
        </nav>

        <h1 class="text-center">Cancellation</h1>

        <div class="content">
          <h6>WIDERRUFSRECHT FÜR VERBRAUCHER</h6>
          <p class="details">
            A consumer is any natural person who enters into a legal transaction
            for purposes that cannot be predominantly attributed to his or her
            commercial or self-employed professional activity. As a consumer,
            you have the right to withdraw from this contract within fourteen
            days without giving reasons. The withdrawal period is fourteen days
            from the day
          </p>
          <p class="details">
            from which you or a third party named by you, who is not the
            carrier, have taken possession of the goods, provided that you have
            ordered one or more goods as part of a single order and these are or
            will be delivered uniformly, or where you or a third party named by
            you, who is not the carrier, took possession of the last goods,
            provided that you have ordered several goods as part of a single
            order and these are delivered separately, or from which you, or a
            third party designated by you who is not the carrier, have taken
            possession of the last part or piece if you have ordered goods that
            are delivered in several instalments or pieces, or on which you, or
            a third party designated by you who is not the carrier, have taken
            possession of the first goods, provided that you have entered into a
            contract for the regular delivery of goods over a specified period
            of time. To exercise your right of withdrawal, you must contact us
            at:
          </p>
          <p class="details">
            SPATO GmbH
            <br />
            Schellberger Weg 34
            <br />
            42659 Solingen
            <br />
            E-mail: info@spato.de
          </p>
          <p class="details">
            by means of a clear statement (e.g. a letter sent by post, e-mail)
            of your decision to withdraw from this contract. You can use the
            attached sample withdrawal form for this, but it is not mandatory.
            In order to comply with the withdrawal period, it is sufficient for
            you to send the notification of the exercise of the right of
            withdrawal before the expiry of the withdrawal period.
          </p>
        </div>
        <div class="content">
          <h6>FOLGEN DES WIDERRUFS</h6>
          <p class="details">
            Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen,
            die wir von Ihnen erhalten haben, einschließlich der Lieferkosten
            (mit Ausnahme der zusätzlichen Kosten, die sich daraus ergeben, dass
            Sie eine andere Art der Lieferung als die von uns angebotene,
            günstigste Standardlieferung gewählt haben), unverzüglich und
            spätestens binnen vierzehn Tagen ab dem Tag zurückzuzahlen, an dem
            die Mitteilung über Ihren Widerruf dieses Vertrags bei uns
            eingegangen ist. Für diese Rückzahlung verwenden wir dasselbe
            Zahlungsmittel, das Sie bei der ursprünglichen Transaktion
            eingesetzt haben, es sei denn, mit Ihnen wurde ausdrücklich etwas
            anderes vereinbart; in keinem Fall werden Ihnen wegen dieser
            Rückzahlung Entgelte berechnet. ir können die Rückzahlung
            verweigern, bis wir die Waren wieder zurückerhalten haben oder bis
            Sie den Nachweis erbracht haben, dass Sie die Waren zurückgesandt
            haben, je nachdem, welches der frühere Zeitpunkt ist. Sie haben die
            Waren unverzüglich und in jedem Fall spätestens binnen vierzehn
            Tagen ab dem Tag, an dem Sie uns über den Widerruf dieses Vertrags
            unterrichten, an uns zurückzusenden oder zu übergeben. Die Frist ist
            gewahrt, wenn Sie die Waren vor Ablauf der Frist von vierzehn Tagen
            absenden.
          </p>
          <p class="details">
            Die Kosten der Rücksendung der Waren nach Widerruf sind vom Käufer
            zu tragen.
          </p>
        </div>
        <div class="content">
          <h6>WIDERRUFSFORMULAR</h6>
          <p class="details">Download: Muster-Widerrufsformular (PDF)</p>
        </div>
      </div>
    </section>
 <!-- Footer -->
 @include('frontEnd/partial/footer')
 <!-- Footer -->
  </body>
</html>
