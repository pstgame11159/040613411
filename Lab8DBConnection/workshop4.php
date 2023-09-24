<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>


<form>
<input type="text" name="username">
<input type="submit" value="ค้นหา">
</form>



<div style="display:flex">
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
</div>
</div>
</body></html>