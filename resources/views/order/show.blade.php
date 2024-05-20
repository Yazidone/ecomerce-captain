@extends('layouts.master')

@section('main')
<link rel="stylesheet" href="{{ asset('css/sb_order.css') }}">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tableau Facture</title>
</head>
<body>
  <main>
    <h1>Voltaro</h1>
    <p>45 av Georges Lepage</p>
    <p>6000 Charleroi</p>
    <p>(32) 71 25 33 33</p>
    <h2>Facture</h2>
    <p><time>Envoyée le 04/09/2000</time></p>
    <table class="client">
      <tr>
        <th>Facture pour</th>
        <th>Payable à</th>
        <th>N° de facture</th>
      </tr>
      <tr>
        <td>Alfred Nimoi</td>
        <td rowspan="2">Nom</td>
        <td rowspan="2">123456</td>
      </tr>
      <tr>
        <td>Flight and Secure</td>

      </tr>
      <tr>
        <td>31 ch. d'Andennes</td>
        <th>Projet</th>
        <th>Date d'échéance</th>
      </tr>
      <tr>
        <td>7000 Mons</td>
        <td></td>
        <td>16/09/2000</td>
      </tr>
    </table>
    <hr size="1">

    <table class="description">
      <tbody>
        <tr>
          <th>Description</th>
          <th>Qté</th>
          <th>Prix unitaire</th>
          <th>Prix total</th>
        </tr>
        <tr>
          <td>Préparation Cablage et pose (h)</td>
          <td>8</td>
          <td>38,00$</td>
          <td>304,00$</td>
        </tr>
        <tr>
          <td>Fiches</td>
          <td>2</td>
          <td>200,00$</td>
          <td>400,00$</td>
        </tr>
        <tr>
          <td>Cablage murale (m)</td>
          <td>250</td>
          <td>6,95$</td>
          <td>1737,50$</td>
        </tr>
        <tr>
          <td>Tableau commande murale INTEX</td>
          <td>1</td>
          <td>856,00$</td>
          <td>856,00$</td>
        </tr>
        <tr>
          <td>Interrupteur Niko</td>
          <td>43</td>
          <td>6,04$</td>
          <td>259,72$</td>
        </tr>
      </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Remarque</td>
            <td>Sous-total</td>
            <td>3557,22$</td>
          </tr>
          <tr>
            <td colspan="3">Ajustements</td>
            <td>-100,00$</td>
          </tr>
          <tr>
            <td colspan="4">3457,22$</td>
          </tr>
        </tfoot>  
      </table>
  </main>
</body>
</html>

                
                    </tbody>
                </table>
            </div>

           
        </div>
    </div>
    @include('order.edit')
    @include('order.delete')
    <script>
    </script>
@endsection
