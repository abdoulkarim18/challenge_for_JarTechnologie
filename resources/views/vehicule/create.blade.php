@extends('layouts.master')


@section('content')
<div class="container">
    <h1>Liste Des Véhicules</h1>
    <form action="{{route('vehicule.post')}}" method="POST" enctype="multipart/form-data">
        @include('vehicule.field')
        <button type="submit" class="btn btn-primary my-2">Ajouter Votre Vehicule</button>
    </form>
</div>
@endsection
