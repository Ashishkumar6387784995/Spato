<!DOCTYPE html>
<html>
<head>
    <title>Offer PDF</title>
    <!-- Include any necessary styles or additional configurations here -->

    <style>
        *{
            font-family: "Source Sans 3", sans-serif;
        }
        .brand-logo{
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: end;
        }
         .brand-logo .logo{
            width: 300px;
            margin: auto;
            justify-content: end;
        }

        table{
            margin: auto;
        }
        table thead tr{
            background-color: #54606c;
            color: #ffffff;
            padding: 2px 6px;
        }
    </style>
</head>
<body>

    <div class="brand-logo"><img class="logo" src="{{ public_path('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset=""></div>
    <div class="desc"><p>SPATO GmbH - Schellberger Weg 34 - 42659 DE - Solingen</p></div>


    <table>
        <thead>
            <tr>
                <th>POS</th>
                <th>Produkt</th>
                <th>Beschreibung</th>
                <th>Menge</th>
                <th>Einheit</th>
                <th>Einzelpreis</th>
                <th>Rabatt</th>
                <th>Gesamtpreis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $data)
                <tr>
                    <td>{{ $data['POS'] }}</td>
                    <td>{{ $data['Produkt'] }}</td>
                    <td>{{ $data['Beschreibung'] }}</td>
                    <td>{{ $data['Menge'] }}</td>
                    <td>{{ $data['Einheit'] }}</td>
                    <td>{{ $data['Einzelpreis'] }}</td>
                    <td>{{ $data['Rabatt'] }}</td>
                    <td>{{ $data['Gesamtpreis'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add any additional content or styling as needed -->

</body>
</html>
