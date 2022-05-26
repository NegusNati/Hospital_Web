<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      
      @foreach($doctor as $doc)

      @if($doc->role == 'doctor')
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300 px" src="employeeimage/{{$doc->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doc->name}}</p>
              <span class="text-sm text-grey">{{$doc->speciality}}</span>
            </div>
          </div>
        </div>
        @endif
       @endforeach
      </div>
    </div>
  </div>