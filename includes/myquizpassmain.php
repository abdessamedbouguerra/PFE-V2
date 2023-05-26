<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My resutls</h1>
    </div>
    <!-- list quiz -->
    <div>
        <table class="table table-borderless">
            <thead class="table-dark ">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title quiz</th>
                    <th scope="col">Description</th>
                    <th scope="col">Note</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($quizs as $quiz) {
                    $i++;
                    ?>
                    
                              <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo $quiz['title_quiz']?></td>
                                <td><?php echo $quiz['quiz_description']?></td>
                                <td><?php echo $quiz['note']?></td>
                                <td><?php echo $quiz['date']?></td>
                                <td>
                                <a class="btn btn-danger text-white" style="background-color: #28282B; border-color: #28282B;" href="../includes/ViewAnswersUser.php?id_Quiz=<?php echo $quiz['id_quiz']?>&id_user=<?php echo $_SESSION['id_user']?>&id_passQuiz=<?php echo $quiz['id_pass']?>&activeMarke=mypassage"><span class="text-white" data-feather="file-text"></span>view answers</a>
                                </td>
                              </tr>
                                       
               <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</main>