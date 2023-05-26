<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quizzes</h1>
        <!-- add quiz -->
        <div>

            <a class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B; "data-toggle="modal" data-target="#addQuiz"><span class="text-white" data-feather="plus-square"></span>Add an quiz</a>
        </div>
    </div>
    <!-- alerts -->
    <div>
        <!-- alert delete -->
        <?php
        if (isset($_GET['delete']) && $_GET['delete'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz deleting successfuly
                    </div>';
        }
        ?>
        <!-- alert add -->
        <?php
        if (isset($_GET['addQ']) && $_GET['addQ'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz add successfuly
                    </div>';
        }
        ?>
        <!-- alert edit -->
        <?php
        if (isset($_GET['edidQ']) && $_GET['edidQ'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz edit successfuly
                    </div>';
        }
        ?>
    </div>
    <!-- list quiz -->
    <div>
        <table class="table table-borderless">
            <thead class="table-dark ">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title quiz</th>
                    <th scope="col">Description</th>
                    <th scope="col">URL</th>
                    <th scope="col">Situation quiz</th>
                    <th scope="col">Number of questions</th>
                    <th scope="col">Quiz duration</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($quizs as $quiz) {
                    $i++;
                    $idEL = "url" . $i;
                    if ($quiz['situation_quiz'] == 0) {
                        $situation_quiz = 'public';
                    } else {
                        $situation_quiz = 'private';
                    } ?>


                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $quiz['title_quiz'] ?></td>
                        <td><?php echo $quiz['quiz_description'] ?></td>
                        <td>
                            <div class="input-group">
                                <input class="form-control mr-1" id="url<?php echo $i ?>" type="text" value="<?php echo $quiz['url_quiz'] ?>">
                                <button onclick="copyContent('<?php echo $idEL ?>')" class="btn btn-sm btn-success">
                                    <span data-feather="clipboard"></span>
                                </button>
                            </div>
                        </td>
                        <td><span class="badge badge-<?php echo ($situation_quiz == 'public') ? 'success' : 'primary'; ?> rounded-pill d-inline"><?php echo $situation_quiz ?></span></td>
                        <td><?php echo numerQuestionQuiz($quiz['id_quiz']) ?></td>
                        <td><?php echo $quiz['quiz_duration'] ?></td>
                        <td>
                            <a class="btn btn-danger" style="background-color: #28282B; border-color: #28282B;" data-toggle="modal" data-target="#editQuiz<?php echo $quiz['id_quiz'] ?>"><span data-feather="edit" class="text-white"></span></a>
                            <a class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; " href="../includes/manageQuiz.php?idQ=<?php echo $quiz['id_quiz'] ?>"><span data-feather="sliders"></a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#remove_quiz<?php echo $quiz['id_quiz'] ?>"><span class="text-white" data-feather="trash-2"></a>
                            <a class="btn btn-danger" style="background-color: #28282B; border-color: #28282B; " href="../includes/view_result.php?idQ=<?php echo $quiz['id_quiz'] ?>"><span data-feather="users"></span> Show candidates</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</main>