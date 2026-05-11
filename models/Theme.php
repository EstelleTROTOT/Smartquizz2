<?php

require_once __DIR__ . '/../config/database.php';

class Theme {

    public static function getThemes() {

        global $pdo;

        $sql = "SELECT * FROM themes";

        $request = $pdo->prepare($sql);

        $request->execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);

    }

}