

@extends('pharmacie.app.apps')

@section('style')
<style>
    th{
    border: 1px solid black;
    background-color: #e0ffff;
    color: black;
    
};







</style>

@endsection

@section('content')

<h2>Les médicaments disponibles en stock</h2>
<div class="table-container">
<table style=" width: 100%;">
    <tr>
        <th style="height: 50px; border-radius:20px; font-size: 25px;">Désignation</th>
        <th style="border-radius:20px; font-size: 25px">Qté Disponible</th>
        <th style="border-radius:20px; font-size: 25px">Prix</th>
        <th style="border-radius:20px;font-size: 25px">Détails</th>
        <th style="border-radius:20px;font-size: 25px">Action</th>

    </tr>
    
    @foreach($medocs as $medoc)
    <tr style="background-color:#f0f8ff; height: 70px;">
       
        <td style="text-align: center;font-size:18px">{{$medoc->designation}}</td>
        
        <td style="text-align: center; font-size:18px">{{$medoc->stock}}</td>
        <td style="text-align: center; font-size:18px">{{$medoc->prix}} Fcfa</td>
        <td style="text-align: center; font-size:18px"> <a style="text-decoration: none;" href="{{route ('detailpage', ['id'=>$medoc->id])}}">-></a></td>
        <td style="text-align: center;">
            <form action="{{route ('delete', ['id'=>$medoc->id])}}" method="post">
                @csrf
            <button style="outline:none; border:none; font-size:18px">Supprimer</button>
            </form>
            
            
        </td>
    </tr>
    
    @endforeach

</table>

</div>

    <div class="links" style="display:flex; align-items:center; justify-content:space-around;height:100px;">
    
    <a style="text-decoration: none; width: 100px;height: 50px;border:1px solid black; border-radius:20px; display: flex; justify-content:center; align-items:center;" href="{{route('salebtn')}}"> Vendre </a> 

   
   <a style="text-decoration: none; width: 90px;height: 50px;border:1px solid black; border-radius:20px; display: flex; justify-content:center; align-items:center" href="{{route('addbtn')}}"> Ajouter un médicament </a>

  


</div>





@endsection

