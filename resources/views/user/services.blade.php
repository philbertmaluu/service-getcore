<div class="services section" id="services">
    <div class="container">
      <div class="row">
        
         @foreach($service as $services)
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>{{$services->name}}</h4>
              <p>{{$services->description}}</p>
              <div class="main-button">
              @if(Route::has('login'))
              @auth
                <a href="#contact">Subscribe</a>
              @else
              <a href="#services">Login To Subscribe</a>
              @endauth
              @endif
              </div> 
            </div>
          </div>
        </div>
       @endforeach

      </div>
    </div>
  </div>