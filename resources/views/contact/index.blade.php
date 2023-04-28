@extends('layouts.header')
@section('content')
<div style="min-height: 50vh; margin-bottom: 10px">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Contact-Us</h1>
          <p class="lead">Our Contact.</p>
        </div>
        <table class="container table table-hover table-dark shadow " style="margin-top: 100px; margin-bottom:100px">
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
                    <td>{{ $contact->message }}</td>
                    <td><a href="{{ route('contact.delete' , $contact->id) }}"><i class="delete-icon fa-sharp fa-solid fa-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection