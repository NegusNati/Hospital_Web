
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
        <form action="{{url('edit_patient',$data->id)}}" method="POST" enctype="multipart/form-data">
        
        @csrf

        <div style="padding: 15px;">
        <label for="">Patient Name</label>
        <input type="text" name="name" placeholder="Patient's full Name" value="{{$data->name}}" required="" style="color:black; width: 270px;">
        </div>

        <div style="padding: 15px;">
        <label for="">Phone Number</label>
      <input type="number" name="number" style="color:black; width: 270px;" placeholder="Patient's Number " value="{{$data->number}}" required="" >
        </div>


        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Age </label>
        <input type="number" name="age" style="color:black; width: 270px;" placeholder="Patient's Age" value="{{$data->age}}" required="">
        </div>


        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Status </label>
        <select name="availability" id="" style="color:black; width: 270px;" required="" value="{{$data->status}}">
          <option value="Active" selected> Active </option>
          <option value="Serviced"> Serviced </option>
        </select>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Patient ID </label>
        <input type="number" name="id" style="color:black; width: 270px;" placeholder="Patient's ID" required="" value="{{$data->p_id}}" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Money Due </label>
        <input type="number" name="money" style="color:black; width: 270px;" placeholder="Money Due" value="{{$data->money_due}}" required="">
        </div>

        <div style="padding: 15px;">
        <label for="">Patient History</label>
        <input type="text" name="history" style="color:black; width: 270px;"  placeholder="History " value="{{$data->history}} " required="">
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