<?php
$sql = new mysqli('localhost', 'root', '', "xsstest");
if (isset($_POST['content'])) {
    $content = $_POST['content'];

    $query = "INSERT INTO `comments` (`id`, `comment`) VALUES (NULL, '".$content."')";

    $result = $sql->query($query);

    if($result){
        header("Location: index.php");
    } else {
        echo $result;
    }
}