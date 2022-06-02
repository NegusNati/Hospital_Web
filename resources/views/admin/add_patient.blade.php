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


        <form action="{{url('upload_patient')}}" method="POST" enctype="multipart/form-data" onsubmit="return valiid(); ">
        
        @csrf

        <div style="padding: 15px;">
        <label for="">Patient Name</label>
        <input type="text" name="name" id="name" style="color:black; width: 270px;"  placeholder="Patient's full Name" required="">
        </div>

        <div style="padding: 15px;">
        <label for="">Phone Number</label>
      <input type="number" name="number" id="number" style="color:black; width: 270px;" placeholder="Patient's Number " required="" >
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Age </label>
        <input type="number" name="age" id="age" style="color:black; width: 270px;" placeholder="Patient's Age" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Sex </label>
        <select name="sex" id="sex" style="color:black; width: 270px;" required="">
          <option value="male" selected>Male</option>
          <option value="female">Female</option>
        </select>
        

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Status </label>
        <select name="stat" id="stat" style="color:black; width: 270px;" required="">
          <option value="Active" selected> Active </option>
          <option value="Serviced"> Serviced </option>
        </select>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Patient ID </label>
        <input type="number" name="id" id="id" style="color:black; width: 270px;" placeholder="Patient's ID" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Money Due </label>
        <input type="number" name="money" id="money" style="color:black; width: 270px;" placeholder="money due" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Admission Time </label>
        <input type="time" autocomplete="" name="time" style="color:black; width: 270px;" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Admission Date </label>
        <input type="date" name="date" style="color:black; width: 270px;" required="">
        </div>

        <div style="padding: 15px;">
        <label for="">Patient History</label>
        <input type="text" name="history" style="color:black; width: 270px;"  placeholder="History " required="">
        </div>

        <div style="padding: 15px;">
          <input type="submit" class="btn btn-success">
        </div>


        </form>

      </div>
      </div>
      <script>
function valiid(){

    let Name = document.getElementById("name");
    let phoneNumber =document.getElementById("number");
    // let speciality = document.getElementById("speciality");
    let age = document.getElementById("age");
    let sex = document.getElementById("sex").value;
    let Availability = document.getElementById("stat").value;
    // let role = document.getElementById("role").value;
    // let salary = document.getElementById("money");
    let date = document.getElementById("date").value;
    let userdate = new Date(date); 
    let today = new Date();

    
 if(!(/^[A-Za-z\s]+$/.test(Name.value))) {
    alert("You need to write Name with only characters from A-Z");
        // return;
        return false;
    }else if(!(/^[A-Za-z\s]+$/.test(speciality.value))){ 
      alert("You need to write Speciality with only characters from A-Z");
        return false;
       } else if( age.value < 1 || age.value > 120 ){
        alert("You need to write Age with only age between 1 - 120 ");
        return false;
        // return;
    }else if( userdate > today ){
        alert("You have inserted an incorrect Date ");
        return false;
        // return;
    }  else if((Availability.length <= 0)){
      alert("You need to select the Status of the patient ");
        return false;
        // return;
    }else if((sex.length <= 0)){
      alert("You need to select the Sex ");
        return false;
        // return;
    }else if (phoneNumber.value.length != 10) {
      alert("Phone number is not 10 digits long[0911--] or you inserted a character ");
        return false;
        // return;
        
    }else{
         return true;
    }
//"^[0-9]*$", cno))||(cno.length()!=10)
//"^[a-zA-Z0-9_!#$%&'*+/=?`{|}~^.-]+@[a-zA-Z0-9.-]+$"
}
</script>
    <!-- container-scroller -->
    @include('admin.js')
  </body>
</html>