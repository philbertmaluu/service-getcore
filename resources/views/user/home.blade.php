<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Phdm Company Limited</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>phdm</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#about">About</a></li>
                     
                     

                      @if(Route::has('login'))
                      @auth

                      <li class="scroll-to-section"><a href="#subscription">Subscriptions</a></li>
                     
                      <x-app-layout>
                      </x-app-layout>  
                      @else
                      <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li>
                      <li class="scroll-to-section"><a href="{{route('register')}}">Register </a></li>

                      @endauth
                      @endif
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              @if(session()->has('message'))
              <div class="alert alert-sucess">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
              </div>
              @endif
              <div class="header-text">
                <span class="category">Our Services</span>
                <h2>With Service experts, Everything Is Easier</h2>
                <p>phdm Company ensure a quality and satisfactory service you need with hot discount for our prominent customers</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#about"><i class="fa fa-play"></i> What's phdm?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result out of your effort</h2>
                <p>You are allowed to use this template for any educational or commercial purpose. You are not allowed to re-distribute the template ZIP file on any other website.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Online Learning</span>
                <h2>Online Learning helps you save the time</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious incididunt ut labore et dolore magna aliqua suspendisse.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

 @include('user.services')

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Course Hours</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Employed Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="section testimonials" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">

            <div class="item">
              <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">UI Expert</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>

            <div class="item">
              <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

 
@if(Route::has('login'))
@auth
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to request a service anytime</h2>
            <p>Thank you for choosing Phdm. We provide you best services at absolutely 100% efficiency. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="{{url('subscribe')}}" method="POST">
              @csrf
              <div class="row">
              <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="name" id="name"  placeholder="Your Name..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <select name="service_name" id="service_name" required="">
                      <option >Select Service</option>
                    @foreach($service as $services)
                    <option value="{{$services->name}}">{{$services->name}}</option>
                    @endforeach
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="date" name="date" id="date" pattern="[^ @]*@[^ @]*" placeholder="Enter Service Start Date.." required="">
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type="time" name="time" id="time"  placeholder="Enter Service Start Time.." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                  <select name="duration" id="duration" required="">
                      <option >Select Duration</option>
                   
                    <option value="Once">Once</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
              
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Subscribe Now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endauth
  @endif

  @if(Route::has('login'))
@auth
  <div class="contact-us section" id="subscription">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            
            <table  style="border-radius: 15rem;"  >
              <tr style="border: 0.01rem solid #7a6ad8; background-color: #7a6ad8;">
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Customer </th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Service </th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Start</th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Time</th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Duration</th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Status</th>
                <th style="padding-left: 19px; padding-right: 19px; border: 0.01rem solid #7a6ad8;">Action</th>
              </tr>

              
              @foreach($subscriptions as $subscriptions)
              <tr style="border: 0.01rem solid #7a6ad8; ">
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->name}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->service_name}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->date}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->time}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->duration}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;">{{ $subscriptions->status}}</td>
               <td style="padding-left: 19px; padding-right: 19px;border: 0.01rem solid #7a6ad8;"><a class="btn btn-danger" href="{{url('cancel_sub',$subscriptions->id)}}">Cancel</a></td>
              </tr>
              @endforeach

            </table>
          </div>
        </div>
        <div class="col-lg-6">
          
        </div>
      </div>
    </div>
  </div>
  @endauth
  @endif


  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 Phdm Company Limited. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="" rel="nofollow" target="_blank">Philbert Malulu</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>