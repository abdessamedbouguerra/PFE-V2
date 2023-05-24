<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
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
            $activeMarke = 'home';
            include '../includes/sidebar.php';
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mt-3 mb-3 ">
                <img src="../images/navbarLogo.svg" alt="..." />
                </div>

                <!-- Profile content -->

                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">


                    <div class="row g-0">

                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <h1 class="display-4 font-italic">Welcome to our Online Passage Quizzes!</h1>
                                <p class="lead my-3">Are you ready to put your reading comprehension skills to the test? Look no further! Our website offers a unique and engaging platform for passage quizzes that will challenge and entertain you.

                                    Whether you're a student looking to improve your reading abilities or an avid reader seeking a fun way to explore new literary works, our online passage quizzes are designed to captivate and educate. We have carefully curated a diverse selection of passages from various genres, including fiction, non-fiction, poetry, and more.

                                    Here's how it works: Simply choose a quiz from our extensive collection and immerse yourself in a carefully selected passage. As you read through the text, you'll encounter thought-provoking questions that will challenge your understanding and interpretation of the material. Sharpen your analytical thinking and uncover hidden meanings as you strive to answer each question correctly.

                                    Our quizzes cater to individuals of all skill levels, from beginners to advanced readers. With each quiz, you'll not only test your comprehension skills but also expand your literary knowledge and vocabulary. As you progress, you'll unlock new passages and gain insights into the nuances of different writing styles and genres.

                                    Join our vibrant community of passionate readers and embark on an intellectual journey through the captivating world of literature. Challenge yourself, learn, and have fun all at once! Engage in friendly competition by comparing your scores with friends or other participants, and strive for the top spot on our leaderboard.

                                    Ready to begin? Dive into our collection of passage quizzes and discover the joy of reading while putting your comprehension skills to the test. Start exploring now and unlock a world of knowledge, imagination, and entertainment!

                                    Welcome to a new chapter of interactive learning. Enjoy the adventure!</p>


                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center justify-content-center">
                            <img src="../assets/img/Login_SignUp/ImgLog.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                    </div>

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