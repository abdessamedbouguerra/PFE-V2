<?php //foreach ($quizs as $quiz){ 
                    for ($i=1; $i < 4; $i++) { 
                    //int $i=1;
                    ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?echo $i?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;}?>


//////////

                     <!-- list quiz-->
    <div class="row col-12 mt-4">
        <!-- card quiz -->
        <?php
        foreach ($quizs as $quiz){?>
            
            <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="images/' . $quiz['image'] . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $quiz['title_quiz'] . '</h5>
                    <p class="card-text">' . $quiz['quiz_description'] . '</p>
                    <a href="Layout/passQuiz.php?id=' . $quiz['id_quiz'] . '" class="btn btn-primary">Participate</a>
                </div>
            </div>
        </div>
            
            <?php}?>
    </div> 