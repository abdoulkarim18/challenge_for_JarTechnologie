@extends('layouts.master')

@section('content')

<h1>Mes Voitures de {{Session('admin.name')}}</h1>

    <a href="{{route('vehicule.create')}}" class="btn btn-primary my-3 pull-right">Nouvelle Voiture</a>
<ul>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Marque</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody> 
            @foreach ($vehicules as $vehicule)
                 <tr>
                    <th scope="row">{{$vehicule->id}}</th>
                    <td><a href="{{route('vehicule.show', $vehicule)}}">{{$vehicule->name}}</a></td>
                    <td>{{ $vehicule->marque}}</td>
                    <td>{{ $vehicule->type}}</td>
                </tr>
             @endforeach
        </tbody>
      </table>
</ul>

@if(Session::has('admin'))

<a href="{{ route('logout') }}" class="btn btn-primary">logout</a>
@endif

{{-- <div class="row justify-content-center d-flex">
    {{ $clients->links()}}
</div> --}}

@endsection
