
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">

        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <!-- side bar section -->
      @include('admin.sidebar')

      <!-- nav bar section  -->
      @include('admin.navbar')
        <!-- partial -->
        
      <!-- the body section  -->
      @include('admin.body')
    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>