<?php

require_once __DIR__ . '/../config/database.php';

class Question {

    public static function getQuestionsByTheme($themeId) {

        global $pdo;

        $sql = "SELECT * FROM questions WHERE theme_id = ?";

        $request = $pdo->prepare($sql);

        $request->execute([$themeId]);

        return $request->fetchAll(PDO::FETCH_ASSOC);

    }

}