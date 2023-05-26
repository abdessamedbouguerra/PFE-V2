<?php
include 'functions.php';
$conn = connect();
$idQ = $_POST['idQuiz'];
$requette = "DELETE FROM quiz WHERE id_quiz='$idQ'";
$resultat = $conn->query($requette);
if ($resultat) {
    header('location:../Layout/quizs.php?delete=ok'); // Redirect to quiz page after successful deletion
} else {
    header('location:../Layout/logOut.php'); // Redirect to logout page in case of error
}
?>
