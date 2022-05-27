
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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
      @if(session()->has('message'))
      <div class="alert alert-success" >
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
  
        {{session()->get('message')}}

      </div>

      @endif
        <form action="{{url('edit_employee',$data->id)}}" method="POST" enctype="multipart/form-data">
        
        @csrf

        <div style="padding: 15px;">
        <label for="">Employee Name</label>
        <input type="text" name="name" placeholder="Employee's full Name" value="{{$data->name}}" required="" style="color:black; width: 270px;">
        </div>

        <div style="padding: 15px;">
        <label for="">Phone Number</label>
      <input type="number" name="number" style="color:black; width: 270px;" placeholder="Employee's Number " value="{{$data->number}}" required="" >
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 110px;">Speciality </label>
        <input type="text" name="speciality" style="color:black; width: 270px;"placeholder="Employee's Speciality" value="{{$data->speciality}}" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Age </label>
        <input type="number" name="age" style="color:black; width: 270px;" placeholder="Employee's Age" value="{{$data->age}}" required="">
        </div>


        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Employee Availability </label>
        <select name="availability" id="" style="color:black; width: 270px;" required="" value="{{$data->availability}}">
          <option value="available" selected> Available </option>
          <option value="onleave"> On Leave </option>
        </select>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Role </label>
        <select name="role" id=""style="color:black; width: 270px;" required="" value="{{$data->role}}" >
          <option value="doctor" selected>Doctor</option>
          <option value="nurse">Nurse</option>
          <option value="other">Other</option>
          <option value="patient">Patient</option>
        </select>
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Employee ID </label>
        <input type="number" name="id" style="color:black; width: 270px;" placeholder="Doctor's ID" required="" value="{{$data->emp_id}}">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Employee Salary </label>
        <input type="number" name="salary" style="color:black; width: 270px;" placeholder="Employee's Salary" value="{{$data->salary}}" required="">
        </div>


        <div style="padding: 15px;">
        <label for="" > The Old Image </label>
        <img height="150px" width="150px" src="employeeimage/{{$data->image}}" alt="Employee Image">
        </div>

        <div style="padding: 15px;">
        <label for="" >New Image </label>
        <input type="file" name="file"  style="width: 270px;">
        </div>

        <div style="padding: 15px;">
          <input type="submit" class="btn btn-primary">
        </div>


        </form>





      </div>

    <!-- container-scroller -->
    @include('admin.js');
  </body>
</html>