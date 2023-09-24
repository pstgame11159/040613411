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

    <div style="padding: 15px;display:flex;">
<img src='member_photo/<?=$row["username"]?>.jpg' width='200'><br>
</div>
<div style="padding: 15px">
ชื่อ <?=$row["username"]?><br>
ชื่อ <?=$row["name"]?><br>
ที่อยู่ : <?=$row["address"]?><br>
Mobie <?=$row["mobile"]?> <br><br>
email <?=$row["email"]?>
</div>

<?php endwhile; ?>
  
</body>
</html>