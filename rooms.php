<!DOCTYPE html>
<html lang="en">

<head>

  <title>Our Rooms</title>

  <!-- navbar include --> <?php include_once("include/links.php"); ?>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body class="bg-light">

  <!-- navbar include --> <?php include_once("include/navbar.php"); ?>

  <h3 class="text-center my-5 display-5 fs-3 m-0">OUR <span class="text-success">ROOMS</span></h3>
  <div class="h-line"></div>

  <div class="container mt-5">
    <div class="row">


      <div class="col-lg-3 mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid d-flex flex-lg-column align-items-stretch">
            <h4>FILTERS</h4>

            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse  mt-2" id="filter">

              <div class="d-flex flex-column align-items-stretch">
                <!-- Availability -->
                <div class="card p-3 mb-3">
                  <h6 class="mb-3">Check Availability</h6>

                  <label for="check-in" class="form-label">Check-in</label>
                  <input type="date" class="form-control" id="check-in">

                  <label for="check-out" class="form-label">Check-out</label>
                  <input type="date" class="form-control" id="check-out">
                </div>

                <!-- Facilities -->
                <div class="card p-3 mb-3">
                  <h6 class="mb-3">Facilities</h6>
                  <div class="mb-2">
                    <input type="checkbox" class="form-check-input me-2" id="f1">
                    <label for="f1" class="form-label">Facility One</label>
                  </div>
                  <div class="mb-2">

                    <input type="checkbox" class="form-check-input me-2" id="f2">
                    <label for="f2" class="form-label">Facility Two</label>
                  </div>
                  <div class="mb-2">

                    <input type="checkbox" class="form-check-input me-2" id="f3">
                    <label for="f3" class="form-label">Facility Three</label>
                  </div>
                </div>


                <!-- Guests -->
                <div class="card p-3 mb-3">
                  <h6 class="mb-3">Guests</h6>

                  <div class="d-lg-flex">
                    <div>
                      <label for="adults" class="form-label">Adults</label>
                      <input type="number" class="form-control me-2" id="adults">
                    </div>
                    <div>
                      <label for="children" class="form-label">Children</label>
                      <input type="number" class="form-control ms-1" id="children">
                    </div>
                  </div>
                </div>
              </div>

            </div><!--nav-collapse-->
          </div><!--container-fluid-->
        </nav>
      </div> <!--col-->



      <!-- Rooms Cards Start -->
      <div class="col-lg-9">

        <!-- Room-1 -->
        <div class="card mb-4 border-0 shadow">

          <div class="row g-0">
            <div class="col-md-5">
              <img src="./Assets/images/Rooms-imgs/room-1.jpg" class="img-fluid h-100" alt="...">
            </div>

            <div class="col-md-7">
              <div class="card-body">
                
                <div class="d-flex justify-content-between">
                  <h5 >Simple Room</h5>
                  <h6 class="badge rounded-pill bg-success">Rs.1200 per Day</h6>
                </div>

                <!-- Features & Guests -->
                <div class="d-flex justify-content-between">
                  <div class="mt-1">
                    <h6 class="text-success">Features</h6>

                    <div class="badge rounded-pill bg-light text-dark">Bedroom</div>
                    <div class="badge rounded-pill bg-light text-dark">Kitchen</div>
                    <div class="badge rounded-pill bg-light text-dark">Balcony </div>
                  </div>

                  <div class="mt-1">
                    <h6 class="text-success">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark">7 Children</div>
                  </div>
                </div>

                <!-- Facilites just -->
                <div class="mt-2">
                  <h6 class="text-success">Facilities</h6>
                  <div class="badge rounded-pill bg-light text-dark">WiFi</div>
                  <div class="badge rounded-pill bg-light text-dark">Air Conditioner</div>
                  <div class="badge rounded-pill bg-light text-dark">Room Heater</div>
                  <div class="badge rounded-pill bg-light text-dark">Geyser</div>
                </div>

                <!-- Ratings & Links -->
                <div class="d-flex justify-content-between">

                  <div class="mt-2">
                    <h6 class="text-success">Ratings</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>

                  <div class="text-center mt-2">
                    <a href="#" class="btn btn-success btn-sm m-2">Book Now</a>
                    <a href="#" class="btn btn-outline-dark  btn-sm m-2">More Details</a>
                  </div>

                </div>

              </div>
            </div>


          </div><!--row -->
        </div><!--card -->




        <!-- Room-2 -->
        <div class="card mb-4 border-0 shadow">

          <div class="row g-0">
            <div class="col-md-5">
              <img src="./Assets/images/Rooms-imgs/room-2.jpg" class="img-fluid h-100" alt="...">
            </div>

            <div class="col-md-7">
              <div class="card-body">
                
                <div class="d-flex justify-content-between">
                  <h5 >Simple Room</h5>
                  <h6 class="badge rounded-pill bg-success">Rs.1200 per Day</h6>
                </div>

                <!-- Features & Guests -->
                <div class="d-flex justify-content-between">
                  <div class="mt-1">
                    <h6 class="text-success">Features</h6>

                    <div class="badge rounded-pill bg-light text-dark">Bedroom</div>
                    <div class="badge rounded-pill bg-light text-dark">Kitchen</div>
                    <div class="badge rounded-pill bg-light text-dark">Balcony </div>
                  </div>

                  <div class="mt-1">
                    <h6 class="text-success">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark">7 Children</div>
                  </div>
                </div>

                <!-- Facilites just -->
                <div class="mt-2">
                  <h6 class="text-success">Facilities</h6>
                  <div class="badge rounded-pill bg-light text-dark">WiFi</div>
                  <div class="badge rounded-pill bg-light text-dark">Air Conditioner</div>
                  <div class="badge rounded-pill bg-light text-dark">Room Heater</div>
                  <div class="badge rounded-pill bg-light text-dark">Geyser</div>
                </div>

                <!-- Ratings & Links -->
                <div class="d-flex justify-content-between">

                  <div class="mt-2">
                    <h6 class="text-success">Ratings</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>

                  <div class="text-center mt-2">
                    <a href="#" class="btn btn-success btn-sm m-2">Book Now</a>
                    <a href="#" class="btn btn-outline-dark  btn-sm m-2">More Details</a>
                  </div>

                </div>

              </div>
            </div>


          </div><!--row -->
        </div><!--card -->




        <!-- Room-2 -->
        <div class="card mb-4 border-0 shadow">

          <div class="row g-0">
            <div class="col-md-5">
              <img src="./Assets/images/Rooms-imgs/room-3.jpg" class="img-fluid h-100" alt="...">
            </div>

            <div class="col-md-7">
              <div class="card-body">
                
                <div class="d-flex justify-content-between">
                  <h5 >Simple Room</h5>
                  <h6 class="badge rounded-pill bg-success">Rs.1200 per Day</h6>
                </div>

                <!-- Features & Guests -->
                <div class="d-flex justify-content-between">
                  <div class="mt-1">
                    <h6 class="text-success">Features</h6>

                    <div class="badge rounded-pill bg-light text-dark">Bedroom</div>
                    <div class="badge rounded-pill bg-light text-dark">Kitchen</div>
                    <div class="badge rounded-pill bg-light text-dark">Balcony </div>
                  </div>

                  <div class="mt-1">
                    <h6 class="text-success">Guests</h6>
                    <div class="badge rounded-pill bg-light text-dark">5 Adults</div>
                    <div class="badge rounded-pill bg-light text-dark">7 Children</div>
                  </div>
                </div>

                <!-- Facilites just -->
                <div class="mt-2">
                  <h6 class="text-success">Facilities</h6>
                  <div class="badge rounded-pill bg-light text-dark">WiFi</div>
                  <div class="badge rounded-pill bg-light text-dark">Air Conditioner</div>
                  <div class="badge rounded-pill bg-light text-dark">Room Heater</div>
                  <div class="badge rounded-pill bg-light text-dark">Geyser</div>
                </div>

                <!-- Ratings & Links -->
                <div class="d-flex justify-content-between">

                  <div class="mt-2">
                    <h6 class="text-success">Ratings</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>

                  <div class="text-center mt-2">
                    <a href="#" class="btn btn-success btn-sm m-2">Book Now</a>
                    <a href="#" class="btn btn-outline-dark  btn-sm m-2">More Details</a>
                  </div>

                </div>

              </div>
            </div>


          </div><!--row -->
        </div><!--card -->


      </div><!--Col-9 -->




      
      <!-- Rooms Cards end -->


    </div>
  </div>
  </div>



  <!--footer include --> <?php include_once("include/footer.php"); ?>
</body>

</html>