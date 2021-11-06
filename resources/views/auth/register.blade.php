@extends('layouts.master')


@section('content')

    <div class="container mt-4">
        <form action="{{route('auth.registerPost')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="name" id="" class="form-control mt-2 @error('name')is-invalid
                @enderror" placeholder="Votre name..." value="{{old('name')}}">
                @error('name')
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
                @enderror
            </div>
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
            <div class="form-group">
                <input type="password" name="password_confirmation" id="" class="form-control mt-2 @error('password_confirmation')is-invalid
                @enderror" placeholder="Repeter password..." value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{$errors->first('password_confirmation')}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Inscription</button>
        </form>
    </div>
@endsection
