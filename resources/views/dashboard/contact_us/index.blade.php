@extends('dashboard.index')
@section('section')


<div class="container-fluid">
    <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Contact-Us</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2" id="category_table">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0   table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Subject</th>
                              <th scope="col">Message</th>
                              <th scope="col">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                              @foreach ($contacts as $contact)
                              <tr>
                                  <td>{{ $contact->name }}</td>
                                  <td>{{ $contact->email }}</td>
                                  <td>{{ $contact->subject }}</td>
                                  <td>
                                    <button type="button" class="badge badge-sm bg-gradient-danger btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Show The Message
                                      </button>
                                
{{-- start modal --}}
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $contact->subject }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $contact->message }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">{{ $contact->name }}</button>
        </div>
      </div>
    </div>
  </div>
{{-- end modal --}}                                  
</td>
                              <td>    <form action="{{ route('contact.delete' , $contact->id) }}" method="post" class="me-2">
                                @csrf
                                <input type="text" name="id" hidden value="{{$contact->id}}"> 
                               <button type="submit" class="badge badge-sm bg-gradient-danger btn" name="cat_delete_btn">Delete</button>
                            </form></td>
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



