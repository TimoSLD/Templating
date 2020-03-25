<?php 
require("includes/dbconnect.php");

$result = $conn->prepare('SELECT * FROM characters ORDER BY name');
$result->execute();

$count = $result->rowCount();

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dynamische applicatie</title>
</head>
<body>
<header>
<h1> er zijn <?php echo $count ?> characters</h1>
</header>
<?php
    foreach ($result as $row) {
        echo "<img src='assets/images/$row[2]'>
            $row[1]
             $row[3]
             $row[6]
             $row[7]
             <a href='character.php?id=$row[0]'>bekijken</a>
             <hr>";
    }
?>

<footer>&copy; [Timo Lemmen] 2020</footer>
</body>
</html>