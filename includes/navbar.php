<?php
include 'functions.php';
$quizs = getAllQuizsPublic();

?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="../assets/img/navbar-logo.svg" alt="..." /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (isset($_SESSION['email'])) {
          print'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Layout/profile.php">Profile</a>
        </li>';
        }else{
          print'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="singIn.php">Sing in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="singUp.php">Sing up</a>
        </li>';
        }
        
        ?>
        
      </ul> 
    </div>
  </div>
</nav>