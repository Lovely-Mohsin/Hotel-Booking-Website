  <!-- navbar start here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white  border-bottom sticky-top">
    <div class="container-fluid px-5">
    <a href="index.php" class="navbar-brand h6 fs-3">Levish <span class="text-success"> Hotel</span></a>

      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
        </ul>


        <button class="btn btn-outline-success shadow-none" type="submit" data-bs-toggle="modal"
          data-bs-target="#exampleModal">Login <i class="bi bi-box-arrow-in-right"></i></button>

        <button class="btn btn-outline-success mx-2 shadow-none" type="submit" data-bs-toggle="modal"
          data-bs-target="#exampleModal2">Register <i class="bi bi-person-fill-add"></i></button>

          </div>
    </div>
  </nav>
        <!--------------- Login Modal Start ---------------------->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1500 !important;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">

                <form method="post" action="queries.php" autocomplete="off">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-sm " name="log_email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" name="log_password">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <!--------------- Login Modal End ---------------------->

        <!--------------- Register Modal Start ---------------------->

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form method="post" action="queries.php">
                  <div class="col-md">
                    <label class="form-label">Full Name</label>
                    <input type="text" placeholder="Enter here..." class="form-control" name="name">
                  </div>
                  <div class="col-md">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter here..." autocomplete="off"
                      name="email">
                  </div>

                  <div class="col-md">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter here..." name="password">
                  </div>

                  <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Enter here..." name="address">
                  </div>

                  <div class="modal-footer">
                    <button type="submit" name="reg" class="btn btn-primary ">Submit</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

        <!--------------- Register Modal End ---------------------->


    