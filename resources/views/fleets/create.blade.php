@extends('layouts.header')
@section('content')
<div class="container p-5">
  <form action="{{ route('fleet.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Name</label>
      <input class="form-control" type="text" name="name">
  </div>
  <div class="mb-3">
    <label for="formFileMultiple" class="form-label">Describtion:</label>
    <br>
    <textarea name="describtion" id="" cols="100" rows="5"></textarea>
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
  <h3>Features : </h3>
  <div class="row p-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Feature-1" aria-label="First name" name="feature[]">
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