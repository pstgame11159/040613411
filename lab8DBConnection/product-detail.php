<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
if (!empty($_GET))
$value = '%' . $_GET["username"] . '%'; 
$stmt->bindParam(1, $value);
$stmt->execute(); 
?>
<?php while ($row = $stmt->fetch()) : ?>



<h2><?=$row["name"]?></h2>
<h2><?=$row["address"]?></h2>
<h2><?=$row["mobile"]?></h2>
<h2><?=$row["email"]?></h2>

<?php endwhile; ?>
    
</body>
</html>