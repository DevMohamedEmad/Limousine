@extends('dashboard.index')
@section('section')


<div class="container-fluid">
    <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Fleet</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2" id="category_table">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0   table-striped">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Namber Of Passangers</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($cars as $car)
                        <tr>
                        <td class="align-middle px-4">
                            <span class="text-secondary text-xs font-weight-bold">{{$car->category->name}}</span>
                          </td>
                          <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$car->name}}</span>
                          </td>
    
                          <td class="align-middle text-center">
                           
                                <img src="{{asset($car->photos[0]->photo) }}" class="avatar avatar-sm  border-radius-lg" alt="user1">
                            
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$car->description}}</span>
                      </td>
                          <td class="align-middle text-center text-center d-flex justify-content-center">
                            <form action="{{ route('fleet.delete' , $car->id) }}" method="post" class="me-2">
                              @csrf
                             <input type="text" name="id" hidden value="{{$car->id}}"> 
                            <button type="submit" class="badge badge-sm bg-gradient-danger btn" name="cat_delete_btn">Delete</button>
                            </form>
                          </td> 
                        </tr>
                @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
@endsection