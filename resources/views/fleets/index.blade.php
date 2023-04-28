@extends('layouts.header')
@section('content')

<div class="jumbotron container p-3">
    <h1 class="display-4">Hello, Ahmed!</h1>
    <p class="lead"> Our Fleets</p>
    <hr class="my-4">
    <p>Our Vehicles.</p>
    <p class="lead">
      <a class="btn4" href="{{ route('fleet.create') }}" role="button">Create</a>
    </p>
  </div>
  <table class="table table-striped table-hover container">
    <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Number Of Passenger</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cars as $car)
        <tr class="p-5">
          <td style="font-size: 25px; font-weight: 600;" class="p-3">{{ $car->name }}</td>
          <td> <img src="{{ asset($car->photos[1]->photo) }}" width="140px" height="70px" style="border-radius: 3px" alt="" srcset=""></td>
          <td style="font-size: 25px; font-weight: 600;" class="p-3" >{{ $car->features[0]->feature }}</td>
        </tr>
        @endforeach
 
      </tbody>
  </table>
@endsection