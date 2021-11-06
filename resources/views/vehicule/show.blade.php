@extends('layouts.master')

@section('content')
<div class="container">
    <h1>{{$vehicule->name}}</h1>
    <a href="{{route('vehicule.edit',$vehicule)}}" class="btn btn-secondary my-3">Editer</a>
    <form action="{{route('vehicule.delete', $vehicule)}}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Supprimer</button>

    </form>
    <hr>
    <p><strong>Marque de Voiture :</strong> {{$vehicule->marque}}</p>
    <p><strong>Type de voiture :</strong> {{$vehicule->type}}</p>
    <p><strong>Couleur :</strong> {{$vehicule->couleur}}</p>
    <p><strong>Carburant Utiliser :</strong> {{$vehicule->carburant}}</p>
    @if ( $vehicule->image)
        <img src="{{ asset('storage/'. $vehicule->image) }}" alt="client-avatars" class="img-thumbnail" width="200px">
    @endif
</div>
@endsection
