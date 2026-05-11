<?php

require_once __DIR__ . '/../models/Theme.php';

class ThemeController {

    public function index() {

        $themes = Theme::getThemes();

        require_once __DIR__ . '/../views/home.php';

    }

}