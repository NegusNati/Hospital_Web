
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
        <form action="{{url('upload_nurse')}}" method="POST" enctype="multipart/form-data" onsubmit="return valiid(); ">
        <div style="padding: 15px;">
        <label for="">Nurse Name</label>
        <input type="text" name="name" id="name" style="color:black; width: 270px;" placeholder="Nurse's full Name" required="">
        </div>

        <div style="padding: 15px;">
        <label for="">Phone Number</label>
        <input type="number" id="number" name="number" style="color:black; width: 270px;" placeholder="Nurse's Number " required="" >
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Age </label>
        <input type="number" name="age" id="age" style="color:black; width: 270px;" placeholder="Nurse's Age" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Sex </label>
        <select name="sex" id="sex" style="color:black; width: 270px;" required="">
          <option value="male">Male</option>
          <option value="female" selected>Female</option>
        </select>
        

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Nurse Availability</label>
        <select name="availability" id="availability" style="color:black; width: 270px;" required="">
          <option value="available" selected> Available </option>
          <option value="onleave"> On Leave </option>
        </select>
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;"> Role </label>
        <select name="role" id="role"style="color:black; width: 270px;" required="" >
          <option value="doctor" >Doctor</option>
          <option value="nurse" selected>Nurse</option>
          <option value="other">Other</option>
          <option value="patient">Patient</option>
        </select>
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Nurse ID </label>
        <input type="number" name="id" id="id" style="color:black; width: 270px;" placeholder="Nurse's ID" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Nurse Salary </label>
        <input type="number" name="salary" id="salary" style="color:black; width: 270px;" placeholder="Nurse's Salary" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" style=" width: 100px;">Hire Date </label>
        <input type="date" name="date" id="date" style="color:black; width: 270px;" required="">
        </div>

        <div style="padding: 15px;">
        <label for="" >Nurse Image </label>
        <input type="file" name="file"  style="width: 270px;" required="" >
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
    let Availability = document.getElementById("availability").value;
    let role = document.getElementById("role").value;
    let salary = document.getElementById("salary");

    
 if(!(/^[A-Za-z\s]+$/.test(Name.value))) {
    alert("You need to write Name with only characters from A-Z");
        // return;
        return false;
    }else if( age.value < 1 || age.value > 120 ){
        alert("You need to write Age with only age between 1 - 120 ");
        return false;
        // return;
    } else if((Availability.length <= 0)){
      alert("You need to select the Availability ");
        return false;
        // return;
    }else if((sex.length <= 0)){
      alert("You need to select the Sex ");
        return false;
        // return;
    }else if((role.length <= 0)){
      alert("You need to select the Role ");
        return false;
        // return;
    }else if(salary.value.length < 3 || salary.value.length > 7){
      alert("Insert the correct Salary ");
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