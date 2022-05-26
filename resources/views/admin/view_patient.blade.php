
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