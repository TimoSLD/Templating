<?php

require('includes/dbconnect.php');

$query = $conn->prepare("SELECT * FROM characters where id=:id");
$query->execute(['id' => $_GET['id']]);
$result = $query->fetch();

$conn = null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1><?= $result['name'] ?></h1></header>
    <img src="assets/images/<?= $result['avatar']?>">
    <div class= health <?= $result['health']?>>
    <div class= attack <?= $result['attack']?>>
    <div class= defense <?= $result['defense']?>>


    
    <footer>&copy; [Timo Lemmen] 2020</footer>
</body>
</html>

