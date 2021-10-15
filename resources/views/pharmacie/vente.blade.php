@extends('pharmacie.app.apps')
@section('style')
  <style>
      th{
          border: 1px solid black;
          border-radius: 10px;
      }
  </style>
@endsection

@section('content')

<h3>L'historique des ventes</h3>

<table style="width: 100%;">
  <tr>
      <th style="height: 50px;">Nom du produit</th>
      <th>Prix de vente</th>
      <th>Qté vendue</th>
      <th>Date</th>
  </tr>
  @foreach($ventes as $vente)
  <tr>
      <td style="text-align: center;"> {{$vente->designation}}  </td>
      <td style="text-align: center;"> {{$vente->pu}} </td> 
      <td style="text-align: center;"> {{$vente->qtevendue}} </td>
      <td style="text-align: center;"> {{$vente->created_at}}  </td>
  </tr>

  @endforeach



</table>








@endsection