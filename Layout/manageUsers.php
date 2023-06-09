<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if ($_SESSION['role_admin'] != 1) {
    header('location:homePage.php');
}
include '../includes/manageUsersFunctions.php';
AddUserWithadmin($_POST);
$Users = getAllUsers();
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
            $activeMarke = 'manageusers';
            include '../includes/sidebar.php';
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Users</h1>
                    <!-- add user -->
                    <div>

                        <a class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B; " data-toggle="modal" data-target="#add_User"><span class="text-white" data-feather="user-plus"></span>Add an User</a>
                    </div>
                </div>
                <!-- alerts -->
                <div>
                    <!-- alert delete -->
                    <?php
                    if (isset($_GET['delete']) && $_GET['delete'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    User deleting successfuly
                </div>';
                    }
                    ?>
                    <!-- alert add -->
                    <?php
                    if (isset($_GET['add_User']) && $_GET['add_User'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    User add successfuly
                </div>';
                    }
                    ?>
                </div>
                <!-- list user -->
                <div>
                    <table class="table table-borderless">
                        <thead class="table-dark ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($Users as $User) {
                                $i++; ?>

                                <tr>
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $User['first_name'] ?></td>
                                    <td><?php echo $User['last_name'] ?></td>
                                    <td><?php echo $User['email'] ?></td>
                                    <td>
                                        <?php if ($User['role_admin'] == 0) { ?>
                                            <a class="btn btn-danger" href="../includes/manageUsersFunctions.php?BlockUser=<?php echo $User['id_user'] ?>"><span class="text-white" data-feather="user-minus"></a>
                                        <?php } else { ?>
                                            <a class="btn btn-success" href="../includes/manageUsersFunctions.php?UNBlockUser=<?php echo $User['id_user'] ?>"><span class="text-white" data-feather="user-check"></a>
                                        <?php }
                                        ?>

                                        <a class="btn btn-danger" data-toggle="modal" data-target="#remove_User<?php echo $User['id_user'] ?>"><span class="text-white" data-feather="user-x"></a>
                                    </td>
                                </tr>

                            <?php }
                            ?>
                        </tbody>
                    </table>
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
    <!-- Modal add_user -->
    <div class="modal fade" id="add_User" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="manageUsers.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fname" class="form-label  font-weight-bold">First Name</label>
                            <input name="fname" type="text" class="form-control" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname" class="form-label font-weight-bold">Last Name</label>
                            <input name="lname" type="text" class="form-control" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label font-weight-bold">Email address</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mp" class="form-label font-weight-bold">Password</label>
                            <input name="mp" type="password" class="form-control" id="mp">
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B; ">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal remove_user -->
    <?php
    foreach ($Users as $User) {
    ?>
        <div class="modal fade" id="remove_User<?php echo $User['id_user'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title mx-auto font-weight-bold">Warning!</h3>
                        
                    </div>

                    <div class="modal-body text-center">
                        <form action="../includes/manageUsersFunctions.php" method="post">
                            <input name="Delete_User" type="hidden" class="form-control" id="idUser" value="<?php echo $User['id_user'] ?>">
                            <div class="form-group">
                                <h3>Do you really want to delete the user?</h3>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B;">YES</button>
                                <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Cancel</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <?php }
    ?>

</body>

</html>