<?php if ($_SESSION['role_admin']==2) {
    session_start();
    session_unset();
    session_destroy();
    header('location:../Layout/login.php?role=blocked');
}?>
<nav class="col-md-2 mt-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'home') ? 'active' : ''; ?>" href="../Layout/homePage.php">
                                <span data-feather="home"></span>
                                Home 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'profile') ? 'active' : ''; ?>" href="../Layout/profile.php">
                                <span data-feather="user"></span>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'quizs') ? 'active' : ''; ?>" href="../Layout/quizs.php">
                                <span data-feather="file"></span>
                                Quizzes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'passagequiz') ? 'active' : ''; ?>" href="../Layout/passageQuiz.php">
                                <span data-feather="file-minus"></span>
                                Passage Quiz
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'mypassage') ? 'active' : ''; ?>" href="../Layout/myquizpass.php">
                                <span data-feather="file-text"></span>
                                My passage
                            </a>
                        </li>
                        <?php if ($_SESSION['role_admin']==1) {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'manageusers') ? 'active' : ''; ?>" href="../Layout/manageUsers.php">
                                <span data-feather="bar-chart-2"></span>
                                Manage Users
                            </a>
                        </li>
                        <?php } ?>
                        
                    </ul>

                </div>
            </nav>