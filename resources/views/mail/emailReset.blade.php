<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your have just requested to reset your passwort</title>

    <style>
        :root {
            --blue: #44e1d5;
            --black: #54606c;
            --white: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
            font-family: "Source Sans 3", sans-serif;
            background-color: #e6e6e6;
        }

        .container {
            margin-top: 2rem;
        }

        .container .brand-logo {
            margin: 2rem 0rem;
        }

        .container .brand-logo img {
            margin: auto;
            justify-content: center;
            width: 20%;
            display: block;
        }

        .main-content {
            background-color: var(--white);
            width: 40%;
            height: 50%;
            padding: -1rem 2rem;
            margin: auto;
            display: block;
            justify-content: center;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .main-content p {
            text-align: center;
            margin: 1rem 1rem;
            font-weight: 600;
            color: var(--black);
        }

        .user-name {
            text-align: center;
            font-size: 25px;
            color: #54606c;

        }

        .btn-style {
            background: rgb(60, 207, 223);
            background: linear-gradient(90deg,
                    rgba(60, 207, 223, 1) 15%,
                    rgba(69, 227, 212, 1) 63%);
            justify-content: center;
            align-items: center;
            margin: auto;
            display: block;
            padding: 1.5rem 2.5rem;
            border: none;
            border-radius: 5px;
            color: var(--white);
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            font-size: 20px;
        }

        .main-content .contact-btn {
            color: #44e1d5;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="brand-logo">
            <!-- <img src="{{ asset('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="" /> -->
            <img src="cid:logo.png" alt="Spato Logo">
            <h1 class="user-name">Hii, Mr/Ms {{$user->name}}</h1>
        </div>
        <div class="main-content">
            <p class="content-text">
                Sie haben gerade eine Passwortzurücksetzung für das mit dieser
                E-Mail-Adresse verknüpfte Spato-Konto beantragt.
            </p>

            <a style="color: #ffffff; text-decoration:none; cursor:pointer;" href="{{ url('api/password/reset', ['token' => $token]) }}"> <button type="submit" class="btn btn-style">Reset Password</button></a>



            <p class="content-text">
                Wenn Sie weiterhin Probleme beim Anmelden haben, wenden Sie sich bitte
                an uns
    </br > </br >
                <a class="contact-btn" href="#">Kontaktieren Sie Support.</a> Vielen
                Dank, dass Sie Spato verwenden!
            </p>
        </div>
    </div>
</body>

</html>