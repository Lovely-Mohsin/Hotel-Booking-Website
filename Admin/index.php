<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <!-- links include -->
    <?php include("include/links.php")  ?>
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class='bg-light'>
    <div class="container bg-white p-4 shadow border-top border-success border-2">
        <h4 class='text-center mb-3 '>Admin <span class='text-success'>Login</span></h4>
        <form method="post">
            <div class="mb-3">
                <label for="adminName" class="form-label">Name</label>
                <input type="text" class="form-control shadow-none border border-success" placeholder='Enter here...' id="adminName" name='admin_name' required>
            </div>

            <div class="">
                <label for="adminPassword" class="form-label">Password</label>
                <input type="password" class="form-control shadow-none border border-success" placeholder='Enter here...' id="adminPassword" name='admin_pass' required>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-success shadow-none w-50" id='login' name='login'>Login <i class="bi bi-box-arrow-right ms-1"></i></button>
            </div>
        </form>

    </div>
</body>

</html>

<?php

include("config.php");

if(isset($_POST['login'])){
   $form_data = filteration($_POST);
 
}

?>