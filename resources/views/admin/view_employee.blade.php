
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
      <div align = center style="padding-top:100px;">
      <table class="table" style=" color: whitesmoke; padding-right: 10px ; margin-right: 5px;">
                        <thead>
                          <tr>
                            <th>  Name </th>
                            <th> Phone Number </th>
                            <th> Speciality </th>
                            <th> Age </th>
                            <th> Sex </th>
                            <th> Availability </th>
                            <th> Role </th>
                            <th> Employee ID </th>
                            <th> Salary </th>
                            <th> Hier Date </th>
                            <th> Image </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $instance)
                          <tr>
                            <td>{{$instance->name}} </td>
                            <td>{{$instance->number}} </td>
                            <td>{{$instance->speciality}} </td>
                            <td>{{$instance->age}} </td>
                            <td>{{$instance->sex}} </td>
                            <td>{{$instance->availability}} </td>
                            <td>{{$instance->role}} </td>
                            <td>{{$instance->emp_id}} </td>
                            <td>{{$instance->salary}} </td>
                            <td>{{$instance->date}} </td>
                            <td><img height="150" width="150" src="employeeimage/{{$instance->image}}" alt="Image" > </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
      </div>

    <!-- container-scroller -->
    @include('admin.js');
  </body>
</html>