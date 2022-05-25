
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <!-- side bar section -->
      @include('admin.sidebar');

      <!-- nav bar section  -->
       @include('admin.navbar');
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div class="container" align = "center" style="padding-top: 90px; padding-left: 20px;  width: 500px;">
        <form action="">
        <div style="padding: 15px;">
        <label for="">Doctor Name</label>
        <input type="text" style=" width: 270px;" name="name" style="color:black;" placeholder="Doctor's full Name">
        </div>

        <div style="padding: 15px;">
        <label for="">Phone Number</label>
        <input type="number" style=" width: 270px;" name="number" style="color:black;" placeholder="Doctor's Number " >
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 110px;">Speciality </label>
        <input type="text" style=" width: 270px;" name="speciality" style="color:black;" placeholder="Doctor's Speciality">
        </div>

        <div style="padding: 15px;">
        <label for="">Doctor Name</label>
        <input type="text" name="name" style="color:black;" placeholder="Doctor's Name">
        </div>

        <div style="padding: 15px;">
        <label for="">Doctor Name</label>
        <input type="text" name="name" style="color:black;" placeholder="Doctor's Name">
        </div>


        </form>



      </div>



      </div>
    <!-- container-scroller -->
    @include('admin.js');
  </body>
</html>