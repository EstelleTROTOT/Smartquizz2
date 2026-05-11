<?php

require_once __DIR__ . '/../models/Question.php';

class QuestionController {

    public function show($themeId) {

        $questions = Question::getQuestionsByTheme($themeId);

        require_once __DIR__ . '/../views/questions.php';

    }

}