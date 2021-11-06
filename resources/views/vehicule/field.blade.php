@csrf
<div class="form-group">
    <input type="text" name="name" id="" class="form-control @error('name')is-invalid
    @enderror" placeholder="Vehicule name..." value="{{old('name') ??  $vehicule->name}}">
    @error('name')
    <div class="invalid-feedback">
        {{$errors->first('name')}}
    </div>
    @enderror
</div>
<div class="form-group my-2">
    <input type="text" name="type" id="" class="form-control @error('type')is-invalid
    @enderror" placeholder="Votre type..." value="{{old('type') ?? $vehicule->type}}">
    @error('type')
    <div class="invalid-feedback">
        {{$errors->first('type')}}
    </div>
    @enderror
</div>
<div class="form-group my-2">
    <input type="text" name="marque" id="" class="form-control @error('marque')is-invalid
    @enderror" placeholder="Votre marque de Vehicule..." value="{{old('marque') ?? $vehicule->marque}}">
    @error('marque')
    <div class="invalid-feedback">
        {{$errors->first('marque')}}
    </div>
    @enderror
</div>
<div class="form-group my-2">
    <input type="text" name="couleur" id="" class="form-control @error('couleur')is-invalid
    @enderror" placeholder="Votre couleur de Vehicule..." value="{{old('couleur') ?? $vehicule->couleur}}">
    @error('couleur')
    <div class="invalid-feedback">
        {{$errors->first('couleur')}}
    </div>
    @enderror
</div>

<div class="form-group">
    <select name="carburant" id="" class="custom-select form-control @error('carburant')is-invalid @enderror">
        @foreach ($vehicule->getCarburantOptions() as $key => $value)
            <option value="{{ $key}}" {{ $vehicule->status = $value ? 'selected' : ''}}>{{ $value }}</option>
        @endforeach
    </select>
    @error('carburant')
    <div class="invalid-feedback">
        {{$errors->first('carburant')}}
    </div>
    @enderror
</div>

{{-- <div class="form-group my-2">
    <select name="carburant" id="" class="custom-select form-control @error('carburant')is-invalid @enderror">

        @foreach ($carburants as $entreprise)

            <option value="{{ $entreprise->id }}" {{ $vehicule->entreprise_id = $entreprise->id ? 'selected' : '' }}>{{ $entreprise->name }}</option>
        @endforeach
    </select>
    @error('carburant')
    <div class="invalid-feedback">
        {{$errors->first('carburant')}}
    </div>
    @enderror
</div> --}}

<div class="form-group">
    <div class="custom-file">
        <input type="file" name="image" id="validatedCustomFile" class="custom-file-input @error('image')is-invalid
        @enderror">
        <label for="validatedCustomFile" class="custom-file-label my-4">Choisir une image...</label>
        @error('image')
            <div class="invalid-feedback">
                {{ $errors->first('image')}}
            </div>
        @enderror
    </div>
</div>

