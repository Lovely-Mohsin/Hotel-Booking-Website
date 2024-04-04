<!DOCTYPE html>
<html lang="en">

<head>

  <title>About Us</title>



  <!-- navbar include --> <?php include_once("include/links.php"); ?>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <style>
    .abt-header {
      min-height: 300px;
      background-image: url("./Assets/images/About/about-header.jpg");
      background-size: cover;
    }

    html,
    body {
      position: relative;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
     
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
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

  <div class="abt-header d-flex align-items-center justify-content-center">
    <p class="text-white text-center display-1">ABOUT</p>
  </div>

  <h3 class="text-center my-5 display-5 fs-3 m-0">ABOUT <span class="text-success">US</span></h3>
  <div class="h-line"></div>

  <div class="container">
    <div class="row">
      <div class="col-lg-7  mb-3 p-4 order-lg-1 order-2">
        <h3>About our Hotel</h3>
        <p align='justify'>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Saepe nam unde aliquam atque! Aspernatur perferendis temporibus
          at quod suscipit magni atque sunt corporis similique ducimus,
          reprehenderit nostrum possimus nemo ut?
          <br>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          At dolore nulla aliquam quaerat illo? Magni delectus optio
          odit ipsam, laudantium doloribus. Aliquam, nam culpa vero
          nesciunt beatae cum amet, nihil qui placeat sapiente molestiae
          ut accusamus veniam eum, numquam reiciendis corrupti.
          Ipsum deserunt, odio aut provident officia quidem magni 
          magnam and that's it about our hotel to display you so that 
          you can see our aims. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Nam dolore necessitatibus hic temporibus saepe. Cupiditate quas id earum incidunt nesciunt!
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
      </div>
      <div class="col-lg-5 mb-3 p-4 order-lg-2 order-1">
        <img src="./Assets/images/About/owner-image.jpg" class="img-fluid img-thumbnail"  alt="">
      </div>
    </div>
  </div>


<!-- Our Facilities Section Start -->
<div class="container my-2">

  <div class="row">

  <div class="col-lg-3 col-md-6 my-2 p-3 move">
      <div class="card shadow border-0 text-center mx-auto p-3" style="width:12rem;">
        <div class="w-50 mx-auto"> <img src="./Assets/images/About/rooms.png" class=" img-fluid" alt="..."></div>
        <div class="w-100">
        <h6 class="fs-5">100+ Rooms</h6>
        </div>
      </div><!-- card -->
    </div><!-- col -->


    <div class="col-lg-3 col-md-6 my-2 p-3 move">
      <div class="card shadow border-0 text-center mx-auto p-3" style="width:12rem;">
        <div class="w-50 mx-auto"> <img src="./Assets/images/About/customers.png" class=" img-fluid" alt="..."></div>
        <div class="w-100">
        <h6 class="fs-5">200+ Customers</h6>
        </div>
      </div><!-- card -->
    </div><!-- col -->


    <div class="col-lg-3 col-md-6 my-2 p-3 move">
      <div class="card shadow border-0 text-center mx-auto p-3" style="width:12rem;">
        <div class="w-50 mx-auto"> <img src="./Assets/images/About/staff.png"class=" img-fluid" alt="..."></div>
        <div class="w-100">
          <h6 class="fs-5 m-0">100+ Staff</h6>
        </div>
      </div><!-- card -->
    </div><!-- col -->

    <div class="col-lg-3 col-md-6 my-2 p-3 move">
      <div class="card shadow border-0 text-center mx-auto p-3" style="width:12rem;">
        <div class="w-50 mx-auto"> <img src="./Assets/images/About/rate.png" class=" img-fluid" alt="..."></div>
        <div class="w-100">
        <h6 class="fs-5">150+ Reviews</h6>
        </div>
      </div><!-- card -->
    </div><!-- col -->

  </div><!-- row -->


</div><!-- container -->

<!-- Our Facilities Section end -->


<!-- Our Team Section start -->

<h3 class="text-center my-5 display-5 fs-3 m-0">MANAGEMENT <span class="text-success">TEAM</span></h3>
  <div class="h-line"></div>

  <div class="container my-5">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="./Assets/images/About/owner-image.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="./Assets/images/About/owner-image.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="./Assets/images/About/owner-image.jpg" alt="">
      </div>


      <div class="swiper-slide">
        <img src="./Assets/images/About/owner-image.jpg" alt="">
      </div>


      <div class="swiper-slide">
        <img src="./Assets/images/About/owner-image.jpg" alt="">
      </div>

    </div>

  </div>
  </div>


  <!-- Our Team Section end -->

  <!--footer include --> <?php include_once("include/footer.php"); ?>
</body>

</html>



  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween : 50,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true
      },
      breakpoints:{
        1080 :{
          slidesPerView : 3
        },
        768 :{
          slidesPerView : 2
        },
        640 :{
          slidesPerView : 1
        },
        500 :{
          slidesPerView : 1
        }
      }
    });
  </script>