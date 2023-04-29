@extends('dashboard.index')
@section('section')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
    <h4>Add Fleet </h4>
        </div>
        <div class="card-body">
    <form form action="{{ route('fleet.store') }}" method="post" enctype="multipart/form-data">
    
    @csrf
    <div class="row">
    
    <div class="col-md-12">
    <label  class="form-label">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Category Name">
        
    </div>
    
    
    <div class="col-md-12">
    <label  class="form-label">Description</label>
         <textarea name="description"  placeholder="Enter Description" class="form-control" ></textarea>
    </div>
    <div class="col-md-12">
      <label  class="form-label">Choose Category</label>
      <select class="form-select" aria-label="Default select example" name="category">
            <option selected>Open this select menu</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>                  
            @endforeach
          </select>
      </div>
    <div class="col-md-12">
    <label  class="form-label">Upload Images</label>
          <input type="file" class="form-control" name="photos[]"  placeholder="Upload Imageس" multiple>
    </div>
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