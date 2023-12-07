<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your have just requested to reset your passwort</title>
    <link rel="stylesheet" href="email.css" />
    <link rel="stylesheet" href="{{ asset('style/frontEnd/email/resetEmail.') }}">
  </head>
  <body>
    <div class="container">
      <div class="brand-logo">
        <img src="assets/images/spato-logo.png" alt="" srcset="" />
      </div>
      <div class="main-content">
        <p class="content-text">
          Sie haben gerade eine Passwortzurücksetzung für das mit dieser
          E-Mail-Adresse verknüpfte Spato-Konto beantragt.
        </p>

        <button type="submit" class="btn btn-style">Reset Password</button>

        <p class="content-text">
          Wenn Sie weiterhin Probleme beim Anmelden haben, wenden Sie sich bitte
          an uns
          <br />
          <a class="contact-btn" href="">Kontaktieren Sie Support.</a> Vielen
          Dank, dass Sie Spato verwenden!
        </p>
      </div>
    </div>
  </body>
</html>
