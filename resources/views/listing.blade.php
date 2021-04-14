@extends('layouts')
@section('content')
    <div class="container mt-5">
        <p class="h2 text-center my-5">liste de location de voiture</p>
        <table class="table table-dark table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">reference de voiture</th>
                <th scope="col">prix de location</th>
                <th scope="col">nom de l'agence</th>
                <th scope="col">nom du locataire</th>

                <th scope="col">details</th>
                <th scope="col">edition</th>
                <th scope="col">suppression</th>
              </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                <tr>
                    <td>{{ $location->id}}</td>
                    <td>{{ $location->ref_voiture}}</td>
                    <td>{{ $location->prix }}</td>
                    <td>{{ $location->nom_agence }}</td>
                    <td>{{ $location->nom_locataire }}</td>

                <td><button type="button" class="btn btn-primary btn-sm">details</button></td>
                <td><button type="button" class="btn btn-warning btn-sm">edition</button></td>
                <td> <button type="button" class="btn btn-danger btn-sm">suppression</button></td>
                 </tr>
                 @endforeach

             {{--  <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-primary btn-sm">details</button></td>
                <td><button type="button" class="btn btn-warning btn-sm">edition</button></td>
                <td> <button type="button" class="btn btn-danger btn-sm">suppression</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><button type="button" class="btn btn-primary btn-sm">details</button></td>
                <td><button type="button" class="btn btn-warning btn-sm">edition</button></td>
                <td> <button type="button" class="btn btn-danger btn-sm">suppression</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td><button type="button" class="btn btn-primary btn-sm">details</button></td>
                <td><button type="button" class="btn btn-warning btn-sm">edition</button></td>
                <td> <button type="button" class="btn btn-danger btn-sm">suppression</button></td>



            </tr>
            --}}

            </tbody>
          </table>
    </div>
@endsection
