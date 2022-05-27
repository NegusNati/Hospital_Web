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

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <div class="page-section pb-0">
      <div class="container"><h2 class="text-white mb-4" align = "left" > About Us </h2>
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <p class="text-grey mb-4"><h2> --- </h2><br>
            In addition to offering traditional and established medical care services, We are distinguished with its tertiary and quaternary services. This means We have the personnel and facilities to provide advanced medical inquiry and treatments that are not widely accessible in this region.
            <h2> --- </h2><br>
</p>
          
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img height="800" width="220" src="employeeimage/doccc232.png" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div> 
      </div>
    </div>
  </div>  


  
  <div class="page-section bg-light" align = "center">
    <div class="container">
      <h1 class="text-center wow fadeInUp"> Vision Statement</h1>
      <div class="col-lg-6 py-3 wow fadeInUp" >
            <p class="text-grey mb-4" ><br>

A community in which all people achieve their full potential for health and well-being across the lifespan.  We work to be trusted by patients, a valued partner in the community, and creators of positive change. <br>
</p>

      </div>
    </div>
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