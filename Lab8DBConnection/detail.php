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
<div style="display:flex">
<?php
$stmt = $pdo->prepare("SELECT * FROM product WHERE pid LIKE ?");
if (!empty($_GET))
$value = '%' . $_GET["pid"] . '%'; 
$stmt->bindParam(1, $value);
$stmt->execute(); 
?>
<?php while ($row = $stmt->fetch()) : ?>
<div style="padding: 15px;display:flex;">
<img src='img/<?=$row["pid"]?>.jpg' width='200'><br>
</div>
<div style="padding: 15px">
<h2><?=$row["pname"]?></h2>
รายละเอียดสินค้า : <?=$row["pdetail"]?><br>
ราคาขาย <?=$row["price"]?> บาท<br><br>
ซื้อวันนี้ลดราคา 10% เหลือ <?=$row["price"]*0.9?> บาท
</div>
<?php endwhile; ?>
</div>   
</body>
</html>