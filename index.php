<?php

session_start();

if(!isset($_SESSION['score'])) {

    $_SESSION['score'] = 0;

}

if(!isset($_SESSION['current_question'])) {

    $_SESSION['current_question'] = 0;

}

require_once __DIR__ . '/controllers/ThemeController.php';
require_once __DIR__ . '/controllers/QuestionController.php';

if(isset($_GET['theme'])) {

    if(!isset($_SESSION['theme_started'])) {

        $_SESSION['score'] = 0;
        $_SESSION['current_question'] = 0;

        $_SESSION['theme_started'] = true;

    }

    $themeId = $_GET['theme'];

    $controller = new QuestionController();

    $controller->show($themeId);

} else {

    unset($_SESSION['theme_started']);

    $controller = new ThemeController();

    $controller->index();

}