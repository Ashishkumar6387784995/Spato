<!DOCTYPE html>
<html>

<head>
    <title>Assignments PDF</title>
    <!-- Include any necessary styles or additional configurations here -->

    <style>
        * {
            font-family: "Source Sans 3", sans-serif;
            font-size: 12px;
        }

        /* @page {

            size: A4;

        } */

        .brand-logo {
            display: flex;
            justify-content: right;
        }

        .brand-logo img {
            margin-left: 35rem !important;
            width: 300px;

        }

        .offers {
            margin: auto;
        }

        table tr th {
            text-align: left;
        }

        .offers tr th {
            background-color: #54606c;
            color: #ffffff;
            padding: 2px 6px;
        }

        .offers tr td {
            border-bottom: 0.2px solid #000;
        }

        .hidden {
            display: hidden;
            visibility: hidden;
            margin: 0px;
            padding: 0px;
        }


        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #8F8787;
        }

        .footer table {
            margin: auto;
            font-size: 10px !important;
        }

        .details {
            font-size: 10px;
        }

        .page_break {
            page-break-before: always;
        }
    </style>
</head>

<body>

    <div class="brand-logo">
        <img class="logo" src="{{ public_path('assets/frontEnd/web/images/spato-logo.png') }}" alt="" srcset="">
    </div>
    <div class="desc">
        <p>SPATO GmbH - Schellberger Weg 34 - 42659 DE - Solingen</p>
    </div>
    <br />
    <br />
    <div class="header">
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Auftrags-Nr.</th>
                <th>{{$assignments[0]->Auftrags_Nr}}</th>
            </tr>
            <tr>
                <td>SPATO GmbH</td>
                <td>
                    <p class="hidden">Lorem ipsum dolor sit</p>
                </td>
                <td>
                    <p class="hidden">Lorem ipsumLorem ipsumLorem ipsum</p>
                </td>
                <td class="details">Datum</td>
                <td class="details">{{$assignments[0]->Auftragsdatum}}</td>
            </tr>
            <tr>

                <td>Schellberger Weg 34</td>
                <td>
                    <p class="hidden">Lorem ipsum dolor sit</p>
                </td>
                <td>
                    <p class="hidden">Lorem ipsumLorem ipsumLorem ipsum</p>
                </td>
                <td class="details">Referenz</td>
                <td class="details">{{$assignments[0]->Referenz}}</td>
            </tr>
            <tr>

                <td>42659 Solingen</td>
                <td>
                    <p class="hidden">Lorem ipsum dolor sit</p>
                </td>
                <td>
                    <p class="hidden">Lorem ipsumLorem ipsumLorem ipsum </p>
                </td>
                <td class="details">Ihre Kundennummer</td>
                <td class="details">{{$assignments[0]->Ihre_Kundennummer}}</td>
            </tr>
            <tr>

                <td>Deutschland</td>
                <td>
                    <p class="hidden">Lorem ipsum dolor sit</p>
                </td>
                <td>
                    <p class="hidden">Lorem ipsumLorem ipsumLorem ipsum</p>
                </td>
                <td class="details">Ihr Ansprechpartner</td>
                <td class="details">Oliver Laug</td>
            </tr>
        </table>
    </div>
    <br /><br /><br />
    <h3>Auftrags {{$assignments[0]->Auftrags_Nr}}  aus Angebot {{$assignments[0]->Angebot_Nr}}</h3>
    <table class="offers">
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
            @foreach ($assignments as $data)
            <tr>
                <td>{{ $data['POS'] }}</td>
                <td>{{ $data['Produkt'] }}</td>
                <td style="width:300px;">{{ $data['Beschreibung'] }}</td>
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
    <div class="footer" style=" ">
        <table>
            <tbody>
                <tr>
                    <td>SPATO GmbH</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>E-Mail: info@spato.de</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Amtsgericht Wuppertal</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Stadt Sparkasse Solingen</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                </tr>
                <tr>
                    <td>Schellberger Weg 34</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Web: www.spato.de</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>HR-Nr.: 32131</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Konto: PayPal info@spato.de</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                </tr>
                <tr>
                    <td>42659 DE - Solingen</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>USt.-ID: DE346441844</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>BLZ: 342 500 00</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                </tr>
                <tr>
                    <td>Deutschland</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Steuer-Nr.: 128/5820/8408</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>IBAN: DE18 3425 0000 0001 8942 11
                    </td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>Geschäftsführung: Oliver Laug</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td>BIC: SOLSDE33XXX</td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                </tr>
            </tbody>
        </table>
       

        
    </div>
</body>

</html>