<!DOCTYPE html>
<html>
<head>
    <title>Offer PDF</title>
    <!-- Include any necessary styles or additional configurations here -->
</head>
<body>

    <h1>Offer PDF</h1>

    <table border="1">
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
            @foreach ($dynamicFieldsArray as $data)
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
