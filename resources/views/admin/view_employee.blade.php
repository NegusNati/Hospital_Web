
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
      @include('admin.sidebar');

      <!-- nav bar section  -->
      @include('admin.navbar');
        <!-- partial -->
      <div  align = center style="overflow-x:auto; padding-top:100px;">
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
                            <th aria-placeholder="Delete the Record"> Delete </th>
                            <th aria-placeholder="Upload the Record"> Update </th>
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
                            <td><a onclick="return confirm('Are you sure you want to delete this record? ')" class="btn btn-danger" href="{{url('delete_record',$instance->id)}}">Delete</a></td>
                            <td><a class="btn btn-primary" href="{{url('update_record',$instance->id)}}">Update</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
      </div>

    <!-- container-scroller -->
    @include('admin.js');
  </body>
</html>