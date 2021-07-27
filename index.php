<?php 

$sql = new mysqli('localhost', 'root', '', "xsstest");

$query = "SELECT * FROM `comments`";
$result = $sql->query($query);

$count = 0;
foreach($result as $comment) {
    $count++;
    
    echo "Comentario Nº ".$count. " dice:";
    echo "<p>".$comment['comment']."</p>";
    echo "<p>--------------------------------------------</p>";
}

?>
<hr>
<h1>Postea tu comentario</h1>
<form action="insert.php" method="POST">
    <textarea name="content" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">Enviar comentario</button>
</form>

<form action="reset.php" method="POST">
    <input type="hidden" name="truncate">
    <br>
    <br>
    <button type="submit">Reset DB</button>
</form>