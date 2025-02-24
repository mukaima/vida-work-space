<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/css/project.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top opacity-75">
            <div class="container-fluid">
              <a class="navbar-brand me-auto" href="#">
                <img class="logo-img" src="{{asset('assets/images/Logos/logo.png')}}"/>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#container">MENUE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#courses">COURSES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#rooms">ROOMS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">FeedBack</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="bg-img1 vh-100 d-flex flex-column justify-content-center align-content-center align-items-center"></div>
        <section class="container  p1 vh-100" id="container" >
            <div class="row">
                <div class="col-lg-6 image">
                    <img src="{{asset('assets/images/Menue/menue1.jpg')}}"/>
                </div>
                <div class="col-lg-6 image">
                    <img src="{{asset('assets/images/Menue/menue2.jpg')}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 image">
                    <img src="{{asset('assets/images/Menue/menue3.jpg')}}"/>
                </div>
                <div class="col-lg-6 image">
                    <img src="{{asset('assets/images/Menue/menue4.jpg')}}"/>
                </div>
            </div>
        </section>
        <section class="courses-1 vh-100 pb-5 bg-light" id="courses">
            <div class="container pb-5 ">
              <h1 class="text-center">COURSES</h1>
              <p class="text-center PP">Book Now Online</p>
            </div>
            <div class="container">
              <div class="row pb-3">
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course1.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">CODING</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course2.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">MEDIA</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course3.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">BUISNESS</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row pb-3">
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course4.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">ENGLISH</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course5.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">SOFT SKILLS</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-3">
                  <div class="card" style="width: 25rem;">
                    <img src="{{asset('assets/images/Courses/course6.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="last d-flex justify-content-between">
                        <div class="desc">
                          <h5 class="card-title">GRAPHICS</h5>
                        </div>
                        <a href="{{ route('coursesReservation.show') }}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section class="rooms vh-100 pb-5 bg-light" id="rooms">
          <div class="container pb-5 ">
            <h1 class="text-center">ROOMS</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-3">
                <div class="card reservaition1">
                  <img src="{{asset('assets/images/Rooms/meeting-room.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <div class="last d-flex justify-content-between">
                    <div class="desc">
                      <h5 class="card-title">MEETING ROOMS</h5>
                    </div>
                    <a href="{{route('RoomReservation.show')}}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                  </div>
                  </div>
                </div>
              </div>  
              <div class="col-lg-6 mb-3">
                <div class="card  reservaition2">
                  <img src="{{asset('assets/images/Rooms/vip-room.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <div class="last d-flex justify-content-between">
                    <div class="desc">
                      <h5 class="card-title">VIP ROOM</h5>
                    </div>
                    <a href="{{route('RoomReservation.show')}}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-3">
                <div class="card reservaition3">
                  <img src="{{asset('assets/images/Courses/courses-room.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <div class="last d-flex justify-content-between">
                    <div class="desc">
                      <h5 class="card-title">COURSES ROOM</h5>
                    </div>
                    <a href="{{route('RoomReservation.show')}}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                  </div>
                  </div>
                </div>
              </div>  
              <div class="col-lg-6 mb-3">
                <div class="card  reservaition4">
                  <img src="{{asset('assets/images/Rooms/study-area.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                  <div class="last d-flex justify-content-between">
                    <div class="desc">
                      <h5 class="card-title">STUDY AREA</h5>
                    </div>
                    <a href="{{route('RoomReservation.show')}}" class="btn btn-primary any"><i class="fa-solid fa-plus"></i></a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="final-page p-5">
          <div class="finalpage-layer">
            <div class="containerr p-5 bg-light">
              <div class="row">
                <div class="col-lg-6">
          <h2 class="text-dark pb-5"> Send Message Us</h5>
            <form action="{{route('messages.store')}}" method="post" id="contact">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Name" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required >
                </div>
                <br>
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Send Message</button>
              </form>
           
        
              </div>
              <div class="col-lg-6">
                <h2 class="fw-bold"> Vida Workstation </h2>
                <p class="pt-5">It's easy to live the privacy concept
                  It means No one except you
                  Your studying, your work, and the wifi
                  You can choose the location of innovat:
                  Through it, you can come up with new things, and your concentration will be very high, without any disturbance or distraction that will separate you.
                  Or you can choose the location of create:
                  You can live the calm you need, unleash all your talents, and create a new type of thinking for yourself
                  And also in the place of Grow:
                  Without sound or anything to distract you, you can expand your thinking, talent, and ability to study
                  There is nothing that will stop you </p>
                  <h6 class="fw-bold"> Vida - The new way to work. </h6>
               <p> <i class="fa-solid fa-location-dot"></i> https://vidaworkstation.com/# </p>
               <p> <i class="fa-solid fa-mobile-screen-button"></i>  01507097009 </p> 
                <div class="icons">
                  <span class="fa-stack fa-2x" style="--fa-inverse: #141414;">
                    <i class="fa-solid fa-circle-half fa-stack-2x"></i>
                    <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="fa-stack fa-2x" style="--fa-inverse: #0b63f1;">
                    <i class="fa-solid fa-circle-half fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="fa-stack fa-2x" style="--fa-inverse: #f10bcb;">
                    <i class="fa-solid fa-circle-half fa-stack-2x"></i>
                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="fa-stack fa-2x" style="--fa-inverse: #020202;">
                    <i class="fa-solid fa-circle-half fa-stack-2x"></i>
                    <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </div>
              </div>
              </div>
            </div>
          </div>
            </div>
        <footer class="sec">
            <div class="footer-1">
              <p>COBYRIGHTF FOR <span class="h4 text-primary">VIDAWORKSTATION</span> All RIGHTS RESERVED</p>
            </div>
        </footer>
    </body>
</html>