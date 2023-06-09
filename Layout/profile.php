<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
include '../includes/profileFunction.php';
$user = getProfileInfo($_SESSION['id_user']);
editProfile();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <title>Quizy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include '../includes/NavbarOfContent.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php
            $activeMarke = 'profile';
            include '../includes/sidebar.php';
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Profile</h1>
                    <a class="btn btn-danger" href="../includes/profileFunction.php?Delete_User=<?php echo $user['id_user'] ?>" onclick="confirmDelete(event)"> <span data-feather="trash-2"></span> Delete</a>
                </div>
                <!-- Profile content -->
                <div class="col-12 p-5">
                    <h1 class="text-center">My Information</h1>
                    <form action="profile.php" method="post">
                        <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                        <input type="hidden" name="mpDB" value="<?php echo $user['mp']; ?>">
                        <div class="mb-3">
                            <label for="fname" class="form-label font-weight-bold">First Name</label>
                            <input name="fname" value="<?php echo $user['first_name']; ?>" type="text" class="form-control" id="fname">
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label font-weight-bold">Last Name</label>
                            <input name="lname" value="<?php echo $user['last_name']; ?>" type="text" class="form-control" id="lname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label font-weight-bold">Email address</label>
                            <input name="email" value="<?php echo $user['email']; ?>" type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="CurrentPassword" class="form-label font-weight-bold">Current Password</label>
                            <input name="CurrentPassword" type="password" class="form-control" id="CurrentPassword">
                        </div>
                        <div class="mb-3">
                            <label for="NewPassword" class="form-label font-weight-bold">New Password</label>
                            <input name="NewPassword" type="password" class="form-control" id="NewPassword">
                        </div>
                        <button type="submit" class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; ">Save</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <!-- alerts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent the default link behavior
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#28282B',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.isConfirmed) {
                        window.location.href = event.target.href;
                }
            })
        }
    </script>
</body>

</html>