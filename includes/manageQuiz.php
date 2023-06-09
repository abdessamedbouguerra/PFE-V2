<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../Layout/login.php');
}
$idQ = $_GET['idQ'];
include '../includes/functions.php';
//$quizs = getAllQuizsOfUser($_SESSION['id_user']);
$questions = getAllQuestion($idQ);


$urlQ = getUrlQuiz($idQ);
$titleQ = getTitleQuiz($idQ);


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
<?php include '../includes/NavbarOfContent.php';?>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php 
            $activeMarke = 'quizs';
            include '../includes/sidebar.php'; 
            ?>
            <!-- main Quiz -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo $titleQ ?></h1>
    <!-- url -->
    <div class="input-group" style="width: fit-content;">
        <input class="form-control mr-1" id="url" type="text" value="<?php echo $urlQ ?>">
        <button onclick="copyContent('url')" class="btn btn-sm btn-success">
            <span data-feather="clipboard"></span>
        </button>
    </div>
    <!-- add question -->
    <div>
        <a class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B; " data-toggle="modal" data-target="#addQuestion"><span class="text-white" data-feather="plus-square"></span>Add question</a>
    </div>
</div>


                <!-- alerts -->
                <div>
                    <!-- alert delete -->
                    <?php
                    if (isset($_GET['deleteQuestion']) && $_GET['deleteQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question deleting successfuly
                    </div>';
                    }
                    ?>
                    <!-- alert add -->
                    <?php
                    if (isset($_GET['addQuestion']) && $_GET['addQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question add successfuly
                    </div>';
                    }
                    ?>
                    <!-- alert edit -->
                    <?php
                    if (isset($_GET['edidQuestion']) && $_GET['edidQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question edit successfuly
                    </div>';
                    }
                    ?>
                </div>
                <!-- list question -->
                <div >
                    <table class="table table-borderless">
                        <thead class="table-dark ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title Question</th>
                                <th scope="col">choice 1</th>
                                <th scope="col">choice 2</th>
                                <th scope="col">choice 3</th>
                                <th scope="col">choice 4</th>
                                <th scope="col">answer</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;

                            foreach ($questions as $question) {
                                $i++;

                                ?>
              <tr>
                <th scope="row"><?php echo $i ?></th>
                <td><?php echo $question['title_question'] ?></td>
                <td><?php echo $question['ch1'] ?></td>
                <td><?php echo $question['ch2'] ?></td>
                <td><?php echo $question['ch3'] ?></td>
                <td><?php echo $question['ch4'] ?></td>
                <td><?php echo $question['answer'] ?></td>
                <td>
                    <a class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; " data-toggle="modal" data-target="#editQuestion<?php echo $question['id_question']?>"><span class="text-white" data-feather="edit"></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#remove_question<?php echo $question['id_question'] ?>"><span class="text-white" data-feather="trash-2"></a>
                </td>
              </tr>
                       <?php
                            }
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

    <!-- copyContent  -->
    <script src="../js/copyContent.js"></script>

    <!-- Modal addQuestion -->
    <div class="modal fade" id="addQuestion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../includes/addquestion.php" method="post">
                        <input type="hidden" name="idQ" value="<?php echo  $idQ ?>">
                        <div class="form-group">
                            <input type="text" name="title_question" class="form-control" placeholder="Title of a question." required >
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch1" class="form-control" placeholder="choice 1." required >
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch2" class="form-control" placeholder="choice 2." required >
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch3" class="form-control" placeholder="choice 3." required >
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch4" class="form-control" placeholder="choice 4." required >
                        </div>
                        <div>
                            <select name="answer" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="ch1">choice 1</option>
                                <option value="ch2">choice 2</option>
                                <option value="ch3">choice 3</option>
                                <option value="ch4">choice 4</option>
                            </select>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; ">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal editQuestions -->
    <?php
    
    foreach ($questions as $index => $question) { 

        
        ?>
    <!-- Modal editQuestion -->
    <div class="modal fade" id="editQuestion<?php echo $question['id_question']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="editquestion.php" method="post">
                        <input type="hidden" name="idQ" value="<?php echo  $idQ ?>">
                        <input type="hidden" name="id_question" value="<?php echo  $question['id_question'] ?>">
                        <div class="form-group">
                            <input type="text" name="title_question" class="form-control" value="<?php echo $question['title_question'];?>" placeholder="Title question.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch1" class="form-control" value="<?php echo $question['ch1'];?>" placeholder="choice 1.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch2" class="form-control" value="<?php echo $question['ch2'];?>" placeholder="choice 2.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch3" class="form-control" value="<?php echo $question['ch3'];?>" placeholder="choice 3.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch4" class="form-control" value="<?php echo $question['ch4'];?>" placeholder="choice 4.">
                        </div>
                        <div>
                            <select name="answer" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option <?php echo ($question['answer'] == $question['ch1']) ? 'selected' : ''; ?> value="<?php echo $question['ch1'];?>">choice 1</option>
                                <option <?php echo ($question['answer'] == $question['ch2']) ? 'selected' : ''; ?> value="<?php echo $question['ch2'];?>">choice 2</option>
                                <option <?php echo ($question['answer'] == $question['ch3']) ? 'selected' : ''; ?> value="<?php echo $question['ch3'];?>">choice 3</option>
                                <option <?php echo ($question['answer'] == $question['ch4']) ? 'selected' : ''; ?> value="<?php echo $question['ch4'];?>">choice 4</option>
                            </select>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; ">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php  }

?>
<!-- Modal remove_question -->
<?php
    foreach ($questions as $index => $question) { 
    ?>
        <div class="modal fade" id="remove_question<?php echo $question['id_question'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title mx-auto font-weight-bold">Warning!</h3>
                        
                    </div>

                    <div class="modal-body text-center">
                        <form action="deleteQuestion.php" method="post">
                            <input name="id_Question" type="hidden" class="form-control" id="idQuestion" value="<?php echo $question['id_question'] ?>">
                            <div class="form-group">
                                <h3>Do you really want to delete the Question?</h3>
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