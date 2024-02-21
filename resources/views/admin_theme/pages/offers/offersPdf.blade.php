<!DOCTYPE html>
<html>

<head>
    <title>Offer PDF</title>
    <!-- Include any necessary styles or additional configurations here -->

    <style>
        * {
            font-family: "Source Sans 3", sans-serif;
            font-size: 12px;
        }

        @page {

            size: A4;

        }

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
            background-color: #404040;
            color: #ffffff;
            padding: 2px 6px;
            margin:0;
        }

        .offers tr td {
           border:none;
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

        .page-break {
  page-break-before: always;
}
.pagenum:before {
        content: counter(page);
    }
    </style>
</head>

<body>
<div class="offerpdf">
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
                <th>Angebots-Nr.</th>
                <th>{{$offers[0]->Angebots_Nr}}</th>
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
                <td class="details">{{$offers[0]->Angebotsdatum}}</td>
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
                <td class="details">{{$offers[0]->Referenz}}</td>
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
                <td class="details">{{$offers[0]->Ihre_Kundennummer}}</td>
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
    <h3>Angebot {{$offers[0]->Angebots_Nr}}</h3>
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
            @foreach ($offers as $data)
            <tr>
                <td>{{ $data['POS'] }}</td>
                <td>{{ $data['Produkt'] }}</td>
                <td style="width:250px;">{{ $data['Beschreibung'] }}</td>
                <td>{{ $data['Menge'] }}</td>
                <td>{{ $data['Einheit'] }}</td>
                <td>{{ $data['Einzelpreis'] }}</td>
                <td>{{ $data['Rabatt'] }}</td>
                <td>{{ $data['Gesamtpreis'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <!-- Add any additional content or styling as needed -->
   <div class="footer">
        <table>
            <tbody>
                <tr>
                <td><p class="hidden">Lo</p></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td><p class="hidden">Lo</p></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td><p class="hidden">Lo</p></td>
                    <td>
                        <p class="hidden">Lo</p>
                    </td>
                    <td style="text-align:right;">
                    <p>Seite <span class="pagenum" style="text-align:right;"></span> von 2</p>
                    </td>
                </tr>
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
        <div class="page-break"></div>

        <div class="Intotal-calculation">
        
    <table class="offers">
        <thead>
            <tr>
                <th>POS</th>
                <th>Produkt</th>
                <th style="width:250px;">Beschreibung</th>
                <th>Menge</th>
                <th>Einheit</th>
                <th>Einzelpreis</th>
                <th>Rabatt</th>
                <th>Gesamtpreis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td colspan="2" style="width:250px;">Gesamtbetrag netto</td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2" style="text-align:right;">54.818,89 EUR</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" style="width:250px;">zzgl. Umsatzsteuer 19%</td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2" style="text-align:right;">10.415,59 EUR</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" style="width:250px; font-size:16px; font-weight:900;">Gesamtbetrag brutto</td>
                <td></td>
                <td></td>   
                <td></td>
                <td colspan="2" style="text-align:right; font-size:16px; font-weight:900;">65.234,48 EUR</td>
            </tr>
        </tbody>
    </table>
    <div class="intotal-text">
        <p style="font-size:15px;">Lieferbedingungen: zzgl. Frachtkosten <br>
Zahlungsbedingungen: nach Vereinbarung
</p>
<p>Wir behalten uns vor, Preise aufgrund der weltweiten Pandemie und Rohstoffknappheit anzupassen. Es gelten für alle geschäftlichen Vorgänge ausschließlich unsere
AGB. An dieses Angebot halten wir uns 10 Werktage gebunden. Mit der Erteilung eines Auftrages setzen wir voraus, dass Sie unsere AGB zur Kenntnis genommen haben.
Sollten Ihnen unsere aktuellen AGB nicht vorliegen, fordern Sie diese bitte unter info@spato.de an.
</p>
<p>We reserve the right to adjust prices due to the global pandemic and shortage of raw materials. Our General Terms and Conditions apply exclusively to all business
transactions.We are bound to this offer for 10 working days. By placing an order, we assume that you have taken note of our terms and conditions. If you do not have our
current terms and conditions, please request them from info@spato.de.</p>
    </div>
        </div>
    </div>
</body>

</html>