@extends('dashboard.index')
@section('section')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
    <h4>Add Category </h4>
     
@if ($errors->any())
<div class="alert alert-danger">
    <ul style="color: white">
        @foreach ($errors->all() as $error)
           {{$error}}
         
                  @endforeach
    </ul>
</div>
@endif
        </div>
        <div class="card-body">
    <form form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    
    @csrf
    <div class="row">
    {{-- Name --}}
    <div class="col-md-12">
    <label  class="form-label">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Category Name">
        
    </div>
    {{-- Description --}}
    <div class="col-md-12">
    <label  class="form-label">Description</label>
         <textarea name="description"  placeholder="Enter Description" class="form-control" ></textarea>
    </div>

{{-- Features --}}
    <h3 class="m-2"> Features : </h3>

    <div class="col-md-6">
    <label  class="form-label">Frist Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Frist Feature"  name="feature[]">
    </div>
    <div class="col-md-6">
    <label  class="form-label">Second Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Second Feature"  name="feature[]">
        
    </div>
    
    <div class="col-md-6">
    <label  class="form-label">Third Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Third Feature"  name="feature[]">
        
    </div>
    
    <div class="col-md-6">
    <label  class="form-label">Fourth Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Fourth Feature"  name="feature[]">
        
    </div>
    
    <div class="col-md-6">
    <label  class="form-label">Fifth Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Fifth Feature"  name="feature[]">
        
    </div>
    
    <div class="col-md-6">
    <label  class="form-label">Sixth Feature</label>
          <input type="text" class="form-control" name="feature[]"  placeholder="Enter Sixth Feature"  name="feature[]"> 
    </div>
    
    

    <div class="col-md-12 mt-2">
    <button type="submit" class="btn btn-primary float-end ">Save</button>
    </div>
    </div>
    </form>
        </div>
    </div>
        </div>
    </div>
    </div>
@endsection