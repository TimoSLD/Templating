<?php 
require("includes/dbconnect.php");

$result = $conn->prepare('SELECT * FROM characters ORDER BY name');
$result->execute();

$count = $result->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dynamische applicatie</title>
</head>
<body>
<header>
<h1>alle <?php echo $count ?> characters</h1>
</header>
<?php
    foreach ($result as $row) {
        echo "<img src='assets/images/$row[2]'><br>
            $row[1]<br>
             $row[3]<br>
             $row[6]<br>
             $row[7]<br>
             <button><a href='character.php?id=$row[0]'>bekijken</a></button>
             <hr>";
    }
?>

<footer>&copy; [Timo Lemmen] 2020</footer>
</body>
</html>