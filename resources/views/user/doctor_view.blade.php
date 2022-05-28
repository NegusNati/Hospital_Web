<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Hospital Record Management Systsem - Natnael </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +251-939-080-890 </a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> natnaelbirhanu22@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/negus.nati/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/negusnati"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.instagram.com/negusnati"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Hospital</span>-Record</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/doc_view')}}">Doctors</a>
            </li>

            @if(Route::has('login'))
            
            @auth
            <x-app-layout>
            </x-app-layout>
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  


  <div  align = center style="overflow-x:auto; padding-top:100px;">
      <table class="table" style=" color: Black; padding-right: 10px ; margin-right: 5px;">
                        <thead>
                          <tr>
                            <th>  Name </th>
                            <th> Phone Number </th>
                            <th> Speciality </th>
                            <th> Sex </th>
                            <th> Availability </th>
                            <th> Role </th>
                            <th> Employee ID </th>
                            <th> Image </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($doctor as $instance)
                          @if($instance->role == 'doctor')
                          <tr>
                            <td>{{$instance->name}} </td>
                            <td>{{$instance->number}} </td>
                            <td>{{$instance->speciality}} </td>
                            <td>{{$instance->sex}} </td>
                            <td>{{$instance->availability}} </td>
                            <td>{{$instance->role}} </td>
                            <td>{{$instance->emp_id}} </td>
                            <td><img height="150" width="150" src="employeeimage/{{$instance->image}}" alt="Image" > </td>
                          </tr>
                          @endif
                          @endforeach
                        </tbody>
                      </table>
      </div>


 <!-- footer section  -->
  @include('user.footer')

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://github.com/NegusNati" target="_blank">Negus </a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>