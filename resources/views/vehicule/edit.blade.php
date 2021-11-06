@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editer la voiture {{$vehicule->name}}</h1>
    <form action="{{route('vehicule.update',$vehicule)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')

        @include('vehicule.field')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
