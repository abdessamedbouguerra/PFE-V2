<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location:homePage.php.php');
}
include '../includes/functions.php';
$showAlart = 0;
if (!empty($_POST)) {
    $emailVer=emailverified($_POST['email']);
    if (empty($emailVer)) {
        if (AddUser($_POST)) {
            $email=$_POST['email'];
            $mp=$_POST['mp'];
            $showAlart = 1;
        }
    }else{
        $showAlart = 2;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Quizy</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100" style="background-color: #28282B ;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="signUp.php" method="post">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0"><img src="../assets/img/navbar-logo.svg" alt="..." /></span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account</h5>
                    <div class="form-outline mb-4">
                      <input name="fname" type="text" id="fname" class="form-control form-control-lg" required />
                      <label class="form-label" for="fname">First Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input name="lname" type="text" id="lname" class="form-control form-control-lg" required />
                      <label class="form-label" for="lname">Last Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="email" class="form-control form-control-lg" required />
                      <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input name="mp" type="password" id="mp" class="form-control form-control-lg" required />
                      <label class="form-label" for="mp">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                    </div>


                    <p class="mb-5 pb-lg-2">If you have an account <a href="login.php" style="color: #28282B;">Login here</a></p>

                  </form>

                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center justify-content-center">
                <img src="../assets/img/Login_SignUp/ImgLog.png" alt="login form" class="img-fluid " style="border-radius: 1rem 0 0 1rem;" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
  <?php
if ($showAlart == 1) {
?>
  <script>
    Swal.fire({
      title: 'Successfully',
      text: 'The user has been added successfully.',
      icon: 'success',
      confirmButtonText: 'OK',
      confirmButtonColor: '#28282B',
      timer: 5000
    }).then(() => {
      // After the user clicks "OK", submit the form
      document.getElementById('myForm').submit();
    });
  </script>

  <form id="myForm" action="login.php" method="post">
    <div class="form-outline mb-4">
      <input name="email" type="email" value="<?php echo $email?>" />
      <input name="mp" type="password" value="<?php echo $mp?>" />
    </div>
  </form>
<?php
}
?>
 <?php
if ($showAlart == 2) {
?>
<script>
Swal.fire({
    title: 'This is the email used',
    text: 'Please try again with another email.',
    icon: 'warning',
    confirmButtonText: 'OK',
    confirmButtonColor: '#28282B',
    timer: 5000
  })</script>
<?php
}
?>

</body>

</html>