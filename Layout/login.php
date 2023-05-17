<?php
session_start();
if (isset($_SESSION['email'])) {
  header('location:profile.php');
}
include '../includes/functions.php';
$user = true;

if (!empty($_POST)) {
  $user = connectUser($_POST);
  if (!empty($user)) {
    session_start();
    $_SESSION['fname'] = $user['first_name'];
    $_SESSION['lname'] = $user['last_name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['mp'] = $user['mp'];
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['role_admin'] = $user['role_admin'];
    header('location:profile.php');
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
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="login.php" method="post">

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input name="mp" type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>


                    <p class="mb-5 pb-lg-2">Don't have an account? <a href="signUp.php" style="color: #28282B;">Register here</a></p>

                  </form>

                </div>
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
  if (!$user) {
  ?>
    <script>
      Swal.fire({
        title: 'Invalid',
        text: 'Invalid email or password.',
        icon: 'warning',
        confirmButtonText: 'OK',
        confirmButtonColor: '#28282B',
        timer: 5000
      })
    </script>

  <?php
  }
  ?>
  <?php
  if (isset($_GET['role']) && $_GET['role'] == 'blocked') {
  ?>
    <script>
      Swal.fire({
        title: 'Invalid',
        text: 'your accunet is blocked.',
        icon: 'error',
        confirmButtonText: 'OK',
        confirmButtonColor: '#28282B',
        timer: 5000
      })
    </script>

  <?php
  }
  ?>
</body>

</html>