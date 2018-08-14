<?php

require_once "components/db.php";
require_once "data.php";
require_once "classes.php";

foreach ($books as $book) {
    echo $book->printInfo();
}

?>