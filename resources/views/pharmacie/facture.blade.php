@extends('pharmacie.app.apps')

@section('style')
<style>
    
   
</style>


@endsection

@section('content')

<h3>Ma facture</h3>
<table>
    <tr>
        <th>Désignation</th>
        <th>Prix Unitaire</th>
        <th>Qté vendue</th>
        <th>Qté Totale</th>
    </tr>
    <tr>

    <td>{{$designation}}</td>
    <td>{{$pu}}</td>
    <td>{{$qtevendue}}</td>
    <td> {{$qtetotal}} </td>
   
   </tr>
    
</table>




@endsection('content')