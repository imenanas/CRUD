@extends('layouts')
@section('content')

<div class="container  mt-5">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
       <p>{{ $message }}</p>
    </div>
    @endif
</div>

        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="container  d-flex justify-content-center">
<form
action="{{route('locations.store')  }}"
 class="my-5 p-5 border border-primary"
 style="max-width: 500px"
 method="post">
@csrf
        <div class="mb-3">
          <label for="nom_locataire" class="form-label">Nom du locataire</label>
          <input type="text" class="form-control" name="nom_locataire" value="{{ old('nom_locataire') }}">
          @error('nom_locataire')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror

        </div>
        <div class="mb-3">
          <label for="ref_voiture" class="form-label">reference voiture</label>
          <input type="text" class="form-control" name="ref_voiture" value="{{ old('ref_voiture') }}">
          @error('ref_voiture')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
        <div class="mb-3">
            <label for="nom_agence" class="form-label">nom de agence</label>
            <input type="text" class="form-control" name="nom_agence" value="{{ old('nom_agence') }}">
            @error('nom_agence')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
          </div>
          <div class="mb-3">
            <label for="prix" class="form-label">prix de la location</label>
            <input type="text" class="form-control" name="prix" value="{{ old('prix') }}">
            @error('prix')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
          </div>
        <button type="submit" class="btn btn-primary">valider</button>
      </form>
</div>
@endsection
