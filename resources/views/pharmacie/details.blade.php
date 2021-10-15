@extends('pharmacie.app.apps')


@section('content')

<span>
    
    {{$details->description}} <br>
    
    <a href="{{route ('home')}}">Retour</a>
</span>




@endsection