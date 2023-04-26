@php  
@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Sofia+Sans+Extra+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- fontwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Sofia+Sans+Extra+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> 
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>Bright Empire</title>
  </head>
  <body>
   <!-- Start Header -->
   <div class="header" id="header">
    <div class="container">
      <img src="{{ asset('images/logo.png') }}" alt="" srcset="" id="logo">  
      <a href="{{ route('Bright Empire') }}" class="logo"> <span style="color:white">Bright</span>  Empire</a>
      <ul class="main-nav">
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Fleets
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{{ route('fleets') }}">fleet</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Services
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">service</a></li>
            </ul>
          </div>
        </li>
        
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">resercva</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
        <li> 
          <div class="dropdown">
           <button
              class="btn dropdown-toggle bg-transparent"
              type="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
           >
             Reservation
           </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="#">Action</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
   </div>
  <!-- End Header -->
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>