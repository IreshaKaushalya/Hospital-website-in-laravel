<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Pharmacy</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

    @foreach($pharmacy as $pharmacies)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height:300px !important " src="pharmacyimage/{{$pharmacies->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$pharmacies->name}}</p>
              <span class="text-sm text-grey">{{$pharmacies->phone}}</span><br><br>
               <span class="text-sm text-grey">{{$pharmacies->address}}</span>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>