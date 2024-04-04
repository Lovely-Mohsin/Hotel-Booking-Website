<!DOCTYPE html>
<html lang="en">

<head>

  <title>Lavish Hotel - Home</title>

  <!-- navbar include --> <?php include_once("include/links.php"); ?>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <style>
        .move {
      transition: all 0.3s;
    }

    .move:hover {
      transform: scale(1.1);
    }  

  </style>

</head>

<body class="bg-light">

  <!-- header include --> <?php include_once("include/navbar.php"); ?>
  <!-- header include --> <?php include_once("include/header.php"); ?>

  <!-- our-rooms include --> <?php include_once("include/our-rooms.php"); ?>
  <!-- our-facilities include --> <?php include_once("include/home-facilities.php"); ?>


  <!-- Testimonials Section Start -->
  <div class="container my-5">

    <h3 class="text-center my-5 display-5 fs-3 ">CUSTOMER'S <span class="text-success"> REVIEWS</span></h3>
    <div class="h-line"></div>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- 1st Slide  -->
        <div class="swiper-slide p-3 shadow">
          <div class="profile d-flex align-items-center mb-2 p-2">
            <img src="./Assets/images/Testimonials-imgs/t1.jpg" class="img-fluid w-25">
            <h6 class="ms-3 ">Muhammad Sultan</h6>
          </div>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Placeat tempora sint culpa debitis. A quasi blanditiis libero eligendi
            facilis error ratione nihil magni delectus in! Officiis quos omnis possimus aperiam.</p>

          <div class="stars">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <!-- 2nd Slide  -->
        <div class="swiper-slide p-3 shadow">
          <div class="profile d-flex align-items-center mb-2 p-2">
            <img src="./Assets/images/Testimonials-imgs/t1.jpg" class="img-fluid w-25">
            <h6 class="ms-3 ">Muhammad Sultan</h6>
          </div>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Placeat tempora sint culpa debitis. A quasi blanditiis libero eligendi
            facilis error ratione nihil magni delectus in! Officiis quos omnis possimus aperiam.</p>

          <div class="stars">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <!-- 3rd Slide  -->
        <div class="swiper-slide p-3 shadow">
          <div class="profile d-flex align-items-center mb-2 p-2">
            <img src="./Assets/images/Testimonials-imgs/t1.jpg" class="img-fluid w-25">
            <h6 class="ms-3 ">Muhammad Sultan</h6>
          </div>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Placeat tempora sint culpa debitis. A quasi blanditiis libero eligendi
            facilis error ratione nihil magni delectus in! Officiis quos omnis possimus aperiam.</p>

          <div class="stars">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>


        <!-- 4th Slide  -->
        <div class="swiper-slide p-3 shadow">
          <div class="profile d-flex align-items-center mb-2 p-2">
            <img src="./Assets/images/Testimonials-imgs/t1.jpg" class="img-fluid w-25">
            <h6 class="ms-3 ">Muhammad Sultan</h6>
          </div>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Placeat tempora sint culpa debitis. A quasi blanditiis libero eligendi
            facilis error ratione nihil magni delectus in! Officiis quos omnis possimus aperiam.</p>

          <div class="stars">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <!-- 5th Slide  -->
        <div class="swiper-slide p-3 shadow">
          <div class="profile d-flex align-items-center mb-2 p-2">
            <img src="./Assets/images/Testimonials-imgs/t1.jpg" class="img-fluid w-25">
            <h6 class="ms-3 ">Muhammad Mohsin</h6>
          </div>
          <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Placeat tempora sint culpa debitis. A quasi blanditiis libero eligendi
            facilis error ratione nihil magni delectus in! Officiis quos omnis possimus aperiam.</p>

          <div class="stars">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
  </div><!-- container -->


  <!-- Testimonials Section end -->

  <!--contact-us include --> <?php include_once("include/contact-us.php"); ?>

  <!--footer include --> <?php include_once("include/footer.php"); ?>

</body>

</html>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>