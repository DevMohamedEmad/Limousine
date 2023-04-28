@extends('layouts.header')
@section('content')
<div class="container p-5">
  <form action="{{ route('fleet.store') }}" method="post" enctype="multipart/form-data" class="p-5 shadow">
    @csrf
    <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Name</label>
      <input class="form-control" type="text" name="name">
  </div>
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Describtion:</label>
    <br>
    <textarea class="form-control" name="describtion"></textarea>
  </div>
  <br>
  <hr>
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Photos</label>
    <input class="form-control" type="file" name="photos[]"  multiple>
  </div>   
  <br>
  <hr>   
  <br>
  <div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="category">
    <option selected>Choice The Category</option>
    @foreach ( $categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  </div>
  <br>
  <hr>   
  <br>
  <h3>Features : </h3>
  <div class="row p-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Number Of Passenger" aria-label="First name" name="feature[]">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-2" aria-label="First name" name="feature[]">
    </div>
  </div>
  <div class="row p-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-3" aria-label="First name" name="feature[]">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-4" aria-label="First name" name="feature[]">
    </div>
  </div>
  <div class="row p-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-5" aria-label="First name" name="feature[]">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-6" aria-label="First name" name="feature[]">
    </div>
  </div>
  <br> 
  <input type="submit" value="Create">  
  </form>
</div>

@endsection