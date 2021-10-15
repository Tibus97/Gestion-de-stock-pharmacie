@extends('pharmacie.app.apps')


@section('content')
<form action="{{route('addmedoc.post')}}" method="post">
    @csrf
 <div>
    <div>
         <label for="designation">Désignation</label>
         <input type="text" name="designation" id="designation">
    </div>
    <div>
         <label for="descr">Description</label>
        <textarea name="description" id="descr" cols="30" rows="10"></textarea>
    </div>
    <div>
       <label for="qte">Qté</label>
       <input type="number" name="qte" id="qte">
    </div>
   <div>
        <label for="price">Prix</label>
         <input type="number" name="prix" id="price">
    </div>
    <div>
        <button type="submit">Ajouter</button>
    </div>

    <div>
       <a href="{{route ('home')}}">Retour</a>
       
    </div>


 </div>
  

</form>


@endsection