<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
      font-family: "Roboto", sans-serif;
    }

    .mailer {
      background-color: white;
      border-radius: 10px;
    }

    .logo a {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 1rem 0rem;
    }

    .logo a img {
      margin: auto;
      justify-content: center;
      align-items: center;
      width: 40%;
    }

    .details {
      font-size: 15px;
    }

    .details .mail {
      font-weight: 700;
      font-family: "Roboto", sans-serif;
    }

    .footer p {
      text-align: center;
      font-weight: 400;
      color: var(--black);
      margin-top: 2rem;
    }

    .responsive {
      display: flex;
      justify-content: center;
    }

    .responsive table tr th {
      background-color: #404040;
      color: #fff;
    }

    .responsive table tr * {
      padding: 0px 10px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="mailer">
    <div class="logo">
      <a href="#"><img src="cid:logo.png" alt="Spato" srcset=""></a>
    </div>
    <div class="details">
      <p>{{$newslatterProducts[0]->greeting_info}}</p>

      <div class="responsive">
        <table>
          <thead>
            <tr>
              <th>Produkt</th>
              <th>Produktname</th>
              <th>Beschreibung</th>
              <th>Produktbild</th>
              <th>Einzelpreis</th>
            </tr>
          </thead>

          <tbody>

            @foreach($newslatterProducts as $product)
           <tr>
              <td>{{ $product->Produkt }}</td>
              <td>{{ $product->Produktname }}</td>
              <td> <a href="{{url('/')}}"><img src="http://spato.eu/storage/{{ $product->Produktimage }}" alt="Image" style="height:50px; width:50px"></a></td>
              {{--<td><img src="{{url('/')}}/storage/{{ $product->Produktimage }}" alt="Image" style="height:50px; width:50px"></td>--}}
              <td>{{ $product->Beschreibung }}</td>
              <td>{{ $product->Einzelpreis }}</td>
            </tr></a>
            @endforeach

          </tbody>
        </table>
      </div>

      <div class="selling-info">
        <h3>Selling Information :</h3>
        <p>{{$newslatterProducts[0]->sell_info}}</p>
      </div>

      <div class="free-text">
        <p>{{$newslatterProducts[0]->free_text}}</p>
      </div>

    </div>

    
  </div>

</body>

</html>