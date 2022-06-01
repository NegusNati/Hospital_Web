
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
                            <th> Age </th>
                            <th> Sex </th>
                            <th> Status </th>
                            <th> Patient ID </th>
                            <th> Money Due </th>
                            <th> History </th>
                            <th> Admission Date </th>
                            <th> Admission Time </th>
                            <th aria-placeholder="Delete the Record"> Delete </th>
                            <th aria-placeholder="Upload the Record"> Update </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $instance)
                          <tr>
                            <td>{{$instance->name}} </td>
                            <td>{{$instance->number}} </td>
                            <td>{{$instance->age}} </td>
                            <td>{{$instance->sex}} </td>
                            <td>{{$instance->status}} </td>
                            <td>{{$instance->p_id}} </td>
                            <td>{{$instance->money_due}} </td>
                            <td>{{$instance->history}} </td>
                            <td>{{$instance->date}} </td>
                            <td>{{$instance->time}} </td>
                            <td><a onclick="return confirm('Are you sure you want to delete this record? ')" class="btn btn-danger" href="{{url('delete_patient_record',$instance->id)}}">Delete</a></td>
                            <td><a class="btn btn-primary" href="{{url('update_patient_record',$instance->id)}}">Update</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
      </div>

    <!-- container-scroller -->
    @include('admin.js');
  </body>
</html>