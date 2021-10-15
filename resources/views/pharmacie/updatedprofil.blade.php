@extends('pharmacie.app.apps')
@section('content')
     

<h3>Modification de mes informations personnelles</h3>

<form action="{{route ('updatedsucces')}}" method="post">
 <div>
     <input type="email" name="mailmodify" placeholder="Entrez votre nouvelle adresse mail">
 </div>
 <div>
     <input type="password" name="passmodify" placeholder="Entrez votre nouveau mot de passe">
 </div>

 <div>
     <button type="submit" name="save">Enregistrer</button>
 </div>


</form>
   

@endsection