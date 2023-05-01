<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
  Bright Empire
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle"     href="{{ asset('admin/assets/css/material-dashboard.min.css?v=3.0.0') }}" rel="stylesheet" />
  <style>

.form-control{
  padding: 8px 10px;
  border: 1px solid   #b3a1a1 !important;
}

.form-select{
  padding: 8px 10px;
  border: 1px solid   #b3a1a1 !important;
}
  </style>
</head>
<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" #" target="_blank">
            <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Bright Empire</span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white active bg-gradient-primary " href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">First page</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="{{route('categories')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Categories</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="{{route('category.create')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1"> Add Category </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="{{route('fleets')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1"> Fleet</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="{{route('fleet.create')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1"> Add Fleet </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="{{route('contact.show')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1"> Contact Us</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
          <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" type="button" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
        </div>
        </div>
    </aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">   
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
         
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            
          </div>
        </div>
    </nav>
    @yield('section')
</main>
{{-- yield --}}


{{-- end yield --}}
<!--   Core JS Files   -->
<script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>    