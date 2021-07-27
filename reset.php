<?php

$sql = new mysqli('localhost', 'root', '', "xsstest");

if (isset($_POST['truncate'])) {
    $query = "TRUNCATE `xsstest`.`comments`";

    $return = $sql->query($query);


    if ($return) {
        header("Location: index.php");
    } else {
        echo $return;
    }
}