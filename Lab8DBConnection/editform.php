<?php include "connect.php" ?>
<?php



$stmt = $pdo->prepare("SELECT * FROM product WHERE pid = ?");
$stmt->bindParam(1, $_GET["pid"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="edit-product.php" method="post">
<input type="hidden" name="pid" value="<?=$row["pid"]?>">

ชื่อสินค้า: <input type="text" name="pname" value="<?=$row["pname"]?>"><br>
รายละเอียดสินค้า : <br>
<textarea name="pdetail" rows="3" cols="40"><?=$row["pdetail"]?></textarea><br>
ราคา: <input type="number" name="price" value="<?=$row["price"]?>"><br>
<input type="submit" value="แก้ไขสนค้า">
</form>
</body>
</html>