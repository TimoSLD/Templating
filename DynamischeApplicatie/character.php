<?php

require('includes/dbconnect.php');

$query = $conn->prepare("SELECT * FROM characters where id=:id");
$query->execute(['id' => $_GET['id']]);
$result = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informatie <?= $result['name'] ?></title>
</head>
<body>
    <header><h1><?= $result['name'] ?></h1></header>
    <img class="avatar" src="assets/images/<?= $result['avatar']?>">
    <p><?= $result['health']?></p>
    <p><?= $result['attack']?></p>
    <p><?= $result['defense']?></p>
    <p><?= $result['color']?></p>
    <p><?= $result['bio']?></p>
    <button><a href='index.php'>terug gaan</a></button>
    <hr>



    
    <footer>&copy; [Timo Lemmen] 2020</footer>
</body>
</html>

