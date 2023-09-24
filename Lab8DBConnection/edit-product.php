<?php include "connect.php" ?>

<?php
$stmt = $pdo->prepare("UPDATE product SET pname=?, pdetail=?, price=? WHERE pid=?");


$stmt->bindParam(1, $_POST["pname"]);
$stmt->bindParam(2, $_POST["pdetail"]);
$stmt->bindParam(3, $_POST["price"]);
$stmt->bindParam(4, $_POST["pid"]);
if ($stmt->execute()) 
echo "แก้ไขสินค้า" . $_POST["pname"] . " สำเร็จ";
?>