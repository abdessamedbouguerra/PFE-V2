<?php
session_start();
include '../includes/functions.php';
if (!isset($_SESSION['email'])) {
	header('location:login.php');
}
$id_User = $_SESSION['id_user'];

if (isset($_GET['id'])) {
	$idQ = $_GET['id'];
}
if (isset($_POST['input_url'])) {
	$input_url = $_POST['input_url'];
	$conn = connect();
	$requette = "SELECT * FROM quiz WHERE url_quiz='$input_url'";
	$resultat = $conn->query($requette);
	$idQ_tmp = $resultat->fetch();
	$idQ = $idQ_tmp['id_quiz'];
}
$titleQuiz = getTitleQuiz($idQ);
$questions = getAllQuestion($idQ);
$quiz = getQuizById($idQ);
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
	<?php include '../includes/NavbarOfContent.php' ?>
	<div class="container-fluid">
		<div class="row">
			<!-- sidebar -->
			<?php
			$activeMarke = 'passagequiz';
			include '../includes/sidebar.php'
			?>
			<!-- main Quiz -->
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Participation in <?php echo $titleQuiz; ?></h1>

					<!-- countdown -->
					<div class="row">
						<div class="col-sm-12">
							<h1 id="countdown"></h1>
						</div>
					</div>
					<?php
					if (isset($_GET['note'])) {
						$note = $_GET['note'];
						print '
                    <div class="alert alert-success">
                    note is ' . $note . '
                    </div>';
					}
					?>
				</div>
				<div class="container">
					<form id="Quizform" method="post" action="../includes/passQuizFunction.php">
						<input type="hidden" name="id_User" value="<?php echo $id_User; ?>">
						<input type="hidden" name="id_Q" value="<?php echo $idQ; ?>">
						<?php
						// Output each question with choices
						foreach ($questions as $index => $question) {
						?>
							<div class="card mb-3">
								<div class="card-header"><?php echo $index + 1; ?> : <?php echo $question["title_question"]; ?></div>
								<div class="card-body">
									<input type="hidden" name="Question_<?php echo $index; ?>" value="<?php echo $question["id_question"]; ?>">
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index; ?>" value="<?php echo $question["ch1"]; ?>">
											<label class="form-check-label">
												<?php echo $question["ch1"]; ?>
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index; ?>" value="<?php echo $question["ch2"]; ?>">
											<label class="form-check-label">
												<?php echo $question["ch2"]; ?>
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index; ?>" value="<?php echo $question["ch3"]; ?>">
											<label class="form-check-label">
												<?php echo $question["ch3"]; ?>
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index; ?>" value="<?php echo $question["ch4"]; ?>">
											<label class="form-check-label">
												<?php echo $question["ch4"]; ?>
											</label>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
						<input type="hidden" name="number_question" value="<?php echo $index + 1; ?>">
						<button type="submit" class="btn btn-primary">Submit</button>
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
	<!-- countdown scripts -->
	<script>
		// // Get the time from the PHP variable
		var timeString = "<?php echo $quiz['quiz_duration']; ?>";

		// Split the time into hours, minutes, and seconds
		var timeParts = timeString.split(':');
		var hours = parseInt(timeParts[0]);
		var minutes = parseInt(timeParts[1]);
		var seconds = parseInt(timeParts[2]);

		// Set the countdown date by adding the hours, minutes, and seconds to the current date and time
		var countdownDate = new Date();
		countdownDate.setHours(countdownDate.getHours() + hours);
		countdownDate.setMinutes(countdownDate.getMinutes() + minutes);
		countdownDate.setSeconds(countdownDate.getSeconds() + seconds);

		// Update the countdown every second
		var countdown = setInterval(function() {
			// Get the current date and time
			var now = new Date().getTime();

			// Calculate the time remaining
			var distance = countdownDate - now;

			// Calculate days, hours, minutes, and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the countdown in the element with id "countdown"
			document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

			// If the countdown is finished, display a message
			if (distance < 0) {
				document.getElementById('Quizform').submit();
			}
		}, 1000);
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
	<script>
		// const form = document.getElementById('Quizform');

		// form.addEventListener('submit', function(event) {
		// 	// Prevent the default form submission
		// 	event.preventDefault();

		// 	// Perform any additional actions or validations

		// 	// Check if the form has been submitted
		// 	if (form.getAttribute('data-submitted') === 'true') {
		// 		// Form has already been submitted
		// 		const hiddenInput = document.createElement('input');
		// 		hiddenInput.setAttribute('type', 'hidden');
		// 		hiddenInput.setAttribute('name', 'QuizIsDone');
		// 		hiddenInput.setAttribute('value', '1');

		// 		// Append the hidden input field to the form
		// 		form.appendChild(hiddenInput);

		// 		Swal.fire({
		// 			title: 'Successfully',
		// 			text: 'The Passing Quiz successfully.',
		// 			icon: 'success',
		// 			confirmButtonText: 'OK',
		// 			confirmButtonColor: '#28282B',
		// 			timer: 5000
		// 		}).then(() => {
		// 			// Further actions after Swal.fire is closed
		// 		});

		// 		return; // Stop further processing
		// 	}
		// });
	</script>

</body>

</html>