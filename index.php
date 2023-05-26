<?php
session_start();
include 'includes/functions.php';
$quizs = getAllQuizsPublic();
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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Quizzes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <?php
                    if (!isset($_SESSION['email'])) {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="Layout/login.php">Login & sign Up</a></li>
                    <?php
                    }
                    else
                    {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="Layout/homePage.php">dashboard</a></li>
                    <?php
                    
                }
                    ?>

                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Quizy!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">

                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Public Quizzes</h4>
                    <p class="text-muted">You can create or enter Public quizzes..</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Private Quizzes</h4>
                    <p class="text-muted">You can create or enter private quizzes.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quizzes</h2>
            </div>
            <div class="row">
                <?php
                foreach ($quizs as $index => $quiz) {
                ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $index ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="images/<?php echo $quiz['image'] ?>" alt="..." />
                            </a>
                            <div class="quizs-caption">
                                <div class="quizs-caption-heading"><?php echo $quiz['title_quiz'] ?></div>
                                <div class="quizs-caption-subheading text-muted"><?php echo $quiz['quiz_description'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">


                    <div class="row g-0">

                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <p class="lead my-3 text-white">Are you ready to put your reading comprehension skills to the test? Look no further! Our website offers a unique and engaging platform for passage quizzes that will challenge and entertain you.

                                    Whether you're a student looking to improve your reading abilities or an avid reader seeking a fun way to explore new literary works, our online passage quizzes are designed to captivate and educate. We have carefully curated a diverse selection of passages from various genres, including fiction, non-fiction, poetry, and more.

                                    Here's how it works: Simply choose a quiz from our extensive collection and immerse yourself in a carefully selected passage. As you read through the text, you'll encounter thought-provoking questions that will challenge your understanding and interpretation of the material. Sharpen your analytical thinking and uncover hidden meanings as you strive to answer each question correctly.

                                    Our quizzes cater to individuals of all skill levels, from beginners to advanced readers. With each quiz, you'll not only test your comprehension skills but also expand your literary knowledge and vocabulary. As you progress, you'll unlock new passages and gain insights into the nuances of different writing styles and genres.

                                    Join our vibrant community of passionate readers and embark on an intellectual journey through the captivating world of literature. Challenge yourself, learn, and have fun all at once! Engage in friendly competition by comparing your scores with friends or other participants, and strive for the top spot on our leaderboard.

                                    Ready to begin? Dive into our collection of passage quizzes and discover the joy of reading while putting your comprehension skills to the test. Start exploring now and unlock a world of knowledge, imagination, and entertainment!

                                    Welcome to a new chapter of interactive learning. Enjoy the adventure!</p>


                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center justify-content-center">
                            <img src="assets/img/Login_SignUp/ImgLog.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>salah eddine Megdoud </h4>
                        <p class="text-muted">Software Devloper</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="salah eddine Megdoud  Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="salah eddine Megdoud  Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/salah-eddine-megdoud/" aria-label="salah eddine Megdoud  LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Azi Ala-Eddine</h4>
                        <p class="text-muted">Software Devloper</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Azi Ala-Eddine Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Azi Ala-Eddine Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/azialaeddine/" aria-label="Azi Ala-Eddine LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Abdessamed Bouguerra</h4>
                        <p class="text-muted">Software Devloper</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Abdessamed Bouguerra Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Abdessamed Bouguerra Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/abdessamed-bouguerra-894071268/" aria-label="Abdessamed Bouguerra LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Quizy 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <?php
    foreach ($quizs as $index => $quiz) {
    ?>
        <!-- Portfolio item <?php echo $index ?> modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $index ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $quiz['title_quiz'] ?></h2>
                                    <img class="img-fluid d-block mx-auto" src="images/<?php echo $quiz['image'] ?>" alt="..." />
                                    <p><?php echo $quiz['quiz_description'] ?></p>
                                    <a class="btn btn-primary btn-xl text-uppercase" href="Layout/passQuiz.php?id=<?php echo $quiz['id_quiz'] ?>">Participate in the quiz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <!-- login and sign up models -->
    <div class="login-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>