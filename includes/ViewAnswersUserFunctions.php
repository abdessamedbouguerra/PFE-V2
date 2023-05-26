<?php 
include '../includes/functions.php';
function getAnswersUser($id_ueser,$id_quiz,$idPassQuiz){
    $conn = connect();
    $requette ="SELECT * FROM answers_users WHERE id_user='$id_ueser' AND id_quiz='$id_quiz' AND id_pass_quiz='$idPassQuiz'";
    $resultat =$conn->query($requette);
    $answers =$resultat->fetchAll();
    return $answers;
}
function getAnswersSlected($id_question,$id_ueser,$id_quiz,$idPassQuiz){
    $AnswersUser=getAnswersUser($id_ueser,$id_quiz,$idPassQuiz);
    foreach ($AnswersUser as $AnswerUser) {
        if ( $AnswerUser['id_question']==$id_question) {
            $AnswersSlected=$AnswerUser['answer'];
        }
    }
    return $AnswersSlected;
}
function getCaseAnswersSlected($id_question,$id_ueser,$id_quiz,$idPassQuiz){
    $AnswersUser=getAnswersUser($id_ueser,$id_quiz,$idPassQuiz);
    foreach ($AnswersUser as $AnswerUser) {
        if ( $AnswerUser['id_question']==$id_question) {
            $AnswersCase=$AnswerUser['answer_case'];
        }
    }
    return $AnswersCase;
}


$requette = "SELECT  pass_quiz.id_pass, pass_quiz.id_quiz, quiz.title_quiz, quiz.quiz_description, pass_quiz.note , pass_quiz.date   FROM pass_quiz INNER JOIN quiz ON quiz.id_quiz=pass_quiz.id_quiz WHERE pass_quiz.id_user = $id_U";

?>