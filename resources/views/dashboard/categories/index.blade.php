@extends('dashboard.index')
@section('section')


<div class="container-fluid">
    <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Category</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2" id="category_table">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0   table-striped">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number Of Passangers</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                          <!-- <th class="text-secondary opacity-7"></th> -->
                        </tr>
                      </thead>
                      <tbody>
                        @if ($categories != [])
                        @foreach ($categories as $category)
                        <tr>
                        <td class="align-middle px-4">
                            <span class="text-secondary text-xs font-weight-bold">{{$category->name}}</span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$category->description}}</span>
                      </td>
                          <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$category->features[0]->feature}}</span>
                          </td>

                          <td class="align-middle text-center text-center d-flex justify-content-center">
                            <form action="{{ route('category.delete' , $category->id) }}" method="post" class="me-2"> 
                                @method('delete')
                                @csrf
                             <input type="text" name="id" hidden value="{{$category->id}}"> 
                            <button type="submit" class="badge badge-sm bg-gradient-danger btn" name="cat_delete_btn">Delete</button>
                            </form>
                          </td> 
                        </tr>
                @endforeach 
                        @endif

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
@endsection