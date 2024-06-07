<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $reservation->id }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .invoice-body {
            margin: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
        }
        .footer {
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0;
        }
        table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }
        table td {
            padding: 5px;
            vertical-align: top;
        }
        table tr td:nth-child(2) {
            text-align: right;
        }
        table tr.top table td {
            padding-bottom: 20px;
        }
        table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        table tr.information table td {
            padding-bottom: 40px;
        }
        table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        table tr.details td {
            padding-bottom: 20px;
        }
        table tr.item td{
            border-bottom: 1px solid #eee;
        }
        table tr.item.last td {
            border-bottom: none;
        }
        table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Facture de Mr. {{ $reservation->client->nom }}</h1>
        </div>
        <div class="invoice-body">
            <table>
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/rent-car-logo-design-template-0c037c26976ee5bd1ea71e457af42d34_screen.jpg?ts=1681813822" style="width:70%; max-width:100px;">
                                </td>
                                <td>
                                    Facture #: {{ $reservation->id }}<br>
                                    Du: {{ $reservation->date_debut }}<br>
                                    Au: {{ $reservation->date_fin }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    Rentcar.<br>
                                    12345 Hay Riad<br>
                                    Rabat, MA 12345
                                </td>
                                <td>
                                    {{$reservation->client->cin}}<br>
                                    {{$reservation->client->nom}}<br>
                                    {{$reservation->client->adresse}}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="heading">
                    <td>
                        Méthode de paiement
                    </td>
                    <td>
                        Espèces #
                    </td>
                </tr>

                <tr class="details">
                    <td>
                        Voiture
                    </td>
                    <td>
                        {{$reservation->voiture->marque}} - {{$reservation->voiture->modele}}
                    </td>
                </tr>
                 <tr class="details">
                    <td>
                        Prix de journée
                    </td>
                    <td>
                        {{$reservation->voiture->prixJournee}}
                    </td>

                </tr>

                <tr class="heading">
                    <td>
                        Item
                    </td>

                    <td>
                        Price
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Montant HT:
                    </td>

                    <td>
                        {{ $reservation->montant_ht }}
                    </td>
                </tr>

                <tr class="item last">
                    <td>
                        TVA
                    </td>

                    <td>
                        20%
                    </td>
                </tr>

                <tr class="total">
                    <td></td>

                    <td>
                       Total (Montant TTC): {{ $reservation->montant_ttc }} DH
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer">
            Invoice was created on a computer and is valid without the signature and seal.
        </div>
    </div>
</body>
</html>

