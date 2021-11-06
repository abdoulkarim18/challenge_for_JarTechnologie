@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <form action="{{route('auth.loginPost')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="email" name="email" id="" class="form-control mt-2 @error('email')is-invalid
            @enderror" placeholder="Votre email..." value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" class="form-control mt-2 @error('password')is-invalid
            @enderror" placeholder="Mot de password..." value="{{old('password')}}">
            @error('password')
            <div class="invalid-feedback">
                {{$errors->first('password')}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-2">Connexion</button>
    </form>
</div>
@endsection
