<?php include "connect.php" ?>
<?php

if($_POST){
        $filename = $_POST["username"].".jpg";
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./member_photo/" . $filename;
        move_uploaded_file($tempname, $folder);

$stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?,?,?)");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["address"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["email"]);
$stmt->execute(); // เริ่มเพิ่มข้อมูล
$username = $pdo->lastInsertId(); // ขอคีย์หลักที่เพิ่มส าเร็จ
header("location: workshop6.php");
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
เพิ่ม User สำเร็จ    <?=$_POST["username"] ;


}
else{

    header("location: workshop6.php");      
}
?>

</body>
</html>