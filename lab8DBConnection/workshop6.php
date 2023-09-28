<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(pid) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
    console.log(pid);
var ans = confirm("ต้องการลบสินค้า" + pid); // แสดงกล่องถามผู้ใช ้
if (ans==true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
document.location = "deleteusername.php?username=" + pid; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) 
{
echo "ชื่อ: " . $row ["username"] . "<br>";
echo "<a href='#' onclick='confirmDelete(`". $row["username"] ."`)'>ลบ</a>";
echo "<hr>\n";
}
?>
</body>
</html>