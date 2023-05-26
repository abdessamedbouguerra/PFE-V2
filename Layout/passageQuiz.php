<?php
include '../includes/functions.php';
session_start();
if (!isset($_SESSION['email'])) {
	header('location:login.php');
}

$id_User = $_SESSION['id_user'];
$quizs = getAllQuizsPublic();
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
			$activeMarke = 'passagequiz';
			include '../includes/sidebar.php';
			?>
			<!-- main  -->
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Available Quizzes to Pass</h1>
					<a class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B;" data-toggle="modal" data-target="#enterQuiz">Participate in Private Quizzes</a>
				</div>


				<!-- main content -->
				<div>
					<!-- list quiz -->
					<div class="row col-12 mt-4">
						<!-- card quiz -->
						<?php
						foreach ($quizs as $quiz) {
						?>
							<div class="col-3 mb-3">
								<div class="card position-relative" style="width: 18rem;">
									<img src="../images/<?php echo $quiz['image'] ?>" class="card-img-top" alt="..." data-toggle="modal" data-target="#popup_<?php echo $quiz['id_quiz'] ?>">
									<div class="card-body d-flex flex-column align-items-center">
										<h5 class="card-title text-center"><?php echo $quiz['title_quiz'] ?></h5>
										<p class="card-text text-center"><?php echo $quiz['quiz_description'] ?></p>
									</div>
								</div>
								<div class="overlay"></div>
							</div>

							<!-- Popup for each card -->
							<div class="modal fade" id="popup_<?php echo $quiz['id_quiz'] ?>" tabindex="-1" role="dialog" aria-labelledby="popupTitle_<?php echo $quiz['id_quiz'] ?>" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-center" id="popupTitle_<?php echo $quiz['id_quiz'] ?>"><?php echo $quiz['title_quiz'] ?></h5>
										</div>
										<div class="modal-body d-flex flex-column align-items-center">
											<img src="../images/<?php echo $quiz['image'] ?>" class="card-img-top" alt="...">
											<p class="text-center"><?php echo $quiz['quiz_description'] ?></p>
											<a href="passQuiz.php?id=<?php echo $quiz['id_quiz'] ?>" class="btn btn-primary">Participate</a>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>

				</div>

			</main>
		</div>
	</div>

	<!-- participate in private quizzes -->
	<div class="modal fade" id="enterQuiz" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalScrollableTitle">Participate in private quizzes </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="passQuiz.php">
						<div class="form-group">
							<h4>for participate in special quiz paste the link:</h4>
						</div>
						<div class="form-group">
							<input name="input_url" type="text" class="form-control" id="url" placeholder="https//exampel.com" required>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; ">Participate</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<!-- Icons -->
	<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
	<script>
		feather.replace()
	</script>
	<!-- Graphs -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

	<!--  -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/bootstrap-icons.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.card').click(function() {
				var targetModalId = $(this).find('img').data('target');
				$(targetModalId).modal('show');
			});
		});
	</script>

</body>

</html>