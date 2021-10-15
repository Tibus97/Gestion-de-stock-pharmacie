@extends('pharmacie.app.apps')
@section ('style')

<style>
    .input-container{
        
        height: 100vh;
    };

    
</style>



@endsection

@section('content')
   <div class="input-container">
       <h3>Page de vente</h3>
        <form action="{{route('facture')}}" method="post">
            @csrf
            <div style="display: flex; flex-direction:column; justify-content:space-between; height:200px;">
            <div>
                <label for="produit">Désignation</label>
                <input style="height: 40px; width: 250px; border-radius:5px; outline:none; margin-left:10px" type="text" name="produit" id="produit">
            </div>
            <div>
                <label for="pu">Prix Unitaire</label>
                <input style="height: 40px; width: 250px; border-radius:5px; outline:none" type="number" name="pu" id="pu">
            </div>
            <div>
                <label for="qtevendue"> Qté vendue</label>
                <input style="height: 40px; width: 250px; border-radius:5px; outline:none" type="number" name="qtevendue" id="qtevendue">
            </div>
            <div>
                <button style="height: 40px; width: 250px; border-radius:5px; outline:none" type="submit">Enregistrer</button>
            </div>

            </div>
        </form>


   </div>
 


@endsection