<!DOCTYPE html>
<html lang="en">

<head>

  <title>Lavish Hotel - Facilities</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- navbar include --> <?php include_once("include/links.php"); ?>

  <style>
    .fac-header {
      min-height: 300px;
      background-image: url("./Assets/images/Facilities-imgs/facilities-header.jpg");
    }
    .move {
      transition: all 0.3s;
    }

    .move:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body class="bg-light">

  <!-- navbar include --> <?php include_once("include/navbar.php"); ?>

  <div class="fac-header d-flex align-items-center justify-content-center">
    <p class="text-white text-center display-1">Facilities</p>

  </div>

  <!-- Our Facilities Section Start -->
  <div class="container my-5">

    <h3 class="text-center my-5 display-5 fs-3 m-0">OUR <span class="text-success">FACILITIES</span></h3>
    <div class="h-line"></div>
    <p class="text-center px-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis possimus non debitis. Aliquam at iusto et suscipit, adipisci earum molestias dolor obcaecati nobis deserunt molestiae tempore maiores vero est similique?</p>

    <div class="row">

      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/wifi.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Fast Internet</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/air-conditioner.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Air Conditioner</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/smart-tv.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Smart TV</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->

    </div><!-- row -->

    <div class="row">

      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/water-heater.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Geyser</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/heater.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Room Heater</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-4 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:22rem;">
          <div class="d-flex justify-content-evenly align-items-baseline">
            <div class="w-25"> <img src="./Assets/images/Facilities-imgs/swimming.png" class="mb-4 img-fluid" alt="..."></div>
            <div class="w-50">
              <h6 class="fs-5">Swimming Pool</h6>
            </div>
          </div>
          <p align='justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ratione itaque libero a id, corrupti magni aliquam quae aliquid.</p>

        </div><!-- card -->
      </div><!-- col -->

    </div><!-- row -->

  </div><!-- container -->

  <!-- Our Facilities Section end -->

  <!--footer include --> <?php include_once("include/footer.php"); ?>

</body>

</html>