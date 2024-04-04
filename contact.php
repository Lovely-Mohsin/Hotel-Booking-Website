<!DOCTYPE html>
<html lang="en">

<head>

  <title>About Us</title>



  <!-- navbar include --> <?php include_once("include/links.php"); ?>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .contact-header {
      min-height: 300px;
      background-image: url("./Assets/images/Contact-us/contact-us.jpg");
      background-size: cover;
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

  <div class="contact-header d-flex align-items-center justify-content-center">
    <p class="text-white text-center display-1">CONTACT</p>
  </div>

  <h3 class="text-center my-5 display-5 fs-3 m-0">CONTACT <span class="text-success">US</span></h3>
  <div class="h-line"></div>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 my-2 py-2 px-3 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:20rem;">
          <i class="bi bi-phone text-success fs-1"></i>
          <h5>Mobile No.</h5>
          <span class="text-success fs-5">0305-1608550</span><br>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-3 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:20rem;">

          <i class="bi bi-envelope-at text-success fs-1"></i>
          <h5>Email</h5>
          <span class="text-success fs-5">levish@gmail.com</span><br>

        </div><!-- card -->
      </div><!-- col -->


      <div class="col-lg-4 col-md-6 my-2 py-2 px-3 move">
        <div class="card shadow border-0 text-center mx-auto p-3 border-top border-success border-3" style="min-width:20rem;">

          <i class="bi bi-geo-alt text-success fs-1"></i>
          <h5>Address</h5>
          <span class="text-success fs-5">Mashallah Plaza Opposite Commerce College, Lodhran.</span>
        </div><!-- card -->
      </div><!-- col -->

    </div><!-- row -->


    <div class="map p-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3472.2458048036447!2d71.63444457433225!3d29.509193643734395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b9f1bc79afc67%3A0xabbf84fb0c1fd385!2sTareen%20Institute%20of%20Computer%20Education%20%26%20Resources%20(TICER)!5e0!3m2!1sen!2s!4v1704719835969!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- contact form -->

    <h3 class="text-center mb-5 mt-2 display-5 fs-3 m-0">GET IN <span class="text-success">TOUCH</span></h3>
    <div class="h-line"></div>

    <div class="form-container py-4 px-5 bg-white my-4 shadow">

      <form>
        <div class="row p-2">

          <div class="col-md-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name </label>
              <input type="text" placeholder="Enter here..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div><!--col -->

          <div class="col-md-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" placeholder="Enter here..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div><!--col -->

        </div><!--row-->


        <div class="row">

          <div class="col-md-12">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Subject </label>
              <input type="text" placeholder="Enter here..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div><!--col -->

        </div><!--row-->

        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter here..."></textarea>
              </div>
            </div>
          </div><!--col -->

        </div><!--row-->

        <div class="row">
          <div class="col-md-4"></div>

          <div class="col-md-4">
            <div class="d-grid">
              <button type="submit" class="btn btn-success"> Send <i class="bi bi-arrow-right-square"></i></button>
            </div>
          </div>

          <div class="col-md-4"></div>

        </div>

      </form>
    </div><!--form-container-->


  </div><!--container -->

  <!--footer include --> <?php include_once("include/footer.php"); ?>
</body>

</html>