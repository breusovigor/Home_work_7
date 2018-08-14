<?php
    require_once "classes.php";
    require_once "components/db.php";

$dbConnection = getConnection();


$books = [];

    $result = $dbConnection->query("SELECT * FROM book ORDER BY sort_order");
    foreach ($result as $book) {
        $books[] = new $book['type']($book);
    }

?>